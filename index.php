<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bibliopar</title>

    <!-- Fontes para o template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Estilos customizados para o template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Estilo customizado para a pagina -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <form class="form-signin" method="POST" action="valida.php">
            <center>
                <h2 class="form-signin-heading">Bibliopar</h2>
            </center>
            <div class="form-row">
                <div class="form-group col-md-4 offset-md-4">
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required
                        autofocus>
                    <br />

                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha"
                        required>
                    <br />

                    <center><button class="btn btn-info" type="submit">Acessar</button></center>
                </div>
            </div>

        </form>

        <p class="text-center text-danger">
            <?php 
      if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}
      ?>
        </p>
        <p class="text-center text-success">
            <?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
        </p>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>