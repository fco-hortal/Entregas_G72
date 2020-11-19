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



@app.route('/text-search') #FALTA HACER A PRUEBA DE ERRORES E INPUTS VACIOS
def text_search():
    REQUEST_KEYS = []
    if "desired" in request.json.keys():
        REQUEST_KEYS.append("desired")
    if "required" in request.json.keys():
        REQUEST_KEYS.append("required")
    if "forbidden" in request.json.keys():
        REQUEST_KEYS.append("forbidden")
    if "userId" in request.json.keys():
        REQUEST_KEYS.append("userId")

    query = {key: request.json[key] for key in REQUEST_KEYS}
    
    db.mensajes.create_index([('message', 'text')])
    desired, required, forbidden, userId = "", "", "", ""

    if 'desired' in query.keys():
        for item in query["desired"]:
            desired = desired + " " + str(item)
    if 'required' in query.keys():
        for item in query["required"]:
            required = required + " \"" + str(item) + "\""
    if 'forbidden' in query.keys():
        for item in query["forbidden"]:
            forbidden = forbidden + " -" + str(item)
    if 'userId' in query.keys():
        userId = query["userId"]
    req = desired + required + forbidden

    if len(req) == 0 and userId == "":
        response = list(db.mensajes.find({},{"_id":0}))
    elif userId != "":
        response = list(db.mensajes.find({"$text": {"$search": req[1:]}, "sender": userId},{"_id":0}))
    else:
        response = list(db.mensajes.find({"$text": {"$search": req[1:]}},{"_id":0}))
    return json.jsonify(response)

#Implementamos una manera de visualizar los mensajes
@app.route('/message')
def get_msg():
    usuarios = list(db.mensajes.find({},{"_id":0}))
    return json.jsonify(usuarios)

@app.route('/message/<int:mid>', methods=['DELETE'])
def delete_msg(mid):
    mensaje = list(db.mensajes.find({"mid":mid}))
    if mensaje == []:
        return("Error. No existe el mensaje que quiere borrar.")
    else:
        db.mensajes.remove({'mid':mid})
        return json.jsonify({"success": True})

POST_KEYS = ['message', 'sender', 'receptant', 'lat', 'long', 'date']

@app.route('/messages', methods=['POST'])
def post_msg():
    data = {key: request.json[key] for key in POST_KEYS}
    data['mid'] = 1
    result = db.mensajes.insert_one(data)

    return json.jsonify({"success": True})
if __name__ == '__main__':
    app.run(debug=True)