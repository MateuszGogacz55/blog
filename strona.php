<!DOCTYPE HTML>
<html>
<head>
	<style>
		#header{
			width:100em;
			height:100px;
			position:absolute;
			top:0;
			left:0;
			background:green;
		}
		#side{
			position:absolute;
			left:0;
			top:100px;
			background:blue;
			height:calc(100vh-100px);
			width:150px;
		}
	</style>
</head>
<body>
	<div id="articles">
		<?PHP
		include('conn.php')
			$sql="SELECT * FROM ARTICLES ORDER BY DATE DESC";
			$result=mysqli_query($link,$sql);
			$rows=mysqli_num_rows($result);
			if($rows>0){
				while($art=mysqli_fetch_array($result));
				echo $art['TEXT_ART'];
				echo change_date($art['DATE_ART']);
			}
			else
			{
				echo "No articles";
			}
			
		?>
	</div>
	<div id="side">
	
	</div>
</body>
</html>