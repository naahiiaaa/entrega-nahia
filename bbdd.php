<?php
define('db_host', 'localhost');
define('db_user', 'nahia');
define('db_pass', '1234');
define('db_name', 'PORTFOLIO_NAHIA');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
