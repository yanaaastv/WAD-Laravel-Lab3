<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #4b0082, #6f42c1, #a855f7);
        }

        .navbar {
            background-color: #4b0082;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            color: #d8b4fe !important;
        }

        .card {
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .text-purple {
            color: #6f42c1;
        }

        .btn-purple {
            background-color: #6f42c1;
            color: white;
            border: none;
        }

        .btn-purple:hover {
            background-color: #5a32a3;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Yana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/port">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bout">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hob">Hobbies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <h1 class="text-center text-white mb-5">My Portfolio</h1>

        <div class="row g-4 align-items-stretch">

            <div class="col-md-4 d-flex">
                <div class="card shadow-lg p-4 w-100">
                    <h4 class="text-purple">Project 1</h4>
                    <p>
                        The Medical Assistance is a web-based application designed to provide non-organization free medical services to individuals in need. It allows users to fill out and submit medical information, choose the type of medical service (e.g., Diagnostic, X-ray, Optical, Dental, etc.), and receive quick and organized assistance from volunteers or local medical units.
                    </p>
                    <div class="mt-auto">
                        <a href="https://github.com/yanaaastv/wad-rwd-midterm-proj.git" class="btn btn-purple btn-sm">View Project</a>
                    </div>
                </div>
            </div>

    
            <div class="col-md-4 d-flex">
                <div class="card shadow-lg p-4 w-100">
                    <h4 class="text-purple">Project 2</h4>
                    <p>
                       A terminal-based Bible application that allows users to browse books, chapters, and verses using simple command-line inputs. This project demonstrates my understanding of CLI design, structured data handling, and backend logic development.
                    </p>
                    <div class="mt-auto">
                        <a href="https://github.com/yanaaastv/DSA-proj-copy.git" class="btn btn-purple btn-sm">View Project</a>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="col-md-4 d-flex">
                <div class="card shadow-lg p-4 w-100">
                    <h4 class="text-purple">Project 3</h4>
                    <p>
                        UPCOMING PROJECT: A web-based application that allows users to create and manage their own blogs. Users can write posts, categorize them, and share them with others. This project will showcase my skills in full-stack web development, including frontend design and backend logic.
                    </p>
                    <div class="mt-auto">
                        <a href="https://www.facebook.com/" class="btn btn-purple btn-sm">View Project</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
