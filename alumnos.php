<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Alumnos</title>
</head>
<body>

    <div class="mt-4 ">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="card-header">
                        <h4>Padron de Becas
                            <a href="student-create.php" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                    </div>
                    <div class="table-responsive">

                        <table class="table table-bordered table-sm table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Matricula</th>
                                    <th scope="col">Nombre Completo</th>
                                    <th scope="col">Curp</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Semestre</th>
                                    <th scope="col">Grupo</th>
                                    <th scope="col">Correo</th>
                                    <th scope="col">Sexo</th>
                                    <th scope="col">Fecha Nacimiento</th>
                                    <th scope="col">Lugar Nacimiento</th>
                                    <th scope="col">Telefono</th>
                                    <th scope="col">Nombre Tutor</th>
                                    <th scope="col">Telefono Tutor</th>
                                    <th scope="col">Localidad</th>
                                    <th scope="col">Calle</th>
                                    <th scope="col">Num</th>
                                    <th scope="col">Colonia</th>
                                    <th scope="col">Municipio</th>
                                    <th scope="col">Codigo Postal</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
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
                                                <td><?= $student['curp']; ?></td>
                                                <td><?= $student['status']; ?></td>
                                                <td><?= $student['semestre']; ?></td>
                                                <td><?= $student['grupo']; ?></td>
                                                <td><?= $student['correo']; ?></td>
                                                <td><?= $student['sexo']; ?></td>
                                                <td><?= $student['fechanac']; ?></td>
                                                <td><?= $student['lugarnac']; ?></td>
                                                <td><?= $student['telefono']; ?></td>
                                                <td><?= $student['nomtutor']; ?></td>
                                                <td><?= $student['teltutor']; ?></td>
                                                <td><?= $student['localidad']; ?></td>
                                                <td><?= $student['calle']; ?></td>
                                                <td><?= $student['num']; ?></td>
                                                <td><?= $student['colonia']; ?></td>
                                                <td><?= $student['municipio']; ?></td>
                                                <td><?= $student['codigopostal']; ?></td>
                                                <td>
                                                    <a href="student-view.php?id=<?= $student['idreg']; ?>" class="btn btn-info btn-sm">Ver</a>
                                                    <a href="student-edit.php?id=<?= $student['idreg']; ?>" class="btn btn-success btn-sm">Editar</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_student" value="<?=$student['idreg'];?>" class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Tienes Datos </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>