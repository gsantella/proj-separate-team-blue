# start api connection

fetch('https://run.mocky.io/v3/5b20313a-a0c3-4ac2-834e-f3d9a642704c')
.then(response => response.json())
.then(data => document.querySelector('#placeholder').innerHTML = data.name)