
 
<!DOCTYPE html>
<html lang="en">
<head>
   <?php
        require 'common/head.php';
    ?>
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body class="pt-0">
<div class="container-fluid">
    <?php
        require 'common/nav.php';
    ?>
        

    <main role="main">
    <div class="container marketing">
          <hr class="featurette-divider">
        <!-- START THE FEATURETTES -->

        <div class="row featurette">
          <div class="col-md-6">
            <h1 class="display-4" style="color:white; font-style: bold">Container Booking Section</h1>
            
          </div>
          <div class="col-md-6">

          <form action="inc/database.php" method="post">
            <div class="form-group">
              
              <input type="text" class="form-control" name="from" placeholder="Departure Port" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="to" placeholder="Arrival Port" required>
            </div>
            <div class="form-group">
              
              <select class="form-control" id="exampleFormControlSelect1" name="status" placeholder="Status" required>
                <option value="">Shipping status</option>
                <option value="route">On Route</option>
                

              </select>
            </div>
            <!-- <div class="form-group">
              <input type="text" class="form-control" name="status" placeholder="Status">
            </div> -->
            <div class="form-group">
                <select class="form-control" id="exampleFormControlSelect1" name="contNo">
                    <?php
                        include 'inc/config.php'; 
                        $sql = mysqli_query($link, "SELECT * FROM container WHERE status='Delevered';");
                        while ($row = $sql->fetch_assoc()){
                            unset($name,$cid,$status);
                            $name = $row['name'];
                            $cid = $row['cid'];
                            $status = $row['status'];
                            //echo "<option value=\"container\">" . $row['cid'] . "</option>";
                            echo '<option value=>Select Container</option>';
                            echo '<option name=contNo value="'.$cid.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            </div>

            <button type="submit" value="Submit" name="save" class="btn btn-primary btn-block">Submit</button>
          </form>
          
          </div>
        </div>

        <hr class="featurette-divider">
    </div>

      <!-- FOOTER -->
 <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p style="color:white;">&copy; Maersk Line Co op. &middot; <a href="#" style="color:white;">Privacy</a> &middot; <a href="#" style="color:white;">Created by Bijay Shrestha</a></p>
</footer>
</main>

</div>

</body>
</html>