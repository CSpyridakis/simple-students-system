<?php
    $servername = "localhost";
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $dbname = getenv('MYSQL_DATABASE');

    define('DB_SERVER', 'localhost:3036');
    define('DB_USERNAME', getenv('MYSQL_USER'));
    define('DB_PASSWORD', getenv('MYSQL_PASSWORD'));
    define('DB_DATABASE', getenv('MYSQL_DATABASE'));
