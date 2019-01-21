<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: signIn.php");
    exit;
}

?>
<nav class="navbar navbar-expand-md navbar-light">
        <a class="navbar-brand" href="#"><img src="Image/logo.png" width="300px" height="40px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "welcome.php")?"active":""; ?>">
              <a class="nav-link" href="welcome.php" style="color:white; font-style: bold">Home </a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "shipment.php")?"active":""; ?>">
              <a class="nav-link" href="shipment.php" style="color:white; font-style: bold">Shipments</a>
            </li>
            <li class="nav-item <?php echo (basename($_SERVER['PHP_SELF']) == "reset-password.php")?"active":""; ?>">
              <a class="nav-link" href="reset-password.php" style="color:white; font-style: bold">Reset-password</a>
            </li>
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
          <form class="form-inline mt-2 mt-md-0">
            
            <p class="h6">Hi, <span class="h6"><?php echo htmlspecialchars($_SESSION["username"]); ?></span> <a href="logout.php" class="btn btn-secondary">SignOut</a></p>
                
                
          </form>
        </div>
</nav>