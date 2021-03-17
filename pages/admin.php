<?php
include('header.php');
?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#reports">
                <span data-feather="home"></span>
                Reports
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#orders">
                <span data-feather="file"></span>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#customers">
                <span data-feather="shopping-cart"></span>
                Customers
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
        <div id="reports" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Reports</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>

        <img src="../images/sales.png" style="width:90%;">
        
        <div id="orders" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Orders</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort By
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Customer ID</th>
                <th>Employee ID</th>
                <th>Store ID</th>
                <th>Purchase Date</th>
                <th>Order ID</th>
                <th>Invoice ID</th>
              </tr>
            </thead>
            <tbody>
<?php
require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die ($conn->connect_error);

$query = "SELECT customer_id, employee_id, store_id, purchase_date, order_id, invoice_id FROM saleorder";

$result = $conn->query($query);
if(!$result) die ($conn->error);

while($row = $result->fetch_assoc()){

echo "<tr><td>". $row["customer_id"]. "</td><td>".$row["employee_id"]. "</td><td>".$row["store_id"]. "</td><td>".
$row["purchase_date"]. "</td><td>".$row["order_id"]."</td><td>".$row["invoice_id"]. "</td><tr>";
}
echo "</table>";
?>              
            </tbody>
          </table>
        </div>

        <div id="customers" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Customers</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort By
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Customer ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone Number</th>
              </tr>
            </thead>
            <tbody>
<?php
require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die ($conn->connect_error);

$query = "SELECT customer_id, first_name, last_name, address, phone_number FROM customer";

$result = $conn->query($query);
if(!$result) die ($conn->error);

while($row = $result->fetch_assoc()){

echo "<tr><td>". $row["customer_id"]. "</td><td>".$row["first_name"]. "</td><td>".$row["last_name"]. "</td><td>".
$row["address"]. "</td><td>".$row["phone_number"]. "</td><tr>";
}
echo "</table>";
?>
            </tbody>
          </table>
        </div>

        <div id="inventory" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Inventory</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort By
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
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
require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die ($conn->connect_error);

$query = "SELECT inventory_id, product_id, store_id, stock_date, stock_quantity FROM inventory";

$result = $conn->query($query);
if(!$result) die ($conn->error);

while($row = $result->fetch_assoc()){

echo "<tr><td>". $row["inventory_id"]. "</td><td>".$row["product_id"]. "</td><td>".$row["store_id"]. "</td><td>".
$row["stock_date"]. "</td><td>".$row["stock_quantity"]. "</td><tr>";
}
echo "</table>";
?>
              
            </tbody>
          </table>
        </div>

        <div id="vendors" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Vendors</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
              <button type="button" class="btn btn-sm btn-outline-secondary" name="ok">Edit</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort By
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th>Vendor ID</th>
                <th>Vendor Name</th>
                <th>Vendor Address</th>
              </tr>
            </thead>
            <tbody>
<?php
require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die ($conn->connect_error);

$query = "SELECT vendor_id, vendor_name, vendor_address FROM vendor";

$result = $conn->query($query);
if(!$result) die ($conn->error);

while($row = $result->fetch_assoc()){

echo "<tr><td>". $row["vendor_id"]. "</td><td>".$row["vendor_name"]. "</td><td>".$row["vendor_address"]. "</td><tr>";
}
echo "</table>";
?>
       
            </tbody>
          </table>
        </div>

        <div id="stores" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Stores</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
              <button type="button" class="btn btn-sm btn-outline-secondary" name="ok">Edit</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort By
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
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
require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die ($conn->connect_error);

$query = "SELECT store_id, store_address, store_hours, store_type FROM store";

$result = $conn->query($query);
if(!$result) die ($conn->error);

while($row = $result->fetch_assoc()){

echo "<tr><td>". $row["store_id"]. "</td><td>".$row["store_address"]. "</td><td>".$row["store_hours"]. "</td><td>".
$row["store_type"]. "</td><tr>";
}
echo "</table>";
?>
       
            </tbody>
          </table>
        </div>

        <div id="employees" class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h2>Employees</h2>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
              <button type="button" class="btn btn-sm btn-outline-secondary" name="ok">Edit</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Sort By
            </button>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
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
require_once 'login2.php';

$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die ($conn->connect_error);

$query = "SELECT employee_id, last_name, first_name, employee_title, store_id FROM employee";

$result = $conn->query($query);
if(!$result) die ($conn->error);

while($row = $result->fetch_assoc()){

echo "<tr><td>". $row["employee_id"]. "</td><td>".$row["last_name"]. "</td><td>".$row["first_name"]. "</td><td>".
$row["employee_title"]. "</td><td>".$row["store_id"]. "</td><tr>";
}
echo "</table>";
?>
       
            </tbody>
          </table>
        </div>

        <?php
        include('footer.php');
        ?>
      </main>
    </div>
  </div>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>