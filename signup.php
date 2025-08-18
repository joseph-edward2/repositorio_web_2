<?php
include 'db.php';

if ($conexao->connect_error) {
    die("Falha na conexão: " . $conexao->connect_error);
}

$nomeCria   = $_POST['usuario'] ?? '';
$senhaCria  = $_POST['senha'] ?? '';
$senhaConf  = $_POST['senhaconf'] ?? '';

if ($senhaCria !== $senhaConf) {
    die("Erro: As senhas não coincidem!");
}

$add = "INSERT INTO usuarios (usuario, senha) VALUES ('$nomeCria', '$senhaCria')";

if ($conexao->query($add) === TRUE) {
    echo "<p style='color: yellow;'>Registro adicionado com sucesso! Redirecionando...</p>";
    echo "<meta http-equiv='refresh' content='3;url=?pagina=teste.php'>"; 
} else {
    echo "Erro: " . $conexao->error;
}

$conexao->close();
?>
