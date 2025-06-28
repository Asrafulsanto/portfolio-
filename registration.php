<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashraful Islam Santo - Hire Me</title>
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
        form input[type="text"],
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        form textarea {
            resize: vertical;
        }
        form input[type="radio"] {
            margin-right: 5px;
        }
        form input[type="radio"] + label {
            margin-right: 15px;
        }
        form label {
            font-size: 14px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
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

    <!-- Hire Me Section -->
    <section class="hero-bg py-20">
        <div class="container mx-auto px-6">
            <div class="text-center text-white space-y-6 mb-10">
                <h2 class="text-xl font-light">
                    Hire Me
                </h2>
                <h1 class="text-5xl font-bold leading-tight">
                    Let’s Work Together
                </h1>
                <p class="text-gray-200 max-w-2xl mx-auto">
                    I’m currently accepting clients and full-time opportunities. Fill out the form below to let me know how I can help you with your project!
                </p>
            </div>
            <form action="dbconnection.php" method="POST" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg space-y-4">
                <div>
                    <label for="name" class="text-gray-800">Name</label>
                    <input type="text" name="name" id="name" class="w-full">
                </div>
                <div>
                    <label for="email" class="text-gray-800">Email</label>
                    <input type="text" name="email" id="email" class="w-full">
                </div>
                <div>
                    <label for="website" class="text-gray-800">Website</label>
                    <input type="text" name="website" id="website" class="w-full">
                </div>
                <div>
                    <label for="comment" class="text-gray-800">How Can I Help You?</label>
                    <textarea name="comment" id="comment" rows="5" class="w-full"></textarea>
                </div>
                <div>
                    <label class="text-gray-800">Gender</label>
                    <div class="flex space-x-4">
                        <div>
                            <input type="radio" name="gender" value="female" id="female">
                            <label for="female" class="text-gray-800">Female</label>
                        </div>
                        <div>
                            <input type="radio" name="gender" value="male" id="male">
                            <label for="male" class="text-gray-800">Male</label>
                        </div>
                        <div>
                            <input type="radio" name="gender" value="others" id="others">
                            <label for="others" class="text-gray-800">Others</label>
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" name="submit" value="Submit" class="cta-button w-full bg-blue-600 text-white py-3 rounded-full font-medium">
                </div>
            </form>
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