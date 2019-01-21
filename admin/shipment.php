<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
   
  <?php
		require 'common/head.php';
	?>

  </head>

  <body>
    <header>

  <?php
		require 'common/nav.php';
	?>
      
    </header>

    <main role="main">

    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12">
        <h1 class="display-4">Shipment Log</h1>
        <hr>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Shipping id</th>
              <th scope="col">Dep. Port</th>
              <th scope="col">Arriv. Port</th>
              <th scope="col">Status</th>
              <th scope="col">Update Status</th>
              <th scope="col">Dep. Date</th>
              <th scope="col"></th>
              <th scope="col">Arriv. Date</th>
              <th scope="col">Container No.</th>
            </tr>
          </thead>
          <tbody>

              <?php
                
                include 'inc/viewdatabase.php';
                
              ?>

          </tbody>
</table>

        </div>
      </div>
    </div>

  <!-- FOOTER -->
    <?php
		    require 'common/footer.php';
	  ?>
    </main>
  </body>
  </html>  