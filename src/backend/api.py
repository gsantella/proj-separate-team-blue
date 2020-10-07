from flask import Flask
from flask import json
from flask import request

app = Flask('app')

@app.route('/api/f')
def convertToC():
  fTemp = request.args['fTemp']
  cTemp = (int(fTemp) - 32) * 5/9
  cTemp = round(cTemp,2)
  data = {
  "Celsius " : cTemp
  }
  return json.jsonify(data)

@app.route('/api/c')
def convertToF():
  cTemp = request.args['cTemp']
  fTemp = (int(cTemp) * 9/5) + 32
  fTemp =  round(fTemp,2)
  data = {
  "Fahrenheit " : fTemp
  }
  return json.jsonify(data)
