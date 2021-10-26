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
                <h5 style="color: black; font-weight: bold">Order List</h5>
              </div>
              <div class="card-body" >
           
                  <script type="text/javascript">
                        $(document).ready(function(){
                    
                                $.get('OrderView.php',function(data){
                                $('#o_data-show').html(data);
                                })

                          })
                  </script>
           
     
                <div id="o_edit-form"></div>
                <div style="overflow-x:auto;" id="o_data-show"></div>      

              </div>
            </div><br>

    </div>



<?php include 'inc/footer.php';?>
