<?php

ob_start();

include("config.inc.php"); //include config file

if(isset($_POST['btnSearch']))
    {
        $a = $_POST['txtSearch'];
        header("Location: search.php?key=$a");
    }
if (isset($_POST['btnSugnup'])) {
        if($_POST)                         
        {        
            $errors = array();
            if(empty($_POST['txtuser']))
            {
                $errors[1] = "Your  Username cannot be empty";

            }
            if(strlen($_POST['txtuser']) < 5)
            {
                $errors[2] = "Your Username must be atleast 5 characters long";
            }      

            if(empty($_POST['txtPassword']))
            {
                $errors[3] = "Password cannot be empty";
            }
            if(strlen($_POST['txtPassword']) < 8)
            {
                $errors[4] = "Password must be atlest 8 characters long";
            }
            if(empty($_POST['txtConfarmPassword']))
            {
                $errors[5] = "Password cannot be empty";
            }
            if($_POST['txtPassword'] !== $_POST['txtConfarmPassword'])
            {
                $errors[6]="Password did not match";
            }

            if(empty($_POST['txtEmail']))
            {
                $errors[7] = "Email cannot be empty";
            }
            $pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
            if(preg_match($pattern,$_POST['txtEmail']) == false)
            {
                $errors[8] = "Invalid Email";
            }
            if(empty($_POST['txtPhone']))
            {
                $errors[9] = "Phone number cannot be empty";

            }
            if(strlen($_POST['txtPhone']) != 11)
            {
                $errors[10] = "Phone number Must be 11 disits";
            }  

            if(empty($_POST['cbAgree']))
            {
                $errors[11] = "Check Agree ";
            }

            if(count($errors) == 0)
            {
                $UserName = $_POST['txtuser'];
                $Password = $_POST['txtPassword'];
                $Email = $_POST['txtEmail'];
                $PhoneNumber = $_POST['txtPhone'];
               
                $con = mysqli_connect($db_host, $db_username, $db_password,$db_name);
                if($con === false)
                {
                    die("ERROR: Could not connect. " . mysqli_connect_error());
                }
                $sql = "INSERT into user (name,password,email,phone_number) VALUES ('".$UserName."','".$Password."','".$Email."','".$PhoneNumber."')";
                if(mysqli_query($con, $sql))
                {
                    session_start();
                    $_SESSION['name']=$UserName;
                    echo "<script>alert('Registration Complete');
                    window.location='index.php';</script>";
                } else
                {
                    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                }
 

                mysqli_close($con);
                //header("Location: success.php");
                exit();
            }
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | MegaDeals</title>
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
					
				</div>
			</div>
		</div><!--/header-middle-->
        
        
         <div class="well" style="background-color: white;width:400px;height:500px;position: absolute;margin-left : 30%;margin-top:2%;float:right;overflow:auto;">
            <p><br/><b>Create New Account</b></p>
             <hr/>
            <form action="" method="POST">
                 Username<span style="color:red">*</span><br>
                <input class="form-control" id="Textbox" type="text" name="txtuser" value="<?php if(isset($_POST['txtuser'])) echo $_POST['txtuser']; ?>">
                <p id="p1"><?php if(isset($errors[1])) echo $errors[1]; ?></p>
                <p id="p1"><?php if(isset($errors[2])) echo $errors[2]; ?></p>
                Password<span style="color:red">*</span><br>
                <input class="form-control" id="Textbox" type="password" name="txtPassword">
                <p id="p1"><?php if(isset($errors[3])) echo $errors[3]; ?></p>
                <p id="p1"><?php if(isset($errors[4])) echo $errors[4]; ?></p>
                Confirm Password<span style="color:red">*</span><br>
                <input class="form-control" id="Textbox" type="password" name="txtConfarmPassword">
                <p id="p1"><?php if(isset($errors[5])) echo $errors[5]; ?></p>
                <p id="p1"><?php if(isset($errors[6])) echo $errors[6]; ?></p>
                Email<span style="color:red">*</span><br>
                <input  class="form-control" id="Textbox" type="text" name="txtEmail" value="<?php if(isset($_POST['txtEmail'])) echo $_POST['txtEmail']; ?>">
                <p id="p1"><?php if(isset($errors[7])) echo $errors[7]; ?></p>
                <p id="p1"><?php if(isset($errors[8])) echo $errors[8]; ?></p>
                
                Phone Number<span style="color:red">*</span><br>
               
                    
                <input  class="form-control" id="Textbox" type="text" name="txtPhone" value="<?php if(isset($_POST['txtPhone'])) echo $_POST['txtPhone']; ?>">
                
                <p id="p1"><?php if(isset($errors[9])) echo $errors[9]; ?></p>
                <p id="p1"><?php if(isset($errors[10])) echo $errors[10]; ?></p>
                 <input type="checkbox" name="cbAgree" >I agree
                <p id="p1"><?php if(isset($errors[11])) echo $errors[11]; ?></p>
               
                <input type="submit" name="btnSugnup" value="SIGN UP" class="btn btn-success">
            </form>
        </div>
        
    </header>
    
    
    
    
    
  </body>
        
</html>
        
        
