<?php
$email=$_POST['email'];
$senha=$_POST['senha'];


$conexao= mysqli_connect('localhost','root',null,'banco de questoes');
$SQL="select * FROM cad_professor where pro_email ='$email' and pro_senha= '$senha' ";
$resultados= $conexao -> Query($SQL);
while($linha=$resultados -> fetch_assoc()){
   
    $nome=$linha['pro_nome'];
	header("Location: perfil_pro.php");
    exit;
}

		header("Location: professores.php");



?>