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
              <a class="nav-link" href="products-supplies.php">
                <span data-feather="shopping-cart"></span>
                Supplies
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="checkout col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Checkout</h1>
        </div>

        <form class="needs-validation" novalidate="">
          <div class="row g-0 pb-5 mb-xl-3">

<?php 
$conn = new mysqli($hn, $un, $pw, $db);
if($conn->connect_error) die($conn->connect_error);

$query = "SELECT * FROM user_table where username='$username' ";

$result = $conn->query($query); 
if(!$result) die($conn->error);
$row = $result->fetch_array(MYSQLI_ASSOC);

echo <<<_END

            <!-- Delivery details-->
            <div class="col-xl-6 mb-3">
              <h2 class="h5 mb-4">Delivery details</h2>
              <div class="d-flex flex-wrap justify-content-between align-items-center rounded-3 border py-2 px-3 mb-4">
                <div class="d-flex align-items-center me-3 py-2">
                  <div class="ps-3">
                    <div class="fs-ms text-muted">Your city is:</div>
                    <div class="fs-md fw-medium text-heading">Salt Lake City, USA</div>
                  </div>
                </div>
                <div class="py-2"><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="#"><i
                      class="ci-edit me-2"></i>Change city</a></div>
              </div>
              <div class="row gx-4 gy-3">
                <div class="col-sm-6">
                  <label class="form-label" for="co-fn">First name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="co-fn" required="" value=$row[first_name]>
                  <div class="invalid-feedback">Please enter your first name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="co-ln">Last name <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="co-ln" required="" value=$row[last_name]>
                  <div class="invalid-feedback">Please enter your last name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="co-ln">Phone number <span class="text-danger">*</span></label>
                  <input class="form-control" type="tel" id="co-phone" required="" value=$row[phone_number]>
                  <div class="invalid-feedback">Please enter your phone number!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="co-fn">Email address</label>
                  <input class="form-control bg-image-none" type="email" id="co-email">
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="co-address">Address <span class="text-danger">*</span></label>
                  <input class="form-control" type="text" id="co-address" required="">
                  <div class="invalid-feedback">Please enter your address!</div>
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="co-note">Order note</label>
                  <textarea class="form-control bg-image-none" id="co-note" rows="6"
                    placeholder="Please write here any additional information..."></textarea>
                </div>
              </div>
              <div class="rounded-3 border p-4 my-3">
                <h2 class="h6 pb-2">Do you have a coupon code?</h2>
                <div class="d-flex">
                  <input class="form-control bg-image-none me-3" type="text" placeholder="Coupon code">
                  <button class="btn btn-outline-primary" type="button">Apply</button>
                </div>
              </div>
            </div>
_END;
?>

            <!-- Order summary + payment-->
            <div class="col-xl-5 offset-xl-1 mb-2">
              <div class="bg-light rounded-3 py-5 px-4 px-xxl-5">
                <h2 class="h5 pb-3">Your order</h2>
                <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                    href="product.php"><img src="../images/product.jpeg" width="64" alt="Product"></a>
                  <div class="ps-2">
                    <h6 class="widget-product-title"><a href="product.php">Large Fish Tank</a></h6>
                    <div class="widget-product-meta"><span class="text-accent me-2">$29.<small>99</small></span><span
                        class="text-muted">x 1</span></div>
                  </div>
                </div>
                <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0"
                  href="product.php"><img src="../images/betta.jpg" width="64" alt="Product"></a>
                <div class="ps-2">
                  <h6 class="widget-product-title"><a href="product.php">Beta Fish</a></h6>
                  <div class="widget-product-meta"><span class="text-accent me-2">$5.<small>00</small></span><span
                      class="text-muted">x 1</span></div>
                </div>
              </div>
                <ul class="list-unstyled fs-sm pt-4 pb-2 border-bottom">
                  <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span
                      class="text-end fw-medium">$34.<small>99</small></span></li>
                  <li class="d-flex justify-content-between align-items-center"><span class="me-2">Delivery:</span><span
                      class="text-end fw-medium">$7.<small>00</small></span></li>
                </ul>
                <h3 class="fw-normal text-center my-4 py-2">$41.<small>99</small></h3>
                <div class="accordion accordio-flush shadow-sm rounded-3 mb-4" id="payment-methods">
                  <div class="accordion-item border-bottom">
                    <div class="accordion-header py-3 px-3">
                      <div class="form-check d-table" data-bs-toggle="collapse" data-bs-target="#credit-card">
                        <input class="form-check-input" type="radio" name="license" id="payment-card" checked="">
                        <label class="form-check-label fw-medium text-dark" for="payment-card">Credit card<i
                            class="ci-card text-muted fs-lg align-middle mt-n1 ms-2"></i></label>
                      </div>
                    </div>
                    <div class="collapse show" id="credit-card" data-bs-parent="#payment-methods">
                      <div class="accordion-body py-2">
                        <input class="form-control bg-image-none mb-3" type="text" placeholder="Card number">
                        <div class="row">
                          <div class="col-6 mb-3">
                            <input class="form-control bg-image-none" type="text" placeholder="MM/YY">
                          </div>
                          <div class="col-6 mb-3">
                            <input class="form-control bg-image-none" type="text" placeholder="CVC">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item border-bottom">
                    <div class="accordion-header py-3 px-3">
                      <div class="form-check d-table" data-bs-toggle="collapse" data-bs-target="#paypal">
                        <input class="form-check-input" type="radio" name="license" id="payment-paypal">
                        <label class="form-check-label fw-medium text-dark" for="payment-paypal">PayPal<i
                            class="ci-paypal text-muted fs-base align-middle mt-n1 ms-2"></i></label>
                      </div>
                    </div>
                    <div class="collapse" id="paypal" data-bs-parent="#payment-methods">
                      <div class="accordion-body pt-2"><a class="btn btn-primary btn-sm" href="#">Proceed with
                          PayPal</a></div>
                    </div>
                  </div>
                </div>
                <div class="pt-2">
                  <button class="btn btn-primary d-block w-100" type="submit">Place Order</button>
                </div>
              </div>
            </div>
          </div>
        </form>
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