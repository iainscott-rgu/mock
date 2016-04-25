<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Bugs Page</title>
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

<?php
include("connect.php");
if(isset($_GET['category'])){
    $bugsCategory = $_GET['category'];
    echo "category {$bugsCategory}";
    $sql = "SELECT * FROM bugs WHERE category = '$bugsCategory'";
}
else{
    echo "category all bugs";
    $sql = "SELECT * FROM bugs";
}
$result = $db->query($sql);
while ($row = $result->fetch_array()) {
    $name = $row['name'];
    $summary = $row['summary'];
    $category = $row['category'];
    echo " <form class='form2'>
        <table>
            <tr><td><input type='text' name='link' size='100' value='{$link}'></td></tr>
            <tr><td><textarea cols='101' rows='5' name='summary'>'{$summary}'</textarea></td></tr>
            <tr><td><input type='text' name='category' size='100' value='{$category}'></td></tr>
        </table>
    </form>
    <hr size='3'>";
}
?>

<main class="grid-container">

    <aside class="grid-33">
        <nav>
            <ul>
                <li><a href="showbugs.html">All Bugs</a></li>
                <li><a href="bugs.html">Android Bugs</a></li>
                <li><a href="bugs.html">iOS Bugs</a></li>
                <li><a href="bugs.html">Windows Bugs</a></li>
                <li><a href="addbugs.html">Insert Bug</a></li>
            </ul>
        </nav>
    </aside>

    <section class="grid-66">
        <form>
            <table>
                <tr><td><label for="name"></label></td><td>
                        <input type="text" name="name" value="Bug Name: StageFright" size="44">
                    </td></tr>
                <tr><td><label for="category"></label></td>
                    <td><input type="text" name="category" value="Bug Category: Android" size="44"></td></tr>
                <tr><td><label for="summary">:</label></td>
                    <td><textarea name="summary" cols="45" rows="5">Bug Summary: Stagefright is the collective name for a group of software bugs, that affect versions 2.2 and newer of the Android operating system, allowing an attacker to perform arbitrary operations on the victim device through remote code execution and privilege escalation.</textarea></td></tr>
            </table>
        </form>
        <hr size="3">
        <form>
            <table>
                <tr><td><label for="name"></label></td><td>
                        <input type="text" name="name" value="Bug Name: StageFright" size="44">
                    </td></tr>
                <tr><td><label for="category"></label></td>
                    <td><input type="text" name="category" value="Bug Category: Android" size="44"></td></tr>
                <tr><td><label for="summary">:</label></td>
                    <td><textarea name="summary" cols="45" rows="5">Bug Summary: Stagefright is the collective name for a group of software bugs, that affect versions 2.2 and newer of the Android operating system, allowing an attacker to perform arbitrary operations on the victim device through remote code execution and privilege escalation.</textarea></td></tr>
            </table>
        </form>

    </section>

</main>
<footer>
    <p>Designed by Iain Scott, 2016.</p>

</footer>
</body>
</html>