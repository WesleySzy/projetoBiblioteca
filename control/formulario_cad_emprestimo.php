<?php include "conexao_banco.php";

$livro=$_POST['livro'];
$aluno=$_POST['aluno'];
$dt_retirada=$_POST['dt_retirada'];
$dt_entrega=$_POST['dt_entrega'];
$qtd_totemp=$_POST['qtd_totemp'];

$sql=mysqli_query($conexao, "INSERT INTO emprestimo (id_livro, id_aluno, qtd_totemp, dt_retirada, dt_entrega) VALUES ('$livro', '$aluno', '$qtd_totemp', '$dt_retirada', '$dt_entrega')");

echo"<script>window.location='../view/interface_cad_emprestimo.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
