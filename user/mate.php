<title>班级列表</title>
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
$result = $mysqli->query ( $sql );
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql = "SELECT  name,sex,tel FROM student where year= '$year' AND dept='$dept' AND class='$class'";
$result = $mysqli->query ( $sql);
	?>
	<h1>班级列表</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
				</tr>
<?php
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
				<tr>
                    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['sex'];?></td>
                     <td><?php echo $arr['tel'];?></td>         
                </tr>
                  <?php 	} ?>  
                            </table>
                            <br><a href="../user/myclass.php">返回</a>

        <?php 
            $mysqli->close();//关闭数据库
        ?>
</div>
<div class=footer>©冰糖草莓 2017.3</div>