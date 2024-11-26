<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 900px;
            padding-top: 100px; /* To account for the navbar */
        }

        .card {
            border-radius: 12px;
            border: none;
        }

        .form-control {
            border-radius: 8px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .card-header {
            font-weight: bold;
            background-color: #f8f9fa;
        }

        .btn-success {
            background-color: #28a745;
            border-color: #28a745;
            font-size: 16px;
        }

        .btn-success:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .font-weight-bold {
            font-weight: 600;
        }

        .navbar {
            background-color: #343a40;
            padding: 20px 0;
        }

        .navbar-nav .nav-link {
            color: #fff;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
            text-decoration: underline;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }

        /* Responsive Fix */
        @media (max-width: 767px) {
            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Create Portfolio Form Section -->
    <div class="container mt-5 pt-5">
        <h1 class="text-center mb-4">Create Portfolio</h1>
        <div class="card shadow-lg border-0">
            <div class="card-body">
                <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <!-- Name and Graduation Year -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="name" class="font-weight-bold">Name</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label for="graduation_year" class="font-weight-bold">Graduation Year</label>
                                <input type="text" class="form-control" id="graduation_year" name="graduation_year" required>
                            </div>
                        </div>
                    </div>

                    <!-- Tech Stack -->
                    <div class="form-group mb-3">
                        <label for="tech_stack" class="font-weight-bold">Tech Stack</label>
                        <textarea class="form-control" id="tech_stack" name="tech_stack" rows="4" placeholder="List your tech stack..." required></textarea>
                    </div>

                    <!-- Interests -->
                    <div class="form-group mb-3">
                        <label for="interests" class="font-weight-bold">Interests</label>
                        <textarea class="form-control" id="interests" name="interests" rows="4" placeholder="Share your interests..." required></textarea>
                    </div>

                    <!-- Certificates -->
                    <!-- <div class="form-group mb-3">
                        <label for="certificates" class="font-weight-bold">Certificates (JSON Format)</label>
                        <textarea class="form-control" id="certificates" name="certificates" rows="4" placeholder='["Certificate 1", "Certificate 2"]' required></textarea>
                    </div> -->

                    <!-- Projects -->
                    <!-- <div class="form-group mb-3">
                        <label for="projects" class="font-weight-bold">Projects (JSON Format)</label>
                        <textarea class="form-control" id="projects" name="projects" rows="4" placeholder='[{"title": "Project 1", "description": "Description of project 1"}]' required></textarea>
                    </div> -->

                    <!-- User Image -->
                    <div class="form-group mb-3">
                        <label for="user_image" class="font-weight-bold">User Image</label>
                        <input type="file" class="form-control-file" id="user_image" name="user_image">
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-success px-4 py-2">Save Portfolio</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
