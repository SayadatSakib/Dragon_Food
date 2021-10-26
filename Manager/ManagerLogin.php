<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Manager Login</title>
<link href="css/ManagerLogin.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">

    <style type="text/css">
        body {
                background: url(ImageSrc/ManagerHome.jpg);
                background-size: cover;
             }
    </style>

</head>

<body>
   <div class="signin">

		<form action="ManagerLoginPhpCode.php" method="POST">
		<h2 style="color:#fff;">Log In</h2>
		<input type="Email" name="email" placeholder="Email address" required/><br /><br />
		<br />
		<input type="password" name="password" placeholder="Password" required/><br /><br />
		<br /><br /><br /><br /><br /><br />
		<a><input type="submit" name="submit" value="Log In"/></a><br /><br />
        
            <?php
                if(isset($_GET["status"]))
                  {
                    if($_GET["status"]=="NotOk")
                        {
                            echo "<div id='status' style='color:#F44336'>
                            <label>email or password are wrong</label>
                            </div>";
                        }
                  }
                               
            ?>


		<div id="container">
		
		</div><br /><br /><br />

		</form>
		</div>

</body>
</html>

