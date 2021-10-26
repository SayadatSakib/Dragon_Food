
<?php

	include_once 'Crud.php';
	
	$crud = new Crud();
	
	
		$p_id = $_POST['p_id'];
		
		$product_name = $_POST['product_name'];
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$size = $_POST['size'];
		$img = $_POST['img'];
		
		$result = $crud->execute("Update produc_table SET p_name='$product_name',category='$category',description='$description',price='$price',size='$size',image='$img' where p_id=$p_id");
		
		if($result){
			echo true;
		}else{
			echo false;
		}	
	
?>