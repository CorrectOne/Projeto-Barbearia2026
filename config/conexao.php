<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "DBcabeleireiro2026";

$conexao = mysqli_connect($host, $user, $pass, $db);

if (!$conexao) {
    die("Erro de conexão: " . mysqli_connect_error());
}
