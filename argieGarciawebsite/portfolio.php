<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Argie Garcia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Argie Amedo Garcia</h1>
        <h3>BINTECH - Computer & Information Technology</h3>
    </header>


<!-- Navigation -->
   <?php include('includes/nav.php'); ?>


    <section id="portfolio">
        <h2>Bootstrap Exercises</h2>
        <ul>
            <li><a href="bootstrap_exercices/activity1.html" target="_blank">Activity 1</a></li>
            <li><a href="bootstrap_exercices/activity2.html" target="_blank">Activity 2</a></li>
            <li><a href="bootstrap_exercices/activity3.html" target="_blank">Activity 3</a></li>
            <li><a href="bootstrap_exercices/activity4.html" target="_blank">Activity 4</a></li>
            <li><a href="bootstrap_exercices/activity5.html" target="_blank">Activity 5</a></li>
        </ul>
<hr>
        <h2>JavaScript Exercises</h2>
        <ul>
            <li><a href="java_exercices/activity1.html" target="_blank">Activity 1</a></li>
            <li><a href="java_exercices/activity2.html" target="_blank">Activity 2</a></li>
            <li><a href="java_exercices/activity3.html" target="_blank">Activity 3</a></li>
            <li><a href="java_exercices/activity4.html" target="_blank">Activity 4</a></li>
            <li><a href="java_exercices/activity5.html" target="_blank">Activity 5</a></li>
            <li><a href="java_exercices/activity6.html" target="_blank">Activity 6</a></li>
            <li><a href="java_exercices/activity7.html" target="_blank">Activity 7</a></li>
            <li><a href="java_exercices/activity8.html" target="_blank">Activity 8</a></li>
        </ul>
    </section>

    <?php include('includes/footer.php') ?>

    <button id="back-to-top" onclick="scrollToTop()">↑</button>
    <script>
        // Show/hide back to top button
        window.onscroll = function() {
            const btn = document.getElementById('back-to-top');
            btn.style.display = window.scrollY > 200 ? "block" : "none";
        };
        // Smooth scroll to top
        function scrollToTop() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    </script>
</body>
</html>