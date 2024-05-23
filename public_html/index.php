<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWEN - Ebusiness project work.</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <main class="container">
        <section>
            <div class="text-center">
                <img src="styles/images/SWEN.jpg" alt="SWEN Logo">
            </div>
            <div class="jumbotron text-center">
                <h1>Welcome to SWEN</h1>
                <p>Explore the uncharted world with us!</p>
                <p>Don't have an account? <a href="pages/register_account.php">Clicke here to register with us!</a></p>
            </div>
            
        <section>
            <div class="container">
            <div class="card mb-4">
                <img class="card-img-top" src="https://www.travelholicq.com/wp-content/uploads/2019/12/Charming-Lakes-That-You-Must-Visit-In-Sikkim.jpg" alt="SWEN Travels">
                <div class="card-body">
                    <h5 class="card-title">The wonder of nature is alive here.</h5>
                    <p class="card-text">With SWEN, explore some of the best places untouched by urbanization. Feel the true presence of nature all with one click!</p>
                </div>
            </div>
            </div>
        </section>
        
        <!--Page Note-->
        </section>
                <section id="topic">
            <div class="text-center">
                <h3>Some of the Most Visited Destinations of Sikkim</h3>
            </div>
        </section>
        
        <!-- Destinations Section -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="https://static.toiimg.com/photo/78618420/sikkim1.jpg?width=748&resize=4" alt="Buddha Park Sikkim">
                            <div class="card-body">
                                <h5 class="card-title">Buddha Park</h5>
                                <p class="card-text">Explore the peaceful hideaway in the mountains at Buddha Park, Sikkim.</p>
                                <a href="<?php echo isset($_SESSION['email_address'])? 'pages/home.php':'pages/user_login.php?redirected_from_booking=true&destination=Buddha_park_sikkim'; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="https://upload.wikimedia.org/wikipedia/commons/0/01/Gurudongmar_Lake.JPG" alt="Gurudongmar Lake North Sikkim">
                            <div class="card-body">
                                <h5 class="card-title">Gurudongmar Lake</h5>
                                <p class="card-text">Experience the stunning lake surrounded by snow-capped peaks at Gurudongmar Lake, Sikkim.</p>
                                <a href="<?php echo isset($_SESSION['email_address']) ? 'pages/home.php' : 'pages/user_login.php?redirected_from_booking=true&destination=Gurudongmar_Lake'; ?>" class="btn btn-primary">Book Now</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="https://www.karakoramdiscoveries.com/wp-content/uploads/2020/06/expedition-to-gasherbrum-2-1-870x555.jpg" alt="Mt. Kanchanjunga Sikkim">
                            <div class="card-body">
                                <h5 class="card-title">Mt. Kanchanjunga</h5>
                                <p class="card-text">Mount Kanchenjunga in Sikkim is like the king of all mountains, standing tall and proud with its snowy peaks, offering adventurers a chance to conquer its heights and nature lovers a majestic sight to behold from afar, filling your heart with awe and wonder.</p>
                                <a href="<?php echo isset($_SESSION['email_address']) ? 'pages/home.php' : 'pages/user_login.php?redirected_from_booking=true&destination=Mt._Kanchanjunga'; ?>" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="https://northbengaltourism.com/images/sikkim/tsomgo_changu_lake_1024.jpg" alt="Tsomgo Lake">
                            <div class="card-body">
                                <h5 class="card-title">Tsomgo Lake</h5>
                                <p class="card-text">Discover the hidden gem up in the hills at Tsomgo Lake, Sikkim.</p>
                                <a href="<?php echo isset($_SESSION['email_address']) ? 'pages/home.php' : 'pages/user_login.php?redirected_from_booking=true&destination=Tsomgo_lake'; ?>" class="btn btn-primary">Book Now</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    <link rel="stylesheet" href="styles/footer_style.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts/main.js"></script>
</body>
</html>