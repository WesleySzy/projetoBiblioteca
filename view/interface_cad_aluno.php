<?php include "conexao_banco.php"; ?>
<!DOCTYPE html>
<html lang="en">

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
            <li class="nav-item">
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
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-edit"></i>
                    <span>Cadastrar</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="interface_cad_livro.php">Livros</a>
                        <a class="collapse-item" href="interface_cad_aluno.php">Alunos</a>
                        <a class="collapse-item" href="interface_cad_emprestimo.php">Emprestimos</a>
                        <a class="collapse-item" href="interface_cad_outros.php">Editora/Autor</a>
                    </div>
                </div>
            </li>


            <!-- Nav bar item - Tabela -->
            <li class="nav-item">
                <a class="nav-link" href="interface_rel_livro.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Livros</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="interface_rel_aluno.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Alunos</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="interface_rel_emprestimo.php">
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

                    document.write(day + myweekday + month + " de " + year + " - ");
                    </script>
                    <div id="demo"></div>
                </nav>
                <!-- Fim da barra do topo -->


                <!-- Comeco conteudo da pagina -->
                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="color: #3578E5;">Registro de Alunos</h6>
                        </div>
                        <div class="card-body">

                            <form name="formulario_cad_aluno" method="post" action="formulario_cad_aluno.php">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nome">Nome</label>
                                        <input placeholder="Insira o nome do aluno..." type="text" class="form-control"
                                            name="nome_aluno" maxlength="40" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="ano_letivo">Ano Letivo</label>
                                        <input placeholder="Insira o ano letivo do aluno..." type="text"
                                            class="form-control" name="ano_letivo" maxlength="4" autocomplete="off" required>
                                    </div>
                                </div>




                                <div class="form-row">
                                    <div class="form-group col-md-3">
                                        <label for="sala_aluno">Sala do Aluno</label>
                                        <input placeholder="Insira a sala do aluno..." type="text" class="form-control"
                                            name="sala_aluno" maxlength="20" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="sala_aluno">Turma do Aluno</label>
                                        <input placeholder="Insira a turma do aluno..." type="text" class="form-control"
                                            name="turma_aluno" maxlength="1" autocomplete="off" required>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="periodo">Periodo</label>
                                        <select class="form-control" name="periodo" required>
                                            <option disabled selected value>Selecione uma opção</option>
                                            <?php
                                        $result= "SELECT * FROM `periodo`";
                                        $resultado = mysqli_query($conexao, $result);
                                        while($row = mysqli_fetch_assoc($resultado)){ ?>
                                            <option value="<?php echo $row['id_periodo']; ?>">
                                                <?php echo $row['desc_periodo']; ?></option> <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn"
                                    style="background-color: #3578E5; color: white;">Cadastrar</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>

            <!-- Fim do conteudo da Pagina-->

            <!-- Rodape -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Todos os direitos reservados &copy; Unopar Arapongas 2019</span>
                    </div>
                </div>
            </footer>
            <!-- Fim do rodape-->

        </div>
        <!-- Fim do recorte do conteudo -->

    </div>


    <!-- Botao Voltar ao topo-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



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