<head>
    <title >Sport News</title>
    <link rel="Stylesheet" href="stylee.css">
<style>
body { 


background:  linear-gradient(to right, #274046, #274046,#274046, #274046,#274046, #274046,#274046,#274046, #e6dada);
font-family:fantasy;
    }

	
	
	
	h1{
		text-align:center;
	}
	
	input{
		margin:5px;
	}
	#but{
		

		margin:3%;
		
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
		border-radius:30px;
		
		
	}
	
	#butt{
		background-color: #1f54a3; 
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
			transition: 0.4s;
	}
	
	#butt:hover{
		
		background-color: #000000; 
		border-radius: 30px;
		
		
	}
	
	.comm
	{
		background-color: #274046;
		border-radius: 30px;
		width: 50%;
		margin: 0 auto;
        

		
	}
	.inp{
        background-color: #3c3a3a;
		padding: 12px 20px;
		width:500px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 4px;
		box-sizing: border-box;
          color: #fff;
        	border-radius: 10px;
	}
        .pi {
            text-align: right;
            width:10%;
            height: 10%;
            position: absolute;
            left: 90%;
        }
	.art{
	
		background:radial-gradient(#e6dada,#274046);
		text-align:center;
   
		margin:0 20% 10px 20%;
padding: 5%;
	
		color:#000000;
		 
	}
	#date{
		text-align:left;
	}
	#usr{
		text-align:right;
	}
    
    a{
        color: #aaa;
        text-decoration: none
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
<div class="head">     <div class="left"> Partnerzy:<br>
    <a  href="https://www.sistematurismo.it/"><img target="_blank" class="pi" src="http://www.erasmusproject.pl/wp-content/uploads/2017/06/sistema_turismo.png"></a>
   
          </div>

    <h1 style="font-family:fantasy;font-size:500%;"><a  href="index.php">SPORT NEWS</a></h1>
	<div class="menu">

		
			
				<ul style="text-decoration:none;">
				<?PHP
					session_start();
					if(isset($_SESSION['user']))
					{
						
						if($_SESSION['perm']==1){

							echo "</div>";
							echo<<<T
T;
						}
						elseif($_SESSION['perm']==2){
							
							
						}
						else
						{
							
						}
						
					
						
					}
					else
					{
				
						
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
?>
				</ul style="text-decoration:none;">
		
	</div>
	<div class="art">
		<?PHP
			include('conn.php');
			$article=$_GET['ID_ART'];
			$sql="SELECT * FROM ARTICLES WHERE ID_ART=$article";
			//$sql="SELECT * FROM ARTICLES as A left join subjects as S on A.ID_SUB_ART=S.ID_SUB left join users as U on A.ID_USER_ART=U.ID_USER";
			$result=mysqli_query($link,$sql);
			$art=mysqli_fetch_array($result);
			echo "<h2>".$art['TITLE_ART']."</h2>";
			echo "<div class='text'>";
			echo "<div class='date'>Date: ".change_date($art['DATE_ART'])."</div><br/>";
			$user_art=$art['ID_USER_ART'];
			$sub=$art['ID_SUB_ART'];
			$sub_articles=mysqli_query($link,"SELECT NAME_SUB FROM subjects WHERE ID_SUB='$sub'");
			$sow = mysqli_fetch_array($sub_articles);
			$new_subject=$sow['NAME_SUB'];
			echo "<div class='sub'>Temat: ".$new_subject."</div>";
			$user_articles=mysqli_query($link,"SELECT FIRST_USER FROM users WHERE ID_USER='$user_art'");
			$now = mysqli_fetch_array($user_articles);
			$user_name=$now['FIRST_USER'];
			echo "<div class='usr'>Dodane przez: ".$user_name."</div><br/>";
			echo $art['TEXT_ART'];
			echo "</div>";
			echo "<br/>";
			
			$sql="SELECT * FROM COMMENTS WHERE ID_ART_COM=$article ORDER BY DATE_COM DESC, ID_COM DESC";
			$result=mysqli_query($link,$sql);
			$rows=mysqli_num_rows($result);
			if($rows>0){
				while($com=mysqli_fetch_array($result)){
					echo "<div class='comm'>";
					echo "<div class='com_date'>Napisane: ".change_date($com['DATE_COM'])."</div>";
					$id_usr=$com['ID_USER_COM'];
					$sql="SELECT * FROM USERS WHERE ID_USER=$id_usr";
					$great=mysqli_query($link,$sql);
					$u=mysqli_fetch_array($great);
					echo "<div class='com_usr'>".$u['FIRST_USER'].": ".$com['TEXT_COM']."</div>";
					echo "</div><br/>";
				}
			}
		
			
			if(isset($_SESSION['perm'])){
				if($rows==0){
					echo "<div class='lo'><center><b>Brak kometerzy. Skometuj jako pierwszy.</b></div></center><br/>"; 
				}
				echo "<form action='add_com.php' method='POST'>";
				echo "<center><textarea class='inp' placeholder='Skomentuj' name='comment'></textarea>";
				echo "<input type='hidden' name='id_art_com' value='$article'><br/></center>";
				echo "<input  type='submit' value='Doddaj komentarz' name='add' id='but'>";
				echo "</form>";
			}
			else
			{
			if($rows>0){
			}
			else{
				echo "<div class='lo'><center>To add a comment log in!</div></center>";
			}
			}
		?>
	</div>
</div>  
</body>