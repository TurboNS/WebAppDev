<?php require_once 'templates/header.php';?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>My Account</title>
        	<meta charset="utf-8">
        	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        	<meta name="viewport" content="width=device-width, initial-scale=1">
        	<meta name="description" content="">
        	<meta name="author" content="inventory, inventory, furniture, IMS">
        	<link href="css/custom.css" rel="stylesheet"> <!-- Custom CSS -->
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <!-- Latest compiled and minified CSS -->
        	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"> <!-- Optional theme -->
        	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script><!-- Latest compiled and minified JavaScript -->
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><!-- Latest jQuery library -->
        	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script> <!-- Latest jQuery UI library -->
        	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css"> <!-- Latest jQuery Smoothness library -->
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/custom.css" rel="stylesheet">
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.min.js"></script>
        </head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Inventory Management System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="account.php">My Account</a>
                    </li>
                    
                    <li>
                        <a href="changepassword.php">Change Password</a>
                    </li>
                    
                    <li>
                        <a href="message.php">Send Message</a>
                    </li>
                    
                    <li>
                        <a href="logout.php">Signout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
<div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="list-group">
                    <a href="add.php" class="list-group-item">Add Furniture</a>
                    <a href="remove.php" class="list-group-item">Remove Furniture by ID</a>
                    <a href="search.php" class="list-group-item">Search Furniture</a>
                    <a href="currentstock.php" class="list-group-item">Current Stock</a>
                </div>
            </div>

            <div class="col-md-9">
            	<p class="lead">My Account</p>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-horizontal myaccount" role="form">
                        <div class="form-group">
                            <span for="inputEmail3" class="col-sm-4 control-span">Name</span>
                            <div class="col-sm-8">
                                <p> <?php echo $_SESSION['name']; ?> </p>
                            </div>
                        </div>
                        <div class="form-group">
                            <span for="inputPassword3" class="col-sm-4 control-span">Email</span>
                            <div class="col-sm-8">
                                <p> <?php echo $_SESSION['email']; ?> </p>
                            </div>
                        </div>
                </form>
            </div>
        </div>

    </div>
<div class="container"> <!-- start footer container -->
	<hr>
<footer> <!-- Footer Started -->
	<div class="row">
		<div class="col-lg-12">
			<p>Copyright &copy; Inventory Management System 2016</p>
		</div>
	</div>
</footer>
</div> <!-- end of footer container -->
</body>
</html>