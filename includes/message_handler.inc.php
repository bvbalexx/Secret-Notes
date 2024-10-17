<?php 


if($_SERVER["REQUEST_METHOD"] == "POST") {

$message = $_POST["private_message"];

try {

require_once 'dbh.inc.php';
require_once 'message_handler_model.inc.php';
require_once 'message_handler_contr.inc.php';

// ERROR HANDLERS

$errors = [];

if(is_input_empty($message) == true ) {

  $errors["empty_input"] = "Fill in your private message";

}

if(is_input_length_valid($message) == false ) {

   $errors["invalid_lenght"] = "Character limit passed. The maximum is 500";

}


require_once 'config_session.inc.php';

if ($errors) {

$_SESSION["errors_signup"] = $errors;

header("Location: ../index.php");

die();
 

}

$_SESSION["message"] = $message;

create_user($pdo, $message);

$_SESSION['link_generated'] = true;

header("Location: generate_success.php");


$pdo = null;
$stmt = null;

die();



} catch (PDOException $e) {

    die("Query failed: " . $e->getMessage());
  

}


}


else {


    header("Location: ../index.php");
    die();


}