<!-- fetch data from admin databse -->
<?php
// get posts

// get recent posts
function getposts($table)
{
    require("database/db_connect_admin.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT soe_posts.id,soe_posts.title,soe_posts.photo, category.category_name FROM soe_posts left JOIN category ON soe_posts.category=category.id ORDER BY soe_posts.id DESC LIMIT 7";
    $sql_large = "SELECT * FROM $table ORDER BY id ";
    // for the recent large post
    if ($result = mysqli_query($con, $sql_large)) {
        global $largest_id;
        foreach ($result as $posts => $post) {
            $largest_id = (int)$post['id'];
        }
    }
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
            $postTitle = str_replace(' ', '-', $post['title']);
            if ($post['id'] == $largest_id) {
                echo '
                     <div class="post-thumbnail-container large-post">
                    <a href="./post.php?' . $postTitle . '&key=' .  $post['id'] . '"> <div class="thumb-photo"><img class="reponsive-img" src="./school_of_engineering_admin/images/' . $post['photo'] . '" alt="' . $post['title'] . '"></div></a>
                <div class="post-text">
                    <div class="category-highlight highlight">' . $post['category_name'] . '</div>
                    <div class="home-page-post-title"><a href="./post.php?' . $postTitle . '&key=' .  $post['id'] . '">' . $post['title'] . '</a></div>
                </div>
            </div>
                ';
            } else {
                echo '
                <div class="post-thumbnail-container small-screen-posts">
               <a href="./post.php?' . $postTitle . '&key=' .  $post['id'] . '"> <div class="thumb-photo"><img class="reponsive-img" src="./school_of_engineering_admin/images/' . $post['photo'] . '" alt="' . $post['title'] . '"></div></a>
                <div class="post-text">
                <div class="category-highlight highlight">' . $post['category_name'] . '</div>
                <div class="home-page-post-title"><a href="./post.php?' . $postTitle . '&key=' .  $post['id'] . '">' . $post['title'] . '</a></div>
                </div>
            </div>';
            }
        }
    }
    mysqli_close($con);
}

// get tags
function gettags($table)
{
    require("database/db_connect_admin.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT * FROM $table ";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount == mysqli_num_rows($result);
        //if no rows returned show no tags alert
        if ($rowcount == 0) {
            echo 'No tags found!!';
        }
        //    if there is any rows show all the rows
        foreach ($result as $tags => $tag) {
            echo '' . $tag['tags'] . '';
        }
    }
    mysqli_close($con);
}

// get more posts
function getrecentposts($table, $postid)
{
    require("./database/db_connect_admin.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT soe_posts.id,soe_posts.title,soe_posts.photo, soe_posts.date FROM soe_posts ORDER BY soe_posts.id DESC LIMIT 11";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
            $postTitle = str_replace(' ', '-', $post['title']);
            if ($postid != $post['id']) {
                echo '<div class="latest-posts-post">
                        <div class="recent-posts-title">
                            <a href="./post.php?' . $postTitle . '&key=' .  $post['id'] . '">' . $post['title'] . '</a>
                            <div class="recent-posts-date">' . $post['date'] . '</div>
                        </div>
                        <a href="./post.php?title=' . $postTitle . '&key=' .  $post['id'] . '"><div class="recent-posts-img">
                            <img src="./school_of_engineering_admin/images/' . $post['photo'] . '" alt="' . $post['title'] . '">
                        </div></a>
                    </div><hr>';
            }
        }
    }
    mysqli_close($con);
}

// count categories

function countcategories()
{
    require("./database/db_connect_admin.php");
    $sql = "SELECT * FROM category";
    $sqlnumber = "SELECT * FROM soe_posts";
    if ($res = mysqli_query($con, $sqlnumber)) {
        $numberOfRows = mysqli_num_rows($res);
    }

    if ($result = mysqli_query($con, $sql)) {
        //count number of rows in query result
        $rowcount = mysqli_num_rows($result);
        //if no rows returned show no news alert
        if ($rowcount == 0) {
            # code...
            echo 'No Categories!!';
        }
        //if there are rows available display all the results
        $numberOfCategories = 0;
        foreach ($result as $categoriescount => $categorydata) {
            #count how many times each category appears in blogs
            $numberOfCategories++;
            $categoryid = $categorydata['id'];
            $sql = "SELECT * FROM soe_posts WHERE category='$categoryid'";
            if ($result = mysqli_query($con, $sql)) {
                # code...
                $rowcountcategory = mysqli_num_rows($result);
            }
            # code...show data
            echo '<tr>
                        <th scope="row">' . $numberOfCategories . '</th>
                        <td><a href="category.php?category=' . $categorydata['category_name'] . '&key=' . $categorydata['id'] . '"> ' . $categorydata['category_name'] . '</a></td>
                        <td>' . $rowcountcategory . '</td>
                 </tr>';
        }
        if ($numberOfRows != 0) {
            echo '<tr> <th scope="row">*</th>
                                <td><a href="allpost.php">All</a></td>
                                <td>' . $numberOfRows . '</td>
                                </tr>';
        }
    }

    mysqli_close($con);
}

// programs short
function undergraduationShort()
{
    require("./database/db_connect_admin.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT  id,faculty_name,faculty_photo,faculty_description FROM courses ORDER BY id";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available

        foreach ($result as $post) {
            $shortDesc = [];
            switch ($post['id']) {
                case 1:
                    $shortDesc['id'] = "The Department of Computer Engineering comes under the School of Engineering, Pokhara University.";
                    break;
                case 2:
                    $shortDesc['id'] = "The Department of Civil Engineering comes under the School of Engineering, Pokhara University. It was established in 2008.";
                    break;
                case 3:
                    $shortDesc['id'] = "The Department of Electrical Engineering comes under the School of Engineering, Pokhara University. It was established in 2008. ";
                    break;

                case 4:
                    $shortDesc['id'] = "The Department of Software Engineering comes under the School of Engineering, Pokhara University. It was established in 2018.";
                    break;
                case 5:
                    $shortDesc['id'] = "The Department of Civil Engineering comes under the School of Engineering, Pokhara University. It was established in 2008.";
                    break;
                default:
                    $shortDesc['id'] = "It is a four year Bachelor's Programs of Engineering based on credit-semester system.";
            }
            echo '
                <div class="academic-cards">
                            <img src="./school_of_engineering_admin/images/' . $post['faculty_photo'] . '" alt="' . $post['faculty_name'] . '">
                            <p class="home-academic-title">' . $post['faculty_name'] . '</p>
                            <p>' . $shortDesc['id'] . '</p>
                            <a href="./program.php?program=' . $post['faculty_name'] . '&key=' . $post['id'] . '">Know More <i class="fa-solid fa-angle-right go-right"></i></a>
                </div>
           ';
        }
    }
    mysqli_close($con);
}

function getcourselink($key)
{
    require("./database/db_connect_admin.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT  id,faculty_name FROM courses ORDER BY id";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available

        foreach ($result as $post) {
            if ($key != $post['id']) {
                echo '
                 <a href="./program.php?program=' . $post['faculty_name'] . '&key=' . $post['id'] . '">' . $post['faculty_name'] . '</a>
           ';
            }
        }
    }
    mysqli_close($con);
}

?>