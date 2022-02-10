<?php

namespace App\Models;

use PDO;

/**
 * Example user model
 *
 * PHP version 7.0
 */
class Events extends \Core\Model
{

    /**
     * Get all the users as an associative array
     *
     * @return array
     */
    public static function getAll()
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT evento_id, titolo, costo FROM eventi');
        $result = array();

        if ($stmt->num_rows > 0) {
            // output data of each row
            while($row = $stmt->fetch_assoc()) {
                $obj = [
                    "evento_id" => $row["evento_id"],
                    "titolo" => $row["titolo"],
                    "costo" => $row["costo"]
                ];
                array_push($result, $obj);
            }
        }
        return $result;
    }

    public static function getEvents($id)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT evento_id, titolo FROM eventi WHERE evento_id='.$id);
        $result = array();
        if ($stmt->num_rows > 0) {
            // output data of each row
            $row = $stmt->fetch_assoc();
            $obj = [
                "evento_id" => $row["evento_id"],
                "titolo" => $row["titolo"]
            ];
            array_push($result,$obj);
        }
        return $result;
    }
}
