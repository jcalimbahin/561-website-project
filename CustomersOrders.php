<?php
$servername = "localhost";
$username = "root";
$password = "??kqchl733pHp";
$dbname = "pizzarestaurantdb";

/*session_start();
$_SESSION['counter'] = (!$_SESSION['counter']) ? 0 : $_SESSION['counter'];
if($_POST['submit']) 
{
$_SESSION['counter']++;
}*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

 
//$sql = "INSERT INTO customers (CustomerID, CustomerFirstName, CustomerLastName, CustomerEmail, CustomerPhoneNumber, CustomerAddress)
//VALUES ('111','Christian', 'Suatengco', 'csuatengco5139@sdsu.edu', '8586995480','10545 Angeton Court')";
$myDate = date('Y-m-d');
$myTime = date('h:i:s');

$sqlcustomers = "INSERT INTO customers (CustomerID, CustomerFirstName, CustomerLastName, CustomerEmail, CustomerPhoneNumber, CustomerAddress)
VALUES (1111, '$_POST[fname]', '$_POST[lname]', '$_POST[emailadd]', '$_POST[Pnum]', '$_POST[Streetadd]')";
$sqlorder = "INSERT INTO `order` (OrderID, OrderDate, OrderTime, CustomerID, DeliveryType)
VALUES (1111, '$myDate', '$myTime', 1111, '$_POST[DeliveryType]')";
$sqlorderitems = "INSERT INTO orderitems (OrderID, FoodID, Crust, Sauce)
VALUES (1111, 01, '$_POST[Crust]', '$_POST[Sauce]')";

if (mysqli_query($conn, $sqlcustomers) and mysqli_query($conn, $sqlorder) and mysqli_query($conn, $sqlorderitems)) {
  echo "Your Order Has Been Places and Shall be Ready in 15 Minutes";
} else {
  echo "Error: " . $sqlcustomers . "<br>" . mysqli_error($conn);
}


        
$conn->close();
?>