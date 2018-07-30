<?php
/**
 * Created by PhpStorm.
 * User: shreya
 * Date: 7/28/18
 * Time: 9:03 AM
 */
class DBConnect{
    public function getDBConnection(){
        $conn= new mysqli('localhost','workshop','workshop','phpclass');

        return $conn;
    }
}