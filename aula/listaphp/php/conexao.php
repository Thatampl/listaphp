<?php

$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'login';

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if ($mysqli->connect_error) {
    die("Erro ao sentar no banquinho de dados: " . $mysqli->connect_error);
}

?>