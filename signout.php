<?php
session_start();
unset($_SESSION['user']);
header('Location:  http://localhost/applications/cab230-project/search.php');
exit();
?>