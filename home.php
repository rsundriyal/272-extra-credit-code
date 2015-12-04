<?php
// = get_product($product_id);
$dsn = 'mysql:host=localhost;dbname=online_market';
$username = 'root';
$password = 'password';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$db = new PDO($dsn, $username, $password, $options);

$company = "";

if(isset($_GET['company'])){
    $company = $_GET['company'];
}

if($company == "cycles"){
    $company = "Shunur Cycles";
    $query = "SELECT * FROM Products WHERE company = '$company'";
    $products = $db->query($query)->fetchAll();
}else if($company == "arcadia"){
    $company = "Arcadia";
    $query = "SELECT * FROM Products WHERE company = '$company'";
    $products = $db->query($query)->fetchAll();
}
else if($company == "fast_food"){
    $company = "Yummy Tummy Fast Food";
    $query = "SELECT * FROM Products WHERE company = '$company'";
    $products = $db->query($query)->fetchAll();
}else if($company == "discover_istanbul"){
    $company = "Discover Istanbul";
    $query = "SELECT * FROM Products WHERE company = '$company'";
    $products = $db->query($query)->fetchAll();
}else if($company == "footprints_preschool"){
    $company = "Footprints Preschool";
    $query = "SELECT * FROM Products WHERE company = '$company'";
    $products = $db->query($query)->fetchAll();
}
else{
    $query = "SELECT * FROM Products";
    $products = $db->query($query)->fetchAll();
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

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="lib/lib/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php include("view/navigation.php"); ?>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <div class="col-md-3">
            <p class="lead">Companies</p>
            <div class="list-group">
                <a href="home.php" class="list-group-item">All Products</a>
                <a href="home.php?company=cycles" class="list-group-item">Shunur Cycles</a>
                <a href="home.php?company=arcadia" class="list-group-item">Arcadia</a>
                <a href="home.php?company=discover_istanbul" class="list-group-item">Discover Istanbul</a>
                <a href="home.php?company=fast_food" class="list-group-item">Yummy Tummy Fast Food</a>
                <a href="home.php?company=footprints_preschool" class="list-group-item">Footprints Preschool</a>

            </div>
        </div>

        <div class="col-md-9">

<!--            <div class="row carousel-holder">-->
<!---->
<!--                <div class="col-md-12">-->
<!--                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">-->
<!--                        <ol class="carousel-indicators">-->
<!--                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>-->
<!--                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>-->
<!--                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>-->
<!--                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>-->
<!--                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>-->
<!--                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>-->
<!---->
<!--                        </ol>-->
<!--                        <div class="carousel-inner">-->
<!--                            <div class="item active">-->
<!--                                <img style="height: 318px;" class="slide-image" src="http://shunur.com/hybrid1.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <img style="height: 318px;" class="slide-image" src="http://www.apoorvpatel.com/wp-content/uploads/2015/09/vide-game-4-300x188.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <img style="height: 318px;" class="slide-image" src="http://tugceakin.com/discover-istanbul/sites/default/files/styles/large/public/field/image/fd_215-1.jpg?itok=lzY2bFs2" alt="">-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <img style="height: 318px;" class="slide-image" src="http://www.navitgaur.com/wp-content/uploads/2015/09/images2.jpg" alt="">-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <img class="slide-image" src="http://placehold.it/800x300" alt="">-->
<!--                            </div>-->
<!--                            <div class="item">-->
<!--                                <img class="slide-image" src="http://placehold.it/800x300" alt="">-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">-->
<!--                            <span class="glyphicon glyphicon-chevron-left"></span>-->
<!--                        </a>-->
<!--                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">-->
<!--                            <span class="glyphicon glyphicon-chevron-right"></span>-->
<!--                        </a>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--            </div>-->

            <div class="row">
                <?php foreach($products as $p):?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img style="width: 320px; height: 150px;" src="<?php echo $p['image_link'];?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right"><?php echo $p['price'];?> $</h4>
                                <h4 class="ellipsis"><a href="product.php?product_id=<?php echo $p['id']; ?>"><?php echo $p['title'];?></a>
                                </h4>
<!--                                <p>--><?php //echo $p['body'];?><!--</p>-->
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                </p>
                            </div>
                        </div>
                    </div>


                <?php endforeach;?>

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
                <p>Copyright &copy; Online Market Place 2015</p>
            </div>
        </div>
    </footer>

</div>
<!-- /.container -->
<script src="lib/lib/jquery/dist/jquery.min.js")"></script>
<script src="lib/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="lib/lib/DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
<script src="lib/lib/main.js"></script>
<script>
$(document).ready(function() {
$('.thumbnail').fadeIn(4000);
});
</script>
</body>

</html>
