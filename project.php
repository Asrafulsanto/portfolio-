<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashraful Islam Santo - About Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            opacity: 1;
            animation: fadeIn 0.5s ease-in forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        .fade-out {
            animation: fadeOut 0.5s ease-out forwards;
        }
        .hero-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
        }
        .nav-link {
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #93c5fd;
        }
        .cta-button {
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .cta-button:hover {
            transform: scale(1.05);
            background-color: #2563eb;
        }
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 40px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .project-card {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .project-card h3 {
            color: #FFFFFF;
            font-size: 1.5rem;
            margin: 10px 0;
        }
        .project-card p {
            color: #D1D5DB;
            font-size: 0.9rem;
            line-height: 1.5;
        }
    </style>
</head>
<body class="bg-gray-100 text-gray-800">
    <!-- Navigation -->
    <nav class="bg-white shadow-md py-4">
        <div class="container mx-auto flex justify-between items-center px-6">
            <div class="text-2xl font-semibold text-blue-900">
                Ashraful Islam Santo
            </div>
            <div class="space-x-6">
                <a href="index.php" class="nav-link text-blue-700 font-medium" onclick="navigate(event, 'index.php')">Home</a>
                <a href="project.php" class="nav-link text-blue-700 font-medium" onclick="navigate(event, 'project.php')">Project</a>
                <a href="contact.php" class="nav-link text-blue-700 font-medium" onclick="navigate(event, 'contact.php')">Contact</a>
                <a href="registration.php" class="nav-link text-blue-700 font-medium" onclick="navigate(event, 'registration.php')">Hire Me</a>
            </div>
        </div>
    </nav>

    <!-- About Me Section -->
    <section class="hero-bg py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <!-- Text Content -->
            <div class="md:w-1/2 text-white space-y-6">
                <h2 class="text-xl font-light">
                   Project Of
                </h2>
                <h1 class="text-5xl font-bold leading-tight">
                    Ashraful Islam Santo
                </h1>
                <a href="contact.php" class="cta-button inline-block bg-blue-600 text-white px-6 py-3 rounded-full font-medium" onclick="navigate(event, 'contact.php')">Contact Me</a>
            </div>
        </div>
    </section>

    <!-- My Projects Section -->
    <section class="bg-gray-900 py-16">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-white text-center mb-10">My Projects</h2>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="p1.png" alt="Project 1">
                    <h3>Project One</h3>
                    <p>A stunning portfolio website designed with modern UX principles and responsive layouts.</p>
                </div>
                <div class="project-card">
                    <img src="https://via.placeholder.com/300x200" alt="Project 2">
                    <h3>Project Two</h3>
                    <p>An interactive e-commerce platform with seamless navigation and dynamic content.</p>
                </div>
                <div class="project-card">
                    <img src="https://via.placeholder.com/300x200" alt="Project 3">
                    <h3>Project Three</h3>
                    <p>A creative illustration project showcasing digital art techniques and storytelling.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-4">
        <div class="container mx-auto text-center">
            <p>
                © <?php
                date_default_timezone_set("Asia/Dacca");
                echo (date("F j, Y h:i:s a"));
                ?> Ashraful Islam Santo. All rights reserved.
            </p>
        </div>
    </footer>

    <script>
        function navigate(event, url) {
            event.preventDefault();
            document.body.classList.add('fade-out');
            setTimeout(() => {
                window.location.href = url;
            }, 500);
        }
    </script>
</body>
</html>