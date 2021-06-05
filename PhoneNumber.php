<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Vaccine Watch</title>
    <style>
        nav{
          background: rgb(66,245,190);
          background: linear-gradient(90deg, rgba(66,245,190,1) 55%, rgba(40,204,183,1) 100%);
        }
      </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <a class="navbar-brand" href="#">
          <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          VACCINE WATCH
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Register</a>
            </li>
          </ul>
        </div>
      </nav>

    <br>
    <br>
    <br>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 d-none d-lg-block">
            <div class="card-transparent mb-3">
            <img src="img/bg.png" class="card-img-top" alt="vaccine_animation" height="400px" width="150px">
            <div class="card-body">
                <h5 class="card-title text-center"><b>Go Corona Go!</b></h5>
                <p class="card-text text-center"><b>Vaccination is the great strategy for the success of public health<br>Vaccinate yourself and help us live a normal life</b></p>
            </div>
        </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
            <br><br>
            <br><br>
            <br><br>
            <div class="card mb-3 text-center">
            <h5 class="card-header">LOGIN</h5>
            <div class="card-body">
                
                <div class="form-group">
                    <label for="number">Mobile Number</label>
                    <input type="mobile" class="form-control" id="number" aria-describedby="mnohelp" placeholder="9XXXXXXXX1" maxlength="10">
                    <small id="mnohelp" class="form-text text-muted">We'll never share your mobile number with anyone else.</small>
                    <div id="recaptcha-container"></div>
                </div>
                <button type="submit" class="btn btn-primary" onclick="phoneAuth();">GET OTP</button>
                
                
            </div>
            </div>
        </div>
        
        </div>
    </div>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.4/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.4/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
    apiKey: "AIzaSyCn6flehZ0axRDWT5PNjk4M2XYPH-zAgpg",
    authDomain: "vaccinewatch-777ee.firebaseapp.com",
    projectId: "vaccinewatch-777ee",
    storageBucket: "vaccinewatch-777ee.appspot.com",
    messagingSenderId: "311825541274",
    appId: "1:311825541274:web:b9ee2b1d7a9d893f3c1723",
    measurementId: "G-W4BQQ0GJFS"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>







