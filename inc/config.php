
<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) 

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'cloud');
 
 Attempt to connect to MySQL database */

$con=mysqli_init(); 
mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); 
mysqli_real_connect($con, "mysqlbj.mysql.database.azure.com", "bijay@mysqlbj", {9818756516Bj}, {cloud}, 3306);

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
