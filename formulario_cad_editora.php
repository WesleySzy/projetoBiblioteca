<?php include "conexao_banco.php";

$editora=$_POST['editora'];

$sql=mysqli_query($conexao, "INSERT INTO editora (nome_editora) VALUES ('$editora')");

echo"<script>window.location='interface_cad_outros.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
