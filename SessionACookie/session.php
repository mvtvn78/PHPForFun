<?php
session_start();
echo $_SESSION;
print_r($_SESSION);
$_SESSION["author"] = "mvtvn78";
?>
<html>

<body>
 
<?php 
	echo "<p>". $_SESSION["author"]  ."</p>"
?>

</body>

</html>
