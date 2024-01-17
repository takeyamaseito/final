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
foreach($pdo->query('select * from shoes') as $row){
    echo'<form action="update-output.php" method="post">';
    echo '<input type="hidden" name="id" value="',$row['id'], '">';
    echo '<div class="t">',$row['id'],'</div>';
    echo '<div class="k">';
    echo '<input type="text" name="name" value="',$row['name'], '">';
    echo '</div>';
    echo '<div class="k">';
    echo '<input type="text" name="mekar" value="',$row['mekar'], '">';
    echo '</div>';
    echo '<div class="k">';
    echo '<input type="text" name="color" value="',$row['color'], '">';
    echo '</div>';
    echo '<div class="y"><input type="submit" value="更新"></div>';
    echo '</form>';
    echo "\n";
}
?>
</body>
</html>