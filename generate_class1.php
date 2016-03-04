s<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
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
$Quota=array(1,1,1,1,1,1,1,1,1,1,1,1);
$Reg=array(0,0,0,0,0,0,0,0,0,0,0,0);
while($rows=mysql_fetch_array($result)){
	
	$class=array(
	$rows['rank']
	);
		
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
					echo $choice1;
					echo '<br>';
				    if ($choice1=='A1') {
									if ($Quota[0]>$Reg[0])
									mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
									$Reg[0]=$Reg[0]+1; 
									echo $Reg[0];
																									
						//for($s=1; $s<=12; $s++){
						//if ($choice1=='A'.$s) {
						//	if ($Quota[$s-1]>$Reg[$s-1])
						//	mysql_query("UPDATE $tbl_name SET a_class = 'A'.$s where id='$id'");
						//	$Reg[$s-1]=$Reg[$s-1]+1; 
							
						//} else if ($choice1=='B'.$s) {
						//	if ($Quota[$s-1+3]>$Reg[$s-1+3])
						//	mysql_query("UPDATE $tbl_name SET a_class = 'B'.$s where id='$id'");
						//	$Reg[$s-1+3]=$Reg[$s-1+3]+1; 
							
						//} else if ($choice1=='C'.$s) {
						//	if ($Quota[$s-1+6]>$Reg[$s-1+6])
						//	mysql_query("UPDATE $tbl_name SET a_class = 'C'.$s where id='$id'");
						//	$Reg[$s-1+6]=$Reg[$s-1+6]+1; 
							
						//} else if ($choice1=='D'.$s) {
						//	if ($Quota[$s-1+8]>$Reg[$s-1+8])
						//	mysql_query("UPDATE $tbl_name SET a_class = 'D'.$s where id='$id'");
						//	$Reg[$s-1+8]=$Reg[$s-1+8]+1; 
								
						//} else if ($choice1=='E') {
						//	if ($Quota[$s-1+10]>$Reg[$s-1+10])
						//	mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
						//	$Reg[$s-1+10]=$Reg[$s-1+10]+1;
						
						//} else if ($choice1=='F') {
						//	if ($Quota[$s-1+11]>$Reg[$s-1+11])
						//	mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
						//	$Reg[$s-1+11]=$Reg[$s-1+11]+1;
							
						
									} else if ($choice1=='A2') {
										if ($Quota[1]>$Reg[1])
										mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
										$Reg[1]=$Reg[1]+1;
										echo $Reg[1];										
						
									} else if ($choice1=='A3') {
										if ($Quota[2]>$Reg[2])
										mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
										$Reg[2]=$Reg[2]+1;
										echo $Reg[2];
						
									} else if ($choice1=='B1') {
										if ($Quota[3]>$Reg[3])
										mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
										$Reg[3]=$Reg[3]+1;
										echo $Reg[3];
					
									} else if ($choice1=='B2') {
										if ($Quota[4]>$Reg[4])
										mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
										$Reg[4]=$Reg[4]+1;
										echo $Reg[4];
						
									} else if ($choice1=='B3') {
										if ($Quota[5]>$Reg[5])
										mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
										$Reg[5]=$Reg[5]+1;
										echo $Reg[5];
						
									} else if ($choice1=='C1') {
										if ($Quota[6]>$Reg[6])
										mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
										$Reg[6]=$Reg[6]+1;
										echo $Reg[6];
				
									} else if ($choice1=='C2') {
										if ($Quota[7]>$Reg[7])
										mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
										$Reg[7]=$Reg[7]+1;
										echo $Reg[7];							
										
									} else if ($choice1=='D1') {
										if ($Quota[8]>$Reg[8])
										mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
										$Reg[8]=$Reg[8]+1;
										echo $Reg[8];					
										
									} else if ($choice1=='D2') {
										if ($Quota[9]>$Reg[9])
										mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
										$Reg[9]=$Reg[9]+1;
										echo $Reg[9];					
						
									} else if ($choice1=='E') {
										if ($Quota[10]>$Reg[10])
										mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
										$Reg[10]=$Reg[10]+1;
										echo $Reg[10];					
						
									} else if ($choice1=='F') {
										if ($Quota[11]>$Reg[11])
										mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
										$Reg[11]=$Reg[11]+1;
										echo $Reg[11];					
								
					} else if 
									($choice2=='A1') {
										if ($Quota[0]>$Reg[0])
										mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
										$Reg[0]=$Reg[0]+1; 
							
									
									} else if ($choice2=='A2') {
										if ($Quota[1]>$Reg[1])
										mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
										$Reg[1]=$Reg[1]+1;
						
									} else if ($choice2=='A3') {
										if ($Quota[2]>$Reg[2])
										mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
										$Reg[2]=$Reg[2]+1;
						
									} else if ($choice2=='B1') {
										if ($Quota[3]>$Reg[3])
										mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
										$Reg[3]=$Reg[3]+1;
					
									} else if ($choice2=='B2') {
										if ($Quota[4]>$Reg[4])
										mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
										$Reg[4]=$Reg[4]+1;
								
									} else if ($choice2=='B3') {
										if ($Quota[5]>$Reg[5])
										mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
										$Reg[5]=$Reg[5]+1;
						
									} else if ($choice2=='C1') {
										if ($Quota[6]>$Reg[6])
										mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
										$Reg[6]=$Reg[6]+1;
						
									} else if ($choice2=='C2') {
										if ($Quota[7]>$Reg[7])
										mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
										$Reg[7]=$Reg[7]+1;
						
									} else if ($choice2=='D1') {
										if ($Quota[8]>$Reg[8])
										mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
										$Reg[8]=$Reg[8]+1;
					
									} else if ($choice2=='D2') {
										if ($Quota[9]>$Reg[9])
										mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
										$Reg[9]=$Reg[9]+1;
						
									} else if ($choice2=='E') {
										if ($Quota[10]>$Reg[10])
										mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
										$Reg[10]=$Reg[10]+1;
						
									} else if ($choice2=='F') {
										if ($Quota[11]>$Reg[11])
										mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
										$Reg[11]=$Reg[11]+1;
					} else if 
									($choice3=='A1') {
										if ($Quota[0]>$Reg[0])
										mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
										$Reg[0]=$Reg[0]+1; 
							
									
									} else if ($choice3=='A2') {
										if ($Quota[1]>$Reg[1])
										mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
										$Reg[1]=$Reg[1]+1;
						
									} else if ($choice3=='A3') {
										if ($Quota[2]>$Reg[2])
										mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
										$Reg[2]=$Reg[2]+1;
						
									} else if ($choice3=='B1') {
										if ($Quota[3]>$Reg[3])
										mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
										$Reg[3]=$Reg[3]+1;
					
									} else if ($choice3=='B2') {
										if ($Quota[4]>$Reg[4])
										mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
										$Reg[4]=$Reg[4]+1;
								
									} else if ($choice3=='B3') {
										if ($Quota[5]>$Reg[5])
										mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
										$Reg[5]=$Reg[5]+1;
						
									} else if ($choice3=='C1') {
										if ($Quota[6]>$Reg[6])
										mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
										$Reg[6]=$Reg[6]+1;
						
									} else if ($choice3=='C2') {
										if ($Quota[7]>$Reg[7])
										mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
										$Reg[7]=$Reg[7]+1;
						
									} else if ($choice3=='D1') {
										if ($Quota[8]>$Reg[8])
										mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
										$Reg[8]=$Reg[8]+1;
					
									} else if ($choice3=='D2') {
										if ($Quota[9]>$Reg[9])
										mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
										$Reg[9]=$Reg[9]+1;
						
									} else if ($choice3=='E') {
										if ($Quota[10]>$Reg[10])
										mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
										$Reg[10]=$Reg[10]+1;
						
									} else if ($choice3=='F') {
										if ($Quota[11]>$Reg[11])
										mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
										$Reg[11]=$Reg[11]+1;								
					} else if 
									($choice4=='A1') {
										if ($Quota[0]>$Reg[0])
										mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
										$Reg[0]=$Reg[0]+1; 
							
									
									} else if ($choice4=='A2') {
										if ($Quota[1]>$Reg[1])
										mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
										$Reg[1]=$Reg[1]+1;
						
									} else if ($choice4=='A3') {
										if ($Quota[2]>$Reg[2])
										mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
										$Reg[2]=$Reg[2]+1;
						
									} else if ($choice4=='B1') {
										if ($Quota[3]>$Reg[3])
										mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
										$Reg[3]=$Reg[3]+1;
					
									} else if ($choice4=='B2') {
										if ($Quota[4]>$Reg[4])
										mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
										$Reg[4]=$Reg[4]+1;
								
									} else if ($choice4=='B3') {
										if ($Quota[5]>$Reg[5])
										mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
										$Reg[5]=$Reg[5]+1;
						
									} else if ($choice4=='C1') {
										if ($Quota[6]>$Reg[6])
										mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
										$Reg[6]=$Reg[6]+1;
						
									} else if ($choice4=='C2') {
										if ($Quota[7]>$Reg[7])
										mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
										$Reg[7]=$Reg[7]+1;
						
									} else if ($choice4=='D1') {
										if ($Quota[8]>$Reg[8])
										mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
										$Reg[8]=$Reg[8]+1;
					
									} else if ($choice4=='D2') {
										if ($Quota[9]>$Reg[9])
										mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
										$Reg[9]=$Reg[9]+1;
						
									} else if ($choice4=='E') {
										if ($Quota[10]>$Reg[10])
										mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
										$Reg[10]=$Reg[10]+1;
						
									} else if ($choice4=='F') {
										if ($Quota[11]>$Reg[11])
										mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
										$Reg[11]=$Reg[11]+1;													
					
					} else if 
									($choice5=='A1') {
										if ($Quota[0]>$Reg[0])
										mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
										$Reg[0]=$Reg[0]+1; 
							
									
									} else if ($choice5=='A2') {
										if ($Quota[1]>$Reg[1])
										mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
										$Reg[1]=$Reg[1]+1;
						
									} else if ($choice5=='A3') {
										if ($Quota[2]>$Reg[2])
										mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
										$Reg[2]=$Reg[2]+1;
						
									} else if ($choice5=='B1') {
										if ($Quota[3]>$Reg[3])
										mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
										$Reg[3]=$Reg[3]+1;
					
									} else if ($choice5=='B2') {
										if ($Quota[4]>$Reg[4])
										mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
										$Reg[4]=$Reg[4]+1;
								
									} else if ($choice5=='B3') {
										if ($Quota[5]>$Reg[5])
										mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
										$Reg[5]=$Reg[5]+1;
						
									} else if ($choice5=='C1') {
										if ($Quota[6]>$Reg[6])
										mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
										$Reg[6]=$Reg[6]+1;
						
									} else if ($choice5=='C2') {
										if ($Quota[7]>$Reg[7])
										mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
										$Reg[7]=$Reg[7]+1;
						
									} else if ($choice5=='D1') {
										if ($Quota[8]>$Reg[8])
										mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
										$Reg[8]=$Reg[8]+1;
					
									} else if ($choice5=='D2') {
										if ($Quota[9]>$Reg[9])
										mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
										$Reg[9]=$Reg[9]+1;
						
									} else if ($choice5=='E') {
										if ($Quota[10]>$Reg[10])
										mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
										$Reg[10]=$Reg[10]+1;
						
									} else if ($choice5=='F') {
										if ($Quota[11]>$Reg[11])
										mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
										$Reg[11]=$Reg[11]+1;								
					
					
					
					
					
					
					
					
					
					
					}	
			
			}
	}
}
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
