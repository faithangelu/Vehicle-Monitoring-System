<?php
if(!isset($_SESSION['userId']))
{
    // not logged in
    session_destroy();
    header('Location: login.php');
    exit();
}

?>
