<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Online Market Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="home.php">Products</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Stats
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="stats.php">All</a></li>
                        <li><a href="stats.php?company=arcadia">Arcadia</a></li>
                        <li><a href="#">Discover Istanbul</a></li>
                        <li><a href="#">Footprints Preschool</a></li>
                        <li><a href="#">Shunur Cycles</a></li>
                        <li><a href="#">Yummy Tummy Fast Food</a></li>


                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">


                <!--                    --><?php //if($this->session->userdata('logged_in') == 1):?>
                <!--                        <li><a href="--><?php //echo site_url('logout') ?><!--">Logout</a></li>-->
                <!--                    --><?php //else:?>
                <li><a href="#">Register</a></li>
                <li><a href="login.php">Login</a></li>
                <!--                    --><?php //endif;?>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>