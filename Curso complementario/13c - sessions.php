<?php
session_start();

session_destroy();
header('Location: 13a - sessions.php');