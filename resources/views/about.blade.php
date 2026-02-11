<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Me</title>
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
        }

        .text-purple {
            color: #6f42c1;
        }
    </style>
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Yana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/port">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/bout">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/hob">Hobbies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 85vh;">
        <div class="card shadow-lg p-4 col-md-8">
            <h1 class="text-purple">About Me - Yana</h1>
            <p class="mt-3">
                Hello! I am Yana, a college student of La Verdad Christian College and currently taking up 
                Associate in Computer Technology. 
            </p>
            <p>
                I would like improve my coding skills, learn new frameworks, and 
                create responsive and user-friendly designs. My goal is to become 
                a professional in the future.
            </p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
