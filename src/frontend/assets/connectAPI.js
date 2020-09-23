// start api connection
// document.getElementById("yourId").innerHTML = your temp value here

fetch('https://repl.it/@cmorningstar79/proj-separate-team-blue#src/backend/backend.py')
.then(response => response.json())
.then(data => document.querySelector('#celsius').innerHTML = data.Celsius)

