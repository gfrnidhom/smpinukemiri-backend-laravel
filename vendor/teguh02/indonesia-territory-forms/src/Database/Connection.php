<?php

namespace Teguh02\IndonesiaTerritoryForms\Database;

use PDO;

class Connection {

    public static $FETCH_ASSOC;

    function __construct()
    {
        self::$FETCH_ASSOC = PDO::FETCH_ASSOC;   
    }

    /**
     * Create a new database connection
     */
    function db() {
        // Load the database file
        $db_file = dirname(__DIR__, 2) . '/database/indonesia-territory.sqlite';

        // Check if the database file exists
        if (!file_exists($db_file)) {
            throw new \Exception('Database file not found');
        }

        // Connect to the database
        return new PDO('sqlite:' . $db_file);
    }
}