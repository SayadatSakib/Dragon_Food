<?php
	
	include_once 'Crud.php';
	
	$crud = new Crud();
	

		$product_name = $_POST['product_name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$img = $_POST['img'];
		
		$result = $crud->execute("CALL Product_Add('$product_name','$category','$description','$price','$size','$img')");
		
		if($result){
			echo "success";
		}else{
			echo "problem";
		}
		
?>