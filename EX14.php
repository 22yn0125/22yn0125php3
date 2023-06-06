<?php
    // 入力された底辺と高さを受け取り、三角形の面積を計算する。
    $base=$_GET['base'];
    $height=$_GET['height'];
    print "底辺は{$base}<br>";
    print "高さは{$height}<br>";
    $area=$base*$height/2;
    print "三角形の面積は{$area}<br>";
?>
