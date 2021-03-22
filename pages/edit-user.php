<?php
include('header.php');
require_once 'config.php';
?>

<div class="container-fluid">

      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="admin.php#orders">
                <span data-feather="file"></span>
                Orders
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin.php#users">
                <span data-feather="shopping-cart"></span>
                Users
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php#inventory">
                <span data-feather="users"></span>
                Inventory
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php#vendors">
                <span data-feather="bar-chart-2"></span>
                Vendors
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php#stores">
                <span data-feather="layers"></span>
                Stores
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="admin.php#employees">
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

$query = "SELECT * FROM user_table where user_id='$id' ";

$result = $conn->query($query); 
if(!$result) die($conn->error);
$row = $result->fetch_array(MYSQLI_ASSOC); 

echo <<<_END
			<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h2>Edit User</h2>
				</div>

				<form method="POST" action="edit-user.php">
					<div class="form-group row">
						<label for="Name" class="col-sm-2 col-form-label">User ID</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="id" value="$row[user_id]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Name" class="col-sm-2 col-form-label">Username</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="uname" value="$row[username]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Type" class="col-sm-2 col-form-label">First Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="fname" value="$row[first_name]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Amount" class="col-sm-2 col-form-label">Last Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="lname" value="$row[last_name]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Address</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="addr" value="$row[address]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Phone Number</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="phone" value="$row[phone_number]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Password</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="pass" value="$row[password]">
						</div>
					</div>
					<br>
					<div class="form-group row">
						<label for="Points" class="col-sm-2 col-form-label">Role</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="urole" value="$row[user_role]">
						</div>
					</div>
					<br>
					<input type='hidden' name='update' value='yes'>
						<input type='hidden' name='id' value='$row[user_id]'>
						<input type='submit' class="btn btn-sm btn-outline-secondary" value='Update'>	
				</form>
			</main>
_END;
}

if(isset($_POST['update'])) {

	$id = $_POST['id'];
	$uname = $_POST['uname'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$addr = $_POST['addr'];
	$phone = $_POST['phone'];
	$pass = $_POST['pass'];
	$urole = $_POST['urole'];
	$token = password_hash($pass,PASSWORD_DEFAULT);

	$query = "UPDATE user_table SET username='$uname', user_id='$id', first_name='$fname', last_name='$lname', 
	address='$addr', password='$token', user_role='$urole' WHERE user_id=$id ";
	
	$result = $conn->query($query); 
	if(!$result) die($conn->error);

	header("Location: user-details.php?uid=$id");
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