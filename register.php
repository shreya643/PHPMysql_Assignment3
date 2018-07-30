<?php
/**
 * Created by PhpStorm.
 * User: Shreya
 * Date: 7/30/2018
 * Time: 9:15 AM
 */

if(isset($_POST['Register']))

{
    include 'db_connect.php';
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = " insert into users (username,password,email_id) values ( '$user' ,'$password' , '$email' ) ";
    echo $sql;
    $result = mysqli_query ( $conn , $sql );
    if ( $result )
    { echo " Registeration Success ";
    }
    else
    { echo " Registeration Failed \n Try again ";

    }

}

?>
<html>
<head>
    <title> Registration </title>
</head>
<body>
<form method="post" action="register.php" >
    User name: <input type="text" name="user" />
    Email id: <input type="email" name="email" />
    Password: <input type="password" name="password" />
    <input type="submit" name="Register"  value="Register" />
</form>
</body>
</html>
