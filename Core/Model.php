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

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $db = new mysqli(Config::DB_HOST,Config::DB_USER,Config::DB_PASSWORD,Config::DB_NAME);

			// Check connection
			if ($db -> connect_errno) {
			  $message = "Non rieco a connettermi: " . $mysqli -> connect_error;
			  $file = "Model.php";
			  $line = "29";
			  errorHandler($level, $message, $file, $line);
			}
        }

        return $db;
    }
}
