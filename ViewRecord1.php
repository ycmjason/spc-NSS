<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Untitled Document</title>
<style type="text/css">

	#body {
		margin-top:50px;
		margin-left:50px;
		width:100%;
		
	}
	
	a:link  {
		color: blue;
	}
	a:visited {
		color: blue;
	}
	.style1 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-decoration:none;
	border-bottom:2px solid black;
	}
	.style2 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	border-top:1px solid black;
	border-bottom:1px solid black;
	}
	.style3 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-decoration:none;
	border-bottom:2px solid black;
	}
	.style4 {
	font-size: 12px;
	font-family: Arial, Helvetica, sans-serif;
	}
	
</style>
<script language="javascript">
	function printpage() {
	 window.print()
	}

</script>
</head>

<body>
<table width="1165" border="0">
  <tr>
    <td width="1159" height="45" class="style1"><form action="ViewRecord1.php" method="post" name="form1">
      CLASS :
      <select name="cls_name" id="cls_name">
        <option>3A</option>
        <option>3B</option>
        <option>3C</option>
        <option>3D</option>
        <option>3E</option>
        <option>3F</option>
      </select>
      <input name="Submit" type="submit" class="style4" value="Submit">
                    </form></td>
  </tr>
</table>

<table width="1167" border="0" cellpadding="3" cellspacing="3" class="style4">
  <tr>
    <td width="124" bgcolor="#CCCCCC" class="style4"><div align="center">Student Name </div></td>
    <td width="34" bgcolor="#CCCCCC" class="style4">F.4 Class </td>
    <td width="32" bgcolor="#CCCCCC" class="style4"><div align="center">Class</div></td>
    <td width="35" bgcolor="#CCCCCC" class="style4"><div align="center">Class No </div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">Rank</div></td>
    <td width="25" bgcolor="#CCCCCC"><div align="center">C1</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C2</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C3</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C4</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C5</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C6</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C7</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C8</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C9</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C10</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C11</div></td>
    <td width="30" bgcolor="#CCCCCC"><div align="center">C12</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC1</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC2</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC3</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC4</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC5</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC6</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC7</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC8</div></td>
    <td width="35" bgcolor="#CCCCCC"><div align="center">3XC9</div></td>
<?php 
	include("db_link.php");
	$cls_no=$_POST['cls_name'];
	$sql="SELECT * FROM $tbl_name where cls_name='$cls_name'" ;
	$result=mysql_query($sql);
	while($rows=mysql_fetch_array($result)){?>
</tr>
  <tr>
    <td height="29" align="center" valign="middle" class="style4">
	  <div align="left"><? echo $rows['ename'];?>
      </div>
	  <div align="center"></div></td>
    <td height="29" align="center" valign="middle" class="style4"><? echo $rows['a_class']; ?></td>
    <td width="32" align="center" valign="middle" class="style4"><div align="center"><? echo $rows['cls_name']; ?></div>
    <div align="center"></div></td>
    <td width="35" align="center" valign="middle" class="style4"><div align="center"><? echo $rows['no']; ?></div>
    <div align="center"></div></td>
    <td width="35" align="center" valign="middle"><div align="center"></div>
      <div align="center"><? echo $rows['rank']; ?></div>
    <div align="center"></div></td>
    <td width="25" align="center" valign="middle"><? echo $rows['C1']; ?></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C2']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C3']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C4']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C5']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C6']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C7']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C8']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C9']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C10']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C11']; ?></div>
    <div align="center"></div></td>
    <td width="30" align="center" valign="middle"><div align="center"><? echo $rows['C12']; ?></div>
    <div align="center"></div></td>
    <td width="35" align="center" valign="middle"><div align="center"><? echo $rows['3XC1']; ?></div>
    <div align="center"></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC2']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC3']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC4']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC5']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC6']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC7']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC8']; ?></div></td>
    <td width="35"><div align="center"><? echo $rows['3XC9']; ?></div></td>
<?php
}
?>
  </tr>
</table>
<table width="1166" border="0" class="style3">
  <tr>
    <td width="1160">&nbsp;</td>
  </tr>
</table>
<p>
  <input name="button" type="submit" class="style4" id="button" onClick="printpage()" value="Print">
  <input name="button2" type="button" class="style4" id="button2" onClick="window.location='adminpage.htm'" value="Admin Page">
  <input name="button3" type="button" class="style4" id="button3" onClick="window.location='adminlogout.php'" value="Logout">
</p>
<p align="left">&nbsp;</p>
<?
// close connection 
mysql_close();

?>

</body>
</html>
