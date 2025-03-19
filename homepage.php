<?php
$conn = new mysqli("localhost", "root", "", "activity");
?>

</head>
<body>
    <h1>Welcome to the Homepage</h1>
    <a href="index.php" class="button">Home</a>
    <a href="logout.php" class="button">Logout</a>

    <h2>User Emails:</h2>
    <ul>
        <?php
        $sql = "SELECT email, password FROM users"; 
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>" . htmlspecialchars($row['email']) . "</li>";
                echo "<li>" . htmlspecialchars($row['password']) . "</li>";
            }
        } 
        ?>
    </ul>
</body>
</html>
