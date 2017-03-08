<?php
   include('config.php');
   session_start();
   
   $email_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id from users where email = '$email_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:index.php");
   }
?>