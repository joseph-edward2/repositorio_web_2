<?php
include 'db.php';

$usuarioEdit   = $_POST['usuario'] ?? '';
$senhaEdit     = $_POST['senha'] ?? '';
$id            = $_POST['id'] ?? '';

$mensagem = '';
$redirecionar = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $update = "UPDATE usuarios 
               SET usuario = '$usuarioEdit', senha = '$senhaEdit' 
               WHERE id = '$id'";

    if ($conexao->query($update) === TRUE) {
        $mensagem = "Adicionou essa porra já!";
        $redirecionar = true; 
    } else {
        $mensagem = "Erro ao atualizar: " . $conexao->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Contactus - Editar Conta</title>
<style>
body {
    margin: 0;
    font-family: sans-serif;
    background-color: rgb(24, 24, 24);
    color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
}
form {
    margin-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 15px;
    align-items: center;
}
input[type="text"], input[type="password"], input[type="submit"] {
    background-color: rgb(46, 46, 46);
    padding: 10px;
    border-radius: 8px;
    border: none;
    width: 80%;
    max-width: 300px;
    color: #ffffff;
    text-align: center;
}
input[type="submit"] {
    font-weight: bold;
    cursor: pointer;
}
input[type="submit"]:hover {
    background-color: #ddd;
    color: black;
}
#mensagem {
    color: yellow;
    font-weight: bold;
    text-align: center;
    margin-top: 15px;
}
</style>


<span class="logo-icon"><img src='logo.png'></span>
<h1>Contactus - Editar Conta</h1>

<form method="post" action="edit.php">
    <input type="text" name="id" placeholder="Id do aluno editado" required />
    <input type="text" name="usuario" placeholder="Mudar nome" required />
    <input type="password" name="senha" placeholder="Nova Senha" required/>
    <input type="submit" value="Continue" />
</form>


</body>
</html>
