<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>mobile</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <style>
            #left_menu>input[type="button"]:hover{
                background-color:#b3b3ff;
            }
            
            .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
            
        </style>
    
    
    <script>
            ///to hide the alert message box
            function hidealert() {
                document.getElementById('alertmsg').innerHTML = "";
                document.getElementById('alertbox').style.display = "none";
            }
            ///to show the alert message box
            function showalert(alrtmsg) {
                document.getElementById('alertmsg').innerHTML = alrtmsg;
                document.getElementById('alertbox').style.display = "block";
            }
            ///after successfully connected to database
            function dbconnected() {
                document.getElementById('cdb').disabled = true;
                document.getElementById('ddb').disabled = false;
                ///showing the insert and showtable sections
                document.getElementById('insertsection').style.display = "block";
                document.getElementById('showdatasection').style.display = "block";
                document.getElementById('showordersection').style.display = "block";
            }
            ///after disconnected to database
            function dbdisconnected() {
                document.getElementById('cdb').disabled = false;
                document.getElementById('ddb').disabled = true;
                ///hiding the insert and show table sections
                document.getElementById('insertsection').style.display = "none";
                document.getElementById('showdatasection').style.display = "none";
                document.getElementById('showdatasection').innerHTML="";
                document.getElementById('showordersection').style.display = "none";
                document.getElementById('showordersection').innerHTML="";
            }
            ///to check whether or not the customer wants to delete the data
            function deleterow(id) {
                if (window.confirm('Do you want to delete the data?')) {
                    window.location.assign('mobile.php?status=connect&type=delete&m_id=' + id);
                }
            }
            
            
            
             ///when update button is clicked
             
            // Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


        </script>

</head>

