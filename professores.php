<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="estiloaluno.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Bem-vindo Professores</title>
</head>

<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="imagens/icon.png" height="20px" width="20px"></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="">Questões por disciplina</a></li>
      <li><a href="cadastro.php">Enviar questão</a></li>
      <li><a href="cadastro.php">Usuários</a></li>
      <li><a href="funciomento.php">Como funciona</a></li>
	  <li><a href="criadores.php">Criadores</a></li>
	  <li><a href="regulamento.php">Regulamento</a></li>
	   </ul>
  </div>
</nav>    
    <div id=divimage2> <img src="imagens/prof.png"> </div>
    <div id=divform>
        <div id=divcase2>
        <form name="form" method="POST" action="login_pro.php">
        <p><FONT FACE="Comic Sans MS">
         Email: <input id="textemail" type="text" name="email" size="40" placeholder="Email"/><br/>
         Senha: <input id="textsenha" type="password" name="senha" size="40" placeholder="Senha"/><br/>
         </FONT></p>
            
            <input id="botaolog" type="submit" value=" "action="login_pro.php"/>

        </form>
        </div>
    </div>
    <a href="cad_professor.php"><center><h1>Já é cadastrado?</h1></center></a>

</body>
</html>