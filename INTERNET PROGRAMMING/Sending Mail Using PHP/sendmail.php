<?php


 $msg = "Name: ".$_POST['name']."\n";
 $msg.= "E-Mail: ".$_POST['email']."\n";
 $msg.= "Message: ".$_POST['message']."\n";

 //set up the mail
 $recipient="sunway.abc@gmail.com";
 $subject="Form Submission Results";
 $mailheaders = "From: My Web Site <sunway.abc@gmail.com> \n";
 $mailheaders.= "Reply-To: ".$_POST['email'];

 //send the mail
 mail($recipient, $subject, $msg, $mailheaders);
 ?>

<!DOCTYPE html>
 <html>
 <head>
 <title>Sending mail</title>
 </head>
 <body>
<p>Thanks, <strong><?php echo $_POST['name']; ?></strong>,
 for your message.</p>
 <p>
 Your e-mail address:
 <strong><?php echo $_POST['email']; ?></strong></p>
 <p>Your message: <br/> <?php echo $_POST['message']; 
 ?> 
</p>
 </body>
 </html>

