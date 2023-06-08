<?php
require("./fetch_data/fetch_admin.php")
?>
<?php
// code to get news using its id
include("./database/conn_admin.php"); //database config
$key = $_REQUEST['key'];
$title = $_REQUEST['program'];
$query = "SELECT * FROM courses WHERE id=" . $key . "";
$results = mysqli_query($GLOBALS["___mysqli_ston"], $query) or die(((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : true)));
$data = mysqli_fetch_assoc($results);
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
    <title><?php echo $data['faculty_name']; ?>-SOE</title>
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
                <li class="breadcrumb-item" aria-current="page"><a href="./undergraduate.php">Undergraduate</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $data['faculty_name'] ?></li>
            </ol>

            <div class="tiles-container content-with-sidebar">
                <div class="post-descriptive">
                    <p class="title program-title"><?php echo $data['faculty_name']; ?></p>
                    <div class="post-text-image">
                        <div class="post-thumb-img spotlight" data-src="./school_of_engineering_admin/images/<?php echo $data['faculty_photo'] ?>">
                            <img src="./school_of_engineering_admin/images/<?php echo $data['faculty_photo'] ?>" alt="<?php echo $data['faculty_name'] ?>">
                        </div>

                        <div class="content-text program-content">
                            <?php echo $data['faculty_description'] ?>
                            <?php
                            if ($data['syllabus']) {
                                echo '<br><br>' . $data['faculty_name'] . ' syllabus: <a href="./school_of_engineering_admin/images/' . $data['file_name'] . '" download>' . $data['file_name'] . '</a>';
                            }
                            ?>
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
                                <a href="messagefromdirector.php">Message from Director</a>
                                <a href="message.php?from=<?php echo $title;?>&key=<?php echo $key; ?>">Message from Coordinator</a>
                                <?php getcourselink($key); ?>
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