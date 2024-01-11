<!DOCTYPE php>
<php lang="en">
<head>
    <style></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index | Bellingham Hotel</title>
    <link rel="stylesheet" href="scss/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<?php include('include/header.php');?>
<body>


    <div class="heroimage">
        <div id="particles-js">
            <div class="heroitems">
                <div class="container">
                    <h1>Welcome to Bellingham Hotel</h1>
                    <p>Discover World's #1 Five Star Hotel </p>
                    <a class="button" href="rooms.php">Book Now</a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">

    </div>


</body>

<main>
    <section class="main-padding">

        <div class="container">
            <div class="container main-grid">
                <div class="sideleft">
                    <h4 class="sub-heading">STAY WITH OUR LUXURY ROOMS</h4>
                    <h2 class="heading">Stay and Enjoy</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a
                        recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga
                        eveniet! Qui delectus tempore amet!</p>
                    <p>
                        <a class="button" href="gallery.php">
                            More About Us
                        </a>
                    </p>


                </div>
                <div class="sideright">
                    <img src="images/img_7.jpg" alt="Read More Image" width="100%">
                </div>
            </div>

        </div>

    </section>
    <div class="clearfix">

    </div>
    <section class="main-padding">

        <div class="container">
            <div class="container main-grid"></div>
            <div class="feature">
                <h4 class="sub-heading">OUR LUXURY ROOMS</h4>
                <h2 class="heading">FEATURED ROOMS</h2>

            </div>

            <div class="feature-image">


                <img src="images/img_1.jpg" alt="">
                <img src="images/img_3.jpg" alt="">
                <img src="images/img_11.jpg" alt="">
                <img src="images/img_12.jpg" alt="">
                <img src="images/img_16.jpg" alt="">
                <img src="images/img_14.jpg" alt="">



            </div>

        </div>
        </div>

    </section>
    <div class="clearfix"></div>

    <section class="newsLetter">
        <div class="container">
            <div class="container newsletter-grid">
                <h1>Subscribe to Our Newsletter</h1>
                <form class="feedback" action="newsletter.php">
                    <input id="subscribe" type="email" placeholder="Enter Email...">
                    <button type="submit" class="button">Subscribe</button>

                </form>
            </div>
        </div>
    </section>

</main>

<?php include("include/footer.php");?>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-
alpha1/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/pageloader.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>
<form action="/newsletter.php" method="POST" class="feedback" class="autocomplete"></form>

