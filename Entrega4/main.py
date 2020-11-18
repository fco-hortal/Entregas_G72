from flask import Flask, json, request
from pymongo import MongoClient

USER = "grupo72"
PASS = "grupo72"
DATABASE = "grupo72"
PORT = 27017

URL = f"mongodb://{USER}:{PASS}@gray.ing.puc.cl/{DATABASE}?authSource=admin"
client = MongoClient(URL, PORT)

db = client["grupo72"]

app = Flask(__name__) 

@app.route('/users')
def get_users():
    usuarios = list(db.usuarios.find({},{"_id":0}))
    return json.jsonify(usuarios)

@app.route('/users/<int:uid>')
def get_user_id(uid):
    usuario = list(db.usuarios.find({"uid":uid},{"_id":0}))
    mensajes = list(db.mensajes.find({"sender":uid},{"_id":0}))
    return json.jsonify(usuario + mensajes)

REQUEST_KEYS = ["desired","required","forbidden", "userId"]

@app.route('/text-search') #FALTA HACER A PRUEBA DE ERRORES E IMPUTS VACIOS
def text_search():
    query = {key: request.json[key] for key in REQUEST_KEYS}
    
    db.mensajes.create_index([('message', 'text')])

    desired, required, forbidden, userId = "", "", "", ""

    for item in query["desired"]:
        desired = desired + " " + str(item)
    for item in query["required"]:
        required = required + " \"" + str(item) + "\""
    for item in query["forbidden"]:
        forbidden = forbidden + " -" + str(item)
    req = desired + required + forbidden

    response = list(db.mensajes.find({"$text": {"$search": req[1:]}},{"_id":0}))
    return json.jsonify(response)


@app.route('/messages/<int:uid>, methods=['DELETE']')
def delete_msg():
    id = request.json['id']
    db.mensajes.remove({'id', id})
    return json.jsonify({"success": True})
if __name__ == '__main__':
    app.run(debug=True)