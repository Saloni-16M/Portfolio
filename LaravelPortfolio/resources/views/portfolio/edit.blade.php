<!-- resources/views/portfolio/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS (Optional) -->
    <style>
        body {
            background-color: #f8f9fa;
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
        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bookmarks</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Portfolio Edit Form Section -->
    <div class="container mt-5 pt-5">
        <div class="row mb-4">
            <div class="col text-center">
                <h1 class="display-4">Edit Portfolio</h1>
            </div>
        </div>

        <!-- Edit Portfolio Form -->
        <div class="form-container">
            <form action="{{ route('portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- User Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $portfolio->name) }}" required>
                </div>

                <!-- Graduation Year -->
                <div class="mb-3">
                    <label for="graduation_year" class="form-label">Graduation Year</label>
                    <input type="text" class="form-control" id="graduation_year" name="graduation_year" value="{{ old('graduation_year', $portfolio->graduation_year) }}" required>
                </div>

                <!-- Tech Stack -->
                <div class="mb-3">
                    <label for="tech_stack" class="form-label">Tech Stack</label>
                    <input type="text" class="form-control" id="tech_stack" name="tech_stack" value="{{ old('tech_stack', $portfolio->tech_stack) }}" required>
                </div>

                <!-- Interests -->
                <div class="mb-3">
                    <label for="interests" class="form-label">Interests</label>
                    <textarea class="form-control" id="interests" name="interests" rows="3" required>{{ old('interests', $portfolio->interests) }}</textarea>
                </div>

                <!-- User Image -->
                <div class="mb-3">
                    <label for="user_image" class="form-label">Profile Image</label>
                    <input type="file" class="form-control" id="user_image" name="user_image" accept="image/*">
                    @if ($portfolio->user_image)
                        <img src="{{ asset($portfolio->user_image) }}" alt="Current Image" class="mt-2" width="150">
                    @endif
                </div>

                <!-- Submit Button -->
                <div class="mb-3 text-center">
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
