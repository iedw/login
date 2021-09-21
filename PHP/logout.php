<?php
session_start();
unset($_SESSION['usuario']);
session_destroy();
header('Location: http://127.0.0.1/login/login.php');