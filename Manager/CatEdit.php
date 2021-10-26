<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$cat_id = $_POST['cat_id'];
	//echo $id ;
	$query = "select * from category_table where cat_id=$cat_id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$cat_id = $res['cat_id'];
		$cat_name = $res['cat_name'];
	}
?>


	<input type="text" id="ucat_id" name="cat_id" hidden value="<?php echo $cat_id;?>"/>
	<div class="row mb-3">
		<div class="col-sm-4">
			<input type="text" id="ucat_name" class="form-control" name="cat_name" value="<?php echo $cat_name;?>"/><br>
			<input class='btn btn-success' type="button" id="update" name="update" value="Update"/>
			<input class='btn btn-danger' type="button" onclick="$('#edit-form').slideUp();" name="cancel" value="Cancel"/>
		</div>
	</div>	
	
	
	

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#update').click(function(){
			var cat_id = $('#ucat_id').val();
			var cat_name = $('#ucat_name').val();
		
			$.ajax({
				url:"CatEditaction.php",
				type:"POST",
				data: {cat_id:cat_id,cat_name:cat_name},
				success: function(data){
					
					if(data==1){
						
					    $('#cat_id').val('');
						$('#cat_name').val('');
						$('#edit-form').slideUp();
						$.get('CatView.php',function(data){
						  $('#data-show').html(data);
						})
					}
					else{
					alert("Problem");					
					}
				}
			});
		});
		
		
		
	});
</script>