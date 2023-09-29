<?php

	function classAutoLoader($class){
		$class = strtolower($class);

		$the_path = "server/{$class}.php";

	// 	if (file_exists($the_path)) {
	// 		require_once($the_path);
	// 	}else{
	// 		die("This file name {$class}.php was not found...");
	// 	}
	// }

		if (is_file($the_path) && !class_exists($class)) {
			require_once($the_path);
		}
}
	spl_autoload_register('classAutoLoader');
// }

	function redirect($location){
		header("Location: $location");
	}

?>