<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['user'])!="")
{
	header("Location: index.php");
}

$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
$active=$userRow['active'];
$q24score=$userRow['q24'];
if($active==0)
{
		header("Location: verify.php");
}
if($q24score==0)
{
	?>
	You Have To First Complete The Previous Question In Order To View This Question
	<?php
}

$q25score=$userRow['q25'];
else if($q25score==00)
{
	header("Location: q25ns.php");
}
else if($q25score==10)
{
	?>
	your q25 score is 10
	<?php
}

?>
	
