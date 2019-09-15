<?php include "conexao_banco.php";

$editora=$_POST['editora'];

$procurar = "SELECT * FROM editora WHERE nome_editora = '$editora' ";
$verificar = mysqli_query($conexao, $procurar);

if(mysqli_num_rows($verificar) > 0){

echo"<script>window.location='interface_cad_outros.php';
alert('Editora ja cadastrada!');
</script>"; 

exit;

} else {

$sql=mysqli_query($conexao, "INSERT INTO editora (nome_editora) VALUES ('$editora')");

mysqli_query($conexao, $sql);

echo"<script>window.location='interface_cad_outros.php';
alert('Gravado com Sucesso!');
</script>"; 

mysqli_close($conexao); 
}
