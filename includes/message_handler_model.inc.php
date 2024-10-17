<?php

declare(strict_types=1);

function set_user(object $pdo, string $message) {


$query = "INSERT INTO messages (message_text, unique_link) 
VALUES (:message_text, :unique_link);";

$stmt = $pdo->prepare($query);





$unique_link = bin2hex(random_bytes(16));
$display_link = "http://localhost/message/includes/view_message.php?link=" . $unique_link;


$stmt->bindParam(":message_text", $message);
$stmt->bindParam(":unique_link", $unique_link);

$stmt->execute();

$_SESSION["unique_link"] = $unique_link;
$_SESSION["display_link"] = $display_link;


}

