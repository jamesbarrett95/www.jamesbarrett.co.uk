<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input - Filter and Sanitize
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL));
    $message = trim(filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING));
    // No input validation
    if($name == "" || $email == "" || $message == "") {
      $error_message = "Please fill in all form fields";
    }
    // Require the PHPMailer Library
    require("inc/PHPMailer-master/PHPMailerAutoload.php");
    $mail = new PHPMailer;
    // Invalid Email Validation
    if(!isset($error_message) && !$mail->ValidateAddress($email)) {
      $error_message = "Invalid Email Address";
    }
    // If no error message is set, create the email and set up SMTP
    if(!isset($error_message)) {
      $email_body = "";
      $email_body .= "Name: " . $name ."\n";
      $email_body .= "Email: " . $email ."\n";
      $email_body .= "Message: " . $message ."\n";
      $mail->IsSMTP();
      $mail->SMTPAuth = true;
      $mail->Host = "smtp.postmarkapp.com";
      $mail->Port = 25;
      $mail->Username = "a894302f-b2b4-499d-9113-b82cf8cc9ec0";
      $mail->Password = "a894302f-b2b4-499d-9113-b82cf8cc9ec0";
      $mail->setFrom("UP734253@myport.ac.uk");
      $mail->addAddress("UP734253@myport.ac.uk", "James");
      $mail->isHTML(false);
      $mail->Subject = 'Message from ' . $name;
      $mail->Body    = $email_body;
      // If the mail sends...
      if($mail->send()) {
        header("location:thankyou.php");
        exit;
      }
        $error_message = 'Message could not be sent.';
        $error_message .= 'Mailer Error: ' . $mail->ErrorInfo;
      }
    }
 include("inc/header.php");
?>
    <!--Work-->
    <div class="container-fluid text-xs-center" id="work">
      <div class="row no-gutter">
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">FootDrive - Coming Soon!</h2>
            <hr>
            <p class="m-t-1">A social network for fans sharing lifts to football matches.</p>
            <p>Built with HTML, CSS, JavaScript, PHP and SQL</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#footdrive">Read more</button>
            <button type="button" class="btn btn-primary" disabled>View on GitHub</button>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3 pokeraf">
            <h2 class="m-t-3">ThePokeRaf</h2>
            <hr>
            <p class="m-t-1">A simple website for a Pokemon Youtuber with over 10 Thousand Subscribers.</p>
            <p>Built with HTML, CSS, jQuery and PHP.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#thepokeraf">Read more</button>
            <a href="https://github.com/jamesbarrett95/www.thepokeraf.co.uk" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3 jacksonjacobdeveloper">
            <h2 class="m-t-3">Jackson Jacob Developer</h2>
            <hr>
            <p class="m-t-1">A portfolio website for a Computer Science undergraduate, Jackson Jacob, to showcase
            all of his work.</p>
            <p>Built with HTML, CSS, JavaScript and PHP.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#jacksonjacobdeveloper">Read more</button>
            <a href="https://github.com/jamesbarrett95/www.jacksonjacobdeveloper.com" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Weather App - Coming Soon!</h2>
            <hr>
            <p class="m-t-1">'Build a weather app challenge' on FreeCodeCamp, allowing the user to get the weather
            in a particular area.</p>
            <p>Built with HTML, CSS and JavaScript.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#weatherapp">Read more</button>
            <button type="button" class="btn btn-primary" disabled>View on GitHub</button>
          </div>
        </div>
      </div>
    </div>

    <!-- FootDrive Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="footdrive">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">FootDrive</h4>
          </div>
          <div class="modal-body">
            <p>FootDrive is a 2nd year university project and is a social network for football fans of the Premier League.
            I felt that travelling to football games can be very expensive in the United Kingdom. So FootDrive gives users
            the opportunity to find drivers going to a particular game and share a ride! Users can find and offer lifts,
            follow drivers, share posts and more!</p>
          </div>
          <div class="modal-footer">
            <a href="#"><button type="button" class="btn btn-default" disabled>View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--ThePokeRaf Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="thepokeraf">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">FootDrive</h4>
          </div>
          <div class="modal-body">
            <p>ThePokeRaf is a one page website for a Pokemon content creator which allows for a user
            to view his latest video and contact him for any collaborations or video suggestions. I utilised
            'flexbox', a CSS3 tool that allows for layouts to be developed easily and efficiently. Moreover, to reinforce my
            jQuery skills, I built the contact form without any plugins.</p>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/www.thepokeraf.co.uk" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--JacksonJacobDeveloper Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="jacksonjacobdeveloper">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">JacksonJacobDeveloper</h4>
          </div>
          <div class="modal-body">
            <p>Jackson Jacob Developer is a portfolio website for a computer science undergraduate to showcase all of his work.
            Built using BootStrap 3 to ensure I had a popular front-end framework in my skillset. Moreover, being able to work
            with a real world client allowed for me to work to deadlines and put my communciation skills to test.</p>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/www.jacksonjacobdeveloper.com" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Weather App Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="weatherapp">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">JacksonJacobDeveloper</h4>
          </div>
          <div class="modal-body">
            <p>A weather app challenge assigned by FreeCodeCamp. This allowed for me to develop my JavaScript and problem solving skills </p>
          </div>
          <div class="modal-footer">
            <a href="#" target="_blank"><button type="button" class="btn btn-default" disabled>View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Contact Modal -->
    <div class="modal fade" id="contact" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Let's Get In Touch.</h4>
          </div>
          <div class="modal-body text-xs-center">
            <ul class="social-media">
              <li class="m-x-2 large"><a href="https://twitter.com/james_barrett"><i class="fa fa-3x fa-twitter" aria-hidden="true"></i></a></li>
              <li class="m-x-2 large"><a href="https://github.com/jamesbarrett95"><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
              <li class="m-x-2 large"><a href="https://www.linkedin.com/in/jamesbarrett95?authType=NAME_SEARCH&authToken=KZYO&locale=en_US&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A101657775%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1472574298832%2Ctas%3Ajames%20barrett"><i class="fa fa-3x fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
            <hr class="modal-hr">
            <form action="index.php" method="post" id="contactform" name="contactform">
              <fieldset class="form-group" id="nameresult">
                <label for="Name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Example: John Smith">
              </fieldset>
              <fieldset class="form-group" id="emailresult">
                <label for="Email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Example: johnsmith@mail.com">
              </fieldset>
              <fieldset class="form-group" id="messageresult">
                <label for="Message">Message</label>
                <textarea class="form-control" id="message" rows="5" name="message" placeholder="Hi there! My name is John Smith..."></textarea>
              </fieldset>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" id="submit" value="submit" class="btn btn-primary" disabled>Submit</button>
          </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
