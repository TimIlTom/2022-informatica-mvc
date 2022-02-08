<?php

namespace Core;

use Mysqli;
use App\Config;

/**
 * Base model
 *
 * PHP version 7.0
 */
abstract class Model
{
    private static $db = null;
    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        // static $db = null;

        if (self::$db === null) {
            self::$db = new mysqli(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD,Config::DB_NAME);

			// Check connection
			if (self::$db -> connect_errno) {
			  $message = "Non rieco a connettermi: " . $mysqli -> connect_error;
			  $file = "Model.php";
			  $line = "29";
			  errorHandler($level, $message, $file, $line);
			}
        }

        return self::$db;
    }
    protected static function closeDB() {
        mysqli_close(self::$db);
    }
}