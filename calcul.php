<?php
/**********************************************
**		Version    : 1.0.0 Beta				***
**		Created on : 27/08/2017 at 20:42	***	
**		Updated on : 30/08/2017 at 22:25	***
**		Programmer : AbdallahBeraida		***
**		Developing : On						***
***********************************************/

@set_time_limit(0); // The script will run forever
error_reporting(0); // Turn off all error reporting


	$A = trim($_POST["A"]);
	$B = trim($_POST["B"]);
	$C = trim($_POST["C"]);
	$break = '<br/>';
	$style_in = '<font color="red" size="4" face="Tahoma">';
	
	if (!empty($A) && !empty($B) &&!empty($C)){
		
		$delta = $B*$B - 4*$A*$C;
		
		if ($delta == 0){
			
			$X = (-1*$B)/(2*$A);
			echo '<b>'.'Equation is : ' . $A .' x² + ' . $B . ' x + ' . $B . ' = 0 '.'</b>'.$break;
			echo '<b>'."The result is : ".$style_in.$X.'</font>'.'</b>';
		}
		elseif($delta > 0){
			
			$X1 = (-$B-sqrt($delta))/(2*$A);
			$X2 = (-$B+sqrt($delta))/(2*$A);   
			
			echo '<b>'.'Equation is : ' . $A .' x² + ' . $B . ' x + ' . $B . ' = 0 '.'</b>'.$break;
			echo '<b>'."The result is : ".$style_in.$X1.'</font>'.'</b>'.' and '.'<b>'.$style_in.$X2.'</font>'.'</b>' ;
		}
		else{
			echo '<b>'.'Equation is : ' . $A .' x² + ' . $B . ' x + ' . $B . ' = 0 '.'</b>'.$break;
			echo '<b>'.$style_in."Y'a pas de solution en IR".'</font>'.'</b>'.$break;
		}

	}
	elseif($A == 0 && $B == 0 && $C == 0){
		echo '<b>'.$style_in." All numbers can be resolution of this polynom ".'</font>'.'</b>';
	}	
	elseif($A == 0 && $B == 0 && $C != 0){
		echo '<b>'.$style_in." This polyniome dosen't have à resolution ".'</font>'.'</b>';
	}
	else{
		echo '<b>'.$style_in."You can't resolve this polynome if not assigne all input values ".'</font>'.'</b>';
	}
echo $break.'<a href="index.php">Click Here to redirecting you in the index</a>';