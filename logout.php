<?php
/**
 * used to log user out, and end current session
 * user is redirected to the index page(log in)
 */
session_start();
session_destroy();
header("Location:index.php");
exit;
