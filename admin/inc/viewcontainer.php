<?php

include 'config.php';

          $sql = "SELECT * FROM container;";

          $result = mysqli_query($link, $sql);

          $resultCheck = mysqli_num_rows($result);

          if($resultCheck > 0){
            while ($row = mysqli_fetch_assoc($result)) {
                            # code...
              echo "<tr><form>";
              echo "<td><input type=text readonly class=form-control name=cid value='". $row['cid'] ."'></td>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "</form></tr>";
            }
          }

// Close connection
mysqli_close($link);

?>