<?php
require("fetch_data/fetch_admin.php")
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
    <title>Undergraduate-SOE</title>
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
                    <div data-toggle="tooltip" data-placement="left" title="Home"><a href="../index.php"><i class="fa-solid fa-house"></i></a></div>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Undergraduate</li>
            </ol>
        </section>
        <section class="large-container">
            <div class="header-image">
                <img src="./assets/images/pokharauniversityjpg-1592705547.jpeg" alt="Undergraduate-pokhara-university">
            </div>
            <div class="program-details-container">
                <p class="title">Welcome to SOE Undergraduate</p>
                <p class="title-description">SOE Undergraduate is your guide to academics and educational opportunities offered through the Office of the Vice Provost for Undergraduate Education and our campus partners.</p>
                <div class="home-admission-process program-stsgsb4587">
                    <div class="admission-col1">
                        <img src="./assets/images/admisssion-home.jpg" alt="">
                    </div>
                    <div class="admission-col2">
                        <h1>The Advising Resource Toolkit</h1>
                        <p>
                            These advising tools may be used cooperatively during an advising conversation or you may use them on your own, to help you prepare for a conversation with your academic advisor. They are intended to:
                        <ul>
                            <li>
                                help frame your reflections throughout your time at Stanford
                            </li>
                            <li>
                                guide your strategic thinking if you face challenges or difficulty
                            </li>
                            <li>
                                acilitate your academic planning and intellectual development
                            </li>
                            <li>
                                support you as you consider post-undergraduate education
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="home-admission-process program-stsgsb4587">
                    <div class="admission-col1">
                        <h1>Explore the possibilities of a School of Engineering education as you map out your college journey.</h1>
                        <p>Our aim is to provide quality education with as much practical knowledge as possible so that the students will have the best possible talent when they graduate. Not only the existing knowledge but its our aim to make them innovative and adaptable to new ideas and methods. Innovation and Ideology will be taught along with academics. </p>
                    </div>
                    <div class="admission-col2">
                        <img src="./assets/images/Graduate-studying.webp" alt="">
                    </div>
                </div>
            </div>
            <div class="home-academic bdtyuj58">
                <div class="home-academic-conatiner">
                    <p class="title">Programs</p>
                    <p class="title-description">We have following programs in Undergraduation</p>
                    <div class="home-academic-cards-container">
                        <?php echo undergraduationShort(); ?>
                    </div>
                </div>
                <div class="more-posts">
                    <a href="./how-to-apply.php" class="more-posts-button">Apply Now</a>
                </div>
            </div>
        </section>
        <!-- footer -->
        <?php
        include("./footer.php");
        ?>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../javascript/index.js"></script>
</body>

</html>