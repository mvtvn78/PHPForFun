<?php 
function AppendHello($name)
{
	return $name . "Hello";
}
$rs1 =  AppendHello("Mvt");
echo $rs1;
//Return Type Specify 
function Mycode ($str) :int {
	return $str;
}
$rs2 = Mycode("243");
echo var_dump($rs2);
?>
