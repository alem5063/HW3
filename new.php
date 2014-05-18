<table width="350" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
<body>
  <tr>
  <td>
<?php
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php"); 

	$username = $_POST['username'];
	$date = $_POST['date'];
	//$date=date("Y-m-d H:i:s"); 
	//$timestamp = date('Y-m-d H:i:s', strtotime($date));
	$message = $_POST['message'];
	$id = $_POST['id'];
	
	//$select_query = mysql_query("select * from messages where id = '$id'") or die (mysql_error());
	//$result = mysql_num_rows($select_query);

	$sql = "INSERT INTO messages (username, date, message) VALUES ('$username', '$date', '$message')";
        $result=mysql_query($sql);
		
	//$sql = "INSERT into messages values (".$id.", '".$username."','".$date."','".$message."')";
	//$qury = mysql_query($sql);
	
	# ".$id.",'
	#INSERT into phpdb_ values (
	#1,
	#'selam',
	#'selam');
	
	if ($result[0]>0)
	{
		echo "Successful";
		//$_SESSION['userName'] = $username;
		//echo "<br />Welcome ".$_SESSION['userName']."!";
		echo "<br /><a href='index.php'>SignUp</a>";
		echo "<br /><a href='login.php'>SignIn</a>";
	}
	else
	{
		echo "ERROR - Saves okay";
		//echo "Unable to connect/display messages";
		echo "<br /><a href='index.php'>SignUp</a>";
		echo "<br /><a href='login.php'>SignIn</a>";
	}

?>
</td></tr> 
</body>
</table>
