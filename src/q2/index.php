<?php require_once("../../vendor/autoload.php"); ?>

<?php 
	// session_start();
	// 	$_SESSION["loggedin"] = true;
	// session_unset(); 
	// session_destroy();
	// setcookie('Loggedin',true);
	// setcookie("Loggedin", "", time() - 3600); 
?>

<?php $obj = new App\Q2\StoredHeader("http://www.google.com") ?>

<?= $obj->checkSession('loggedin') ?>
<?= $obj->checkCookie('Loggedin') ?>
