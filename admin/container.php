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
        <h1 class="display-4">Add Container</h1>
        <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6">

          <form action="inc/addcontainer.php" method="post">
            <div class="form-group">
              <label for="exampleInput1">Container No.</label>
              <input type="text" class="form-control" name="name" placeholder="container no." required>
            </div>
            <div class="form-group">
              
              <select class="form-control" id="exampleFormControlSelect1" name="status" placeholder="Status" required>
                <option>Delevered</option>

              </select>
            </div>
            <!-- <div class="form-group">
              <input type="text" class="form-control" name="status" placeholder="Status">
            </div> -->

            <button type="submit" value="Submit" name="save" class="btn btn-primary btn-block">Submit</button>
          </form>

        </div>
        <div class="col-md-6">
          <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">Container id</th>
              <th scope="col">Name</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
            <tbody>

                <?php
                  
                  include 'inc/viewcontainer.php';
                  
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