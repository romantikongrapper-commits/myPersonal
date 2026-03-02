<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me - Argie Garcia</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Argie Amedo Garcia</h1>
        <h3>BINTECH - Computer & Information Technology</h3>
    </header>

    <!-- Navigation -->
   <?php include('includes/nav.php'); ?>

    <section id="about">
        <h2>Academic Background</h2>
        <p>
            Degree: Bachelor of Industrial Technology (Major in Computer & Information Technology)<br>
            School Year: First Semester, SY 2025-2026
        </p>
        <hr>

        <h2>Work Experience</h2>
        <ul>
            <li>Poultry Nutritionist - Managed feed formulations and flock health monitoring</li>
            <li>Line Cook - Developed time management and teamwork skills in fast-paced settings</li>
            <li>CNC Machinist / Operator - Operated precision equipment and ensured quality control</li>
            <li>Concrete Pump Operator - Coordinated with construction teams for efficient project execution</li>
        </ul>
        <hr>
        
        <h2>Personal Details</h2>
        <p>
            Full Name: ARGIE A. GARCIA<br>
            Stage Name: Rbreezy / RaRa<br>
            Birthday: September 13, 1994<br>
            Hometown: Mati City, Davao Oriental
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