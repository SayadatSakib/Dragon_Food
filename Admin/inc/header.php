
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

		    .fixed-header{
		        width: 100%;
		        position: fixed;        
		        background: #adb5bdd9;
		    }
		    .fixed-header{
		        top: 0;
		    }                   
          </style>
</head>

<body>
    <div class="fixed-header">
	<nav class="navbar navbar-expand-lg navbar-light">

	          <div id="logo">
	               <a class="navbar-brand" href="index.php">
	               <img class="img-responsive" style="display: block; max-width: 210px; height: auto; vertical-align: middle;" href="index.php" src="ImageSrc/logo.png">
	              </a>             
	          </div>    

		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		      </button>

		      <div class="collapse navbar-collapse" id="navbarSupportedContent">
		        <ul class="navbar-nav mr-auto">
		          <li class="nav-item active">
		            <a class="nav-link">Hi <?php if(isset($_SESSION['name'])){echo $_SESSION['name'];}?></a>
		          </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Manager Menu
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color: #fff;background-color: #000000;">
			          <a class="dropdown-item" href="addmanager.php" style="color: white">Add Manager</a>
			          <a class="dropdown-item" href="EditManager.php" style="color: white">Edit Manager</a>
			          <a class="dropdown-item" href="DeleteManager.php" style="color: white">Delete Manager</a>
			          <!--<a class="dropdown-item" href="exchangeHis.php" style="color: white">Exchange history</a>-->
			        </div>
			      </li>
		          <li class="nav-item">
		      	     <a class="nav-link" href="AdminLogOut.php">Log out</a>
		          </li> 			      
		        </ul>
		      </div>
    </nav>
    </div>