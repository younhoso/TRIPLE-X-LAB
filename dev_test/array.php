<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Array</h1>
	<?php 
	// 방식 1
$prices = array(
     "thdbsgh" => "밥먹고 싶다.",
     "bar" => "배고프다",
     "forr" => 32
);

foreach($prices as $key => $val) {
    echo $key.":".$val."<br/>";
}

	?>
</body>
</html>