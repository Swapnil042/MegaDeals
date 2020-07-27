<?php

ob_start();

include("config.inc.php"); //include config file
?>
<?php
// Start the session
session_start();

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
										<li><a href="product-details.html">Product Details</a></li> 
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
       $data = $_POST["search"];
        
        $data2 = $_SESSION["productone"];
                        
        if($data2==1 || $data2==2 || $data2==3 || $data2==4) {               
		
		$sql34 = 'SELECT * from mobile_info where m_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);
            
        $sql3 = 'SELECT * from mobile_info where p_name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);    

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        


                        ?>
						<div class="col-sm-5">
							<div class="view-product">
                                
								<img src="<?php echo $row34['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>		

						</div>             
                        
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								
							<div class="view-product">
                                
								<img src="<?php echo $row3['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>						
							</div><!--/product-information-->
						</div>
                        
                        
<?php } 
        } ?>      
                        
  <?php         
            if($data2==5 || $data2==6 || $data2==7 || $data2==8) {               
		
		$sql34 = 'SELECT * from laptop_info where l_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);
                
        $sql3 = 'SELECT * from laptop_info where p_name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);        

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        


                        ?>
						<div class="col-sm-5">
							<div class="view-product">
                                
								<img src="<?php echo $row34['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>		

						</div>             
                        
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								
							<div class="view-product">
                                
								<img src="<?php echo $row3['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>						
							</div><!--/product-information-->
						</div>
                        
                        
<?php } 
        } ?>   
                        
                        
        <?php         
            if($data2==9 || $data2==10 || $data2==11 || $data2==12) {               
		
		$sql34 = 'SELECT * from camera_info where c_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);
                
        $sql3 = 'SELECT * from camera_info where c_Name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);        

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        


                        ?>
						<div class="col-sm-5">
							<div class="view-product">
                                
								<img src="<?php echo $row34['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>		

						</div>             
                        
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								
							<div class="view-product">
                                
								<img src="<?php echo $row3['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>						
							</div><!--/product-information-->
						</div>
                        
                        
<?php } 
        } ?>                                                     
                        
          
         <?php         
            if($data2==13 || $data2==14 || $data2==15 || $data2==16) {               
		
		$sql34 = 'SELECT * from earphone_info where e_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);
                
        $sql3 = 'SELECT * from earphone_info where p_name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);        

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        


                        ?>
						<div class="col-sm-5">
							<div class="view-product">
                                
								<img src="<?php echo $row34['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>		

						</div>             
                        
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								
								
							<div class="view-product">
                                
								<img src="<?php echo $row3['Img'];?>" alt="" />
								<h3>ZOOM</h3>
							</div>						
							</div><!--/product-information-->
						</div>
                        
                        
<?php } 
        } ?>                                                                     
                        
                        
                        
					</div><!--/product-details-->
						
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Details</a></li>
								
								
								<li ><a href="#reviews" data-toggle="tab">Reviews</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details" >
                                <table>
                                    <tr>
                                        
                                    </tr>
								
