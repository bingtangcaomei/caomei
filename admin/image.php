<title>班级相册</title>
<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
session_start();
$year=$_SESSION["year"];
$dept=$_SESSION["dept"];
$class=$_SESSION["class"];
echo "你所在的班级是:&nbsp;<font color='red'>{$year}&nbsp;{$dept}&nbsp;{$class}</font><br><br>";
include '../mysqli/mysqli.php';
$sql = "SELECT year,dept,class FROM student where year= '$year' AND dept='$dept' AND class='$class'";
$result = $mysqli->query ($sql);
while($arr=mysqli_fetch_array($result)){
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql = "SELECT id,image,year,dept,class FROM image where year= '$year' AND dept='$dept' AND class='$class'";
$result =$mysqli->query ($sql);
?>
<h1>相册列表</h1>
	<table>
		       <tr>
					<th>简介</th>
                    <th>图片</th>
				</tr>
<?php 
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$picName='../image/'.$arr['image'];
	?>

				<tr>
                    <td><?php echo $arr['image'];?></td>
                    <td><?php echo "<div style='border:#F00 1px solid; width:200px;height:200px'>
    <img src=\"".$picName."\" width=200px height=200px>"?></td>
      <td><?php echo "<a href='../admindao/imagedel.php?id=".$arr['id']."'><font color='red'>删除照片</a>"?></td>        
                </tr>
                  <?php 	} ?>  
</table>
<br><a href="../admin/adminok.php">返回</a>
        </div>
<div class=footer>©冰糖草莓 2017.3</div>

