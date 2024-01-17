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
    <?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from shoes where id=?');
    if($sql->execute([$_GET['id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
    ?>
    <br><hr><br>
    <table>
        <tr><th>番号</th><th>シューズ名</th><th>メーカー</th><th>色</th></tr>
        <?php
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
        <form action="delete-input.php" method="post">
            <button type="submit">削除画面へ戻る</button>
            </form>
    </body>
</html>