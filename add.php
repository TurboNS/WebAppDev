<?php 
if (isset($_POST['insert']))
{
    $xml = new DomDocument("1.0","UTF-8");
    $xml->load('xml/furnitures.xml');

    $id = $_POST['id']; //Holding the value for furniture id
    $name = $_POST['name']; //Holding the value for furniture name
    $type = $_POST['type']; //Holding the value for furniture type
    $color = $_POST['color']; //Holding the value for furniture color
    $price = $_POST['price']; //Holding the value for furniture price

    $furnituresTag = $xml->getElementsByTagName("furnitures")->item(0);

    $furnitureTag = $xml->createElement("furniture");
        $idTag = $xml->createElement("id", $id);
        $nameTag = $xml->createElement("name", $name);
        $typeTag = $xml->createElement("type", $type);
        $colorTag = $xml->createElement("color", $color);
        $priceTag = $xml->createElement("price", $price);
        
            //Appending the child element in the furniture element start here
            $furnitureTag->appendChild($idTag);
            $furnitureTag->appendChild($nameTag);
            $furnitureTag->appendChild($typeTag);
            $furnitureTag->appendChild($colorTag);
            $furnitureTag->appendChild($priceTag);
            //Appending the child element in the furniture element ends here
    
    //Appending the all furniture tag inside furnitures(root) tag starts
    $furnituresTag->appendChild($furnitureTag);
    //Appending the all furniture tag inside furnitures(root) tag starts
    
    $xml->save('xml/furnitures.xml'); //Writing content in the furnitures.xml file
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

    <title>Inventory Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
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
                <a class="navbar-brand" href="index.php">Inventory Management System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="aboutus.php">About Us</a>
                    </li>
                    <li>
                        <a href="products.php">Products</a>
                    </li>
                    <li>
                        <a href="contactus.php">Contact Us</a>
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
                    <a href="remove.php" class="list-group-item">Remove Furniture</a>
                    <a href="search.php" class="list-group-item">Search Furniture</a>
                    <a href="currentstock.php" class="list-group-item">Current Stock</a>
                </div>
            </div>

            <div class="col-md-6">

            <form class="form-horizontal" role="form" method="POST" action="add.php">
            <p class="lead">Add Furniture</p>
                
                    <div class="form-group">
                        <label class="col-sm-2 control-label">Furniture#</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="id">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name">
                            </div>
                    </div>              

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Type</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="type">
                            </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Color</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="color">
                            </div>
                    </div> 

                    <div class="form-group">
                        <label class="col-sm-2 control-label">Price</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="price">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                            <div class="col-sm-10">
                                <button type = "submit" class="btn btn-primary" name="insert">Add to Stock</button>
                            </div>
                    </div>
            </form>
            <br />
                <div class="row">





                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Inventory Management System 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->


</body>

</html>
