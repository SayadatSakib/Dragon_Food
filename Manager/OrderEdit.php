<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$o_id = $_POST['o_id'];
	//echo $id ;
	$query = "select * from Orders_table where o_id=$o_id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$o_id = $res['o_id'];
		$p_Name = $res['p_Name'];
		$p_price = $res['p_price'];
		$quantity = $res['quantity'];
		$t_price = $res['t_price'];
		$p_id = $res['p_id'];
		$c_id = $res['c_id'];
	}
?>


    <div class="row mb-3">
        <div class="col-sm-4">
                <table>
                       
                        <tr>
                            <td>
                                <input type="text" id="or_id" hidden value="<?php echo $o_id;?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Product Name:</h6>
                                <input type="text" id="productName" class="form-control" value="<?php echo $p_Name;?>"/> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Product Price:</h6>
                                <input type="text" id="price" class="form-control" value="<?php echo $p_price;?>"/><br>
                            </td>
                        </tr>
                    <tr>
                            <td>
                                <h6>Quantity:</h6>
                                <input type="text" id="quantity" class="form-control" value="<?php echo $quantity;?>"/><br>
                            </td>
                    </tr>
                    <tr>
                            <td>
                                <h6>Total Price:</h6>
                                <input type="text" id="t_price" class="form-control" value="<?php echo $t_price;?>"/><br>
                            </td>
                    </tr>                                                              
                        <tr>
                            <td>
                                <input class='btn btn-success' type="button" id="update" name="update" value="Update"/><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br><input class='btn btn-danger' type="button" onclick="$('#o_edit-form').slideUp();" name="cancel" value="Cancel"/><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br><label id="status" class="status" style="color: white"></label><br>
                            </td>
                        </tr>
                    </table>
        </div>
    </div>  
    



	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>

	

<script type="text/javascript">
	$(document).ready(function(){
		
		    $('#update').click(function(){
		    	var or_id = $('#or_id').val();
                var product_name = $('#productName').val();
                var price = $('#price').val();
                var quantity = $('#quantity').val();
                var t_price = $('#t_price').val();
		        
                //alert(img);

			$.ajax({
				url:"OrderEditAction.php",
				type:"POST",
				data: {or_id:or_id,product_name:product_name,price:price,quantity:quantity,t_price:t_price},
				success: function(data){
					
					if(data==1){
					    	$('#or_id').val('');
			                $('#productName').val('');
			                $('#price').val('');
			                $('#quantity').val('');
			                $('#t_price').val('');
			                $('#o_edit-form').slideUp();
						$.get('OrderView.php',function(data){
						  $('#o_data-show').html(data);
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