<?php
/**
 * Created by PhpStorm.
 * User: Shreya
 * Date: 7/30/2018
 * Time: 8:13 AM
 */
include_once 'database.php';

if(isset($_POST['Add'])) {
    header("location: http://www.example.com/page.php");
}
?>


<html>
<style>
</style>

<body>
<form action="table.php" method="post" >
    <input type='submit' name='Add' />
</form>

<table >
    <tr>
        <th>Code</th>
        <th>Title</th>
        <th>Description</th>
        <th>Type</th>
        <th>Size</th>
    </tr>

    <?php
    $sql= "SELECT * FROM clothes";
    $result = $conn->query($sql);

    if ($result -> num_rows > 0) {
        for($i=0; $row = $result -> fetch_assoc();$i++){
            ?>
            <tr style="background-color: <?php echo  $i % 2==0 ? 'yellow':'white' ?>">
                <td><?php echo $row ["code"] ?> </td>
                <td><?php echo $row ["title"] ?> </td>
                <td><?php echo $row ["description"] ?> </td>
                <td><?php echo $row ["type"] ?> </td>
                <td><?php echo $row ["size"] ?> </td>
            </tr>

            <?php
        }
    }else {
        echo "0 results";
    }

    $conn->close();
    ?>

</table>
</body>
</html>