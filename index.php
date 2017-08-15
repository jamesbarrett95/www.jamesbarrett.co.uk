<!DOCTYPE html>
<html>
<body>

<!--Head-->
<?php include("inc/sections/head.php"); ?>

<?php
include("./keys.php");
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect user input - Filter and Sanitize
    $name = trim(filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING));
    print_r ($name);
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
      $mail->Username = $postmarkKey;
      $mail->Password = $postmarkKey;
      $mail->setFrom($emailKey);
      $mail->addAddress($emailKey, "James");
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
 include("inc/sections/hero.php");
?>

  <!--SECTIONS-->
    <!--Nav-->
    <?php include("inc/sections/nav.php"); ?>
    <!--About-->
    <?php include("inc/sections/about.php"); ?>
    <!--Skills-->
    <?php include("inc/sections/skills.php"); ?>
    <!--Work-->
    <?php include("inc/sections/work.php"); ?>

  <!--MODALS-->
    <!-- FIFAScout -->
    <?php include("inc/modals/fifascout.php"); ?>
    <!--ThePokeRaf-->
    <?php include("inc/modals/thepokeraf.php"); ?>
    <!--JacksonJacobDeveloper Modal-->
    <?php include("inc/modals/jacksonjacobdeveloper.php"); ?>
    <!--Weather App-->
    <?php include("inc/modals/weatherapp.php"); ?>
    <!--Simon Game-->
    <?php include("inc/modals/simongame.php"); ?>
    <!--To-Do Application-->
    <?php include("inc/modals/todoapp.php"); ?>
    <!--Tic-Tac-Toe-->
    <?php include("inc/modals/tictactoe.php"); ?>
    <!--Pomodoro Clock-->
    <?php include("inc/modals/pomodoro.php"); ?>
    <!--Twitch Viewer-->
    <?php include("inc/modals/twitch.php"); ?>
    <!--JavaScript Calculator-->
    <?php include("inc/modals/calculator.php"); ?>
    <!--Node.js Data Retrieval Console Application-->
    <?php include("inc/modals/consoleapplication.php"); ?>
    <!--Wikipedia Viewer-->
    <?php include("inc/modals/wikipedia.php"); ?>
    <!-- Contact -->
    <?php include("inc/modals/contact.php"); ?>

    <!--Footer-->
    <?php include("inc/sections/footer.php"); ?>

    <!--Scripts -->
    <?php include("inc/scripts.php"); ?>

  </body>
  </html>
