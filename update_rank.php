<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Untitled Document</title>
<style type="text/css">
<!--
.style4 {	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
}
-->
</style>
</head>
<?php
include("db_link.php");
$sql="UPDATE $tbl_name SET rank = (
      SELECT rank FROM $tbl_name2 
      WHERE $tbl_name.cls_name = $tbl_name2.class AND
	  $tbl_name.no = $tbl_name2.class_no
   )" ;
$result=mysql_query($sql);
$updated=mysql_affected_rows(); 

$sql_total="SELECT * FROM $tbl_name";
$result_total=mysql_query($sql_total);
$count_total=mysql_num_rows($result_total);

if($result){
echo "Records updated Successfully!";
echo "<BR>";
}

else {
echo "ERROR";
}  
?>

<body>
<p>&nbsp;</p>
<p><strong class="style4">Updated records : <? echo $updated; ?></strong>
</p>
<p class="style4"><strong>Total F.3 records : <? echo $count_total; ?></strong></p>
<p>&nbsp;
</p>
<p>
  <input name="button2" type="button" class="style4" id="button2" onClick="window.location='adminpage.htm'" value="Admin Page">
  <input name="button3" type="button" class="style4" id="button3" onClick="window.location='adminlogout.php'" value="Logout">
    
</p>

</body>
</html>
