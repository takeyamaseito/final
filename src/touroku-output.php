<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>復習1-2-output</title>
</head>
<body>
<?php
if(!empty($_POST['name']&&$_POST['mekar']&&$_POST['color'])){
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('insert into shoes(name,mekar,color) values(?,?,?)');
    $sql->execute([$_POST['name'],$_POST['mekar'],$_POST['color']]);
    echo '登録完了';
    echo '<hr>';
}else{
    echo '未記入があります。';
}
?>
</body>
</html>