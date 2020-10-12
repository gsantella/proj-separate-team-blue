<html>
   <head>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/styles.min.css?h=51a3dc46be9b9f91714755d28e0cc151">
   </head>
   <body>
      <form action="insert.php" method="post" align="center">
         <h1> Fahrenheit Converter </h1>
         <br>
         <p>This will convert fahrenheit to celsius</p>
         <input type="text" id="userFInput" value="0">
         <br><br>
         <script src="connectAPI.js"></script>
         <button type="button" onClick="getFTemp()">Submit</button>
         <br>
         Results:
         <div id="fahrenheit">
            <div id="ftemp"></div>
         </div>
      </form>
   </body>
</html>