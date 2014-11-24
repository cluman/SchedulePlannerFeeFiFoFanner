 
<?php



function SendEmail ($to, $subject, $content, $fromName) {

	//Load PHPMailer dependencies
	require_once 'PHPMailerAutoload.php';
	require_once 'class.phpmailer.php';
	require_once 'class.smtp.php';

	/* CONFIGURATION */
	$crendentials = array(
		'email'     => 'uark.fall14.7021.gh@gmail.com',    //Your GMail adress
		'password'  => 'fall14gh'               //Your GMail password
	);

	/* SPECIFIC TO GMAIL SMTP */
	$smtp = array(

	'host' => 'smtp.gmail.com',
	'port' => 587,
	'username' => $crendentials['email'],
	'password' => $crendentials['password'],
	'secure' => 'tls' //SSL or TLS

	);

	$mailer = new PHPMailer();

	//SMTP Configuration
	$mailer->isSMTP();
	$mailer->SMTPAuth   = true; //We need to authenticate
	$mailer->Host       = $smtp['host'];
	$mailer->Port       = $smtp['port'];
	$mailer->Username   = $smtp['username'];
	$mailer->Password   = $smtp['password'];
	$mailer->SMTPSecure = $smtp['secure']; 

	//Now, send mail :
	//From - To :
	$mailer->From       = $crendentials['email'];
	$mailer->FromName   = $fromName; //Optional
	$mailer->addAddress($to);  // Add a recipient

	//Subject - Body :
	$mailer->Subject        = $subject;
	$mailer->Body           = $content;
	$mailer->isHTML(true); //Mail body contains HTML tags

	if(!$mailer->send()) {
		echo 'Error sending mail : ' . $mailer->ErrorInfo;
		return false;
	} else {
		echo 'Message sent !';
		return true;
	}
	
}

/* TO, SUBJECT, CONTENT */
// $to         = 'raphaelrs55@gmail.com'; //The 'To' field
// $subject    = "Titulo";
// $content    = "Heeeeyyy";

// SendEmail ($to, $subject, $content, null, "FeeFiFoFanner");

?>
