<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_body = "";
$email_body = $email_body . "Name: " . $name . "\n";
$email_body = $email_body . "Email: " . $email . "\n";
$email_body = $email_body . "Message: " . $message;
echo $email_body;

$pageTitle = "Thanks!";
include("inc/header.php");
?>
<div class="small-12 small-centered columns">
	<h1 class="center">
		Thanks for the email! I&rsquo;ll get back to you ASAP.
	</h1>
</div>
<?php include("inc/footer.php");?>