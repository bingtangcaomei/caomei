<title>我的信息</title>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br>";
$user= $_COOKIE["name"];
include '../mysqli/mysqli.php';
$sql = "SELECT name,sex,tel,year,dept,class FROM student where user= '$user'";
$result =$mysqli->query($sql);
?>
<h1>我的信息</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
					<th>年份</th>
					<th>系别</th>
					<th>专业</th>
				</tr>
<?php
while($arr=mysqli_fetch_array($result, MYSQLI_ASSOC)){
?>
				<tr>
                    <td><?php echo $arr['name'];?></td>
                    <td><?php echo $arr['sex'];?></td>
                    <td><?php echo $arr['tel'];?></td>
                    <td><?php echo $arr['year'];?></td>
                    <td><?php echo $arr['dept'];?></td>
                    <td><?php echo $arr['class'];?></td>
                </tr>
                  <?php 	} ?>  
                            </table>
                            <a href="../user/userok.php">返回</a>

        <?php 
            $mysqli->close();//关闭数据库
        ?>