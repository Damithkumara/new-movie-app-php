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
    //create login
    function login()
    {
        $sql = "select password from user where username '".$_POST['login_username']."' ";
        $result = get_data($sql);
        $user = mysqli_fetch_assoc($result)
        if($user['password'] == hashed($_POST['login_password'])){
            $_SESSION['username'] = $_POST['login_username'];
            echo "<script>window.location='index.php'</script>";
        }else{
            echo "<div class='alert alert-danger'> invalid Credentials. </div>";
        }
    }

?>