<?php
// code to get news using its id
define("ROW_PER_PAGE", 6);
require_once("database/db_admin.php"); //database config
?>
<?php
$search_keyword = '';
if (!empty($_POST['search']['keyword'])) {
    $search_keyword = $_POST['search']['keyword'];
}
$sql = 'SELECT * FROM soe_posts WHERE title LIKE :keyword OR content LIKE :keyword  OR tags LIKE :keyword ORDER BY id DESC ';

/* Pagination Code starts */
$per_page_html = '';
$page = 1;
$start = 0;
if (!empty($_POST["page"])) {
    $page = $_POST["page"];
    $start = ($page - 1) * ROW_PER_PAGE;
}
$limit = " limit " . $start . "," . ROW_PER_PAGE;
$pagination_statement = $pdo_conn->prepare($sql);
$pagination_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
$pagination_statement->execute();

$row_count = $pagination_statement->rowCount();
if (!empty($row_count)) {
    $per_page_html .= "<div style='text-align:center;margin:20px 0px;'>";
    $page_count = ceil($row_count / ROW_PER_PAGE);
    if ($page_count > 1) {
        for ($i = 1; $i <= $page_count; $i++) {
            if ($i == $page) {
                $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page current btn-warning" />';
            } else {
                $per_page_html .= '<input type="submit" name="page" value="' . $i . '" class="btn-page btn-danger" />';
            }
        }
    }
    $per_page_html .= "</div>";
}

$query = $sql . $limit;
$pdo_statement = $pdo_conn->prepare($query);
$pdo_statement->bindValue(':keyword', '%' . $search_keyword . '%', PDO::PARAM_STR);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0d46d5">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- styles -->
    <style>
        @import url("./css/reset.css");
        @import url("./css/app.css");
    </style>
    <title>SOE-Search</title>
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
                <li class="breadcrumb-item active" aria-current="page">Search</li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $search_keyword; ?></li>
            </ol>
            <div class="box-posts-container">
                <?php if (!$result) : ?>
                    <p class="search-error">
                        Sorry, we couldn't find any posts related to <span><?php echo $search_keyword; ?></span>. Please try a different keyword.
                    </p>
                <?php endif; ?>
                <?php foreach ($result as $post) : ?>
                    <?php $postTitle = str_replace(' ', '-', $post['title']); ?>
                    <div class="box-post">
                        <a href="./post.php?<?= $postTitle ?>&key=<?= $post['id']; ?>"">
                            <div class=" post-img">
                            <img src="school_of_engineering_admin/images/<?= $post['photo'] ?>" alt="<?= $post['title']; ?>">
                    </div>
                    </a>
                    <div class="box-post-title">
                        <a href="./post.php?<?= $postTitle ?>&key=<?= $post['id']; ?>"><?= $post['title']; ?></a>
                    </div>
                    <div class="box-post-date">
                        <?= $post['date']; ?>
                    </div>
            </div>

        <?php endforeach; ?>
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