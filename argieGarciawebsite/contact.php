<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Argie Garcia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Argie Amedo Garcia</h1>
        <h3>BINTECH - Computer & Information Technology</h3>
    </header>

 <!-- Navigation -->
   <?php include('includes/nav.php'); ?>


    <section id="contact">
        <h2>Get In Touch</h2>
        <p>
            Facebook: <a href="https://www.facebook.com/rara.aicrag" target="_blank">rara.aicrag</a><br>
            Email: <a href="mailto:romantikongrapper@gmail.com">romantikongrapper@gmail.com</a><br>
            Contact Number: 09563465006
        </p>

        
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