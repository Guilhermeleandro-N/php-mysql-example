<?php

$host = "localhost";
$user = "root";
$pass = "20231035000041";
$bd   = "loja";

$conn = mysqli_connect($host, $user, $pass, $bd);

if (!$conn) die("Erro de conexão: ". mysqli_connect_error());