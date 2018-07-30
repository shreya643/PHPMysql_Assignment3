<?php
/**
 * Created by PhpStorm.
 * User: Shreya
 * Date: 7/30/2018
 * Time: 9:52 AM
 */

session_start();
session_unset();
session_destroy();
echo " Log out success " ;
header('location:login.php');