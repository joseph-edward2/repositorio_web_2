<?php

include 'db.php';

$id = $_POST['id'];
$nome = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "UPDATE usuarios SET usuario='$nome', senha='$senha' WHERE id = $id";

mysqli_query($conexao, $query);

header('location:index.php?pagina=teste');