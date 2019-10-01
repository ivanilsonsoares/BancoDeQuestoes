<?php
$nome=$_POST['nome'];
$senha=$_POST['senha'];
$email=$_POST['email'];
$disciplina=$_POST['disciplina'];


$conexao= mysqli_connect('localhost','root',null,'banco de questoes');
$Query="INSERT INTO cad_professor(pro_nome,pro_senha,pro_email,pro_disciplina) values ('".$nome."','".$senha."','".$email."','".$disciplina."');";
$executa=mysqli_Query($conexao,$Query);
mysqli_close($conexao);

		header("Location: perfil_pro.php");

?>