<?php
	$host="localhost";
	$user="root";
	$banco="bibliopar";
	
	$conexao=mysqli_connect("localhost", "root", "") or die ("Banco de Dados Off_line");
	mysqli_select_db($conexao, $banco) or die ("Banco de Dados não conectado");
?>