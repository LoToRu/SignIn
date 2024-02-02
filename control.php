<h1>User Status</h1>

<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm-password"];

    if ($password == $confirmPassword ) {
        echo  "Registration successful.<br>"; 
        echo $username;
    }
    else {
        echo "Password do not match.";
    }
}
?>