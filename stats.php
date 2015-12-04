
<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 11/13/15
 * Time: 2:12 AM
 */
$dsn = 'mysql:host=localhost;dbname=online_market';
$username = 'root';
$password = 'password';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$db = new PDO($dsn, $username, $password, $options);

//$query = "SELECT * FROM Products";
//$products = $db->query($query)->fetchAll();

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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" crossorigin="anonymous">

    <link rel="stylesheet" href="lib/lib/jquery.dataTables.min.css" />

    <link rel="stylesheet" href="lib/lib/main.css" />
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<?php include("view/navigation.php"); ?>


<div class="container">


    <div class="fb-like" data-href="http://localhost:63342/termproj272/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
<table class="table products-table table-hover table-striped">
    <thead>
    <tr>
        <th>Name</th>
        <th>Company</th>
        <th>Price</th>
        <th>Visit Count</th>

    </tr>
    </thead>
    <tbody>

    <?php
    foreach($products as $p):?>
        <tr>
<!--            <td><a href="?action=view_product&amp;product_id=--><?php //echo $p['id']; ?><!--">--><?php //echo $p['title'];?><!--</a></td>-->
            <td><a href="product.php?product_id=<?php echo $p['id']; ?>"><?php echo $p['title'];?></a></td>
            <td><?php echo $p['company'];?></td>
            <td><?php echo $p['price'];?></td>
            <td><?php echo $p['visit_count'];?></td>

        </tr>
    <?php endforeach;?>


    </tbody>
</table>
</div>

<script src="lib/lib/jquery/dist/jquery.min.js")"></script>
<script src="lib/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="lib/lib/DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
<script src="lib/lib/main.js"></script>

<?php //include 'view/header.php'; ?>
<!---->
<?php //include 'view/footer.php'; ?>
</body>
</html>