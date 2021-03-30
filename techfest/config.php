<?php
	try{
		$dbhandler = new PDO('mysql:host=sql310.epizy.com;dbname=epiz_28240927_techfest','epiz_28240927','hO0llLJNyjUzbXL');
		$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 	
	}
	catch(PDOException $e){
		echo $e->getMessage();
		die();
	}
?>