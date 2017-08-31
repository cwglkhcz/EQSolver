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
        <meta charset='utf-8'>
		<meta name="author" content="AbdallahBeraida" />
		<title>Equation du second degre Solver</title>
		<style>
			.a {height :20px; width : 70px; margin-top : 10px;}
			.b {height :25px; width : 70px; margin-top : 15px; font-weight : bolder}
            .content{margin: 4% auto; width: 80%; height: 50%; text-align: center}
            body {
                background-image: url(img/a.jpg);
                -moz-background-size: cover;
                -webkit-background-size: cover;
                background-size: cover;
                background-position: top center !important;
                background-repeat: no-repeat !important;
                background-attachment: fixed;
                }
		</style>

	</head>	
	<body>
        <div class="content">
            <img src='https://assets.digital.cabinet-office.gov.uk/government/uploads/system/uploads/image_data/file/5357/s300_Maths_English_blackboard_960x640.jpg' width='300' height='200'/><br /><br/>
            <b>L'Equation du second degree s'ecrit comme suit : Ax²+Bx+C</b>
            <form action="calcul.php" method="POST" autocomplete="off">
                Entrez la valeur de A : <input type="number" name ="A" class="a" required /><br/>
                Entrez la valeur de B : <input type="number" name ="B" class="a" required /><br/>
                Entrez la valeur de C : <input type="number" name ="C" class="a" required /><br/>
                <input type="submit" value ="Solve" class="b" /><br/>
            </form>  
        </div>
	</body>
</html>