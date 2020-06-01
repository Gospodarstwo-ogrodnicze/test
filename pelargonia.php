<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gospodarstwo ogrodnicze</title>
	<meta name="description" content="Gospodarstwo ogrodnicze Tomasz Dybalski" />
	<meta name="keywords" content="kwiaty, ogród żarnów, żarnów, gmina żarnów, targ żarnów, " />
    <link type="image/x-icon" rel="Shortcut icon" href="favicon.ico" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet'/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/gal.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
</head>
<body>

		<div class="header">
		
        <div class="logo">
            <img src="images/ros.png" style="float: left;"/>
            <a style="color: #00cc00">Godpodarstwo</a> ogrodnicze
		<div style="clear:both;"></div>
        </div>
        </div>
    
  <nav>
  <a id="resp-menu" class="responsive-menu" href="#"><i class="fa fa-reorder"></i> Menu</a>    
  <ul class="menu">
  <li><a  href="gospodarstwo-ogrodnicze"><i class="fa fa-home"></i> Strona główna</a>
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
		<a>Pelargonia</a>
		</div>
            
            <img src="images/Pelargonia.png" style="float: left; margin-right: 20px;" onclick="openModal();currentSlide(1)" class="pokazowe; row; column" class="hover-shadow cursor">

            
		<div class="tresc">
		<a>Cena: 150zł / szt
		<br>
		Kolory:
		<br>
		&nbsp -czerwony
		<br>
		&nbsp -biały
		<br>
		&nbsp -różowo-biały
		</a>
		</div>
        <br>
            &nbsp&nbsp&nbsp<input type="submit" name="Wyślij" value="Zamów" class="zamow" onclick="location.href='zamowienia'">
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
    
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="images/Pelargonia.png" style="width: 100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="images/wiszace.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="images/Pelargonia.png" style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="images/wiszace.png" style="width:100%">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
    
</body>
</html>
