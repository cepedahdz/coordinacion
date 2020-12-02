<?php
    include("Conexion.php");
    $fol=$_POST['Fol_Tar'];
    $nume=$_POST['Emp_Tar'];
    $nomt=$_POST['Nom_Tar'];
    $dest=$_POST['Des_Tar'];
    $fect=$_POST['Fec_Tar'];
	
	if(isset($_POST['Fol_Tar']) && !empty($_POST['Fol_Tar']) &&
	isset($_POST['Emp_Tar']) && !empty($_POST['Emp_Tar']) &&
	isset($_POST['Nom_Tar']) && !empty($_POST['Nom_Tar']) &&
	isset($_POST['Fec_Tar']) && !empty($_POST['Fec_Tar']))
	{
		$re=mysql_query("INSERT INTO tareas(Folio, Num_Emp, Nom_Tar, Des_Tar, Fec_Tar, Est_Tar) VALUES('$fol', '$nume', '$nomt', '$dest', '$fect', '0' )") or die(mysql_error());
		echo "Tarea Asignada correctamente";
        //header("location: ../RegistrarU.php?eror=Usuario registrado correctamente");
	}
	else
	{
		echo "Error al asignar la tarea, intente de nuevo";
	}
?>