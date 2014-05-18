<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>
<html>
<head>
<title>Profile</title>
<!--<script src="js/jquery-1.10.2.js"></script> -->
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
    $.ajax({
    type: "POST",
    url: "search.php",
    data: dataString,
    cache: false,
    success: function(html)
    {
    $("#result").html(html).show();
    }
    });
}return false;    
});

jQuery("#result").live("click",function(e){ 
    var $clicked = $(e.target);
    var $name = $clicked.find('.name').html();
    var decoded = $("<div/>").html($name).text();
    $('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
    var $clicked = $(e.target);
    if (! $clicked.hasClass("search")){
    jQuery("#result").fadeOut(); 
    }
});
$('#searchid').click(function(){
    jQuery("#result").fadeIn();
});
});
</script>
<style type="text/css">
	body
	
	.content{
		width:750px;
		margin:0 auto;
	}
	#searchid
	{
		width:340px;
		border:solid 1px #000;
		margin-right:20px;
		padding:10px;
		font-size:12px;
	}
	#result
	{
		position:absolute;
		width:318px;
		padding:10px;
		display:none;
		margin: 430px;
		margin-top:-1px;
		border-top:0px;
		overflow:hidden;
		border:1px #ccc solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>
</head>
<body>
<div>
<div style="margin:10px auto; text-align: center;">
<!--<form method="GET" action="do_search.php">-->
<!--<form>
    <input type="text" class="search" id="searchid" placeholder="Search for people" />
  <br />
	<div id="result"></div>
</form>-->
</div>      
</div>
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