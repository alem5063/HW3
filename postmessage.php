
<?php
//ini_set('session.save_path', 'tmp');
//session_start();
include_once("db.php")
?>
<html>
<head>
<title> Messages </title>
</head>
<body>
<center>
<form method="post" action="new.php">
<table width="350" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
<tr>
  <td colspan="2" align="center"><p><strong>Post a New Message</strong></p></td>
  </tr>
<tr>
  <th><td><a href='signin.php' style="font-weight: 700">Back to Profile</a></td></th>
  </tr>
<tr><td align="right"><label for="username">Username:</label></td>
<TD>

<?php $result = mysql_query("SELECT username FROM users"); ?>
<select name="username">";
<?php
while ($row = mysql_fetch_assoc($result))
	{
	echo "<option value = '".$row[username]."'>".$row[username]."</option>";
	}
?>
</select>  
</TD></tr>
<tr><td align="right"><label for="date">Date:</label></td>
<td><input type="date" name="date"></td></tr>
<tr><td align="right"><label for="message">Message:</label></td>
<td><input type="message" name="message"></td></tr>
<tr><td colspan="2" style="text-align: center"><br />
  <input type="submit" name="submit" value="Submit Message"></td>
</tr>
</table>
</form>
</center>
</body>
</html>