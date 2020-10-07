<html>
  <body>
    <form action="https://repl.it/@cmorningstar79/proj-separate-team-blue#src/backend/backend.py" method="post" align="center">
      <h1> Celsius <br>Converter </h1> <br>
	    <p>This will convert celsius to fahrenheit</p>
	    <input type="text" id="userCInput" value="0">
      <br><br>
      <script src="connectAPI.js"></script>
      <button type="button" onclick="getCTemp()">Submit</button>
      <br>
      Results:
      <div id="celsius">
        <div id=ctemp></div>
      </div>
    </form>
  </body>
</html> 