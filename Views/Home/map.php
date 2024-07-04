<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>ParkEase</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            background-color: #efe0f7;
        }
        .map-container {
            position: relative;
            display: inline-block;
        }
        .map {
            width: 100%;
            height: auto;
            margin-left: 24%;
            
        }
        .map-icon {
            position: absolute;
            cursor: pointer;
            font-size: 2rem; /* Increase icon size */
            color: #ff0013; /* Optional: change icon color */
            width: 80px;
            height: auto;
        }
        .tooltip {
            visibility: hidden;
            width: 200px;
            background-color: white;
            color: #000;
            font-size: 20px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 125%; /* Position the tooltip above the icon */
            left: 50%;
            margin-left: -100px; /* Use half of the width (200px), to center it */
            opacity: 0;
            transition: opacity 0.3s;
        }
        .tooltip img {
            width: 100%;
            height: auto;
        }
        .map-icon:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="" class="navbar-brand p-0">
            <h1 class="display-6"><span style="color:#ff914d">Park</span>Ease</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="home" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="tickets" class="nav-item nav-link active">Tickets</a>
                <a href="blog.html" class="nav-item nav-link">Map</a>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->

<!-- Map Start -->
<div class="map-container">
    <img src="photos/Park_Map.png" class="map" alt="Park Map">
    <br><br>

    <div class="map-icon" style="top: 200px; left: 700px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/ferris-wheel.png" alt="Park Image">
            <p>Ferris Wheel</p>
        </div>
    </div>

    <div class="map-icon" style="top: 675px; left: 830px;">
    <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/carousel.png" alt="Park Image">
            <p>Carousel</p>
        </div>
    </div>

    <div class="map-icon" style="top: 675px; left: 545px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/vikings.jpg" alt="Park Image">
            <p>Vikings</p>
        </div>
    </div>

    <div class="map-icon" style="top: 858px; left: 595px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/flying-fiesta.jpg" alt="Park Image">
            <p>Flying Fiesta</p>
        </div>
    </div>

    <div class="map-icon" style="top: 978px; left: 760px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
            <p>ParkEase Front Gate</p>
        </div>
    </div>

    <div class="map-icon" style="top: 780px; left: 1175px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/water-slide.jpg" alt="Park Image">
            <p>Water Slide</p>
        </div>
    </div>

    <div class="map-icon" style="top: 480px; left: 1150px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/bump-car.jpg" alt="Park Image">
            <p>Bumper Car</p>
        </div>
    </div>

    <div class="map-icon" style="top: 315px; left: 1140px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/tea-cup.jpg" alt="Park Image">
            <p>Round-a-Tea</p>
        </div>
    </div>

    <div class="map-icon" style="top: 495px; left: 710px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
        <img src="photos/horror-house.jpg" alt="Park Image">
            <p>Horror House</p>
        </div>
    </div>

    <div class="map-icon" style="top: 527px; left: 340px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
            <img src="photos/tower.jpg" alt="Park Image">
            <p>Extreme Tower</p>
        </div>
    </div>

    <div class="map-icon" style="top: 379px; left: 499px;">
        <i class="fas fa-map-marker-alt"></i>
        <div class="tooltip">
            <img src="photos/round.jpg" alt="Park Image">
            <p>Ride-a-Round</p>
        </div>
    </div>
</div>

<div class="map-title">

    </div>
<!-- Map End -->



</body>
</html>