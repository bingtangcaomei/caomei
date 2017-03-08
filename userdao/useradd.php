<?php
include '../mysqli/mysqli.php';
$user = $_POST ['user'];
$pass = $_POST ['pass'];
$pass1 = $_POST ['pass1'];
	$sql = "SELECT uid FROM user";
	$result = $mysql->query ($sql);
	while ( $row = mysqli_fetch_array ($result, MYSQL_ASSOC ) ) {
		$uid = $row ['uid'];
	}
	if ($pass == $pass1){
	if ($uid == $user) {
		echo "用户名已存在<br>";
		echo "<a href='../user/useradd.php'>重新注册</a>";
	} elseif (! $user) {
		echo "用户名不能为空<br>";
		echo "<a href='../user/useradd.php'>重新注册</a>";
	} elseif (strlen ( $user ) < 4) {
		echo "请输入正确的用户名<br>";
		echo "<a href='../user/useradd.php'>重新注册</a>";
	}elseif (!$pass){
		echo "密码不能为空<br>";
		echo "<a href='../user/useradd.php'>重新注册</a>";
	}else{
		$sql = "INSERT INTO user (uid,pass,pression) VALUES ('$user','$pass','学生')";
		$result =$mysqli->query ($sql);
		if (! $result) {
			die ("注册失败！<br><a href='../user/index.php'>登录</a>" );
		}
		echo '注册成功！<br>';
		echo "<a href='../user/index.php'>登录</a>";
	}
	}else{
		echo "两次密码不一致！<br>";
		echo "<a href='../user/useradd.php'>重新注册</a>";
	}
	$mysqli->close ();
?>