<!-- resources/views/portfolio/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $portfolio->name }}'s Portfolio</title>
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
        .section-title {
            margin-top: 50px;
            margin-bottom: 30px;
            color: #343a40;
        }
        .portfolio-card img {
            max-height: 200px;
            object-fit: cover;
        }
        .portfolio-card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .about-section, .contact-section {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .contact-section {
            margin-top: 30px;
        }
        .portfolio-info .badge {
            font-size: 1rem;
            margin-right: 5px;
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
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bookmarks</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Portfolio Header Section -->
    <div class="container mt-5 pt-5">
        <div class="row mt-4">
            <div class="col text-center mb-3">
                <h1 class="display-4">{{ $portfolio->name }}'s Portfolio</h1>
                <p class="lead text-muted">A showcase of skills, interests, and projects</p>
            </div>
        </div>

        <!-- Portfolio Info Section -->
        <div class="row">
            <!-- User Image -->
            <div class="col-md-4 text-center mb-4">
                <img src="{{ asset('images/saloni_pic.jpg') }}" alt="User Image" class="img-fluid rounded-circle" style="width: 300px; height: 300px; object-fit: cover;">
            </div>

            <!-- Portfolio Details -->
            <div class="col-md-8 portfolio-info mt-5">
                <div class="mb-3">
                    <h4>Graduation Year: <span class="badge bg-primary">{{ $portfolio->graduation_year }}</span></h4>
                </div>
                <div class="mb-3">
                    <h4>Tech Stack: <span class="badge bg-secondary">{{ $portfolio->tech_stack }}</span></h4>
                </div>
                <div class="mb-3">
                    <h4>Interests:
                    <spap>{{ $portfolio->interests }}</span></h4>
                </div>
                <div class="mb-3">
                    <h4>Email:
                    <span>{{ $portfolio->user->email }}</span></h4> <!-- Updated email to fetch from user table -->
                </div>
            </div>
        </div>

        <!-- About Section -->
        <div id="about" class="about-section">
            <h3 class="section-title">About Me</h3>
            <!-- <p>{{ $portfolio->about_me }}</p> -->
             <!-- About Me Section -->
<section id="about" class="">
    <div class="container">
        <!-- <h2 class="text-center mb-4">👨‍💻 About Me</h2> -->
        <div class="row align-items-center">
           
            <div class="col-md-8">
                <p>I’m a full-stack developer with a passion for creating innovative web applications. 🚀 I love turning ideas into sleek, interactive web apps using React and the MERN stack. Always excited for new challenges and collaborations!</p>
                <ul class="list-unstyled">
                    <li>🔭 <strong>Currently focusing on:</strong> Web Development with MERN stack</li>
                    <li>💡 <strong>Programming in:</strong> Java, Python, and C++</li>
                    <li>🎓 Constantly learning and growing in the tech world</li>
                    <li>✍ Exploring new challenges and opportunities</li>
                </ul>
            </div>
        </div>
    </div>
</section>

        </div>
        

        <!-- Projects Section -->
        <div id="projects" class="mt-5">
            <h3 class="section-title">Projects</h3>
            @if($portfolio->projects && count($portfolio->projects) > 0)
                <div class="row">
                    @foreach($portfolio->projects as $project)
                        <div class="col-md-4 mb-4">
                            <div class="card portfolio-card">
                                <img src="{{ asset('images/project-placeholder.jpg') }}" alt="Project Image" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project }}</h5>
                                    <p class="card-text">Description of the project goes here.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <p>No projects available.</p>
            @endif

            <!-- Sample Projects -->
            <div class="row mt-4">
                <div class="col-md-4 mb-4">
                    <div class="card portfolio-card">
                    <img src="{{ asset('images/projectmanager.png') }}" alt="ISL" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Project Manager</h5>
                            <p class="card-text">Website for students to submit the projects and get mentors' approval.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card portfolio-card">
                    <img src="{{ asset('images/expense.png') }}" alt="ISL" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Expense Tracker</h5>
                            <p class="card-text">A web app to track personal expenses with user-friendly charts.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="card portfolio-card">
                    <img src="{{ asset('images/isl.png') }}" alt="ISL" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">ISL</h5>
                            <p class="card-text">A real-time sign detection for deaf and dumb people, along with translation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div id="contact" class="contact-section">
            <h3 class="section-title">Contact</h3>
            <p>If you would like to get in touch, feel free to reach out to me via email.</p>
            <p><strong>Email:</strong> <a href="mailto:{{ $portfolio->user->email }}">{{ $portfolio->user->email }}</a></p>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
