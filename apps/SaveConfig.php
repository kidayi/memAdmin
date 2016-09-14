<?php

define('configFile','./conList.config');

function saveFile($fileName, $text) {
    if (!$fileName || !$text){
        return false;
	}
 

	if ($fp = fopen($fileName, "w")) {
		if (@fwrite($fp, $text)) {
			fclose($fp);
			return true;
		} else {
			fclose($fp);
			return false;
		} 
	} 

    return false;
} 






?>