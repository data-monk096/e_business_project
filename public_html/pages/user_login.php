<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_SESSION['email_address'])) {
    header("Location: home.php");
    exit();
}

$redirected_from_booking = isset($_GET['redirected_from_booking']) && $_GET['redirected_from_booking'] === 'true';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once('db_connect.php'); 
  
    $email_address = mysqli_real_escape_string($conn, $_POST['email_address']);
    $password = $_POST['password'];

    $query = "SELECT * FROM Users WHERE email_address='$email_address' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        if (password_verify($password, $user['password'])) {
            $_SESSION['email_address'] = $user['email_address'];
            header("Location:home.php");
            exit();
        } else {
            $error_message = "Incorrect password. Please try again.";
        }
    } else {
        $error_message = "User with this email address does not exist.";
    }

    mysqli_close($conn); 
}
?>
<?php include "../includes/header.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/login_page.css">
</head>
<body>
    <div class="container login-main">
        <div class="row">
            <div class="col-md-6 mb-6" id="login-warning">
                <div class="card md-4 mb-4" id="warning">
                    <h1>Login and start exploring the unexplored with <strong>SWEN!!</strong></h1>           
                </div>
            </div>
            <div class="col-md-6 mb-6" id="login-page">
                <h2 class="mt-5 mb-3" id="login-text">Login</h2>
                <?php if (isset($error_message)): ?>
                    <!-- Display error message if exists -->
                    <div class="alert alert-danger"><?php echo $error_message; ?></div>
                <?php endif; ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="email_address">Email Address:</label>
                        <input type="email" class="form-control" id="email_address" name="email_address" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                </form>
                <p class="mt-3">Don't have an account? <a href="register_account.php">Register here</a></p>
            </div>
        </div>
    </div>
</body>
</html>
