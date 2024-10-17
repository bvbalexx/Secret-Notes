<?php

require_once("config_session.inc.php");

if(isset($_SESSION['link_generated']) && ($_SESSION['link_generated']==TRUE)) {


  if(isset($_SESSION['display_link'])) {

    echo "<h2>Linkul tău pentru mesajul secret:</h2>";
    echo "<p><a href='{$_SESSION['display_link']}' target='_blank'>{$_SESSION['display_link']}</a></p>";
    echo "<p>Trimite acest link către destinatar pentru a-i permite accesul la mesaj.</p>";

  }
  else
  {
     echo "There is no link availabile";

  }

  unset($_SESSION['display_link']);
  unset($_SESSION['unique_link']);
  unset($_SESSION['link_generated']);

  session_destroy();

}

else {

    header("Location : ../index.php");
    die();
}
