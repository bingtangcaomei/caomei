<title>我的留言</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br>";
include '../mysqli/mysqli.php';
$user=$_COOKIE['name'];
$sql = "SELECT name FROM student where user= '$user'";
$result =$mysqli->query ($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$name=$arr['name'];
}
$sql = "SELECT  id,title,content FROM news where name= '$name'";
$result =$mysqli->query ($sql);
	?>
	<h1>我的留言</h1>
	<table>
		       <tr>
					<th>标题</th>
					<th>内容</th>
					<th>操作</th>
					<th>操作</th>
				</tr>
<?php
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
				<tr>
                    <td><?php echo $arr['title'];?></td>
                    <td><?php echo $arr['content'];?></td>
                    <td><?php echo "<a href='../userdao/delete.php?id=".$arr['id']."'><font color='red'>删除</a>"?></td>
                    <td><?php echo "<a href='../user/update.php?id=".$arr['id']."'><font color='red'>修改</a>"?></td>
                    
                </tr>
                  <?php 	} ?>  
                            </table>
                            <br><a href="../user/myclass.php">返回</a>

        <?php 
            $mysqli->close();//关闭数据库
        ?>
</div>
<div class=footer>©冰糖草莓 2017.3</div>