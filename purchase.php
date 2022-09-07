<?php

/* Source for the following code: https://www.youtube.com/watch?v=eQBHxWKpVGs&ab_channel=TJWEBDEV*/ 

session_start();
$con=mysqli_connect("localhost","root","","interiordesignshop");

if(mysqli_connect_error()){
    echo"<script>
    alert('Cannot connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1= "INSERT INTO `order_history`(`Full_name`, `Email`, `Address`) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[address]')";
        if(mysqli_query($con, $query1))
        {
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `users_orders`(`Order_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
            $stmt=mysqli_prepare($con,$query2);
            if($stmt)
            {
                mysqli_stmt_bind_param($stmt,"isii", $Order_Id,$Item_Name,$Price,$Quantity);
                foreach($_SESSION['cart'] as $key => $values)
                {
                    $Item_Name=$values['Item_Name'];
                    $Price=$values['Price'];
                    $Quantity=$values['Quantity'];
                    mysqli_stmt_execute($stmt);
                }
                unset($_SESSION['cart']);
                echo"<script>
                    alert('Order Placed');
                    window.location.href='index.php';
                </script>";

            }   
            else
            {
                echo"<script>
                    alert('SQL Prepare Error');
                    window.location.href='mycart.php';
                </script>";
            }
        }
        else
        {
            echo"<script>
            alert('SQL Error');
            window.location.href='mycart.php';
            </script>";
        }
    }
}

?>