<?php


require_once("dbh.inc.php");
require_once("view_message_model.inc.php");



if(isset($_GET['link'])) {


$unique_link = $_GET['link'];


 if(message_not_read($pdo, $unique_link) == true ) {

    $result = get_message($pdo, $unique_link);
    if ($result) {
    
    echo $result['message_text'];
    echo '<br>';
} else {
    echo "Mesajul nu a fost găsit sau a fost deja șters.";
}

    delete_message($pdo, $unique_link);

}

else {

    echo '<br>';
    echo "Mesajul a fost deja  citit si sters!";

}


}
else {

    Header(Location: "../index.php");
    die();
}

