<!-- Source for the following code: https://www.youtube.com/watch?v=eQBHxWKpVGs&ab_channel=TJWEBDEV*/ -->

<?php

/*Start the connection to the interiordesignshop database on mysql*/

session_start();
$con=mysqli_connect("localhost","root","","interiordesignshop");

/*Below code used if there is an error connecting to the database*/
/*And redirects you back to the cart page*/

if(mysqli_connect_error()){
    echo"<script>
    alert('Can't successfully connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

/*Below code executes if there is a post request and sends the data to the 'order_history' and 'users_orders' tables */
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

                /*Code source for the following code:  https://www.youtube.com/watch?v=eQBHxWKpVGs&ab_channel=TJWEBDEV */ 
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
                    alert('Your order has been successfully placed');
                    window.location.href='index.php';
                </script>";

            }   
            else
            {
                echo"<script>
                    alert('There was an error with the SQL Prepare function');
                    window.location.href='mycart.php';
                </script>";
            }
        }
        else
        {
            echo"<script>
            alert('There was an error inserting into the SQL table');
            window.location.href='mycart.php';
            </script>";
        }
    }
}

?>