<?php include "conexao_banco.php";

$nome=$_POST['nome_aluno'];
$sala_a=$_POST['sala_aluno'];
$turma=$_POST ['turma_aluno'];
$a_letivo=$_POST['ano_letivo'];
$periodo=$_POST ['periodo'];

$procurar = "SELECT * FROM alunos WHERE nome_aluno = '$nome' AND sala_aluno='$sala_a' AND turma_aluno='$turma' ";
$verificar = mysqli_query($conexao, $procurar);

if(mysqli_num_rows($verificar) > 0){

echo"<script>window.location='interface_cad_aluno.php';
alert('Aluno ja cadastrado!');
</script>"; 

exit;

} else {

$sql=mysqli_query($conexao, "INSERT INTO alunos (nome_aluno, sala_aluno, turma_aluno, ano_letivo, id_periodo) VALUES ('$nome', '$sala_a', '$turma', '$a_letivo', '$periodo')");

mysqli_query($conexao, $sql);

echo"<script>window.location='interface_cad_aluno.php';
alert('Gravado com Sucesso!');
</script>"; 

mysqli_close($conexao); 
}
?>