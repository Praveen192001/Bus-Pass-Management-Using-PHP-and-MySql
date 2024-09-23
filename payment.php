<?php
// Assuming you have already established a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "buspassdb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you've received the payment amount from the payment portal
$cost = $_COOKIE['js_amount'];

echo "<script>console.log('cost variable in php is '+'$cost')</script>";

// Assuming you have some identifier for the transaction, like a transaction ID
$Id = $_COOKIE['js_id'];

echo"<script>console.log('Id variable in php is '+'$Id')</script>";

// Update the amount column in the database
$sql = "UPDATE tblpass SET Cost = '$cost' WHERE ID = '$Id'";

if ($conn->query($sql) === TRUE) {
    echo "Amount updated successfully.";
} else {
    echo "Error updating amount: " . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Form</title>
</head>
<body style="background: url(images/wp7094575.jpg) no-repeat center fixed;background-size: cover;">
        <table style=" margin: 12% auto;">
         <tr><td><h1 style="color: white;">Payment Details</h1></td></tr>
        <tr>
        <td> <h3 for="amount" style="color: white;">Amount:</h3></td>
       <td><span style="padding-left: 67px;color:white;font-size:25px" id="display"></span></td>
        </tr>

        <tr>
        <td><h3 for="card_number" style="color: white;" >Card Number:</h3></td>
       <td> <input type="text" name="card_number" id="card_number"></td>
        </tr>

        <tr>
        <td><h3 for="expiration_date" style="color: white;">Expiration Date:</h3></td>
        <td><input type="text" name="expiration_date" id="expiration_date"></td>
        </tr>
        
        <tr>
       <td> <h3 for="cvv" style="color: white;">CVV:</h3></td>
        <td><input type="text" name="cvv" id="cvv"></td>
        
        <tr>
      <td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" id="submit"  name="submit" onclick="run()">submit</button> </td>
    </tr>
        
    </table>

    <script src="js/payment.js"></script>

</body>

</html>







