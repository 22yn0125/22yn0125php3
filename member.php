<?php
 session_start();
 if(empty($_SESSION['member'])){
    header('Location: Login.php');
    exit;
 }

 $member=$_SESSION['member'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>会員専用ページ</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>会員専用ページ</h1>
    <p>こんにちは。<?php echo $member['name']?>さん。</p>    
    <p>どうぞごゆっくり。</p>
    <a href="logout.php">ログアウト</a>

</body>
</html>
