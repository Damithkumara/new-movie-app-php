<?php
    session_start();
    require('db/connection.php');
    require('functions/function.php');

    if(isset($_COOKIE['username'])){
        if(!isset($_COOKIE['username'])){
            $_SESSION['username'] = $_COOKIE['username'];
        }
    }

    if(isset($_COOKIE['username'])==false)
    {
        if(isset($_GET['page']) && $_GET['page']=='signup')
        {
            require('view/signup.php');
        }
        else
        {
            require('view/login.php');
        }
    }else{
        if(isset($_GET['page']) && $_GET['page'] == 'signout')
        {
            signout();
        }
        else{
            require('view/home.php');
        }
    }

?>