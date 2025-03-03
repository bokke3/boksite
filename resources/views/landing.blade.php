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
        body {
            font-family: 'Figtree', Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            color: #333;
        }

        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            background: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            padding: 10px 20px;
            display: flex;
            justify-content: flex-end;
        }

        .hero {
            background: url('{{ asset('images/hero-image.jpg') }}') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: black;
            padding-top: 60px; /* Adjust for navbar height */
        }

        .hero h1 {
            font-size: 3em;
            margin: 0;
            line-height: 1.4;
        }

        .hero p {
            font-size: 1.5em;
            margin: 10px 0;
            line-height: 1.6;
        }

        .hero button {
            padding: 12px 24px;
            font-size: 1.1em;
            background-color: #ff6600;
            border: none;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .hero button:hover {
            background-color: #e65c00;
        }

        .content, .testimonials, .footer {
            text-align: center;
            padding: 40px 20px;
        }

        .testimonials {
            background-color: #f9f9f9;
        }

        .footer {
            background-color: #333;
            color: white;
        }

        .footer a {
            color: #ff6600;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .hero h1 { font-size: 2em; }
            .hero p { font-size: 1em; }
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
    <section class="content">
        <h2>Why Choose Us?</h2>
        <p>Our CMS offers the best tools for content creation, management, and customization.</p>
    </section>

    {{-- Testimonials Section --}}
    <section class="testimonials">
        <h2>What Our Users Say</h2>
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
        <p>&copy; {{ date('Y') }} CMS Inc. All rights reserved.</p>
        <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </footer>

</body>
</html>
