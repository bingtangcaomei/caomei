<title>班级相册</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br><br>";
echo "上传照片:<br><br>";
?>
<form enctype="multipart/form-data" action="../user/upload.php" method="post">
<input type="hidden" name="max_file_size" >
<input type="file" name="upfile" ><br><br>
<input type="submit" value="上传文件">
</form><br><br>

<a href="../user/download.php">查看相册</a>
<?php echo "<a href='../user/myclass.php'>返回</a>";?>
</div>
<div class=footer>©冰糖草莓 2017.3</div>