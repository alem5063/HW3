<?php
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php")
?>

<body>
<form method="post" action="friendrequest.php" >
  <table width="405" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th><a href='signin.php'>Profile</a> | <a href='users.php'>Users List</a><br /></th>
    <th align="left">&nbsp;</th>
	</tr>
	</table>
<table width="405" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
<th align="left">&nbsp;</th>
<tr>
<td><label for="friend">Friend:</label></td>
<TD>

<?php 
$username = $_POST['username'];
//echo "<br />Welcome ".$_SESSION['userName']."!";
$result = mysql_query("SELECT username FROM users"); ?>
<select name="friend">";
<?php
while ($row = mysql_fetch_assoc($result))
	{
	echo "<option value = '".$row[username]."'>".$row[username]."</option>";
	}
?>
</select>  
</TD></tr>
<tr>
<tr><td><label for="username">Username:</label></td>
<td><input type="text" name = "username" id = "username" value="<?php echo $_SESSION['userName'] ?>">
</td></tr>
<td>     
<input type="submit" name="Submit" value="Add a Friend" />
</td>
</tr>
</table>
</form>
</body>
