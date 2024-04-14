<?php
// Database connection
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$cvv = $_POST['cvv'];
$card_holder_name = $_POST['card_holder_name'];
$expiration_date = $_POST['expiration_date'];
$card_number = $_POST['card_number'];
$card_name_bank_name = $_POST['card_name_bank_name'];
$reason_of_transfer = $_POST['reason_of_transfer'];
$amount = $_POST['amount_to_send'];

// Save form data to database
$sql = "INSERT INTO payments (cvc, holder_name, expiration_date, card_number, card_name_bank_name, details, amount) VALUES ('$cvc', '$holder_name', '$expiration_date', '$card_number', '$card_name_bank_name', '$details', '$amount')";

if ($conn->query($sql) === TRUE) {
    echo "Payment saved successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
