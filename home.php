<?php include "control/conexao_banco.php"; ?>
<?php
$nivel_necessario = "admin@admin";
session_start();
if(!$_SESSION["usuarioEmail"] != $nivel_necessario){
header("location: ../index.php");
exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

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

<body id="page-top">

	<!-- Recorte Pagina -->
	<div id="wrapper">

		<!-- Barra Lateral -->
		<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #3578E5">

			<!-- Barra Lateral marca -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
				<div class="sidebar-brand-icon rotate-n-15">
					<i class="fas fa-book-open"></i>
				</div>
				<div class="sidebar-brand-text mx-3">Biblioteca</div>
			</a>

			<!-- Divisor -->
			<hr class="sidebar-divider my-0">

			<!-- Nav bar pagina inicial -->
			<li class="nav-item active">
				<a class="nav-link" href="home.php">
					<i class="fas fa-home"></i>
					<span>Página Inicial</span></a>
				</li>

				<!-- Divisor -->
				<hr class="sidebar-divider">

				<!-- Cabecalho -->
				<div class="sidebar-heading">
					Menu
				</div>

				<!-- Itens Navbar - juncao de paginas do menu -->
				<li class="nav-item">
					<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
					aria-expanded="true" aria-controls="collapseTwo">
					<i class="fas fa-edit"></i>
					<span>Cadastrar</span>
				</a>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item" href="view/interface_cad_livro.php">Livros</a>
						<a class="collapse-item" href="view/interface_cad_aluno.php">Alunos</a>
						<a class="collapse-item" href="view/interface_cad_emprestimo.php">Emprestimos</a>
						<a class="collapse-item" href="view/interface_cad_outros.php">Editora/Autor</a>
					</div>
				</div>
			</li>


			<!-- Nav bar item - Tabela -->
			<li class="nav-item">
				<a class="nav-link" href="view/interface_rel_livro.php">
					<i class="fas fa-fw fa-table"></i>
					<span>Livros</span></a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="view/interface_rel_aluno.php">
						<i class="fas fa-fw fa-table"></i>
						<span>Alunos</span></a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="view/interface_rel_emprestimo.php">
							<i class="fas fa-fw fa-table"></i>
							<span>Emprestimos</span></a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="sair.php">
								<i class="fas fa-sign-out-alt"></i>
								<span>Sair</span></a>
							</li>


							<!-- Divisor -->
							<hr class="sidebar-divider d-none d-md-block">

							<!-- Barra lateral ativador -->
							<div class="text-center d-none d-md-inline">
								<button class="rounded-circle border-0" id="sidebarToggle"></button>
							</div>

						</ul>
						<!-- fim barra lateral -->


						<!-- Recorte de conteudo -->
						<div id="content-wrapper" class="d-flex flex-column">

							<!-- Conteudo Principal -->
							<div id="content">

								<!-- Barra do topo -->
								<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

									<!-- Barra lateral ativador (topo) -->
									<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
										<i class="fa fa-bars"></i>
									</button>

									<!-- barra de navegacao do topo -->
									<ul class="navbar-nav ml-auto">

										<!-- barra de navegacao item - search dropdown -->
										<li class="nav-item dropdown no-arrow d-sm-none">
											<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
											data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											<i class="fas fa-search fa-fw"></i>
										</a>
										<!-- Dropdown mensagem -->
										<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
										aria-labelledby="searchDropdown">
										<form class="form-inline mr-auto w-100 navbar-search">
											<div class="input-group">
												<input type="text" class="form-control bg-light border-0 small"
												placeholder="Pesquise..." aria-label="Search"
												aria-describedby="basic-addon2">
												<div class="input-group-append">
													<button class="btn btn-primary" type="button">
														<i class="fas fa-search fa-sm"></i>
													</button>
												</div>
											</div>
										</form>
									</div>
								</li>


							</ul>
							<script type="text/javascript">
								var myVar = setInterval(myTimer, 1000);

								function myTimer() {
									var d = new Date(),
									displayDate;
									if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
										displayDate = d.toLocaleTimeString('pt-BR');
									} else {
										displayDate = d.toLocaleTimeString('pt-BR', {
											timeZone: 'America/Belem'
										});
									}
									document.getElementById("demo").innerHTML = displayDate;
								}

                    // Função que monta Mês, Dia, e Ano para exibir no HTML
                    // Declaração de Variaveis que receberam os valores:

                    var now = new Date();

                    //Tratamento quantidade de Digitos nos Minutos e exibi se é 
                    // dia ou noite, PM, AM.

                    mydate = new Date();
                    myday = mydate.getDay();
                    mymonth = mydate.getMonth();
                    myweekday = mydate.getDate();
                    weekday = myweekday;
                    myyear = mydate.getFullYear();
                    year = myyear;

                    // Tratamento dos Dias da Semana

                    if (myday == 0)
                    	day = " Domingo, "

                    else if (myday == 1)
                    	day = " Segunda Feira, "

                    else if (myday == 2)
                    	day = " Terça Feira, "

                    else if (myday == 3)
                    	day = " Quarta Feira, "

                    else if (myday == 4)
                    	day = " Quinta Feira, "

                    else if (myday == 5)
                    	day = " Sexta Feira, "

                    else if (myday == 6)
                    	day = " Sábado, "

                    //Tratamento dos Meses

                    if (mymonth == 0)
                    	month = " de Janeiro  "

                    else if (mymonth == 1)
                    	month = " de Fevereiro  "

                    else if (mymonth == 2)
                    	month = " de Março  "

                    else if (mymonth == 3)
                    	month = " de April "

                    else if (mymonth == 4)
                    	month = " de Maio "

                    else if (mymonth == 5)
                    	month = " de Junho  "

                    else if (mymonth == 6)
                    	month = " de Julho "

                    else if (mymonth == 7)
                    	month = " de Agosto  "

                    else if (mymonth == 8)
                    	month = " de Setembro  "

                    else if (mymonth == 9)
                    	month = " de Outubro  "

                    else if (mymonth == 10)
                    	month = " de Novembro "

                    else if (mymonth == 11)
                    	month = " de Dezembro "

                    //Exibe na Pagina o Resultado concatenando(+) os valores

                    document.write(day + myweekday + month + " de " + year + "   ");
                </script>
                <div id="demo"><a href="https://www.youtube.com/watch?v=4kae32uj7dA" style="text-decoration: none;">   </a></div>
            </nav>
            <!-- Fim da barra do topo -->

            <!-- Comeco da pagina de conteudo -->
            <div class="container-fluid">

            	<!-- DataTables -->
            	<div class="card shadow mb-4">

            		<div class="card-header py-3">
            			
            			<div class="d-sm-flex align-items-center justify-content-between mb-0">
            				<h6 class="m-0 font-weight-bold" style="color: #3578E5;">Alunos com entrega atrasada</h6>
            			</div>		
            		</div>
            		<div class="card-body">
            			<div class="table-responsive">
            				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            					<thead>
            						<tr>
            							<th>Livro</th>
            							<th>Aluno</th>
            							<th>Retirada</th>
            							<th>Devolução</th>
            							<th>Tempo de atraso</th>
            							<th>Devolução</th>
            						</tr>
            					</thead>
            					<tbody>
            						<?php 
            						$sql=mysqli_query($conexao, "SELECT * FROM emprestimo JOIN livros ON emprestimo.id_livro = livros.id_livro JOIN alunos ON emprestimo.id_aluno = alunos.id_aluno WHERE id_emprestimo <> 0 and dt_entrega < CURRENT_DATE and dt_devolucao = 0000-00-00");
            						while($row = mysqli_fetch_array($sql)){ ?>
            							<tr>
            								<td><?php echo $row['titulo_livro'];?></td>
            								<td><?php echo $row['nome_aluno'];?></td>
            								<td><?php echo date('d/m/Y', strtotime($row['dt_retirada'])); ?></td>
            								<td><?php echo date('d/m/Y', strtotime($row['dt_entrega'])); ?></td>
            								<td><?php
            								date_default_timezone_set('America/Sao_Paulo'); 
            								$pega_data = date("d-m-Y", strtotime($row['dt_entrega']));
            								$data_sistema = date("d-m-Y");

            								$pega_data_Time = new DateTime($pega_data);
            								$data_sistema_Time = new DateTime($data_sistema);

            								$pega_diferenca = $data_sistema_Time->diff($pega_data_Time);

            								echo "Está atrasado em " . $pega_diferenca->m . " meses e " .  $pega_diferenca->d . " dias.";
            								?></td>
            								<td>
            									<button type="button" class="btn" data-toggle="modal" data-target="#editarModal"><i class="fas fa-check" style="color: green;"></i><br>Confirmar</button>
            								</td>
            							</tr>
            						</div>
            						<div class="modal fade" id="editarModal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
            							<div class="modal-dialog" role="document">
            								<form method="post" class="form-horizontal" role="form">
            									<div class="modal-content">
            										<div class="modal-header">
            											<input type="hidden" name="edit_item_id_emprestimo"value="<?php echo $row['id_emprestimo'];?>">
            											<h5 class="modal-title" id="modal">Confirmação</h5>
            											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
            												<span aria-hidden="true">&times;</span>
            											</button>
            										</div>
            										<div class="modal-body">
            											<h7>Deseja mesmo confirmar a devolução?!</h7>
            										</div>
            										<div class="modal-footer">
            											<button type="submit" class="btn btn-success" name="ocultar" style="color: white;">Sim</button>
            											<button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
            										</form>
            									</div>
            								</div>
            							</div>
            							<?php if(isset($_POST['ocultar'])){
                                        $edit_item_id_emprestimo = $_POST['edit_item_id_emprestimo'];
                                        $sql = "UPDATE emprestimo SET
                                        dt_devolucao=CURRENT_DATE
                                        WHERE id_emprestimo ='$edit_item_id_emprestimo' ";
                                        if ($conexao->query($sql) === TRUE) {
                                            echo '<script>window.location.href="home.php"</script>';
                                        }
                                    }
                                    ?>
            						<?php } ?>
            					</tbody>
            				</table>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- /.container-fluid -->
            <!-- titulo da pagina -->

            <!-- /.container-fluid -->

        </div>
        <!-- Fim do conteudo -->

        <!-- Rodape -->
        <footer class="sticky-footer bg-white">
        	<div class="container my-auto">
        		<div class="copyright text-center my-auto">
        			<span>Todos os direitos reservados &copy; Unopar Arapongas 2019</span>
        		</div>
        	</div>
        </footer>
        <!-- Fim do rodape -->

    </div>
    <!-- Fim do recorte do conteudo -->

</div>


<!-- Botao de voltar ao topo -->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Table translation to portuguese -->
<script src="js/portuguese.js"></script>

</body>

</html>
