<?php
require("./fetch_data/fetch_admin.php")
?>
<?php
// code to get news using its id
include("./database/conn_admin.php"); //database config
$key = $_REQUEST['key'];
$query = "SELECT * FROM soe_posts WHERE id=" . $key . "";
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
    <!-- sharing -->
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=62c69482fbc6330013125c89&product=inline-share-buttons" async="async"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- styles -->
    <style>
        @import url("./css/reset.css");
        @import url("./css/app.css");
    </style>
    <title><?php echo $data['title']; ?>-SOE</title>
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
                <li class="breadcrumb-item" aria-current="page"><a href="./allpost.php">News</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $data['title'] ?></li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive">
                    <h1 class="post-title"><?php echo $data['title']; ?></h1>
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="post-date"><i class="fa-solid fa-calendar"></i><?php echo $data['date']; ?></div>
                            <div class="post-share">
                                <div class="sharethis-inline-share-buttons"></div>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <div class="post-thumb-img spotlight" data-src="./school_of_engineering_admin/images/<?php echo $data['photo'] ?>">
                            <img src="./school_of_engineering_admin/images/<?php echo $data['photo'] ?>" alt="<?php echo $data['title'] ?>">
                        </div>

                        <div class="content-text">
                            <?php echo $data['content'] ?>
                            <?php
                            if ($data['file_name']) {
                                echo '<br><br>Downloadable file here: <a href="./school_of_engineering_admin/images/' . $data['file_name'] . '" download>' . $data['file_name'] . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- recent posts -->
                <section class="latest-posts">
                    <div class="latest-header">
                        <div>
                            <h1>Latest</h1>
                        </div>
                        <div data-toggle="tooltip" data-placement="left" title="More posts"><a href="./allpost.php"><i class="fa-solid fa-square-rss"></i></a></div>
                    </div>
                    <?php
                    getrecentposts("soe-posts", $key);
                    ?>
                    <!-- categories of posts -->
                    <div class="categories-list-container">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Category Name</th>
                                    <th scope="col">Numer of posts</th>
                                </tr>
                            </thead>
                            <tbody class="category-list">
                                <?php countcategories(); ?>
                            </tbody>
                        </table>
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