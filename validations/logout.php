<?php
    session_start();

    unset($_SESSION['login']);
    unset($_SESSION['password']);

    Header("location:../index.html");
?>