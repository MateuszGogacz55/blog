<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8"/>
<title >Sport News</title>
    <link rel="Stylesheet" href="stylee.css">
	<style>
	body {
		text-align:center;
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
        a{
            color: #aaa;
            text-decoration: none;
        }
        a:hover{
		color:#fff; 
   
	}
	a:active{
		color:#aaa; 
         text-decoration: none;
	}
        #but:hover{
		
		background-color: #000000; 
		border-radius: 30px;
	
		}
	.inp{
        background-color: #3c3a3a;
		padding: 12px 20px;
		width:500px;
		margin: 8px 0;
		display: inline-block;
		border: 1px solid #ccc;
		border-radius: 10px;
		box-sizing: border-box;
        color: #fff;
	}
	    .pi {
            text-align: right;
            width:10%;
            height: 10%;
            position: absolute;
            left: 90%;
        }
                footer {
  display: block;
            color: #888;
}
	</style>
</head>
<body>
<div id="header">
      <div class="left"> Partnerzy:<br>
    <a  href="https://www.sistematurismo.it/"><img target="_blank" class="pi" src="http://www.erasmusproject.pl/wp-content/uploads/2017/06/sistema_turismo.png"></a>
   
          </div>
    <h1 style=" color:#aaa; font-family:fantasy;font-size:500%;"><a href="index.php">SPORT NEWS</a></h1>
	
	<form action="add_art.php" method="POST">
		<input type="text" placeholder="Tytuł" name="title" class="inp" required/><br/>
		<textarea class="inp" rows="15" placeholder="Tu umiesc tresc artykułu" name="text" required></textarea><br/>
		<select class="inp" name="subject">
			<option value=""  disabled selected required></option>
			<?PHP
				include('conn.php');
				$z=mysqli_query($link, "select * from subjects");
				while($r=mysqli_fetch_array($z)){
					echo "<option value= '".$r['ID_SUB']."'>".$r['NAME_SUB']."</option>";
				}
				echo "</select>";
			?>
		</select><br/>
		<input type="submit" value="Dodaj Artykuł" name="add" id="but"/><br/>
	</form>
</div>
<div id="menu">

</div>
<div id="articles">

</div>

</body>

</html>
       