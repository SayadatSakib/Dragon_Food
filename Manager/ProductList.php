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
                <h5 style="color: black; font-weight: bold">Product List</h5>
              </div>
              <div class="card-body" >
           
                  <script type="text/javascript">
                        $(document).ready(function(){
                    
                                $.get('ProductView.php',function(data){
                                $('#P_data-show').html(data);
                                })

                          })
                  </script>
           
     
                <div id="P_edit-form"></div>
                <div style="overflow-x:auto;" id="P_data-show"></div>      

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

    </script>   