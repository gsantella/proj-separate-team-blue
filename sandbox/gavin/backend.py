from flask import Flask
from flask import json
from flask_cors import CORS
from flask import request


#                        WIP 


app = Flask('app')
cors = CORS(app)

@app.route('/f')
def convertToC():
  fTemp = request.args['fTemp']
  cTemp = (int(fTemp) - 32) * 5/9
  return "Celsius: " + str(cTemp)

@app.route('/c')
def convertToF():
  cTemp = request.args['cTemp']
  fTemp = (int(cTemp) * 9/5) + 32
  return "Fahrenheit: " + str(fTemp)
  
  

app.run(host='0.0.0.0', port=8080)