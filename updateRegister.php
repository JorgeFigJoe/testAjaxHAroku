<?php

    $conexion = mysqli_connect('localhost','root','','usuarios');

	$id = $_POST['id1'];
    $email = $_POST['email1'];
    $password = $_POST['password1'];


    $sql = "UPDATE usuarios SET email = '$email', password = '$password' WHERE id = '$id'"; 

    $resultado = mysqli_query($conexion, $sql);

    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
}
echo json_encode($myArray);       
?>