<?php
session_start();
ob_start();

include("config.inc.php"); //include config file


if (isset($_POST['btnCart'])) {
    
                $Quanty = $_POST['quantity'];
                 $p=$_GET["p_id"];
                $U_id = $_SESSION['name'];
                
               
                
                $sql = "INSERT into orders (p_id,user_id,O_quantity	) VALUES ('".$p."','".$U_id."','".$Quanty."')";
    
    
                $result = mysqli_query($mysqli_conn , $sql);


                 if($rows = mysqli_fetch_array($result)){
                     
                     header("Location: product-details.php");
                     
                 };
    
                 
    
    
    }





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product Details | E-Shopper</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
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
										<li><a href="login.html">Login</a></li> 
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
				<div class="col-sm-3">
					<div class="left-sidebar">
						
						
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="#"> <span class="pull-right">(50)</span>Samsung</a></li>
									<li><a href="#"> <span class="pull-right">(56)</span>One Plus</a></li>
									<li><a href="#"> <span class="pull-right">(27)</span>Iphone</a></li>
									<li><a href="#"> <span class="pull-right">(32)</span>Lg</a></li>
									<li><a href="#"> <span class="pull-right">(5)</span>Huawei</a></li>
									<li><a href="#"> <span class="pull-right">(9)</span>Asus</a></li>
									<li><a href="#"> <span class="pull-right">(4)</span>Dell</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Hp</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Lenova</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Canon</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Nikon</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Panasonic</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Sony</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Jbl</a></li>
                                    <li><a href="#"> <span class="pull-right">(4)</span>Moki</a></li>
                                     <li><a href="#"> <span class="pull-right">(4)</span>Jabra</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
                        
<?php
        $p=$_GET["p_id"];
        echo $p;
$sql3='SELECT * FROM product  where p_id='.$_GET["p_id"];
$result3 = mysqli_query($mysqli_conn , $sql3);


while($rows3 = mysqli_fetch_array($result3))  
{
                        ?>
						<div class="col-sm-5">
							<div class="view-product">
								<img src="<?php echo $rows3['p_photo'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>
							
							
								

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2><?php echo $rows3['p_name'];?></h2>
								
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span><?php echo $rows3['unit_price'];?></span>
									<label>Available:</label>
									<input type="text" value="<?php echo $rows3['quantity'];?>" />
                                    
                                    <span class="pQuantity">Quantity: </span>
                           <input type="hidden" name="Avalible" value="<?php echo $rows3['quantity']?>">
                            <span> 
                            <input type="number" name="quantity"
                   min="0" max="100" step="1" value="0">
                          </span>
                                    
                                    
                                    
                                    
									<button type="button" class="btn btn-fefault cart"  name="btnCart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
                                    <button type="button" class="wishBtn btn btn-success">
										<i class="fa fa-shopping-cart"></i>
										Wish List
									</button>
                                   <a href="compare.php?p_id=<?php echo $rows3['p_id'];?>"><button type="button" class="w3-button w3-teal">
										<i class="fa fa-shopping-cart"></i>
										Add to compare
									</button></a>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
<?php } ?>						
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								
								
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
                                <table>
                                    <tr>
                                        <th>FeatureName</th> 
                                        <th>Details</th> 
                                    </tr>
								
