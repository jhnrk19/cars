<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $surname = $_POST["surname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

    echo "
    <div style='text-align: center; font-size: 50px;'>
        Dear $surname $lastname!<br>Thanks for the contact, we will answer for your question ASAP via this email: $email<br>
    </div>";
}
?>