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

    .Addbtn:hover
    {
      background-color: #070705 !important;
    } 

</style>
    
    <div id="body" style=" ">
        <br>

        <div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;"> 
          <div class="card-header">
            <h5 style="color: black; font-weight: bold">Average Price</h5>
          </div>
          <div class="card-body">
                    <input class="input_field" type="text" id="Add_cata" placeholder="Enter Product ID" required/> <br><br>
                    <input class="btn btn-primary Addbtn" style="border-color: #795548; background-color: #20130b; color: #efefed;" type="button" id="add" value="Average Price"/><br/><br/>

                    <label id="status" class="status"></label>        

          </div>
        </div>

    </div>



<?php include 'inc/footer.php';?>
            

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $('#add').click(function(){
                var Add_cata = $('#Add_cata').val();
                $.ajax({
                    url:"AveragePriceAction.php",
                    type:"POST",
                    data: {Add_cata : Add_cata},
                    success: function(data){
                        
                        if(data == 'success'){ 
                           document.getElementById("status").innerHTML= "Success";
                           var Add_cata = $('#Add_cata').val('');
                        }
                        else{
                           document.getElementById("status").innerHTML= "Problem";
                        }
                    }
                })
            })
        
        })
        
    </script>