<body>
  
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>AD<span>MIN</span></b></a>
      <!--logo end-->
     
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="../php/logout.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">Alisha toma</h5>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>category</span>
              </a>
            <ul class="sub">
              <li><a href="mobile.php">Mobile</a></li>
              <li><a href="laptop.php">Laptop</a></li>
              <li><a href="camera.php">Camera</a></li>
              <li><a href="earphone.php">Earphone</a></li>
            </ul>
          </li>
          
          
          
         
          
         
          
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        
        <div>
            
            <!-- alert message show section, call function showalert() or hidealert() -->
        <div id="alertbox" style="background-color:#ccffee;display:none;color:#660000;margin:3px;padding:3px;border:1px outset;width:100%;height:25px;">
            <span id="alertmsg"></span>
            <span style="float:right;"><input type="button" value="X" style="background-color:#00b36b;" onclick="hidealert();"></span>
        </div>

        <!--the main body section-->
        <div>
            <!--left panel containing the buttons only-->
            <span id="left_menu" style="width:20%;height:600px;overflow:auto;background-color:#ffddcc;display:inline-block;">
                <input id="cdb" name="cdb" type="button" value="Connect DataBase" style="width:100%;" onclick="window.location.assign('mobile.php?status=connect');"><br/>
                <input id="ddb" name="ddb" type="button" value="Disconnect DataBase" style="width:100%;" disabled onclick="window.location.assign('mobile.php?status=disconnect')"><br/>
            </span>
            <!--right panel containg the other parts-->
            <span id="content" style="width:78%;height:600px;overflow:auto;display:inline-block;background-color:#ecf9f2;">
                <div id="insertsection" style="width:99%;max-height:400px;display:none;">
                    <h4>Insert Data For Mobile</h4>
                    <form method='get' action='mobile.php'>
                        P_Name: <input type='text' name='p_name' id='p_name'> 
                        technology: <input type='text' name='tech' id='tech'>
                        dimensions: <input type='text' name='dimn' id='dimn'>
                        <hr>
                        weight: <input type='text' name='weight' id='weight'>
                        sim: <input type='text' name='sim' id='sim'>
                        disp_type: <input type='text' name='disp_t' id='disp_t'>
                        <hr>
                        disp_size: <input type='text' name='disp_s' id='disp_s'>
                        disp_resolution: <input type='text' name='disp_r' id='disp_r'>
                        Os: <input type='text' name='os' id='os'>
                        <hr>
                        chipset: <input type='text' name='chip' id='chip'>
                        Wlan: <input type='text' name='wlan' id='wlan'>
                        CPU: <input type='text' name='cpu' id='cpu'>
                        <hr>
                        GPU: <input type='text' name='gpu' id='gpu'>
                        USB: <input type='text' name='usb' id='usb'>
                        Memory: <input type='text' name='memory' id='memory'>
                        Img: <input type='text' name='img' id='img'>
                        <hr>
                        Bluetooth: <input type='text' name='blth' id='blth'>
                        Battery: <input type='text' name='bttry' id='bttry'>
                        colors: <input type='text' name='clors' id='clors'>
                        Price: <input type='text' name='price' id='price'>
                        
                    
                        <input type='submit' value='Submit'>
                        <!-- this hidden input form will send a get variable named 'type' whose value is 'insert', check the url -->
                        <input type='hidden' name='status' value='connect'>
                        <input type='hidden' name='type' value='insert'>
                    </form>
                </div>
                <div id="showdatasection" style="width:90%;height:400px;overflow:auto;display:none;">
                    <!-- this section will show the database table -->
                </div>
                
                
                
                <div>
                    <h4>check orders</h4>
                    <form method='get' action='mobile.php'>
                        order id: <input type='text' name='order_id' id='order_id'>
                        
                        <input type='submit' value='O_details'>
                        <input type='hidden' name='status' value='connect'>
                        <input type='hidden' name='type' value='order'>
                    
                    </form>
                </div>
                <div id="showordersection" style="width:90%;height:400px;overflow:auto;display:none;">
                    <!-- this section will show the order database table -->
                </div>
                
            </span>
        </div>
        <?php
        
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(isset($_GET['status'])){
                $status=$_GET['status'];
                if($status=='connect'){
                    $serveraddr = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "megadeals";
                    try {
                        $conn = new PDO("mysql:host=$serveraddr;dbname=$dbname", $username, $password);
                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $flag=false;
                        ///when insert parameter is passed
                        if(isset($_GET['type'])&& $_GET['type']=='insert'){
                            $flag=true;
                            try {
                                $pdostmt = $conn->prepare("select max(m_id) as total from mobile_info");
                                $pdostmt->execute();
                                $res = $pdostmt->fetchAll(PDO::FETCH_NUM);
                                $len = $res[0][0];  ///here $len contains the max assigned id to users, so that we can assign the next value(i.e. +1) to the new user

                                if (isset($_GET['p_name']) && isset($_GET['tech']) && isset($_GET['dimn']) && isset($_GET['weight']) && isset($_GET['sim']) && isset($_GET['disp_t']) && isset($_GET['disp_s']) && isset($_GET['disp_r']) && isset($_GET['os']) && isset($_GET['chip']) && isset($_GET['wlan']) && isset($_GET['cpu']) && isset($_GET['gpu']) && isset($_GET['usb']) && isset($_GET['memory']) && isset($_GET['blth']) && isset($_GET['bttry']) && isset($_GET['clors']) && isset($_GET['price']) && isset($_GET['img'])){ 
                                    $stmt = "insert into mobile_info values(" . ($len + 1) . ",'" . $_GET['p_name'] . "','" . $_GET['tech'] . "','" . $_GET['dimn'] . "','" . $_GET['weight'] . "','" . $_GET['sim'] . "','" . $_GET['disp_t'] . "','" . $_GET['disp_s'] . "','" . $_GET['disp_r'] . "','" . $_GET['os'] . "','" . $_GET['chip'] . "','" . $_GET['wlan'] . "','" . $_GET['cpu'] . "','" . $_GET['gpu'] . "','" . $_GET['usb'] . "','" . $_GET['memory'] . "','" . $_GET['blth'] . "','" . $_GET['bttry'] . "','" . $_GET['clors'] . "','" . $_GET['price'] . "','" . $_GET['img'] . "')";
                                    $conn->exec($stmt);
                                }
                            } catch (PDOException $ex) {
                                echo "<script>showalert('insertion error');</script>";
                            }
                        }
                        
                        
                        
                        
                        
                        ///when delete parameter is passed with id
                        if(isset($_GET['type']) && $_GET['type']=='delete'){
                            $flag=true;
                            try {
                                if (isset($_GET['m_id'])) {
                                    $stmt = 'delete from mobile_info where m_id=' . $_GET['m_id'];
                                    $conn->exec($stmt);
                                }
                            } catch (PDOException $ex) {
                                echo "<script>showalert('can\'t delete data due to error');</script>";
                            }
                        }
                        
                        if(isset($_GET['type']) && $_GET['type']=='update'){
                            $flag=true;
                            try {
                                    if (isset($_GET['m_id'])) {
                                    $pdostat = $conn->prepare("select * from mobile_info where m_id='". $_GET['m_id']."'");
                                    $pdostat->execute();
                                    $res = $pdostat->fetchAll(PDO::FETCH_NUM);
                                    foreach ($res as $innarr) {
                                        echo '<div id="myModal" class="modal">

                                               <!-- Modal content -->
                                                <div class="modal-content">
                                                  <span class="close">&times;</span>
                                                      
                                                      
                                                </div>

                                            </div>';
                                    }
                              }
                                    
                            }
                             catch (PDOException $ex) {
                                echo "<script>showalert('update error');</script>";
                            }
                        }
                        
                       ///when order details parameter is passed with id
                        if(isset($_GET['type']) && $_GET['type']=='order'){
                            $flag=true;
                             try {
                            $pdostat1 = $conn->prepare("select * from orders");
                            $pdostat1->execute();
                            $res1 = $pdostat1->fetchAll(PDO::FETCH_NUM);
                            $tablegenerate1 = "<h4>Show order Table Data</h4>  <table style='width:100%;border-collapse:collapse;border:1px solid black;'><thead><tr><th>order_id</th><th>p_id</th><th>user_id</th><th>O_quantity</th></tr></thead></tbody>";
                            foreach ($res1 as $innarr1) {
                                $tablegenerate1 = $tablegenerate1 . "<tr>";
                                foreach ($innarr1 as $val1) {
                                    $tablegenerate1 = $tablegenerate1 . "<td style='border:1px solid black'>" . $val1 . "</td>";
                                }
                                
                               
                                $tablegenerate1 = $tablegenerate1 . "</tr>";
                            }
                            $tablegenerate1 = $tablegenerate1 . "</tbody></table>";

                            echo "<script>document.getElementById('showordersection').innerHTML=\"".$tablegenerate1."\";</script>";
                        } catch (PDOException $ex) {
                            echo "<script>showalert('Can\'t read order data from database table');</script>";
                        }
                        }
                        
                        
                        
                        
                        
                        
                        
                        if($flag==false) echo "<script>showalert('database is connected');</script>";
                        
                        ///showing data in the table
                        echo "<script>dbconnected();</script>";
                        try {
                            $pdostat = $conn->prepare("select * from mobile_info");
                            $pdostat->execute();
                            $res = $pdostat->fetchAll(PDO::FETCH_NUM);
                            $tablegenerate = "<h4>Show Table Data</h4>  <table style='width:100%;border-collapse:collapse;border:1px solid black;'><thead><tr><th>m_id</th><th>p_name</th><th>technology</th><th>dimensions</th><th>weight</th><th>sim</th><th>disp_type</th><th>disp_size</th><th>disp_resolution</th><th>Os</th><th>chipset</th><th>Wlan</th><th>CPU</th><th>GPU</th><th>USB</th><th>Memory</th><th>Bluetooth</th><th> Battery</th><th>colors</th><th>Price</th><th>Img</th></tr></thead></tbody>";
                            foreach ($res as $innarr) {
                                $tablegenerate = $tablegenerate . "<tr>";
                                foreach ($innarr as $val) {
                                    $tablegenerate = $tablegenerate . "<td style='border:1px solid black'>" . $val . "</td>";
                                }
                                
                               $tablegenerate = $tablegenerate . "<td style='border:1px solid black'>".
                                                    "<input type='button' value='Delete' onclick='deleterow($innarr[0]);'>".
                                                    "<input type='button' value='Update' id='myBtn'>".
                                                "</td>";
                                $tablegenerate = $tablegenerate . "</tr>";
                            }
                            $tablegenerate = $tablegenerate . "</tbody></table>";

                            echo "<script>document.getElementById('showdatasection').innerHTML=\"".$tablegenerate."\";</script>";
                        } catch (PDOException $ex) {
                            echo "<script>showalert('Can\'t read data from database table');</script>";
                        }
                    } catch (PDOException $ex) {
                        echo "<script>dbdisconnected();showalert('can\'t conenct to database');</script>";
                    }
                    $conn=null;
                }
                else if($status=='disconnect'){
                    echo "<script>dbdisconnected();showalert('disconnected from database');</script>";
                }
            }
        }
        ?>
            
            
          
          
          
          
          
          
          </div>
          
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="index.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to!',
        // (string | mandatory) the text inside the notification
        
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
