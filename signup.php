<!DOCTYPE html>
<?php
require 'common.php';
if (isset($_SESSION['email'])) {   header('location: home.php'); } 
?>

<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Signup</title>
    </head>
    <body>
        
        <?php
        include 'header.php';
        ?>
        
        <br><br><br><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-2">
                    <img src="img/m6.jpg">
                </div>
                <div class="col-xs-4 col-xs-offset-1">
                    <h1><strong>SIGN UP</strong></h1>
                    <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" id="transcript1" class="form-control" name="name" placeholder="Name" required="true">
                            
                                </div>
                                <div class="col-xs-2">
                                    <img style="width: auto;height: 30px" onclick="startDictation1()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/>
                        
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" id="transcript2" class="form-control" name="email" placeholder="Email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        
                                </div>
                                <div class="col-xs-2">
                                    <img style="width: auto;height: 30px" onclick="startDictation2()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/>
                        
                                </div>
                                
                            </div>
                         </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" id="transcript3" class="form-control" name="password" placeholder="Password" required = "true" pattern=".{6,}">
                            
                                </div>
                                <div class="col-xs-2">
                                    <img style="width: auto;height: 30px" onclick="startDictation3()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/>
                        
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" id="transcript4" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10,}">
                                </div>
                                <div class="col-xs-2">
                                    <img style="width: auto;height: 30px" onclick="startDictation4()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/>
                        
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" id="transcript5" class="form-control" name="city" placeholder="City" required="true">
                                </div>
                                <div class="col-xs-2">
                                    <img style="width: auto;height: 30px" onclick="startDictation5()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/>
                        
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" id="transcript6" class="form-control" name="address" placeholder="Address" required="true">
                                </div>
                                <div class="col-xs-2">
                                    <img style="width: auto;height: 30px" onclick="startDictation6()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg"/>
                        
                                </div>
                                
                            </div>
                            
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        
                    </form>
                </div>
            </div>
        </div>
        
        
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
               <?php
                       include 'footer.php';
                       ?>
        </nav>
            
        
        
</body>
</html>

<script>
  function startDictation1() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript1').value
                                 = e.results[0][0].transcript;
        recognition.stop();
       
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

<script>
  function startDictation2() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript2').value
                                 = e.results[0][0].transcript;
        recognition.stop();
       
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

<script>
  function startDictation3() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript3').value
                                 = e.results[0][0].transcript;
        recognition.stop();
       
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

<script>
  function startDictation4() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript4').value
                                 = e.results[0][0].transcript;
        recognition.stop();
       
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

<script>
  function startDictation5() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript5').value
                                 = e.results[0][0].transcript;
        recognition.stop();
       
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>

<script>
  function startDictation6() {

    if (window.hasOwnProperty('webkitSpeechRecognition')) {

      var recognition = new webkitSpeechRecognition();

      recognition.continuous = false;
      recognition.interimResults = false;

      recognition.lang = "en-US";
      recognition.start();

      recognition.onresult = function(e) {
        document.getElementById('transcript6').value
                                 = e.results[0][0].transcript;
        recognition.stop();
       
      };

      recognition.onerror = function(e) {
        recognition.stop();
      }

    }
  }
</script>


