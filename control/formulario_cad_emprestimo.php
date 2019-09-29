<?php include "conexao_banco.php";

$livro=$_POST['livro'];
$aluno=$_POST['aluno'];
$dt_retirada=$_POST['dt_retirada'];
$dt_entrega=$_POST['dt_entrega'];

if($dt_retirada < $dt_entrega){
$sql=mysqli_query($conexao, "INSERT INTO emprestimo (id_livro, id_aluno, dt_retirada, dt_entrega) VALUES ('$livro', '$aluno', '$dt_retirada', '$dt_entrega')");

echo"<script>window.location='../view/interface_cad_emprestimo.php';
alert('Gravado com Sucesso!');
</script>"; }
else{
     echo"<script>window.location='../view/interface_cad_emprestimo.php';
    alert('Data de Devolução é menor que a Data de Retirada!');
    </script>";
} 
?>