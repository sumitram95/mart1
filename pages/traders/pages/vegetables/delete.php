<?php

include "../../../connection.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Prepare the query to delete the record by ID
    $query = "DELETE FROM `vegetables` WHERE `id` = $id";
    if (mysqli_query($con, $query)) {
        $_SESSION['message'] = "Deleted successfully!";
        header("Location: ./index.php");
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }
} else {
    echo "Invalid ID.";
}