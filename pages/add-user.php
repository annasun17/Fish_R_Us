<?php
include('header.php');
require_once 'config.php';
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
              <a class="nav-link active" href="#users">
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
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h2>Add User</h2>
				</div>

				<form method="POST" action="add-user.php">
					<div class="form-group row">
						<label for="Name" class="col-sm-2 col-form-label">User ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="id">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Name" class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="uname">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Type" class="col-sm-2 col-form-label">First Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="fname">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Amount" class="col-sm-2 col-form-label">Last Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lname">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Address</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="addr">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="phone">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="pass">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Role</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="urole">
						</div>
					</div>
					<br>
					<input type='submit' value='Add'>
				</form>
			</main>

<?php
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

if(isset($_POST['id'])) {
	$id = $_POST['id'];
	$uname = $_POST['uname'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$urole = $_POST['urole'];

	$query = "INSERT into user_table (username, user_id, first_name, last_name, address, phone_number, password, user_role)
	values ('$uname', '$id', '$fname', '$lname', '$addr', '$phone', '$pass', '$urole')";

	$result = $conn->query($query);
	if(!$result) die($conn->error);

	header("Location: admin.php");
}
$conn->close();

include('footer.php');
?>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>