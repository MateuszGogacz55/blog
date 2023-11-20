<?PHP
include('conn.php');
session_start();
$title=$_POST['title'];
$text=$_POST['text'];
$subject=$_POST['subject'];
$id_user=$_SESSION['id_user'];
if($title!="" AND $text!="" AND $subject!="")
{
	$title = mysqli_real_escape_string($link, $_REQUEST['title']);
	$text = mysqli_real_escape_string($link, $_REQUEST['text']);
	$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
	$sql = "INSERT INTO ARTICLES VALUES (null,$id_user,'$title','$text',now(),$subject)";
	if(mysqli_query($link,$sql)){
		echo "Succesful added!";
		header('location:log.php');
	}
	else
	{
		echo "Problems";
	}
}
?>