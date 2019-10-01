<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="imagens/root.png" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="estiloroot.css">
<title>Gerador de Relatórios</title>
</head>
<body>
<div id="conteudo">
<center><h1>Gerador de Relatórios</h1></center><br>
<br>
<b>Impressão de Usuários</b> &nbsp;
<select size="1" name="usuarios">
<option selected value="Selecione">Selecione o tipo de usuário</option>
<option value="1">Aluno</option>
<option value="2">Professor</option>
</select>
<br>
<br>
<b>Imprimir Lista de Usuários </b><br><br>
Quantos Usuários você deseja imprimir? &nbsp; <form name="quantidade" method="POST" action="gerar_pdf.php">
<input id="qtdd" type= "text" name="quant" placeholder="Digite o número de usuários"
>&nbsp; 
<a href=""><img src= "imagens/print.png" height="30px" width="30px"></a><br>
<br>
</form>

</div>
<br>
</body>
</html>