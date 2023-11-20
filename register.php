<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
	<title >Sport News</title>
    <link rel="Stylesheet" href="stylee.css">
	<style>
body { 
    text-align: center;

background:  linear-gradient(to right, #274046, #274046,#274046, #274046,#274046, #274046,#274046,#274046, #e6dada);
font-family:fantasy;
        }

	input{
		margin:5px;
	}
	#but{
				background-color: #2d535c; 
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
        border-radius: 10px;
			transition: 0.4s;
	}
	
	
		#but:hover{
		
		background-color: #000000; 
            	border-radius: 30px;
		
		
	}
            .pi {
            text-align: right;
            width:10%;
            height: 10%;
            position: absolute;
            left: 90%;
        }
	.log{
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	a{
        color:#aaa;    
        text-decoration: none;
	}
	a:hover{
		color:#fff; 
   
	}
	a:active{
		color:#aaa; 
         text-decoration: none;
	}
                footer {

            color: #888;
                     clear: both;
}
	</style>
</head>
<body>
<div id="header">
        <div class="left"> Partnerzy:<br>
    <a  href="https://www.sistematurismo.it/"><img target="_blank" class="pi" src="http://www.erasmusproject.pl/wp-content/uploads/2017/06/sistema_turismo.png"></a>
   
          </div>
    <h1 style="color:#aaa; font-family:fantasy;font-size:500%;"><a href="index.php">SPORT NEWS</a></h1>

	<?PHP
		session_start();
			if(isset($_SESSION['wrong'])){
			{
				echo $_SESSION['wrong'];
				session_destroy();
			}
			echo<<<T
T;
}
?>
	<form action="insert.php" method="POST">
			<input type="email" placeholder="e-mail" name="user" class="log" required /><br/>
			<input type="password" placeholder="hasło" name="pass" class="log" required /><br/>
			<input type="text" placeholder="Imie" name="first" class="log" required /><br/>
			<input type="text" placeholder="Nazwisko" name="last" class="log" required /><br/>
			<input type="submit" value="Zarejestruj" name="register" id="but" required /><br/>
		</form>
	</div>
		<a href="log.php">Już mam konto.</a>
 <br><img src="log.png">
</body>
</html>