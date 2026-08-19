<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>VitalNess | Fitness & Wellness</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>
        body {
            background: #f8faf9;
        }

        .navbar-brand {
            font-weight: 700;
            color: #22c55e !important;
        }

        .hero {
            min-height: 80vh;
            display: flex;
            align-items: center;
            background: #ecfdf5;
        }

        .hero h1 {
            font-size: 55px;
            font-weight: 700;
        }

        .hero span {
            color: #22c55e;
        }

        .btn-primary {
            background: #22c55e;
            border-color: #22c55e;
        }

        .btn-primary:hover {
            background: #16a34a;
            border-color: #16a34a;
        }

        .service-card {
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
        }

        footer {
            background: #111827;
            color: white;
        }
    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">

        <a class="navbar-brand fs-3" href="#">
            VitalNess
        </a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>

            </ul>

        </div>

    </div>
</nav>


<!-- Hero -->
<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <h1>
                    Build A
                    <span>Healthy</span>
                    Lifestyle
                </h1>

                <p class="lead mt-3">
                    Take care of your body, improve your fitness,
                    and create a healthier lifestyle with VitalNess.
                </p>

                <a href="#services" class="btn btn-primary btn-lg mt-3">
                    Get Started
                </a>

            </div>

            <div class="col-lg-6 text-center">

                <div class="p-5">
                    <h2>💪</h2>
                    <h3>Stay Strong</h3>
                    <p>
                        Your health is your greatest investment.
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>


<!-- About -->
<section id="about" class="py-5">

    <div class="container">

        <div class="text-center mb-5">

            <h2>About VitalNess</h2>

            <p class="text-muted">
                We help you build better habits and maintain
                a healthy lifestyle.
            </p>

        </div>

        <div class="row">

            <div class="col-md-6">

                <h3>Why Choose VitalNess?</h3>

                <p>
                    VitalNess is designed to help people improve
                    their fitness, nutrition and overall wellness.
                </p>

            </div>

            <div class="col-md-6">

                <ul class="list-group">

                    <li class="list-group-item">
                        ✓ Fitness Guidance
                    </li>

                    <li class="list-group-item">
                        ✓ Healthy Lifestyle
                    </li>

                    <li class="list-group-item">
                        ✓ Nutrition Support
                    </li>

                    <li class="list-group-item">
                        ✓ Daily Wellness
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>


<!-- Services -->
<section id="services" class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <h2>Our Services</h2>

            <p class="text-muted">
                Everything you need for a healthier lifestyle.
            </p>

        </div>

        <div class="row g-4">

            <div class="col-md-4">

                <div class="card service-card h-100 shadow-sm border-0">

                    <div class="card-body text-center p-4">

                        <h2>🏋️</h2>

                        <h4 class="mt-3">
                            Fitness
                        </h4>

                        <p>
                            Improve your strength and fitness
                            with proper workouts.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card service-card h-100 shadow-sm border-0">

                    <div class="card-body text-center p-4">

                        <h2>🥗</h2>

                        <h4 class="mt-3">
                            Nutrition
                        </h4>

                        <p>
                            Learn about healthy food and
                            balanced nutrition.
                        </p>

                    </div>

                </div>

            </div>


            <div class="col-md-4">

                <div class="card service-card h-100 shadow-sm border-0">

                    <div class="card-body text-center p-4">

                        <h2>🧘</h2>

                        <h4 class="mt-3">
                            Wellness
                        </h4>

                        <p>
                            Maintain a healthy mind and
                            balanced lifestyle.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- Contact -->
<section id="contact" class="py-5">

    <div class="container">

        <div class="text-center">

            <h2>Contact Us</h2>

            <p>
                Start your fitness journey with VitalNess today.
            </p>

            <a href="mailto:info@vitalness.com"
               class="btn btn-primary">
                Contact Us
            </a>

        </div>

    </div>

</section>


<!-- Footer -->
<footer class="py-4">

    <div class="container text-center">

        <p class="mb-0">
            © <?php echo date('Y'); ?> VitalNess.
            All Rights Reserved.
        </p>

    </div>

</footer>


<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>