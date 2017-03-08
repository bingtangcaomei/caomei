
<?php
echo "用户:"."<font color='blue'>". $_COOKIE["name"] . "</font>"."<br><br><br>";
$name=$_COOKIE["name"];
upload();
function upload(){
	global $name;
$arrType=array('image/jpg','image/jpeg','image/gif','image/png','image/bmp','image/pjpeg');
$upfile='../image/'; //图片目录路径
$max_size='500000';      // 最大文件限制（单位：byte）
$file=$_FILES['upfile'];

 if($_SERVER['REQUEST_METHOD']=='POST'){ //判断提交方式是否为POST
     if(!is_uploaded_file($file['tmp_name'])){ //判断上传文件是否存在
    echo "<font color='red'>文件不存在！</font>";
    exit;
    }
   
  if($file['size']>$max_size){  //判断文件大小是否大于500000字节
    echo "<font color='red'>上传文件太大！</font>";
    exit;
   } 
  if(!in_array($file['type'],$arrType)){  //判断图片文件的格式
     echo "<font color='red'>上传文件格式不对！</font>";
     exit;
   }
  if(!file_exists($upfile)){  // 判断存放文件目录是否存在
   mkdir($upfile,0777,true);
   } 
   $imageSize=getimagesize($file['tmp_name']);
   $img=$imageSize[0].'*'.$imageSize[1];
   $fname=$file['name'];
   $ftype=explode('.',$fname);
   $picName=$upfile.$fname;
    
   include '../mysqli/mysqli.php';
   $sql="SELECT * FROM student WHERE user='$name'";
   $result=$mysqli->query($sql);
   while ($row=mysqli_fetch_array($result, MYSQL_ASSOC)){
   	$year=$row['year'];
   	$dept=$row['dept'];
   	$class=$row['class'];
   }
   	$sql="INSERT INTO image(image,year,dept,class) VALUES('$fname','$year','$dept','$class')";
   	$result=$mysqli->query($sql);
   	if (!$result){
   		die( "图片上传失败!<br>"."<a href='../user/image.php'>返回</a>");
   	}else{
   		if(file_exists($picName)){
   			die( "<font color='red'>同文件名已存在！</font><br>");
   		}
   		if(!move_uploaded_file($file['tmp_name'],$picName)){
   			die( "<font color='red'>移动文件出错！</font><br>");
   		}
   		echo "图片上传成功!<br>";   	
       echo "预览:<br><div style='border:#F00 1px solid; width:200px;height:200px'>
         <img src=\"".$picName."\" width=200px height=200px>".$fname."</div></center><br>";
   	 }
 }
}
echo "<a href='../user/image.php'>返回</a>";
$mysqli->close();
?>



