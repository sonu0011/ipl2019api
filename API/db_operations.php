<?php 
include_once('db_connection.php');

class DbOperation{
	private $con;
	function __construct(){
	    $obj = new Dbconnect();
		$this->con = $obj->returnobject();
	}
	
		function batting_leaders(){
					$products = array(); 
					$sql ="select * from batting_leaders";
					$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					      					        $temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['image'];
					        $temp['heading'] =$row['heading'];
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}
				else {
					echo 'no result found';
				}
	}
	function bowling_leaders(){
					$products = array(); 
					$sql ="select * from bowling_leaders";
					$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					      					        $temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['image'];
					        $temp['heading'] =$row['heading'];
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}
				else {
					echo 'no result found';
				}
	}


function team_details(){
					$products = array(); 
					$sql ="select * from teams";
					$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					    $temp['team_id'] =$row['team_id'];
					      					        $temp['team_image'] ="http://192.168.43.126/IPL2019/logo/".$row['team_image'];
					       
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}
				else {
					echo 'no result found' ;
				}
	}
	function get_batting_details($query){
					$products = array(); 
					$sql="";
					if ($query == "Most 50") {
						$sql ="SELECT bat_name,bat_image,bat_fifties FROM `batsman` WHERE bat_fifties != 0  ORDER by bat_fifties DESC LIMIT 10";
						$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					    $temp['name'] =$row['bat_name'];
					 	$temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['bat_image'];
					 	$temp['feat'] =$row['bat_fifties'];
					       
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}	
					}
					if ($query == "Most 100") {
						$sql ="SELECT bat_name,bat_image,bat_hundered FROM `batsman` WHERE bat_hundered != 0  ORDER by bat_hundered DESC LIMIT 10";
						$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					    $temp['name'] =$row['bat_name'];
					 	$temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['bat_image'];
					 	$temp['feat'] =$row['bat_hundered'];
					       
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}
				}
					if ($query == "Fastest 50") {
						$sql = "SELECT bat_name,bat_image,bat_fifty_ball FROM `batsman` WHERE bat_fifty_ball != 0  ORDER by bat_fifty_ball ASC LIMIT 10";
									$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					    $temp['name'] =$row['bat_name'];
					 	$temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['bat_image'];
					 	$temp['feat'] =$row['bat_fifty_ball'];
					       
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}

				}
				if ($query == "Fastest 100") {
						$sql = "SELECT bat_name,bat_image,bat_century_ball FROM `batsman` WHERE bat_century_ball != 0  ORDER by bat_century_ball ASC LIMIT 10";
									$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					    $temp['name'] =$row['bat_name'];
					 	$temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['bat_image'];
					 	$temp['feat'] =$row['bat_century_ball'];
					       
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}
				
				}
				if ($query == "Most Fours" || $query == "Most Sixes") {
					if ($query == "Most Fours") {
						$sql = "SELECT bat_name,bat_image,	bat_fours FROM `batsman` WHERE 	bat_fours != 0  ORDER by bat_fours DESC  LIMIT 10";
						
					}
					if ($query == "Most Sixes") {
						$sql = "SELECT bat_name,bat_image,bat_sixes	 FROM `batsman` WHERE bat_sixes	 != 0  ORDER by bat_sixes DESC LIMIT 10";
						
					}
						
									$result = mysqli_query($this->con,$sql);
					if ($result) {
					while ($row =mysqli_fetch_assoc($result)) {
					    $temp = array();
					    $temp['name'] =$row['bat_name'];
					 	$temp['image'] ="http://192.168.43.126/IPL2019/IMAGES/".$row['bat_image'];
					 	if ($query == "Most Fours") {
					 		$temp['feat'] =$row['bat_fours'];
					 	}
					 	if ($query == "Most Sixes") {
					 		$temp['feat'] =$row['bat_sixes'];
					 		
					 	}
					 	
					       
					  
					    array_push($products, $temp);

					}
					echo json_encode($products);
		
				}
				
				}

					
					
	}
}
