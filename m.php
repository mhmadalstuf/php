<?php

$dsn = 'mysql:host=localhost;dbname=vaccine';      // Database host // Database name
$user = 'root';   // Database username
$pass = '';   // Database password
    // Character set

// Data Source Name
$options = array(
PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8",

);

try {
    $con = new PDO($dsn, $user, $pass, $options);
    $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Connection failed
    echo "Connection failed: " . $e->getMessage();
}
?>
