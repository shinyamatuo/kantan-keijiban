<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style>
        body {

        background-color:#73D2DE;
        }
        .flex-container {
            background-color:#73D2DE;  
            display: flex;  
            flex-wrap: wrap;
            flex-direction: column; /* フレックスボックス内の箱を縦に積みます */
            justify-content: center;

            }

        .box {
           
            
            padding: 50px;
            border: 1px solid rgb(0, 0, 0);
        }
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
    $re = $dbh->query("SELECT * FROM keijibanM");  // tb1のデータをSELECTします
    print '<div class="flex-container">';
    while($kekka = $re->fetch()) {
        print"<div class='box'>";
        print $kekka[0];
        print " ";
        print $kekka[1];
        print " ";
        print $kekka[2];
        print "<br>";
        print "</div>";
    }
    print "</div>";
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>
</body>
</html>