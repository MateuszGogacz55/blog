<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
    <link rel="Stylesheet" href="style.css">
	<title >Sport News</title>
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
		
		 position: fixed;
		margin:3%;
		border-radius: 10px;
		background-color: #2d535c; 
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
			transition: 0.4s;

	}
	
	#but:hover{
		
		background-color: #000000; 
		border-radius: 30px;
	
		}
	
	
	
		#show{
		
		margin-top:1%;
		background-color: #2d535c; 
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		transition: 0.4s;
            border-radius: 10px;
	}
	
	#show:hover{
		
		background-color: #000000; 
		border-radius:30px;
		
		
	}
	
	
	
	
	#del{
		margin-top:1%;
		background-color: #b01323;
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
        border-radius: 10px;
		font-size: 16px;
			transition: 0.4s;
	}
	
	#del:hover{
		
		background-color: #000000; 
		border-radius:30px;
		
		
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
	
        .pi {
            text-align: right;
            width:10%;
            height: 10%;
            left: 90%;
          
        }
        .left{
            text-align: right;
            left: 90%;
      
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
	.art{
				background:radial-gradient(#e6dada,#274046);
		text-align:center;
   
		margin:0 20% 10px 20%;
		padding:0;
	padding: 5%;
		color:#000000;
	}
        
          
        
	#date{
		text-align:left;
	}
	#usr{
		text-align:right;
	}
        footer {
  display: block;
            color: #888;
}
	</style>
</head>
<body>
<div id="header">
<a href="log.php"><button id="but">Panel użytkownika</button></a><br/>
    <div class="left"> Partnerzy:<br>
    <a  href="https://www.sistematurismo.it/"><img target="_blank" class="pi" src="http://www.erasmusproject.pl/wp-content/uploads/2017/06/sistema_turismo.png"></a>
    </div>
    <h1 style="color:#aaa; font-family:fantasy;font-size:500%;"><a href="index.php">SPORT NEWS</a></h1>

	<?PHP
	
	
	
	
	
	
	
		session_start();
		include('conn.php');
		$sql="SELECT * FROM ARTICLES as A left join subjects as S on A.ID_SUB_ART=S.ID_SUB left join users as U on A.ID_USER_ART=U.ID_USER order by A.DATE_ART desc, ID_ART desc";
		$result=mysqli_query($link,$sql);
		$rows=mysqli_num_rows($result);
		while($art=mysqli_fetch_array($result)){
			echo "<div class='art'>";
			echo "<h2>".$art['TITLE_ART']."</h2><br/>";
			$short_art=substr($art['TEXT_ART'],0,600);
			$lenght_before=str_word_count($art['TEXT_ART']);
			$lenght_after=str_word_count($short_art);
			if($lenght_after<$lenght_before){
				
				$short_art.="...";
			}
			echo $short_art."<br/><br/>";
			
	
			echo "<div id='date'>Data dodania: ".change_date($art['DATE_ART'])."</div><br/>";
			echo "<div id='usr'>Napisane przez: ".$art['FIRST_USER']."</div>";
			
			$sub=$art['ID_SUB_ART'];
			$sub_articles=mysqli_query($link,"SELECT NAME_SUB FROM subjects WHERE ID_SUB='$sub'");
			$sow = mysqli_fetch_array($sub_articles);
			$new_subject=$sow['NAME_SUB'];
			echo "<div id='sub'>Temat: ".$new_subject."</div>";
		
			echo "<a href='comment.php?ID_ART=".$art['ID_ART']."'><button id='show'>Pokaż więcej</button></a><br/> ";
		
		
		
	
			if(isset($_SESSION['perm'])){
				if($_SESSION['perm']==1){
					
					echo "<a class='delete' href='del.php?ID_ART=".$art['ID_ART']."'><button id='del'>Usuń</button></a>";
				}
			}
		echo "</div>";	
		
			}
		
		
		
		



?>		
</div>
<div id="menu">

</div>
<div id="articles">

</div>
    <footer>
        <center> <p>Stworzne przez Mateusz Gogacz IV i na Pi-Ai na ocene wzorową. Wczelkie prawa zastrzeżone.</p> </center>
</footer>
</body>
</html>