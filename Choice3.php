<?php
Switch ($choice3) {
	
	Case 'A1':

			if ($Quota[0]>$Reg[0]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'A1' where id='$id'");
				$Reg[0]=$Reg[0]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'A2':

			if ($Quota[1]>$Reg[1]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'A2' where id='$id'");
				$Reg[1]=$Reg[1]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'A3':

			if ($Quota[2]>$Reg[2]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'A3' where id='$id'");
				$Reg[2]=$Reg[2]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'B1':

			if ($Quota[3]>$Reg[3]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'B1' where id='$id'");
				$Reg[3]=$Reg[3]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'B2':

			if ($Quota[4]>$Reg[4]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'B2' where id='$id'");
				$Reg[4]=$Reg[4]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'B3':

			if ($Quota[5]>$Reg[5]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'B3' where id='$id'");
				$Reg[5]=$Reg[5]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'C1':

			if ($Quota[6]>$Reg[6]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'C1' where id='$id'");
				$Reg[6]=$Reg[6]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'C2':

			if ($Quota[7]>$Reg[7]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'C2' where id='$id'");
				$Reg[7]=$Reg[7]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'D1':

			if ($Quota[8]>$Reg[8]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'D1' where id='$id'");
				$Reg[8]=$Reg[8]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'D2':

			if ($Quota[9]>$Reg[9]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'D2' where id='$id'");
				$Reg[9]=$Reg[9]+1;
			} else {
				include("Choice3.php");
			}
			break;		

	Case 'E':

			if ($Quota[10]>$Reg[10]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'E' where id='$id'");
				$Reg[10]=$Reg[10]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	Case 'F':

			if ($Quota[11]>$Reg[11]) {
				mysql_query("UPDATE $tbl_name SET a_class = 'F' where id='$id'");
				$Reg[11]=$Reg[11]+1;
			} else {
				include("Choice4.php");
			}
			break;		

	default:
			echo 'Unsuccessful!';
}
?>
