<title>班级留言</title>
<link rel="stylesheet" href="../css/style1.css">
</head>
<body>
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div>
<?php
include '../mysqli/mysqli.php';
session_start();
$year=$_SESSION["year"];
$dept=$_SESSION["dept"];
$class=$_SESSION["class"];
echo "你所在的班级是:&nbsp;<font color='red'>{$year}&nbsp;{$dept}&nbsp;{$class}</font><br><br>";
$sql = "SELECT  * FROM news where year= '$year' AND dept='$dept' AND class='$class'";
$result = $mysqli->query ($sql);
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
               <td><?php echo "<a href='../admindao/listdel.php?id=".$arr['id']."'><font color='red'>删除留言</a>"?></td>     
                </tr>
                  <?php 	} ?>  
                            </table>
                            <br><a href="adminok.php">返回</a>

        <?php 
            $mysqli->close();//关闭数据库
        ?>
         </div>
<div class=footer>©冰糖草莓 2017.3</div>