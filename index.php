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
    <title>School Of Engineering</title>
</head>

<body>
    <!-- loader -->
    <?php include('./components/loader.php'); ?>
    <!-- header nav -->
    <?php
    include("./header.php");
    ?>
    <!-- hero section -->
    <?php
    include("./herosection.php");
    ?>
    <main class="cd-main-content">
        <!-- recent posts -->
        <section class="home-page-posts" id="home-page-posts">
            <h1 class="section-heading highlight">School OF Engineering News</h1>
            <div class="posts-container">
                <?php
                getposts("soe_posts");
                ?>
            </div>
            <div class="more-posts">
                <a href="./allpost.php" class="more-posts-button">More posts</a>
            </div>
        </section>
        <div class="home-academic">
            <div class="home-academic-conatiner">
                <p class="title">Academics</p>
                <p class="title-description">Preparing students to make meaningful contributions as engaged citizens and leaders in a complex world</p>
                <div class="home-academic-cards-container">
                    <div class="academic-cards">
                        <img src="./assets/images/Undergraduate-studying.jpg" alt="Undergraduate studying at soe">
                        <p class="home-academic-title">Undergraduate </p>
                        <p>Rich learning experiences that provide a broad liberal arts foundation and deep subject-area expertise</p>
                        <a href="./undergraduate.php">Know More <i class="fa-solid fa-angle-right go-right"></i></a>
                    </div>
                    <div class="academic-cards">
                        <img src="./assets/images/Graduate-studying.webp" alt="Undergraduate studying at soe">
                        <p class="home-academic-title">Graduate </p>
                        <p>Unsurpassed opportunities to participate in the advancement of entire fields of knowledge</p>
                        <a href="./graduate.php">Know More <i class="fa-solid fa-angle-right go-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- about soe -->
        <div class="home-pu-count">
            <h1 class="title">About SOE</h1>
            <p class="title-description">A place for learning, discovery, innovation, expression and discourse</p>
            <hr>
            <div class="home-data">
                <div>
                    <h1>2009</h1>
                    <p>Opened In</p>
                </div>
                <div>
                    <h1>99+</h1>
                    <p> Professors</p>
                </div>
                <div>
                    <h1>10,000+</h1>
                    <p>Passed Out Students</p>
                </div>
                <div>
                    <h1>6</h1>
                    <p>Faculties</p>
                </div>
            </div>
            <hr>
            <div class="more-posts">
                <a href="about.php" class="more-posts-button">More About SOE</a>
            </div>
        </div>

        <!--SOE Vision -->
        <div class="home-vision">
            <h1 class="title">Our Vision</h1>
            <div class="svg-background"></div>
            <div class="svg-background svg-background-2"></div>
            <div class="home-vision-container">
                <div class="vision">
                    <div class="vision-image">
                        <img src="./assets/images/svision-tudents.webp" alt="soe vision">
                    </div>
                    <div class="vision-text">
                        <p class="subtitle">Learning</p>
                        <p class="vision-title">Develop Knowledge through Experience</p>
                        <p class="vision-description">
                            Our aim is to provide quality education with as much practical knowledge as possible so that the students will have the best possible talent when they graduate. Not only the existing knowledge but its our aim to make them innovative and adaptable to new ideas and methods. Innovation and Ideology will be taught along with academics.
                        </p>
                    </div>
                </div>
                <div class="vision">
                    <div class="vision-image">
                        <img src="./assets/images/vision-2.jpg" alt="soe vision">
                    </div>
                    <div class="vision-text">
                        <p class="subtitle">Research</p>
                        <p class="vision-title">Discover Lasting Solutions</p>
                        <p class="vision-description">
                            Students will be faciliated to gain the best education along with all the necessary toolkits, resources and opportunities. We provide the best teachers having years of experience in their respective fields and have guided a number of individuals in their course of life. They know how to cope with students and can guide all towards better future showing them the best gateway towards a better and prosperous career in their life.
                        </p>
                    </div>
                </div>
                <div class="vision">
                    <div class="vision-image">
                        <img src="./assets/images/vision-3.jpg" alt="soe vision">
                    </div>
                    <div class="vision-text">
                        <p class="subtitle">Our role in the world</p>
                        <p class="vision-title">Partner to Serve Communities</p>
                        <p class="vision-description">
                            Not only concerned with getting the degree but students will also be guided with new ideologies and innovations so that they will be the best of the best when their knowledge and curiosities will be even more flourished by the university. No obstacle might get in their way to success and prosperity.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- message from staffs -->
        <div class="home-profile-container">
            <div class="blur-bg">
            </div>
            <div id="carouselExampleIndicators" class="carousel slide soe-profile" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-staffs/udaya.jpg" alt="pu-soe-udaya-raj">
                                <p class="message">SOE believes in imparting quality education to all its students. Empowerment of each student at all levels by meeting the intellectual and emotional needs of the citizen is what we strive for. Our college has the best facilities that offer wide-ranging opportunities for an outstanding teaching-learning environment.</p>
                                <div class="title-position">
                                    <span class="profile-name">Udaya Raj Dhungana</span>
                                    <br>
                                    <span class="position">Coordinator, BoCE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-staffs/rajeshsir.jpg" alt="Rajesh Kunwar">
                                <p class="message">School of Engineering is an ultimate destination for students who want to secure their future in this competitive world.</p>
                                <div class="title-position">
                                    <span class="profile-name">Rajesh Kunwar</span>
                                    <br>
                                    <span class="position">Assistant Professor</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-staffs/niraj-khadka.jpg" alt="niraj-khadka">
                                <p class="message">It's my pleasure to highly recommend you for your Engineering at School of Engineering.</p>
                                <div class="title-position">
                                    <span class="profile-name">Er. Niraj Khadka</span>
                                    <br>
                                    <span class="position">Coordinator, BEE</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!-- admission -->
        <div class="home-admission">
            <h1 class="title">Admission</h1>
            <p class="title-description">Offering extraordinary freedom to explore, to collaborate, and to challenge yourself</p>
            <img src="./assets/images/admisssion-home.jpg" alt="soe-admission">
            <div class="home-admission-process">
                <div class="admission-col1">
                    <h1>Explore the possibilities of a Scholl of Engineering education as you map out your college journey.</h1>
                    <p>Our aim is to provide quality education with as much practical knowledge as possible so that the students will have the best possible talent when they graduate. Not only the existing knowledge but its our aim to make them innovative and adaptable to new ideas and methods. Innovation and Ideology will be taught along with academics. </p>
                </div>
                <div class="admission-col2">
                    <h1>SOE meets the full financial need of every admitted undergrad who qualifies for assistance.</h1>
                    <p>10% of undergrads receive some form of financial assistance. Generally, tuition is covered for families with below average incomes.</p>
                </div>
            </div>
            <div class="more-posts">
                <a href="how-to-apply.php" class="more-posts-button">Know how to apply</a>
            </div>
        </div>

        <!-- student-testimonials -->
        <div class="home-profile-container">
            <div class="blur-bg blur-bg2">

            </div>
            <div id="carouselExampleIndicators2" class="carousel slide soe-profile" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-students/bidhata-pandey-batch2018-topper.jpg" alt="bidhata-pandey-batch2018-topper">
                                <p class="message">I'm so thankful that I chose SOE. I cherish the moments spent under the guidance of eminent faculty members and my dear friends. I'd recommend the institute every time. Thank you for helping me shape my career.</p>
                                <div class="title-position">
                                    <span class="profile-name">Bidhata Pandey</span>
                                    <br>
                                    <span class="position">Batch 2018 Topper, Computer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-students/bibek-shrestha-batch2018-computer.jpg" alt="bibek-shrestha-batch2018-computer">
                                <p class="message">You know, I think this is the first time I feel like I am at home – within myself, within the place I live.</p>
                                <div class="title-position">
                                    <span class="profile-name">Bibek Shrestha</span>
                                    <br>
                                    <span class="position">Batch 2018, Computer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-students/prajwal-adhikari-batch2018-software.jpg" alt="prajwal-adhikari-batch2018-software">
                                <p class="message">Great experience from SOE. You get a lot of opportunities. Work hard to get it. Be prepared for everything. Maintain your attendance.</p>
                                <div class="title-position">
                                    <span class="profile-name">Prajwal Adhikari</span>
                                    <br>
                                    <span class="position">Batch 2018, Software</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-students/shristi-joshi-batch2018-topper.jpg" alt="shristi-joshi-batch2018">
                                <p class="message">मैले SOE मा बिताएको समयले मेरो जीवनलाई सफल बनाउन धेरै कुरा सिकाएको छ। मैले आफ्नो सीपहरू सुधार गर्ने मौका पाएँ जुन मेरो करियरको महत्त्वपूर्ण भाग थियो। धन्यवाद, SOE मेरो जीवनको एक हिस्सा भएकोमा।</p>
                                <div class="title-position">
                                    <span class="profile-name">Shristi Joshi</span>
                                    <br>
                                    <span class="position">Batch 2018, Computer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item home-profile-card">
                        <div class="profile">
                            <div class="inner-profile">
                                <img src="./assets/images/testimonial-students/akash-shah-batch2018-electrical.jpg" alt="kash-shah-batch2018">
                                <p class="message">SOE is excellent - best faculty, awesome studies and many opportunities.</p>
                                <div class="title-position">
                                    <span class="profile-name">Akash Shah</span>
                                    <br>
                                    <span class="position">Batch 2018, Electrical</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
    <script src="./javascript/spotlight.bundle.js" differ></script>
    <script src="./javascript/index.js"></script>
</body>

</html>