<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "occupymarsdb";
   $conn = new mysqli($servername, $username, $password, $dbname);
    

   $fullName = htmlspecialchars(stripcslashes(trim($_POST["fullName"])));
   $email = htmlspecialchars(stripcslashes(trim($_POST["email"])));
   $birthDate = htmlspecialchars(stripcslashes(trim($_POST["birthDate"])));
   $gender = htmlspecialchars(stripcslashes(trim($_POST["gender"])));
   $country = htmlspecialchars(stripcslashes(trim($_POST["country"])));

   $insertTicketQueryStatement = "INSERT INTO volunteers (fullName, email, gender, birthDate, country) VALUES ('$fullName', '$email', '$gender', '$birthDate', '$country')";
   $conn -> query($insertTicketQueryStatement);
   $conn -> close();
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
</head>


<body class="m-0 p-0">
    <div class="fluid-container">

        <!-- Header -->
        <div class="fluid-container position-relative" style="height: 350px;">
            <!-- Video Container -->
            <div class="position-absolute w-100 h-100 top-0">
                <video class="w-100 h-100" autoplay loop playsinline muted style="object-fit: cover;">
                    <source src="src/videos/end-occupy-mars-header-video.mp4" type="video/mp4" />
                    Your browser doesn't support <strong>video player</strong>

                </video>
            </div>

            <!-- Overlay Container-->
            <div class="position-absolute top-0 w-100 h-100"
                style="background: linear-gradient(180deg, rgba(0, 0, 0, 0) 50%, rgba(0, 0, 0, 0.5) 100%)">

                <div class="d-flex align-items-end h-100 w-100 flex-column-reverse">
                    <h3 class="title julius-font sub-title mt-4 mb-2 w-fit-content mx-auto">Among Stars</h3>
                    <h3 class="title josefin-font mx-auto m2-5 w-fit-content">Occupy Mars</h3>

                </div>

            </div>


        </div>

        <div class="container">
            <h6 class="w-fit-content mt-3 mx-auto mb-3"><span class="color-green">Your request submitted
                    successfully</span>
                <span class="mx-3">|</span> Your request under
                consideration
            </h6>


            <div class="form-container m-auto"
                style="width: 1200px; height: 300px; background-image: url('src/images/mars-side-image.jpg');">

                <div class="w-100 h-100" style="background-color: rgba(0, 0, 0, 0.6)">

                    <div class="container w-100 h-100">

                        <div class="row justify-content-around py-4">

                            <div class="row row-column col-6">

                                <div class="col-12 border my-2 p-3">
                                    <div class="row justify-content-around">
                                        <div class="col-3 josefin-font justify-content-end row color-white">
                                            Full
                                            Name</div>

                                        <div class="col-9 josefin-font justify-content-start row color-white">
                                            <?php echo $fullName ?></div>
                                    </div>
                                </div>

                                <div class="col-12 border my-2 p-3">
                                    <div class="row justify-content-around">
                                        <div class="col-3 josefin-font justify-content-end row color-white">
                                            Email Address</div>

                                        <div class="col-9 josefin-font justify-content-start row color-white">
                                        <?php echo $email ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 border my-2 p-3">
                                    <div class="row justify-content-around">
                                        <div class="col-3 josefin-font justify-content-end row color-white">
                                            Bidth Date</div>

                                        <div class="col-9 josefin-font justify-content-start row color-white">
                                        <?php echo $birthDate ?></div>
                                    </div>
                                </div>

                            </div>

                            <div class="row row-column col-3">

                                <div class="col-12 border my-2 p-3">
                                    <div class="row justify-content-around">
                                        <div class="col-3 josefin-font justify-content-end row color-white">
                                            Gender</div>

                                        <div class="col-3 josefin-font justify-content-start row color-white">
                                        <?php echo $gender ?></div>
                                    </div>
                                </div>

                                <div class="col-12 border my-2 p-3">
                                    <div class="row justify-content-around">
                                        <div class="col-3 josefin-font justify-content-end row color-white">
                                            Country</div>

                                        <div class="col-3 josefin-font justify-content-start row color-white">
                                        <?php echo $country ?></div>
                                    </div>
                                </div>

                                <div class="col-12 my-2 p-3">
                                    <div class="row justify-content-around">
                                        <div class="opacity-0 col-3 josefin-font justify-content-end row color-white">
                                            ...</div>

                                        <div class="opacity-0 col-3 josefin-font justify-content-start row color-white">
                                            ...</div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>

        <div class="container mt-4">
            <div class="row justify-content-center">

                <div class="row col-6 border justify-content-around">

                    <!-- NASA Logo -->
                    <div class="col-4">
                        <a href="https://www.nasa.gov/" target="_blank">
                            <img src="src/images/NASA_logo.svg" />
                        </a>
                    </div>

                    <!-- SpaceX Logo-->
                    <div class="col-4">
                        <a href="https://www.spacex.com/" target="_blank">
                            <img width="120" height="98" src="src/images/spacex_logo.svg" />
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

    <!-- Footer -->
    <div class="w-100 footer position-absolute bottom-0">
        <div class="container h-100">
            <div class="d-flex align-items-center h-100">
                <h6 class="w-fit-content m-auto josefin-font"><strong>Of Course I Still Love You</strong> &copy; 2023
                </h6>
            </div>
        </div>
    </div>

</body>

</html>