<?php 
//The code 8y6q3T can be changed to whatever captcha code you want! Depending on the client, if its a shed company, give them a captcha code of: sheds or barns or customize....something appropriate!
$captcha= $_POST['captcha']; 
if ($captcha != 'double7'){ 
     header( "Location: /wrong-captcha.php" ); 
}else{ 

//$_POST['NAME']; TARGETS THE name="NAME" in the html form, it's case sensitive make sure you check it! -->

$name = $_POST['Name']; 
$email = $_POST['Email'];
$phone = $_POST['Phone'];
$address = $_POST['Address']; 
$fax = $_POST['Fax'];
$message = $_POST['Message'];



 
//START OF THE EMAIL LAYOUT -->

$all_message= $name . " has contacted Double Run <hr><br /> <br />

Name: " . $name . 
"<br /> <br />Email: " . $email .
"<br /> <br />Phone Number: " . $phone .
"<br /> <br />Fax Number: " . $fax .
"<br /> <br />Address: " . $address .
"<br /> <br />Message: " . $message;




/* change this, the email listed here is where the form will submit to! 
Insert your personal email for testing. After testing, add the clients email address! */
$to = "haylay@doublerunbrokerage.com"; 
/* change this */
$subject = "Contact from Double Run Website"; 
$mailheaders = "From: $email \n"; 
$mailheaders .= "Reply-To: $email \r\n"; 
$mailheaders .= "Content-Type: text/html \r\n"; 
$mailheaders .= "Cc: $email \r\n"; 
  
$result=mail($to, $subject, $all_message, $mailheaders); 
if($result){ 
     header( "Location: /thank-you.php" );
}else{ 
    echo "<p>We're sorry, your message was not sent."; 
} 
} 
?>