<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
		$cata_name = $_POST['cata_name'];

		
		$result = $crud->execute("CALL ADD_CATEGORY('$cata_name')");
		
		if($result){
			echo "success";
		}else{
			echo "problem";
		}
	
	
?>
