<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyDay</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
            crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/font-awesome-animation.min.css">
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>
                <link rel="stylesheet" href="css/main.css">
                <link rel="stylesheet" href="css/mega-menu.css">
                <script src="js/mega-menu.js"></script>
                <link rel="stylesheet" href="css/jquery.timepicker.css">
                <script src="js/jquery.timepicker.min.js"></script>
                <script src="js/function.js"></script>
</head>

<body>
    <header>
    </header>
    <section>
        <div class="mega-menu">
            <div id="throbber" style="display:none; min-height:120px;"></div>
            <div id="noty-holder"></div>
            <div id="wrapper">
                <!-- Navigation -->
                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
                        <a class="navbar-brand" href="http://cijulenlinea.ucr.ac.cr/dev-users/">
                            <img src="http://placehold.it/200x50&text=LOGO" alt="LOGO">
                        </a>
                    </div>
                    <!-- Top Menu Items -->
                    <ul class="nav navbar-right top-nav">
                        <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                                <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                                <li class="divider"></li>
                                <li><a href="#"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav side-nav">
                            <li>
                                <a href="#" class="faa-parent animated-hover"><img class="sun-menu faa-spin faa-slow" src="images/sun2.png" alt=""></a>
                            </li>
                            <li>
                                <a href="#" class="faa-parent animated-hover"><i class="fa fa-bed" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="faa-parent animated-hover"><i class="fa fa-cutlery" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="faa-parent animated-hover"><i class="fa fa-bath" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="faa-parent animated-hover"><i class="fa fa-car" aria-hidden="true"></i><i class="fa fa-bus" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="#" class="faa-parent animated-hover"><i class="fa fa-fw fa fa-question-circle faa-tada"></i></a>
                            </li>
                            <li>
                                <a href="#" data-toggle="collapse" data-target="#submenu-2" class="faa-parent animated-hover"><i class="fa fa-fw fa-star"></i><i class="fa fa-fw fa-angle-down pull-right"></i></a>
                                <ul id="submenu-2" class="collapse">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.1</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.2</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> SUBMENU 2.3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <!-- Page Heading -->
                        <div class="row" id="main">
                            <div class="col-sm-12 col-md-12 well" id="content">
                                <div class="row">
                                    <div class="left-container col-md-4">
                                        <div class="col-md-12">
                                            <div class="col-md-3">
                                                <p>Alvás</p>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-2">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div class="slider round"></div>
                                                </label>
                                            </div>
                                            <div class="col-md-5 input-time-box">
                                                <input class="ui-timepicker-input time-1" type="text">
                                                <input class="ui-timepicker-input time-2" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <p>Étkezés</p>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-cutlery" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div class="slider round"></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <p>Fürdés</p>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div class="slider round"></div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="col-md-4">
                                                <p>Utazás</p>
                                            </div>
                                            <div class="col-md-2">
                                                <i class="fa fa-bus" aria-hidden="true"></i>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="switch">
                                                    <input type="checkbox">
                                                    <div class="slider round"></div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /#page-wrapper -->
            </div>
            <!-- /#wrapper -->
        </div>
    </section>
    <footer>
    </footer>
</body>

</html>