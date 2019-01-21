<?php

include 'config.php';

 //UPDATE QUERY/////
 $sql = "UPDATE shipping, container SET shipping.status='$_POST[status]', shipping.endDate='$_POST[endDate]', container.status='$_POST[status]' WHERE shipping.shid='$_POST[shid]' AND container.cid='$_POST[containerNo]';";
 //$sql2 = "UPDATE container SET status='$_POST[status]';";

 //Execute QUERY//
 //mysql_query($link, $sql2);
 if(mysqli_query($link, $sql)){
     //header("refresh:1; url:../index.php?action=updated");
     header("Location: ../shipment.php?action=updated");
 }
 else{
    echo "Not updated";
 }

?>