
<?php

	function psaux(){
		$output = shell_exec("ps aux");
		$result = explode("\n", $output);
		//print_r($result);
		return json_encode($result);
	};
	echo psaux();
	// foreach ($result as $line) {
	// 	$colunas = preg_split("/\s+/", $line);
	// 	print_r($colunas);
	// }
?>		

