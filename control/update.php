<?php include "conexao_banco.php";


$quantidade = ($_POST["quantidade"]);

$atualiza = mysqli_query($conexao,"UPDATE livros SET qtd_disponivel = '$quantidade'");

if($atualiza){
    echo"<script>window.location='../view/interface_rel_livro.php';
    alert('Alterado!');
    </script>"; 

}else{
    
    echo"<script>window.location='../view/interface_rel_livro.php';
    alert('Nao Alterado!');
    </script>"; 
}
?>