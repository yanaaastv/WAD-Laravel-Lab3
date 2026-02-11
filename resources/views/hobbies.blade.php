<!DOCTYPE html>  
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Hobbies</title>
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

        /* Make cards same height */
        .card {
            border-radius: 15px;
            transition: transform 0.3s ease;
            height: 100%;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
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
                        <a class="nav-link" href="/bout">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/hob">Hobbies</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hobbies Section -->
    <div class="container py-5">
        <h1 class="text-center text-white mb-5">My Hobbies</h1>

        <div class="row g-4 align-items-stretch">

            <div class="col-md-4 d-flex">
                <div class="card shadow-lg p-4 text-center w-100">
                    <div class="card-body">
                        <h4 class="text-purple">Hobby 1</h4>
                        <p>
                            I like Dancing. I enjoy dancing because it allows me to express myself creatively and stay active.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card shadow-lg p-4 text-center w-100">
                    <div class="card-body">
                        <h4 class="text-purple">Hobby 2</h4>
                        <p>
                            I love to read books when I'm bored. Reading helps me relax and learn new things, and I enjoy getting lost in different stories and worlds.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 d-flex">
                <div class="card shadow-lg p-4 text-center w-100">
                    <div class="card-body">
                        <h4 class="text-purple">Hobby 3</h4>
                        <p>
                            I like watching movies/kdramas. Watching movies and dramas is a great way for me to unwind and enjoy entertainment while immersing myself in different stories and characters.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
