<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Argie Garcia - IT Student Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Argie Amedo Garcia</h1>
        <h3>BINTECH - Computer & Information Technology</h3>
    </header>
    
 <!-- Navigation -->
   <?php include('includes/nav.php'); ?>
    <section id="home">
        

    <div class="profile-photo">
        <img src="assets/image/Sevvy.jpg" alt="Argie Garcia - Profile Photo">
    </div>

    <div class="content-box">
        IT Student • Rap Artist • Lifelong Learner
    </div>
<hr>
   
        <h2>Profile Summary</h2>
        <p>
            A motivated first-year IT student passionate about building digital solutions and exploring new technologies. Outside of studies, I express creativity as an independent rap artist, which helps me develop strong communication and storytelling skills.
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