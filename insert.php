<?php
include("connect.php");
$name = $_POST["name"];
$summary = $_POST["summary"];
$category = $_POST["category"];
$sql = "INSERT INTO bugs (name, summary, category) VALUES ('$name','$summary','$category')";
if(mysqli_query($db, $sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
header("location:index.php");
?>