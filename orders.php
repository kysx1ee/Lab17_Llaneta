<?php
  include 'functions/invoice.php';
  $page = 'Orders';
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
  include 'component/nav.php'?>

<div class="container-fluid">
  <div class="row">
    
    <?php 
    //Sidebar component
    include 'component/sidebar.php'
    ?>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Order List</h1>        
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Date</th>              
              <th>Subtotal</th>
              <th>Tax</th>
              <th>Total</th>
            </tr>
          </thead>
          <tbody>

          <?php 
            $orders = getAllInvoice();

            foreach($orders as $order){

              
              $id       = $order['inv_number'];
              $lname    = $order['cus_lname'];
              $fname    = $order['cus_fname'];
              $initial  = $order['cus_initial'];
              $subtotal = $order['inv_subtotal'];
              $tax      = $order['inv_tax'];
              $total    = $order['inv_total'];
              $dateRaw  = $order['inv_date'];


              $customer = $lname . ', ' . $fname . ' ' . $initial;
              $date     = date('d-M-Y', strtotime($dateRaw));
          ?>

            <tr>
              <td><?= $id ?></td>
              <td><?= $customer ?></td>
              <td><?= $date ?></td>
              <td><?= number_format($subtotal, 2) ?></td>
              <td><?= number_format($tax, 2) ?></td>
              <td><?= number_format($total, 2) ?></td>
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="js/dashboard.js"></script>
  </body>
</html>
