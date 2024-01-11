<!DOCTYPE php>
<php lang="en">

<head>
    <style></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Bellingham Hotel</title>
    <link rel="stylesheet" href="scss/main.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" type="image/x-icon" href="favicon/favicon.ico">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="stylesheet" href="node_modules/@fortawesome/fontawesome-free/css/all.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<?php include("include/header.php");?>

<body>
    <!-- <div class="loadingDiv">
        <div class="loader spinner"></div>
    </div> -->
    <div class="heroimage">
        <div id="particles-js">
            <div class="heroitems">
                <div class="container">
                    <h1>Reservation</h1>
                    <p>Discover our World's #1 Luxury Room For VIP </p>

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
                    <h2 class="heading">Contact Form
                    </h2>
                    <p>Get inspiration for your next trip
                    </p>
                    <img src="images/gallery (2).jpeg" alt="Read More Images" width="100%">

                </div>
                <div class="sideright">
                    <h2>Thank You, Check your Email for Details</h2>
                    <p>Enjoy Your Stay</p>

                </div>

    </section>


    <div class="clearfix"></div>

    <?php include("include/subscribe.php");?>

</main>
<?php include("include/footer.php");?>

<script src="js/main.js"></script>
<!-- <script src="js/pageloader.js"></script> -->

<script src="js/contact.js"></script>
<form action="/newsletter.php" method="POST" class="feedback" class="autocomplete"></form>
<script src="js/particles.js"></script>