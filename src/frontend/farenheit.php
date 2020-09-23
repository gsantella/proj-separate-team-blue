<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=51a3dc46be9b9f91714755d28e0cc151">
</head>
<body>

<form action="insert.php" method="post" align="center">
	<h1> Farenheit Converter </h1> <br>
	<p>This will convert farenheit to celsius</p>
	<input type="text" id="userFInput" value="0">
  <br><br>
	
    <button type="button" onclick="getFTemp()">Submit</button>
    <script>
      function getFTemp()
      {
        var ftemp = parseInt( document.getElementById('userFInput').value, 10 );
        document.getElementById('ftemp').innerHTML = ftemp;
      }
    </script>
    <br>
    Results:
    <div id="ftemp"></div>
</form>

</body>
</html> 