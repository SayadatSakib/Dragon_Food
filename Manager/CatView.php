<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "CALL CAT_READ()";

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
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                        <?php
                             foreach($result as $key=>$res){
                                echo "<tr >";
                                    echo "<td>".$res['cat_id']."</td>";
                                    echo "<td>".$res['cat_name']."</td>";                                   
                                    echo "<td><button id=".$res['cat_id']." class='btn edit'><i class='fa fa-edit'></i></button> | |
                                    <button id=".$res['cat_id']." class='btn delete'><i class='fa fa-trash'></i></button></td>";                     
                                echo "</tr>";
                                }
                        ?>
                </tbody>
        </table>


<script type="text/javascript">
    $(document).ready(function(){
        
        $('.edit').click(function(){
            var cat_id = $(this).attr('id');
            //alert(cat_id);
            $.ajax({
                url:"CatEdit.php",
                type:"POST",
                data: {cat_id:cat_id},
                success: function(data){
                    $('html,body').animate({scrollTop:0}, 'slow', function(){
                        $('#edit-form').slideDown();
                        $('#edit-form').html(data);
                    })
                }
            });
        });
        
        $('.delete').click(function(){
            var id = $(this).attr('id');
            
            $.ajax({
                url:"CatDelete.php",
                type:"POST",
                data: {id:id},
                success: function(data){
                    //alert(data);
                    if(data==1){
                        $.get('CatView.php',function(data){
                          $('#data-show').html(data);
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


