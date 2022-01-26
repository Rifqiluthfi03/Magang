<?php
// include database connection file
include_once("koneksi.php");
// Get id from URL to delete that user
$project_id = $_GET['id'];
// Delete user row from table based on given id
$result = mysqli_query($con, "DELETE FROM project WHERE project_id='$project_id'");
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:lihatdatasiswa.php");
?>