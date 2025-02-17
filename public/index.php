<?php

// iniciar a sessão
session_start();

// definir uma constante de controle
define('CONTROL', true);

// verificar se existe um usuário logado
$usuario_logado = $_SESSION['usuario'] ?? null; 

// verifica qual é a rota na URL
if(empty($usuario_logado)){
    $rota = 'login';
}else{
    $rota = $_GET['rota'] ?? 'home';
}

// analisa a rota
$rotas = [
    'login' => 'login.php',
    'home' => 'home.php'
];