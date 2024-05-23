<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT-SWEN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>

        body {
            background-color: #CCCCCC33;
        }
        #about-us{
            text-align:center;
            color: darkblue;
            font-size: 36px;
        }
        #swen-title{
            text-align:center;
            font-size: 30px;
        }
        #swen-moto{
            text-align:center;
        }
        .link-button {
            background: none;
            border: none;
            color: darkred; 
            text-decoration: underline;
            cursor: pointer;
        }

        .service {
            margin-top: 50px;
        }

        #contact-us {
            margin-top: 50px;
            text-align:center;
            font-size: 36px;
        }

        #contact-info {
            text-align: center;
        }
        #services{
            text-align:center;
            font-size: 30 px;
        }

    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php"><b>SWEN</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo isset($_SESSION['user_id']) ? '../pages/home.php' : '../pages/user_login.php'; ?>">Home</a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../pages/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>

    <div class="container mt-5">
        <h1 id="about-us">About Us</h1>
        <p>Welcome to our website! We are a team of passionate individuals dedicated to providing high-quality services to our customers.</p>
        <h1 id="swen-title">SWEN</h1>
        <h2 id="swen-moto">Your All-In-One Travel Companion</h2>
        <p>
            In the bustling world of travel and tourism, where every destination beckons with its own allure, findingthe perfect getaway can often feel like navigating a maze of options. But fear not, for SWEN is here to simplify your travel experience like never before. Imagine a platform where booking your dream vacation is as easy as a click of a button, where every aspect of your journey, from lodging to insurance, is seamlessly managed with just a few taps on your device. Welcome to SWEN – your all-in-one travel companion.

        At its core, SWEN is more than just a booking platform; it's a gateway to a world of unforgettable experiences. Picture this: you're browsing through a myriad of destinations, each more captivating than the last. With SWEN, the journey begins the moment you set your sights on your desired destination. Whether it's the serene beaches of Bali, the majestic mountains of Switzerland, or the vibrant streets of Tokyo, SWEN offers a comprehensive selection of destinations to cater to every traveler's wanderlust.

    But what truly sets SWEN apart is its user-friendly interface and unparalleled convenience. Gone are the days of endless searches and tedious bookings. With SWEN, all it takes is a simple click of the "Book Now" button, and voilà – your entire itinerary is seamlessly arranged. From flights to accommodations, tours to transfers, SWEN handles it all with utmost efficiency. No more juggling between multiple tabs or spending hours on the phone with customer service. With SWEN, booking your dream vacation has never been easier.
    
    But the convenience doesn't stop there. SWEN goes above and beyond to ensure that every aspect of your journey is taken care of. Need to refill your prescription while abroad? No problem – SWEN provides access to medical services and pharmacies at your fingertips. Concerned about travel insurance coverage? SWEN offers comprehensive insurance options tailored to your specific needs. From emergency assistance to lost luggage reimbursement, SWEN has you covered every step of the way.
    
    Moreover, SWEN doesn't just stop at booking your travel essentials. It's also your go-to resource for insider tips, local recommendations, and personalized travel advice. With a dedicated team of travel experts and destination specialists, SWEN ensures that your travel experience is nothing short of extraordinary. Whether you're a seasoned globetrotter or a first-time traveler, SWEN's wealth of knowledge and expertise ensures that every trip is unforgettable.
    
    In addition to its unmatched convenience and comprehensive services, SWEN is committed to sustainability and responsible tourism. Through partnerships with eco-friendly accommodations, carbon offset programs, and community-based tourism initiatives, SWEN strives to minimize its environmental footprint and support local communities around the world. With SWEN, you can travel with peace of mind, knowing that your adventures are making a positive impact on the planet.
    
    In conclusion, SWEN is not just a booking platform; it's a transformative travel experience. With its user-friendly interface, unparalleled convenience, and commitment to sustainability, SWEN redefines the way we travel. So why wait? Embark on your next adventure with SWEN and discover a world of possibilities at your fingertips. Your dream vacation awaits – book now and let the journey begin.
    </p>
    
    <div class ="button">
        <button class="link-button" onclick="window.location.href='../index.php'">Book your trip here!</button>
        
    <p>With SWEN, you can rest assured that every aspect of your journey is taken care of, allowing you to focus on making memories that last a lifetime.</p>
</div>

<div id="services" class="service">
    <h1 id ='services'>Our Services</h1>
    <p>Explore our range of services tailored to enhance your travel experience.</p>
        <li>Flight booking</li>
        <li>Hotel reservations</li>
        <li>Car rental</li>
        <li>Tour packages</li>
        <li>Travel insurance</li>
        <li>Medical assistance</li>
        <li>24/7 customer support</li>

</div>

<div id="contact-us">
    <h1>Contact Us</h1>
    <p>Have questions or need assistance? We're here to help!</p>
</div>

<div id="contact-info">
    <p>SWEN Travel Agency</p>
    <p>11 Novembra Krastmala 29,</p>
    <p>Riga, Latvia</p>
    <p>LV-1050</p>
    <p>Email: phrbshrp@gmail.com</p>
    <p>Phone: +371-28683047</p>
</div>
</div>

<footer class="footer py-3 bg-light">
    <div class="container">
        <p>&copy; <?php echo date("Y"); ?> SWEN Registered for Ebusiness project work. Created by <strong>Phurba Sherpa</strong> <b>221ADM061</b>.</p>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
