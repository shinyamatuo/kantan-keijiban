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
    $re = $dbh->query("SELECT * FROM keijibanM WHERE message LIKE '%{$searct}%';");
    print "検索結果を表示します<br>";
    while ($kekka =$re->fetch()){
        print $keka[0];
        print "|";
        print $kekka[1];
        print "|";
        print $kekka[2];
        print "<br>";
    }

} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

print " <a href='keijiban.html'>戻る</a>";
?>
</body>
</html>