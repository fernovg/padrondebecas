<?php
    session_start();
    require 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Alumnos</title>
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
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                                Inicio
                            </a>
                            <a class="nav-link active" href="listaAlum.php">
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
                <main>
                    <div class="container-fluid px-4">
                        
                        <br>
                        <?php include('message.php'); ?>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Lista De Estudiantes
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Nombre Completo</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Semestre</th>
                                            <th scope="col">Grupo</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Nombre Tutor</th>
                                            <th scope="col">Telefono Tutor</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th scope="col">Matricula</th>
                                            <th scope="col">Nombre Completo</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Semestre</th>
                                            <th scope="col">Grupo</th>
                                            <th scope="col">Telefono</th>
                                            <th scope="col">Nombre Tutor</th>
                                            <th scope="col">Telefono Tutor</th>
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    $query = "SELECT * FROM becas";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $student)
                                        {
                                            ?>
                                        <tr>
                                            <td><?= $student['matricula']; ?></td>
                                            <td><?= $student['nomcom']; ?></td>
                                            <td><?= $student['status']; ?></td>
                                            <td><?= $student['semestre']; ?></td>
                                            <td><?= $student['grupo']; ?></td>
                                            <td><?= $student['telefono']; ?></td>
                                            <td><?= $student['nomtutor']; ?></td>
                                            <td><?= $student['teltutor']; ?></td>
                                            <td>
                                                <a href="datosAlum.php?id=<?= $student['idreg']; ?>" class="btn btn-info btn-sm"><i class="fa-solid fa-eye"></i></a>
                                                <a href="editAlum.php?id=<?= $student['idreg']; ?>" class="btn btn-success btn-sm"><i class="fa-solid fa-edit"></i></a>
                                                <form action="code.php" method="POST" class="d-inline">
                                                    <button type="submit" name="delete_student" value="<?=$student['idreg'];?>" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    }?>
                                    </tbody>
                                </table>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a href="register.php" class="btn btn-primary" type="button"><i class="fa-solid fa-address-book"></i> Agregar Estudiante</a>
                                    <a href="excel.php" class="btn btn-success" type="button"><i class="fa-solid fa-download"> </i> Generar Excel</a>
                                </div>
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
        <script src="js/tabla.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>