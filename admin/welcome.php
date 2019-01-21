<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
 
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
<body>
     <header>

   <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="index.php">Maersk Line</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "welcome.php")?"active":""; ?>">
              <a class="nav-link" href="welcome.php">Home </a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "shipment.php")?"active":""; ?>">
              <a class="nav-link" href="shipment.php">Shipments</a>
            </li>
            
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "container.php")?"active":""; ?>">
              <a class="nav-link" href="container.php">Container </a>
            </li>
           
        <li class="nav-item" > <a href="logout.php" class="nav-link">Sign Out</a></li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="signUp.php">SignUp</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="signIn.php">SignIn</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>-->
          </ul>
         <!--  <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
</nav> 
    </header>

    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.Let's Start the Work.</h1>
    </div>
    <p>
        <h1 class="display-4">"There's no tomorrow so work today"</h1>
      
    </p>

    <main role="main" style="padding-left: 500px;">
    <div class="container marketing">
          <hr class="featurette-divider">
        <!-- START THE FEATURETTES -->
          <div class="col-md-6">

          <form action="inc/database.php" method="post">
            <div class="form-group">
             <!-- <label for="exampleInputEmail1">Email address</label>-->
              <input type="text" class="form-control" name="from" placeholder="Departure Port" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="to" placeholder="Arrival Port" required>
            </div>
            <div class="form-group">
              
              <select class="form-control" id="exampleFormControlSelect1" name="status" placeholder="Status" required>
                <option>On Route</option>
                <option>Delevered</option>

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
    <footer class="container" style="padding-right: 380px;">
        
        <p>&copy; Maersk Line Co op. &middot; <a href="#">Privacy</a> &middot; <a href="#">Created by Bijay Shrestha</a></p>
</footer>
</main>


</body>
</html>