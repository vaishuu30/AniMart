
<header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <a href="index.php" class="nav-text navbar-brand">
                            AniMax
                        </a>
                       
                        <ul class="nav navbar-nav pull-right container-fluid">
                           <?php
                           if(isset($_SESSION['email'])){
                           ?>
                           <li><a class="nav-text" href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                           <li><a class="nav-text" href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                           <li><a class="nav-text" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                           <?php
                           }else{
                            ?>
                            <li><a class="nav-text" href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                           <li><a class="nav-text" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                           <?php
                           }
                           ?>
                       </ul>       
                    </nav>
                    
           <div class="space"></div>
                </div>
            </div>
        </div>
    </header>