<?PHP
include('conn.php');
echo "<br/>";
$user=$_POST['user'];
$pass=$_POST['pass'];
$sql="SELECT * FROM USERS WHERE EMAIL_USER='$user'";
$result=mysqli_query($link,$sql);
$rows=mysqli_num_rows($result);
session_start();
if($rows==1){
	$info=mysqli_fetch_array($result);
	$hash_pass=$info["PASS_USER"];
	if(password_verify($pass,$hash_pass)){
		$_SESSION['user']=$user;
		$_SESSION['pass']=$pass;
		$_SESSION['name']=$info['FIRST_USER'];
		$_SESSION['perm']=$info['PERMIS_USER'];
		$_SESSION['id_user']=$info['ID_USER'];
	}
	else
	{
		$_SESSION['wrong']="Złe hasło  ";
	}
}
else
{
	$_SESSION['wrong']="   Zły login";
}
header('location:log.php');
?>