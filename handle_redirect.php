<?php
    include('connection.php');
	require_once('Instamojo.php');
	
    if(isset($_GET['payment_id'])){
		
		$payment_id=$_GET['payment_id'];
		$payment_status=$_GET['payment_status'];
		$payment_request_id=$_GET['payment_request_id'];
		
        $query = mysql_query("UPDATE `matree`.`details` SET `payment_status` = '$payment_status', `payment_id` = '$payment_id' WHERE `details`.`transaction_id` = '$payment_request_id';");
		
		print("<h3>Details have been saved! <a href='http://127.0.0.1/form/form.html'></br>Go back to Home Page</a></h3>");
    }else{
		print("Error...");
	}
?>