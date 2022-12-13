<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

        var data = google.visualization.arrayToDataTable([
            ['Sexo', 'Cantidad'],
<?php 
    $query = "select sexo, count(1) as can from becas  group by sexo";
    $query_run = mysqli_query($con, $query);
        while ($resultados = mysqli_fetch_assoc($query_run)){
            echo "['" .$resultados['sexo']. "', " .$resultados['can']. "],";
        }
?>
        ]);

        var options = {
            title: 'Generos'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
    </script>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Plataforma de Alumnos Josi</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">Padron de becas</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link active" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link" href="listaAlum.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-list"></i></div>
                                Lista Estudiantes
                            </a>
                            <a class="nav-link" href="register.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Registrar Estudiante
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Desarrollado Por:</div>
                        Fernando Vega
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
            <?php 
                    $queryA = "SELECT COUNT(*) AS grupoA FROM becas WHERE grupo = 'A' ";
                    $query_runA = mysqli_query($con, $queryA);
                    foreach($query_runA as $alumA);

                    $queryB = "SELECT COUNT(*)AS grupoB FROM becas WHERE grupo = 'B' ";
                    $query_runB = mysqli_query($con, $queryB);
                    foreach($query_runB as $alumB);

                    $queryC = "SELECT COUNT(*)AS grupoC FROM becas WHERE grupo = 'C' ";
                    $query_runC = mysqli_query($con, $queryC);
                    foreach($query_runC as $alumC);

                    $queryD = "SELECT COUNT(*)AS grupoD FROM becas WHERE grupo = 'D' ";
                    $query_runD = mysqli_query($con, $queryD);
                    foreach($query_runD as $alumD);

                    $queryE = "SELECT COUNT(*)AS grupoE FROM becas WHERE grupo = 'E' ";
                    $query_runE = mysqli_query($con, $queryE);
                    foreach($query_runE as $alumE);

                    $queryF = "SELECT COUNT(*)AS grupoF FROM becas WHERE grupo = 'F' ";
                    $query_runF = mysqli_query($con, $queryF);
                    foreach($query_runF as $alumF);

                    $queryT = "SELECT COUNT(*)AS total FROM becas";
                    $query_runT = mysqli_query($con, $queryT);
                    foreach($query_runT as $total);
            ?>
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center">Bienvenido Psic</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Patron de Becas</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Datos de Registro</div>
                                    <div class="card-body">
                                    <P>Estudiantes Grupo A:  <?= $alumA['grupoA']; ?></P>
                                    <P>Estudiantes Grupo B:  <?= $alumB['grupoB']; ?></P>    
                                    <P>Estudiantes Grupo C:  <?= $alumC['grupoC']; ?></P>
                                    <P>Estudiantes Grupo D:  <?= $alumD['grupoD']; ?></P>
                                    <P>Estudiantes Grupo E:  <?= $alumE['grupoE']; ?></P>
                                    <P>Estudiantes Grupo F:  <?= $alumF['grupoF']; ?></P>
                                    <p>Total de Estudiantes: <?= $total['total']; ?></p>
                                    </div>
                                    <a class="small text-white stretched-link" href="alumnos.php">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        Ver Detalles
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div></a>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6 ">
                            <div id="piechart" style="width: auto; height: 500px;"></div>
                            </div>
                        </div>                        
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
