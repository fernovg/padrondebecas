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
        <title>Registro de alumno</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-warning">                
                    <div class="container">
                    <?php include('message.php'); ?>
                        <div class="row justify-content-center">
                            <div class="col-lg-7">                          
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4"><a href="index.php" class="btn btn-danger float-end"><i class="fa-solid fa-backward"></i></a>Modicar Datos</h3></div>
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
                                        <form action="code.php" method="POST">
                                        <input type="hidden" name="student_id" value="<?= $student['idreg']; ?>">

                                        <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" value="<?=$student['matricula'];?>"  type="number" name="matricula" placeholder="name@example.com"/>
                                                <label for="inputFirstName"> Matricula</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" type="text" name="nombre" value="<?=$student['nombre'];?>" />
                                                <label for="inputFirstName"> Nombre</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="p_ape" value="<?=$student['p_ape'];?>" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Apellido Paterno</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" name="s_ape" value="<?=$student['s_ape'];?>" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Apellido Materno</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="curp" value="<?=$student['curp'];?>" placeholder="Create a password" />
                                                        <label for="inputPassword">CURP</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="status" id="" class="form-control">
                                                            <option value="<?=$student['status'];?>"><?=$student['status'];?></option>
                                                            <option value="ACTIVO">ACTIVO</option>
                                                        </select>
                                                        <label for="inputPassword">Status del estudiante</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="semestre" id="" class="form-control">
                                                        <option value="<?=$student['semestre'];?>"><?=$student['semestre'];?> semestre</option>
                                                        <option value="1">1er Semestre</option>
                                                        <option value="2">2do Semestre</option>
                                                        <option value="3">3er Semestre</option>
                                                        <option value="4">4to Semestre</option>
                                                        <option value="5">5to Semestre</option>
                                                        <option value="6">6to Semestre</option>
                                                    </select>
                                                    <label for="inputPassword">Semestre del estudiante</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="grupo" id="" class="form-control">
                                                            <option value="<?=$student['grupo'];?>"><?=$student['grupo'];?></option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                            <option value="F">F</option>
                                                        </select>
                                                        <label for="inputPassword">Grupo del estudiante</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputEmail" type="email" name="correo"value="<?=$student['correo'];?>"  placeholder="Ingrese el correo" />
                                                        <label for="inputEmail">Correo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <select name="sexo" id="" class="form-control">
                                                            <option value="<?=$student['sexo'];?>"><?=$student['sexo'];?></option>
                                                            <option value="HOMBRE">HOMBRE</option>
                                                            <option value="MUJER">MUJER</option>
                                                            <option value="OTRO">OTRO</option>
                                                        </select>
                                                        <label for="inputEmail">Genero del estudiante</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="date" id="start" name="fechanac" value="<?=$student['fechanac'];?>">
                                                        <label for="inputText">Fecha De Nacimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputText" type="text" name="lugarnac" value="<?=$student['lugarnac'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Lugar De Nacimiento</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="number" name="telefono" value="<?=$student['telefono'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Telefono</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" type="text" name="nomtutor" value="<?=$student['nomtutor'];?>" placeholder="name@example.com" />
                                                <label for="inputFirstName">Nombre de Tutor</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="number" name="teltutor" value="<?=$student['teltutor'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Telefono del Tutor</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="localidad" value="<?=$student['localidad'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Localidad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="calle"value="<?=$student['calle'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Calle</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="num"  value="<?=$student['num'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Numero de Casa</label>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="colonia" value="<?=$student['colonia'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Colonia</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="municipio" value="<?=$student['municipio'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Municipio</label>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="codigopostal" value="<?=$student['codigopostal'];?>" placeholder="Ingrese" />
                                                        <label for="inputText">Codigo Postal</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" name="update_student" class="btn btn-primary">Modificar Estudiante</button></div>
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
        <br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script> -->
    </body>
</html>