<?php
include("db_link.php");
$cls_name=$_POST['cls_name']; 
$cls_no=$_POST['cls_no'];
$password=$_POST['password']; 

$sql="SELECT * FROM $tbl_name WHERE cls_name='$cls_name' and no='$cls_no' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $cls_name, $cls_no and $password, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_start();
session_register("ses_id");
session_register("ses_cls_name");
session_register("ses_cls_no");
session_register("ses_password");
$row=mysql_fetch_array($result);
$ses_id=$row["id"];
$ses_cname=$row["cname"];
$ses_password=$row["password"];

header("location:preference.php");
}
else {
echo "Incorrect Student Name or Password!";
}

ob_end_flush();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<title>無標題文件</title>
</head>

<style type="text/css">
body {
text-decoration:none;
font-family:Arial, Helvetica, sans-serif;
}
a:link  {
		color: blue;
}
a:visited {
		color: blue;
}

</style>

<body>
<form id="form1" name="form1" method="post" action="">
  <a href="index.html">Retry Again! 
  
  </a>
</form>
</body>
</html>
