<?php
if(isset($_POST['loginButton'])) {
    extract($_POST);
    echo $_POST["email"];

    $dsn = 'mysql:host=localhost;dbname=online_market';
    $username = 'root';
    $password = 'password';
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $db = new PDO($dsn, $username, $password, $options);

    $query = "SELECT * FROM Users";
    $isUserFound = false;
    $users = $db->query($query)->fetchAll();
    foreach($users as $u){
        echo $u['email'];
        if($u["email"] == $_POST["email"] && $u["password"] == $_POST["password"]) {
            session_save_path('/tmp');
            session_start();
            $_SESSION['user'] = $_POST["email"];
            echo "true";
            header( 'Location: home.php' );

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" crossorigin="anonymous">

    <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">-->

    <!--    <link rel="stylesheet" href="--><?php //echo base_url(); ?><!--lib/jquery.dataTables.min.css" />-->
    <!---->
        <link rel="stylesheet" href="lib/lib/main.css" />
</head>
<body>
<?php //include("view/navigation.php"); ?>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" id="loginDiv">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" autofocus required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                            </div>
                            <!--                                 <div class="checkbox">
                                                                <label>
                                                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                                                </label>
                                                            </div> -->
                            <!-- Change this to a button or input when using this as a form -->
                            <!-- <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->
                            <button type="submit" class="btn btn-lg btn-success btn-block" name="loginButton"> Login </button>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
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