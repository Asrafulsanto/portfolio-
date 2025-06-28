<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashraful Islam Santo - Contact</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .hero-bg {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
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
                <a href="index.php" class="nav-link text-blue-700 font-medium">Home</a>
                <a href="project.php" class="nav-link text-blue-700 font-medium">Project</a>
                <a href="contact.php" class="nav-link text-blue-700 font-medium">Contact</a>
                <a href="registration.php" class="nav-link text-blue-700 font-medium">Hire Me</a>
            </div>
        </div>
    </nav>

    <!-- Contact Section -->
    <section class="hero-bg py-20">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-6">
            <!-- Text Content -->
            <div class="md:w-1/2 text-white space-y-6">
                <h2 class="text-xl font-light">
                    Contact Me
                </h2>
                <h1 class="text-5xl font-bold leading-tight">
                    Get in Touch
                </h1>
                <p class="text-gray-200">
                    I’d love to hear from you! Whether you’re interested in collaborating on a project, seeking design mentorship, or just want to say hi, feel free to reach out. I’m especially excited to connect with folks in education, activism, or entertainment.
                </p>
                <p class="text-gray-200">
                    Email: asraful865@gmail.com<br>
                    Phone: 01813886469<br>
                    Location: Dhaka, Bangladesh
                </p>
                <a href="mailto:asraful865@gmail.com" class="cta-button inline-block bg-blue-600 text-white px-6 py-3 rounded-full font-medium">
                    Send a Message
                </a>
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
</body>
</html>