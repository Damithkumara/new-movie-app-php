<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=".css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-10 col-md-8 col-lg-6">
                <h1 class="align-items-center">Welcome to ABC Movies</h1>
                <h3 class="align-items-center">Please log in to continue</h3>
                <form action="" method="post">
                    <table>
                        <tr>
                            <td>
                                username :
                            </td>
                            <td>
                                <input type="text" name="login_username" id="">
                            </td>
                            <!-- check user name empty or not -->
                            <?php
                                if(isset($_POST['login_btn'])){
                                    if($_POST['login_username']=='')
                                    {
                                        echo "<td><span style=\"color:red\"> please enter an username</span></td>";
                                    }
                                }
                            ?>
                        </tr>

                        <tr>
                            <td>
                                password :
                            </td>
                            <td>
                                <input type="password" name="login_password" id="">
                            </td>
                            <!-- check password empty or not -->
                            <?php
                                if(isset($_POST['login_btn'])){
                                    if($_POST['login_password']=='')
                                    {
                                        echo "<td><span style=\"color:red\"> please enter an password</span></td>";
                                    }
                                }
                            ?>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="checkbox" name="remember-me" id="" value="true">Remember me</td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" value="Login" name="login_btn" class="btn btn-primary">
                            </td>
                            <td>
                                <input type="button" value="SignUp" name="signup_btn" onClick="signup()" class="btn btn-secondary">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['login_btn']))
        {
            if($_POST['login_username'] != '' && $_POST['login_password'] != '')
            {
                login();
            }
        }
    ?>  
    <script>
        function signup()
        {
            location.href="index.php?page=signup";
        }
    </script>      
    </body>
</html>