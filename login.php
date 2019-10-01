<?php
$email=$_POST['email'];
$senha=$_POST['senha'];


$conexao= mysqli_connect('localhost','root',null,'banco de questoes');
$SQL="select * FROM cadastro_aluno where alu_email ='$email' and alu_senha = '$senha ' ";
$resultados= $conexao -> Query($SQL);
while($linha=$resultados -> fetch_assoc()){
    $nome=$linha['alu_nome'];
       header("Location: perfil.php");
       exit;
}
	header("Location: perfil.php");


?>
