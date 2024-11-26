<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Portfolios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom styles for the page */
        .dashboard-header {
            background-color: #343a40;
            color: white;
            padding: 40px 0;
            text-align: center;
            border-radius: 8px;
            margin-bottom: 20px;
            position: relative;
        }

        .logout-btn {
            position: absolute;
            top: 15px;
            right: 15px;
            color: white;
            text-decoration: none;
        }

        .logout-btn:hover {
            text-decoration: underline;
        }

        .portfolio-item {
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 20px;
            background-color: #ffffff;
            margin-bottom: 15px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .portfolio-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #007bff;
        }

        .portfolio-actions a,
        .portfolio-actions button {
            margin-right: 10px;
        }

        .btn-success,
        .btn-warning,
        .btn-danger {
            font-size: 14px;
            padding: 8px 16px;
        }

        .create-btn-container {
            text-align: center;
            margin-bottom: 30px;
        }

        .empty-message {
            text-align: center;
            font-size: 1.2rem;
            color: #888;
        }
    </style>
</head>

<body>

    <!-- Dashboard Header -->
    <div class="dashboard-header">
        <h2>Your Portfolios</h2>
        <p>Manage your portfolios and showcase your work.</p>
        <!-- Logout Button -->
        <!-- Logout Button as a Form -->
<form action="{{ route('logout') }}" method="POST" class="d-inline">
    @csrf
    <button type="submit" class="btn btn-link logout-btn">Logout</button>
</form>

    </div>

    <!-- Create Portfolio Button -->
    <div class="create-btn-container">
        <a href="{{ route('portfolio.create') }}" class="btn btn-success btn-lg">Create New Portfolio</a>
    </div>

    <!-- Portfolio List -->
    <div class="container">
        <div class="row">
            @forelse($portfolios as $portfolio)
                <div class="col-md-4">
                    <div class="portfolio-item card">
                        <div class="card-body">
                            <h5 class="portfolio-title">{{ $portfolio->name }}</h5>
                            <p><strong>Tech Stack:</strong> {{ $portfolio->tech_stack }}</p>
                            <p><strong>Graduation Year:</strong> {{ $portfolio->graduation_year }}</p>

                            <div class="portfolio-actions">
                                <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-primary btn-sm">View</a>
                                <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('portfolio.destroy', $portfolio->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 empty-message">
                    <p>You have no portfolios yet. <strong>Create one!</strong></p>
                </div>
            @endforelse
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
