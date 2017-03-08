<?php
include '../mysqli/mysqli.php';
    $id=$_GET['id'];
	$sql = "SELECT * FROM image WHERE id='$id'";
	$result = $mysqli->query ( $sql);
	while($arr=mysqli_fetch_array($result,MYSQLI_ASSOC)){
		$image=$arr['image'];
	}
	$sql = "DELETE  FROM image WHERE id='$id'";
	$result = $mysqli->query ($sql);
	$file="../image/$image";
	$result = @unlink ($file);
	if($result == TRUE){
	echo "<h1>删除成功！</h1><br>正在返回..";
	}
	else{
	echo "<h1>删除失败！</h1><br>正在返回..";
	}
	?>
<meta http-equiv="Refresh" content="2;URL=../admin/image.php" />
