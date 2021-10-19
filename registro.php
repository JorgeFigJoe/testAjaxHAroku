<?php 
/*	$conexion=mysqli_connect('localhost','root','','usuarios');

	$email=$_POST['email'];
	$password=$_POST['password'];

	$sql="INSERT into usuarios (email,password)
			values ('$email','$password')";
	echo mysqli_query($conexion,$sql);*/


	$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'email' => $dbopts["email"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);
 ?>