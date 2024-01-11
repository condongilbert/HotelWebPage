<!DOCTYPE php>
<php lang="en">

<head>
    
    <style></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter | Bellingham Hotel</title>
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
                    <h1>Welcome! </h1>
                    <?php        
                        include('include/config.php');
                        $email=$_POST["email"];
                        $sql="SELECT * FROM subscribe WHERE email = '$email'";
                        $result = mysqli_query($con,$sql);
                        $row = mysqli_fetch_array($result);

                        if($row['email']==$email){
                            ?>
                        
                        <script>
                            confirm('Email Already Exists, Enter a New One.');
                            window.location="index.php";
                        </script>

                        <?php
                        }
                        else{
                            $data="INSERT INTO subscribe(email) values('$email')";

                            if(mysqli_query($con, $data)){
                                ?>
                                <script>
                                    confirm('Email Successfully Added, Thank You!');
                                    window.location = "contact.php";
                                    </script>
                                <?php
                            }
                            else{
                                ?>
                                    <script>
                                        alert('Email Could Not Be Added, Try Again!');
                                        window.location="contact.php";
                                        </script>
                                <?php
                            }
                        
                        }
                        ?>
                    
                        
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix">

    </div>
</body>
</main>


<?php include("include/footer.php");?>
    
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/particles.js"> </script>
    <script src="js/app.js"></script>
    <script src="js/pageloader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
   


<!-- 
    <form action="/hotelcontact.php" class="contactform" class="autocomplete" method="POST"></form>
    <form action="/newsletter.php" method="POST" name="email" class="feedback" class="autocomplete"></form> -->