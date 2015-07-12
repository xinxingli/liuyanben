<?php
$conn=mysql_connect("localhost","root","15378853770");
mysql_select_db("liuyanben",$conn);
//对数据库中的编码格式进行转换，避免出现乱码
mysql_query("set names utf-8");

?>