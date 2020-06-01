<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gospodarstwo ogrodnicze</title>
	<meta name="description" content="Gospodarstwo ogrodnicze Tomasz Dybalski" />
	<meta name="keywords" content="kwiaty, ogród żarnów, żarnów, gmina żarnów, targ żarnów, " />
    <link type="image/x-icon" rel="Shortcut icon" href="favicon.ico" />
    <title>Gospodarstwo ogrodnicze</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>
    
    <?php
/* --- OPERACJA NA CIASTECZKACH, DODAJEMY WARTOŚCI */
/* warunek: jeżeli nie ma ciasteczka w pamięci przeglądarki o nazwie licznik_cook, z wartością 1 to: */
if(!$_COOKIE['LicznikCook']){

/* jeżeli plik z bazą danych (licznik.db) istnieje i jest zapisywalny (chmod: 666), to: */
if(file_exists("licznik.db")){
    if(is_writeable('licznik.db')){

    /* pobieramy zawartość tego pliku i podwyższamy jego wartość, np. z 34 na 35 */
    $bdpobierz = file_get_contents("licznik.db") + "1";

    /* otwieramy plik licznik.db - bazę danych */
    $bdzapisz = fopen("licznik.db", "w");

    /* nadpisujemy istniejącą wartość na tą ze zmiennej $bdpobierz, następnie zamykamy */
    fwrite($bdzapisz, $bdpobierz);
    fclose($bdzapisz);
    }
}

/* wysyłamy przeglądarce ciasteczko o nazwie licznik_cook, z wartością 1 (przykładowa wartość) oraz ustawiamy jego ważność na 24 godziny */
setcookie("LicznikCook", '1', time()+3600*24);
}

/* --- WYŚWIETLAMY ILOŚĆ ODWIEDZIN */
/* sprawdzamy, czy plik bazy danych istnieje */
if(file_exists("licznik.db")){

    /* sprawdzamy, czy plik bazy danych jest zapisywalny (666) */
    if(is_writeable('licznik.db')){

        /* pobieramy plik */
        $bdpokaz = file_get_contents("licznik.db");

        /* wyświetlamy zawartość, czyli ilość odwiedzin */
        echo "Licznik odwiedzin: $bdpokaz";

        /* jeżeli plik nie jest zapisywalny wyświetlamy komunikat o błędzie: */
        }else{echo "Plik nie jest zapisywalny. Ustaw chmody na 666.";}

}else{echo "Plik nie istnieje. Utwórz plik licznik.db i wgraj go na serwer.";}

?>
    

    
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
  <li><a class="homer"><i class="fa fa-home"></i> Strona główna</a>
  <li><a  href="cennik"><i class="fa fa-tags"></i> Cennik</a></li>
  <li><a  href="aktualności"><i class="fa fa-bullhorn"></i> Aktualności</a>
  <li><a  href="kontakt"><i class="fa fa-envelope"></i> Kontakt</a></li>
  <li><a  href="o-nas"><i class="fa fa-user"></i> O nas</a>
  </ul>
  </nav>
 <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="skrypty/script.js"></script>
    
<div class="content">
<div id="text">
    <div class="tytul">
    <a style="color: #00cc00">Gospodarstwo</a><a>&nbspogrodnicze</a>
    </div>
    <div class="tresc">
    <a>Nasza firma znajduje się w Żarnowie na ulicy Koneckiej. Na naszym gospodarstwie można zakupić kwiaty oraz sadzonki warzyw.</a>
    </div>
    <center><img src="images/pokaz.png" style="margin-right: 20px; margin-top: 20px;" class="obrazek"></center>
</div>
</div>

    
    
        <div class="stopka">
		<a style="font-size: 15px; font-weight: bold">Kontakt &nbsp|&nbsp 123@123.pl &nbsp|&nbsp Gospodarstwo ogrodnicze, Konecka 39 Żarnów 26-330</a>
		</div>   
    
    
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
    
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="skrypty/jquery.bpopup.min.js"></script>
	<script>
	$( document ).ready(function() {
		$('#popup_this').bPopup();
	});
	</script>

</body>
</html>
