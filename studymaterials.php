<?php
// code to get news using its id
include("./database/conn_departments.php"); //database config
require("./fetch_data/fetch_departments.php");
$numberOfItemsPerPage = 30;
$limit = isset($_POST['limit-records']) ? $_POST['limit-records'] : $numberOfItemsPerPage;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$sqlquery = "SELECT notes.id,notes.name,notes_category.notes_category FROM notes LEFT JOIN notes_category ON notes.category=notes_category.id ORDER BY notes.id DESC LIMIT $start,$limit";
$pageCount = $conn->query("SELECT COUNT(ID) AS id FROM notes");
$postCount = $pageCount->fetch_all(MYSQLI_ASSOC);
$totlaCount = $postCount[0]["id"];
$pages = ceil($totlaCount / $limit);
// count number of rows
$sql = "SELECT * FROM notes";
if ($setResult = mysqli_query($conn, $sql)) {
    $rowCount = mysqli_num_rows($setResult);
}
// prevents from pagination less than one
if ($page != 1) {
    $previous = $page - 1;
} else {
    $previous = 1;
}
// prevents pagination more than limit
if ($pages > $page) {
    $next = $page + 1;
} else {
    $next = $page;
}
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
    <title>eLearning-SOE</title>
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
                <li class="breadcrumb-item active" aria-current="page">eLearning</li>
            </ol>
            <h1 class="section-heading highlight title ">eLearning</h1>
            <div class="box-posts-container">
                <?php getnotes($sqlquery); ?>
            </div>
            <ul class="pagination-btn-container" style="list-style-type: none;">
                <li class="pagination-btn btn-prev">
                    <a <?php if ($page != 1) : ?> class="active-btn" href="studymaterials.php?page=<?= $previous; ?>" <?php endif; ?> class="pagination-link-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </li>
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <li class="pagination-btn btn-start">
                        <a <?php if ($i != $page) : ?> class="active-btn" href="studymaterials.php?page=<?= $i; ?>" <?php endif; ?> class="pagination-link-btn"><?= $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="pagination-btn btn-next">
                    <a <?php if ($pages != $page) : ?> class="active-btn" href="studymaterials.php?page=<?= $next; ?>" <?php endif; ?> class="pagination-link-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                </li>
            </ul>
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