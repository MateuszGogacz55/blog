<?PHP
include('conn.php');
$user=$_POST['user'];
$pass=$_POST['pass'];
$first=$_POST['first'];
$last=$_POST['last'];
$new_pass=password_hash($pass,PASSWORD_DEFAULT);
if($user!="" AND $pass!="" AND $first!="" AND $last!=""){
	$sql="SELECT * FROM USERS WHERE EMAIL_USER='$user'";
	$result=mysqli_query($link,$sql);
	$rows=mysqli_num_rows($result);
	session_start();
	if($rows==1){
		$_SESSION['already']="This user is already exist!";
		header('location:log.php');
	}
	else
	{
		$user = mysqli_real_escape_string($link, $_REQUEST['user']);
		$pass = mysqli_real_escape_string($link, $_REQUEST['new_pass']);
		$first = mysqli_real_escape_string($link, $_REQUEST['first']);
		$last = mysqli_real_escape_string($link, $_REQUEST['last']);
		$sql = "INSERT INTO USERS (ID_USER,EMAIL_USER,PASS_USER,PERMIS_USER,FIRST_USER,LAST_USER) VALUES (null,'$user','$new_pass','0','$first','$last')";
		if(mysqli_query($link,$sql)){
			echo "Succesful added!";
			header('location:log.php');
		}
		else
		{
			echo "Problems";
		}
	}
	
}
else
{
	$_SESSION['wrong']="Wrong data!";
	header('location:register.php');
}


?>