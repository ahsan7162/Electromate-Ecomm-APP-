<?php

 session_start();

 
 if(isset($_SESSION['username'])&& isset($_SESSION['password'])){

   echo "hello";

 }
 else
 {
    $SESSION['error'] = "not logged in";
    //echo "<script>window.location.href='login.php';</script>";
    
    exit;
   
 }
 
 ?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel = "stylesheet" href="styles.css">
	
	<!--<title>Sign Up</title>-->
<style>
.footer {
  background-color: #D1C4E9;
  margin: 0px auto;
  padding: 20px 0px; }


</style>
</head>

<body>
<div class = 'container-fluid'>
<div class = 'row'>
<div class = 'col-sm-3'>
    <h1 id ='he'>Admin Panel</h1>
    
</div>
</div>
</div>


    <nav class = "navbar navbar-expand-sm  navbar-dark sticky-top  bg-dark" >
        <div class = 'container'>
            
            <button class ="navbar-toggler" type = "button" data-toggle = "collapse" data-target = "#Navbar" aria-controls="NavbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class = "navbar-toggler-icon"></span>
            </button>
            <a class = 'navbar-brand mr-auto'  href = '#'>Admin Panel</a>
            <div class = "collapse navbar-collapse" id = "Navbar">
                <ul class = 'navbar-nav mr-auto' >
                    <li class = 'nav-item active'><a class = 'nav-link' href = '#'><span class = 'fa fa-home fa-lg'></span> Home</a></li>
                    <li class = 'nav-item'><a class = 'nav-link' href = '#'><span class = 'fa fa-info fa-lg'></span> About</a></li>
                    <li class = 'nav-item'><a class = 'nav-link' href = '#'><span class = 'fa fa-list fa-lg'></span> Product</a></li>
                    <li class = 'nav-item'><a class = 'nav-link' href = '#'><span class = 'fa fa-address-card fa-lg'></span> Contact</a></li>
                </ul>
            </div>
        </div>  
    </nav>

    <footer class="footer" >
        <div class="container">
            <div class="row">             
                <div class="col-4 offset-1 col-sm-2">
                    <h5>Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="./index.html">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="./contactus.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-7 col-sm-5">
                    <h5>Our Address</h5>
                    <address>
		              121, Clear Water Bay Road<br>
		              Clear Water Bay, Kowloon<br>
		              HONG KONG<br>
		              <i  class = "fa fa-phone fa-lg"></i> +852 1234 5678<br>
		              <i  class = "fa fa-fax fa-lg"></i> +852 8765 4321<br>
		              <i  class = "fa fa-envelope fa-lg"></i> <a href="mailto:confusion@food.net">confusion@food.net</a>
		           </address>
                </div>
                <div class="col-12 col-sm-4 align-self-center">
                    <div class="text-center">
                        <a  class = "btn btn-social-icon btn-google" href="http://google.com/+"><i  class = "fa fa-google-plus fa-lg"></i></a>
                        <a class = "btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i  class = "fa fa-facebook fa-lg"></i></a>
                        <a class = "btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i  class = "fa fa-linkedin fa-lg"></i></a>
                        <a class = "btn btn-social-icon btn-twitter" href="http://twitter.com/"><i  class = "fa fa-twitter fa-lg"></i></a>
                        <a class = "btn btn-social-icon btn-google" href="http://youtube.com/"><i  class = "fa fa-youtube fa-lg"></i></a>
                        <a class = "btn btn-social-icon btn-envelope-o" href="mailto:"><i  class = "fa fa-envelope-o fa-lg"></i></a>
                    </div>
                </div>
           </div>
           <div class="row justify-content-center">             
                <div class="col-auto">
                    <p>?? Copyright 2018 Ristorante Con Fusion</p>
                </div>
           </div>
        </div>
    </footer>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
<!--<script src = "js/scripts.js"></script>-->
</body>
</html>