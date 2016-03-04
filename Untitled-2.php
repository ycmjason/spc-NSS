<html>
<head>
<title>welcome to FON!!!</title>
<style type="text/css">
<!--
body {
			margin-top:20px;
			margin-left:50px;
}
.1 {			top: 11px; 
			    left: 11px; 
    		    width: 750px; 
				height: 20px;
				border-top: 2px silver solid;
				padding-top: 30px;
				background-image:url(../pic/pic9.gif);
				background-repeat:no-repeat;
}
.style11 {font-family: Arial, Helvetica, sans-serif; color: #000000; }
.style12 {color: #FFFFFF}
.style15 {font-size: 16px}
-->
</style>
</head>
<body>

<P class="style15">
<?php
$host="localhost"; // Host name 
$username="footballon_root"; // Mysql username 
$password="vve6h76k"; // Mysql password 
$db_name="footballon_rate"; // Database name 
$tbl_name="profit2"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);


?>
</p>
<table width="218" border="1" cellpadding="1" cellspacing="1" bordercolor="#CCCCCC" bgcolor="#FFFFFF">
<tr>
<td width="91" bordercolor="#CCCCCC" bgcolor="#33CCFF" class="style11"><div align="center" class="style12">?O¡±Q</div></td>
</tr>

<?php
while($rows=mysql_fetch_array($result)){
?>
<tr align="center" class="style11">
<td height="25" bordercolor="#CCCCCC"><? echo $rows['profit']; ?></td>
<td width="114"><a href=""></a>
  <form action="bprofit1.php?id=<? echo $rows['id']; ?>" method="post" name="form1" id="form1" align="left">
    <label>
      <input type="submit" name="Submit" value="&#20462;&#25913;" />
      </label>
  </form></td>
</tr>
<?php
}
?>
  <?php
mysql_close();
?>
</table>
</td>
</tr>
</table>
<form name="form2" method="" action="dataentry.html">
  <input type="submit" name="Submit2" value="?e?@-?">
</form>
<p>&nbsp;</p>
</body>
</html>
