<!-- Include the header file -->
<?php include ("header.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="assets/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Oswald:wght@300&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Merriweather:wght@300;&family=Oswald:wght@300&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">
    <title>Shop | June Living Interiors</title>
    
</head>
<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/Bench.png" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Wayfar Bench</h5>
                            <p class="card-text">€550</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Wayfar Bench">
                            <input type="hidden" name="Price" value="550">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/Chair.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Hanfui Chair</h5>
                        <p class="card-text">€390</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Hanfui Chair">
                        <input type="hidden" name="Price" value="390">
                    </div>
                </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/Light.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Shanora Light</h5>
                        <p class="card-text">€290</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Shanora Light">
                        <input type="hidden" name="Price" value="290">
                    </div>
                </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                <div class="card">
                    <img src="images/Vase.png" class="card-img-top">
                    <div class="card-body text-center">
                        <h5 class="card-title">Prosha Vase</h5>
                        <p class="card-text">€120</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Prosha Vase">
                        <input type="hidden" name="Price" value="120">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>

<!--footer (source: https://mdbootstrap.com/snippets/standard/mdbootstrap/2885115) -->
<!-- Remove the container if you want to extend the Footer to full width. -->

  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color:#e9d2c4"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              June Living Interiors
            </h6>
            <p>
                June Living is proud to offer minimalist living for all spaces at affordable costs. Contact us today for an interior design consultation.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Sitemap</h6>
            <p>
              <a class="text-white">Home</a>
            </p>
            <p>
              <a class="text-white">About Us</a>
            </p>
            <p>
              <a class="text-white">Previous Projects</a>
            </p>
            <p>
              <a class="text-white">Shop</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Useful links
            </h6>
            <p>
              <a class="text-white">Your Cart</a>
            </p>

          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i>4 The Grange, Smithfield</p>
            <p><i class="fas fa-envelope mr-3"></i>juneliving@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-3">

      <!-- Section: Copyright -->
      <section class="p-3 pt-0">
        <div class="row d-flex align-items-center">
          <!-- Grid column -->
          <div class="col-md-7 col-lg-8 text-center text-md-start">
            <!-- Copyright -->
            <div class="p-3">
              © 2020 Copyright:
              <a class="text-white" href="index.php"
                 >Juneliving.com</a
                >
            </div>
            <!-- Copyright -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
            <!-- Facebook -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>
          </div>
          <!-- Grid column -->
        </div>
      </section>
      <!-- Section: Copyright -->
    </div>
    <!-- Grid container -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->

</html>