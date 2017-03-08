<title>校友查询</title>
<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
include '../mysqli/mysqli.php';
$name=$_POST['name'];
$sql="SELECT id,sex,tel, year,dept,class FROM student WHERE name='$name'";
$result=$mysqli->query($sql);
?>
<h1>查询列表</h1>
	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
					<th>入学年级</th>
					<th>所在系别</th>
					<th>所处班级</th>
				</tr>
<?php
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
?>
				<tr>
				    <td><?php echo "<font color=red>{$name}</font>";?></td>
                    <td><?php echo $arr['sex'];?></td>
                    <td><?php echo $arr['tel'];?></td>
                    <td><?php echo $arr['year'];?></td>
                    <td><?php echo $arr['dept'];?></td>
                    <td><?php echo $arr['class'];?></td>
                </tr>
                  <?php 	} ?>  
                            </table>
<?php
echo  "<br><a href='../admin/adminok.php'>返回</a>";?>
        </div>
<div class=footer>©冰糖草莓 2017.3</div>

