<?php
session_start();
unset ($_SESSION['nick']);
session_destroy();
header('Location: index.html');

?>