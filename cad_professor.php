<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="imagens/icon.png" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="estiloaluno.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Cadastro de Alunos</title>
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
      <li><a href="funcionamentop.php">Como funciona</a></li>
	  <li><a href="criadores.php">Criadores</a></li>
	  <li><a href="regulamento.php">Regulamento</a></li>
	   </ul>
  </div>
</nav>    
    <div id=divimage2> <img src="imagens/cad.png"> </div>
    <div id=divform>
        <div id=divcase2>
        <form name="form" method="POST" action="conexao_pro.php">
         <p><FONT FACE="Comic Sans MS">
         Nome: <input id="textnome" type="text" name="nomeusuario" size="40" placeholder="Nome"/><br/>
         Email: <input id="textemail" type="text" name="email" size="40" placeholder="Email"/><br/>
         Senha: <input id="textsenha" type="password" name="senha" size="40" placeholder="Senha"/><br/>
         Disciplina: <input id="textdisciplina" type="text" name="disciplina" size="40" placeholder="Disciplina"/><br/>
         </FONT></p>
            
            <input id="botaolog1" type="submit" value=" "action"conexao_pro.php"/>

        </form>
        </div>
    </div>

</body>
</html>