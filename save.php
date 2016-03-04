<?php
include("logincheck.php");
?>

<style type="text/css">
<!--
.style6 {color: #000000; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
-->
</style>

<?
include("db_link.php");
$C1=$_POST['select1']; 
$C2=$_POST['select2']; 
$C3=$_POST['select3']; 
$C4=$_POST['select4']; 
$C5=$_POST['select5']; 
$C6=$_POST['select6']; 
$C7=$_POST['select7']; 
$C8=$_POST['select8']; 
$C9=$_POST['select9']; 
$C10=$_POST['select10']; 
$C11=$_POST['select11']; 
$C12=$_POST['select12']; 
$C13=$_POST['select13']; 
$C14=$_POST['select14']; 
$C15=$_POST['select15']; 
$C16=$_POST['select16'];
$C17=$_POST['select17'];
$C18=$_POST['select18'];
$C19=$_POST['select19'];
$C20=$_POST['select20'];
$C21=$_POST['select21']; 

//if ($C1=$C2 and $C2=$C3 and $C3=$C4) {
//echo "Duplicated Input records";
//echo "<BR>";
//echo "<a href='preference.php'>Retry!</a>";
//} else {

$sql="UPDATE $tbl_name SET 
C1='$C1', 
C2='$C2', 
C3='$C3', 
C4='$C4', 
C5='$C5', 
C6='$C6', 
C7='$C7', 
C8='$C8', 
C9='$C9', 
C10='$C10', 
C11='$C11', 
C12='$C12', 
3XC1='$C13',
3XC2='$C14',
3XC3='$C15',
3XC4='$C16',
3XC5='$C17',
3XC6='$C18',
3XC7='$C19',
3XC8='$C20',
3XC9='$C21'
WHERE id='$id'";
$result=mysql_query($sql);

	if($result){
	echo "Save Successfully";
	echo "<BR>";
	echo "<a href='preference.php'>View result</a>";
	}
	else {
	echo "ERROR";
	}
//}
?>

