<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Function</h1>
	<h2>Basic</h2>

	<?php 
		function basic() {
			print("1 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus impedit quia qui, voluptatem eum maxime ipsam consequatur laborum et quae at rem unde quos iure delectus sequi accusamus aliquam animi?");
			print("<br/>");
			print("2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus impedit quia qui, voluptatem eum maxime ipsam consequatur laborum et quae at rem unde quos iure delectus sequi accusamus aliquam animi?");
			print("<br/>");
		}

		basic();
		basic();
	?>
	<!-- basic이라는 함수는 언제나 똑 같이 동작하는 함수이다. -->


	<h2>parameter & argument</h2>
	<?php 
	function sum($left, $right) {  //$left, $right 변수는 parameter라고 부른다.
		print($left + $right);
		print("<br/>");
	}

	sum(2, 4);	//2, 4 외부에서 작성한 값은 argument라고 부른다.
	sum(5, 3);
	?>

	<h2>return</h2>
	<?php 
		function sum2($left, $right) {
			return $left + $right;
		}
		print(sum2(2, 4));
		file_put_contents("result.txt", sum2(6, 5)); //file_put_contents 파일을 만둘어 지고 그 안에, argument인 값이 무엇이냐에 따라서 값이 저장이 된다.
	?> 
	<!-- sum 이라는 함수는 입력값이 무엇이냐에 따라서 다르게 동작하는 함수이다. -->
</body>
</html>