
<?php

	function psaux(){
		$output = shell_exec("ps aux");
		$result = explode("\n", $output);		
		return json_encode($result);
	};
	echo psaux();	
?>		
