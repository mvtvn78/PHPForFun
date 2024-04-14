<?php 
// Constant
// Syntax 1 : define(name_var,value_var,case_insentive);
// Syntax 2 : const name_var = value_var;
define("AUTHOR", "mvtvn78");
//echo AUTHOR;
const PI = 3.14;
//echo PI;
/*
	SCOPE IN PHP
	global
	static
	local
*/
//$g_name = "Mvt";
//Function 
//function My_Func() {
//	echo "Using global var in func \n";
//	echo $g_name;
//}
//My_Func();
//echo "Use global var outside $g_name";
//With global keyword  (same)
//global $g_name ;
//$g_name = "Mvt";
//function My_F() {
//	echo $g_name;}
//My_F();
//echo $g_name;

// With static
function Count10 ($name) 
{
	static $i =0;
	echo $i;
	$i +=1;
}
Count10();
Count10();

?>
