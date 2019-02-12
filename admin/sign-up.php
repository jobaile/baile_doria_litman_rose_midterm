<?php 

//Array stuff that was on the initial signup.php
	$fname = trim($_POST['firstname']);
	$lname = trim($_POST['lastname']);
	$email = trim($_POST['email']);
	$country = $_POST['country'];
	if(empty($fname) || empty($lname) || empty($email) | empty($country)){
		$message = "Please fill in the required fields.";
	}else{
		$result = userSub($fname, $lname, $email, $country);
		$message = $result;
	}

//When user creates a new subscription	
function userSub($fname, $lname, $email, $country) {
	require_once('config.php');
	//var_dump($_POST);

	//check if the email already exists
	$email_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE email = :email';
	$email_exist_set = $pdo->prepare($email_exist_query);
	$email_exist_set->execute(
		array( 
			":email"=>$email 
		)
	);

	//This will update first name, last name, country and last updated time when using an existing email
	if($email_exist_set->fetchColumn()){
		old_subscriber($fname, $lname, $email); //this is for old subscribers
		$last_update_query = 'UPDATE tbl_user SET firstname = :firstname, lastname = :lastname, country = :country, lastupdate = CURRENT_TIMESTAMP WHERE email = :email';
		$last_update_set = $pdo->prepare($last_update_query);
		$last_update_set->execute(
			array( 
				":firstname"=>$fname,
				":lastname"=>$lname,
				":email"=>$email,
				":country"=>$country
			)
		);

	} else {

		//insert subscriber
		new_subscriber($fname, $lname, $email); //this is for new subscribers
		$insert_sub_query = "INSERT INTO tbl_user(firstname, lastname, email, country) VALUES (:firstname, :lastname, :email, :country)";
		$insert_sub_set = $pdo->prepare($insert_sub_query);
		$insert_sub_set->execute(
			array(
				":firstname"=>$fname,
				":lastname"=>$lname,
				":email"=>$email,
				":country"=>$country
			)
		);
	}
}
?>








