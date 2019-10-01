<?php
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];


$conexao= mysqli_connect('localhost','root',null,'banco de questoes');
$Query="INSERT INTO cadastro_aluno(alu_nome,alu_senha,alu_email) values ('".$nome."','".$senha."','".$email."');";
$executa=mysqli_Query($conexao,$Query);
mysqli_close($conexao);

		header("Location: perfil.php");

?>