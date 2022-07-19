<?php
session_start();
if ($_SESSION['status_login'] == true) {
    header('location:admin.php');
} else {
    header('location:login.php');
}