<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>
<table width="350" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <th><a href='signin.php'>Back to Profile</a> | <a href='friendsmessages.php'>View Friends Messages</th>
    <th align="left">&nbsp;</th>
	</tr>
	</table>
	<br>
<?php
$username = $_POST['username'];
echo "<br />This is the list of ".$_SESSION['userName']." friends:<br />";
?>
<!--<p>This is the list of ($username) Friends List:</p><br />-->
<table width="350" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="left" cellpadding="0" cellspacing="0">
  <tr>
    <!--<th><a href='signin.php'>Back to Profile</a></th>-->
    <th align="left">&nbsp;</th>
	</tr>
    <tr>
        <th>Friends</th>
        <!--<th>Username</th>-->
        <!--<th>password</th>-->
    </tr>
<?php
//We get the IDs, usernames and emails of users
$qury = mysql_query('select friend from relationships');
while($result = mysql_fetch_array($qury))

{
?>
        <tr>
        <td align="center"><?php echo $result['friend']; ?></td>
    </tr>
<?php
}
?>
</table>