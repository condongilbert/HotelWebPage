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
                    <h1>Contact Us</h1>
                    <p>Discover World's #1 Five Star Hotel </p>

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a
                        recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga
                        eveniet! Qui delectus tempore amet!
                    </p>
                    <img src="images/img_1.jpg" alt="Read More Images" width="100%">

                </div>
                <div class="sideright">
                    <form action="hotel.php" method="POST" class="contactform">

                        <label for="name">Name</label><br>
                        <input type="text" id="name" ><br>
                        <label for="phone">Phone</label><br>
                        <input type="text" id="phone" ><br>
                        <label for="email">Email</label><br>
                        <input type="email" id="email" ><br>
                        <label for="message">Write Message</label><br>
                        <textarea name="message" id="message" cols="30" rows="10"></textarea><br>
                        <input type="submit" value="Send Message" class="button"><br>
                    </form>
                </div>
            </div>

        </div>

    </section>
    <div class="clearfix">

    </div>
    <section class="main-padding">

        <div class="container">
            <div class="contact main-grid">
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

    <?php include("include/subscribe.php");?>

</main>
<<?php include("include/footer.php");?>

<script src="js/main.js"></script>

<script src="js/contact.js"></script>

<script src="js/pageloader.js"></script>



<!-- <script src="https://unpkg.com/scrollreveal"></script> -->
<!-- <script src="js/lightbox.js"></script> -->
<script src="js/main.js"></script>
<script src="js/pageloader.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>