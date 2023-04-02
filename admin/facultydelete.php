<?php
session_start();

include "../config/database.php";

$id = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['butdel'])) {
        $id = mysqli_real_escape_string($link, $_POST['butdel']);
    }


    if ($id > 0) {

        // Check record exists
        $checkRecord = mysqli_query($link, "SELECT * FROM proctoring_faculty WHERE id=" . $id);
        $totalrows = mysqli_num_rows($checkRecord);

        if ($totalrows > 0) {

            $query = "DELETE FROM proctoring_faculty WHERE id=" . $id;

            $result = mysqli_query($link, $query);

            if ($result)
           {
                $_SESSION["delete2"] = 'success';
                echo "<script> location.replace('dashboard.php') </script>";
            }
             else
            {
                $_SESSION["delete2"] = 'failed';
                echo "<script> location.replace('dashboard.php') </script>";
            }
        }
    }
}
