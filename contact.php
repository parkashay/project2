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
    <title>Contact-SOE</title>
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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </section>
        <div class="container-content-two-col">
            <div class="cover-bg">
                <img src="./assets/images/soe-dhungepatan.jpg" alt="pu-cover-img">
            </div>

            <div class="contact-map">
                <div class="two-col">
                    <div class="contact-info">
                        <p class="contact-info-header">Contact Information</p>
                        <div class="contact-two-col">
                            <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                            <div class="text">Pokhara Metropolitan City-30, Lekhnath, Kaski, Nepal</div>
                        </div>
                        <div class="contact-two-col">
                            <div class="icon"><i class="fa-solid fa-phone"></i></div>
                            <div class="text"><a href="tel:+977-61-504046">+977-61-504046</a><br><a href="tel:+977-61-504047">+977-61-504047</a><br><a href="tel:+977-61-504048">+977-61-504048</a></div>
                        </div>
                        <div class="contact-two-col">
                            <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                            <div class="text"><a href="mailto:soe@pu.edu.np">soe@pu.edu.np</a></div>
                        </div>
                        <div class="contact-social-links">
                            <div class="social-icon" style="--icon-hover-clr:#1674ea"><i class="fa-brands fa-facebook"></i></div>
                            <div class="social-icon" style="--icon-hover-clr:#f70000"><i class="fa-brands fa-youtube"></i></div>
                            <div class="social-icon" style="--icon-hover-clr:#1c96e9"><i class="fa-brands fa-twitter"></i></div>
                            <div class="social-icon" style="--icon-hover-clr:#fff"><i class="fa-brands fa-github"></i></div>
                        </div>
                    </div>
                    <div class=" contact-form">
                        <h3 class="contact-info-header list-title">Send us a <span class="color-highlight" style="--highlight-color:var(--orange-500);">Message</span></h3>

                        <div class=" card">
                            <form class="card-form">
                                <div class="input">
                                    <input type="text" class="input-field" required />
                                    <label class="input-label">Full name</label>
                                </div>
                                <div class="input">
                                    <input type="text" class="input-field" required />
                                    <label class="input-label">Email</label>
                                </div>
                                <div class="input">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Message.."></textarea>
                                </div>
                                <div class="action">
                                    <button class="action-button">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <h3 class="list-title" style="margin-bottom: 2em; text-align:center;font-size:2em">Locate us on<span class="color-highlight" style="--highlight-color:var(--orange-500);"> Map</span></h3>

                <div class="g-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2031.4977106248716!2d84.03032945329386!3d28.186908777088835!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399597b93139b86d%3A0xc810d3ad871b63e3!2sPokhara%20University%20School%20Of%20Engineering%20Block%20B!5e0!3m2!1sen!2snp!4v1662215267873!5m2!1sen!2snp" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
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