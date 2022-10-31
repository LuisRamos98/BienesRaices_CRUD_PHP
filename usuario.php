<?php

//CONEXION A LA DB
require "includes/config/database.php";

$db = conectarDB();

//creamos usuario y password 
$email = "luis@email.com";
$password = "123456789";

$passwordHash = password_hash($password,PASSWORD_DEFAULT);

//CONSULTA
$query = "INSERT INTO usuarios (email,password) VALUES('${email}','${passwordHash}')";

// echo $query;
// exit;

//CREACION DEL USUARIO
mysqli_query($db,$query);