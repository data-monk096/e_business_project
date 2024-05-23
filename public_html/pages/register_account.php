<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$time=date('d-m-y h:i:s'); 
$ipadress=$_SERVER['HTTP_CLIENT_IP']; 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO your_table_name (time, ip_address)
VALUES ('$ttime', '$ipaddress')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$errors = array(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('db_connect.php'); 

    $first_name = isset($_POST['first_name']) ? mysqli_real_escape_string($conn, $_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? mysqli_real_escape_string($conn, $_POST['last_name']) : '';
    $email_address = isset($_POST['email_address']) ? mysqli_real_escape_string($conn, $_POST['email_address']) : '';
    $contact_number = isset($_POST['contact_number']) ? mysqli_real_escape_string($conn, $_POST['contact_number']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirm_password = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';

    if (empty($first_name)) {
        array_push($errors, "First Name is required.");
    }
    if (empty($last_name)) {
        array_push($errors, "Last Name is required.");
    }
    if (empty($email_address)) {
        array_push($errors, "Email Address is required.");
    }
    if (empty($contact_number)) {
        array_push($errors, "Contact Number is required.");
    }
    if (empty($password)) {
        array_push($errors, "Password is required.");
    } elseif (strlen($password) < 8) {
        array_push($errors, "Password must be at least 8 characters long.");
    }
    if ($password !== $confirm_password) {
        array_push($errors, "Passwords do not match.");
    }

    $user_check_query = "SELECT * FROM Users WHERE email_address ='$email_address' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) {
        array_push($errors, "Email already exists.");
    }

    if (count($errors) == 0) {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO Users (first_name, last_name, email_address, contact_number, password)
                  VALUES ('$first_name', '$last_name', '$email_address', '$contact_number', '$password_hash')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            header("Location: registration_success.php");
            exit();
        } else {
            array_push($errors, "Failed to register user: " . mysqli_error($conn));
        }
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/registration.css">
</head>
<body>
    <div class="container" id = "main-container">
        <div class="image-container">
            <a href="../index.php">
                 <img src="../styles/images/SWEN.jpg" alt="SWEN Logo" class="img-fluid">
            </a>

        </div>
        <h2 class="mt-5 mb-3" id = 'register-intro-text'>Register and Enjoy the unlimited benefit of <b>SWEN</b></h2>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
        <div class="card" id="registration-form">
            <div class = 'card' id='form-title'>
                <h2 id = 'form-title'>
                    Registration Form
                </h2>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                </div>
                <div class="form-group">
                    <label for="email_address">Email Address:</label>
                    <input type="email" class="form-control" id="email_address" name="email_address" required>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="tel" class="form-control" id="contact_number" name="contact_number" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>
                <div class="card register-button">
                    <button type="submit" class="btn btn-primary" name="register">Register</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <?php include "../includes/footer.php"; ?>
</body>
</html>