<?php
        $p=$_GET["p_id"];
        echo $p;
 if($p==1 || $p==2 || $p==3 || $p==4) {                         
                                
$sql4='SELECT * FROM mobile_info  where m_id='.$_GET["p_id"];
$result4 = mysqli_query($mysqli_conn , $sql4);


while($rows4 = mysqli_fetch_array($result4))  
    {
   
   
  
    echo '<tr><td>name:</td><td>' . $rows4["p_name"]. '</td>"</tr>';
	
	 
	
	 
    echo '<tr><td>Technology:</td><td>' . $rows4["technology"]. '</td>"</tr>';
	
	
    echo '<tr><td>Dimensions:</td><td>' . $rows4["dimensions"]. '</td>"</tr>';
	
	
    echo '<tr><td>Weight:</td><td>' . $rows4["weight"]. '</td>"</tr>';
	
	 
    echo '<tr><td>SIM:</td><td>' . $rows4["sim"]. '</td>"</tr>';
	
	
    echo '<tr><td>Dis_Type:</td><td>' . $rows4["disp_type"]. '</td>"</tr>';
	
	
	
	 
    echo '<tr><td>Dis_Size:</td><td>' . $rows4["disp_size"]. '</td>"</tr>';
     echo '<tr><td>Dis_Resolution:</td><td>' . $rows4["disp_resolution"]. '</td>"</tr>';
	
	 
    echo '<tr><td>OS:</td><td>' . $rows4["Os"]. '</td>"</tr>';
	
	
    echo '<tr><td>Chipset:</td><td>' . $rows4["chipset"]. '</td>"</tr>';
	
	
    echo '<tr><td>GPU:</td><td>' . $rows4["GPU"]. '</td>"</tr>';
	
	 echo '<tr><td>CPU:</td><td>' . $rows4["CPU"]. '</td>"</tr>';
   
	
	 
    echo '<tr><td>Internal_Memory:</td><td>' . $rows4["Memory"]. '</td>"</tr>';
	
	
    echo '<tr><td>Wlan:</td><td>' . $rows4["Wlan"]. '</td>"</tr>';
	
	
    echo '<tr><td>Bluetooth:</td><td>' . $rows4["Bluetooth"]. '</td>"</tr>';
	
	
    echo '<tr><td>USB:</td><td>' . $rows4["USB"]. '</td>"</tr>';
	
	
    echo '<tr><td>Battery:</td><td>' . $rows4["Battery"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Color:</td><td>' . $rows4["colors"]. '</td>"</tr>';
       
	
    echo '<tr><td>Price:</td><td>' . $rows4["Price"]. '</td>"</tr>';
       
    
	
	

}
 }
                                    
else if($p==5 || $p==6 || $p==7 || $p==8) {                         
                                
$sql4='SELECT * FROM laptop_info  where l_id='.$_GET["p_id"];
$result4 = mysqli_query($mysqli_conn , $sql4);


while($rows4 = mysqli_fetch_array($result4))  
    {
   
   
  
    echo '<tr><td>name:</td><td>' . $rows4["p_name"]. '</td>"</tr>';
	
	 
	
	 
    echo '<tr><td>Processor:</td><td>' . $rows4["Processor"]. '</td>"</tr>';
	
	
    echo '<tr><td>Os:</td><td>' . $rows4["Os"]. '</td>"</tr>';
	
	
    echo '<tr><td>Graphics:</td><td>' . $rows4["Graphics"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Memory:</td><td>' . $rows4["Memory"]. '</td>"</tr>';
	
	
    echo '<tr><td>Storage:</td><td>' . $rows4["Storage"]. '</td>"</tr>';
	
	
	
	 
    echo '<tr><td>Camera:</td><td>' . $rows4["Camera"]. '</td>"</tr>';
     echo '<tr><td>Battery:</td><td>' . $rows4["Battery"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Display:</td><td>' . $rows4["Display"]. '</td>"</tr>';
	
	
    echo '<tr><td>Touch_screen:</td><td>' . $rows4["Touch_screen"]. '</td>"</tr>';
	
	
    echo '<tr><td>Audio:</td><td>' . $rows4["Audio"]. '</td>"</tr>';
	
	 echo '<tr><td>Port:</td><td>' . $rows4["Port"]. '</td>"</tr>';
   
	
	 
    echo '<tr><td>Connectivity:</td><td>' . $rows4["Connectivity"]. '</td>"</tr>';
	
	
    echo '<tr><td>Dimensions:</td><td>' . $rows4["Dimensions"]. '</td>"</tr>';
	
	
    echo '<tr><td>Weight:</td><td>' . $rows4["Weight"]. '</td>"</tr>';
	
	
    echo '<tr><td>Price:</td><td>' . $rows4["Price"]. '</td>"</tr>';
	
	
    
    
	
	

}
 }
                                    
                                    
 else if($p==9 || $p==10 || $p==11 || $p==12) {                         
                                
$sql4='SELECT * FROM camera_info  where c_id='.$_GET["p_id"];
$result4 = mysqli_query($mysqli_conn , $sql4);


while($rows4 = mysqli_fetch_array($result4))  
    {
   
   
  
    echo '<tr><td>name:</td><td>' . $rows4["c_Name"]. '</td>"</tr>';
	
	 
	
	 
    echo '<tr><td>lens_mount:</td><td>' . $rows4["lens_mount"]. '</td>"</tr>';
	
	
    echo '<tr><td>total_pixel:</td><td>' . $rows4["total_pixel"]. '</td>"</tr>';
	
	
    echo '<tr><td>effective_pixel:</td><td>' . $rows4["effective_pixel"]. '</td>"</tr>';
	
	 
    echo '<tr><td>img_quality:</td><td>' . $rows4["img_quality"]. '</td>"</tr>';
	
	
    echo '<tr><td>white_balance:</td><td>' . $rows4["white_balance"]. '</td>"</tr>';
	
	
	
	 
    echo '<tr><td>aspect_ratio:</td><td>' . $rows4["aspect_ratio"]. '</td>"</tr>';
     echo '<tr><td>photo_4k:</td><td>' . $rows4["photo_4k"]. '</td>"</tr>';
	
	 
    echo '<tr><td>focus:</td><td>' . $rows4["focus"]. '</td>"</tr>';
	
	
    echo '<tr><td>battery:</td><td>' . $rows4["battery"]. '</td>"</tr>';
	
	
    echo '<tr><td>dimension:</td><td>' . $rows4["dimension"]. '</td>"</tr>';
	
	 echo '<tr><td>weight:</td><td>' . $rows4["weight"]. '</td>"</tr>';
   
	
	 
    echo '<tr><td>connectivity:</td><td>' . $rows4["connectivity"]. '</td>"</tr>';
	
	
    echo '<tr><td>Price:</td><td>' . $rows4["price"]. '</td>"</tr>';
	
	
    
    
	
	

}
 }
                                                                   
 else if($p==13 || $p==14 || $p==15 || $p==16) {                         
                                
$sql4='SELECT * FROM earphone_info  where e_id='.$_GET["p_id"];
$result4 = mysqli_query($mysqli_conn , $sql4);


while($rows4 = mysqli_fetch_array($result4))  
    {
   
   
  
    echo '<tr><td>name:</td><td>' . $rows4["p_name"]. '</td>"</tr>';
	
	 
	
	 
    echo '<tr><td>Colour:</td><td>' . $rows4["Colour"]. '</td>"</tr>';
	
	
    echo '<tr><td>Type:</td><td>' . $rows4["Type"]. '</td>"</tr>';
	
	
    echo '<tr><td>Frequency:</td><td>' . $rows4["Frequency"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Accessories:</td><td>' . $rows4["Accessories"]. '</td>"</tr>';
	
	
    echo '<tr><td>Warranty:</td><td>' . $rows4["Warranty"]. '</td>"</tr>';
	
	
	
	 
    echo '<tr><td>Audio:</td><td>' . $rows4["Audio"]. '</td>"</tr>';
     echo '<tr><td>Bluetooth:</td><td>' . $rows4["Bluetooth"]. '</td>"</tr>';
	
	 
    echo '<tr><td>Price:</td><td>' . $rows4["Price"]. '</td>"</tr>';
	
	
   
	
    
    
	
	

}
 }
                                                                                                  
                                                                   
                                
                                ?>
                                    
                                
                             </table>   
                                
                            
                                
							</div>
							
							
							
					
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul>
									
									<p><b>Write Your Review</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Your Name"/>
											<input type="email" placeholder="Email Address"/>
										</span>
										<textarea name="cmnt" ></textarea>
                                    
										<b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
										<button type="button" class="btn btn-default pull-right">
											Submit
										</button>
									</form>
                                    
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mobile/i-phone.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mobile/LG.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mobile/one-plus.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/mobile/samsung.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/laptop/asus-lap.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/laptop/elitebook.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
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
								<li><a href="#">Online Help</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Order Status</a></li>
								<li><a href="#">Change Location</a></li>
								<li><a href="#">FAQ’s</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Quock Shop</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">T-Shirt</a></li>
								<li><a href="#">Mens</a></li>
								<li><a href="#">Womens</a></li>
								<li><a href="#">Gift Cards</a></li>
								<li><a href="#">Shoes</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Policies</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privecy Policy</a></li>
								<li><a href="#">Refund Policy</a></li>
								<li><a href="#">Billing System</a></li>
								<li><a href="#">Ticket System</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>About Shopper</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Company Information</a></li>
								<li><a href="#">Careers</a></li>
								<li><a href="#">Store Location</a></li>
								<li><a href="#">Affillate Program</a></li>
								<li><a href="#">Copyright</a></li>
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
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>