<?php
$conexao=mysqli_connect("localhost","root","","series");
$titulo=$_POST['titulo'];
$atrizprotagonista=$_POST['atrizprotagonista'];
$atorprotagonista=$_POST['atorprotagonista'];
$totalepisodios=$_POST['totalepisodios'];
$sinopse=$_POST['sinopse'];
echo "{$titulo}-{$atrizprotagonista}-{$atorprotagonista}-{$totalepisodios}-{$sinopse}";
$sql_inserir="insert into cadnovelas(titulo,atrizprotagonista,atorprotagonista,totalepisodios,sinopse) values ('{$titulo}','{$atrizprotagonista}','{$atorprotagonista}',{$totalepisodios},'{$sinopse}')";
mysqli_query($conexao,$sql_inserir);
mysqli_close($conexao);
?>