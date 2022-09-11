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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Oswald:wght@300&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Merriweather:wght@300;&family=Oswald:wght@300&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">
    <title>Shop | June Living Interiors</title>
    
</head>
<body>

  <div class="col-lg-12 text-center my-5 shop-heading">
      <h1 class="shop-title">Shop our Furniture and Furnishings</h1>
      <p class="shop-body">Minimalist pieces to add to your space</p>
  </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/Bench.png" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Wayfar Bench</h5>
                            <p class="card-text">&euro;550</p>
                            <p class="card-description">The Wayfar Bench is classical with a modern, minimalist twist. A statement piece suitable for any room.</p>
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
                    <div class="card-body text-left">
                        <h5 class="card-title">Hanfui Chair</h5>
                        <p class="card-text">&euro;390</p>
                        <p class="card-description">With a rattan interior and a natural wood finish, the Hanfui chair is a comfortable but stylish chair.</p>
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
                    <div class="card-body text-left">
                        <h5 class="card-title">Shanora Light</h5>
                        <p class="card-text">&euro;290</p>
                        <p class="card-description">Warmth and class is what defines the Shanora Light. This statement piece is not only functionable, but fashionable.</p>
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
                    <div class="card-body text-left">
                        <h5 class="card-title">Prosha Vase</h5>
                        <p class="card-text">&euro;120</p>
                        <p class="card-description">The Prosha vase boasts fine ceramics and cratmanship. The perfect addition to a bookcase or fireplace.</p>
                        <button type="submit" name="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Prosha Vase">
                        <input type="hidden" name="Price" value="120">
                    </div>
                </div>
                </form>
            </div>

            <!-- Finish from below -->
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/candleholder.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Simpla Candle Holder</h5>
                            <p class="card-text">&euro;55</p>
                            <p class="card-description">The Simpla Candle Holder with a gold brass finish is a small but classy addition to any room.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Simpla Candle Holder">
                            <input type="hidden" name="Price" value="55">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/cushion.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Faysha Cushion</h5>
                            <p class="card-text">&euro;120</p>
                            <p class="card-description">This duckfeather cushion can be described as both comfortable and stylish. 440x550cm.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Faysha Cushion">
                            <input type="hidden" name="Price" value="120">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/creamsofa.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Venta Couch</h5>
                            <p class="card-text">&euro;1700</p>
                            <p class="card-description">The Venta couch is the ultimate minimalist piece. It has firm support and is perfect for lounging.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Venta Couch">
                            <input type="hidden" name="Price" value="1700">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/ceramicvase.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Hosha Vase</h5>
                            <p class="card-text">&euro;375</p>
                            <p class="card-description">With vertical ridges embedded into this vase, it adds texture and class to any room.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Hosha Vase">
                            <input type="hidden" name="Price" value="375">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/greythrow.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Chappa Throw</h5>
                            <p class="card-text">&euro;540</p>
                            <p class="card-description">The Chappa Throw is a handcrafted throw, from Irish brand Throws Limited. It is warm and comfortable.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Chappa Throw">
                            <input type="hidden" name="Price" value="540">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/pinksofa.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Florentine Sofa</h5>
                            <p class="card-text">&euro;2540</p>
                            <p class="card-description">The stunning Florentine Sofa combines comfort and elegance, and adds a bold but warm statement.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Florentine Sofa">
                            <input type="hidden" name="Price" value="2540">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/sidetable.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Geravo Table</h5>
                            <p class="card-text">&euro;990</p>
                            <p class="card-description">A warm, ceramic table which is the perfect addition as a side table, for use in a living or bedroom.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Geravo table">
                            <input type="hidden" name="Price" value="990">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/products/stools.jpg" class="card-img-top">
                        <div class="card-body text-left">
                            <h5 class="card-title">Thistle Stool</h5>
                            <p class="card-text">&euro;790</p>
                            <p class="card-description">Sleek but simple, the Thisle Stool oozes minimalism and elegance. A perfect addition to your kitchen.</p>
                            <button type="submit" name ="Add_To_Cart" class="btn btn-cart">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Thistle Stool">
                            <input type="hidden" name="Price" value="790">
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    
</body>

<!--footer (source: https://mdbootstrap.com/snippets/standard/mdbootstrap/2885115) -->

<footer class="footer-bottom text-center text-lg-start">
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
              <a class="text-white" href="home.php">Home</a>
            </p>
            <p>
              <a class="text-white" href="about.php">About Us</a>
            </p>
            <p>
              <a class="text-white" href="pastprojects.php">Past Projects</a>
            </p>
            <p>
              <a class="text-white" href="index.php">Shop</a>
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
              <a class="text-white" href="mycart.php">Your Cart</a>
            </p>

          </div>

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i>4 The Grange, Smithfield</p>
            <p><a class="contact-email" href="mailto: juneliving@gmail.com"><i class="fas fa-envelope mr-3"></i>juneliving@gmail.com</a></p>
            <p><i class="fas fa-phone mr-3"></i> + 01 234 5678</p>
            <p><i class="fas fa-print mr-3"></i> + 353 123 4567</p>
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
              <a class="text-white" href="home.php">Juneliving.com</a>
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
               href="https://www.facebook.com"
               target="_"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               href="https://www.twitter.com"
               target="_"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               href="https://www.google.com"
               target="_"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-outline-light btn-floating m-1"
               class="text-white"
               role="button"
               href="https://www.instagram.com"
               target="_"
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

</html>