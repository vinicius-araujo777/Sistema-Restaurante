<?php
session_start();
session_destroy();
header("Location: /Sistema-Restaurante/login/index.php");
exit;
