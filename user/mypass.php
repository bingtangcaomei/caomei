<html>
<head>
<title>密码修改</title></head>
<link rel="stylesheet" href="../css/style.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br>";?>
<h1>修改密码</h1>
<form action="../userdao/mypass.php" method="post">
新密码:<input type="password" name="pass" ><br>
请确认:<input type="password" name="pass1"><br>
&nbsp;<a href="../user/userok.php">返回</a>
<input type="submit" value='修改' name="xiugai" >
</form>
</div>
<div class=footer>©冰糖草莓 2017.3</div>
</html>