<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
    </style>
</head>
<body>
<?php
header('Content-Type: text/html;charset=utf-8');  // 日本語が正しく表示されるようにいれる

/* Connect to a MySQL database using driver invocation */
require_once('db_info.php');

try { 
    $dbh = new PDO($dsn);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    // この下にプログラムを書きましょう。
    $number = $_POST["bangou"];
    
    $dbh->query("DELETE FROM keijibanM WHERE bangou = ".$number.";");


} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
print " <a href='keijiban.html>戻る</a>";
?>
</body>
</html>