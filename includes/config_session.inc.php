<?php



ini_set('session.use_only_cookies', 1); // fiecare session ID e transmis doar prin cookies, nu si prin URL
ini_set('session.use_strict_mode', 1);  // OBLIGATORIU // website foloseste seesion ID creat doar de server

session_set_cookie_params([

      'lifetime' => 1800,
      'domain' => 'localhost',   // domeniu generat de xampp
      'path' => '/',
      'secure' => true, // doar cu conexiune https, nu http
      'httponly' => true

]);

session_start();