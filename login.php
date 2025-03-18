<?php
session_start();

// Database Connection
$conn = new mysqli("localhost", "root", "", "activity");

// Handle Login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($user = $result->fetch_assoc()) {
        // Compare plain-text passwords
        if ($password === $user['password']) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['email'] = $email;
            header("Location: indexhome.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <?php if (!empty($error)) echo "<p style='color: red;'>$error</p>"; ?>

    <form method="POST">
        <label>Email:</label>
        <input type="email" name="email" required><br>

        <label>Password:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
