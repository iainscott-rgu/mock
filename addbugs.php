<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Add Bug Page</title>
    <link rel="stylesheet" type="text/css" href="assets/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="assets/CSS/unsemantic-grid-responsive-tablet.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="grid-container">
    <section class="grid-20"></section>
    <img src="assets/img/logo.png" alt="This is the logo" id="logo">
    <section class="grid-80">
        <h2><strong>BugTracker</strong>
            <br>Keeping track of all the pesky little bugs</h2>
    </section>
</header>

<main class="grid-container">

    <aside class="grid-33">
        <nav>
            <ul>
                <li><a href="showbugs.php">All Bugs</a></li>
                <li><a href="bugs.php">Android Bugs</a></li>
                <li><a href="bugs.php">iOS Bugs</a></li>
                <li><a href="bugs.php">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
    </aside>

    <section class="grid-66">

        <form>
            <table>
                <tr><td>
                        <label for="name">Bug Name:</label>
                    </td>
                    <td>
                        <input type="text" name="name" value="" size="44" required>
                    </td>
                </tr>
                <tr><td><label for="summary">Bug Summary:</label></td><td>
                        <textarea name="summary" cols="45" rows="5" required></textarea></td></tr>
                <tr><td>
                        <label for="category">Bug Category:</label></td><td>
                        <select>
                            <option value="Android">Android</option>
                            <option value="iOS">iOS</option>
                            <option value="Windows">Windows</option>

                        </select>
                    </td></tr>
                <tr><td colspan="2"><p><input type="submit" id="submit" value="Submit"></p></td></tr>
            </table>
        </form>




    </section>

</main>

<?php
include("connect.php");
$name = $_POST["name"];
$summary = $_POST["summary"];
$category = $_POST["category"];
$sql = "INSERT INTO bugs (name, summary, category) VALUES ($name','$summary','$category')";
if(mysqli_query($db, $sql)) {
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
header("location:index.php");
?>

<footer>
    <p>Designed by Iain Scott, 2016.</p>

</footer>

</body>
</html>