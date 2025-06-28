<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashraful Islam Santo - Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
        }
        .hero-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        .content {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            max-width: 1200px;
            width: 100%;
            color: #FFFFFF;
        }
        .text-content {
            flex: 1;
            padding-right: 40px;
        }
        .image-content {
            flex: 1;
            display: flex;
            justify-content: center;
        }
        .profile-image {
            width: 300px;
            height: 300px;
            border-radius: 50%; /* Makes the image round */
            object-fit: cover; /* Ensures the image fits within the circle */
            border: 5px solid #FFFFFF; /* Optional white border for contrast */
        }
        h2 {
            font-size: 1.2rem;
            font-weight: 300;
            margin-bottom: 10px;
        }
        h1 {
            font-size: 3rem;
            font-weight: 600;
            margin-bottom: 20px;
        }
        p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 20px;
            color: #D1D5DB;
        }
        .cta-button {
            display: inline-block;
            background-color: #2563eb;
            color: #FFFFFF;
            padding: 10px 20px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: 500;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }
        .cta-button:hover {
            transform: scale(1.05);
            background-color: #1d4ed8;
        }
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: #FFFFFF;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }
        nav .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .nav-link {
            color: #1e3a8a;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s ease;
        }
        .nav-link:hover {
            color: #93c5fd;
        }
        footer {
            background-color: #1e3a8a;
            color: #FFFFFF;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav>
        <div class="container mx-auto">
            <div class="text-2xl font-semibold text-blue-900">
                Ashraful Islam Santo
            </div>
            <div class="space-x-6">
                <a href="index.php" class="nav-link text-blue-700 font-medium">Home</a>
                <a href="project.php" class="nav-link text-blue-700 font-medium">Project</a>
                <a href="contact.php" class="nav-link text-blue-700 font-medium">Contact</a>
                <a href="registration.php" class="nav-link text-blue-700 font-medium">Hire Me</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-bg">
        <div class="content">
            <div class="text-content">
                <h2>Hi, I'm Ashraful Islam Santo</h2>
                <h1>Your Friendly Frontend Developer</h1>
                <p>
                    I'm a UX architect and JavaScript engineer, passionate about crafting immersive web experiences. From painting the internet canvas with code to embracing minimalism, I turn ideas into reality. When I'm not coding, I enjoy reading articles and swaying to Pop Music & Jazz.
                </p>
                <a href="project.php" class="cta-button">Project</a>
            </div>
            <div class="image-content">
                <img src="myphoto.jpg" alt="Ashraful Islam Santo" class="profile-image">
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container mx-auto">
            <p>
                © <?php
                date_default_timezone_set("Asia/Dacca");
                echo (date("F j, Y h:i:s a"));
                ?> Ashraful Islam Santo. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>