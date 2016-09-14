<?php
/**
 * load the list from cookie
 */
header("Cache-Control: no-cache, must-revalidate");

require_once('./SaveConfig.php');

/*
if (isset($_COOKIE['memadmin_cookie_conlist'])) {
	$_COOKIE['memadmin_cookie_conlist'] = stripslashes($_COOKIE['memadmin_cookie_conlist']); 
	$res = unserialize($_COOKIE['memadmin_cookie_conlist']);
	echo json_encode($res);
} else {
	echo "nolist";
} */

$connList=@file_get_contents(configFile); 
if(strlen($connList)>0){
	echo json_encode($connList);
}else{
	echo "nolist";
}


?>