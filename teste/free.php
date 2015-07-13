<?php

class Free {

	private $memory;

	function process(){
		preg_match_all("(\d+)", shell_exec("free"), $result);
		// print_r($result);
		return $this->resultToJson($result[0]);
	}

	function resultToJson($result){
		$free = [];

		$free["memory"] = [];
		$free["memory"]["total"] = $result[0];
		$free["memory"]["used"] = $result[1];
		$free["memory"]["free"] = $result[2];
		$free["memory"]["shared"] = $result[3];
		$free["memory"]["buffers"] = $result[4];
		$free["memory"]["buffers"] = $result[5];
		
		return json_encode($free);
	}

}
$free = new Free();
echo $free->process();

?>

