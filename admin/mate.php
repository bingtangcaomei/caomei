<title>班级列表</title>
<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
session_start();
$year=$_SESSION['year'];
$dept=$_SESSION['dept'];
$class=$_SESSION['class'];
echo "你所在的班级是:&nbsp;<font color='red'>{$year}&nbsp;{$dept}&nbsp;{$class}</font><br><br>";
include '../mysqli/mysqli.php';
$sql = "SELECT id,name,sex,tel FROM student where year= '$year' AND dept='$dept' AND class='$class'";
$result =$mysqli->query ($sql);
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
                     <td><?php echo "<a href='../admindao/matedel.php?id=".$arr['id']."'><font color='red'>删除同学</a>"?></td>        
                </tr>
                  <?php 	} ?>  
                            </table>
                            <br><a href="../admin/adminok.php">返回</a>

        <?php 
           $mysqli->close();//关闭数据库
        ?>
        </div>
<div class=footer>©冰糖草莓 2017.3</div>