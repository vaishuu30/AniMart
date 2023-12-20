<?php
    session_start();
    require 'check_if_added.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

<link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

<link rel="stylesheet" href="assets/css/owl-carousel.css">

<link rel="stylesheet" href="assets/css/lightbox.css">
    </head>
    <body>
        <div>
            <?php
                require 'header.php';
            ?>

            </div>
            <section class="section" id="products">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Latest Products</h2>
                        <span>Check out all of our products.</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="item">
                        <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-secondary">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=1" name="add" value="add" class="btn btn-outline-secondary ">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-secondary">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=2"  name="add" value="add" class="btn btn-outline-secondary">Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-secondary">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=3" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-secondary">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=4" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" >Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=5" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-secondary">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=6" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" >Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=7" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=8" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="item">
                    <div class="thumb">
                            <div class="hover-content">
                                <ul>
                                    
                                    <li><a href="cart.php"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div><a href="cart.php">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4>Classic Spring</h4>
                            <span>$120.00</span>
                            <?php if(!isset($_SESSION['email'])){  ?>
                        <p><a href="login.php" role="button" class="btn btn-outline-secondary">Buy Now</a></p>
                        <?php
                        }
                        else{
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                            }else{
                                ?>
                                <a href="cart_add.php?id=9" class="btn btn-outline-secondary" name="add" value="add" >Add to cart</a>
                                <?php
                            }
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="first-item">
                        <ul>
                            <li><a href="#">Vaishnavi Jadhav</a></li>
                            <li><a href="#">jadhavvaishnavi72.com</a></li>
                            <li><a href="#">+91 88057 06084</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Cloths Shopping</a></li>
                        <li><a href="#">Marchendise Shopping</a></li>
                        <li><a href="#">Manga Shopping</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        </div>
        

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/accordions.js"></script>
<script src="assets/js/datepicker.js"></script>
<script src="assets/js/scrollreveal.min.js"></script>
<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/imgfix.min.js"></script> 
<script src="assets/js/slick.js"></script> 
<script src="assets/js/lightbox.js"></script> 
<script src="assets/js/isotope.js"></script> 

<!-- Global Init -->
<script src="assets/js/custom.js"></script>

<script>

    $(function() {
        var selectedClass = "";
        $("p").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("."+selectedClass).fadeOut();
        setTimeout(function() {
          $("."+selectedClass).fadeIn();
          $("#portfolio").fadeTo(50, 1);
        }, 500);
            
        });
    });

</script>

    </body>
</html>
