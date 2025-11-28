<?php
  include 'functions/customers.php';
  $page = 'Customers';
?>

<!doctype html>
<html lang="en">
  <?php
  //Head Component 
  include 'component/head.php'
  ?>
  <body>
    
  <?php
  //Navbar component 
  include 'component/nav.php'
  ?>

<div class="container-fluid">
  <div class="row">
    
    <?php 
    //Sidebar component
    include 'component/sidebar.php'
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Customer List</h1>        
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer Name</th>
              <th>Areacode</th>
              <th>Phone</th>
              <th>Balance</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $customers = getAllCustomers();

            foreach($customers as $cus){

              $id       = $cus['cus_code'];
              $lname    = $cus['cus_lname'];
              $fname    = $cus['cus_fname'];
              $initial  = $cus['cus_initial'];
              $areacode = $cus['cus_areacode'];
              $phone    = $cus['cus_phone'];
              $balance  = $cus['cus_balance'];

              // FULL NAME
              if ($initial == "" || $initial == NULL) {
                $customerName = "$lname, $fname";
              } else {
                $customerName = "$lname, $fname $initial.";
              }
          ?>

            <tr>
              <td><?= $id ?></td>
              <td><?= $customerName ?></td>
              <td><?= $areacode ?></td>
              <td><?= $phone ?></td>
              <td><?= number_format($balance, 2) ?></td>
            </tr>    
            
          <?php 
            }
          ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
<script src="js/dashboard.js"></script>
  </body>
</html>
