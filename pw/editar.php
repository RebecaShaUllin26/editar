<?php
$Email= $_POST['Email'] ?? "";
$Senha = $_POST['Senha'] ?? "";

define('MYSQL_HOST', 'localhost:3306');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB_NAME', 'cadastro');

try {
    $pdo = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);
    $id =(int) $_GET["id"];
    $sqlUpdate = $pdo->prepare("UPDATE dados SET Email='$Email' , Senha='$Senha' WHERE id=$id");
    $sqlUpdate->execute();
} catch (PDOException $ex) {
    echo "Erro ao tentar fazer a conexão com MYSQL: " . $ex->getMessage();
}


