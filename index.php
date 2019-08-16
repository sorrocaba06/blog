<?php 

$dsn = "mysql:dbname=blog01;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

// Conectando ao banco
try
{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    echo "Conexão estabelecida com sucesso";
    
    $sql = "SELECT * FROM posts";
    $dado = $pdo->query($sql);
    
    if($dado->rowCount() > 0)
    {
        echo "Há posts cadastrados";
    }
    else
    {
        echo "Não há posts cadastrados";
    }
}
catch(PDOExecption $e)
{
    echo "Falho: ".$e->getMessage();
}
?>