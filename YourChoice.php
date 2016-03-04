<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Untitled Document</title>
<style type="text/css">
.style1 {color: #000000; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
</style>

</head>

<body class="style1">
<p>&nbsp;</p>
<?php 
include("db_link.php");
$sql="SELECT * FROM $tbl_name where id='$id1'" ;
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?> 
<table width="479" border="0">
  <tr>
    <td width="105"><strong>Student Name: </strong></td>
    <td width="358"><? echo $rows['ename'];?></td>
  </tr>
  <tr>
    <td><strong>Class: </strong></td>
    <td><? echo $rows['cls_name'];?></td>
  </tr>
  <tr>
    <td><strong>Class No: </strong></td>
    <td><? echo $rows['no'];?></td>
  </tr>
  <tr>
    <td colspan="2"><hr></td>
  </tr>
  <tr>
    <td><strong>Choice 1: </strong></td>
    <td><? echo $rows['C1'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 2: </strong></td>
    <td><? echo $rows['C2'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 3: </strong></td>
    <td><? echo $rows['C3'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 4: </strong></td>
    <td><? echo $rows['C4'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 5: </strong></td>
    <td><? echo $rows['C5'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 6: </strong></td>
    <td><? echo $rows['C6'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 7: </strong></td>
    <td><? echo $rows['C7'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 8: </strong></td>
    <td><? echo $rows['C8'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 9: </strong></td>
    <td><? echo $rows['C9'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 10: </strong></td>
    <td><? echo $rows['C10'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 11: </strong></td>
    <td><? echo $rows['C11'];?></td>
  </tr>
  <tr>
    <td><strong>Choice 12: </strong></td>
    <td><? echo $rows['C12'];?></td>
  </tr>
  <tr>
    <td colspan="2"><hr></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
