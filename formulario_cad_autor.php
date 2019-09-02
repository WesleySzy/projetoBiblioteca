<?php include "conexao_banco.php";

$autor=$_POST['autor'];

$sql=mysqli_query($conexao, "INSERT INTO autor (nome_autor) VALUES ('$autor')");

echo"<script>window.location='interface_cad_outros.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
