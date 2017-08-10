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

    <!--About-->
    <?php include("inc/about.php"); ?>
    <!--Work-->
    <div class="container-fluid text-xs-center" id="work">
      <div class="row no-gutter">
        <!-- FIFAScount Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">FIFAScout - Coming soon!</h2>
            <hr>
            <p class="m-t-1">A FIFA Esports Web Application for displaying user statistics and tracking events</p>
            <p>Built with Pug, SCSS, Express.js, D3.js, MongoDB, WebPack</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#fifascout">Read more</button>
            <button type="button" class="btn btn-primary" disabled>View on GitHub</button>
          </div>
        </div>
        <!-- ThePokeRaf Column -->
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
      </div>

      <div class="row no-gutter">
        <!-- JacksonJacobDeveloper Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3 jacksonjacobdeveloper">
            <h2 class="m-t-3">Jackson Jacob Developer</h2>
            <hr>
            <p class="m-t-1">A portfolio website for a Computer Science undergraduate, Jackson Jacob, to showcase
            all of his work.</p>
            <p>Built with HTML, SCSS, JavaScript, PHP and BootStrap.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#jacksonjacobdeveloper">Read more</button>
            <a href="https://github.com/jamesbarrett95/www.jacksonjacobdeveloper.com" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <!-- Weather App Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Weather App</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's intermediate front-end project challenge - Weather App</p>
            <p>Built with HTML, CSS and JavaScript.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#weatherapp">Read more</button>
            <a href="https://github.com/jamesbarrett95/Weather-Application" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
      </div>

      <div class="row no-gutter">
        <!-- Simon Game Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Simon Game</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's adavanced front-end project challenge - Simon Game.</p>
            <p>Built with HTML, CSS, and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#simongame">Read more</button>
            <a href="https://github.com/jamesbarrett95/www.jacksonjacobdeveloper.com" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <!-- To-Do Application Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">To-Do Application</h2>
            <hr>
            <p class="m-t-1">Simple To-Do application which utilises Local Storage to keep track of my tasks easily</p>
            <p>Built with HTML, CSS and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#todo">Read more</button>
            <a href="https://github.com/jamesbarrett95/To-Do-Application" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
      </div>

      <div class="row no-gutter">
        <!-- Tic Tac Toe Column-->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Tic Tac Toe</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's adavanced front-end project challenge - Tic Tac Toe.</p>
            <p>Built with HTML, CSS, and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#tictactoe">Read more</button>
            <a href="https://github.com/jamesbarrett95/Tic-Tac-Toe" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <!-- Pomodoro Clock Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Pomodoro Clock</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's adavanced front-end project challenge - Pomodoro Clock.</p>
            <p>Built with HTML, CSS and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#pomodoro">Read more</button>
            <a href="https://github.com/jamesbarrett95/Pomodoro-Clock" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
      </div>

      <div class="row no-gutter">
        <!-- Twitch Viewer Column-->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Twitch Viewer</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's intermediate front-end project challenge - Twitch Viewer.</p>
            <p>Built with HTML, CSS, and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#twitch">Read more</button>
            <a href="https://github.com/jamesbarrett95/Twitch-Viewer" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <!-- JavaScript Calculator Column -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">JavaScript Calculator</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's adavanced front-end project challenge - JavaScript Calculator.</p>
            <p>Built with HTML, CSS and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#calculator">Read more</button>
            <a href="https://github.com/jamesbarrett95/Javascript-Calculator" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
      </div>

      <div class="row no-gutter">
        <!-- Node.js Console Application-->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Node.js Console Application</h2>
            <hr>
            <p class="m-t-1">A simple Node.js console application to retrieve data from an API and display it to the console.</p>
            <p>Built with JavaScript and Node.js.</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#console">Read more</button>
            <a href="https://github.com/jamesbarrett95/Node.js-Console-Application-1" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
        <!-- Wikipedia Viewer -->
        <div class="col-md-6 col-sm-12">
          <div class="box p-x-3">
            <h2 class="m-t-3">Wikipedia Viewer</h2>
            <hr>
            <p class="m-t-1">FreeCodeCamp's intermediate front-end project challenge - Wikipedia Viewer.</p>
            <p>Built with HTML, CSS and JavaScript</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#wikipedia">Read more</button>
            <a href="https://github.com/jamesbarrett95/Wikipedia-Viewer" target="_blank"><button type="button" class="btn btn-primary">View on GitHub</button></a>
          </div>
        </div>
      </div>

    </div>

    <!-- FIFAScout Modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="fifascout">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">FIFAScout - Coming soon!</h4>
          </div>
          <div class="modal-body">
            <p>FIFAScout is a final year university project and a statistic-driven FIFA Esports web application. More to come...</p>
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
            <h4 class="modal-title">ThePokeRaf</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>A one page website for a Pokemon content creator</li>
              <li>View his latest video and contact him for any collaborations or video suggestions</li>
              <li>Utilises Flexbox - a native CSS3 tool that allows for layouts to be developed easily and efficiently.</li>
            </ul>
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
            <ul>
              <li>A portfolio website for a computer science undergraduate to showcase all of his work</li>
              <li>Built using BootStrap 3 to ensure I had a popular front-end library in my skillset.</li>
              <li>Built for a real world client allowed for me to work to deadlines and put my communciation skills to test.</li>
            </ul>
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
            <h4 class="modal-title">Weather App</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's intermediate front-end project challenge - Weather App</li>
              <li>Utilises native JavaScript speech recognition</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Weather-Application" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Simon Game Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="simongame">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Simon Game</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's adavanced front-end project challenge - Simon Game.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Weather-Application" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--To-Do Application Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="todo">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">To-Do Application</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>A simple To-Do application</li>
              <li>Utilises HTML5 Drag &amp; Drop and Local Storage API</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/To-Do-Application" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Tic-Tac-Toe Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="tictactoe">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Tic Tac Toe</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's adavanced front-end project challenge - Tic Tac Toe.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Tic-Tac-Toe" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Pomodoro Clock Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="pomodoro">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Pomodoro Clock</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's adavanced front-end project challenge - Pomodoro Clock.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Pomodoro-Clock" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Twitch Viewer Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="twitch">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Twitch Viewer</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's Intermediate front-end project challenge - Twitch Viewer.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Twitch-Viewer" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--JavaScript Calculator Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="calculator">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">JavaScript Calculator</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's adavanced front-end project challenge - JavaScript Calculator.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Javascript-Calculator" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Node.js Data Retrieval Console Application Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="console">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Node.js Data Retrieval Console Application</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>Using the Team Treehouse API to retrieve a user's information and display their JavaScript points</li>
              <li>The purpose of this application was to familiarise myself with the Node.js platform.</li>
              <li>Completing this application allowed for me to understand the non-blocking nature of Node.js.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Node.js-Console-Application-1" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Wikipedia Viewer Modal-->
    <div class="modal fade" tabindex="-1" role="dialog" id="wikipedia">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Wikipedia Viewer</h4>
          </div>
          <div class="modal-body">
            <ul>
              <li>FreeCodeCamp's intermediate front-end project challenge - Wikipedia Viewer.</li>
            </ul>
          </div>
          <div class="modal-footer">
            <a href="https://github.com/jamesbarrett95/Wikipedia-Viewer" target="_blank"><button type="button" class="btn btn-default">View on GitHub</button></a>
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
              <li class="m-x-2 large"><a href="https://twitter.com/james_barrett" target="_blank"><i class="fa fa-3x fa-twitter" aria-hidden="true"></i></a></li>
              <li class="m-x-2 large"><a href="https://github.com/jamesbarrett95" target="_blank"><i class="fa fa-3x fa-github" aria-hidden="true"></i></a></li>
              <li class="m-x-2 large"><a href="https://www.linkedin.com/in/jamesbarrett95/" target="_blank"><i class="fa fa-3x fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
            <hr class="modal-hr">
            <form action="index.php" method="post" id="contactform" name="contactform">
              <fieldset class="form-group" id="nameresult">
                <label for="Name">Name</label>
                <input type="text" class="form-control form-control-danger form-control-success" id="name" name="name" placeholder="Example: John Smith">
              </fieldset>
              <fieldset class="form-group" id="emailresult">
                <label for="Email">Email</label>
                <input type="email" class="form-control form-control-danger form-control-success" id="email" name="email" placeholder="Example: johnsmith@mail.com">
              </fieldset>
              <fieldset class="form-group" id="messageresult">
                <label for="Message">Message</label>
                <textarea class="form-control form-control-danger form-control-success" id="message" rows="5" name="message" placeholder="Hi there! My name is John Smith..."></textarea>
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
