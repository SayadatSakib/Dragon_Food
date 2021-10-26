
<!DOCTYPE html>
<html lang="en">
<head>
	<title>DragonFoods</title>
          <meta charset='utf-8'>
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- All CSS -->
        <link rel="stylesheet" href="css/Page.css">
        <!-- NavBar CSS -->
        <link rel="stylesheet" href="css/Navstyles.css">
        <link rel="stylesheet" href="css/footer.css">

        <!-- Bootstrap CSS CDN --><!--
        <link rel="stylesheet" href="css/Navstyles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        -->
        <!-- Font Awesome JS --><!--
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
        -->

          <!-- Bootstrap CSS CDN -->
	      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

          <!-- Load an icon library -->
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

          <style type="text/css">
          	.dropdown-menu > a:hover {
               background-color: #343a40;
            }
          </style>
</head>

<body>

	<div id="header">
		<nav class="navbar navbar-expand-md bg-dark navbar-dark" style="background-color: #32353b5e!important;">
		  <a class="nav-link" href="index.php"><img href="index.php" style="width: 150px; height: 40px;" src="ImageSrc/logo.gif"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="collapsibleNavbar">
		    <ul class="navbar-nav">
		      <li class="nav-item">
		        <a class="nav-link">Hi <?php if(isset($_SESSION['m_user_name'])){echo $_SESSION['m_user_name'];}?></a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Category Menu
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color: #fff;background-color: #000000;">
		          <a class="dropdown-item" href="AddCategory.php" style="color: white">Add Category</a>
		          <a class="dropdown-item" href="CategoreyList.php" style="color: white">Category list</a>
		          <a class="dropdown-item" href="ChangeCategory.php" style="color: white">Change Category</a>
		          <!--<a class="dropdown-item" href="exchangeHis.php" style="color: white">Exchange history</a>-->
		        </div>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Product Menu
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color: #fff;background-color: #000000;">
		          <a class="dropdown-item" href="AddProduct.php" style="color: white">Add Product</a>
		          <a class="dropdown-item" href="ProductList.php" style="color: white">Product list</a>
		          <a class="dropdown-item" href="ChangePrice.php" style="color: white">Change Price</a>
		          <a class="dropdown-item" href="AveragePrice.php" style="color: white">Average Price</a>
		          <!--<a class="dropdown-item" href="exchangeHis.php" style="color: white">Exchange history</a>-->
		        </div>
		      </li>
		      <li class="nav-item">
		      	<a class="nav-link" href="OrderList.php">Order List</a>
		      </li>       
		      <li class="nav-item">
		      	<a class="nav-link" href="ManagerLogOut.php">Log out</a>
		      </li>     
		    </ul>
		  </div>  
		</nav>
		<br>
	</div>