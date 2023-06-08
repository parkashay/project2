<?php
// code to get news using its id
include("./database/conn_admin.php"); //database config
$numberOfItemsPerPage = 30;
$limit = isset($_POST['limit-records']) ? $_POST['limit-records'] : $numberOfItemsPerPage;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;
$result = $conn->query("SELECT year_calendar,year,event_name FROM soe_gallery ORDER BY id DESC LIMIT $start,$limit");
$calendars = $result->fetch_all(MYSQLI_ASSOC);
$pageCount = $conn->query("SELECT COUNT(ID) AS id FROM soe_gallery");
$postCount = $pageCount->fetch_all(MYSQLI_ASSOC);
$totlaCount = $postCount[0]["id"];
$pages = ceil($totlaCount / $limit);
// count number of rows
$sql = "SELECT * FROM soe_gallery";
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
    <title>Academic calendar-SOE</title>
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
                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
            </ol>
            <h1 class="section-heading highlight title ">SOE Academic Calendar</h1>
            <div class="box-posts-container">
                <?php foreach ($calendars as $calendar) : ?>
                    <?php if (!empty($calendar['year_calendar'])) : ?>
                        <div class="box-post" style="padding: 20px;">
                            <div class="box-post-title">
                                <a href="./school_of_engineering_admin/images/<?= $calendar['year_calendar']; ?>" download="<?= $calendar['event_name']; ?>"><?= $calendar['event_name']; ?></a>
                            </div>
                            <div class="box-post-date">
                                Uploaded In: <?= $calendar['year']; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <ul class="pagination-btn-container" style="list-style: none;">
                <li class="pagination-btn btn-prev">
                    <a <?php if ($page != 1) : ?> class="active-btn" href="academic-calendar.php?page=<?= $previous; ?>" <?php endif; ?> class="pagination-link-btn"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
                </li>
                <?php for ($i = 1; $i <= $pages; $i++) : ?>
                    <li class="pagination-btn btn-start">
                        <a <?php if ($i != $page) : ?> class="active-btn" href="academic-calendar.php?page=<?= $i; ?>" <?php endif; ?> class="pagination-link-btn"><?= $i; ?></a>
                    </li>
                <?php endfor; ?>
                <li class="pagination-btn btn-next">
                    <a <?php if ($pages != $page) : ?> class="active-btn" href="academic-calendar.php?page=<?= $next; ?>" <?php endif; ?> class="pagination-link-btn"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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