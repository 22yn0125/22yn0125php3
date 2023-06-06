<?php

//スーパーグローバル変数「$_FILES」でアップロードされたファイル情報を取得
$upfileName = $_FILES['upfile']['name'];		//ファイル名
$upfileTmp = $_FILES['upfile']['tmp_name'];		//テンポラリファイル名（アップロードするファイルの一時保存先のパス）
$upfileSize = $_FILES['upfile']['size'];		//ファイルサイズ
$upfileType = $_FILES['upfile']['type'];		//ファイルタイプ

//エラーフラグ
$errorFlag = false;

//テンポラリファイルはアップロードされているか？
if($upfileTmp == ''){
	$errorFlag = true;
}

//ファイルサイズは2MB以下
$byte = 1000 * 1000 * 2;	//2MB（1K=1000で計算）
if($upfileSize > $byte){
	$errorFlag = true;
}

//画像ファイルかどうか？
if($upfileType != 'image/jpeg' && $upfileType != 'image/gif' && $upfileType != 'image/png' && $upfileType != 'image/pjpeg' && $upfileType != 'image/x-png'){
	$errorFlag = true;
}

//エラー表示
if($errorFlag == true){
	print('画像ファイルをアップロードできません');
}
else if($errorFlag == false){
	
	//ファイルのフルパス
	$folderPath = './';
	$fullPath = $folderPath . $upfileName;
	
	/*
	ファイルをアップロードする（テンポラリにあるのは仮ファイル、これで本当にファイルをアップロードする）
	move_uploaded_file(テンポラリファイル,ファイルパス)
	*/
	move_uploaded_file($upfileTmp, $fullPath);
	
	//ページ移動
	header('location:./Sample.php');
}