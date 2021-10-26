
<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$cat_id = $_POST['cat_id'];
		$cat_name = $_POST['cat_name'];
		
		$result = $crud->execute("CALL CAT_UPDATE('$cat_id','$cat_name')");
		
		if($result){
			echo true;
		}else{
			echo false;
		}	
	
?>