<!--
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
		<title>Equation de seconde degree</title>
		<link rel="stylesheet" type="text/css" href="../style/main.css"/>
        <style>
            .a {height :15px; width : 70px; margin-top : 8px;}
			.b {height :20px; width : 70px; margin-top : 11px; font-weight : bolder}
            .content{margin: 4% auto; width: 80%; height: 40%; text-align: center}
        </style>            
	</head>	
	<body>
        <div id='cssmenu'>
            <ul>
               <li class='active'><a href="../index.php"><span>Home : List of scripts</span></a></li>
               <li><a href='#'><span>Test</span></a></li>
               <li><a href='#'><span>Test</span></a></li>
               <li class='last'><a href='#'><span>Test</span></a></li>
            </ul>
        </div>
        <div class="content">
            <img src='https://assets.digital.cabinet-office.gov.uk/government/uploads/system/uploads/image_data/file/5357/s300_Maths_English_blackboard_960x640.jpg' width='300' height='190'/><br /><br/>
            <b>L'Equation du second degree s'ecrit comme suit : Ax²+Bx+C</b>
            <form action="second_degree_calcul.php" method="POST" autocomplete="off">
                Entrez la valeur de A : <input type="number" name ="A" class="a" required /><br/>
                Entrez la valeur de B : <input type="number" name ="B" class="a" required /><br/>
                Entrez la valeur de C : <input type="number" name ="C" class="a" required /><br/>
                <input type="submit" value ="Solve" class="b" /><br/>
            </form>  
        </div>
	</body>
</html>