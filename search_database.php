<?php
include "./conn.php";

$data = $_POST['data'];

$sql = "SELECT * FROM `user_details` WHERE first_name LIKE '{$data}%';";
$result = mysqli_query($con, $sql) or die("Query Failed");
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
            <div class='search-data-container'>
                <img src='./profile pic/{$row['pic']}'>
                <div>
                    <p>{$row['first_name']} {$row['last_name']}</p>
                    <span>@{$row['user_name']}</span>
                </div>
            </div>
        ";
    }
}else{
    echo "<div class='search-data-container'>
            NO Result Found
        </div>";
}




?>