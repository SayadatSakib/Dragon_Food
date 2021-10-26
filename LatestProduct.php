
<?php
    header("Access-Control-Allow-Origin: *"); /*sir Question*/

    include_once 'Crud.php';

    $crud = new Crud();

    $query = "Select * from produc_table order by p_id DESC";

    $result = $crud->getData($query);
?>

<style>
    .card a:link {
      text-decoration: none;
    }

    .card a:visited {
      text-decoration: none;
    }

    .card a:hover {
      text-decoration: none;
    }

    .card a:active {
      text-decoration: none;
    }
</style>
<div class="row">

<?php

    foreach($result as $key=>$res){ ?>
        

       <?php echo '<br>' ?>
            <div class="col-sm-3">
                <div class="card">
                    <a href="#">
                       <div class="card-body justify-content-center">
                    <img style="width:200px; height: 120px" src="<?php echo $res['image'] ?>"/>
                        <h6>Price BDT: <?php echo $res['price'] ?></h6>
                        
                        <p><?php echo $res['p_name'] ?><br><?php echo $res['description'] ?></p>
                  </div> 
                    </a>

            </div>
            </div>
    <?php } ?>

</div>
  