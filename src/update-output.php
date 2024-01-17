<?php require 'db-connect.php'; ?>
<?php require 'menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="a">番号</div>
    <div class="b">シューズ名</div>
    <div class="c">メーカー</div>
    <div class="d">色</div>
<?php
$pdo=new PDO($connect,USER,PASS);
$sql=$pdo->prepare('update shoes set name=?,mekar=?,color=? where id=?');
if(empty($_POST['name'])){
    echo 'シューズ名を入力してください';
}else if(empty($_POST['mekar'])){
    echo 'メーカーを入力してくだい';
}else if(empty($_POST['color'])){
    echo '色を入力してくだい';
}else if($sql->execute([htmlspecialchars($_POST['name']),$_POST['mekar'],$_POST['color'],$_POST['id']])){
    echo '更新に成功しました。';
}else{
    echo '更新に失敗しました。';
}
?>
<hr>
<table>
<tr><th>番号</th><th>シューズ名</th><th>メーカー</th><th>色</th></tr>
<?php
foreach($pdo->query('select * from shoes')as $row){
    echo '<tr>';
    echo '<td>',$row['id'],'</td>';
    echo '<td>',$row['name'],'</td>';
    echo '<td>',$row['mekar'],'</td>';
    echo '<td>',$row['color'],'</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
<button onclick="location.href='update-input.php'">更新画面へ戻る</button>
</body>
</html>