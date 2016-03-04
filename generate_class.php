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
$sql="SELECT * FROM $tbl_name ORDER BY rank";
$result=mysql_query($sql);
$Quota=array(1,3,1,2,1,1,1,1,1,1,1,1);
$Reg=array(0,0,0,0,0,0,0,0,0,0,0,0);
while($rows=mysql_fetch_array($result)){
	
	$class=array(
	$rows['rank']
	);
	//$Index=array(A1,A2,A3,B1,B2,B3,C1,C2,D1,D2,E,F);
	

	
	for($a=1; $a<=194; $a++){
			if($class[0]==$a){
					$choice1=$rows['C1'];
					$choice2=$rows['C2'];
					$choice3=$rows['C3'];
					$choice4=$rows['C4'];
					$choice5=$rows['C5'];
					$choice6=$rows['C6'];
					$choice7=$rows['C7'];
					$choice8=$rows['C8'];
					$choice9=$rows['C9'];
					$choice10=$rows['C10'];
					$choice11=$rows['C11'];
					$choice12=$rows['C12'];
					$id=$rows['id'];
					
					Switch ($choice1) {
									
					case 'A1':
						if ($Quota[0]>$Reg[0]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
							$Reg[0]=$Reg[0]+1;
						} else {
							include("Choice2.php");
						}
						break;															
					
					case 'A2':
						if ($Quota[1]>$Reg[1]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
							$Reg[1]=$Reg[1]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'A3':
						if ($Quota[2]>$Reg[2]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
							$Reg[2]=$Reg[2]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'B1':
						if ($Quota[3]>$Reg[3]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
							$Reg[3]=$Reg[3]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'B2':
						if ($Quota[4]>$Reg[4]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
							$Reg[4]=$Reg[4]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'B3':
						if ($Quota[5]>$Reg[5]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
							$Reg[5]=$Reg[5]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'C1':
						if ($Quota[6]>$Reg[6]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
							$Reg[6]=$Reg[6]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'C2':
						if ($Quota[7]>$Reg[7]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
							$Reg[7]=$Reg[7]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					case 'D1':
						if ($Quota[8]>$Reg[8]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
							$Reg[8]=$Reg[8]+1;
						} else {
							include("Choice2.php");
						}
						break;			
					
					case 'D2':
						if ($Quota[9]>$Reg[9]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
							$Reg[9]=$Reg[9]+1;
						} else {
							include("Choice2.php");
						}
						break;				
									
					case 'E':
						if ($Quota[10]>$Reg[10]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
							$Reg[10]=$Reg[10]+1;
						} else {
							include("Choice2.php");
						}
						break;			
					
					case 'F':
						if ($Quota[11]>$Reg[11]) {
							mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
							$Reg[11]=$Reg[11]+1;
						} else {
							include("Choice2.php");
						}
						break;			
						
					default:		
							echo 'Unsuccessful!';
									
					}//end of switch 
			}//end of 1st if 
	}//end of for loop
}//end of while loop
mysql_close();
?>
<body>
<p>&nbsp;</p>
<p>
  <input name="button2" type="button" class="style4" id="button2" onClick="window.location='adminpage.htm'" value="Admin Page">
  <input name="button3" type="button" class="style4" id="button3" onClick="window.location='adminlogout.php'" value="Logout">
</p>
</body>
</html>
