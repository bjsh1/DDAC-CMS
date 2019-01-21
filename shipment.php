
<!doctype html>
<html lang="en">
  <head>
   
  <?php
		require 'common/head.php';
	?>

  </head>

  <body class="pt-0">
    <div class="container-fluid">

  <?php
		require 'common/nav.php';
	?>

    <main role="main">

    <div class="jumbotron">
      <div class="row">
        <div class="col-md-12">
          <?php

              if(isset($_REQUEST['action'])){
                $action = $_REQUEST['action'];

              if($action =="updated"){

                echo '<div class="alert alert-success" role="alert">
                        Update Successfully
                      </div>';
              }

              else{
                  echo '<div class="alert alert-danger" role="alert">
                        Error
                      </div>';
              }

                }

                else{
                  $action = "";


                }

          ?>
        <h1 class="display-4">Shipment Log</h1>
        <hr>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Dep. Port</th>
              <th scope="col">Arriv. Port</th>
              <th scope="col">Current Status</th>
              <th scope="col">Update Status</th>
              <th scope="col">Dep. Date</th>
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

  </div>
  </body>
  </html>  