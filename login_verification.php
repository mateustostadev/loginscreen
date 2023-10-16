<?php
session_start();

$usuarios = array(
    'teste' => '102030'
    
    // Adicione mais usuários aqui
);

$usuarioInserido = $_POST['username'];
$senhaInserida = $_POST['password'];

if (array_key_exists($usuarioInserido, $usuarios) && $usuarios[$usuarioInserido] === $senhaInserida) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $usuarioInserido; // Armazena o nome do usuário na sessão
    header('Location: inicial.php'); // Digite aqui sua pagina inicial
    exit();
} else {
    header('Location: erro_login.php?erro=1'); // Pagina de erro
    exit();
}
?>
