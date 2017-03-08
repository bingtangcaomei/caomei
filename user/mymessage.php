<html>
<title>个人信息</title>
<link rel="stylesheet" href="../css/style1.css">
<div class="all">
      <div class="logo">
      <img src="../css/logo.png">
      </div><br>
<?php  
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>个人信息"."<br><br>";
include "../mysqli/mysqli.php";
$user= $_COOKIE["name"];
$sql = "SELECT * FROM student where user= '$user'";
$result =$mysqli->query($sql);
while ($arr=mysqli_fetch_array($result, MYSQLI_ASSOC)){
	$name=$arr['name'];
	$sex=$arr['sex'];
	$tel=$arr['tel'];
	$year=$arr['year'];
	$dept=$arr['dept'];
	$class=$arr['class'];
}
?>

	<table>
		       <tr>
					<th>姓名</th>
					<th>性别</th>
					<th>电话</th>
					<th>入学年级</th>
					<th>所在系别</th>
					<th>所处班级</th>
				</tr>
				<tr>
				    <td><?php echo "<font color=red>{$name}</font>";?></td>
                    <td><?php echo $sex ?></td>
                    <td><?php echo $tel ?></td>
                    <td><?php echo $year;?></td>
                    <td><?php echo $dept;?></td>
                    <td><?php echo $class;?></td>
                </tr>
</table>
<?php echo "<font color='red'>若当前信息有误,请重新填写</font>"?>

<script type="text/javascript">
 
//二级菜单数组
var subcat = new Array();
<?php
$i=0;
$sql="SELECT * FROM info1";
$result=$mysqli->query($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
 echo "subcat[".$i++."] = new Array('".$arr["year_id"]."','".$arr["dept"]."','".$arr["dept_id"]."');\n";
}
?>

//三级菜单数组
var subcat2 = new Array();
<?php
$i=0;
$sql="SELECT * FROM info2";
$result=$mysqli->query($sql);
while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC))
{
 echo "subcat2[".$i++."] = new Array('".$arr["dept_id"]."','".$arr["dept"]."','".$arr["class"]."');\n";
}
?>
function changeselect1(locationid)
{
 document.form.s2.length = 0;
 document.form.s2.options[0] = new Option('--请选择年份--','');
 for (i=0; i<subcat.length; i++)
 {
  if (subcat[i][0] == locationid)
  {
   document.form.s2.options[document.form.s2.length] = new Option(subcat[i][1], subcat[i][2]);
  }
 }
}
function changeselect2(locationid)
{
 document.form.s3.length = 0;
 document.form.s3.options[0] = new Option('--请选择专业--','');
 for (i=0; i<subcat2.length; i++)
 {
  if (subcat2[i][0] == locationid)
  {
   document.form.s3.options[document.form.s3.length] = new Option(subcat2[i][2], subcat2[i][3]);
  }
 }
}

</script><br>
<h1>个人信息</h1>
<form name="form" action="../userdao/mymessage.php" method="post">
姓名:<input type="text" name="name" ><br><br>
性别:<input type="radio" name="sex" value=男>男
          <input type="radio" name="sex" value=女>女<br><br>
电话:<input type="tel" name="tel"><br><br>
年份:
<select name="s1" onChange="changeselect1(this.value)">
<option>--请选择年份--</option>

<option  value=1>12级</option>
<option  value=2>13级</option>
<option  value=3>14级</option>
</select><br><br>
系别:
<select name="s2" onChange="changeselect2(this.value)">
 <option value="">--请选择系别--</option>
</select><br><br>
专业:
<select name="s3">
  <option value="">--请选择专业--</option>
</select><br><br>
<input type="submit" value="保存">
<a href='../user/userok.php'>返回</a>
</form>
</div>
<div class=footer>©冰糖草莓 2017.3</div>
</html>
