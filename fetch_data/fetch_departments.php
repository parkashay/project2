<!-- fetch data from staffs databse -->
<?php
function getcoordinators($title)
{
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT name,title,photo,description,research_paper FROM staffs";

    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
            $titlefromDb = strtolower($post['title']);
            $titlefromQry = strtolower($title);
            if (strpos($titlefromDb, $titlefromQry) !== false) {
                $researchpaper = "";
                if (!empty($post['research_paper'])) {
                    $researchpaper = '<br><br><p>Research paper:<a href="./school_of_engineering_staffs/images/' . $post['research_paper'] . '" download="' . $post['research_paper'] . '">' . $post['research_paper'] . '</a></p>';
                }
                echo '
                    <div class="staff-profile">
                        <div class="profile-description">
                            <p class="profile-description-text">' . $post['description'] . '  ' . $researchpaper . '</p>
                        </div>
                        <div class="profile-image-name-title">
                            <img src="./school_of_engineering_staffs/images/' . $post['photo'] . '" alt="' . $post['name'] . '">
                            <div class="title-name">
                                <p class="profile-name-124X58rr">' . $post['name'] . '</p>
                                <p class="title-124X58rr">' . $post['title'] . '</p>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }
    mysqli_close($con);
}
function getstaff($key)
{
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT id,name,title,photo,description,research_paper FROM staffs";

    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {

            $researchpaper = "";
            if($post['id']==$key){
                if (!empty($post['research_paper'])) {
                    $researchpaper = '<br><br><p>Research paper:<a href="./school_of_engineering_staffs/images/' . $post['research_paper'] . '" download="' . $post['research_paper'] . '">' . $post['research_paper'] . '</a></p>';
                }
                echo '
                    <div class="staff-profile">
                        <div class="profile-description">
                            <p class="profile-description-text">' . $post['description'] . '  ' . $researchpaper . '</p>
                        </div>
                        <div class="profile-image-name-title">
                            <img src="./school_of_engineering_staffs/images/' . $post['photo'] . '" alt="' . $post['name'] . '">
                            <div class="title-name">
                                <p class="profile-name-124X58rr">' . $post['name'] . '</p>
                                <p class="title-124X58rr">' . $post['title'] . '</p>
                            </div>
                        </div>
                    </div>
                ';
            }
        }
    }
    mysqli_close($con);
}

function getnotes($sqlquery)
{
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = $sqlquery;
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {

            echo ' 
            <div class="box-post titles-without-image">
                    <div class="box-post-title">
                        <a href="notedetails.php?notes='.$post['name'].'&id='.$post['id']. '">' . $post['name'] . '</a>
                    </div>
                    <div class="box-post-date">
                       '.$post['notes_category'].'
                    </div>
            </div>
            ';
        }
    }
    mysqli_close($con);
}

function getrecentnotes($key)
{
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT * FROM notes ORDER BY id DESC LIMIT 10";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No notes.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
            if ($post['id'] != $key) {
                echo '
                   <a href="notedetails.php?title='.$post['name'].'&id='.$post['id']. '">' . $post['name'] . '</a>
                ';
            }
        }
    }
    mysqli_close($con);
}

function getnotescategory($sqlquery)
{
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = $sqlquery;
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!! No posts to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {

            echo ' 
            <div class="box-post titles-without-image">
                    <div class="box-post-title">
                        <a href="notedetails.php?notes=' . $post['name'] . '&id=' . $post['id'] . '">' . $post['name'] . '</a>
                    </div>
                    <div class="box-post-date">
                       ' . $post['notes_category'] . '
                    </div>
            </div>
            ';
        }
    }
    mysqli_close($con);
}

function getrelatednotes($key,$category)
{
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT * FROM notes WHERE category ='$category' ORDER BY id LIMIT 10";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 1) {
            echo "Sorry! No related topics to show.";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
            if ($post['id'] != $key) {
                echo '
                   <a href="notedetails.php?title='.$post['name'].'&id='.$post['id']. '">' . $post['name'] . '</a>
                ';
            }
        }
    }
    mysqli_close($con);
}
function getnotescategoryall(){
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT * FROM notes_category ORDER BY notes_category LIMIT 10";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo "Sorry!";
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
                echo '
                   <li><a href="notes.php?subject='.$post['notes_category'].'&id='.$post['id'].'">'.$post['notes_category'].'</a></li>
                ';
           
        }
    }
    mysqli_close($con);
}
function getcategorywisecount($count){
    require("database/db_connect_departments.php");
    mysqli_set_charset($con, 'utf8');
    $sql = "SELECT COUNT(category) AS num FROM notes WHERE category=$count";
    if ($result = mysqli_query($con, $sql)) {
        // count number of rows in the query table
        $rowcount = mysqli_num_rows($result);
        // if no rows are returned
        if ($rowcount == 0) {
            echo 0;
        }
        // show posts if there is rows available
        foreach ($result as $posts => $post) {
            echo $post['num'];
        }
    }
    mysqli_close($con);
}
?>