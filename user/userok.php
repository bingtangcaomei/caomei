<title>郑州成功财经学院校友录</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "欢迎" ."<font color='blue'>". $_COOKIE["name"] . "</font>"."来到郑州成功财经学院校友录！<br>";
?>
<br>
<form action="../user/query.php" method="post">
请输入想要查询的同学姓名：<br><br>
<input type="text"  id=name name=name>
<input type="submit" value="查询">
</form><br>
<a href="../user/mymessage.php">个人信息</a><br>
<a href="../user/myfriend.php">我的好友</a><br>
<a href="../user/myclass.php">我的班级</a><br>
<a href="../user/mypass.php">密码修改</a><br>
<a href="../user/index.php">退出登录</a>
</div>
<div class=footer>©冰糖草莓 2017.3</div>
