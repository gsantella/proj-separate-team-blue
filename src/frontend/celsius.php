<html>
  <body>
    <form action="https://repl.it/@cmorningstar79/proj-separate-team-blue#src/backend/backend.py" method="post" align="center">
      <h1> Celsius <br>Converter </h1> <br>
	    <p>This will convert celsius to farenheit</p>
	    <input type="text" id="userCInput" value="0">
      <br><br>
      <button type="button" onclick="getCTemp()">Submit</button>
      <script>
        function getCTemp()
        {
        var ctemp = parseInt( document.getElementById('userCInput').value, 10 );
        document.getElementById('ctemp').innerHTML = ctemp;
        }
      </script>
      <br>
      Results:
      <script src="connectAPI.js"></script>
      <div id="celsius">
        <div id=ctemp></div>
      </div>
    </form>
  </body>
</html> 