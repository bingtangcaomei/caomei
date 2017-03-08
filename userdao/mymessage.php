<?php
$uid=$_COOKIE["name"];
$name=$_POST['name'];
$sex=$_POST['sex'];
$tel=$_POST['tel'];
$s1= $_POST["s1"];
$s2= $_POST["s2"];
$s3= $_POST["s3"];
message();
function message(){
	global $uid;
	global $name;
	global $sex;
	global $tel;
	global $s1;
	global $s2;
	global $s3;
	$class=$s3;
	include '../mysqli/mysqli.php';
	$sql="SELECT year,dept FROM info1 where year_id='$s1' AND dept_id='$s2'";
	$result=$mysqli->query($sql);
	while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
		$year=$row['year'];
		$dept=$row['dept'];
	}
    $sql="UPDATE student SET name='$name',sex='$sex',tel='$tel',year='$year',dept='$dept',class='$class' WHERE user='$uid'";
    $result=$mysqli->query($sql);
    	if($result){
    	echo "个人信息保存成功!"."<meta http-equiv='Refresh' content='2;URL=../user/userok.php' />";
    	}else {
    		echo "个人信息保存失败!"."<a href='../user/userok.php'>返回</a>";
    	}
    	$mysqli->close();
}