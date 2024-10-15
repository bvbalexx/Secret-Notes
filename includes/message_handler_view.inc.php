<?php

declare (strict_types=1);

function check_input_errors() {

if(isset($_SESSION["errors_signup"])) {

    $errors = $_SESSION["errors_signup"];
      
    echo '<br>';
    echo '<br>';
    foreach ($errors as $error) {

       echo '<p class="error-message">' . $error . '</p>';
       echo '<br>';
       echo '<br>';
    }

    unset($_SESSION["errors_signup"]);


}

}

