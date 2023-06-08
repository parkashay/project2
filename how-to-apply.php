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
    <title>Applying to SOE-SOE</title>
</head>

<body>
    <!-- loader -->
    <?php include('./components/loader.php'); ?>
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
                <li class="breadcrumb-item" aria-current="page"><a href="./admission.php">Admission</a></li>
                <li class="breadcrumb-item" aria-current="page"><a href="./undergraduate.php">Undergraduate</a></li>
                <li class="breadcrumb-item active" aria-current="page">Applying to SOE</li>
            </ol>

            <div class="container-content-one-col">
                <h1 class="heading-1-left">Applying to <span class="color-highlight" style="--highlight-color:#dd6b20;">SOE</span></h1>
                <div class="main-content-xr45">
                    <p class="content-xr45-text">
                        The only things that SOE students have in common are academic ability and intellectual curiosity. Our students come from all over the Nepal and bring with them an amazing range of backgrounds and interests. This helps make our College one of the most exciting learning environments anywhere. SOE is recognised as offering one of the best educations in Nepal and competition for places to study here at undergraduate level is intense. On average we receive over 4000 applications for approximately 300 places each year.
                    </p>
                    <h3 class="list-title">To make a competitive application, <span class="color-highlight" style="--highlight-color:#6415ff;">follow the steps below:</span></h3>
                    <ol class="with-counter">
                        <li>Choose a course and make sure that you have met or are on target to meet the admission requirements</li>
                        <li>Explore our colleges and decide whether to express a college preference or make an open application on your UCAS form</li>
                        <li>Look at our admissions timeline and note the deadlines</li>
                        <li>Read our <a href="./assets/files/coverpage_2077-Updated-website.pdf" download="guidiline">guide</a> for applicants to learn about each stage of the admissions process.</li>
                        <li>Read entrance <a href="./assets/files/SOE-PU-Entrance-Sylllabus.pdf" download="entrance-syllabus">syllabus</a></li>
                    </ol>
                </div>
                <div class="online-form">
                    <h3 class="list-title">To apply online fill up the form provided below: <span class="color-highlight" style="--highlight-color:#6415ff;"></span></h3>
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScRcdxpiUUBxu3WhdE3IhgSet1HLgzkvsvPq1H4TBdJcX4v9A/viewform?embedded=true" width="100%" height="1200" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                </div>
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
    <script src="./javascript/index.js"></script>
</body>

</html>