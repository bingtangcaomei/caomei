<?php
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];
$uid=$_COOKIE["name"];
mypass();
function mypass(){
	global $pass;
	global $pass1;
	global $uid;
	include '../mysqli/mysqli.php';
	$sql="SELECT pass FROM user WHERE uid='$uid'";
    $result=$mysqli->query($sql);
	while ($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
		$pass2=$row['pass'];
	}
	if ($pass==$pass1 && $pass2!=$pass){
			$sql="UPDATE user SET pass=$pass WHERE uid='$uid'";
			$result=$mysqli->query($sql);
			if (!$result){
				echo "修改密码失败!<br>"."<a href='../user/pass.php'>返回</a>";
			}else {
				echo "修改密码成功!<br>"."<a href='../user/userok.php'>返回</a>";
			}
	}else {
		echo "俩次密码不一致!<br>"."<a href='../user/pass.php'>返回</a>";
	}
	$mysqli->close();
}
?>