<table width="350" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
<body>
  <tr>
  <td>
<?php
ini_set('session.save_path', 'tmp');
session_start();

session_unset(); #start
 session_destroy();  #removes session
 
 if (!$_SESSION ['userName']) {
		echo "Sucessfully logged out!<br />";
		echo "<br />";
		echo "<a href='login.php'>SignIn</a>";
		}
	else {
		echo "Error Occured!!<br />";
	}
exit;
?>
</td></tr> 
</body>
</table>


