<?php
include '../mysqli/mysqli.php';
$content = $_POST ['content'];
session_start();
$id=$_SESSION['id'];
$sql="UPDATE news SET content='$content' WHERE id='$id'";
$result=$mysqli->query ( $sql);
if ($result) {
	echo "<h1>修改成功！</h1><br>正在返回..";
}else {
	die ( '' );
}
$mysqli->close();
?>
<meta http-equiv="Refresh" content="2;URL=../user/select.php" />