<?php
       $data = $_POST["search"];
                                    
       $data2 = $_SESSION["productone"];
                                    
      if($data2==1 || $data2==2 || $data2==3 || $data2==4) { 
          
	   $sql3 = 'SELECT * from mobile_info where p_name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);
		
		$sql34 = 'SELECT * from mobile_info where m_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        

        echo '<th>'.$row3["p_name"].'</th>';
		echo '<th>'.$row34["p_name"].'</th>';
		
		
		
		
		
		echo "<tr><td>" . $row3["technology"]. "</td><td>" . $row34["technology"] . "</td></tr>";
		echo "<tr><td>" . $row3["dimensions"]. "</td><td>" . $row34["dimensions"] . "</td></tr>";
		echo "<tr><td>" . $row3["weight"]. "</td><td>" . $row34["weight"] . "</td></tr>";
		echo "<tr><td>" . $row3["sim"]. "</td><td>" . $row34["sim"] . "</td></tr>";
		echo "<tr><td>" . $row3["disp_type"]. "</td><td>" . $row34["disp_type"] . "</td></tr>";
		echo "<tr><td>" . $row3["disp_size"]. "</td><td>" . $row34["disp_size"] . "</td></tr>";
		echo "<tr><td>" . $row3["disp_resolution"]. "</td><td>" . $row34["disp_resolution"] . "</td></tr>";
		echo "<tr><td>" . $row3["Os"]. "</td><td>" . $row34["Os"] . "</td></tr>";
		echo "<tr><td>" . $row3["chipset"]. "</td><td>" . $row34["chipset"] . "</td></tr>";
		echo "<tr><td>" . $row3["Wlan"]. "</td><td>" . $row34["Wlan"] . "</td></tr>";
		echo "<tr><td>" . $row3["CPU"]. "</td><td>" . $row34["CPU"] . "</td></tr>";
		echo "<tr><td>" . $row3["GPU"]. "</td><td>" . $row34["GPU"] . "</td></tr>";
		echo "<tr><td>" . $row3["USB"]. "</td><td>" . $row34["USB"] . "</td></tr>";
		echo "<tr><td>" . $row3["Memory"]. "</td><td>" . $row34["Memory"] . "</td></tr>";
		echo "<tr><td>" . $row3["Bluetooth"]. "</td><td>" . $row34["Bluetooth"] . "</td></tr>";
        echo "<tr><td>" . $row3["Battery"]. "</td><td>" . $row34["Battery"] . "</td></tr>";
        echo "<tr><td>" . $row3["colors"]. "</td><td>" . $row34["colors"] . "</td></tr>";
        echo "<tr><td>" . $row3["Price"]. "</td><td>" . $row34["Price"] . "</td></tr>";
            
      
            
            
   }
       
      }
       
       if($data2==5 || $data2==6 || $data2==7 || $data2==8) { 
          
	   $sql3 = 'SELECT * from laptop_info where p_name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);
		
		$sql34 = 'SELECT * from laptop_info where l_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        

        echo '<th>'.$row3["p_name"].'</th>';
		echo '<th>'.$row34["p_name"].'</th>';
		
		
		
		
		
		echo "<tr><td>" . $row3["Processor"]. "</td><td>" . $row34["Processor"] . "</td></tr>";
		echo "<tr><td>" . $row3["Os"]. "</td><td>" . $row34["Os"] . "</td></tr>";
		echo "<tr><td>" . $row3["Graphics"]. "</td><td>" . $row34["Graphics"] . "</td></tr>";
		echo "<tr><td>" . $row3["Memory"]. "</td><td>" . $row34["Memory"] . "</td></tr>";
		echo "<tr><td>" . $row3["Storage"]. "</td><td>" . $row34["Storage"] . "</td></tr>";
		echo "<tr><td>" . $row3["Camera"]. "</td><td>" . $row34["Camera"] . "</td></tr>";
		echo "<tr><td>" . $row3["Battery"]. "</td><td>" . $row34["Battery"] . "</td></tr>";
		echo "<tr><td>" . $row3["Display"]. "</td><td>" . $row34["Display"] . "</td></tr>";
		echo "<tr><td>" . $row3["Touch_screen"]. "</td><td>" . $row34["Touch_screen"] . "</td></tr>";
		echo "<tr><td>" . $row3["Audio"]. "</td><td>" . $row34["Audio"] . "</td></tr>";
		echo "<tr><td>" . $row3["Port"]. "</td><td>" . $row34["Port"] . "</td></tr>";
		echo "<tr><td>" . $row3["Connectivity"]. "</td><td>" . $row34["Connectivity"] . "</td></tr>";
		echo "<tr><td>" . $row3["Dimensions"]. "</td><td>" . $row34["Dimensions"] . "</td></tr>";
		echo "<tr><td>" . $row3["Weight"]. "</td><td>" . $row34["Weight"] . "</td></tr>";
		echo "<tr><td>" . $row3["Price"]. "</td><td>" . $row34["Price"] . "</td></tr>";
      
            
      
            
            
   }
       
      }
       
                                    
         if($data2==9 || $data2==10 || $data2==11 || $data2==12) { 
          
	   $sql3 = 'SELECT * from camera_info where c_Name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);
		
		$sql34 = 'SELECT * from camera_info where c_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        

        echo '<th>'.$row3["c_Name"].'</th>';
		echo '<th>'.$row34["c_Name"].'</th>';
		
		
		
		
		
		echo "<tr><td>" . $row3["lens_mount"]. "</td><td>" . $row34["lens_mount"] . "</td></tr>";
		echo "<tr><td>" . $row3["total_pixel"]. "</td><td>" . $row34["total_pixel"] . "</td></tr>";
		echo "<tr><td>" . $row3["effective_pixel"]. "</td><td>" . $row34["effective_pixel"] . "</td></tr>";
		echo "<tr><td>" . $row3["img_quality"]. "</td><td>" . $row34["img_quality"] . "</td></tr>";
		echo "<tr><td>" . $row3["white_balance"]. "</td><td>" . $row34["white_balance"] . "</td></tr>";
		echo "<tr><td>" . $row3["aspect_ratio"]. "</td><td>" . $row34["aspect_ratio"] . "</td></tr>";
		echo "<tr><td>" . $row3["photo_4k"]. "</td><td>" . $row34["photo_4k"] . "</td></tr>";
		echo "<tr><td>" . $row3["focus"]. "</td><td>" . $row34["focus"] . "</td></tr>";
		echo "<tr><td>" . $row3["battery"]. "</td><td>" . $row34["battery"] . "</td></tr>";
		echo "<tr><td>" . $row3["dimension"]. "</td><td>" . $row34["dimension"] . "</td></tr>";
		echo "<tr><td>" . $row3["weight"]. "</td><td>" . $row34["weight"] . "</td></tr>";
		echo "<tr><td>" . $row3["connectivity"]. "</td><td>" . $row34["connectivity"] . "</td></tr>";
		echo "<tr><td>" . $row3["price"]. "</td><td>" . $row34["price"] . "</td></tr>";
		                  
   }
       
      }           
                                    
                                    
                                    
       if($data2==13 || $data2==14 || $data2==15 || $data2==16) { 
          
	   $sql3 = 'SELECT * from earphone_info where p_name="'.$_POST["search"].'"';
	   
		$result3 = mysqli_query($mysqli_conn , $sql3);
		
		$sql34 = 'SELECT * from earphone_info where e_id="'.$_SESSION["productone"].'"';
        $result34 = mysqli_query($mysqli_conn , $sql34);

                        
   if (mysqli_num_rows($result3) > 0) {
		$row3 = mysqli_fetch_array($result3);
		$row34 = mysqli_fetch_array($result34);                     
                        

        echo '<th>'.$row3["p_name"].'</th>';
		echo '<th>'.$row34["p_name"].'</th>';
		
		
		
		
		
		echo "<tr><td>" . $row3["Colour"]. "</td><td>" . $row34["Colour"] . "</td></tr>";
		echo "<tr><td>" . $row3["Type"]. "</td><td>" . $row34["Type"] . "</td></tr>";
		echo "<tr><td>" . $row3["Frequency"]. "</td><td>" . $row34["Frequency"] . "</td></tr>";
		echo "<tr><td>" . $row3["Accessories"]. "</td><td>" . $row34["Accessories"] . "</td></tr>";
		echo "<tr><td>" . $row3["Warranty"]. "</td><td>" . $row34["Warranty"] . "</td></tr>";
		echo "<tr><td>" . $row3["Audio"]. "</td><td>" . $row34["Audio"] . "</td></tr>";
		echo "<tr><td>" . $row3["Bluetooth"]. "</td><td>" . $row34["Bluetooth"] . "</td></tr>";
		echo "<tr><td>" . $row3["Price"]. "</td><td>" . $row34["Price"] . "</td></tr>";
		
		                  
   }
       
      }                                                          
                                    

                        ?>
   
  
   
                                    
                                
                             </table>   
                                
                            
                                
							</div>
							
							
							
					
							
							<div class="tab-pane fade " id="reviews" >
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