<?php
include '../mysqli/mysqli.php';
    $id=$_GET['id'];
	$sql = "DELETE  FROM friend WHERE id='$id'";
	$result = $mysqli->query ($sql);
	echo "<h1>删除成功！</h1><br>正在返回..";
	$mysqli->close();
	?>
<meta http-equiv="Refresh" content="2;URL=../user/myfriend.php" />
