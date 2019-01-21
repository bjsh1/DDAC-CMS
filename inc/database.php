<?php

include 'config.php';
          

// $conn = mysqli_connect('localhost', 'root', '', 'cloud');



// if(mysqli_connect_errno()){
//   echo"Something is wrong" .mysqli_connect.error();
// }

// /* Database credentials. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */

// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'root');
// define('DB_PASSWORD', '');
// define('DB_NAME', 'cloud');
 
// /* Attempt to connect to MySQL database */

// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// // Check connection

// if($link === false){
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

// // Escape user inputs for security
// $from = mysqli_real_escape_string($link, $_REQUEST['from']);
// $to = mysqli_real_escape_string($link, $_REQUEST['to']);
// $status = mysqli_real_escape_string($link, $_REQUEST['status']);
// $contNo = mysqli_real_escape_string($link, $_REQUEST['contNo']);
 
// // Attempt insert query execution
// $sql = "INSERT INTO shipping (startpoint, endpoint, status, containerNo) VALUES ('$from', '$to', '$status', '$contNo')";
// if(mysqli_query($link, $sql)){
//     header("location:../index.php");
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
// }

///view data
// $result = mysqli_query($link,"SELECT * FROM shipping");

// echo "<table border='1'>
// <tr>
// <th>Shid</th>
// <th>From</th>
// <th>To</th>
// <th>Status</th>
// <th>Date</th>
// <th>CntID</th>
// </tr>";

// while($row = mysqli_fetch_array($result))
// {
// echo "<tr>";
// echo "<td>" . $row['shid'] . "</td>";
// echo "<td>" . $row['startpoint'] . "</td>";
// echo "<td>" . $row['endpoint'] . "</td>";
// echo "<td>" . $row['status'] . "</td>";
// echo "<td>" . $row['date'] . "</td>";
// echo "<td>" . $row['containerNo'] . "</td>";
// echo "</tr>";
// }
// echo "</table>";



// if(isset($_POST['save'])){
//     $sql = "INSERT INTO shipping (startpoint, endpoint, status, containerNo)
//     VALUES ('".$_POST["from"]."','".$_POST["to"]."','".$_POST["status"]."','".$_POST["contNo"]."')";
// }

$from = $_POST['from'];
$to = $_POST['to'];
$status = $_POST['status'];
$contNo = $_POST['contNo'];

$sql = "INSERT INTO shipping (startpoint, endpoint, status, containerNo) VALUES ('$from', '$to', '$status', '$contNo');";
mysqli_query($link, $sql);

header("Location: ../shipment.php?action=success");




// Close connection
mysqli_close($link);

?>


