<title>班级管理</title>
<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<?php 
include '../mysqli/mysqli.php';
$s1= $_POST["s1"];
$s2= $_POST["s2"];
$s3= $_POST["s3"];
$class=$s3;
$sql="SELECT year,dept FROM info1 where year_id='$s1' AND dept_id='$s2'";
$result=$mysqli->query($sql);
while ($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$year=$row['year'];
	$dept=$row['dept'];
}
echo "你所在的班级是:&nbsp;<font color='red'>{$year}&nbsp;{$dept}&nbsp;{$class}</font><br><br>";
session_start();
$_SESSION['year']=$year;
$_SESSION['dept']=$dept;
$_SESSION['class']=$class;
?> 
<h1>班级管理</h1><br>
<a href="mate.php">校友管理</a><br>
<a href="list.php">留言管理</a><br>
<a href="image.php">相册管理</a><br>
<a href="adminok.php">返回</a>
</div>
<div class=footer>©冰糖草莓 2017.3</div>
