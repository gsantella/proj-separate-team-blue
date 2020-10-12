<!DOCTYPE html>
<html lang="en">
   <head >
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
      <title>Temperture Converter</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/styles.min.css?h=51a3dc46be9b9f91714755d28e0cc151">
   </head>
   <body style="background-image: url('bg.jpg');">
      <header >
         <div id="navbarHeader" class="collapse bg-dark">
            <div class="container">
               <div class="row">
                  <div class="col-sm-8 col-md-7 py-4">
                     <!-- Start: h4 about -->
                     <h4 class="text-white">About</h4>
                     <!-- End: h4 about -->
                     <!-- Start: paragraph -->
                     <p class="text-muted">This page contains a Fahrenheit to Celsius Converter and a Celsius to Farenheit Converter. This was made using java script, python, and html/css</p>
                  </div>
                  <div class="col-sm-4 offset-md-1 py-4" >
                     <!-- Start: h4 contact -->
                     <h4 class="text-white">Contact</h4>
                     <!-- End: h4 contact -->
                     <!-- Start: lists unordered -->
                     <ul class="list-unstyled">
                        <li><a href="https://github.com/gsantella/proj-separate-team-blue" class="text-white">Fork this Project on GitHub</a></li>
                     </ul>
                     <!-- End: lists unordered -->
                  </div>
               </div>
            </div>
         </div>
         <div class="navbar navbar-dark bg-dark shadow-sm">
            <div class="container d-flex justify-content-between"><a class="navbar-brand d-flex align-items-center" href="#"><i class=""></i><strong>&nbsp;</strong></a><button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader"
               aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-navicon"></i></button></div>
         </div>
      </header>
      <!-- Farenheit Convert Box -->
      <div class="album py-5">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="card mb-4 shadow-sm">
                        <!-- File for Convert Box Box -->
                     <?php include('./celsius.php') ?>
                     <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                           <div class="btn-group">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      <!-- Celsius Convert Box -->
         <div class="col-md-4">
            <div class="card mb-4 shadow-md">
              <!-- File for Convert Box Box -->
               <?php include('./farenheit.php') ?>
               <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center">
                     <div class="btn-group">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="text-muted">
         <div class="container">
            <br><br><br>
            <p>Made for Guido's Software Developement Class</p>
            <p>This was made by project team blue
            <p>
            <p>Frontend: Scott<br>
               Middle: Caleb<br>
               Backend/API: Gavin
            </p>
         </div>
      </footer>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
   </body>
</html>