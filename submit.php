<?php
    include('connection.php');
	require_once('Instamojo.php');
	
    if(isset($_POST['college_name'])){
		//Replace AUTH_KEY and AUTH_TOKEN of your account
		$api = new Instamojo\Instamojo('AUTH_KEY', 'AUTH_TOKEN');
		try {
		$response = $api->paymentRequestCreate(array(
			"purpose" => "Matree",
			"buyer_name" => $_POST['college_name'],
			"amount" => "200",
			"redirect_url" => "http://127.0.0.1/form/handle_redirect.php"
			));
		}
		catch (Exception $e) {
			print('Error: ' . $e->getMessage());
		}
		
		$tid = $response['id'];
        $college_name = $_POST['college_name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
		$events=implode(', ', $_POST['Events']);
        $nop_b = $_POST['nop_b'];
		$nop_g = $_POST['nop_g'];
        $accommodation = $_POST['Accommodation'];
		
        $query = mysql_query("INSERT INTO `matree`.`details` (`college_name`, `email`, `contact`, `events`, `nop_boys`, `nop_girls`, `accommodation`, `transaction_id`) VALUES ('$college_name', '$email', '$contact', '$events', '$nop_b', '$nop_g', '$accommodation', '$tid');");
		
		header('Location: '.$response['longurl']);
    }else{
		print("Error...");
	}
?>