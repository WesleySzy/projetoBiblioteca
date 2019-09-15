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

	<!-- Custom fonts for this template-->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6 d-none d-lg-block">
								<img src="unopar.jpg">
							</div>
							<div class="col-lg-6">
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Bem vindo!</h1>
									</div>
									<form class="user" method="POST" action="valida.php">
										<div class="form-group">
											<input type="email" name="email" id="inputEmail" class="form-control form-control-user" placeholder="Digite seu usuário..." autocomplete="off" required autofocus>
										</div>
										<div class="form-group">
											<input type="password" name="senha" id="inputPassword" class="form-control form-control-user" placeholder="Digite sua senha..." required>
										</div>
										<div class="form-group">
										</div>
										<a><button class="btn btn-primary btn-user btn-block">
											Entrar
										</button></a>
										<hr>
										<a href="view/aluno_view.php" class="btn btn-google btn-user btn-block">
											<i class="fas fa-users"></i> Login como aluno
										</a>
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
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript-->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="js/sb-admin-2.min.js"></script>

	</body>

	</html>
