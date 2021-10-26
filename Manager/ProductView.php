<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "Select * from produc_table order by p_id DESC";

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
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Size</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                             foreach($result as $key=>$res){
                                echo "<tr >";
                                    echo "<td>".$res['p_id']."</td>";
                                    echo "<td>".$res['p_name']."</td>";
                                    echo "<td>".$res['category']."</td>";
                                    echo "<td>".$res['description']."</td>";
                                    echo "<td>".$res['price']."</td>";
                                    echo "<td>".$res['size']."</td>";
                                    echo "<td><img width='30px' src='".$res['image']."'/></td>";                                   
                                    echo "<td><button id=".$res['p_id']." class='btn edit'><i class='fa fa-edit'></i></button> |
                                    <button id=".$res['p_id']." class='btn delete'><i class='fa fa-trash'></i></button></td>";                     
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>


<script type="text/javascript">
    $(document).ready(function(){
        
        $('.edit').click(function(){
            var p_id = $(this).attr('id');
            //alert(cat_id);
            $.ajax({
                url:"ProductEdit.php",
                type:"POST",
                data: {p_id:p_id},
                success: function(data){
                        $('html,body').animate({scrollTop:0}, 'slow', function(){
                        $('#P_edit-form').slideDown();
                        $('#P_edit-form').html(data);
                    })
                }
            });
        });
        
        $('.delete').click(function(){
            var p_id = $(this).attr('id');
            
            $.ajax({
                url:"ProductDelete.php",
                type:"POST",
                data: {p_id:p_id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('ProductView.php',function(data){
                          $('#P_data-show').html(data);
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


