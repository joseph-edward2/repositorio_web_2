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
    <title>Usuários</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(46, 46, 46);
            color: #fff;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
            color: #000;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even), tr:nth-child(odd) {
            background-color: #f9f9f9;
        }
        a {
            color: #e600ff;
            text-align: center;
            display: block;
        }
        .btn {
            padding: 5px 10px;
            background-color: #444;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0; top: 0;
            width: 100%; height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.8);
        }

        .modal-content {
            background-color: #fff;
            margin: 10% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 300px;
            border-radius: 8px;
            color: #000;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }

        .modal input[type="text"],
        .modal input[type="password"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
        }

        .modal input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #444;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Usuários</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Senha</th>
        <th>Ações</th>
    </tr>
    <?php if ($resultado->num_rows > 0): ?>
        <?php while($row = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= htmlspecialchars($row['usuario']) ?></td>
                <td><?= htmlspecialchars($row['senha']) ?></td>
                <td>
                    <a href="processa_apagar.php?id=<?= $row['id'] ?>" class="btn">Deletar</a>
                    <button class="btn editBtn"
                        data-id="<?= $row['id'] ?>"
                        data-nome="<?= htmlspecialchars($row['usuario']) ?>"
                        data-senha="<?= htmlspecialchars($row['senha']) ?>">
                        Editar
                    </button>
                </td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="4">No data found</td></tr>
    <?php endif; ?>
</table>


<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close" id="closeModal">&times;</span>
        <form method="POST" action="processa_edit.php">
            <input type="hidden" name="id" id="editId">
            <label>Nome:</label>
            <input type="text" name="usuario" id="editNome" required>
            <label>Senha:</label>
            <input type="password" name="senha" id="editSenha" required>
            <input type="submit" value="Salvar">
        </form>
    </div>
</div>


<a href="?pagina=teste2">CU teste2</a>
<a href="?pagina=singup">Adicionar Nova</a>


<script>
    const modal = document.getElementById('editModal');
    const closeModal = document.getElementById('closeModal');
    const editBtns = document.querySelectorAll('.editBtn');

    editBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const id = btn.getAttribute('data-id');
            const nome = btn.getAttribute('data-nome');
            const senha = btn.getAttribute('data-senha');

            document.getElementById('editId').value = id;
            document.getElementById('editNome').value = nome;
            document.getElementById('editSenha').value = senha;

            modal.style.display = 'block';
        });
    });

    closeModal.onclick = () => {
        modal.style.display = 'none';
    }

    window.onclick = (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    }
</script>

</body>
</html>
