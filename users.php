<head>
    <style type="text/css">
        .style1
        {
            text-align: center;
        }
    </style>
</head>
<?php 
ini_set('session.save_path', 'tmp');
session_start();
include_once("db.php") 
?>
<table width="500" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th>This is the list of members:</th>
  </tr>
  </table>
<table width="500" border="0" style="background-color:#F2F2F2; border:#999 1px solid;" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th class="style1"><a href='addfriend.php'>Add friends</a>&nbsp; |&nbsp;&nbsp; <a href='signin.php'>Back to Profile</a></th>
    <th align="left">&nbsp;</th>
	</tr>
	<th colspan="2"><table align="center">
        <tr align="center">
          <th width="100" align="right">Id</th>
          <th width="200" align="center">Username</th>
          <!--<th>password</th>-->
        </tr>
        <?php
//We get the IDs, usernames and emails of users
$qury = mysql_query('select id, username from users');
while($result = mysql_fetch_array($qury))

{
?>
        <tr align="center">
          <td align="right"><?php echo $result['id']; ?></td>
          <td class="center"><?php echo htmlentities($result['username'], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <?php
}
?>
    </table></th>
    <!--<td width="124"><a href='index.php'>SignUp</a></td>-->
  </tr>
  <tr>
    <th align="left" colspan="2">&nbsp;</th>
    <td>&nbsp;</td>
  </tr>
</table>