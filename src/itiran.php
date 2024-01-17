<?php require 'menu.php'; ?>
<?php require 'db-connect.php'; ?>
<?php
$pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->query('select * from shoes ');
    echo '<table>';
    echo '<tr>';
    echo '<th>番号','</th>';
    echo '<th>シューズ名','</th>';
    echo '<th>メーカー','</th>';
    echo '<th>色','</th>';
    echo '</tr>';

foreach($sql as $row){
    echo '<tr>';
    echo '<td>',$row['id'],'</td>';
    echo '<td>',$row['name'],'</td>';
    echo '<td>',$row['mekar'],'</td>';
    echo '<td>',$row['color'],'</td>';
    echo '</tr>';
}
echo '</table>';
?>