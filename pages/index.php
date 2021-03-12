<?php
include('header.php');
?>

  <main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
          aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/background2.jpg">
          <div class="container">
            <div class="carousel-caption">
              <h1>FISH R US</h1>
              <p>Your one stop shop for all things fishy</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/background1.jpg">
          <div class="container">
            <div class="carousel-caption text-start">
              <h1>FISH R US</h1>
              <p>Your one stop shop for all things fishy</p>
              <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/background3.jpg">
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>Don't be koi, come visit us!</h1>
              <p><a class="btn btn-lg btn-primary" href="#">Our Locations</a></p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="../images/fish-icon.png" style="width:120px;height:120px;">
          <h2>Fish</h2>
          <p style="height:90px;">Some representative placeholder content for the three columns of text below the carousel. This is the first
            column.</p>
          <p><a class="btn btn-secondary" href="shop.php">View details</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../images/aquarium-icon.png" style="width:120px;height:120px;">
          <h2>Aquariums</h2>
          <p style="height:90px;">Another exciting bit of representative placeholder content. This time, we've moved on to the second column.
          </p>
          <p><a class="btn btn-secondary" href="shop.php">View details</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="../images/fish-icon.png" style="width:120px;height:120px;">
          <h2>Supplies</h2>
          <p style="height:90px;">And lastly this, the third column of representative placeholder content.</p>
          <p><a class="btn btn-secondary" href="shop.php">View details</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <hr class="featurette-divider">
      <div class="row featurette">
        <div class="col-md-7">
          <h2>About Us</h2>
          <p class="lead">Utah's leading fish supply store Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis 
            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          <p class="lead">
            <h4>Temporary Hours:</h4>
            <p class="lead">
              Monday 12:00 - 7:00<br>
              Tuesday 12:00 - 7:00<br>
              Wednesday 12:00 - 7:00<br>
              Thursday 12:00 - 7:00<br>
              Friday 12:00 - 7:00<br>
              Saturday 11:00 - 6:00<br>
              Sunday * Closed *
            </p>
        </div>
        <div class="col-md-5" style="text-align:right;">
          <img src="../images/map.png" style="width:400px;height:400px;">
        </div>
      </div>
    </div>

  </main>

  <?php
  include('footer.php');
  ?>

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
    crossorigin="anonymous"></script>
</body>

</html>