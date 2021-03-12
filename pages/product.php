<?php
include('header.php');
?>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="bar-chart-2"></span>
                Featured
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">
                <span data-feather="home"></span>
                Fish
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                Aquariums
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart"></span>
                Supplies
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users"></span>
                Tank Accessories
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Vendors
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers"></span>
                Stores
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="checkout col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="product col-md-10">
          <div class="col-md-6 product-img">
            <div class="product-thumbnails">
            </div>
            <div class="active-img">
              <img src="../images/product.jpeg" alt="product image">
            </div>
          </div>
          <div class="col-md-5 product-desc">
            <h2 class="product-title">Really Awesome Product</h2>
            <div class="price">$29.99</div>
            <div class="flex-wrap align-items-center pt-4 pb-2 mb-3">
              <select class="form-select me-3 mb-3" style="width: 5rem;">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <p><a class="btn btn-primary" href="shop.php">Add to Cart</a></p>
            </div>
            <ul class="desc">
              <li>no really, it's super rad</li>
              <li>seriously tho, buy it</li>
              <li>it cleans itself</li>
              <li>made of grade AAA premium glass</li>
            </ul>
          </div>
        </div>
      </main>
    </div>
  </div>

  <?php
  include('footer.php');
  ?>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>