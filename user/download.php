<title>班级相册</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br>";
include '../mysqli/mysqli.php';
$user=$_COOKIE['name'];
$sql = "SELECT year,dept,class FROM student where user= '$user'";
$result =$mysqli->query ( $sql);
while($arr=mysqli_fetch_array($result,MYSQL_ASSOC)){
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql = "SELECT image,year,dept,class FROM image where year= '$year' AND dept='$dept' AND class='$class'";
$result =$mysqli->query ( $sql);
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
    <img src=\"".$picName."\"  width=200px height=200px>"?></td>
    
                </tr>
                  <?php 	} ?>  
</table>
<br><a href="../user/image.php">返回</a>
</div>
<div class=footer>©冰糖草莓 2017.3</div>
