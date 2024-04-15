<?php  
setcookie("author", "mvtvn78", time() + (86400 *30) , "/");
$cookie_name = "author";
?>
<html>
<body>
<?php 
	if(!isset($_COOKIE[$cookie_name])) {
		echo "<h1>". $_COOKIE[$cookie_name]. "</h1>";
	}
	else {
		echo "<h1>". "MY COOKIE IS" .$_COOKIE[$cookie_name] . "</h1>";
}
?>
</body>
</html>
