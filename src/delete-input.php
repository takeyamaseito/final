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
    <table>
        <tr><th>番号</th><th>シューズ名</th><th>メーカー</th><th>色</th></tr>
        <?php
        $pdo=new PDO($connect,USER,PASS);
        foreach($pdo->query('select * from shoes')as $row){
            echo '<tr>';
            echo '<td>',$row['id'],'</td>';
            echo '<td>',$row['name'],'</td>';
            echo '<td>',$row['mekar'],'</td>';
            echo '<td>',$row['color'],'</td>';
            echo '<td>';
            echo '<a href="delete-output.php?id=',$row['id'],'">削除</a>';
            echo '</td>';
            echo '</tr>';
            echo "\n";
        }
        ?>
        </table>
</body>
</html>