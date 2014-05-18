<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>
<html>
<head>
<title>Profile</title>
</head>
<body>

<table width="700" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="left" cellpadding="0" cellspacing="0">
   <th colspan="2">
<tr><td colspan="2" align="center"><strong>View Messages</strong></td></tr>
<tr><td colspan="2" align="center">&nbsp;</td></tr>
        <tr align="center">
          <th width="200" align="center">Username</th>
          <th width="250" align="center">Message</th>
          <!--<th>password</th>-->
        </tr>
<?php

	$username = $_POST['usr'];
	$password = $_POST['pswd'];
	
	$sql = "SELECT count(*) FROM users WHERE(
	username='".$username."' and password='".$password."')";
	
	$qury = mysql_query($sql);
	
	$result =mysql_fetch_array($qury);
	
	//$qury = mysql_query('select username, message from messages');
//while($result = mysql_fetch_array($qury))

	
	if ($result[0]>0)
		{
			echo "<b>Sucessful Login!</b>";
			$_SESSION['userName'] = $username;
			echo "<b><br />Welcome ".$_SESSION['userName']."!</b><br />";
			echo "<br />";
			//echo "|&nbsp;<a href='index.php'>SignUp</a>&nbsp;";
			echo "|&nbsp;<a href='users.php'>Add/View List of all users</a>&nbsp;";
			echo "|&nbsp;<a href='friends.php'>List of Friends</a>&nbsp;";
			echo "|&nbsp;<a href='friendsmessages.php'>View Friends Message</a>&nbsp;";
			echo "|&nbsp;<a href='postmessage.php'>Post new message</a>&nbsp;";			
			//echo "|&nbsp;<a href='login.php'>SignIn</a>&nbsp;";
			echo "|&nbsp;<a href='logout.php'>Logout</a>&nbsp;<br />";
			
  

		}
	else
		{
			//echo "Sucessful Login!";
			//$_SESSION['userName'] = $username;
			//echo "<br />Home";
			//echo "<br />";
			echo "<br />";
			//echo "|&nbsp;<a href='index.php'>SignUp</a>&nbsp;";
			echo "|&nbsp;<a href='users.php'>Add/ View List of all users</a>&nbsp;";
			echo "|&nbsp;<a href='friends.php'>List of Friends</a>&nbsp;";
			echo "|&nbsp;<a href='friendsmessages.php'>View Friends Message</a>&nbsp;";
			echo "|&nbsp;<a href='postmessage.php'>Post new message</a>&nbsp;";			
			//echo "|&nbsp;<a href='login.php'>SignIn</a>&nbsp;";
			echo "|&nbsp;<a href='logout.php'>Logout</a>&nbsp;<br />";
		}
		
?>
<br>
<?php
$select_query = mysql_query("SELECT * FROM messages WHERE id = '$id'") or die (mysql_error());
$result = mysql_num_rows($select_query);

?>
<?php
	
//We get the IDs, usernames and emails of users
$qury = mysql_query("select username, message from messages");
while($result = mysql_fetch_array($qury))
{
?>
		<tr>
		 <td align="center"><?php echo htmlentities($result['username'], ENT_QUOTES, 'UTF-8'); ?></td>
         <td align="center"><?php echo $result['message']; ?></td>
    </tr>
<?php
}
?>
</table>