<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<script src='https://www.google.com/recaptcha/api.js'></script>
    <link type="image/x-icon" rel="Shortcut icon" href="favicon.ico" />
</head>

<body>

		<div class="header">
		
        <div class="logo">
            <img src="images/ros.png" style="float: left;"/>
            <span style="color: #00cc00">Godpodarstwo</span> ogrodnicze
		<div style="clear:both;"></div>
        </div>
        </div>
    
  <nav>
  <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
  <ul class="menu">
  <li><a  onclick="alert ('Czy napewno chcesz opuścić stronę?')" href="gospodarstwo-ogrodnicze"><i class="fa fa-home"></i> Strona główna</a>
  <li><a  onclick="alert ('Czy napewno chcesz opuścić stronę?')" href="cennik"><i class="fa fa-tags"></i> Cennik</a></li>
  <li><a  onclick="alert ('Czy napewno chcesz opuścić stronę?')" href="aktualności"><i class="fa fa-bullhorn"></i> Aktualności</a>
  <li><a  onclick="alert ('Czy napewno chcesz opuścić stronę?')" href="kontakt"><i class="fa fa-envelope"></i> Kontakt</a></li>
  <li><a  onclick="alert ('Czy napewno chcesz opuścić stronę?')" href="o-nas"><i class="fa fa-user"></i> O nas</a>
  </ul>
  </nav>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="skrypty/script.js"></script>

<div class="formularz">
<div id="text">
<h1>Złóż zamówienie</h1>
<form method="post" action="">
	<input type="text" name="Imię" placeholder="Twoje imię" required>
	<input type="text" name="Telefon" placeholder="Numer telefonu" required>
	<input type="email" name="E-Mail" placeholder="E-Mail" required>
	<textarea name="message" placeholder="Wiadomość" required>Nazwa: Pelargonia Sztuk: 1 Kolor: </textarea>
	
	<div class="g-recaptcha" data-sitekey="6LfXNfYUAAAAAATWIocZw8nzGYINalBxD7I3YU2q"></div>
	
	<input type="submit" name="Wyślij" value="Wyślij wiadomość" class="przycisk">
</form>
    </div>
<div class="status">
<?php
	if(isset($_POST['submit']))
	{
		$User_name = $_POST['Imię'];
		$phone = $_POST['Telefon'];
		$user_email = $_POST['E-Mail'];
		$user_message = $_POST['message'];
		
		$email_from = 'dybalskiprzemyslaw@gmail.com';
		$email_subject = "New Form Submission";
		$email_body = "Imię: $User_name.\n'<br />'".
					  "Numer telefonu: $phone.\n'<br />'".
					  "E-Mail: $user_email.\n'<br />'".
					  "Wiadomość: $user_message.\n'<br />'";
					  
		$to_email = "dybalskiprzemyslaw@gmail.com";
		$headers = "From: $email_from \r\n";
		$headers = "Odpowiedz do: $user_email \r\n";
		
		$secretKey = "6LfWNfYUAAAAAIJ5nGcKeMQHPPIPMs2Ojor9JFgV";
		$responseKey = $_POST['g-recaptcha-response'];
		$userIP = $_SERVER['REOMTE_ADDR'];
		$url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteop=$userIP";
		
		$response = file_get_contents($url);
		$response = json_decode($response);
		
		if ($response->success) {
			mail ($to_email,$email_subject,$email_body,$headers);
			echo "Wiadomość wysłana pomyślnie";
		}
		else {
			echo "<span>Potwierdź weryfikację reCaptcha</span>";
		}
	}
?>
</div>
</div>

		<div class="stopka">
		<a style="font-size: 15px; font-weight: bold">Kontakt &nbsp|&nbsp 123@123.pl &nbsp|&nbsp Gospodarstwo ogrodnicze, Konecka 39 Żarnów 26-330</a>
		</div>  
		
	<script src="skrypty/jquery-1.11.3.min.js"></script>
	<script>
	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	</script>
</body>
</html>