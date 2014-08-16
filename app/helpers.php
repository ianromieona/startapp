<?php

/**
 * Helper files
 */
function pre($param, $exit = true){
	echo "<pre>";
	print_r($param);
	if($exit){
		exit;
	}
}