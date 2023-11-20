<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title >BLOG</title>
	<style>
	body {
		
		background:  linear-gradient(to right, #556270,  #4a2735);
	}
	
	
	
	h1{
		text-align:center;
	}
	
	input{
		margin:5px;
	}
	#but{
		
		background-color: #1f54a3; 
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
	}
	
	#but:hover{
		
		background-color: #000000; 
		
		
	}
	
	.inp{
		padding: 12px 20px;
		width:500px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	.art{;
		text-align:center;
		border:3px solid black;
		border-radius:20px;
		margin:0 30% 10px 30%;
		padding:10px;
		color:#000000;
	}
	#date{
		text-align:left;
	}
	#usr{
		text-align:right;
	}
	</style>
</head>
<body>
<div id="header">
<a href="log.php"><button id="but">LOGIN</button></a>
<a href="register.php"><button id="but">REGISTER</button></a>
	<h1 style="font-family:fantasy;font-size:500%;">BLOG</h1>
	<?PHP
		include('conn.php');
		$sql="SELECT * FROM ARTICLES";
		$result=mysqli_query($link,$sql);
		$rows=mysqli_num_rows($result);
		while($art=mysqli_fetch_array($result)){
			echo "<div class='art'>";
			echo "<h2>".$art['TITLE_ART']."</h2><br/>";
			echo $art['TEXT_ART']."<br/><br/>";
			echo "<div id='date'>Date: ".change_date($art['DATE_ART'])."</div><br/>";
			$user_art=$art['ID_USER_ART'];
			$sub=$art['ID_SUB_ART'];
			$user_articles=mysqli_query($link,"SELECT FIRST_USER FROM users WHERE ID_USER='$user_art'");
			$now = mysqli_fetch_array($user_articles);
			$user_name=$now['FIRST_USER'];
			$sub_articles=mysqli_query($link,"SELECT NAME_SUB FROM subjects WHERE ID_SUB='$sub'");
			$sow = mysqli_fetch_array($sub_articles);
			$new_subject=$sow['NAME_SUB'];
			echo "<div id='usr'>Created by: ".$user_name."</div>";
			echo "</div>";
		}
			
	?>
</div>
<div id="menu">

</div>
<div id="articles">

</div>
</body>
</html>