<?php
require("./fetch_data/fetch_departments.php")
?>
<?php
// code to get news using its id
include("./database/conn_departments.php"); //database config
$key = $_REQUEST['id'];
$query = "SELECT notes.id,notes.category,notes.description,notes.file_one,notes.file_two,notes.photo,notes.name,notes_category.notes_category,staffs.name AS tutor_name FROM notes  LEFT JOIN notes_category  ON notes.category=notes_category.id LEFT JOIN staffs ON notes.uploaded_by=staffs.id WHERE notes.id=" . $key . "";
$results = mysqli_query($GLOBALS["__mysqli_ston"], $query) or die(((is_object($GLOBALS["__mysqli_ston"])) ? mysqli_error($GLOBALS["__mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : true)));
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
    <title><?php echo $data['name']; ?>-SOE</title>
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
                <li class="breadcrumb-item" aria-current="page"><a href="./studymaterials.php">Study materials</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $data['name'] ?></li>
            </ol>

            <div class="tiles-container">
                <div class="post-descriptive">
                    <h1 class="post-title"><?php echo $data['name']; ?></h1>
                    <div>
                        <hr>
                        <div class="date-share">
                            <div class="post-date">Material By <?php echo $data['tutor_name'] ?></div>
                            <div class="post-date"><a class="link-156dhcj" href="notes.php?subject=<?php echo $data['notes_category'] ?>&id=<?php echo $data['category'] ?>"><?php echo $data['notes_category'] ?></a></div>
                        </div>
                        <hr>
                    </div>
                    <div class="post-text-image">
                        <?php if (!empty($data['photo'])) : ?>
                            <div class="post-thumb-img spotlight" data-src="./school_of_engineering_staffs/images/<?php echo $data['photo'] ?>">
                                <img src="./school_of_engineering_staffs/images/<?php echo $data['photo'] ?>" alt="<?php echo $data['name'] ?>">
                            </div>
                        <?php endif; ?>

                        <div class="content-text">
                            <?php echo $data['description'] ?>
                            <?php
                            if (!empty($data['file_one'])) {
                                echo '<br><br>Downloadable file here: <a href="./school_of_engineering_staffs/images/' . $data['file_one'] . '" download="' . $data['file_one'] . '">' . $data['file_one'] . '</a>';
                            }
                            if (!empty($data['file_two'])) {
                                echo '<br><br>Downloadable file here: <a href="./school_of_engineering_staffs/images/' . $data['file_two'] . '" download="' . $data['file_one'] . '">' . $data['file_two'] . '</a>';
                            }
                            ?>
                        </div>
                    </div>
                    <div class="two-col-category-container">
                        <h1 class="two-col-caategory-title highlight">Notes Catgories</h1>
                        <ol class="two-col-category">
                            <?php getnotescategoryall(); ?>
                        </ol>
                        <div class="button-center">
                            <a class="btn btn-primary btn-sm" href="allnotescategory.php">More</a>
                        </div>
                    </div>

                </div>
                <!-- recent posts -->
                <section class="side-nav">
                    <div class="useful-links">
                       
                        <div class="latest-posts-post">
                            <div class="recent-posts-title link-sticky">
                                <h1 class="subheding-xre48" style="--underline-clr:var(--royal-blue-text-clr);">Related Topics</h1>

                                <?php getrelatednotes($key, $data['category']); ?>
                                <h1 class="subheding-xre48" style="--underline-clr:var(--orange-500)">Recently Uploaded</h1>
                                <?php getrecentnotes($key); ?>
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