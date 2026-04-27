<?php
session_start();
unset($_SESSION["name"]);
echo "session deleted";
?>