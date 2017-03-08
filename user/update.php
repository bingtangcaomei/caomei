<title>修改留言</title>
<style type="text/css">
textarea {
	display:inline-block;
	vertical-align:top;
	}
</style>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br>";
include '../mysqli/mysqli.php';
$id=$_GET['id'];
session_start();
$_SESSION['id']=$id;
$sql = "SELECT  title,content FROM news where id= '$id'";
$result = $mysqli->query ($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
	$title=$arr['title'];
	$content=$arr['content'];
}
$mysqli->close();
?>
<h1>修改留言</h1>
<form action="../userdao/update.php" method="post">
标题:&nbsp;<input type="text" name="title" style="width:265px" value=<?php echo $title;?>><br><br>
内容:&nbsp;<textarea rows="8" cols="35" name="content" ><?php echo $content;?></textarea><br>
<input type ="submit" value="修改"  name="xiugai">
<a href="../user/select.php">返回</a>
</form>
</div>
<div class=footer>©冰糖草莓 2017.3</div>