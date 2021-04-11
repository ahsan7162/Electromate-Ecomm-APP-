
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
	<h1>Processor Products</h1>
</head>
<style>
    .page{
 padding-bottom : 15px;
  border-bottom: 2px solid #eee;
    }
    body{
        /* background-color : #7a7a7a; */
    }
   .view{
       color:black
   }
    </style>

<body>
<!--search start-->
<div>
<form action = 'view_processor.php'  method = 'GET'>
	<fieldset>
		<input type = 'text' name = 'search' value ='' placeholder = 'Search by id'></input>
		<input type = 'submit' name = 'SearchButton' value = 'search'></input>
	
	</fieldset>
</form>
</div>
<?php
$connection = mysqli_connect('localhost','root','','ecommapp');
if(isset($_GET['SearchButton'])){
$Search = $_GET['search'];
$Searchquery = "SELECT * FROM processor where pre_id = '$Search'";
$Execute = mysqli_query($connection , $Searchquery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['pre_id'];
	$MN = $DataRow['pre_name'];
	$MBN = $DataRow['pre_brand'];
	$MMN = $DataRow['pre_model_number'];
	$MOS = $DataRow['pre_technology'];
    $MPRO = $DataRow['pre_n_o_t'];
    $MCORE= $DataRow['pre_n_o_c'];
    $MSPEED = $DataRow['pre_b_freq'];
    $MGPU = $DataRow['pre_turbo_freq'];
    $MTYPE = $DataRow['pre_cache_size'];
    $MSIZE = $DataRow['pre_price'];


?>
<div class = "table-responsive-sm">
<table class = "table table-hover table-fixed  table-bordered  " style = "color: black; background-color: #cccccc" >
<caption class = "view"> View </caption>
		<thead>
       
		<tr>
			
			<th>Processor_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Technology</th>
            <th>Number Of Threads</th>
            <th>Number of Cores</th>
            <th>Base Frequency</th>
            <th>Turbo Frequency</th>
            <th>Cache Size</th>
            <th>Price</th>
		
		</tr>
        </thead>
        <tbody>
<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $MN; ?> </td>
<td><?php echo $MBN;  ?> </td>
<td><?php echo $MMN;  ?> </td>
<td><?php echo $MOS;  ?> </td>
<td><?php echo $MPRO;  ?> </td>
<td><?php echo $MCORE;  ?> </td>
<td><?php echo $MSPEED;  ?> </td>
<td><?php echo $MGPU;  ?> </td>
<td><?php echo $MTYPE;  ?> </td>
<td><?php echo $MSIZE;  ?> </td>
<td><a href= 'view_processor.php'>Search again</td>

</tr>
</tbody>
</table>
</div>

<?php
}
}
?>
<!--serach end-->

<table width = "1000" border =  "5" align = "center">
		<caption>View</caption>
		<tr>
			
			<th>Processor_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Technology</th>
            <th>Number Of Threads</th>
            <th>Number of Cores</th>
            <th>Base Frequency</th>
            <th>Turbo Frequency</th>
            <th>Cache Size</th>
            <th>Price</th>
           
		
		</tr>
<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT * FROM processor";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['pre_id'];
	$MN = $DataRow['pre_name'];
	$MBN = $DataRow['pre_brand'];
	$MMN = $DataRow['pre_model_number'];
	$MOS = $DataRow['pre_technology'];
    $MPRO = $DataRow['pre_n_o_t'];
    $MCORE= $DataRow['pre_n_o_c'];
    $MSPEED = $DataRow['pre_b_freq'];
    $MGPU = $DataRow['pre_turbo_freq'];
    $MTYPE = $DataRow['pre_cache_size'];
    $MSIZE = $DataRow['pre_price'];
    
	

	
	
?>
<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $MN; ?> </td>
<td><?php echo $MBN;  ?> </td>
<td><?php echo $MMN;  ?> </td>
<td><?php echo $MOS;  ?> </td>
<td><?php echo $MPRO;  ?> </td>
<td><?php echo $MCORE;  ?> </td>
<td><?php echo $MSPEED;  ?> </td>
<td><?php echo $MGPU;  ?> </td>
<td><?php echo $MTYPE;  ?> </td>
<td><?php echo $MSIZE;  ?> </td>
<td><a href= 'view_processor.php?Delete=<?php echo $ID; ?>'>Delete</a></td>
<td><a href= 'Update.php?Update=<?php echo $ID; ?>'>Update</a></td>
</tr>
<?php } ?>
	</table>

<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$Delete_record =  $_GET['Delete'];
$Delete_Query = "DELETE FROM processor WHERE pre_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query);

?>
    </body>

</html>