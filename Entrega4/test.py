from flask import Flask, json
from pymongo import MongoClient

USER = "grupo72"
PASS = "grupo72"
DATABASE = "grupo72"

URL = f"mongodb://{USER}:{PASS}@gray.ing.puc.cl/{DATABASE}?authSource=admin"
client = MongoClient(URL)

db = client["grupo72"]

app = Flask(__name__)

@app.route('/')
def hello_world():
    return 'Hello qweqweq!'

if __name__ == '__main__':
    app.run(debug=True)