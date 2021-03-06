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



<main class="grid-container">

    <aside class="grid-33">
        <nav>
            <ul>
                <li><a href="showbugs.php">All Bugs</a></li>
                <li><a href="showbugs.php?category=Android">Android Bugs</a></li>
                <li><a href="showbugs.php?category=ios">iOS Bugs</a></li>
                <li><a href="showbugs.php?category=windows">Windows Bugs</a></li>
                <li><a href="addbugs.php">Insert Bug</a></li>
            </ul>
        </nav>
    </aside>

    <section class="grid-66">

        <?php
        include("connect.php");
        if(isset($_GET['category'])){
            $bugsCategory = $_GET['category'];
            echo "category: {$bugsCategory} <hr>";
            $sql = "SELECT * FROM bugs WHERE category = '$bugsCategory'";
        }
        else{
            echo "category: all bugs<hr>";
            $sql = "SELECT * FROM bugs";
        }
        $result = $db->query($sql);
        while ($row = $result->fetch_array()) {
            $name = $row['name'];
            $summary = $row['summary'];
            $category = $row['category'];
            echo "
    <form>
        <table><p>
            <tr><td>Name:</td><td><input type='text' class='form2' name='link' size='100' value='{$name}' readonly></td></tr>
            <tr><td>Summary:</td><td><textarea class='form2' cols='101' rows='5' name='summary' readonly>'{$summary}'</textarea></td></tr>
            <tr><td>Category:</td><td><input type='text' class='form2' name='category' size='100' value='{$category}' readonly></td></tr>
        </table></p>
    </form><hr>
    ";
        }
        ?>

    </section>

</main>
<footer>
    <p>Designed by Iain Scott, 2016.</p>

</footer>
</body>
</html>

<!--

            echo " <br>Name: .'{$name}'. ";
            echo " <br>Summary: .'{$summary}'. ";
            echo " <br>Category: .'{$category}'.

-->