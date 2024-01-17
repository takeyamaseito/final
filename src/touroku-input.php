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
<form action= "touroku-output.php" method="post">
    <p>シューズ名<input type="text" name="name"></p>
    <p>メーカー<input type="text" name="mekar"></p>
    <p>色<input type="text" name="color"></p>
    <input type="submit" value="送信">
</body>
</html>