// start api connection

function getCTemp()
{
var ctemp = parseInt( document.getElementById('userCInput').value, 10 );
fetch('https://testbackend-1.cmorningstar79.repl.co/c?cTemp=' + ctemp)
.then(response => response.json())
.then(data => document.querySelector('#celsius').innerHTML = data.Fahrenheit)
}

function getFTemp()
{
var ftemp = parseInt( document.getElementById('userFInput').value, 10 );
fetch('https://testbackend-1.cmorningstar79.repl.co/f?fTemp=' + ftemp)
.then(response => response.json())
.then(data => document.querySelector('#fahrenheit').innerHTML = data.Celsius)
}
