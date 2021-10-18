<?php
    $conexion = mysqli_connect('localhost','root','','usuarios');

	$id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id = '$id'"; 

    $resultado = mysqli_query($conexion, $sql);

    while ($fila = mysqli_fetch_assoc($resultado)) {
        if($fila['id'] == $id){
            echo '1';
            return;
        }
    }

    echo '0';
     
?>