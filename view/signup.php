<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css/bootstrap.min.css">
    <title>SignUp</title>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h1 class="align-items-center">Welcome New User</h1>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>
                                username :
                            </td>
                            <td>
                                <input type="text" name="signup_username" id="">
                            </td>
                            <?php
                                    if(isset($_POST['signup_btn'])){
                                        if($_POST['signup_username']=='')
                                        {
                                            echo "<td><span style=\"color:red\"> please enter an username</span></td>";
                                        }
                                    }
                                ?>
                        </tr>

                        <tr>
                            <td>
                                first name :
                            </td>
                            <td>
                                <input type="text" name="signup_fname" id="">
                            </td>
                            <?php
                                    if(isset($_POST['signup_btn'])){
                                        if($_POST['signup_fname']=='')
                                        {
                                            echo "<td><span style=\"color:red\"> please enter first name</span></td>";
                                        }
                                    }
                                ?>
                        </tr>

                        <tr>
                            <td>
                                last name :
                            </td>
                            <td>
                                <input type="text" name="signup_lname" id="">
                            </td>
                            <?php
                                    if(isset($_POST['signup_btn'])){
                                        if($_POST['signup_lname']=='')
                                        {
                                            echo "<td><span style=\"color:red\"> please enter last name</span></td>";
                                        }
                                    }
                                ?>
                        </tr>

                        
                        <tr>
                            <td>
                                age :
                            </td>
                            <td>
                                <input type="text" name="signup_age" id="">
                            </td>
                            <?php
                                    if(isset($_POST['signup_btn'])){
                                        if($_POST['signup_age']=='')
                                        {
                                            echo "<td><span style=\"color:red\"> please enter age</span></td>";
                                        }
                                    }
                                ?>
                        </tr>

                        <tr>
                            <td>
                                password :
                            </td>
                            <td>
                                <input type="text" name="signup_new_password" id="">
                            </td>
                            <?php
                                    if(isset($_POST['signup_btn'])){
                                        if($_POST['signup_new_password']=='')
                                        {
                                            echo "<td><span style=\"color:red\"> please enter password</span></td>";
                                        }
                                    }
                                ?>
                        </tr>

                        <tr>
                            <td>
                                confirm password :
                            </td>
                            <td>
                                <input type="text" name="signup_new_confirm_password" id="">
                            </td>
                            <?php
                                    if(isset($_POST['signup_btn'])){
                                        if($_POST['signup_new_confirm_password']=='')
                                        {
                                            echo "<td><span style=\"color:red\"> please enter confirm password</span></td>";
                                        }
                                        elseif ($_POST['signup_new_confirm_password']=='' && $_POST['signup_new_password']=='' )
                                        {
                                            echo "<td><span style=\"color:red\"> password doesnot match</span></td>";
                                        }
                                    }
                                ?>
                        </tr>

                        <tr>
                            <td></td>
                            <td><input type="submit" value="register" name="signup_btn" class="btn btn-primary"></td>
                        </tr>
                        
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php

      if(isset($_POST['signup_btn'])){
        if($_POST['signup_new_password'] != '' && $_POST['signup_new_confirm_password'] != '' 
        && $_POST['signup_new_password'] == $_POST['signup_new_confirm_password'] &&
        $_POST['signup_username'] != '' && $_POST['signup_fname'] != '' &&
        $_POST['signup_lname'] != '' && $_POST['signup_age'] != '')
        {
            signup();
        }
    }
      

            
      
     
    ?>
</body>
</html>