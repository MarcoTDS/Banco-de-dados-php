<?php
include_once("Connection.php");

$conn = Connection::getConnection();
$sql = "SELECT * from produtos ORDER BY id";

$stm = $conn->prepare($sql);
$stm->execute();

$produtos = $stm->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Lista de Produtos cadastrados</h1>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Descrição</th>
            <th>Unidade de medida</th>
            <th>Ações</th>
        </tr>
        <?php foreach($produtos as $p): ?>
            <tr>
                <td><?= $p["id"]?></td>
                <td><?= $p["descricao"]?></td>
                <td><?= $p["un_medida"]?></td>
                <td><a onclick="return confirm('Deseja realmente EXCLUIR?');" href="produto_excluir.php?id=<?= $p["id"]?>">Excluir</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>