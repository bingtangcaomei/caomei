<title>我的好友</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br>";
include '../mysqli/mysqli.php';
$user=$_COOKIE["name"];
$sql="SELECT id,name,sex,tel, year,dept,class FROM friend WHERE user='$user'";
$result=$mysqli->query($sql);
?>
<h1>我的好友</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
					<th>入学年级</th>
					<th>所在系别</th>
					<th>所处班级</th>
					<th>操作</th>
				</tr>
<?php
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
				<tr>
				    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['sex'];?></td>
                    <td><?php echo $arr['tel'];?></td>
                    <td><?php echo $arr['year'];?></td>
                    <td><?php echo $arr['dept'];?></td>
                    <td><?php echo $arr['class'];?></td>
                    <td><?php echo "<a href='../userdao/frienddel.php?id=".$arr['id']."'><font color='red'>删除好友</a>"?></td>        
                </tr>
                  <?php 	} ?>  
                            </table>
<?php
echo  "<br><a href='../user/userok.php'>返回</a>";?>
</div>
<div class=footer>©冰糖草莓 2017.3</div>