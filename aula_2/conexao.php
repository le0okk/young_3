<?php
$servidor = 'localhost';
$banco_de_dados = 'login';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($servidor, $usuario, $senha, $banco_de_dados);

if ($mysql -> error){
    die('Falha ao conectar ao banco de dados');
}
?>