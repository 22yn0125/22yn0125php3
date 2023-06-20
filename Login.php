<?php
$members = [
    ['id' => 'id01', 'password' => 'pass01', 'name' => '鈴木'],
    ['id' => 'id02', 'password' => 'pass02', 'name' => '山田'],
    ['id' => 'id03', 'password' => 'pass03', 'name' => '青山'],
];

session_start();
if (!empty($_SESSION['member'])) {
    header('Location: member.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $member_id = $_POST['member_id'];
    $password = $_POST['password'];
    foreach ($members as $member) {
        if ($member_id === $member['id'] && $password === $member['password']) {
            session_regenerate_id(true);

            $_SESSION['member']['id'] = $member['id'];
            $_SESSION['member']['name'] = $member['name'];

            header('Location: member.php');
            exit;
        }

        $err = '会員IDまたはパスワードが正しくありません。';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>ログイン</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>ログイン</h1>
    <p>会員IDとパスワードを入力して下さい</p>
    <form action="" method="POST">
        <p>会員ID: <input type="text" name="member_id"></p>
        <p>パスワード：<input type="password" name="password"></p>
        <p><input type="submit" value="ログイン"></p>
    </form>
    <?php if (isset($err)) : ?>
        <p style="color:red"><?php echo $err ?></p>
    <?php endif ?>
</body>

</html>