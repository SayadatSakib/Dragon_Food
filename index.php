<?php  
    session_start();
?>
<?php include 'inc/header.php';?>



    
    <div id="body" style=" ">
    	<br>

		<div class="card" style="margin-left: 10px; margin-right: 10px; background: #1b053e94;"> 
		  <div class="card-header">
		    <h5 style="color: black; font-weight: bold">Latest Foods !</h5>
		  </div>
		  <div class="card-body" >
       
            	<div class="product-slider owl-carousel">				  
					<script type="text/javascript">
					        $(document).ready(function(){
					    
					                $.get('LatestProduct.php',function(data){
					                $('#sproduct-item').html(data);
					                })

					          })
					</script>
					<div class="product-item" id="sproduct-item"></div>
                </div>
		</div>
        </div><br>
    </div>


<?php include 'inc/footer.php';?>