<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms | Bellingham Hotel</title>
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
                    <h1>Our Rooms</h1>
                    <p>Discover World's #1 Five Star Hotels</p>

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
            <div class="container-rooms">

                <div class="rooms">
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_1.jpg" class="img" alt="">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading"></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                            </p>
                            <p>
                                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_3.jpg" class="img" alt="">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading"></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                            </p>
                            <p>
                                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_11.jpg" class="img" alt="">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading"></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                            </p>
                            <p>
                                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_12.jpg" class="img" alt="">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading"></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                            </p>
                            <p>
                                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_16.jpg" class="img" alt="">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading"></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                            </p>
                            <p>
                                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                            </p>
                        </div>
                    </div>
                    <div class="rooms-pic-1">
                        <figure>
                            <img src="images/img_14.jpg" class="img" alt="">
                        </figure>
                        <div class="rooms-body">
                            <h3 class="rooms-heading"></h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.
                            </p>
                            <p>
                                <a href="#" class="button" data-toggle="modal" data-target="#RoomForm">Book Now</a>
                            </p>
                        </div>



                    </div>




                </div>


            </div>
    <?php include("include/subscribe.php");?>

</main>
<?php include("include/footer.php");?>

<!-- Modal php Markup -->
<div id="RoomForm" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <h1 class="modal-title">Reservation Form</h1>
            </div>
            <div class="modal-body">
                <form class="formBook" action="booknow.php">
                    <!-- new -->
                    <input type="hidden" name="_token" value="">
                    <div class="row my-1">
                        <div class="form-group col-md-6 my-1">
                            <label class="form-label">Arrival Date</label>
                            <input type="date" class="form-control" id="bookDate" name="arrivedate">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Departure Date</label>
                            <input type="date" class="form-control" id="bookDated" name="departdate">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6 my-1">
                            <label class="form-label">Room</label>
                            <select id="room" name="room" class="form-control">
                                <option selected>1 Room</option>
                                <option>2 Room</option>
                                <option>3 Room</option>
                                <option>4 Room</option>
                                <option>5 Room</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="form-label">Guests</label>
                            <select value="" name="guest" id="guest" class="form-control">
                                <option selected>1 Guest</option>
                                <option>2 Guests</option>
                                <option>3 Guests</option>
                                <option>4 Guests</option>
                                <option>5+ Guests</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group my-1">
                        <label class="form-label">Email</label>
                        <div>

                            <input type="email" class="form-control" id="bookEmail" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Write a Note</label>
                        <textarea class="form-control" id="bookMessage" name="message" rows="3" cols="6"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="my-4">
                            <button type="submit" class="btn button">RESERVE NOW</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.3.1.js"></script>
<!-- <script src="js/pageloader.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-
alpha1/js/bootstrap.min.js"></script>
<script src="js/book.js"></script>





<form action="/newsletter.php" method="POST" class="feedback" class="autocomplete"></form>
<script src="https://unpkg.com/scrollreveal"></script> -->
<!-- <script src="js/lightbox.js"></script> -->
<script src="js/main.js"></script>
<script src="js/pageloader.js"></script>
<script src="js/particles.js"></script>
<script src="js/app.js"></script>