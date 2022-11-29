<?php

session_start();
if (!empty($_SESSION['user'])) {
    session_unset();
    session_destroy();
    echo "Sesión finalizada";
}
