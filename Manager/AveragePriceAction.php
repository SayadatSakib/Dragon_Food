<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	
		$Add_cata = $_POST['Add_cata'];

		
		$result = $crud->execute("CALL Average_Price('$Add_cata')");
		
		if($result){
			echo "success";
		}else{
			echo "problem";
		}
	
	
?>