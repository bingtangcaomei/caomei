<title>班级留言</title>
<style type="text/css">
textarea {
	display:inline-block;
	vertical-align:top;
	}
</style>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br>";
$name=$_COOKIE['name'];
$conn=include '../mysqli/mysqli.php';
$sql = "SELECT year,dept,class FROM student where user= '$name'";
$result=$mysqli->query($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
$sql= "SELECT  * FROM news where year= '$year' AND dept='$dept' AND class='$class'";
$result=$mysqli->query($sql);
?>
	<h1>留言列表</h1>
	<table>
		       <tr>
					<th>题目</th>
					<th>用户</th>
					<th>内容</th>
				</tr>
<?php
while($arr=mysqli_fetch_array($result)){
?>
				<tr>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['content'];?></td>
                </tr>
<?php 	}?>  
      </table>
<h1>发布留言</h1>
<form action="../userdao/setinfo.php" method="post">
标题:&nbsp;<input type="text" name="title"style="width:265px"><br><br>
内容:&nbsp;<textarea rows="8" cols="35" name="content" ></textarea><br><br>
<input type ="submit" value="发布" name="fabu">
<a href="../user/myclass.php">返回</a>
</form>
</div>
<div class=footer>©冰糖草莓 2017.3</div>