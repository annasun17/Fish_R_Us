<?php
include('header.php');
require_once 'config.php';
?>

<div class="container-fluid">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#orders">
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

<?php
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_GET['id'])) {
	
$id = $_GET['id'];	

$query = "SELECT * FROM order_table where order_id=$id ";

$result = $conn->query($query); 
if(!$result) die($conn->error);
$row = $result->fetch_array(MYSQLI_ASSOC); 

echo <<<_END
		<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">				
			
			<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
				<h2>Order Details</h2>
				<div class="btn-toolbar mb-2 mb-md-0">
					<button type="button" class="btn btn-sm btn-outline-secondary">
						<span data-feather="calendar"></span>
						Edit
					</button>
				</div>
			</div>

			<p>Order ID: $row[order_id]</p>
			<p>Customer ID: $row[customer_id]</p>
			<p>Purchase Date: $row[purchase_date]</p>
			<p>Employee ID: $row[employee_id]</p>
			<p>Store ID: $row[store_id]</p>
			<p>Invoice ID: $row[invoice_id]</p>

    </main>
_END;
}
include('footer.php');
?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>