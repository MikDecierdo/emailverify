<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Southern de Oro Philippines College - Online Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #800000; /* Maroon */
            --secondary: #f59e0b; /* Yellow */
            --light: #ffffff;
            --dark: #4a0000;
            --gray: #6b7280;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        /* Header */
        header {
            background: var(--white);
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 800;
            color: var(--primary);
            font-size: 1.2rem;
        }

        .logo span {
            color: var(--secondary);
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            margin-left: 1.5rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .btn-primary {
            background: var(--secondary);
            color: var(--dark);
            padding: 0.8rem 1.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            display: inline-block;
            border: none;
            cursor: pointer;
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(245, 158, 11, 0.4);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(128, 0, 0, 0.9), rgba(128, 0, 0, 0.8)), url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=2070') center/cover no-repeat;
            color: var(--white);
            text-align: center;
            padding: 6rem 2rem;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 2rem auto;
            opacity: 0.9;
        }

        /* Features Section */
        .features {
            max-width: 1200px;
            margin: -4rem auto 4rem auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
            position: relative;
            z-index: 10;
        }

        .feature-card {
            background: var(--white);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            width: 60px;
            height: 60px;
            background: var(--light);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem auto;
            font-size: 1.5rem;
            color: var(--primary);
        }

        /* Steps Section */
        .steps {
            max-width: 1000px;
            margin: 0 auto 4rem auto;
            padding: 0 2rem;
            text-align: center;
        }

        .section-title {
            font-size: 2rem;
            color: var(--primary);
            margin-bottom: 0.5rem;
        }

        .section-subtitle {
            color: var(--gray);
            margin-bottom: 3rem;
        }

        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .step {
            position: relative;
        }

        .step-number {
            width: 40px;
            height: 40px;
            background: var(--primary);
            color: var(--white);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem auto;
            font-weight: 700;
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: var(--white);
            text-align: center;
            padding: 2rem;
            margin-top: 0;
        }

        footer p {
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            .hero h1 {
                font-size: 2rem;
            }

        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <nav>
            <div class="logo">
                SOUTHERN DE ORO <span>PHILIPPINES COLLEGE</span>
            </div>
            <div class="nav-links">
                <a href="#home">Home</a>
                <a href="#features">Why Choose Us</a>
                <a href="#steps">How to Apply</a>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" style="color: var(--primary); font-weight: 600;">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Sign In</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <h1>Shape Your Future at Southern de Oro Philippines College</h1>
        <p>Quality education, modern facilities, and a community that fosters excellence. Your journey to success begins here.</p>
        <a href="{{ route('register') }}" class="btn-primary">Start Your Online Registration</a>
    </section>

    <!-- Features Section -->
    <section class="features" id="features">
        <div class="feature-card">
            <div class="feature-icon">🎓</div>
            <h3>Quality Education</h3>
            <p>CHED-accredited programs designed to equip you with industry-relevant skills and knowledge.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🏫</div>
            <h3>Modern Facilities</h3>
            <p>State-of-the-art laboratories, libraries, and classrooms to enhance your learning experience.</p>
        </div>
        <div class="feature-card">
            <div class="feature-icon">🤝</div>
            <h3>Supportive Community</h3>
            <p>Dedicated faculty and staff committed to guiding you throughout your academic journey.</p>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="steps" id="steps">
        <h2 class="section-title">How to Apply</h2>
        <p class="section-subtitle">Getting started is easy. Follow these simple steps to secure your slot.</p>
        
        <div class="steps-grid">
            <div class="step">
                <div class="step-number">1</div>
                <h4>Fill Out the Form</h4>
                <p>Complete the online registration form below with your accurate details.</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h4>Submit Requirements</h4>
                <p>Our admissions team will contact you via email for the next steps and document submission.</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h4>Pay Reservation Fee</h4>
                <p>Secure your enrollment slot by paying the initial reservation fee online or on-campus.</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h4>Welcome to SDOPEC!</h4>
                <p>Attend the orientation and start your classes. Welcome to the family!</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Southern de Oro Philippines College. All rights reserved.</p>
        <p>Brgay. 1, City of Oro, Philippines | (088) 123-4567 | admissions@sdopec.edu.ph</p>
    </footer>

</body>
</html>