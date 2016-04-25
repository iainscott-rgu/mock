<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Landing Page</title>
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
        <p align="justify" id="paragraph"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus quis placerat diam, at porttitor nulla.
            Phasellus tristique sed nisl sed rhoncus.
            Proin vehicula, tortor vel consectetur ultricies, nunc lacus ullamcorper turpis, vitae tincidunt lorem nisl vitae augue.
            Nullam sagittis turpis ut convallis convallis. Ut pretium tempus mi sed faucibus. Nullam luctus et felis at venenatis.
            Proin eget nunc in enim faucibus euismod. Suspendisse pharetra mattis erat sed gravida. Nam ut metus eget purus maximus efficitur ac nec ex.
        </p>
    </section>

</main>
<footer>
    <p>Designed by Iain Scott, 2016.</p>

</footer>

</body>
</html>