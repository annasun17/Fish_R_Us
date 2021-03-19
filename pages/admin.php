<?php

$page_roles = array('admin');
require_once 'checksession.php';
require_once 'config.php';

include('header.php');

?>

  <div class="container-fluid">

    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="#orders">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#users">
              <span data-feather="shopping-cart"></span>
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#inventory">
              <span data-feather="users"></span>
              Inventory
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#vendors">
              <span data-feather="bar-chart-2"></span>
              Vendors
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#stores">
              <span data-feather="layers"></span>
              Stores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#employees">
              <span data-feather="layers"></span>
              Employees
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div id="orders" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Orders</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Sort By
          </button>
        </div>
      </div>
      <div class="admin-table table-responsive overflow-auto">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Customer ID</th>
              <th>Employee ID</th>
              <th>Store ID</th>
              <th>Purchase Date</th>
              <th>Invoice ID</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = new mysqli($hn, $un, $pw, $db);
            if($conn->connect_error) die ($conn->connect_error);
            $query = "SELECT customer_id, employee_id, store_id, purchase_date, order_id, invoice_id FROM order_table";
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            $rows = $result->num_rows;

            for($j=0; $j<$rows; ++$j) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo <<<_END
              <tr class="clickable-row" onclick="window.location.href='order-details.php?id=$row[order_id]';">
                <td>$row[order_id]</td>
                <td>$row[customer_id]</td>
                <td>$row[employee_id]</td>
                <td>$row[store_id]</td>
                <td>$row[purchase_date]</td>
                <td>$row[invoice_id]</td>
              </tr>
              _END;
            }
            ?>              
          </tbody>
        </table>
      </div>

      <div id="users" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Users</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Add User</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Sort By
          </button>
        </div>
      </div>
      <div class="admin-table table-responsive overflow-auto">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Address</th>
              <th>Phone Number</th>
              <th>Role</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = new mysqli($hn, $un, $pw, $db);
            if($conn->connect_error) die ($conn->connect_error);
            $query = "SELECT user_id, username, first_name, last_name, address, phone_number, user_role FROM user_table";
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            $rows = $result->num_rows;

            for($j=0; $j<$rows; ++$j) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo <<<_END
              <tr class="clickable-row" onclick="window.location.href='user-details.php?uid=$row[user_id]';">
                <td>$row[user_id]</td>
                <td>$row[username]</td>
                <td>$row[first_name]</td>
                <td>$row[last_name]</td>
                <td>$row[address]</td>
                <td>$row[phone_number]</td>
                <td>$row[user_role]</td>
              </tr>
              _END;
            }
            ?>
          </tbody>
        </table>
      </div>

      <div id="inventory" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Inventory</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Sort By
          </button>
        </div>
      </div>
      <div class="admin-table table-responsive overflow-auto">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>Inventory ID</th>
              <th>Product ID</th>
              <th>Store ID</th>
              <th>Stock Date</th>
              <th>Stock Quantity</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = new mysqli($hn, $un, $pw, $db);
            if($conn->connect_error) die ($conn->connect_error);
            $query = "SELECT inventory_id, product_id, store_id, stock_date, stock_quantity FROM inventory";
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            $rows = $result->num_rows;

            for($j=0; $j<$rows; ++$j) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo <<<_END
              <tr class="clickable-row" onclick="window.location.href='inventory-details.php?id=$row[product_id]';">
                <td>$row[inventory_id]</td>
                <td>$row[product_id]</td>
                <td>$row[store_id]</td>
                <td>$row[stock_date]</td>
                <td>$row[stock_quantity]</td>
              </tr>
              _END;
            }
            ?>
          </tbody>
        </table>
      </div>

      <div id="vendors" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Vendors</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Sort By
          </button>
        </div>
      </div>
      <div class="admin-table table-responsive overflow-auto">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>Vendor ID</th>
              <th>Vendor Name</th>
              <th>Vendor Address</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = new mysqli($hn, $un, $pw, $db);
            if($conn->connect_error) die ($conn->connect_error);
            $query = "SELECT vendor_id, vendor_name, vendor_address FROM vendor";
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            $rows = $result->num_rows;

            for($j=0; $j<$rows; ++$j) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo <<<_END
              <tr class="clickable-row" onclick="window.location.href='vendor-details.php?id=$row[vendor_id]';">
                <td>$row[vendor_id]</td>
                <td>$row[vendor_name]</td>
                <td>$row[vendor_address]</td>
              </tr>
              _END;
            }
            ?>   
          </tbody>
        </table>
      </div>

      <div id="stores" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Stores</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Sort By
          </button>
        </div>
      </div>
      <div class="admin-table table-responsive overflow-auto">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>Store ID</th>
              <th>Store Address</th>
              <th>Store Hours</th>
              <th>Store Type</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = new mysqli($hn, $un, $pw, $db);
            if($conn->connect_error) die ($conn->connect_error);
            $query = "SELECT store_id, store_address, store_hours, store_type FROM store";
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            $rows = $result->num_rows;

            for($j=0; $j<$rows; ++$j) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo <<<_END
              <tr class="clickable-row" onclick="window.location.href='store-details.php?id=$row[store_id]';">
                <td>$row[store_id]</td>
                <td>$row[store_address]</td>
                <td>$row[store_hours]</td>
                <td>$row[store_type]</td>
              </tr>
              _END;
            }
            ?>
          </tbody>
        </table>
      </div>

      <div id="employees" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Employees</h2>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            Sort By
          </button>
        </div>
      </div>
      <div class="admin-table table-responsive overflow-auto">
        <table class="table table-striped table-hover table-sm">
          <thead>
            <tr>
              <th>Employee ID</th>
              <th>Last Name</th>
              <th>First Name</th>
              <th>Employee Title</th>
              <th>Store ID</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $conn = new mysqli($hn, $un, $pw, $db);
            if($conn->connect_error) die ($conn->connect_error);
            $query = "SELECT employee_id, last_name, first_name, employee_title, store_id FROM employee";
            $result = $conn->query($query);
            if(!$result) die($conn->error);
            $rows = $result->num_rows;

            for($j=0; $j<$rows; ++$j) {
              $row = $result->fetch_array(MYSQLI_ASSOC);
              echo <<<_END
              <tr class="clickable-row" onclick="window.location.href='employee-details.php?id=$row[employee_id]';">
                <td>$row[employee_id]</td>
                <td>$row[last_name]</td>
                <td>$row[first_name]</td>
                <td>$row[employee_title]</td>
                <td>$row[store_id]</td>
              </tr>
              _END;
            }
            ?>
          </tbody>
        </table>
      </div>

      <?php
      include('footer.php');
      ?>
    </main>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>