<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) || empty($password)) {
        echo "Username or Password is Invalid";
    } else {
        $conn = mysqli_connect("localhost", "root", "", "login");
        
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        
        if (mysqli_num_rows($result) == 1) {
            // Login Successful
            echo "Login successful";
        } else {
            echo "Username or Password is Invalid";
        }
    }
}
?>