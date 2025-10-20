<?php 
session_start();
$_SESSION["fruits"]="Apple";
echo $_SESSION["fruits"];


echo "<BR>";
$cookie_name="php";
$cookie_value="lang";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie named '".$cookie_name."'is not set";
}
else {
	echo "Cookie '".$cookie_name."'is ser! "."<BR>";
	echo "Value is' ".$_COOKIE[$cookie_value];
	
}
?>
<?php 
setcookie("user","",time()-3600);
echo "Cookie is deleted";
?>
