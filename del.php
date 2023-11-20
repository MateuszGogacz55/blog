<?PHP
include('conn.php');
$article=$_GET['ID_ART'];
$sql = "DELETE FROM ARTICLES WHERE ID_ART=$article"; 
if(mysqli_query($link, $sql)){ 
    echo "Record was deleted successfully."; 
	header('location:index.php');
}  
else{ 
    echo "Problems";
}
?>