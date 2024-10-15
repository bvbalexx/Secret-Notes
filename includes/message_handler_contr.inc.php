<?php

declare(strict_types=1);

function is_input_empty($message) {

if(empty($message)) {

    return true;
}
    else
    {
        return false;
    }
}



function is_input_length_valid($message) {

if(strlen($message)<=500) {
 
    return true;
}

else {

    return false;

     }
}
