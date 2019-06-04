<?php

session_start();
session_destroy();

// Change page to login
header('Location: .../sfcp/login.php');

?>