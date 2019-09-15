<?php include "conexao_banco.php";

$isbn=$_POST['isbn_livro'];
$titulo=$_POST['titulo_livro'];
$autor=$_POST['autor'];
$editora=$_POST['editora'];
$genero=$_POST['genero'];
$estoque=$_POST['estoque_livro'];

$procurar = "SELECT * FROM livros WHERE isbn = '$isbn' ";
$verificar = mysqli_query($conexao, $procurar);

if(mysqli_num_rows($verificar) > 0){

echo"<script>window.location='../view/interface_cad_livro.php';
alert('Livro ja cadastrado!');
</script>"; 

exit;

} else {

$sql=mysqli_query($conexao, "INSERT INTO livros (isbn, titulo_livro, id_autor, id_editora, id_genero, qtd_disponivel) VALUES ('$isbn', '$titulo', '$autor', '$editora', '$genero', '$estoque')");

mysqli_query($conexao, $sql);

echo"<script>window.location='../view/interface_cad_livro.php';
alert('Gravado com Sucesso!');
</script>"; 

mysqli_close($conexao); 
}
?>