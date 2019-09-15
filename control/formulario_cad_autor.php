<?php include "conexao_banco.php";

$autor=$_POST['autor'];

$procurar = "SELECT * FROM autor WHERE nome_autor = '$autor' ";
$verificar = mysqli_query($conexao, $procurar);

if(mysqli_num_rows($verificar) > 0){

echo"<script>window.location='../view/interface_cad_outros.php';
alert('Autor ja cadastrado!');
</script>"; 

exit;

} else {

$sql=mysqli_query($conexao, "INSERT INTO autor (nome_autor) VALUES ('$autor')");

mysqli_query($conexao, $sql);

echo"<script>window.location='../view/interface_cad_outros.php';
alert('Gravado com Sucesso!');
</script>"; 

mysqli_close($conexao); 
}
?>