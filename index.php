<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saloni's Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Saloni's Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                <li class="nav-item"><a class="nav-link" href="#tech">Tech Stack</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Header Section -->
<header class="text-center bg-primary text-white py-5">
    <div class="container">
        <h1>Hi, I'm Saloni!</h1>
        <p class="lead">Front-end Developer | MERN Stack Enthusiast</p>
    </div>
</header>

<!-- About Me Section -->
<section id="about" class="py-5">
    <div class="container">
        <!-- <h2 class="text-center mb-4">👨‍💻 About Me</h2> -->
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <img src="saloni_pic.jpg" alt="Saloni's Photo" class="img-fluid rounded-circle mb-2" style="width: 250px; height:250px; ">
            </div>
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

<!-- Tech Stack Section -->
<section id="tech" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">🛠 Tech Stack</h2>
                <div class="row">
            <div class="col-md-4">
                <h5 class="text-center">💻 Programming Languages</h5>
                <ul class="list-unstyled text-center">
                    <li>Java</li>
                    <li>Python</li>
                    <li>C++</li>
                    <li>PHP</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-center">🌐 Frontend</h5>
                <ul class="list-unstyled text-center">
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>JavaScript</li>
                    <li>Bootstrap</li>
                    <li>ReactJS</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5 class="text-center">🛢 Backend & Tools</h5>
                <ul class="list-unstyled text-center">
                    <li>MySQL</li>
                    <li>MongoDB</li>
                    <li>Visual Studio Code</li>
                    <li>IntelliJ IDEA</li>
                    <li>PyCharm</li>
                    <li>Canva</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section id="projects" class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Projects</h2>
        <div class="row">
            <?php
                $projects = [
                    ["title" => "Project Manager", "description" => "Website for students to submit the projects and get mentors approval.", "img" => "projectmanager.png"],
                    ["title" => "Expense Tracker", "description" => "A web app to track personal expenses with user-friendly charts.", "img" => "expense.png"],
                    ["title" => "ISL", "description" => "A real-time sign detection for deaf and dumb people and along with translation", "img" => "isl.png"]
                ];
                foreach ($projects as $project) {
                    echo "<div class='col-md-4'>
                            <div class='card mb-4 shadow-sm'>
                                <img src='{$project['img']}' class='card-img-top' alt='{$project['title']}' style='height:300px'>
                                <div class='card-body'>
                                    <h5 class='card-title'>{$project['title']}</h5>
                                    <p class='card-text'>{$project['description']}</p>
                                </div>
                            </div>
                          </div>";
                }
            ?>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="bg-dark text-white py-5">
    <div class="container">
        <h2 class="text-center mb-4">Contact</h2>
        <div class="text-center">
            <p>LinkedIn: <a href="https://www.linkedin.com/in/saloni-832765266/" target="_blank" class="text-white">https://www.linkedin.com/in/saloni-832765266/</a></p>
            <p>Email: <a href="mailto:saloni45055@gmail.com" class="text-white">saloni45055@gmail.com</a></p>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="text-center bg-dark text-white py-4">
    <p>&copy; <?php echo date("Y"); ?> Saloni. All Rights Reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
