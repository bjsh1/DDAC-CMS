
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

define('DB_SERVER', 'mysqlbj.mysql.database.azure.com');
define('DB_USERNAME', 'bijay@mysqlbj');
define('DB_PASSWORD', '9818756516Bj');
define('DB_NAME', 'cloud');
 
/* Attempt to connect to MySQL database */

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
