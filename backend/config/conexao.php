<?php

$servidor = "localhost";
$banco = "fulano";
$usuario = "root";
$senha = "";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco;charset=utf8mb4",
$usuario, $senha);

