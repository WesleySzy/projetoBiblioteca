<?php include "conexao_banco.php";

$isbn=$_POST['isbn_livro'];
$titulo=$_POST['titulo_livro'];
$autor=$_POST['autor'];
$editora=$_POST['editora'];
$genero=$_POST['genero'];
$estoque=$_POST['estoque_livro'];

$sql=mysqli_query($conexao, "INSERT INTO livros (isbn, titulo_livro, id_autor, id_editora, id_genero, qtd_disponivel) VALUES ('$isbn', '$titulo', '$autor', '$editora', '$genero', '$estoque')");

echo"<script>window.location='interface_cad_livro.php';
alert('Gravado com Sucesso!');
</script>"; 
?>
