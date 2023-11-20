<?php
include('conn.php');
session_start();
$com=$_POST['comment'];
$id_art=$_POST['id_art_com'];
$id_user=$_SESSION['id_user'];
$new_com=mysqli_real_escape_string($link, $com);
$sql="INSERT INTO COMMENTS VALUES (null,'$id_art','$id_user','$new_com',now())";
if(mysqli_query($link,$sql))
{
	echo "Syccesful ADDED!!";
	header ('location:comment.php?ID_ART='.$id_art.'');
	
	
}
else
	
	{
		echo "Problem";
	}
?>