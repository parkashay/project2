<?php
$GLOBALS["___mysqli_ston"] = mysqli_connect("localhost", "root", "", "school_of_engineering_pu_admin");//host,username,password,database name
?>
<!-- for pagination -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_of_engineering_pu_admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>