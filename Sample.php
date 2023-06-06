<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8" />
		<title>RE44　yyJNccnn　画像アップローダ</title>
	</head>
	<body>
		<p>画像アップローダ</p>
		<form action="./Sample2.php" method="post" enctype="multipart/form-data">
			<input type="file" name="upfile" />
			<input type="submit" value="アップロード" />
		</form>
		<div>
			<hr/>
			<?php
				
				//フォルダパス
				$folderPath = './';
				
				/*
				ディレクトリ内のファイルを配列化
				scandir(ディレクトリ)、ディレクトリ内のファイルを配列化する関数
				*/
				$directory = scandir($folderPath);
				//var_dump($directory);
				//foreach文で配列を読み取り、タグとして出力
				foreach($directory as $fileName){
					
					if($fileName != '.' && $fileName != '..' && $fileName != 'Thumbs.db'){
						$fullPath = $folderPath.$fileName;
						$img = "<img src=\"{$fullPath}\" alt=\"{$fileName}\" /><hr/>";
						print($img);
					}
				}
				
			?>
		</div>
	</body>
</html>
