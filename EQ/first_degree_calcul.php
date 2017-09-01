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
	$break = '<br/>';
	$style_in = '<font color="red" size="4" face="Tahoma">';
	
	if (!empty($A) && !empty($B)){
         $X = sprintf("%.2f", -$B/$A);
        echo '<b>'.'Equation is : '.$A.' x + '.$B.' = 0 '.'</b>'.$break;
        echo '<b>'.$style_in."X = $X".' is solution of equation</font>'.'</b>';
    }
else{
     echo '<b>'.$style_in."This equation havn't not solution  </font>".'</b>';
}
		
echo $break.'<a href="../index.php">Click Here to redirecting you in the index</a>';
