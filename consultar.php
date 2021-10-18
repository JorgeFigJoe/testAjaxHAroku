<?php
    $conexion = mysqli_connect('localhost','root','','usuarios');

	$email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT email FROM usuarios";
   
    $resultado = mysqli_query($conexion, $sql);
    
    while ($fila = mysqli_fetch_assoc($resultado)) {
        if($fila['email'] == $email){
            echo $fila['email'];
            return;
        }
    }
     
?>