
<?php
require_once( "db.php");
session_start();


if($_SESSION['email_user']){


session_unset();
session_destroy();
header( "location: index.php");
}
else{


header( "location: index.php");
}
?>