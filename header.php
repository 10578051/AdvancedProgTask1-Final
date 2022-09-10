  <!-- Start the session --> 
<?php
session_start();
?>

<!-- HTML File --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/641be407cc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Varela&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400&family=Varela&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/main.css">

</head>
<body>

<!-- Nav bar below --> 
<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="home.php"><img src="images/logo4.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">HOME</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="about.php">ABOUT</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="pastprojects.php">PROJECTS</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">SHOP</a>
      </li>
    </ul>
    <div>

  <!-- Cart logic below --> 
        <?php

        $count=0;
        if(isset($_SESSION['cart']))
        {
            $count=count($_SESSION['cart']);
        }
        ?>
        <a href="mycart.php" class="cart-button">MY CART(<?php echo $count; ?>)</a>
    </div>
  </div>
</nav>

</body>
</html>