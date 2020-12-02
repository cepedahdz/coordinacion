<?php
    include("Conexion.php");
    $fol=$_POST['Fol_Mod'];
    if(!isset($_POST['Fol_Mod']) && !isset($_POST['file'])){
    }else{
        $allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
        if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
                    //Subimos la imagen
                    $imagen= $random.'_'.$_FILES["file"]["name"];
                    if(file_exists("Evidencias/".$random.'_'.$_FILES["file"]["name"])){
                        echo $_FILES["file"]["name"] . "Ya existe. ";
                    
                    }else{
                        move_uploaded_file($_FILES["file"]["tmp_name"],"../Evidencias/".$random.'_'.$_FILES["file"]["name"]);
                        $Sql="update tareas set Pru_tar='".$imagen."', Est_Tar='1' where Folio='".$fol."'";
                        mysql_query($Sql);
                        //echo "Tarea actualizada";
                    }
                }
        }else{
            echo "Formato no soportado";
        }
    }
?>