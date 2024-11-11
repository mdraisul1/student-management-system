<?php 

$host = "localhost";
$user = "root";
$pass = "password";
$dbName = "school_db";

$dsn = "mysql:host=$host;dbname=$dbName";
try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Database connection successful<br>";
} catch (PDOException $th) {
    echo "Connection failed! " . $th->getMessage();
    exit();  // Stop execution if connection fails
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $name = $_POST['username'];
        $pass = $_POST['password'];

        // Debugging output
        echo "Received POST data - Username: $name, Password: $pass<br>";

        // Prepare the query
        $query = "SELECT * FROM users WHERE username = :username AND password = :password";
        $stmt = $pdo->prepare($query);

        // Bind parameters
        $stmt->bindParam(':username', $name);
        $stmt->bindParam(':password', $pass);

        // Execute the query
        $stmt->execute();

        // Check if any row is returned
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "User found. Role: " . $user['usertype'] . "<br>";
            // Check user role and redirect accordingly
            if ($user['usertype'] === 'admin') {
                header("Location: admin.php"); 
                exit();
            } elseif ($user['usertype'] === 'student') {
                header("Location: student.php"); 
                exit();
            } else {
                echo "Invalid user role!";
            }
        } else {
            echo "Invalid username or password!";
        }
    } else {
        echo "Please enter both username and password.";
    }
}

