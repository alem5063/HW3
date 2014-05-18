<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>
<table width="500" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="left" cellpadding="0" cellspacing="0">
<th><a href='signin.php'>Back to Profile</a></th>
</table>
<br>
<table width="500" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="left" cellpadding="0" cellspacing="0">

<?php
$username = $_POST['username'];
echo "<br />This is the list of ".$_SESSION['userName']." friends messages:<br />";
?>

<?php
//$select_query1 = mysql_query("select username, message from messages ");
//$select_query2 = mysql_query("select username, friend from relationships where username ='messages.username' ");
//$qury = mysql_query("SELECT distinct friend, message FROM messages, relationships WHERE relationships.friend = messages.username AND relationships.username = message.".$_SESSION['userName']."") or die (mysql_error());
$qury = mysql_query("SELECT distinct friend, message FROM messages, relationships WHERE relationships.friend = messages.username") or die (mysql_error());
while($result = mysql_fetch_array($qury))

{
?>

		<tr>
			<tr>
		 <td class="left"><?php echo $result['friend']; ?></td>
         <td class="center"><?php echo $result['message']; ?></td>
    </tr>
<?php
}
?>
</table>