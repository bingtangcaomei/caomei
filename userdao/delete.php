<?php
include '../mysqli/mysqli.php';
    $id=$_GET['id'];
	$sql = "DELETE  FROM news WHERE id='$id'";
	$result =$mysqli->query ( $sql);
	if ($result) {
		echo "<h1>删除成功！</h1><br>正在返回..";
	}else {
	die();
	}
	$mysqli->close();
	?>
<meta http-equiv="Refresh" content="2;URL=../user/select.php" />
