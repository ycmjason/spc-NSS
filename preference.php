<?php
include("logincheck.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<style type="text/css">
<!--
.1 {			top: 11px; 
			    left: 11px; 
    		    width: 750px; 
				height: 20px;
				border-top: 2px silver solid;
				padding-top: 30px;
				background-image:url(pic/pic9.gif);
				background-repeat:no-repeat;
				font-family:Arial, Helvetica, sans-serif;
}
.style6 {color: #000000; font-size: 12px; font-family: Arial, Helvetica, sans-serif; }
-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Preference Input Form</title>
</head>

<body>
<p><strong>Student Information</strong></p>
<table width="442" border="1">
  <tr>
    <td width="108">Class:</td>
    <td>
	
<?php 
include("db_link.php");
$sql="SELECT * FROM $tbl_name where id='$ses_id'" ;
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
echo $rows['cls_name'];
?>    </td>
  </tr>
  <tr>
    <td>No:</td>
    <td><? echo $rows['no']; ?></td>
  </tr>
  <tr>
    <td height="22">Name:</td>
    <td><? echo $rows['ename']; ?>    </td>
  </tr>
</table>
<hr>
<p><strong>Part I: Class Preference</strong></p>
<p>Instruction: Please input 1-12 (1 being the first choice) in the following boxes to show your preference in the coming Form 4 classes.</p>
<form name="form1" method="post" action="save.php">
<table width="442" border="1">
  <tr>
    <td><div align="center"></div>      <div align="center"><strong>Elective Subject </strong></div></td>
    <td width="76"><div align="center"><strong>Preference</strong></div></td>
  </tr>
  <tr>
    <td><div align="center"></div> <div align="center">Choice 1 </div></td>
    <td><div align="center">
	<? 	$c1=$rows['C1'];
		$c2=$rows['C2'];
		$c3=$rows['C3'];
		$c4=$rows['C4'];
		$c5=$rows['C5'];
		$c6=$rows['C6'];
		$c7=$rows['C7'];
		$c8=$rows['C8'];
		$c9=$rows['C9'];
		$c10=$rows['C10'];
		$c11=$rows['C11'];
		$c12=$rows['C12'];
		$xc1=$rows['3XC1'];
		$xc2=$rows['3XC2'];
		$xc3=$rows['3XC3'];
		$xc4=$rows['3XC4'];
		$xc5=$rows['3XC5'];
		$xc6=$rows['3XC6'];
		$xc7=$rows['3XC7'];
		$xc8=$rows['3XC8'];
		$xc9=$rows['3XC9'];
	    
	 ?>
      <select name="select1" id="select1" >
        <option value="<? echo $c1; ?>" ><? echo $c1; ?></option>
		<option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 2</div></td>
    <td><div align="center">
      <select name="select2" id="select2">
	    <option value="<? echo $c2; ?>" ><? echo $c2; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 3 </div></td>
    <td><div align="center">
      <select name="select3" id="select3">
	    <option value="<? echo $c3; ?>" ><? echo $c3; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 4</div>      </td>
    <td><div align="center">
      <select name="select4" id="select4">
	    <option value="<? echo $c4; ?>" ><? echo $c4; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 5 </div></td>
    <td><div align="center">
      <select name="select5" id="select5">
	    <option value="<? echo $c5; ?>" ><? echo $c5; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 6 </div></td>
    <td><div align="center">
      <select name="select6" id="select6">
	    <option value="<? echo $c6; ?>" ><? echo $c6; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div>      <div align="center">Choice 7 </div></td>
    <td><div align="center">
      <select name="select7" id="select7">
	    <option value="<? echo $c7; ?>" ><? echo $c7; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 8 </div></td>
    <td><div align="center">
      <select name="select8" id="select8">
	    <option value="<? echo $c8; ?>" ><? echo $c8; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div>      <div align="center">Choice 9 </div></td>
    <td><div align="center">
      <select name="select9" id="select9">
	    <option value="<? echo $c9; ?>" ><? echo $c9; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Choice 10 </div></td>
    <td><div align="center">
      <select name="select10" id="select10">
	    <option value="<? echo $c10; ?>" ><? echo $c10; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div>      <div align="center">Choice 11 </div></td>
    <td><div align="center">
      <select name="select11" id="select11">
	    <option value="<? echo $c11; ?>" ><? echo $c11; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center"></div>      <div align="center">Choice 12 </div></td>
    <td><div align="center">
      <select name="select12" id="select12">
	    <option value="<? echo $c12; ?>" ><? echo $c12; ?></option>
        <option value="A1">A1</option>
        <option value="A2">A2</option>
        <option value="A3">A3</option>
        <option value="B1">B1</option>
        <option value="B2">B2</option>
        <option value="B3">B3 </option>
        <option value="C1">C1</option>
        <option value="C2">C2</option>
        <option value="D1">D1</option>
        <option value="D2">D2</option>
        <option value="E">E</option>
        <option value="F">F</option>
      </select>
</div></td>
  </tr>
</table>

<p>&nbsp;</p>
<hr>
<p><strong>Part II:  Preference on the 3rd elective subject </strong></p>
<p>Instruction: Please input 1-9 (1 being the first choice) in the following boxes to show your preference about the 3rd elective subject. You must AT LEAST input your first 6 choices. </p>
<table width="419" border="1">
  <tr>
    <td width="291"><div align="center"><strong>3rd elective subject </strong></div></td>
    <td width="112"><div align="center"><strong>Preference</strong></div></td>
  </tr>
  <tr>
    <td>Economics</td>
    <td><div align="center">
      <select name="select13" id="select13">
	    <option value="<? echo $xc1; ?>" ><? echo $xc1; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
</div></td>
  </tr>
  <tr>
    <td>Geography</td>
    <td><div align="center">
      <select name="select14" id="select14">
	     <option value="<? echo $xc2; ?>" ><? echo $xc2; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>History</td>
    <td><div align="center">
      <select name="select15" id="select15">
	    <option value="<? echo $xc3; ?>" ><? echo $xc3; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>Biology</td>
    <td><div align="center">
      <select name="select16" id="select16">
	    <option value="<? echo $xc4; ?>" ><? echo $xc4; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>Chinese Literature </td>
    <td><div align="center">
      <select name="select17" id="select17">
	   <option value="<? echo $xc5; ?>" ><? echo $xc5; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>Information and Communication Technology </td>
    <td><div align="center">
      <select name="select18" id="select18">
	   <option value="<? echo $xc6; ?>" ><? echo $xc6; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>Music (HKDSE)</td>
    <td><div align="center">
      <select name="select19" id="select19">
	   <option value="<? echo $xc7; ?>" ><? echo $xc7; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>Physical Education (HKDSE)</td>
    <td><div align="center">
      <select name="select20" id="select20">
 	    <option value="<? echo $xc8; ?>" ><? echo $xc8; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
    </div></td>
  </tr>
  <tr>
    <td>Visual Arts (HKDSE) </td>
    <td><div align="center">
      <select name="select21" id="select21">
	    <option value="<? echo $xc9; ?>" ><? echo $xc9; ?></option>
        <option value="ECON">ECON</option>
        <option value="GEOG">GEOG</option>
        <option value="HIST">HIST</option>
        <option value="BIOL">BIOL</option>
        <option value="CLIT">CLIT</option>
        <option value="ICT">ICT</option>
        <option value="MUS">MUS</option>
        <option value="PE">PE</option>
        <option value="VA">VA</option>
      </select>
      <input name="id" type="hidden" id="id" value="<? echo $rows['id']; ?>" size="10">
</div></td>
  </tr>
</table>
<p>&nbsp;</p>
<hr>
<p><strong>Part III: Submit your choice</strong></p>
<p>Instruction: Please check your inputs and then click the SUBMIT button. You are allowed to modify your choice before the submission deadline.</p>
<p>
  <input name="Submit" type="submit" class="style6" onclick="" value="SUBMIT" >
  <input name="button2" type="button" class="style6" onclick="window.location='logout.php'" value="LOGOUT">
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

</form>
<?
// close connection 
mysql_close();

?>


</body>
</html>
