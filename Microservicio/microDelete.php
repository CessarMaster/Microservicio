<?php
    include ("conexion.php");
    if (isset($_GET['id'])){    
        $id = $_GET['id'];
        
        $delete = "DELETE FROM usuarios WHERE id = $id";

        if (mysqli_query($conn, $delete)){
            header('Location:http://localhost:3000/xampp/htdocs/VSC%20PHP/CRUD/index.php'); # Redireccionar el archivo
        }else{
            echo "Error al borrar registro: " . mysqli_error($conn);
        }
    }
?>