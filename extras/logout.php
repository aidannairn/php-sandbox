<?php
session_start();

// Destroy the session
session_destroy();
header('Location: /php-sandbox/13_sessions.php');