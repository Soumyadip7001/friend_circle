<?php
include "./conn.php";
session_start();
session_destroy();

echo "<script>
            window.location='{$host}/Loginpage.php';
        </script>";

?>