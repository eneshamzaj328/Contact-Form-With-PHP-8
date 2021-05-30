<?php 
    $result = "";
    $error  = "";
  if(isset($_POST['submit']))
  {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    //smtp settings
    $mail->isSMTP(); // send as HTML
    $mail->Host = "smtp.gmail.com"; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = "shembull@gmail.com"; // Your mail -> Ketu e shenon Email Adresen Tende te Gmail-it
    $mail->Password = 'passwordi-i-gmailit'; // Your password mail ->  Ketu e shenon Password-in / Fjale Kalimin, Tend te Gmail-it
    $mail->Port = 587; //specify SMTP Port -> Nese kjo port nuk punon atehere e provon me kete ( 465 )
    $mail->SMTPSecure = 'tls';                               
    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('shembull@gmail.com'); // Shkruaje perseri adresen e njejte ose ndonje tjeter ska problem por me mire te njejten serish :) 
    $mail->addReplyTo($_POST['email'],$_POST['name']);
    $mail->isHTML(true);
    $mail->Subject='Emri i Faqes'; //.$_POST['subject']; //Shkruaje  emrin e faqes apo te subjektit te formes 
    $mail->Body='Shkruaje Kodin qe e more nga index.html'; // Shko tek file index.html dhe lexoje se si duhet ta marresh kodin rregulloje dhe pastaj tek ->
    if(!$mail->send())                                      // -> $mail->Body=''; -> $mail->Body='ketu vendose kodin'; 
    {
      $error = "Di&ccedil;ka shkoi keq! Ju lutemi provoni p&euml;rs&euml;ri!";
    }
    else 
    {
      $result="Faleminderit\t" .$_POST['name']. "! <br />Mesazhi Juaj &euml;sht&euml D&euml;rguar me Sukses!";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Emri i Faqes | Kontakti</title>
	<!--========================================================================================-->   
    <link rel="apple-touch-icon" sizes="180x180" href="http://mywebdomain.com/favicon.ico" type='image/x-icon' />
    <link rel="icon" type="image/png" sizes="32x32" href="http://mywebdomain.com/favicon.ico" type='image/x-icon' />
    <link rel="icon" href="http://mywebdomain.com/favicon.ico" sizes="192x192" />
	<!--========================================================================================--> 
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!--========================================================================================--> 
	<!-- <link href='./favicon.ico' rel='icon' type='image/x-icon'/> -->
	<!--========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--=========================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--=========================================================================================-->
	<style>#web-author{font-size:25px;font-weight:600;color:#000;text-decoration:none}/*#web-author::before{font-family:FontAwesome;content:"\f015 "}*/#web-author:hover{font-size:27px;font-weight:700;color:#1e90ff;transition:1s}</style>
	<!--=========================================================================================-->
</head>
<body>
	<div class="contact1">
		<div class="container-contact1">
			<div class="contact1-pic js-tilt" data-tilt>
				<img src="images/email-foto.png" alt="IMG">
			</div>
			<form action="" method="post" enctype="multipart/form-data" class="contact1-form validate-form">
				<span class="contact1-form-title" title="Kontakti">
				    <a href="./" id="web-author" title="Emri i Faqes | Fillimi">Emri i Faqes</a>  » Kontakti <!-- Kete ja kom shtu se nuk e pat pat tani ja bona -->
				</span>
				<h6 class="text-center text-success"> <?=$result; ?></h6>
				<h6 class="text-center text-danger"> <?=$error; ?></h6>
				<br>
				<div class="wrap-input1 validate-input" data-validate = "Ju lut&euml;m, shkruani Emrin Tuaj!">
					<input class="input1" type="text" name="name" placeholder="Emri *">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Ju lut&euml;m, shkruani E-Mail Adres&euml;n Tuaj! P.sh: shembull@email.com">
					<input class="input1" type="email" name="email" placeholder="E-Mail Adresa *">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Ju lut&euml;m, shkruani Subjektin!">
					<input class="input1" type="text" name="subject" placeholder="Subjekti *">
					<span class="shadow-input1"></span>
				</div>

				<div class="wrap-input1 validate-input" data-validate = "Ju lut&euml;m, shkruani Mesazhin Tuaj!">
					<textarea class="input1" name="message" placeholder="Mesazhi *"></textarea>
					<span class="shadow-input1"></span>
				</div>

				<div class="container-contact1-form-btn">
					<button type="submit" name="submit" class="contact1-form-btn">
						<span>
							Vazhdo
							<i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
						</span>
					</button>
				</div>
			</form>
		</div>
	</div>

	<!--====================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--====================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--=====================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--=====================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>

	<script src="js/main.js"></script>
</body>
</html>