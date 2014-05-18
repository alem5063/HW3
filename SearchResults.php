<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php");
//include_once("searchajax2.php")
?>
<?php
if($_POST)
{
$q=$_POST['search'];
$sql_res=mysql_query("select id,username,name from users where username like '%$q%' or name like '%$q%' order by id LIMIT 5");
//$sql_res=mysql_query("select id,username,message from messages where username like '%$q%' or message like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$username=$row['username'];
$name=$row['name'];
$b_username='<strong>'.$q.'</strong>';
$b_name='<strong>'.$q.'</strong>';
$final_username = str_ireplace($q, $b_username, $username);
$final_name = str_ireplace($q, $b_name, $name);
?>

<div class="show" align="left">
<span class="name"><?php echo $final_username; ?></span>&nbsp;<br/><?php echo $final_name; ?><br/>
</div>
<?php
//Koala.jpg<img src="" style="width:50px; height:50px; float:left; margin-right:6px;" />
}
}
?>