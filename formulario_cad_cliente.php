<?php include "conexao_banco.php";

$nome=$_POST['nome_aluno'];
$sala_a=$_POST['sala_aluno'];
$a_letivo=$_POST['ano_letivo'];


$sql=mysqli_query($conexao, "INSERT INTO alunos (nome_aluno, sala_aluno, ano_letivo) VALUES ('$nome', '$sala_a', '$a_letivo')");

echo"<script>window.location='interface_cad_aluno.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
