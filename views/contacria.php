<?php
include 'db.php';

$mensagem = ''; 
$redirecionar = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nomeCria   = $_POST['usuario'] ?? '';
    $senhaCria  = $_POST['senha'] ?? '';
    $senhaConf  = $_POST['senhaconf'] ?? '';

    if ($senhaCria !== $senhaConf) {
        $mensagem = "Erro: As senhas não coincidem!";
    } else {
        $add = "INSERT INTO usuarios (usuario, senha) VALUES ('$nomeCria', '$senhaCria')";
        if ($conexao->query($add) === TRUE) {
            $mensagem = "Adicionou essa porra já!";
            $redirecionar = true; // habilita redirecionamento
        } else {
            $mensagem = "Erro: " . $conexao->error;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Contactus - Criar Conta</title>
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

<?php if ($redirecionar): ?>
<meta http-equiv="refresh" content="3;url=?pagina=teste">
<?php endif; ?>

</head>
<body>


<span class="logo-icon"><img src='logo.png' ></span>
<h1>Contactus Adicionar conta</h1>

<form method="post">
    <input type="text" name="usuario" placeholder="Como devemos chamá-lo?" required />
    <input type="password" name="senha" placeholder="Crie uma senha" required/>
    <input type="password" name="senhaconf" placeholder="Confirmar senha" required/>
    <input type="submit" value="Continue" />
</form>

<?php if ($mensagem !== ''): ?>
    <div id="mensagem"><?= $mensagem ?></div>
<?php endif; ?>

</body>
</html>
