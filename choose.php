<?
require_once('./conn.php'); 
if($_GET['action']=="choose"){//for mr yuen...$_GET[]入面=="http://abc.com/?action=chooseok
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Choose Class</title>
</head>

<body>
<form action="?action=chooseok" method="post" name="form" id="form">
  <table width="70%" border="1" cellspacing="0">
    <tr>
      <td colspan="2" bgcolor="#0099FF"><h1>Choose Class Form </h1></td>
    </tr>
    <tr>
      <td>1st Choice </td>
      <td><select name="1" id="1">
	<? 
	$class=A;
	for($i=1;$i<=6;$i++){
	if($_COOKIE['1choice']=="4".$class){
    echo("<option value=\"4".$class."\" selected=\"selected\">4".$class."</option>");
	}
	else{
	    echo("<option value=\"4".$class."\">4".$class."</option>");
	}
	$class++;
	}
	  ?>
      </select>      </td>
    </tr>
    <tr>
      <td>2nd  Choice </td>
      <td><select name="2" id="2">
	<? 
	$class=A;
	for($i=1;$i<=6;$i++){
	if($_COOKIE['2choice']=="4".$class){
    echo("<option value=\"4".$class."\" selected=\"selected\">4".$class."</option>");
	}
	else{
	    echo("<option value=\"4".$class."\">4".$class."</option>");
	}
	$class++;
	}
	  ?>
            </select></td>
    </tr>
    <tr>
      <td>3rd Choice </td>
      <td><select name="3" id="3">
	<? 
	$class=A;
	for($i=1;$i<=6;$i++){
	if($_COOKIE['3choice']=="4".$class){
    echo("<option value=\"4".$class."\" selected=\"selected\">4".$class."</option>");
	}
	else{
	    echo("<option value=\"4".$class."\">4".$class."</option>");
	}
	$class++;
	}
	  ?>
            </select></td>
    </tr>
    <tr>
      <td>4th Choice </td>
      <td><select name="4" id="4">
        <? 
	$class=A;
	for($i=1;$i<=6;$i++){
	if($_COOKIE['4choice']=="4".$class){
    echo("<option value=\"4".$class."\" selected=\"selected\">4".$class."</option>");
	}
	else{
	    echo("<option value=\"4".$class."\">4".$class."</option>");
	}
	$class++;
	}
	  ?>
            </select></td>
    </tr>
    <tr>
      <td>5th Choice </td>
      <td><select name="5" id="5">
        <? 
	$class=A;
	for($i=1;$i<=6;$i++){
	if($_COOKIE['5choice']=="4".$class){
    echo("<option value=\"4".$class."\" selected=\"selected\">4".$class."</option>");
	}
	else{
	    echo("<option value=\"4".$class."\">4".$class."</option>");
	}
	$class++;
	}
	  ?>
            </select></td>
    </tr>
    <tr>
      <td>6th Choice </td>
      <td><select name="6" id="6">
        <? 
	$class=A;
	for($i=1;$i<=6;$i++){
	if($_COOKIE['6choice']=="4".$class){
    echo("<option value=\"4".$class."\" selected=\"selected\">4".$class."</option>");
	}
	else{
	    echo("<option value=\"4".$class."\">4".$class."</option>");
	}
	$class++;
	}
	  ?>
            </select></td>
    </tr>
	    <tr>
      <td<? if($_GET['form']!="change"){echo(" colspan=\"2\" ");}?>><input type="submit" name="Submit2" value="done"></td>
      <? if($_GET['form']=="change"){?><td><a href="students.php">back</a></td>
      <? }?>
    </tr>
  </table>

</form>
</body>
</html>
<?
}
if($_GET['action']=="chooseok"){      //for mr yuen...$_GET[]入面=="http://abc.com/?action=chooseok
for($i=1;$i<=15;$i++){
if($i<=5){
$fc=$_POST['1'];
}
if($i<=9&&$i>=5){
$fc=$_POST['2'];
}
if($i<=12&&$i>=9){
$fc=$_POST['3'];
}
if($i<=14&&$i>=12){
$fc=$_POST['4'];
}
if($i<=15&&$i>=14){
$fc=$_POST['5'];
}
if($i==1){
$lc=$_POST['2'];
}
if($i==2){
$lc=$_POST['3'];
}
if($i==3){
$lc=$_POST['4'];
}
if($i==4){
$lc=$_POST['5'];
}
if($i==5){
$lc=$_POST['6'];
}
if($i==6){
$lc=$_POST['3'];
}
if($i==7){
$lc=$_POST['4'];
}
if($i==8){
$lc=$_POST['5'];
}
if($i==9){
$lc=$_POST['6'];
}
if($i==10){
$lc=$_POST['4'];
}
if($i==11){
$lc=$_POST['5'];
}
if($i==12){
$lc=$_POST['6'];
}
if($i==13){
$lc=$_POST['5'];
}
if($i==14){
$lc=$_POST['6'];
}
if($i==15){
$lc=$_POST['6'];
}
if($fc==$lc){
die("Please dont repeat to choose the same class! Click <a href=\"choose.php?action=choose\">Here</a> go back.");
}
}
for($i=1;$i<=6;$i++){
if($_POST[$i]==""){
echo("Please choose whitch class do you want to get in! Click <a href=\"choose.php\">Here</a> go back.");
exit();
}
}
$sql = "UPDATE `eatcube_sku`.`s_profile` SET `choosed` = '1',
`s_1stchoice` = '".$_POST['1']."',
`s_2ndchoice` = '".$_POST['2']."',
`s_3rdchoice` = '".$_POST['3']."',
`s_4thchoice` = '".$_POST['4']."',
`s_5thchoice` = '".$_POST['5']."',
`s_6thchoice` = '".$_POST['6']."'
 WHERE `s_profile`.`s_name`='".$_COOKIE['name']."'&&`s_class`='".$_COOKIE['class']."'&&`s_classnum`='".$_COOKIE['classnum']."'";
$rs=mysql_query($sql,$conn);
if($rs){
setcookie("choosed",1);
setcookie("1choice",$_POST['1']);
setcookie("2choice",$_POST['2']);
setcookie("3choice",$_POST['3']);
setcookie("4choice",$_POST['4']);
setcookie("5choice",$_POST['5']);
setcookie("6choice",$_POST['6']);
echo("you have chose your class. Please wait for your teacher.Click <a href=\"students.php\">Here</a> to go back.");
}
else{
echo("sorry! Cant Change! You May Try Again later~");
exit();
}
}
?>