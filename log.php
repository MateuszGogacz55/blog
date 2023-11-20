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
		padding: 12px 20px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
	}
	#but{
		margin:5px;
			margin:1%;
		
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
        
        b{
            color:#aaa;
            
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
            text-decoration: none;
            color:#aaa;
        }
	a:hover{
		color:#fff; 
   
	}
	a:active{
		color:#aaa; 
         text-decoration: none;
	}
	</style>
</head>
<body>

<div id="header">
      <div class="left"> Partnerzy:<br>
    <a  href="https://www.sistematurismo.it/"><img target="_blank" class="pi" src="http://www.erasmusproject.pl/wp-content/uploads/2017/06/sistema_turismo.png"></a>
   
          </div>
        <h1 style="color:#aaa; font-family:fantasy;font-size:300%;"><a href="index.php">SPORT NEWS</a></h1>

		<?PHP
		
							session_start();
					if(isset($_SESSION['user']))
					{
						echo "<div class='lo'>";
						echo "Witaj, ".$_SESSION['name']."<br/>";
						if($_SESSION['perm']==1){
							echo "Uprawnienia: <b>Admin</b>";
							echo "</div>";
							echo<<<T
					<br/><a href="article.php"><button id="but">Dodaj nowy artykuł</button></a>
				
T;
						}
						elseif($_SESSION['perm']==2){
							echo "Uprawnienia: <b>Redaktor</b>";
							echo '<br/><a href="article.php"><button id="but">Dodaj nowy artykuł</button></a>';
						}
						else
						{
							echo "Uprawnienia: <b>Użytkownik</b>";
						}
						
			
						
					}
					else
					{
						echo "<div class='lo'>";
                        echo "Witaj, <b>Gościu!</b></br>";
						echo "Zaloguj się do swojego konta";
						echo "</div>";
				
					if(isset($_SESSION['wrong']))
					{
						echo $_SESSION['wrong'];
						session_destroy();
					}
					if(isset($_SESSION['already'])){
						echo $_SESSION['already'];
						session_destroy();
					}
					
}
	
		
		
		
			
			if(isset($_SESSION['user']))
		{
			
			echo '<br/><a href="index.php"><button id="but">Artykuły</button></a>';
			echo '<br/><a href="logout.php"><button id="but">Wyloguj</button></a>';
			
		}
		else
		{
			if(isset($_SESSION['wrong']))
			{
				echo $_SESSION['wrong'];
			
			}
			if(isset($_SESSION['already'])){
				echo $_SESSION['already'];
				session_destroy();
			}
			echo<<<T
<form action="login.php" method="POST">
<input type="text" placeholder="LOGIN" name="user" class="log"/><br/>
<input type="password" placeholder="HASŁO" name="pass"  class="log"/><br/>
<input type="submit" value="Zaloguj" name="login" id="but"/><br/>
</form>
</div>
<a href="register.php"><button id="but">Rejestracja</button></a><br/>
<a href="index.php"><button id="but">Artykuł</button></a>
<div id="menu">

</div>
<div id="articles">

</div>
T;
}
?>
<br><img src="log.png">

</div>
</body>
</html>