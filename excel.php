<?php
header("Content-Type: application/vnd.ms-excel; charset=iso-8859-1");
header("Content-Disposition: attachment; filename= padron_becas.xls");
require 'dbcon.php';
?>

<table class="table table-warning table-bordered table-striped" border="1">
    <caption>PADRON DE BECAS</caption>
    <thead>
        <tr>
            <th>Matricula</th>
            <th>Primer Apellido</th>
            <th>Segundo Apellido</th>
            <th>Nombre</th>
            <th>Nombre Completo</th>
            <th>Curp</th>
            <th>Status</th>
            <th>Semestre</th>
            <th>Grupo</th>
            <th>Correo</th>
            <th>Sexo</th>
            <th>Fecha Nacimiento</th>
            <th>Lugar Nacimiento</th>
            <th>Telefono</th>
            <th>Nombre Tutor</th>
            <th>Telefono Tutor</th>
            <th>Localidad</th>
            <th>Calle</th>
            <th>Num</th>
            <th>Colonia</th>
            <th>Municipio</th>
            <th>Codigo Postal</th>
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
            <td><?= $student['p_ape']; ?></td>
            <td><?= $student['s_ape']; ?></td>
            <td><?= $student['nombre']; ?></td>
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
        </tr>
                        <?php
                    }
                }
            ?>                                
    </tbody>
</table>