<?php
    define('SERVER','localhost');
    define('USER','root');
    define('PASSWORD','');
    define('DB','moviedb');

    function connect(){

        $conn = mysqli_connection(SERVER,USER,PASSWORD,DB);
        if(!$conn)
        {
            die("connection failed".mysqli_connect_error());
        }
        return $conn;
    }

    function disconnect(){
        mysqli_close($conn);
    }

    function get_Data($sql)
    {
        $conn = connect();
        $result = mysqli_query($conn,$sql);
        return $result;
        mysqli_free_result($result);
        disconnect($conn);
    }

    function set_Data($sql){
        $conn = connect();
        if(mysql_query($conn,$sql)){
            return true;
        }
        else
        {
            echo "<div class='alert alert-danger'>Error Please try again".mysql_error($conn)."</div>";
        }
        disconnect($conn);
    }

?>