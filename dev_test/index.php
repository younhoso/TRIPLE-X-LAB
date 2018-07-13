<?php  
	function print_title(){
		if (isset($_GET['id'])) {
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
	}

	function print_description() {
		if(isset($_GET['id'])) {
    	echo file_get_contents('./data/'.$_GET['id']);
    	} else {
        echo "환영합니다.";
    	}
	}

	function print_list() {
		$list = scandir('./data');
            $i = 0;
            while ($i < count($list)) {
                if($list[$i] != '.') {
                    if($list[$i] != '..') {
                        if($list[$i] != '.DS_Store') {
                            echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>";
                        }
                    }
                }
             $i += 1;
          }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php print_title(); ?></title>
</head>
<body>
    <h1><a href="index.php">WEB</a></h1>
    <ol><?php print_list(); ?></ol> 
    <h2><?php print_title(); ?></h2>
    

    <?php print_description(); ?>
</body>
</html>