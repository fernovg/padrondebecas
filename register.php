<?php
session_start();
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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Registro de Alumno</h3></div>
                                    <div class="card-body">
                                        <form action="code.php" method="POST">
                                        <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" type="number" name="matricula" placeholder="name@example.com"/>
                                                <label for="inputFirstName"> Matricula</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" type="text" name="nombre" placeholder="name@example.com"/>
                                                <label for="inputFirstName"> Nombre</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="p_ape" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">Apellido Paterno</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" name="s_ape" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Apellido Materno</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="curp" placeholder="Create a password" />
                                                        <label for="inputPassword">CURP</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="status" id="" class="form-control">
                                                            <option value="">Seleciona el status del alumno</option>
                                                            <option value="ACTIVO">ACTIVO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <select name="semestre" id="" class="form-control">
                                                        <option value="">Seleciona el semestre del alumno</option>
                                                        <option value="1">1er Semestre</option>
                                                        <option value="2">2do Semestre</option>
                                                        <option value="3">3er Semestre</option>
                                                        <option value="4">4to Semestre</option>
                                                        <option value="5">5to Semestre</option>
                                                        <option value="6">6to Semestre</option>
                                                    </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="grupo" id="" class="form-control">
                                                            <option value="">Seleciona el grupo del alumno</option>
                                                            <option value="A">A</option>
                                                            <option value="B">B</option>
                                                            <option value="C">C</option>
                                                            <option value="D">D</option>
                                                            <option value="E">E</option>
                                                            <option value="F">F</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputEmail" type="email" name="correo" placeholder="Ingrese el correo" />
                                                        <label for="inputEmail">Correo</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <select name="sexo" id="" class="form-control">
                                                            <option value="">Seleciona el grupo del alumno</option>
                                                            <option value="HOMBRE">HOMBRE</option>
                                                            <option value="MUJER">MUJER</option>
                                                            <option value="OTRO">OTRO</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" type="date" id="start" name="fechanac" value="2018-07-22">
                                                        <label for="inputText">Fecha De Nacimiento</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputText" type="text" name="lugarnac" placeholder="Ingrese" />
                                                        <label for="inputText">Lugar De Nacimiento</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="number" name="telefono" placeholder="Ingrese" />
                                                        <label for="inputText">Telefono</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputFirstName" type="text" name="nomtutor" placeholder="name@example.com" />
                                                <label for="inputFirstName">Nombre de Tutor</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="number" name="teltutor" placeholder="Ingrese" />
                                                        <label for="inputText">Telefono del Tutor</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="localidad" placeholder="Ingrese" />
                                                        <label for="inputText">Localidad</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="calle" placeholder="Ingrese" />
                                                        <label for="inputText">Calle</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="number" name="num" placeholder="Ingrese" />
                                                        <label for="inputText">Numero de Casa</label>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="colonia" placeholder="Ingrese" />
                                                        <label for="inputText">Colonia</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="text" name="municipio" placeholder="Ingrese" />
                                                        <label for="inputText">Municipio</label>
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputText" type="number" name="codigopostal" placeholder="Ingrese" />
                                                        <label for="inputText">Codigo Postal</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit" name="save_student" class="btn btn-primary">Guardar Estudiante</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <br><br>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script> -->
    </body>
</html>
