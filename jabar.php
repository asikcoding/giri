<?php 
// header("Content-Type: application/json");
include 'koneksi.php';
	
	
if(isset($_GET['userid'])){
   $condition = " id=".$_GET['id'];
}
	// $id = $_GET['id'];
		
	$barang = mysqli_query($conn,"SELECT * FROM tb_harga WHERE ID =".$condition);
	$response = array();
		while($row = mysqli_fetch_assoc($barang))
		{
		  echo json_encode($response[]=$row); 
		 }
	
	
	
	
 ?>