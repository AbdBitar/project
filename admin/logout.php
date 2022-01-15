
<?php
session_start();
session_destroy();
unset ($_SESSION["email_dash"]);

header('Location: login.php');

?>