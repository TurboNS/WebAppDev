<?php require_once 'templates/header.php';?>
<?php 
    if( !empty( $_POST )){
        try {
            $user_obj = new Cl_User();
            $data = $user_obj->account( $_POST );
            if($data)$_SESSION['success'] = PASSOWRD_CHANAGE_SUCCESS;
        } catch (Exception $e) {
            $_SESSION['error'] = $e->getMessage();
        } 
    }
?>
<!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Change Password!</title>
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
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="account-form" method="post" class="form-horizontal myaccount" role="form">
                        <div class="form-group">
                            <span for="inputPassword3" class="col-sm-3 control-span">Current Password</span>
                            <div class="col-sm-6">
                                <input name="old_password" id="old_password" type="text" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <span for="inputPassword3" class="col-sm-3 control-span"> New Password</span>
                            <div class="col-sm-6">
                                <input name="password" id="password" type="text" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <span for="inputPassword3" class="col-sm-3 control-span"> Confirm Password</span>
                            <div class="col-sm-6">
                                <input name="confirm_password" id="confirm_password" type="text" class="form-control">
                                <span class="help-block"></span>
                            </div>
                        </div>
                        <input type="hidden" id="user_id" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                        <input type="hidden" id="email" value="<?php echo $_SESSION['email']; ?>" class="form-control"/>
                        
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-8">
                                <button type="submit" class="btn btn-primary">Change Password</button>
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
</div> 
</div> <!-- end of footer container -->
<script src="js/jquery.validate.min.js"></script>
<script src="js/account.js"></script>  
</body>
</html>