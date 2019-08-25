
<!DOCTYPE html>
 <html>
 <head>
 <title>E-Mail Form</title>
 </head>
 <body>
 <form action="sendmail.php" method="post">
 <p><label for="name">Name:</label><br/>
 <input type="text" size="25"  name="name" required /></p>
 <p><label for="email">E-Mail Address:</label><br/>
 <input type="email" size='25'  name="email" required /></p>
 <p><label for="msg">Message:</label><br/>
<textarea  name="message" cols="30" rows="5" required></textarea></p>
 <button type="submit" name="submit" value="submit" >Send Message</button>
 </form>
 </body>
 </html>
