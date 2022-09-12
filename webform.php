<?php

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != '') {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $messageSubject = $_POST['subject'];
            $message = $_POST['message'];

            $mailTo = "talyae13@yahoo.com.au";
            $body = "";

            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$message. "\r\n";

			ini_set('SMTP', "http://mail.talyaentwistle.com:2079");
			ini_set('smtp_port', "2079");
			ini_set('sendmail_from', "talyae13@yahoo.com.au");

            mail($mailTo,$messageSubject,$body);

            $message_sent = true;
        }
    }   
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Webform</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <?php
        if($message_sent):
    ?>

    <p class="confirmation-text">Thank you! I'll be in contact soon.</p>

    <?php
        else:
    ?>

    <section class="contact-container" id="contact-container">
		<section class="contact-header-container">
			<h1 class="contact-header-text">Get in Touch</h1>
			<div class="slant"></div>
		</section>
		<p class="contact-text">If you'd like to contact me, feel free to send a message using the form below and I'll get back to you as soon as possible.</p>
		
		<div class="form-container">
			<form action="index.php" method="POST" class="form">
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name" placeholder="Name" tabindex="1" required>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" id="email" name="email" placeholder="Email" tabindex="2" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
				</div>
				<div class="form-group">
					<textarea class="form-control" name="message" id="message" cols="50" rows="5" placeholder="Message" tabindex="4"></textarea>
				</div>
				<div>
					<button type="submit" class="submit-button">Submit</button>
				</div>
			</form>
		</div>

        <?php
            endif;
        ?>
		
	</section>
</body>
</html>