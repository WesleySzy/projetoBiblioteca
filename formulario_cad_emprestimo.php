<?php include "conexao_banco.php";

$nome_produto=$_POST['nome_produto'];
$valor_produto=$_POST['valor_produto'];
$obs_produto=$_POST['obs_produto'];

$sql=mysqli_query($conexao, "INSERT INTO produtos (nome_produto, valor_produto, obs_produto) VALUES ('$nome_produto', '$valor_produto', '$obs_produto')");

echo"<script>window.location='interface_cad_produtos.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
