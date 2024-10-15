<?php

require_once "includes/config_session.inc.php";
require_once "includes/message_handler_view.inc.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<form action="includes/message_handler.inc.php" method="post">

<textarea class="text-box" name="private_message" placeholder="Type your private message..." rows="4" wrap = "soft"></textarea>

<button class= "submit-button"> Generate link </button>

<?php

check_input_errors();

?>


</form>







    
</body>
</html>