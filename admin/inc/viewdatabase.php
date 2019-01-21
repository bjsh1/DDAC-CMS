<?php


include 'config.php';

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

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

    //view data
    // $result = mysqli_query($link,"SELECT * FROM shipping;");

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

        //SELECT QUERY/////
          $sql = "SELECT * FROM shipping;";

          //Execute QUERY//
          $result = mysqli_query($link, $sql);

          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result)){

              echo "<tr><form action=inc/updatedatabase.php method=post>";
              echo "<td><input type=text readonly class=form-control name=shid value='". $row['shid'] ."'></td>";
              echo "<td>" . $row['startpoint'] . "</td>";
              echo "<td>" . $row['endpoint'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "<td><select class=form-control name=status>
                    <option>On route</option>
                    <option>Delevered</option></select><td>";
              echo "<td>" . $row['startDate'] . "</td>";
              echo "<td><input type=text class=form-control name=endDate value='". $row['endDate'] ."'> </td>";
              echo "<td><input type=text readonly class=form-control name=containerNo value='". $row['containerNo'] ."'> </td>";
              echo "<td><input type=submit name=submit> </td>";
              echo "</form></tr>";
            }
          }
        
// Close connection
mysqli_close($link);

?>