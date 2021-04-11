<?php
$Error="";
$a = 0;
$k = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i = $h = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    if(empty($_POST['PID']))
    {
        $Error = "is Required";
    }
    else
    {
        $a = $_POST['PID'];
    }
    if(empty($_POST['Name']))
    {
        $Error = "is Required";
    }
    else
    {
        $b = $_POST['Name'];
    }
    if(empty($_POST['Brand']))
    {
        $Error = "is Required";
    }
    else
    {
        $c = $_POST['Brand'];
    }
    if(empty($_POST['Model No']))
    {
        $Error = "is Required";
    }
    else
    {
        $d = $_POST['Model No'];
    }
    if(empty($_POST['Technology']))
    {
        $Error = "is Required";
    }
    else
    {
        $e = $_POST['Technology'];
    }
    if(empty($_POST['N_o_t']))
    {
        $Error = "is Required";
    }
    else
    {
        $f = $_POST['N_o_t'];
    }
    if(empty($_POST['N_o_c']))
    {
        $Error = "is Required";
    }
    else
    {
        $g = $_POST['N_o_c'];
    }
    if(empty($_POST['BaseF']))
    {
        $Error = "is Required";
    }
    else
    {
        $h = $_POST['BaseF'];
    }
    if(empty($_POST['TurboF']))
    {
        $Error = "is Required";
    }
    else
    {
        $i = $_POST['TurboF'];
    }
    if(empty($_POST['CacheS']))
    {
        $Error = "is Required";
    }
    else
    {
        $j = $_POST['CacheS'];
    }
    if(empty($_POST['PreP']))
    {
        $Error = "is Required";
    }
    else
    {
        $k = $_POST['PreP'];
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $Query = "INSERT INTO processor('pre_id', 'pre_name', 'pre_brand', 'pre_model_number', 'pre_technology', 'pre_n_o_t', 'pre_n_o_c', 'pre_b_freq', 'pre_turbo_freq', 'pre_cache_size', 'pre_price')
    VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k')";
    $Execute = mysqli_query($connection,$Query);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo 'done.';
	  }

}

?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "styles.css">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>Sign Up</title>
	<h1>Sign Up</h1>
</head>
<style type = 'text/css'>
input[type = 'text'],input[type = 'password']{
	
	border:1px solid dashed;
	width : 400px;
	background-color:rgb(221,216,212);
	padding:0.5em;
	font-size:1.0em;
	
}
div{
	
width :700px;

	
}
.Error{
	color:red;
}
</style>
<body>
<div >
<!--<div class = 'row'>-->
<!--<div class = 'col-sm-11'>-->
	<form action = '#' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		Processor ID:<br><input type = 'text' name = 'PID' value = '' placeholder="Between 501-600"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Name:<br><input type = 'text' name = 'Name' value = '' placeholder=" Enter Processor Name(e.g:Intel CORE I7 10-000K)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Brand:<br><input type = 'text' name = 'Brand' value = '' placeholder="Enter Brand Name(e.g:Intel)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		Model No:<br><input type = 'text' name = 'Model No' value = ''  placeholder="Enter Model No(e.g:10-000k)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Processor Technology:<br><input type = 'Text' name = 'Technology' value = ''  placeholder="Enter Technology(e.g:10th GEN )"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Number of threads:<br><input type = 'text' name = 'N_o_t' value = ''  placeholder="Enter Threads(e.g: 4 )"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Number of Cores:<br><input type = 'text' name = 'N_o_c' value = ''  placeholder="Enter Cores(e.g:8 )"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
	    Base Frequency:<br><input type = 'text' name = 'BaseF' value = ''  placeholder="Enter Base Frequency(e.g:3.5)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Turbo Frequency :<br><input type = 'text' name = 'TurboF' value = ''  placeholder="Enter Turbo Frequency(e.g:4 )"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Cache Size:<br><input type = 'text' name = 'CacheS' value = ''  placeholder="Enter Cache Size(e.g: 10)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Price:<br><input type = 'text' name = 'PreP' value = ''placeholder = 'Enter  Price(e.g:40000)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        <!--:<br><input type = 'file' name = 'product_img'/><br>-->
<input  type = 'submit' name = 'submit' value = 'Add product'></input><br>
		</fieldset>
	
	
	
	</form>
	<!-- ending of col class -->
<!--</div>-->
	<!-- ending of row class-->
<!--</div>	-->
	<!-- ending of container class-->
</div>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
<script src = "js/scripts.js"></script>
</body>

</html>