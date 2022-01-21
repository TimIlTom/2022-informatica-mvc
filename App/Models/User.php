<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class User extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT user_id, name FROM users');
        $result = array();

        if ($stmt->num_rows > 0) {
            // output data of each row
            while($row = $stmt->fetch_assoc()) {
                $obj = [
                    "user_id" => $row["user_id"],
                    "name" => $row["name"],
                ];
                array_push($result,$obj);
            }
        }
        return $result;
    }

    public static function getUser($id)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT user_id, name FROM users WHERE user_id='.$id);
        $result = array();
        if ($stmt->num_rows > 0) {
            // output data of each row
            $row = $stmt->fetch_assoc();
            $obj = [
                "user_id" => $row["user_id"],
                "name" => $row["name"],
            ];
            array_push($result,$obj);
        }
        return $result;
    }
}
