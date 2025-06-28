<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashraful Islam Santo - Success</title>
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
        .highlight-button {
            background: linear-gradient(90deg, #4CAF50, #2ecc71); /* Gradient from green to teal */
            padding: 12px 24px;
            border: none;
            border-radius: 25px;
            color: #FFFFFF;
            font-size: 1.1rem;
            font-weight: 600;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.4); /* Subtle shadow */
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        .highlight-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255, 255, 255, 0.3); /* Glow effect */
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }
        .highlight-button:hover::after {
            width: 200px;
            height: 200px;
        }
        .highlight-button:hover {
            box-shadow: 0 6px 20px rgba(76, 175, 80, 0.6); /* Enhanced shadow on hover */
            transform: scale(1.1); /* Slightly larger on hover */
        }
        h1 {
            color: #FFFFFF;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        div {
            text-align: center;
        }
    </style>
</head>
<body class="bg-gray-100">
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

    <!-- Success Section -->
    <section class="hero-bg">
        <div class="text-center text-white space-y-6">
            <h1>New record created successfully!</h1>
            <div>
                <button onclick="goToHome()" class="highlight-button">Okay</button>
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
        function goToHome() {
            window.location.href = 'index.php'; // Replace 'index.php' with your home page URL
        }
    </script>
</body>
</html>