<?php

@include 'config.php';

session_destroy();

header('location:login_form.php');

?>