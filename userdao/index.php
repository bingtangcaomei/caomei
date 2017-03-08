<?php
$user=$_POST['user'];
$pass=$_POST['pass'];
login();
function login(){
	global $user;
	global $pass;
	include '../mysqli/mysqli.php';
	$sql="SELECT uid,pass,pression FROM user WHERE uid='$user'";
	$result=$mysqli->query($sql);
	while ($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
		$uid=$row['uid'];
		$password=$row['pass'];
		$pression=$row['pression'];
	}
	if ($uid==$user){
		if($password==$pass){
			if ($pression=='学生'){
				echo "<script>url='../user/userok.php';window.location.href=url;</script>";	
				setcookie("name","$user",time()+3600*24 ,'/');
			}else {
				echo "没有权限!<br>"."<a href='../user/index.php'>返回</a>";
			}
		}else{
			echo "密码错误!<br>"."<a href='../user/index.php'>返回</a>";
		}
	}else{
		echo "用户名不存在!<br>"."<a href='../user/index.php'>返回</a>";
	}
	$mysqli->close();
}