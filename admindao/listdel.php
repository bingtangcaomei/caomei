<?php
include '../mysqli/mysqli.php';
$id=$_GET['id'];
$sql = "DELETE  FROM news WHERE id='$id'";
$result =$mysqli->query ( $sql);
if (! $result) {
	die ( '' );
}
	echo "<h1>删除成功！</h1><br>正在返回..";
?>
<meta http-equiv="Refresh" content="2;URL=../admin/list.php" />
