<html>	
<body>

	<?php

	if(isset($_POST['submit']))
	{
	

require("../PHPMailer/class.phpmailer.php");
//require("/PHPMailer/class.smtp.php");
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$body  = "Hotel Name=".$_POST['hotel'];
$body.= "<br/> Street adress=".$_POST['street'];
$body.= "<br/> City=".$_POST['city'];
$body.= "<br/> State/Provice=".$_POST['state'];
$body.= "<br/> Zipcode=".$_POST['zipcode'];
$body.= "<br/> Country=".$_POST['country'];
$body.= "<br/> Website=".$_POST['website'];
$body.= "<br/> Surname Name=".$_POST['name'];
$body.= "<br/> Role At Hotel=".$_POST['roleathotel'];
$body.= "<br/> Email=".$_POST['email'];
$body.= "<br/> Phone=".$_POST['phone'];
$body.= "<br/> Referer=".$_POST['referer'];
$body.= "<br/> Comments=".$_POST['comments'];
//$body             = eregi_replace("[\]",'',$body);
//$body="hello";

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "akshaytest47@gmail.com";  // GMAIL username
$mail->Password   = "simplepassword";            // GMAIL password

$mail->SetFrom('akshaytest47@gmail.com', 'akshay');
	
//$mail->AddReplyTo("freny@helixtech.co","freny");

$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";

$mail->AltBody    = "asdsads"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "akshaytest47@gmail.com";
$mail->AddAddress($address, "akshay");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
    

 }

?>
	
<form action="form.php" method="post">
hotel name:<input type="text" name="hotel" /><br/> 
street:<input type="text" name="street" /><br/>
city:<input type="text" name="city" /><br/>
state:<input type="text" name="state" /><br/>
zipcode:<input type="text" name="zipcode" /><br/>
country:<input type="text" name="country" /><br/>
website:<input type="text" name="website" /><br/>
name:<input type="text" name="name" /><br/>
roleathotel:<input type="text" name="roleathotel" /><br/>
email:<input type="text" name="email" /><br/>
phone:<input type="text" name="phone" /><br/>
referer:<input type="text" name="referer" /><br/>
comments:<input type="text" name="comments" /><br/>

<input type="submit" name="submit" value="submit" /><br/>

</form>


</body>
</html>

