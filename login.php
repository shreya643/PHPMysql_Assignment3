<?php
/**
 * Created by PhpStorm.
 * User: Shreya
 * Date: 7/30/2018
 * Time: 9:30 AM
 */


session_start();

if(isset($_POST['submit'])){
    include 'db_connect.php';
    $user = $_POST["username"];
    $pwd = $_POST["password"];

    $query = "select * from users where username = '$user' && password = '$pwd'";

    $result = mysqli_query ( $conn , $query);
    $count=mysqli_num_rows($result);

    if($count == 1){
        $_SESSION["LoggedIn"] = TRUE;
        header('location:add_clothes.php');
    }else{

        echo 'Invalid Details';
    }
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LOGIN PAGE</title>
</head>
<body>
<h1><> LOGIN TO MANAGE CLOTHES</h1>

<center><form method="post" action="login.php" >

        Username: <input type="text" name="username"><br>
        Password: <input type="password" name="password"><br>
        <input type="submit" name="submit" value="Login"><br>
        <p>Not a user yet ?</p><br>
    </form>
    <div id="button"><a href="register.html">REGISTER</a></div>
</center>
</body>

</html>
