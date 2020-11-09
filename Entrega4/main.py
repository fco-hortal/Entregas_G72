from flask import Flask, json
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

@app.route('/users:<int:uid>')
def get_user_id(uid):
    usuario = list(db.usuarios.find({"uid":uid},{"_id":0}))
    mensajes = list(db.mensajes.find({"sender":uid},{"_id":0}))
    return json.jsonify(usuario + mensajes)

@app.route('/text-search')
def get_textSearch(body):
    pass

if __name__ == '__main__':
    app.run(debug=True)