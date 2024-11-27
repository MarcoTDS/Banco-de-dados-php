<?php
include_once("Connection.php");

if(! isset($_GET['descricao']) || ! isset($_GET['un_medida'])) {
    echo "Informe os dados a serem inseridos!<br>";
    echo "<a href='produto_listar.php'>Voltar</a>";
    exit;
}

$descricao = $_GET['descricao'];
$un_medida = $_GET['un_medida'];

$conn = Connection::getConnection();
$sql = "INSERT INTO produtos (descricao, un_medida) VALUES (?,?)";
$stm = $conn->prepare($sql);
$stm->execute([$descricao, $un_medida]);


//Mensagem para exibir que o time foi inserido
echo "Produto inserido!<br>";
echo "<a href='produto_inserir.php'>Voltar</a>";