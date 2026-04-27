<?php
session_start();
session_destroy();
echo "all sessions destroyed";
?>