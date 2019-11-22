<?php
namespace user;

include_once 'Database.php';

use db\Database;

class Users extends Database
{
    public function getAllUsersData()
    {
        $db = NEW Database();
        $sql = "SELECT * FROM users WHERE 1";
        $allUsersDateArray = $db->select($sql);
    }


    public function getAllUsersDateandName()
    {
        $db = New Database();
        $sql = "SELECT name,`date` FROM users WHERE 1";
        $getAllUsersDateandName = $db->select($sql);

        // var_dump($getAllUsersDateandName);
    }


    public function GetUsersAndCars()
    {
        $db = New Database();
        $sql = "SELECT name, lastname, car, cost FROM users, car_price WHERE name = user_name";
        $GetUsersAndCars = $db->select($sql);

        // var_dump($GetUsersAndCars);
        print '<table>';
        foreach ($GetUsersAndCars as $objarray){
            print '<tr>';
            foreach ($objarray as $value){
                print '<td>' . $value . '</td>';
            }
            print '</tr>';
        }
        print '</table>';
    }
}
?>
<html>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        table, td, th {
            border: 1px solid black;
        }
    </style>
</html>