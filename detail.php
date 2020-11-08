<?php
if (isset($_GET['num']) && in_array($_GET['num'], range(1, 7))) {
	$num = $_GET['num'];
	switch ($num) {
		case 1:
			$res = '絶好調の運勢！';
			break;
		case 2:
			$res = '今日という日に期待大！';
			break;
		case 3:
			$res = 'ちょっといいことあるかも！';
			break;
		case 4:
			$res = 'ラッキー！';
			break;
		case 5:
			$res = '末吉よりはいいかも';
			break;
		case 6:
			$res = '一応吉だよ';
			break;
		case 7:
			$res = 'ダメだったらやり直せばええんやで';
	}
} else {
	header('Location:button.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>おみくじ</title>
	  	<link rel="apple-touch-icon" type="image/png" href="/favicon/apple-touch-icon-180x180.png">
		<link rel="icon" type="image/png" href="/favicon/icon-192x192.png">
	</head>
	<body>
		<h1>結果の詳細</h1>
		<h2><?= $res; ?></h2>
		<p>
			<a href="button.php">
				<button type="button">もう一度おみくじを引く</button>
			</a>
		</p>
	</body>
</html>
