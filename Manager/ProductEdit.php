<?php
	include_once 'Crud.php';
	
	$crud = new Crud();
	
	$p_id = $_POST['p_id'];
	//echo $id ;
	$query = "select * from produc_table where p_id=$p_id";
	
	$result = $crud->getData($query);
	
	foreach($result as $res){
		$id = $res['p_id'];
		$name = $res['p_name'];
		$category = $res['category'];
		$description = $res['description'];
		$price = $res['price'];
		$size = $res['size'];
		$image = $res['image'];
	}
?>


    <input type="text" id="ucat_id" name="cat_id" hidden value="<?php echo $id;?>"/>
    <div class="row mb-3">
        <div class="col-sm-4">
                <table>
                       
                        <tr>
                            <td>
                                <input type="text" id="ucat_id" name="cat_id" hidden value="<?php echo $id;?>"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Product Name:</h6>
                                <input type="text" id="productName" placeholder="Enter Product Name..." class="form-control" value="<?php echo $name;?>"/> <br>
                            </td>
                        </tr>
                        <tr>
                            <td>

                                    <?php
                                    
                                        // php select option value from database

                                        $hostname = "localhost";
                                        $username = "root";
                                        $password = "";
                                        $databaseName = "dragonfoods";

                                        // connect to mysql database

                                        $connect = mysqli_connect($hostname, $username, $password, $databaseName);

                                        // mysql select query
                                        $query = "SELECT * FROM `category_table` order by cat_id DESC";

                                        // for method 1

                                        $result1 = mysqli_query($connect, $query);
                                    ?>
                                    
                                    <select id="category" style="color: #fff;background-color: #343a40; border-color: var(--orange);" class="btn">
                                        <option>Select Category</option>
                                        <?php while($row1 = mysqli_fetch_array($result1)):;?>

                                        <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

                                        <?php endwhile;?>

                                    </select>
                                    
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br><h6>Write Description:</h6>
                            </td>
                        </tr>
                         <tr>
                            <td> 
                                    <textarea id="description" class="form-control" ><?php echo htmlspecialchars($description); ?></textarea><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h6>Product Price:</h6>
                                <input type="text" id="price" placeholder="Enter Price..." class="form-control" value="<?php echo $price;?>"/><br>
                            </td>
                        </tr>
                    <tr>
                            <td>
                                <h6>Product Size:</h6>
                                <input type="text" id="size" placeholder="Enter Size..." class="form-control" value="<?php echo $size;?>" /><br>
                            </td>
                    </tr>
                    <tr>
                        <td>
                         <img id="preview" style="width:70px;" src="<?php echo $image;?>" /><br><br>
                        </td>
                    </tr>
                        <tr>    
                            <td>
                                <form>
                                  
                                  <div class="custom-file">
                                   <!--- <input type="file" name="image[]" id="image" multiple accept=".jpg, .png, .gif" class="custom-file-input">-->
                                    <input class="custom-file-input form-control" type="file" onchange="showMyImage(this,'preview')"  id="imgURL"/><br>
                                    
                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                  </div>
                                </form>

                                <script>
                                // Add the following code if you want the name of the file appear on select
                                $(".custom-file-input").on("change", function() {
                                  var fileName = $(this).val().split("\\").pop();
                                  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                });
                                </script>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input class='btn btn-success' type="button" id="update" name="update" value="Update"/><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <br><input class='btn btn-danger' type="button" onclick="$('#P_edit-form').slideUp();" name="cancel" value="Cancel"/><br>
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
		    	var p_id = $('#ucat_id').val();
                var product_name = $('#productName').val();
                var category = $('#category').val();
                var description = $('#description').val();
                var price = $('#price').val();
                var size = $('#size').val();
                var img = $('#preview').attr('src');
		        
                //alert(img);

			$.ajax({
				url:"ProductEditAction.php",
				type:"POST",
				data: {p_id:p_id,product_name:product_name,category:category,description:description,price:price,size:size,img:img},
				success: function(data){
					
					if(data==1){
					    	$('#ucat_id').val('');
			                $('#productName').val('');
			                $('#description').val('');
			                $('#price').val('');
			                $('#size').val('');
			                $('#preview').attr('src="images/noimage.png"');
			                $('#P_edit-form').slideUp();
						$.get('ProductView.php',function(data){
						  $('#P_data-show').html(data);
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