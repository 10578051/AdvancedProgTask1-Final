<!-- Source of following code: https://www.youtube.com/watch?v=-aRRH0gZYQw&list=PLWxTHN2c_6caKWKPHyFI9svQEvlQtzCGa&index=2&ab_channel=TJWEBDEV -->

<!-- Include the header file -->
<?php include ("header.php");

?>

<!-- Start of HTML file -->
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
    <link href="https://fonts.googleapis.com/css2?family=Corben&family=Poppins:wght@300;400&family=Varela&display=swap" rel="stylesheet">

    <title>My Cart | June Living Interiors</title>
</head>

<!-- Body --> 
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center my-5">
                <h1>My Cart</h1>
            </div>

            <!--Table headings-->
            <div class="col-lg-8">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">Serial Number</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <?php
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $sr=$key+1;
                                    echo"
                                    <tr>
                                    <td>$sr</td>
                                    <td>$value[Item_Name]</td>
                                    <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <input class='text-center iquantity' name='Mod_Quantity' onchange='this.form.submit();' type='number' value='$value[Quantity]' min='1' max='50'>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </td>
                                    <td class='itotal'></td>
                                    <td>
                                        <form action='manage_cart.php' method='POST'>
                                            <button name = 'Remove_Item' class='btn btn-sm btn-outline-danger'>REMOVE</button></td>
                                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                                        </form>
                                    </tr>
                                    ";
                                }
                            }
                            ?>
                    </tbody>
                    </table>
            </div>

            <div class="col-lg-3">
                <div class="border total-box p-4">
                    <h4>Total:</h4>
                    <h5 class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                        {
                    ?>

                    <!-- Checkout form -->
                    <form action="purchase.php" method="POST">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name ="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" required>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" name="purchase">Purchase</button>
                    </form>
                    <?php 
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

<!-- The source of the following code is from: https://www.youtube.com/watch?v=osxrCEXb4cs&ab_channel=TJWEBDEV -->

<!-- Increase and decrease the quantity in the basket and update the total amount-->
<script>

    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');

    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);

            gt=gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText=gt;
    }

    subTotal();
</script>

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
              <a class="text-white" href="index.php">Juneliving.com</a>
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