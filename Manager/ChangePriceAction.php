<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
		$change_ID = $_POST['change_ID'];

		
		$result = $crud->execute("CALL Change_Price('$change_ID')");
		
		if($result){
			echo "success";
		}else{
			echo "problem";
		}
	
	
?>