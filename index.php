<?php 
$pageTitle = "flipcampbell";
$section = "home";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = trim($_POST["name"]);
  $email = trim($_POST["email"]);
  $message = trim($_POST["message"]);

  if ($name == "" OR $email == "" OR $message == "") {
    echo "You must include your name, email address, and project description.";
    exit;
  }
  
  foreach( $_POST as $value ){
    if( stripos($value,'Content-Type:') !== FALSE ){
        echo "There was a problem with the information you entered.";    
        exit;
    }
  } 

  if ($_POST["address"] != "") {
      echo "Your form submission has an error.";
      exit;
  }

  require_once('inc/phpmailer/class.phpmailer.php');
  $mail = new PHPMailer();
  
  if (!$mail->ValidateAddress($email)){
    echo "You must have a valid email address.";
    exit;
  }

  $email_body = "";
  $email_body = $email_body . "Name: " . $name . "<br>";
  $email_body = $email_body . "Email: " . $email . "<br>";
  $email_body = $email_body . "Message: " . $message;

  //Set who the message is to be sent from
  $mail->setFrom($email, $name);

  //Set who the message is to be sent to
  $mail->addAddress('flipcampbell@gmail.com', 'Philip Campbell');
  //Set the subject line
  $mail->Subject = 'flipcampbell.com Contact Form Submission From: ' . $name;
  //Read an HTML message body from an external file, convert referenced images to embedded,
  //convert HTML into a basic plain-text alternative body
  $mail->msgHTML($email_body);

  //send the message, check for errors
  if (!$mail->send()) {
      echo "There was an error sending the email: " . $mail->ErrorInfo;
      exit;
  } 

  header("Location: contact-thanks.php");
  exit;
}

include('inc/header.php'); ?>

    <div class="hero container">
      <div class="row">
        <div class="small-6 medium-5 large-4 large-centered medium small-centered columns">
          <img src="img/avatar.svg" alt="Avatar">
        </div>
      </div>
      <div class="row">
        <div class="small-12 small-centered large-9 columns">
          <p class="center text-white">
            Hi, I'm Philip Campbell, a front-end web developer based in Nashville, TN.
          </p>
        </div>
      </div>
    </div>
    <div class="bg-aqua statement container">
      <div class="row">
        <div class="small-12 small-centered columns">
          <p class="center text-white">
            <span>
              I'm committed to executing pixel perfect renditions for designers.
            </span>
          </p>
          <p class="center text-white">
            I never compromise your design by taking shortcuts or doing what's easiest for me. The way you envision it is the way I will code it.
          </p>
        </div>
      </div> <!--End Row  -->
    </div>
    <div class="about light-grey container">
      <div class="row">
        <div class="small-6 large-6 large-uncentered small-centered columns">
          <img src="img/boom-headshot.png" alt="BOOM headshot">
        </div>
        <div class="small-12 large-6 large-uncentered small-centered columns">
          <h2>
            About Philip
          </h2>
          <h3 class="emphasize">
            Developer, drummer, cat lover.
          </h3>
          <p>
            Born and bred in Nashville, Tennessee, I grew up playing drums and learning to build things. 
            I'm a mechanical contractor and self-taught web developer who works in HTML, CSS, Javascript, jQuery, PHP, and Wordpress.
          </p>
        </div>
      </div><!--End Row  -->
    </div>
    <div class="contact-me container bg-white">
      <div class="row">
        <div class="small-12 small-centered columns center">
          <h2>
            Let's Make Things
          </h2>
        </div>
      </div>
      <div class="row">
        <div class="small-12 small-centered columns">
          <h3 class="center emphasize">
            Interested in working with me?
          </h3>
        </div>
      </div>
      
      <div class="bg-light-grey rounded small-10 small-centered large-6 large-centered columns contact-box">
        <form method="post" action="index.php">
          <div class="row">
            <div class="large-12 large-centered columns center">
              <input name="name" type="text" placeholder=" First and last name">
            </div>
          </div>
          <div class="row">
            <div class="large-12 large-centered columns center">
              <input name="email" type="text" placeholder=" Email address">
            </div>
          </div>
          <div class="row">
            <div class="large-12 large-centered columns center" style="display: none;">
              <input name="address" type="text" placeholder=" Address">
              <p>Humans: leave this field blank.</p>
            </div>
          </div>          
          <div class="row">
            <div class="large-12 large-centered columns center">
              <textarea name="message" placeholder=" Describe your project"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="small-12 small-centered columns center submit-button">
              <input type="submit" class="small radius button bg-aqua" value="Get in Touch">
            </div>
          </div>
        </form>
      </div>
    </div>
<?php include('inc/footer.php') ?>
