<?php
include '../mysqli/mysqli.php';
$user = $_POST ['user'];
$pass = $_POST ['pass'];
	$sql = "SELECT pass,pression FROM user WHERE uid='$user'";
	$result = $mysqli->query ( $sql);
	while ( $row = mysqli_fetch_array ( $result, MYSQL_ASSOC ) ) {
		$password = $row ['pass'];
		$pression = $row ['pression'];
	}
	if ($pass == $password && $pression == "管理员") {
		echo "<script>url='../admin/adminok.php';window.location.href=url;</script>";
	} else {
		echo "账号/密码错误<br>";
		echo "<a href='../admin/admin.php'>登录</a>";
	}
	$mysql->close ();
?>