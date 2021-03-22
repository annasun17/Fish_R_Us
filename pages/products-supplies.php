<?php
include('header.php');
?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="shop.php">
                <span data-feather="bar-chart-2"></span>
                All
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products-featured.php">
                <span data-feather="bar-chart-2"></span>
                Featured
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products-fish.php">
                <span data-feather="home"></span>
                Fish
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="products-aquariums.php">
                <span data-feather="file"></span>
                Aquariums
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="products-supplies.php">
                <span data-feather="shopping-cart"></span>
                Supplies
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="checkout col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div
          class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Supplies</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Favorites</button>
              <a href="cart.php" class="btn btn-sm btn-outline-secondary">View Cart</a>
            </div>
            <div class="dropdown">
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Sort By
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Price Low to High</a></li>
                <li><a class="dropdown-item" href="#">Price High to Low</a></li>
                <li><a class="dropdown-item" href="#">Rating</a></li>
                <li><a class="dropdown-item" href="#">Newest</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="album">
          <div class="container">
            <div class="row">
            <?php
							require_once 'config.php';
							$conn = new mysqli($hn, $un, $pw, $db);
							if($conn->connect_error) die($conn->connect_error);
							$query="SELECT * FROM product WHERE product_type='Supplies'";
							$result = $conn->query($query);
							if(!$result) die($conn->error);
							$rows = $result->num_rows;

							for($j=0; $j<$rows; ++$j) {
                //$result->data_seek($j);
                $row = $result->fetch_array(MYSQLI_ASSOC);
            
                echo <<<_END
                <div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="../images/$row[imagepath]" alt="Card image">
                    <div class="card-body">
                      <p class="card-text">$row[product_name]</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="product.php?product_id=$row[product_id]" class="btn btn-sm btn-outline-secondary">View</a>
                          <a href="#" class="btn btn-sm btn-outline-secondary">Add to Cart</a>
                        </div>
                        <small class="text-muted">$row[sales_price]</small>
                      </div>
                    </div>
                  </div>
                </div>
                _END;
              }
              $conn->close();
            ?>
            </div>
          </div>
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