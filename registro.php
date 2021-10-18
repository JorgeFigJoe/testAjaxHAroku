<?php 
	$conexion=mysqli_connect('localhost','root','','usuarios');

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="INSERT into usuarios (email,password)
			values ('$email','$password')";
	echo mysqli_query($conexion,$sql);
 ?>