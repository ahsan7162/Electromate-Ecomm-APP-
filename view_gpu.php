<?php






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
	<h1>GPU Products</h1>
</head>


<body>
<!-- Search Start -->
<div>
<form action = 'view_gpu.php' , method = 'GET'>
	<fieldset>
		<input type = 'text' name = 'search' value ='' placeholder = 'Search by id'></input>
		<input type = 'submit' name = 'SearchButton' value = 'search'></input>
	
	</fieldset>
</form>
</div>
<br>
<?php

$connection = mysqli_connect('localhost','root','','ecommapp');
if(isset($_GET['SearchButton'])){
	$Search = $_GET['search'];
	$SearchQuery = "SELECT * FROM gpu WHERE gpu_id = '$Search' ";
	$Execute = mysqli_query($connection,$SearchQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	$ID = $DataRow['gpu_id'];
	$GN = $DataRow['gpu_name'];
	$GBN = $DataRow['gpu_brand'];
	$GMN = $DataRow['gpu_model_number'];
	$GT = $DataRow['gpu_type'];
    $GMEM = $DataRow['gpu_memory_size'];
    $GBC= $DataRow['gpu_boost_clock'];
    $GF = $DataRow['gpu_fans'];
    $GPO = $DataRow['gpu_ports'];
    $GPR = $DataRow['gpu_price'];
?>
<table width = "1000" border =  "5" align = "center">
		<caption>Search</caption>
		<tr>
			
			<th>Gpu_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Type</th>
            <th>Memory</th>
            <th>Boost Clock</th>
            <th>Fans</th>
            <th>Ports</th>
            <th>Price</th>
            
		</tr>
		<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $GN; ?> </td>
<td><?php echo $GBN;  ?> </td>
<td><?php echo $GMN;  ?> </td>
<td><?php echo $GMN;  ?> </td>
<td><?php echo $GT;  ?> </td>
<td><?php echo $GMEM;  ?> </td>
<td><?php echo $GBC;  ?> </td>
<td><?php echo $GF;  ?> </td>
<td><?php echo $GPO;  ?> </td>
<td><?php echo $GPR;  ?> </td>
<td><a href = 'view_gpu.php'>Search Again</td>
</tr>

<?php
}
}

?>
<!-- Search End -->
<table width = "1000" border =  "5" align = "center">
		<caption>View</caption>
		<tr>
			
			<th>Gpu_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Type</th>
            <th>Memory</th>
            <th>Boost Clock</th>
            <th>Fans</th>
            <th>Ports</th>
            <th>Price</th>
            
		</tr>

		
<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT * FROM gpu";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['gpu_id'];
	$GN = $DataRow['gpu_name'];
	$GBN = $DataRow['gpu_brand'];
	$GMN = $DataRow['gpu_model_number'];
	$GT = $DataRow['gpu_type'];
    $GMEM = $DataRow['gpu_memory_size'];
    $GBC= $DataRow['gpu_boost_clock'];
    $GF = $DataRow['gpu_fans'];
    $GPO = $DataRow['gpu_ports'];
    $GPR = $DataRow['gpu_price'];
   

	
	
?>
<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $GN; ?> </td>
<td><?php echo $GBN;  ?> </td>
<td><?php echo $GMN;  ?> </td>
<td><?php echo $GMN;  ?> </td>
<td><?php echo $GT;  ?> </td>
<td><?php echo $GMEM;  ?> </td>
<td><?php echo $GBC;  ?> </td>
<td><?php echo $GF;  ?> </td>
<td><?php echo $GPO;  ?> </td>
<td><?php echo $GPR;  ?> </td>

<td><a href= 'view_gpu.php?Delete1=<?php echo $ID; ?>'>Delete</a></td>
<td><a href= 'Update_gpu.php?Update=<?php echo $ID; ?>'>Update</a></td>
</tr>
<?php } ?>
	</table>
	<?php

$connection = mysqli_connect('localhost','root','','ecommapp'); 
$Delete_record =  $_GET['Delete1'];
$Delete_Query = "DELETE FROM gpu WHERE gpu_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query);

?>



    </body>

</html>