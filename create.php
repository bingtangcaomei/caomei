<?php
include '../mysqli/mysqli.php';
 //创建数据库
/*$sql='CREATE DATABASE title';
$retval =mysql_query($sql,$conn);
if(!$retval){
     die('创建数据库失败!');
}
echo '数据库创建成功!';  */
 //数据表创建
//用户表
 $sql = "CREATE TABLE user(
 	 id INT NOT NULL AUTO_INCREMENT,
 	 uid VARCHAR(100) NOT NULL,
     pass VARCHAR(100) NOT NULL,
 	 pression VARCHAR(100) NOT NULL,
 	 PRIMARY KEY(id))";
// 帖子表
/*     $sql = "CREATE TABLE news(
 	 id INT NOT NULL AUTO_INCREMENT,
 	 name VARCHAR(100) NOT NULL,
 	 title VARCHAR(100) NOT NULL,
     content VARCHAR(100) NOT NULL,
     year VARCHAR(100) NOT NULL,
     dept VARCHAR(100) NOT NULL,
     class VARCHAR(100) NOT NULL, 
 	 PRIMARY KEY(id))";*/
//学校信息-------三级联动
/*    $sql=" CREATE TABLE info1 (
    id INT NOT NULL AUTO_INCREMENT,
    year VARCHAR(100) NOT NULL,
    dept VARCHAR(100) NOT NULL,
    year_id INT(50) NOT NULL,
   	dept_id INT(50) NOT NULL,
    PRIMARY KEY  (id))"; */
/*    $sql=" CREATE TABLE info2 (
    id INT NOT NULL AUTO_INCREMENT,
    class VARCHAR(100) NOT NULL,
    dept VARCHAR(100) NOT NULL,
    class_id INT(50) NOT NULL,
   	dept_id INT(50) NOT NULL,
    PRIMARY KEY  (id))"; */
   //用户信息
/*   $sql = "CREATE TABLE student(
 	 id INT NOT NULL AUTO_INCREMENT,
  	 user VARCHAR(100) NOT NULL,
 	 name VARCHAR(100) NOT NULL,
 	 sex VARCHAR(100) NOT NULL,
     tel VARCHAR(100) NOT NULL,
     year VARCHAR(100) NOT NULL,	
     dept VARCHAR(100) NOT NULL,		
     class VARCHAR(100) NOT NULL,			
 	 PRIMARY KEY(id))";  */
    //我的好友表
/*      $sql = "CREATE TABLE friend(
     id INT NOT NULL AUTO_INCREMENT,
     user VARCHAR(100) NOT NULL,
     name VARCHAR(100) NOT NULL,
     sex VARCHAR(100) NOT NULL,
     tel VARCHAR(100) NOT NULL,
     year VARCHAR(100) NOT NULL,
     dept VARCHAR(100) NOT NULL,
     class VARCHAR(100) NOT NULL,
     PRIMARY KEY(id))";  */
    //班级相册
/*     $sql = "CREATE TABLE image(
     id INT NOT NULL AUTO_INCREMENT,
     image VARCHAR(100) NOT NULL,
     year VARCHAR(100) NOT NULL,
     dept VARCHAR(100) NOT NULL,
     class VARCHAR(100) NOT NULL,
     PRIMARY KEY(id))";   */
 //数据表删除
 /* $sql="DROP TABLE "; */
 $result=$mysqli->query($sql);
 if(!$result){
 	die('数据表创建失败！');
 }
 echo '数据表创建成功！';
//关闭数据库
$mysqli->close();
?>