<?php
session_start();
include_once '../class/class_users.php';
$users = new Users();

if(!isset($_SESSION['username'])){
    header("Location:../login.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $users->username = mysql_escape_string($_POST['username']);
    $users->password = mysql_escape_string($_POST['password']);
    $users->repassword = mysql_escape_string($_POST['repassword']);
    $users->first_name = mysql_escape_string($_POST['first_name']);
    $users->last_name = mysql_escape_string($_POST['last_name']);
    $users->email_address = mysql_escape_string($_POST['email_address']);
    $users->birth_date = mysql_escape_string($_POST['birth_date']);
    $users->birth_place = mysql_escape_string($_POST['birth_place']);
    $users->phone = mysql_escape_string($_POST['phone']);
    $users->mobile_phone = mysql_escape_string($_POST['mobile_phone']);
    $users->skype = mysql_escape_string($_POST['skype']);
    $users->fax = mysql_escape_string($_POST['fax']);
    $users->marital_status = mysql_escape_string($_POST['marital_status']);
    $users->city = mysql_escape_string($_POST['city']);
    $users->country = mysql_escape_string($_POST['country']);
    $users->profession = mysql_escape_string($_POST['profession']);
    $users->self_description = mysql_escape_string($_POST['self_description']);
    $users->userAdd();
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="../css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- Morris chart -->
        <link href="../css/morris/morris.css" rel="stylesheet" type="text/css" />
        <!-- jvectormap -->
        <link href="../css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- fullCalendar -->
        <link href="../css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" />
        <!-- Daterange picker -->
        <link href="../css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="../css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        
        <link href="../css/AdminLTE.css" rel="stylesheet" type="text/css" />        

    <!-- Bootstrap Form Helpers -->
        <link href="../css/bootstrap-formhelpers.min.css" rel="stylesheet" media="screen">
        <script src="../js/bootstrap-formhelpers.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        
    <!-- Bootstrap -->
    
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Admin Panel
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                   
                                </li>
                                <!-- Menu Body -->
                               
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, Admin</p>

                           
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="active">
                            <a href="index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Content</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            Management</a>
                            <ul class="treeview-menu">
                                <li><a href="post_mngt.php"><i class="fa fa-angle-double-right"></i> Post</a></li>
                                <li><a href="page_mngt.php"><i class="fa fa-angle-double-right"></i> Pages</a></li>
								<li><a href="#"><i class="fa fa-angle-double-right"></i> Slider</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Events</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            Management</a>
                            <ul class="treeview-menu">
                                <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> List of Events</a></li>
                                
                            </ul>
                        </li>
                        
                       
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-calendar"></i> <span>User Management</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="add.php"><i class="fa fa-angle-double-right"></i> Add User</a></li>
                                <li><a href="view.php"><i class="fa fa-angle-double-right"></i> View User</a></li>                                
                            </ul>                            
                            
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Add User</h1>
                    
                </section>

                <!-- Main content -->
                <section class="content">

                   
                    <!-- Main row -->
                    <div class="row">
                        <!-- Left col --><!-- /.Left col -->
                        <!-- right col (We are only adding the ID to make the widgets sortable)-->
                        <section class="col-lg-12 connectedSortable">
                            <form role="form" action="add.php" method="post">
                                <div class="box-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Username</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter username" name="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Re-Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="repassword">
                                    </div>
                                    <div class="form-group">
                                        <label for="firstName">First Name</label>
                                        <input type="text" class="form-control" id="firstName" placeholder="first name" name="first_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Last Name</label>
                                        <input type="text" class="form-control" id="lastName" placeholder="last name" name="last_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Email Address</label>
                                        <input type="email" class="form-control" id="emailAddress" placeholder="user@user.com" name="email_address">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthDate">Birth Date</label>
                                        <input type="date" class="form-control" id="birthDate" name="birth_date">
                                    </div>
                                    <div class="form-group">
                                        <label for="birthPlace">Birth Place</label>
                                        <input type="text" class="form-control" id="birthPlace" placeholder="birth place" name="birth_place">
                                    </div>
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="tel" class="form-control" id="phone" placeholder="phone" name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="lastName">Mobile Phone</label>
                                        <input type="tel" class="form-control" id="lastName" placeholder="###-###-###" name="mobile_phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="skype">Skype</label>
                                        <input type="text" class="form-control" id="skype" placeholder="skype user" name="skype">
                                    </div>
                                    <div class="form-group">
                                        <label for="fax">Fax No</label>
                                        <input type="number" class="form-control" id="fax" placeholder="#######" name="fax">
                                    </div>
                                    <div class="form-group">
                                        <label>Marital Status</label>
                                        <select class="form-control" name="marital_status">
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="divorced">Divorced</option>
                                            <option value="widowed">Widowed</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" id="city" placeholder="city" name="city">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" id="country" placeholder="country" name="country">
                                    </div>
                                    <div class="form-group">
                                        <label for="profession">Profession</label>
                                        <input type="text" class="form-control" id="profession" placeholder="profession" name="profession">
                                    </div>
                                    <div class="form-group">
                                        <label>Self Description</label>
                                        <textarea class="form-control" rows="3" placeholder="Enter Self Description Here" name="self_description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control bfh-countries" data-country="US" name="country"></select>
                                    </div>
                                </div><!-- /.box-body -->
                                
                                <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                           
                        </section>
                        <!-- right col -->
                  </div><!-- /.row (main row) -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="../js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="../js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        
        <script src="../js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="../js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="../js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="../js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="../js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="../js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="../js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="../js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="../js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        

        <!-- AdminLTE App -->
        <script src="../js/AdminLTE/app.js" type="text/javascript"></script>
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="../js/AdminLTE/dashboard.js" type="text/javascript"></script>     
        
        <!-- AdminLTE for demo purposes -->
        <script src="../js/AdminLTE/demo.js" type="text/javascript"></script>
        

        <!-- Bootstrap Form Helpers -->
        
    </body>
</html>