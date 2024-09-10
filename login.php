<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login Page</h2>

    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Login">
    </form>

    <?php
    // Mock users for demonstration purposes (in reality, use a database)
    $users = [
        'admin' => 'password123',
        'user' => 'userpass'
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if user exists and password is correct
        if (isset($users[$username]) && $users[$username] == $password) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");  // Redirect to welcome page
            exit();
        } else {
            echo "<p style='color:red;'>Invalid username or password</p>";
        }
    }
    ?>
</body>
</html>
