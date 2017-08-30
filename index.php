<!--18-
	Version : 1.0.0
	Created on : 27/08/2017 at 20:42
	Updated on : 27/08/2017 at 20:42
	Programmer : AbdallahBeraida
	Developing : On
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="AbdallahBeraida" />
		<title>Equation du second degre Solver</title>
		<style>
			.a {height :20px; width : 70px; margin-top : 10px}
			.b {height :25px; width : 70px; margin-top : 15px ; font-weight : bolder}
		</style>

	</head>	
	<body>
	<center>
	<img src='https://assets.digital.cabinet-office.gov.uk/government/uploads/system/uploads/image_data/file/5357/s300_Maths_English_blackboard_960x640.jpg' width='350' height='260'/><br /><br/>

		<b>L'Equation du second degree s'ecrit comme suit : Ax²+Bx+C</b>
		<form action="calcul.php" method="POST" autocomplete="off">
			Entrez la valeur de A : <input type="number" name ="A" class="a" required /><br/>
			Entrez la valeur de B : <input type="number" name ="B" class="a" required /><br/>
			Entrez la valeur de C : <input type="number" name ="C" class="a" required /><br/>
			<input type="submit" value ="Solve" class="b" /><br/>
        </form>
            
	</center>
	</body>
</html>