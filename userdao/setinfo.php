<?php
$title = $_POST ['title'];
$content = $_POST ['content'];
$user=$_COOKIE["name"];
infoset();
function infoset(){
	global $title;
	global $content;
	global $user;
	include '../mysqli/mysqli.php';
	$sql = "SELECT * FROM student where user= '$user'";
	$result =$mysqli->query ($sql);
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$name=$arr['name'];
		$year=$arr['year'];
		$dept=$arr['dept'];
		$class=$arr['class'];
	}
	$sql = "INSERT INTO news (name,title,content,year,dept,class) VALUES ('$name','$title','$content','$year','$dept','$class')";
	$result =$mysqli->query ($sql);
	if (! $result) {	
		die ( '发布失败!<br><a href="../user/setinfo.php">');
	}else {
		if ($name=NULL||$year=NULL||$dept=NULL||$class=NULL){	
			die ( '发布失败!<br><a href="../user/setinfo.php">');
		}else {
			echo '<h1>发布成功!</h1><br>正在返回..<meta http-equiv="Refresh" content="2;URL=../user/setinfo.php" />';
		}
	}
	$mysqli->close();
	}
	
?>