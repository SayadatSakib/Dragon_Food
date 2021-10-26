<?php

    session_start();
    if(!isset($_SESSION['m_email']))
    {
        header("location:ManagerLogin.php");
    }
    else {
    $now = time(); // Checking the time now when home page starts.

    if ($now > $_SESSION['m_expire']) {
        session_destroy();
        //header("location:ManagerLogin.php");
    }
    }

?>

<?php include 'inc/header.php';?>


<style type="text/css">



</style>
    
    <div id="body" style=" ">
        <br>

            <div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;"> 
              <div class="card-header">
                <h5 style="color: black; font-weight: bold">Add Product</h5>
              </div>
              <div class="card-body" >
           
                    <table>
                           
                            <tr>
                                <td>
                                    <input type="text" id="productName" placeholder="Enter Product Name..." class="form-control" /> <br>
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
                                        <textarea id="description" class="form-control"></textarea><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="text" id="price" placeholder="Enter Price..." class="form-control" /><br>
                                </td>
                            </tr>
                        <tr>
                                <td>
                                    <input type="text" id="size" placeholder="Enter Size..." class="form-control" /><br>
                                </td>
                        </tr>
                        <tr>
                            <td>
                             <img id="preview" style="width:70px;" src="images/noimage.png" /><br><br>
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
                                    <input type="button" name="insert" id="insert" Value="Save" class='btn btn-success'/><br>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <br><label id="status" class="status" style="color: white"></label><br>
                                </td>
                            </tr>
                        </table>     

              </div>
            </div><br>

    </div>



<?php include 'inc/footer.php';?>


<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">

        function showMyImage(fileInput,id) {
            
            console.log(fileInput);
            
            var files = fileInput.files;
            console.log(files);
            for (var i = 0; i < files.length; i++) {           
                    var file = files[i];
                    var imageType = /image.*/;     
                    if (!file.type.match(imageType)) {
                        continue;
                    }           
                    var img=document.getElementById(""+id);            
                    img.file = file;    
                    var reader = new FileReader();
                    reader.onload = (function(aImg) { 
                        return function(e) { 
                            aImg.src = e.target.result; 
                        }; 
                    })(img);
                    reader.readAsDataURL(file);
                }    
        }
        

        $(document).ready(function(){
            
            $('#insert').click(function(){
                
                var product_name = $('#productName').val();
                var category = $('#category').val();
                var description = $('#description').val();
                var price = $('#price').val();
                var size = $('#size').val();
                var img = $('#preview').attr('src');
                
                //alert(img);
                //console.log(img);

                $.ajax({
                    url:"AddProductAction.php",
                    type:"POST",
                    data: {product_name:product_name,category:category,description:description,price:price,size:size,img:img},
                    success: function(data){
                        if(data == 'success'){ 
                            var product_name = $('#productName').val('');
                            var description = $('#description').val('');
                            var price = $('#price').val('');
                            var size = $('#size').val('');
                           document.getElementById("status").innerHTML= "Add Success";
                        }
                        else{
                           document.getElementById("status").innerHTML= "Insertion Problem";
                        }
                    }
                })
                
                
            })
        
        })
        
</script>
