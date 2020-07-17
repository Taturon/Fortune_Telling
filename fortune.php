<?php
$lots = [1, 2, 3, 4, 5, 6, 7];
// データが送られて来た場合
if (isset($_POST['btn'])) {
	$lot = array_rand($lots);
	switch ($lot) {
		case 0:
			$res = '大吉';
			break;
		case 1:
			$res = '中吉';
			break;
		case 2:
			$res = '小吉';
			break;
		case 3:
			$res = '吉';
			break;
		case 4:
			$res = '半吉';
			break;
		case 5:
			$res = '末吉';
			break;
		case 6:
			$res = '凶';
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
</head>
<body>
<h1>結果</h1>
</body>
</html>
