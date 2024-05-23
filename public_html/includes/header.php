<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.5">
    <title>SWEN</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <link rel="stylesheet" href="../styles/header.css">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="../index.php"><b>SWEN</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo isset($_SESSION['email_address']) ? '../pages/home.php' : '../pages/user_login.php'; ?>">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/about.php">About</a>
                </li
                
                <?php if(!isset($_SESSION['email_address'])): ?>
                <li class="nav-item">
                    <a class="btn btn-dark button-all" href="../pages/register_account.php">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary button-all" href="../pages/user_login.php">Login</a>
                </li>
                <?php endif; ?>
                
                <?php if(isset($_SESSION['email_address'])): ?>
                <li class="nav-item">
                    <a class="btn btn-primary button-all" href="../pages/logout.php">Logout</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</body>
</html>
