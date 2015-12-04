<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 11/13/15
 * Time: 2:12 AM
 */
$product_id = $_GET['product_id'];
// = get_product($product_id);
$dsn = 'mysql:host=localhost;dbname=online_market';
$username = 'root';
$password = 'password';
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
$db = new PDO($dsn, $username, $password, $options);

$query = "SELECT * FROM Products WHERE id = '$product_id'";
$product = $db->query($query)->fetch();
$query_counter = "UPDATE Products SET visit_count = visit_count + 1 WHERE id = '$product_id'";
$db->query($query_counter);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("view/header.php"); ?>

</head>
<body>
<?php include("view/navigation.php"); ?>
<div class="container">
    <h1 style="text-align:center"><?php echo $product['title']; ?></h1>
    <h2 style="text-align:center">Company: <?php echo $product['company']; ?></h2>
    <p style="text-align:center;"><img align="middle" src="<?php echo $product['image_link']; ?>" ></p>
    <p style="text-align:center;"><?php echo $product['body']; ?></p>

</div>

<div class="container">


<form class="form-horizontal center" id="savecomment" method='POST' action=''>
    <fieldset style="text-align:center">
        <h3>Add/Edit Comment</h3>
        <input type="hidden" name="artwork_id" value="<?php echo $artwork_id; ?>">
<div>
        <label class="radio-inline">
            <input type="radio" checked name="rating" id="inlineRadio1" value="1"> 1
        </label>
        <label class="radio-inline">
            <input type="radio" name="rating" id="inlineRadio2" value="2"> 2
        </label>
        <label class="radio-inline">
            <input type="radio" name="rating" id="inlineRadio3" value="3"> 3
        </label>
        <label class="radio-inline">
            <input type="radio" name="rating" id="inlineRadio3" value="4"> 4
        </label>
        <label class="radio-inline">
            <input type="radio" name="rating" id="inlineRadio3" value="5"> 5
        </label>

</div>
        <div class="col-md-offset-3 col-md-6">
            <input id="input-21d" value="2" type="number" class="rating" min=0 max=5 step=1 data-size="sm">

            <div class="control-group">
            <label for="comment">Comment:</label>

            <textarea class="form-control" cols="2" rows="5" name="comment" id="comment"></textarea>
        </div>

        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <?php if(!isset($_SESSION)) :?>
                    <button type="button" name="submit" value ="Save" class="btn btn-success btn-sm save-comment" >Save Comment</button>

                <?php else :?>
                    <button type="submit" name="submit" value ="Save" class="btn btn-success btn-sm" >Save Comment</button>
                <?php endif;?>

        </div>
        </div>

    </fieldset>
</form>
</div>

<script src="lib/lib/jquery/dist/jquery.min.js")"></script>
<script src="lib/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="lib/lib/star-rating.min.js"></script>
<script src="lib/lib/DataTables-1.10.7/media/js/jquery.dataTables.min.js"></script>
<script src="lib/lib/main.js"></script>
<script>
    $('#input-21d').on('rating.change', function(event, value, caption) {
        console.log(value);
        console.log(caption);
    });

</script>
</body>
</html>