<?php
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
        <title>Registro de alumno</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-warning">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                    <?php include('message.php'); ?>
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><a href="index.php" class="btn btn-danger float-end"><i class="fa-solid fa-backward"></i></a>Datos de Alumno</h3></div>
                                    <div class="card-body">
                                    <?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM becas WHERE idreg='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                ?>
                                        <form>
                                        <div class="form mb-3">
                                                <label> Matricula</label>
                                                <p class="form-control">
                                                    <?=$student['matricula'];?>
                                                </p>
                                            </div>
                                            <div class="form mb-3">
                                                <label for="inputFirstName"> Nombre</label>
                                                <p class="form-control">
                                                    <?=$student['nomcom'];?>
                                                </p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputPassword">CURP</label>
                                                        <p class="form-control">
                                                            <?=$student['curp'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputPassword">Status</label>
                                                        <p class="form-control">
                                                            <?=$student['status'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                    <label for="inputPassword">Semestre</label>
                                                        <p class="form-control">
                                                            <?=$student['semestre'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                    <label for="inputPassword">Grupo</label>
                                                        <p class="form-control">
                                                            <?=$student['grupo'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputEmail">Correo</label>
                                                        <p class="form-control">
                                                            <?=$student['correo'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form">
                                                        <label for="inputPassword">Genero</label>
                                                        <p class="form-control">
                                                            <?=$student['sexo'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                    <label for="inputPassword">Fecha Nacimiento</label>
                                                        <p class="form-control">
                                                            <?=$student['fechanac'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form">
                                                        <label for="inputText">Lugar De Nacimiento</label>
                                                        <p class="form-control">
                                                            <?=$student['lugarnac'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Telefono</label>
                                                        <p class="form-control">
                                                            <?=$student['telefono'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form mb-3">
                                                <label for="inputFirstName">Nombre de Tutor</label>
                                                <p class="form-control">
                                                    <?=$student['nomtutor'];?>
                                                </p>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Telefono del Tutor</label>
                                                        <p class="form-control">
                                                            <?=$student['teltutor'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Localidad</label>
                                                        <p class="form-control">
                                                            <?=$student['localidad'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Calle</label>
                                                        <p class="form-control">
                                                            <?=$student['calle'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Numero De casa</label>
                                                        <p class="form-control">
                                                            <?=$student['num'];?>
                                                        </p>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Colonia</label>
                                                        <p class="form-control">
                                                            <?=$student['colonia'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Municipio</label>
                                                        <p class="form-control">
                                                            <?=$student['municipio'];?>
                                                        </p>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form mb-3 mb-md-0">
                                                        <label for="inputText">Codigo Postal</label>
                                                        <p class="form-control">
                                                            <?=$student['codigopostal'];?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <br><br>
</html>