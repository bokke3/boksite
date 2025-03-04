<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMS Landing Page</title>

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    {{-- Vite Assets --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Fallback Styles (if Vite isn't available) --}}
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Figtree', Arial, sans-serif;
            color: #333;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            z-index: 1000;
        }

        .navbar a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            margin: 0 15px;
        }

        .navbar a:hover {
            color: #ff6600;
        }

        /* Hero Section */
        .hero {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('{{ asset('images/hero-image.jpg') }}') no-repeat center center/cover;
            color: black;
            padding-top: 60px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .hero button {
            padding: 12px 24px;
            font-size: 1.2rem;
            background-color: #ff6600;
            border: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero button:hover {
            background-color: #e65c00;
        }

        /* Flexbox Sections */
        .container {
            width: 80%;
            max-width: 1200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 50px 0;
        }

        /* Content Section */
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        /* Testimonials */
        .testimonials {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            background-color: #f9f9f9;
            padding: 40px 20px;
            width: 100%;
        }

        .testimonial {
            flex: 1 1 300px;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Footer */
        .footer {
            width: 100%;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 20px;
        }

        .footer a {
            color: #ff6600;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 { font-size: 2rem; }
            .hero p { font-size: 1.2rem; }
            .navbar { flex-direction: column; align-items: center; }
            .navbar a { margin: 5px 0; }
        }

        /* Dark Mode */
        .dark-theme {
            background-color: #222;
            color: white;
        }

        .dark-theme .hero {
            color: white;
        }

        .dark-theme .hero button {
            background-color: #ff8800;
        }

        .dark-theme .footer {
            background: #111;
        }
    </style>
</head>
<body>

    {{-- Navigation --}}
    <nav class="navbar">
        <a href="#">Home</a>
        <a href="#">Features</a>
        <a href="#">Pricing</a>
        <a href="#">Contact</a>
    </nav>

    {{-- Hero Section --}}
    <section class="hero">
        <h1>Welcome to Our CMS</h1>
        <p>Powerful, flexible, and easy to use.</p>
        <button>Get Started</button>
    </section>

    {{-- Content Section --}}
    <section class="container content">
        <h2>Why Choose Us?</h2>
        <p>Our CMS offers the best tools for content creation, management, and customization.</p>
    </section>

    {{-- Testimonials Section --}}
    <section class="testimonials">
        <div class="testimonial">
            <p>"This CMS transformed our workflow!"</p>
            <span>- Happy Customer</span>
        </div>
        <div class="testimonial">
            <p>"User-friendly and powerful."</p>
            <span>- Web Developer</span>
        </div>
    </section>

    {{-- Footer --}}
    <footer class="footer">
        <p>&copy; {{ date('Y') }} METI Inc. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

</body>
</html>
