<?php
require("./fetch_data/fetch_admin.php");
require("./fetch_data/fetch_departments.php");
?>
<?php
// code to get news using its id
include("./database/conn_admin.php"); //database config
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0d46d5">
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- styles -->
    <style>
        @import url("./css/reset.css");
        @import url("./css/app.css");
    </style>
    <title>Message From Director-SOE</title>
    <!-- spotlight -->
    <link rel="preload" href="./javascript/spotlight.bundle.js" as="script">
</head>

<body>
    <!-- header nav -->
    <?php
    include("./header.php");
    ?>
    <main class="cd-main-contentS">
        <section class="component-main component-main-posts">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="./index.php"><i class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Message From Director</li>
            </ol>

            <div class="tiles-container content-with-sidebar">
                <div class="post-descriptive">
                    <p class="title program-title">Message From Director</p>
                    <div class="staff-profile">
                        <div class="profile-description">
                            <p class="profile-description-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa, sequi! Blanditiis voluptatibus corporis dolore amet ipsa fugiat non, magnam consectetur?</p>
                        </div>
                        <div class="profile-image-name-title">
                            <img src="./assets/images/logo_pu.png" alt="message from director">
                            <div class="title-name">
                                <p class="profile-name-124X58rr">Er. Om Prakash Sharma</p>
                                <p class="title-124X58rr">SOE Director</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- recent posts -->
                <section class="side-nav">
                    <div class="useful-links">
                        <div class="latest-header">
                            <div>
                                <h1>Useful Links</h1>
                            </div>
                        </div>
                        <div class="latest-posts-post">
                            <div class="recent-posts-title link-sticky">
                                <a href="message.php?from=B.E. Computer&key=1">Message from Coordinator</a>
                                <?php getcourselink(0); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <?php
        include("./footer.php");
        ?>
    </main>
    <!-- footer -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="./javascript/spotlight.bundle.js" differ></script>
    <script src="./javascript/index.js"></script>
</body>

</html>