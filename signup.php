<?php include_once("db.php") ?>
<body>
<table width="350" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
<tr><td><!--<label for="friend">Create an account</label>--></td>
<td>
<?php

	$username = $_POST['usr'];
	$password = $_POST['pswd'];
	$id = $_POST['id'];
	//$sql = "INSERT into users values (".$id.",'".$username."','".$password."')";
	$sql = "INSERT into users values ('', '".$username."','".$password."')";
	$qury = mysql_query($sql);
	
	#INSERT into phpdb_ values (
	#1,
	#'selam',
	#'selam');

	
	if (!$qury)
	{
		echo "Failed ".mysql_error();
		echo "<br /><a href='index.php'>SignUp</a>";
		echo "<br /><a href='login.php'>SignIn</a>";
	}
	else
	{
		echo "Successfully created an account! Please Signin!";
		echo "<br />";
		echo "<br /><a href='login.php'>SignIn</a>";
	}

?>
</td>
</tr>
</table>
</body>