<?php session_start(); 
$urlself=$PHP_SELF;

if (!session_is_registered("ses_id")) { ?>
 <script language="javascript">
  alert("Please login properly first!");
   history.go(-1);
 </script>
 <?php
exit;  
}

?>
