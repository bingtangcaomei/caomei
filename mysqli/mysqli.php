<?php
$mysqli=new mysqli();
$mysqli->connect('localhost', 'root', 'root', 'fei');
if(!$mysqli){
	exit('数据库连接失败'.mysqli_connect_error());
}else{

}


