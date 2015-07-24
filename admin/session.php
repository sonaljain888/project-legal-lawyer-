<?php
include('db.php');
session_start();
if (!isset($_SESSION['id']))
{
header('Location: index.php');
}

?>
<?php
//mag show sang information sang user nga nag login
$member_id=$_SESSION['id'];

$result=mysql_query("select * from admin where id='$member_id'")or die(mysql_error());
$row=mysql_fetch_array($result);
$FirstName=$row['username'];



//ss
?>
