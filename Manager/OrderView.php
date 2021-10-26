<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "CALL ORDER_READ()";

    $result = $crud->getData($query);
?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 

<style>
    .edit {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .edit:hover {
      background-color: RoyalBlue;
    }
    .delete {
      background-color: DodgerBlue;
      border: none;
      color: white;
      padding: 2px 6px;
      font-size: 16px;
      cursor: pointer;
    }

    /* Darker background on mouse-over */
    .delete:hover {
      background-color: red;
    }
</style>

        <table class="table table-bordered table-dark table-sm">
                <thead class="bg" style="background-color: #a0c10abd;">
                    <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Product ID</th>
                        <th scope="col">Customer ID</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                             foreach($result as $key=>$res){
                                echo "<tr >";
                                    echo "<td>".$res['o_id']."</td>";
                                    echo "<td>".$res['p_Name']."</td>";
                                    echo "<td>".$res['p_price']."</td>";
                                    echo "<td>".$res['quantity']."</td>";
                                    echo "<td>".$res['t_price']."</td>";
                                    echo "<td>".$res['p_id']."</td>";
                                    echo "<td>".$res['c_id']."</td>";                                   
                                    echo "<td><button id=".$res['o_id']." class='btn edit'><i class='fa fa-edit'></i></button> | |
                                    <button id=".$res['o_id']." class='btn delete'><i class='fa fa-trash'></i></button></td>";                     
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>


<script type="text/javascript">
    $(document).ready(function(){
        
        $('.edit').click(function(){
            var o_id = $(this).attr('id');
            //alert(cat_id);
            $.ajax({
                url:"OrderEdit.php",
                type:"POST",
                data: {o_id:o_id},
                success: function(data){
                    $('html,body').animate({scrollTop:0}, 'slow', function(){
                        $('#o_edit-form').slideDown();
                        $('#o_edit-form').html(data);
                    })
                }
            });
        });
        
        $('.delete').click(function(){
            var o_id = $(this).attr('id');
            
            $.ajax({
                url:"OrderDelete.php",
                type:"POST",
                data: {o_id:o_id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('OrderView.php',function(data){
                          $('#o_data-show').html(data);
                        })
                    }
                    else
                    {
                     alert(data);   
                    }
                }
            });
        });
        
        
        
    });
</script>


