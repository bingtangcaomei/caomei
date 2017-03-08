<?php
include '../mysqli/mysqli.php';
    $id=$_GET['id'];
	$sql = "SELECT name FROM student WHERE id='$id'";
	$result = $mysqli->query($sql);
	while($arr=mysql_fetch_array($result)){
		$name=$arr['name'];
	}
	$sql = "DELETE  FROM news WHERE name='$name'";
	$result =$mysqli->query ($sql);
	$sql = "DELETE  FROM student WHERE id='$id'";
	$result =$mysqli->query ( $sql);
	if (! $result) {
		die ( '' );
	}
	echo "<h1>删除成功！</h1><br>正在返回..";
	?>
<meta http-equiv="Refresh" content="2;URL=../admin/mate.php" />
