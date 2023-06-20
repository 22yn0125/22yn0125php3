<?php
session_start();
$_SESSION = [];
$session_name = session_name();
if (isset($_COOKIE[$session_name])) {
    setcookie($session_name, '', time() - 3600);
}
session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <title>ログアウト</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>ログアウトしました</h1>

    <a href="Login.php">ログインページへ</a>

</body>

</html>