<?php

declare (strict_types=1);

function message_not_read(object $pdo, string $unique_link) {

$query = "SELECT is_read FROM messages WHERE unique_link=:unique_link;";

$stmt = $pdo->prepare($query);
$stmt->bindParam(":unique_link", $unique_link);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);

return $result && $result['is_read'] == 0;

}
function get_message(object $pdo, string $unique_link) {

$query = "SELECT message_text FROM messages WHERE unique_link = :unique_link;";

$stmt = $pdo->prepare($query);
$stmt->bindParam(":unique_link", $unique_link);
$stmt->execute();

$result = $stmt->fetch(PDO::FETCH_ASSOC);
return $result;

}


function delete_message(object $pdo, string $unique_link) {

    $query = "DELETE FROM messages WHERE unique_link = :unique_link;";
    
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":unique_link", $unique_link);
    $stmt->execute();
    
    echo "Mesajul a fost deschis si sters cu succes";
    
}