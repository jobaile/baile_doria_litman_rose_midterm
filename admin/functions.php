<?php
	require_once('config.php');

//sending an email to an old sub (email is already in the database)
function old_subscriber($fname, $lname, $email)
{
    $to = $email;
    $subject = 'Ontario Summer Newsletter';
    $body = '
    <h2>Thanks for resubscribing,'. $fname .'</h2>
    <p>Check out or latest promotions at <a href="../index.html>our website</a></p>
    <p>Find yourself doing awesome things this summer!</p>';
    $headers = 'From: tourism@ontariosummer.ca';

    mail($to, $subject, $body, $headers);
    if (!mail($to, $subject, $body, $headers)) {
        $msg = 'The message was not sent. Please try again.';
        echo $msg;
    }
}

// sending an email to a new sub
function new_subscriber($fname, $lname, $email)
{
    $to = $email;
    $subject = 'Ontario Summer Newsletter';
    $body = '
    <h2>Thanks for subscribing,'. $fname .'</h2>
    <p>Check out or latest promotions at <a href="../index.html>our website</a></p>
    <p>Find yourself doing awesome things this summer!</p>';
    $headers = 'From: tourism@ontariosummer.ca';

    mail($to, $subject, $body, $headers);
    if (!mail($to, $subject, $body, $headers)) {
        $msg = 'The message was not sent. Please try again.';
        echo $msg;
    }
}
