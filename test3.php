<?php	include('geo_2.class.php');		$geo = new geo();			print_r($geo->geo_service_3('18.100.8.66'));	//print_r($geo->geo_service_3('194.44.28.114'));	//print_r($geo->geo_service_3('178.154.75.91'));	//print_r($geo->geo_service_3('159.237.245.163'));		return;		print_r($geo->get_data('18.100.8.66'));	print_r($geo->get_data('194.44.28.114'));	print_r($geo->get_data('178.154.75.91'));	print_r($geo->get_data('159.237.245.163'));	return;		//include('proxies/proxyOhio.class.php');	//$o = new proxyRice();	include('config.php');	include('database.class.php');	$db = new database();		//$o->fill_db($db);			print_r($db->domain_check('net'));?>
