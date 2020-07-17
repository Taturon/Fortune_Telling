<?php
// データが送られて来た場合
if (isset($_POST['btn'])) {
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
