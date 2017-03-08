<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br>";
include '../mysqli/mysqli.php';
$id=$_GET['id'];
$user=$_COOKIE["name"];
$sql="SELECT * FROM student WHERE id='$id'";
$result=$mysqli->query($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$name=$arr['name'];
	$sex=$arr['sex'];
	$tel=$arr['tel'];
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql="SELECT * FROM friend WHERE user='$user'";
$result = $mysqli->query ($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$name1=$arr['name'];
	$sex1=$arr['sex'];
	$tel1=$arr['tel'];
	$year1=$arr['year'];
	$dept1=$arr['dept'];
	$class1=$arr['class'];
}
if ($name==$name1&&$sex==$sex1&&$tel==$tel1&&$year==$year1&&$dept==$dept1&&$class==$class1){
	echo "<h1>不能重复添加好友!</h1><br>正在返回..";
	echo "<meta http-equiv='Refresh' content='3;URL=../user/userok.php' />";
}else {
	$sql = "INSERT INTO friend (user,name,sex,tel,year,dept,class) VALUES('$user','$name','$sex','$tel','$year','$dept','$class')";
	$result = $mysqli->query ($sql);
	if ($result){
		echo "<h1>添加成功!</h1><br>正在返回..";
		echo "<meta http-equiv='Refresh' content='3;URL=../user/userok.php' />";
	}else {
		echo "<h1>添加失败!</h1><br><a href='../user/query.php'>返回</a>";
	}
	$mysqli->close();
};
?>
