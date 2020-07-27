<?php

ob_start();
session_start();


include("config.inc.php"); //include config file


if(isset($_POST['btnDelete']))
{
    include_once 'DB_Class.php';
        $d = new DB();
           
                $res = $d->DeleteUser($_SESSION['name']);
                if($res === true)
                {
                   // echo "sd";
                    session_destroy();
                    header("Location: index.php");
                }
                else
                {
                    echo mysqli_error($d->con);
                } 
                
}
else if(isset($_POST['btnUpdate']))
{
    
    header("Location: update.php");
}




?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | MegaDeals</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="userac.css">
    
    
    
    <script>
            var varname="";
               window.onload = function(){
                var varname = '<?php echo $_SESSION["name"]; ?>';
                //alert(varname);
                if(varname!="")
                    {
                        document.getElementById('login').innerHTML='Logout'
                       // document.getElementById('login').onclick();
                    }
                  
               // document.getElementById('player_1_score').innerHTML = localStorage.getItem("score1");
                //document.getElementById('player_2_score').innerHTML = localStorage.getItem("score2");
            }
             
                function Login() {
                        if(varname!="")
                           {
                               varname="";
                               <?php //session_destroy();?>
                               //document.getElementById('login').href='login.php';
                               window.location='index.php';
                               
                           }
                     
                   }
            
        </script>    
    
    
    
    
    
    
</head><!--/head-->


<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +8801842740523</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> HSSS@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href=""><i class="fa fa-facebook"></i></a></li>
								<li><a href=""><i class="fa fa-twitter"></i></a></li>
								<li><a href=""><i class="fa fa-linkedin"></i></a></li>
								<li><a href=""><i class="fa fa-dribbble"></i></a></li>
								<li><a href=""><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-md-4 clearfix">
						<div class="logo pull-left">
							<a href="index.html"><img src="images/home/mega.jpg" alt="" /></a>
						</div>
						<div class="btn-group pull-right clearfix">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
								    BD
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">INDIA</a></li>
									<li><a href="">PAKISTAN</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									Taka
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="">Indian_Rupee</a></li>
									<li><a href="">Pakistani_Rupee</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-8 clearfix">
						<div class="shop-menu clearfix pull-right">
							<ul class="nav navbar-nav">
                                <li><a href="chat.php"><i class="fa fa-envelope-open"></i>Chat</a></li>
								<li><a href="userac.php"><i class="fa fa-user"></i> Account</a></li>
								<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<li ><a  href="login.php" onclick="Login();" id="login"><i class="icon fa fa-lock" ></i>Login</a></li>
                                <li><a href="Registration.php"><i class="fa fa-key"></i> sign-up</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Product<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.php">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.php">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#about">About<i ></i></a>
                                   
                                </li> 
								<li><a href="404.html">Compare</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						
				     <form method="post">
                     <div class="input-group stylish-input-group">
                    <input type="text" class="form-control"  placeholder="Search" name="txtSearch" >
                    <span class="input-group-addon">
                        <button type="submit" name="btnSearch">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>  
                    </span>
                    </div>
                    </form>
						</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
         
        
         <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!--- Fixed Add -->
                <img src="images/mac.jpg" alt="">

            </div>
            <div class="col-md-9">
                <div class="acHead">
                    <span class="fa-stack fa-lg">
  <i class="fa fa-square-o fa-stack-2x"></i>
  <i class="fa fa-user-o fa-stack-1x"></i>
</span>
                    <span>ACCOUNT INFORMATION</span>

                </div><div class="acBox table-responsive">
                    <table class="Table">
                          <?php 
                           $User_name= $_SESSION['name'];
                        $sql="select * from user where name='$User_name'";
                         $result = mysqli_query($mysqli_conn , $sql);


                        while($rows = mysqli_fetch_array($result))  
                        {
                        
                        
                            ?>
                        <tr>                           
                         <td>
                         <span class="nameHeaderPortion">Name </span></td>   
                         <td><span>
                             <?php echo $rows['name'];?>
                         </span></td>   

                        </tr>
                        <tr>
                            <td><span class="nameHeaderPortion"> Email </span></td>
                            <td><span> <?php echo $rows['email'];?></span></td>
                        </tr>
                       
                        <tr>
                            <td><span class="nameHeaderPortion">Password</span></td>
                            <td><?php echo $rows['password'];?></td>
                        </tr>
                      
                        <tr>
                            <td><span class="nameHeaderPortion">Phone Number</span></td>
                            <td><?php echo $rows['phone_number'];?></td>
                        </tr>
                       <?php 
                            }
                            ?>
                        <form method="post">
                            <tr>
                            <td colspan="2">
                                <span class=""> <input type="submit" class="cpn btn btn-info btn-sm " name="btnUpdate" value="Update Account"></span> 
                                
                                 <span class=""> <input type="submit" class="cpn btn btn-danger btn-sm "name="btnDelete" value="Delete Account"> </span>
                            </td>
                        </tr>
                        </form>
                        
                        
                
                     
                            <!-- // Total Here-->
                          

                    </table>
                    
                </div>
                
                
                
                
        
                
         
            </div>
        </div>
    </div>
        
        
        
        
        
        
    
    
    
    </section>
	
	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div id="about" class="companyinfo">
							<h2><span>Mega</span>Deals</h2>
							<p> Our website is a transaction of  selling online of essential electronics product.We provided that , how can a customer can easily see view details for a product , products comparison, and also creat easy buying system.</p>
						</div>
					</div>
					
					<div class="col-sm-3">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Service</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Online Help</a></li>
								<li><a href="">Contact Us</a></li>
								<li><a href="">Order Status</a></li>
								<li><a href="">Change Location</a></li>
								<li><a href="">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">T-Shirt</a></li>
								<li><a href="">Mens</a></li>
								<li><a href="">Womens</a></li>
								<li><a href="">Gift Cards</a></li>
								<li><a href="">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Terms of Use</a></li>
								<li><a href="">Privecy Policy</a></li>
								<li><a href="">Refund Policy</a></li>
								<li><a href="">Billing System</a></li>
								<li><a href="">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="">Company Information</a></li>
								<li><a href="">Careers</a></li>
								<li><a href="">Store Location</a></li>
								<li><a href="">Affillate Program</a></li>
								<li><a href="">Copyright</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Your email address" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Get the most recent updates from <br />our site and be updated your self...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2018 Alisha Inc. All rights reserved.</p>
					
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>