<!DOCTYPE html>
<?php
    if($_SERVER['QUERY_STRING'] == 'success=0'){
        $error = "Hibás e-mail cím vagy jelszó!";
    }else{
        $error = "";
    }
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyDay Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
</head>

<body>
    <div id="fb-root"></div>
    <div class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="false"></div>
    <!-- Top content -->
    <div class="top-content">
        <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h1><strong>MyDay</strong></h1>
                            </div>
                            <div class="form-top-right">
                                <img src="assets/img/sun2.png" alt="logo sun">
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="auth.php" method="post" class="login-form">
                                <span class="error"><?php echo $error; ?></span>
                                <div class="form-group">
                                    <label class="sr-only" for="form-username">E-mail</label>
                                    <input type="text" name="username" placeholder="E-mail" class="form-username form-control" id="form-username">
                                </div>
                                <div class="form-group">
                                    <label class="sr-only" for="form-password">Jelszó</label>
                                    <input type="password" name="password" placeholder="Jelszó" class="form-password form-control" id="form-password">
                                </div>
                                <button type="submit" class="btn">Bejelentkezés</button>
                            </form>
                            <form method="post" action="regsitration.php" class="login-form registration">
                                <input type="text" name="FirstName" placeholder="Vezetéknév" maxlength="25">
                                <input type="text" name="LastName" placeholder="Keresztnév" maxlength="25">
                                <input type="date" name="Birthday" placeholder="Születési dátum">
                                <input type="text" name="Email" placeholder="E-mail" maxlength="50">
                                <input type="password" name="Password" placeholder="Jelszó" maxlength="50">
                                <input type="password" name="Password-re" placeholder="Jelszó megerősítés" maxlength="50">
                                <input type="submit" class="hidden">
                            </form>
                            <a class="btn regButton">Regisztráció</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 social-login">
                        <h3>...vagy Facebook bejeletkezés:</h3>
                        <div class="social-login-buttons">
                            <a class="btn btn-link-2" href="#">
                                <i class="fa fa-facebook"></i> Facebook
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
</body>

</html>