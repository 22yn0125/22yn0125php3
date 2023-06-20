<?php
if($_SERVER['REQUEST_METHOD']==='POST'){
    $base=$_POST['base'];
    $height=$_POST['height'];

    if(is_numeric($base)&&is_numeric($height)){
        $area=$base*$height/2;
    }
    else{
        $err='数字を入力してください';
    }
}
else{
    $err='送信ページから値を送信してください';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>kadai01_result</title>
    <meta charset="utf-8">
</head>
<body>
    <h1>計算結果</h1>
    <?php 
        if(isset($err)){
            echo $err;
        }
        else{
            echo '底辺'.$base.'、高さ'.$height.'の三角形の面積は'.$area.'です。';
        }
        ?>


</body>
</html>
