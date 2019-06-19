<?php include "conexao_banco.php";

$nome=$_POST['nome_cliente'];
$sobrenome=$_POST['sobrenome_cliente'];
$cpf=$_POST['cpf_cliente'];
$telefone=$_POST['telefone_cliente'];
$rua_cliente=$_POST['end_rua_cliente'];
$num_cliente=$_POST['end_num_cliente'];
$bairro_cliente=$_POST['end_bairro_cliente'];
$cidade=$_POST['cidade_cliente'];
$estado=$_POST['estado_cliente'];

$sql=mysqli_query($conexao, "INSERT INTO clientes (nome_cliente, sobrenome_cliente, cpf_cliente, telefone_cliente, end_rua_cliente, end_num_cliente, end_bairro_cliente, cidade_cliente, estado_cliente) VALUES ('$nome', '$sobrenome', '$cpf', '$telefone', '$rua_cliente', '$num_cliente', '$bairro_cliente', '$cidade', '$estado')");

echo"<script>window.location='cadastro_clientes.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
