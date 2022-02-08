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
        $stmt = $db->query('SELECT utente_id, nome FROM utenti');
        $result = array();

        if ($stmt->num_rows > 0) {
            // output data of each row
            while($row = $stmt->fetch_assoc()) {
                $obj = [
                    "user_id" => $row["utente_id"],
                    "name" => $row["nome"],
                ];
                array_push($result,$obj);
            }
        }
        static::closeDB();
        return $result;
    }

    public static function getUser($id)
    {
        $db = static::getDB();
        $stmt = $db->query('SELECT utente_id, nome FROM utenti WHERE utente_id='.$id);
        $result = array();
        if ($stmt->num_rows > 0) {
            // output data of each row
            $row = $stmt->fetch_assoc();
            $obj = [
                "user_id" => $row["utente_id"],
                "name" => $row["nome"],
            ];
            array_push($result,$obj);
        }
        static::closeDB();
        return $result;
    }
}
