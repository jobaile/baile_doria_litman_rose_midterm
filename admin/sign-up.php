<?php 
function userSub($fname, $lname, $email, $country) {
	require_once('connect.php');
	//var_dump($_POST);

	//check if the email already exists
	$email_exist_query = 'SELECT COUNT(*) FROM tbl_user WHERE email = :email';
	$email_exist_set = $pdo->prepare($email_exist_query);
	$email_exist_set->execute(
		array( 
			":email"=>$email 
		)
	);

	if($email_exist_set->fetchColumn() > 0) {

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

		$insert_user_query = "INSERT INTO tbl_user(firstname, lastname, email, country) VALUES (:firstname, :lastname, :email, :country)";
		$insert_user_set = $pdo->prepare($insert_user_query);
		$insert_user_set->execute(
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








