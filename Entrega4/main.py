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

#Implementamos una manera de visualizar los mensajes
@app.route('/message')
def get_msg():
    mensajes = list(db.mensajes.find({},{"_id":0}))
    return json.jsonify(mensajes)

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
    mayor = 0
    mensajes = list(db.mensajes.find({},{"_id":0}))
    for i in mensajes:
        if i["mid"] > mayor:
            mayor = i["mid"]

    data = {key: request.json[key] for key in POST_KEYS}
    data['mid'] = mayor + 1
    if data['message'] == '' or data['message'] is None:
        return json.jsonify({"success": False})

    elif isinstance(data['sender'], int) == False or data['sender'] is None:
        return json.jsonify({"success": False})

    elif isinstance(data['receptant'], int) == False or data['receptant'] is None:
        return json.jsonify({"success": False})
    
    
    if isinstance(data['lat'], float) == False or data['lat'] is None:
        return json.jsonify({"success": False})
    
    if isinstance(data['long'], float) == False or data['long'] is None:
        return json.jsonify({"success": False})

    j = data['date']
    x = j.split('-')
    

    

    


    result = db.mensajes.insert_one(data)

    return json.jsonify({"success": True})
if __name__ == '__main__':
    app.run(debug=True)