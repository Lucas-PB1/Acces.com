<title>Acess.com</title>
<?php include_once("header.php");

#conteudo
if(empty($_SERVER["QUERY_STRING"])){
	$var = "login.php";
	include_once("$var");
}else{
	$pg = $_GET['pg'];
	include_once("$pg.php");
}
include_once("footer.php") ?>