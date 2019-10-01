<!DOCTYPE html>
<html>
<title>Bem-vindo</title>
 <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open();"><i class="fa fa-bars"></i><img src="imagens/icon.png" height="20px" width="20px"></button>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Questões por disciplina</a></li>
      <li><a href="#">Enviar questão</a></li>
      <li><a href="cadastro.php">Usuários</a></li>
      <li><a href="funcionamento.php">Como funciona</a></li>
	  <li><a href="criadores.php">Criadores</a></li>
	  <li><a href="regulamento.php">Regulamento</a></li>
	   </ul>
  </div>
</nav>   
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidenav"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="imagens/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Olá, <strong >**********</strong></span><br>
      <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i> </a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Bem-Vindo</h5>
  </div>
  <a href="#" class="w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  <a href="#" class="w3-padding w3-blue"><i class="fa fa-users fa-fw"></i> Plano de aula</a>
  <a href="#" class="w3-padding"><i class="fa fa-eye fa-fw"></i> Visualizações</a>
  <a href="#" class="w3-padding"><i class="fa fa-users fa-fw"></i>Outras aulas</a>
  <a href="#" class="w3-padding"><i class="fa fa-bell fa-fw"></i>Novos</a>
  <a href="#" class="w3-padding"><i class="fa fa-bank fa-fw"></i>Simulados</a>
  <a href="#" class="w3-padding"><i class="fa fa-cog fa-fw"></i>Configurações</a><br><br>
</nav>
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<div class="w3-main" style="margin-left:300px;margin-top:43px;">
  <div class="w3-row-padding w3-margin-bottom">
   <div class="w3-row-padding w3-padding-16 w3-center" id="food">
    <div class="w3-quarter">
      <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
      <h3>The Perfect Sandwich, A Real NYC Classic</h3>
      <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/steak.jpg" alt="Steak" style="width:100%">
      <h3>Let Me Tell You About This Steak</h3>
      <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/cherries.jpg" alt="Cherries" style="width:100%">
      <h3>Cherries, interrupted</h3>
      <p>teste</p>
      <p>teste</p>
    </div>
    <div class="w3-quarter">
      <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
      <h3>teste</h3>
      <p>teste</p>
    </div>
  </div>
<script>
var mySidenav = document.getElementById("mySidenav");
var overlayBg = document.getElementById("myOverlay");
function w3_open() {
    if (mySidenav.style.display === 'block') {
        mySidenav.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidenav.style.display = 'block';
        overlayBg.style.display = "block";
    }
}
function w3_close() {
    mySidenav.style.display = "none";
    overlayBg.style.display = "none";
}
</script>
</body>
</html>
