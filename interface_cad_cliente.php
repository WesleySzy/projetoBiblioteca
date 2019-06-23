<!DOCTYPE html>
<html lang="en">

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
    <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #56004a; background-image: linear-gradient(180deg, #56004a 10%, #030b23 100%)" >

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
        <a class="nav-link" href="index.php">
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
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-edit"></i>
          <span>Cadastrar</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="interface_cad_cliente.php">Clientes</a>
            <a class="collapse-item" href="interface_cad_produtos.php">Produtos</a>
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
      <li class="nav-item ">
        <a class="nav-link" href="interface_rel_produtos.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabela Produtos</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="interface_rel_clientes.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tabela Clientes</span></a>
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
              <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquise..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn" type="button" style="background-color: #56004a;">
                  <i class="fas fa-search fa-sm" style="color: white"></i>
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
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquise..." aria-label="Search" aria-describedby="basic-addon2">
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

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
		<div class="container-fluid">

            <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold" style="color: #56004a;">Registro de Clientes</h6>
            </div>
            <div class="card-body">

			<form name="cadastro_cliente" method="post" action="formulario_cad_cliente.php">
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
			     	<label for="inputCity">Bairro</label>
			      <input type="text" class="form-control" name="end_bairro_cliente">
			    </div>
			    <div class="form-group col-md-3">
			     	<label for="inputEstado">Estado</label>
			      <select id="inputEstado" class="form-control" name="estado_cliente">
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
			      <input type="text" class="form-control" name="cidade_cliente">
			    </div>
			  </div>
          <div class="form-group">
			    	<div class="form-check">
			      	<input class="form-check-input" type="checkbox" id="gridCheck">
			      	<label class="form-check-label" for="gridCheck">Clique em mim</label>
			    	</div>
			  	</div>
			  	<button type="submit" class="btn" style="background-color: #56004a; color: white;" >Cadastrar</button>
			</form>

          </div>
          </div>
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
