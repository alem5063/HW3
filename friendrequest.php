<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>

<?php
	//$userid = $_SESSION['userid'];
	$username = $_POST['username'];
	//$username = $_POST['username'];
	$friend = $_POST['friend'];
	
	echo "<br />Welcome ".$_SESSION['userName']."!";
//$qury = mysql_query(SELECT COUNT(*) AS total WHERE ('userid' = ".$_SESSION['userid']." AND 'friendid' = ".$_GET['friendid'].") OR ('userid = ".$_GET['friendid']." AND 'friendid' = ".$_SESSION['userid']."'));

if ($_POST[Submit]) {


				$sql = "INSERT into relationships values ('".$username."','".$friend."')";
				$qury = mysql_query($sql);
				
					if (!$qury)
	{
		echo "Failed ".mysql_error();
		echo "<br /><a href='index.php'>SignUp</a>";
		echo "<br /><a href='login.php'>SignIn</a>";
	}
	else
	{
		echo "Successful";
		echo "You ($id) have successfully sent a friend request to friend ($id)...";
		//exit();
		echo "<br /><a href='index.php'>SignUp</a>";
		echo "<br /><a href='login.php'>SignIn</a>";
	}
		
	//$_SESSION['userName'] = $username;
	//echo "<p>You ($userid) have successfully sent a friend request to friend ($friendid)...</p>";
	exit();
	}
?>
