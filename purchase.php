<!-- Source for the following code: https://www.youtube.com/watch?v=eQBHxWKpVGs&ab_channel=TJWEBDEV*/ -->

<?php

/*Start the connection to the interiordesignshop database on mysql*/

session_start();
$con=mysqli_connect("localhost","root","","interiordesigndb");

/*Below code used if there is an error connecting to the database*/
/*And redirects you back to the cart page*/

if(mysqli_connect_error()){
    echo"<script>
    alert('Can't successfully connect to database');
    window.location.href='mycart.php';
    </script>";
    exit();
}

/*Below code executes if there is a post request and sends the data to the 'customer_order' and 'order_item' tables */
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['purchase']))
    {
        $query1= "INSERT INTO `customer_order`(`Full_name`, `Email`, `Street_Address`,`City`, `Country`) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[street_address]','$_POST[city]','$_POST[country]')";
        if(mysqli_query($con, $query1))
        {
            /*Code source for the following code:  https://www.youtube.com/watch?v=eQBHxWKpVGs&ab_channel=TJWEBDEV */
            $Order_Id=mysqli_insert_id($con);
            $query2="INSERT INTO `order_item`(`Orderitem_Id`, `Item_Name`, `Price`, `Quantity`) VALUES (?,?,?,?)";
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