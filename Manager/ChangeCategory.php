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
      background-color: #421184 !important;
    } 

</style>
    
    <div id="body" style=" ">
        <br>

        <div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;"> 
          <div class="card-header">
            <h5 style="color: black; font-weight: bold">Change Category List</h5>
          </div>
          <div class="card-body" >
       
                    <input class="input_field" type="text" id="change_cata" placeholder="Enter Category ID" required/> <br><br>

                    <input class="btn btn-primary Addbtn" style="border-color: #795548; background-color: #bb5e12; color: #efefed;" type="button" id="Change" value="Change Category"/><br/><br/>

                    <label id="status" class="status"></label>        

          </div>
        </div>

    </div>



<?php include 'inc/footer.php';?>
            

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
            
            $('#Change').click(function(){
                
                var change_ID = $('#change_cata').val();
                $.ajax({
                    url:"ChangeCategoryAction.php",
                    type:"POST",
                    data: {change_ID : change_ID},
                    success: function(data){
                        
                        if(data == 'success'){ 
                           var change_cata = $('#change_cata').val('');
                           document.getElementById("status").innerHTML= "Change Success";
                        }
                        else{
                           document.getElementById("status").innerHTML= "Change Problem";
                        }
                    }
                })
            })
        
        })
        
    </script>