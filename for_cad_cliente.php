<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cadastro de Clientes</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

    <body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fab fa-buffer"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Szystem</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.html">
          <i class="fas fa-home"></i>
          <span>Página Inicial</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item  active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-edit"></i>
          <span>Cadastrar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="for_cad_cliente.php">Clientes</a>
            <a class="collapse-item" href="for_cad_produtos.php">Produtos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="rel_pedidos.php">
          <i class="fas fa-hamburger"></i>
          <span>Pedidos</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="rel_produtos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabela Produtos</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tavin do Sódorante</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>

        </nav>
		<div class="container">
			<form name="cadastro_cliente" method="post" action="cds_cliente.php">

			 	<div class="form-row">
			   	<div class="form-group col-md-4">
			     		<label for="inputName">Nome</label>
			     		<input type="text" class="form-control" name="nome_cliente">
			    </div>
			    <div class="form-group col-md-4">
			      	<label for="inputSobrenome">Sobrenome</label>
			      	<input type="text" class="form-control" name="sobrenome_cliente">
			    </div>
			  </div>

			  <div class="form-row">
          <div class="form-group col-md-4">
              <label for="inputAddress">CPF</label>
              <input type="text" class="form-control" name="cpf_cliente">
          </div>
			   	<div class="form-group col-md-4">
			     	  <label for="inputTel">Telefone</label>
			     		<input type="text" class="form-control" name="telefone_cliente">
			    </div>	  
        </div>

			  <div class="form-row">
			  	<div class="form-group col-md-7">
			    	<label for="inputAddress2">Endereço</label>
			    	<input type="text" class="form-control" name="end_rua_cliente" placeholder="Rua...">
			  </div>
			  	<div class="form-group col-md-1">
			   		<label for="inputAddress2">Número</label>
			   		<input type="text" class="form-control" name="end_num_cliente" placeholder="Nº">
			    </div>
			  </div>

			  <div class="form-row">
			  	<div class="form-group col-md-2">
			     	<label for="inputCity">CEP</label>
			      <input type="text" class="form-control" name="cep_cliente">
			    </div>
			    <div class="form-group col-md-3">
			     	<label for="inputEstado">Estado</label>
			      <select id="inputEstado" class="form-control">
						  <option value="ac">Acre</option> 
						  <option value="al">Alagoas</option> 
						  <option value="am">Amazonas</option> 
						  <option value="ap">Amapá</option> 
						  <option value="ba">Bahia</option> 
						  <option value="ce">Ceará</option> 
						  <option value="df">Distrito Federal</option> 
						  <option value="es">Espírito Santo</option> 
						  <option value="go">Goiás</option> 
						  <option value="ma">Maranhão</option> 
						  <option value="mt">Mato Grosso</option> 
						  <option value="ms">Mato Grosso do Sul</option> 
						  <option value="mg">Minas Gerais</option> 
						  <option value="pa">Pará</option> 
						  <option value="pb">Paraíba</option> 
						  <option value="pr"selected>Paraná</option> 
						  <option value="pe">Pernambuco</option> 
						  <option value="pi">Piauí</option> 
						  <option value="rj">Rio de Janeiro</option> 
						  <option value="rn">Rio Grande do Norte</option> 
						  <option value="ro">Rondônia</option> 
						  <option value="rs">Rio Grande do Sul</option> 
						  <option value="rr">Roraima</option> 
						  <option value="sc">Santa Catarina</option> 
						  <option value="se">Sergipe</option> 
						  <option value="sp">São Paulo</option> 
						  <option value="to">Tocantins</option> 
						</select>
			    </div>
			    <div class="form-group col-md-3">
			     	<label for="inputCity">Cidade</label>
			      <input type="text" class="form-control" id="inputCity">
			    </div>
			  </div>
          <div class="form-group">
			    	<div class="form-check">
			      	<input class="form-check-input" type="checkbox" id="gridCheck">
			      	<label class="form-check-label" for="gridCheck">Clique em mim</label>
			    	</div>
			  	</div>
			  	<button type="submit" class="btn btn-primary">Entrar</button>
			</form>
		</div>
    </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
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

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>
  </div>
</body>
</html>
