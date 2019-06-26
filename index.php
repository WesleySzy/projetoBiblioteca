<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Szystem</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
      <li class="nav-item active">
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
      <li class="nav-item">
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
          <!-- Page Heading -->
        	<h1 class="h1 mb-4 text-gray-800">Relogio</h1> 
				<center><script type="text/javascript" language="JavaScript">
					// Função que monta Mês, Dia, e Ano para exibir no HTML
					// Declaração de Variaveis que receberam os valores:

					var now = new Date();
					var hours = now.getHours();
					var minutes = now.getMinutes();
					var seconds = now.getSeconds();
					var timeValue = "" + ((hours >12) ? hours -12 :hours)

					//Tratamento quantidade de Digitos nos Minutos e exibi se é 
					// dia ou noite, PM, AM.

					timeValue += ((minutes < 10) ? ":0" : ":") + minutes
					timeValue += ((seconds < 10) ? ":0" : ":") + seconds
					timeValue += (hours >= 12) ? " PM" : " AM"
					timerRunning = true;
					mydate = new Date();
					myday = mydate.getDay();
					mymonth = mydate.getMonth();
					myweekday = mydate.getDate();
					weekday = myweekday;
					myyear = mydate.getFullYear();
					year = myyear;

					// Tratamento dos Dias da Semana

					if(myday == 0)
					  day = " Domingo, "

					else if(myday == 1)
					  day = " Segunda Feira, "

					else if(myday == 2)
					  day = " Terça Feira, "

					else if(myday == 3)
					  day = " Quarta Feira, "

					else if(myday == 4)
					  day = " Quinta Feira, "

					else if(myday == 5)
					  day = " Sexta Feira, "

					else if(myday == 6)
					  day = " Sábado, "

					//Tratamento dos Meses

					if(mymonth == 0)
					  month = " de Janeiro  "

					else if(mymonth ==1)
					  month = " de Fevereiro  "

					else if(mymonth ==2)
					  month = " de Março  "

					else if(mymonth ==3)
					  month = " de April "

					else if(mymonth ==4)
					  month = " de Maio "

					else if(mymonth ==5)
					  month = " de Junho  "

					else if(mymonth ==6)
					  month = " de Julho "

					else if(mymonth ==7)
					  month = " de Agosto  "

					else if(mymonth ==8)
					  month = " de Setembro  "

					else if(mymonth ==9)
					  month = " de Outubro  "

					else if(mymonth ==10)
					  month = " de Novembro "

					else if(mymonth ==11)
					  month = " de Dezembro "

					//Exibe na Pagina o Resultado concatenando(+) os valores

					document.write( day + myweekday + month + " de " + year + " - " + timeValue);
				</script></center>        
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

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

</body>

</html>
