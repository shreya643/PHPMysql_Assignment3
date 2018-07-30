<?php
/**
 * Created by PhpStorm.
 * User: Shreya
 * Date: 7/30/2018
 * Time: 8:06 AM
 */
include_once 'database.php';

if(isset($_POST['table'])) {
    header('location:cloth_table.php');
    exit;
}

$code= $_POST['code'];
$title= $_POST['title'];
$description= $_POST['description'];
$type= $_POST['type'];
$size= $_POST['size'];
print_r($_POST);

$stmt =$conn->prepare(
    " insert into clothes (code, title, description, type , size ) VALUES ( ? , ? , ? , ? , ? ) "
);

$stmt->bind_param(
    "ssssd",$code, $title, $description, $type , $size );

echo "here";

$stmt->execute();
$stmt->close();
$conn->close();
?>

<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<p><b><h2><center>Add New Product</center></h2></b></p>
<center><form action="insert.php" method="post">

        CODE:<input type="number" name="code" ><br>
        TITLE: <input type="text" name="title" ><br>
        Description: <input type="text" name="description" ><br>
        TYPE: <input type="text" name="type" ><br>
        SIZE: <select name="size">
            <option value="Large">Large</option>
            <option value="X-Large">X-Large</option>
            <option value="Small">Small</option>
        </select>
        <br>
        <input type="submit" value="Submit"><br>

    </form>
</center>
<br><center><div id="button"><a href="logout.php">LOGOUT</a></div></center>

<form action="table.php" method="post" >
    <label>Show clothes</label><input type='submit' name='table'  />
</form>
</body>
</html>
