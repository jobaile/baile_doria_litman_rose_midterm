<?php 
function userSub($firstname, $lastname, $email, $country) {
	require_once('connect.php');

	$check_email_query = 'SELECT COUNT(*) FROM tbl_user WHERE email = :email';
	$check_email_set = $pdo->prepare($check_email_query);
	$check_email_set->execute(
		array( ':email'=>$email )
	);

	if($check_email_set->fetchColumn() > 0) {

		$update_last_query = 'UPDATE tbl_user SET lastupdate = current_timestamp WHERE email = :email';
		$update_last_set = $pdo->prepare($update_last_query);
		$update_last_set->execute(
			array( ':email'=>$email )
		);

	} else {

		$insert_user_query = "INSERT INTO tbl_user(firstname, lastname, email, country) VALUES (:firstname, :lastname, :email, :country)";
		$insert_user_set = $pdo->prepare($insert_user_query);
		$insert_user_set->execute(
			array(
				":firstname"=>$firstname,
				":lastname"=>$lastname,
				":email"=>$email,
				":country"=>$country
			)
		);
	}
}
?>








