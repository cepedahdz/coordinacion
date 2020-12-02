<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Planeación Estrategia</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!--<script src="script.js" language="javascript" type="text/javascript"></script>-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="shortcut icon" type="image/x-icon" href="../img/logof.ico" />
    </head>
    <header class="Arriba">
        <img src="../img/uanllogo.png">
        <h2>Operación de las Coordinaciones Academicas</h2>
        <img src="../img/logofime2.gif">
    </header>
    <body>
        <div id="divdatos">
            <div id="divver22">
                <h2></h2>
            </div>
            <div id="divbla22">
        <table id="tabdat">
            <tr>
               <th><b>Folio</b></th>
               <th><b>Empleado</b></th>
               <th><b>Actividad</b></th>
               <th><b>Descripción</b></th>
               <th><b>Recha limite</b></th>
           </tr>
            <?php
                    include '../php/Conexion.php';
                    $re=mysql_query("select * from tareas where Est_Tar=0") or die(mysql_error());
                    while ($f=mysql_fetch_array($re)){
               echo'<tr>
                    <td>'.$f['Folio'].'</td>
                    <td>'.$f['Num_Emp'].'</td>
                    <td>'.$f['Nom_Tar'].'</td>
                    <td>'.$f['Des_Tar'].'</td>
                    <td>'.$f['Fec_Tar'].'</td>
                    </tr>';
                    }
                ?>
        </table><br/><br/><br/><br/><br/><br/>
                <form action="../php/ModificarTar.php" method="post" enctype="multipart/form-data"s>
                    <table id="tabdat">
                        <tr><th colspan="4">Actualiza una tarea</th></tr>
                    <tr>
                            <td>
                                <br/><br/><label>Folio: </label>
                            </td>
                            <td>
                                <br/><br/><input type="text" name="Fol_Mod" required>
                            </td>
                            <td>
                                <br/><br/><label>Evidencia: </label>
                            </td>
                            <td>
                                <br/><br/><input type="file" name="file" required>
                            </td>
                        </tr>
                        <tr><td colspan="4"><input id="btnok" type="submit" value="Asignar"></td></tr>
                    </table>
                </form>
                </div>
            <div id="divver2">
                <a href="Todas.php" >Ver Todas</a>
                <a href="../Planeacion.html" >Regresar</a>
            </div>
        </div>
    </body>
    <footer>
        <h3>Facultad de ingenieria mecanica y electrica</h3>
        <h4>Pedro de Alba SN, Niños Héroes, Ciudad Universitaria, San Nicolás de los Garza, N.L.</h4>
    </footer>
</html>