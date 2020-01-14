<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
請輸入帳號密碼 : 
帳號 : <input type="text" name="account" /><br />
密碼 : <input type="password" name="password" /><br />
<button type="submit">登入</button>
</form>
</body>
</html>
<?php
$account = $_GET["account"];
$password = $_GET["password"];

echo "帳號 : ".$account;
echo "密碼 : ".$password;
?>