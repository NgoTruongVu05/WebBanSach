<?php
if (!defined('DB_SERVER')) {
    define('DB_SERVER', 'localhost');
}

if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}

if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}

if (!defined('DB_NAME')) {
    define('DB_NAME', 'webbansach');
}

// Create connection
$database = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($database->connect_error){
    die("Lỗi: không kết nối được database. " . $database->connect_error);
}
?>