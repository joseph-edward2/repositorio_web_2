<p>ROLA</p>

<a href="?pagina=teste2">CU teste2</a>
<?php



$conexao = new mysqli($servidor, $usuario, $senha, $db);

if ($conexao->connect_error) {
    die("Connection failed: " . $conexao->connect_error);
}

$sql = "SELECT id, usuario, senha FROM usuarios";
$resultado = $conexao->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Teste Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(46, 46, 46);
            color: #333;
        }
        h2 {
            text-align: center;
            color: #ffffffff;
        }
        h1 {
            text-align: center;
            color: #ffffffff;
        }
        p {
            
            color: #ffffffff;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        a{
            color: #e600ffff;
            text-align: center;
            display: block;
        }
    </style>
</head>
<body>
    <h2>Usuários</h2>
    <center>
    <table border="3">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Senha</th>
        </tr>
        <?php
        if ($resultado->num_rows > 0) {
            while($row = $resultado->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['usuario']}</td>
                    <td>{$row['senha']}</td>
                    <td><a href='processa_apagar.php?id={$row['id']}'>Deletar</a></td>
                  </tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data found</td></tr>";
        }
        ?>
    </table>
    </center>
    <a href="?pagina=teste2">CU teste2</a>
    <a href="?pagina=singup">Adicionar Nova</a>
    <a href="?pagina=remove">Remover Entradas</a>
    <a href="?pagina=edit">Editar Entradas</a>
</body>
</html>