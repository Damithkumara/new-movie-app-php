<?php
    // signup function
    function signup(){
        $sql= "intert into user values(' ".$_POST['signup_username']." ' ,
                                         ' ".$_POST['signup_fname']." ',
                                         ' ".$_POST['signup_lname']." ' ,
                                         ' ".$_POST['signup_age']." ',
                                         ' ".hashed($_POST['signup_new_password'])." ' )";
   
        if(set_data($sql)){
            echo "<script>window.location='index.php'<script>";
        }
    }
    //encrypt password
    function hashed($password)
    {
        $hashedpassword = sha1(md5($password));
        return $hashedpassword;
    }

?>