<?php
class DBConnection {
    private static $instance = null;
    private function __construct() {}
    private function __clone() {}

    public static function getInstance() {
        if (self::$instance == null) {
            $config = simplexml_load_file('config.xml');
            $dsn = "mysql:host={$config->host};dbname={$config->db_name};charset={$config->charset}";
            self::$instance = new PDO($dsn, $config->user, $config->password);
        }
        return self::$instance;
    }
}
