<?php
ob_start();
$host="localhost";  
$username="(yourdbusername)";
$password="(yourdbpassword)"; 
$db_name="tlserver";
$tbl_name="nss_admin";

mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

?>
