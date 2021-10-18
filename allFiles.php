<?php
    $conexion = mysqli_connect('localhost','root','','usuarios');
    $myArray = array();

    $sql = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conexion, $sql);
  
    while($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
        $myArray[] = $row;
}
echo json_encode($myArray);    
?>