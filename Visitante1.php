<?php
echo "<apan style='color:red;'<h3><b>***************Paginan Visitante 1***************";

$nome2=$_COOKIE['nome'];
$idade2=$_COOKIE['idade'];

echo "Nome:".$_COOKIE['nome']."<br>";
echo "Idade:".$_COOKIE['idade'];

echo "<br><br>";
echo "Nome:".$nome2."<br>";
echo "Idade:".$idade2;

echo "<a href='formulario.html'><h5><b>Voltar</b></h5></a>";
echo "<a href='Visitante1.php'><h5><b>Visitante 1</b></h5></a>";
echo "<a href='Visitante2.php'><h5><b>Visitante 2</b></h5></a>";
?>

