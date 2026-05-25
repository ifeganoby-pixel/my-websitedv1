<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    echo "<h2>Message Sent Successfully</h2>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Message: $message</p>";

} else {
    echo "No data received.";
}

?>
<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];


// 1. SAVE TO DATABASE
$stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);
$stmt->execute();


// 2. SEND EMAIL (LOCAL TEST - may not work on XAMPP without config)
$to = "yourgmail@gmail.com";
$subject = "New Portfolio Message";

$body = "Name: $name\nEmail: $email\nMessage: $message";

$headers = "From: $email";

@mail($to, $subject, $body, $headers);


// 3. RESPONSE
echo "Message saved + sent (if mail configured)";

?>