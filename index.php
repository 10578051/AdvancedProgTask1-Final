<?php include ("header.php"); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
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
                            <button type="submit" name ="Add_To_Cart" class="btn btn-info">Add to Cart</button>
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
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
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
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
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
                        <button type="submit" name="Add_To_Cart" class="btn btn-info">Add to Cart</button>
                        <input type="hidden" name="Item_Name" value="Prosha Vase">
                        <input type="hidden" name="Price" value="120">
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>