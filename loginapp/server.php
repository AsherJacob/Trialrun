<?php

    session_start();

    //Initialize variables

    $username = "";
    $email = "";

    $db = mysqli_connect('localhost','root','','user_info') or die("could not connect"  ) ;

    // Register user

    $username = mysqli_connect_real_escape_string($db,$_POST['username']);

    $email = mysqli_connect_real_escape_string($db,$_POST['email']);
    $password1 = mysqli_connect_real_escape_string($db,$_POST['password1']);
    $password2 = mysqli_connect_real_escape_string($db,$_POST['password2']);
    