<?php
define('HOST', 'localhost'); // O VALOR DE HOST É O IP DO BANCO DE DADOS MYSQL
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'fm_afiliados_wpp');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possível conectar');
?>



