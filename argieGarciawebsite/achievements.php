<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achievements - Argie Garcia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Argie Amedo Garcia</h1>
        <h3>BINTECH - Computer & Information Technology</h3>
    </header>

    <!-- Navigation -->
   <?php include('includes/nav.php'); ?>

    <section id="achievements">
        <h2>Certifications</h2>
        <ul>
            <li>NC II Passer - Driving (Technical Education and Skills Development Authority)</li>
            <li>NC II Passer - Masonry (Technical Education and Skills Development Authority)</li>
        </ul>
        <hr>
        <h2>Skills</h2>
        <ul>
            <li>Basic Computer Troubleshooting</li>
            <li>HTML & CSS (Web Design Basics)</li>
            <li>Problem-Solving & Critical Thinking</li>
            <li>Creative Writing & Performance</li>
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