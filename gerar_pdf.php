<?php
$quantos= $_POST['quantidade'];
$conexao= Mysqli_connect(localhost,root,null,teste);
$sql= "select *from tb_alunos limit ".$quantos."";
sql2= "select *from tb_professores limit ".$quantos."";
$executa_SQL= Mysqli_query($conexao,$sql);
$resultados= $conexao->query(sql);
while ($linha=$resultados->fetch_assoc()){
	print $linha['campo'];
}
Mysqli_close($conexao);




include ('pdf/mpdf.php');
$pagina= "<html>
<body></body>
<h1> Questões por disciplina</h1>
<?php 
$resultados= $conexao->query(sql);
while ($linha=$resultados->fetch_assoc()){
	print $linha['campo'];
}
Mysqli_close($conexao);
?>
</html>";
$arquivo= "questoes.pdf";
$mpdf= new mPDF();
$mpdf= WriteHtml($pagina);

$mpdf->Output($aquivo,'I');
?>