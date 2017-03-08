<title>我的班级</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br>";
?>
<h1>我的班级</h1><br>
<a href="../user/setinfo.php">发布留言</a><br>
<a href="../user/select.php">我的留言</a><br>
<a href="../user/mate.php">班级列表</a><br>
<a href="../user/image.php">班级相册</a><br>
<a href="../user/userok.php">返回</a>
</div>
<div class=footer>©冰糖草莓 2017.3</div>