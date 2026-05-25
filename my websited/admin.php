<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "portfolio_db";

$conn = new mysqli($host, $user, $pass, $db);

$result = $conn->query("SELECT * FROM messages ORDER BY created_at DESC");

echo "<h1>Admin Dashboard - Messages</h1>";

while ($row = $result->fetch_assoc()) {
    echo "<div style='border:1px solid #ccc; margin:10px; padding:10px;'>";
    echo "<b>Name:</b> " . $row["name"] . "<br>";
    echo "<b>Email:</b> " . $row["email"] . "<br>";
    echo "<b>Message:</b> " . $row["message"] . "<br>";
    echo "<b>Time:</b> " . $row["created_at"];
    echo "</div>";
}

?>