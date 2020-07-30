
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>E- Store</title>
    <style>
        img{
            width: auto;
            height: 40px;
            float: left;
        }
        
        
    </style>
   
   
    
  </head>
  <body>
    <?php
     include 'header.php';
     ?>
      
         
      <br><br><br>
     
      
      <div class="container">
          <div class="row">
              <div class="col-xs-10">
                  <h2>LIVE SUPPORT</h2>
                  <p>24 hours | 7 days a week | 365 days a year Live Technical Support</p><br>
                  <p style="text-align: left;">It is a long established fact that a reader will be distracted by the readable content of  
                  a page when looking at its layout. The point of using Lorem lpsum is that it has a more-or-less normal distribtion
                  of letters. There are many variations of passages of Lorem lpsum available, but the majority have suffered alteration in some
                  form, by injected humour, or randomised words which dom't even look slightly believable. If you are going to use a passage 
                  of Lorem lpsum, you need to be sure there isn't anything embarassing hidden in the middle of text.</p>
              </div>
              <div class="col-xs-2">
                 
                  <img style="width:auto; height: 300px" src="img/liv_supp.png">
                  
              </div>
          </div>
      </div>
      
      <br><br><br>
      <div class="container">
          <div class="row">
              <div class="col-xs-8">
                  <form method="POST" action="contact_message.php">
                      
                      <h2>CONTACT US</h2>
                        <div class="form-group">
                            
                            <label for="name">Name:</label>
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" class="form-control" id="transcript1" name="name" required = "true">
                                    
                            
                                </div>
                                <div class="col-xs-2">
                                    <img onclick="startDictation1()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg" />
                                </div>
                                
                            </div>
                           
                        </div>
                        
                        <div class="form-group">
                            
                            <label for="email">Email:</label>
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" class="form-control" id="transcript2" name="email" required = "true">
                                                          
                                </div>
                                <div class="col-xs-2">
                                    <img onclick="startDictation2()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg" />
                                </div>
                                
                            </div>
                           
                        </div>
                      
                       <div class="form-group">
                            
                            <label for="message">Message:</label>
                            <div class="row">
                                <div class="col-xs-10">
                                    <input type="text" class="form-control" id="transcript3" name="message" required = "true">
                                    
                            
                                </div>
                                <div class="col-xs-2">
                                    <img onclick="startDictation3()" src="https://www.dolbypanels.com/admin/assets/bower_components/Ionicons/src/android-microphone.svg" />
                                </div>
                                
                            </div>
                           
                        </div>
                     
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        
                    </form>
                  
              </div>
              <div class="col-xs-4">
                  <h2>Company Information :</h2>
                  <p>500 Lorem lpsum Dolor Sit,<br><br>22-56-2-9 Sit Amet, Lorem,<br><br>USA<br><br>Phone:(00) 222 666 444<br><br>Fax: (000) 000 00 00 0
                      <br><br>Email: info@mycompany.com<br><br>Follow on: Facebook, Twitter</p>
              </div>
          </div>
      </div>
      
      
     <?php
    include 'footer.php';
    ?>
      
      
      
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
