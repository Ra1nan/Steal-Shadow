<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Effortless Modern UI box shadow, checkbox, radio buttons, Glassmorphism - Steal Shadow</title>

    <meta name="description"
        content="Effortless UI Styling you can copy and use UI elements like box shadows, checkboxes, radio buttons, and glassmorphism in your project without breaking your theme." />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav.png">
    <link rel="manifest" href="site.webmanifest">

    <link rel="canonical" href=" " />

</head>

<body>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .tool-card {
            transition: all 0.3s;
        }

        .tool-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand img {
            height: 40px;
        }

        .hero-title {
            font-size: 80px;
            font-weight: 700;
        }

        .gradient-text {
            background: linear-gradient(90deg, #42d392, #647eff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            color: #6c757d;
        }

        .hero-buttons .btn {
            margin: 0.5rem;
        }

        .navbar-nav .nav-link {
            padding-right: 1rem;
            padding-left: 1rem;
        }

        .px-3x {
            padding-right: 100px;
            padding-left: 100px;
        }

        .py-5x {
            padding-top: 100px;
            padding-bottom: 100px;
        }


        .sticky-navbar {
            position: sticky;
            top: 0;
            z-index: 999;
            background-color: #fff;
            /* or your navbar bg */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            /* optional subtle shadow */
        }



        /* Gradient Text Styling */
        .gradient-text {
            background: linear-gradient(90deg, #38b2ac, #4299e1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Optional: Shimmering gradient animation */
        @keyframes shimmer {
            0% {
                background-position: -200% center;
            }

            100% {
                background-position: 200% center;
            }
        }

        .shimmer {
            background: linear-gradient(90deg, #38b2ac, #4299e1, #38b2ac);
            background-size: 400% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shimmer 3s linear infinite;
        }
    </style>


    <!-- Header Section -->
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg  bg-white px-3x sticky-navbar">
        <div class="container-fluid">
            <!-- Left logo -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="img/stea.png" alt="Vue Logo" height="24" class="me-2">

            </a>

            <!-- Right side: Menu + Toggle -->
            <div class="d-flex align-items-center ms-auto gap-4">
                <ul class="navbar-nav flex-row gap-3">
                    <li class="nav-item"><a class="nav-link" href="css-box-shadow-collection ">Box Shadows</a></li>
                    <li class="nav-item"><a class="nav-link" href="css-checkboxes-examples ">Checkboxes</a></li>
                    <li class="nav-item"><a class="nav-link" href="css-radios-examples ">Radio Buttons</a></li>
                    <li class="nav-item"><a class="nav-link" href="free-glassmorphism-generator ">Glassmorphism </a>
                    </li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Sponsor</a></li> -->
                </ul>

                <!-- Toggle Switch -->
                <label class="switch mb-0">
                    <input type="checkbox" id="darkModeToggle">
                    <span class="slider">
                        <i class="icon bi bi-brightness-high" id="themeIcon"></i>
                    </span>
                </label>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="animated-hero" class="text-center py-5x position-relative overflow-hidden">
        <!-- Animated SVG Background -->
        <div class="animated-background">
            <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
                <defs>
                    <linearGradient id="grad" x1="0%" y1="0%" x2="100%" y2="100%">
                        <stop offset="0%" stop-color="#00f4a2" />
                        <stop offset="100%" stop-color="#4facfe" />
                    </linearGradient>
                </defs>
                <circle cx="20" cy="20" r="1" fill="url(#grad)">
                    <animate attributeName="cx" values="0;100;0" dur="12s" repeatCount="indefinite" />
                    <animate attributeName="cy" values="100;0;100" dur="10s" repeatCount="indefinite" />
                </circle>
                <circle cx="50" cy="50" r="1" fill="url(#grad)">
                    <animate attributeName="cx" values="50;0;50" dur="8s" repeatCount="indefinite" />
                    <animate attributeName="cy" values="0;100;0" dur="11s" repeatCount="indefinite" />
                </circle>
                <circle cx="80" cy="80" r="1" fill="url(#grad)">
                    <animate attributeName="cx" values="80;0;80" dur="15s" repeatCount="indefinite" />
                    <animate attributeName="cy" values="0;80;0" dur="9s" repeatCount="indefinite" />
                </circle>
            </svg>
        </div>

        <div class="">
            <p class="glass-1"></p>
            <p class="glass-1x"></p>
            <p class="glass-2"></p>
        </div>

        <!-- Content -->
        <div class="container position-relative z-2">
            <h1 class="hero-title  " data-aos="fade-up" data-aos-duration="3000">
                Effortless <span class="gradient-text" data-text="UI Styling">UI Styling</span><br />
                Starts <strong>Here</strong>
            </h1>


            <p class="hero-subtitle mt-3  " data-aos="fade-up" data-aos-duration="3000">
                Copy Box Shadows, Custom Radios, Checkboxes & Glass Effects and Create UI Like a Pro.
            </p>

            <div class="hero-buttons mt-4  " data-aos="fade-up" data-aos-duration="3000">
                <a href="#tools" class="btn btn-outline-secondary">Get Started →</a>
                <a href="free-glassmorphism-generator" class="btn btn-outline-primary border-2">Check Out Glassmorphism
                    Playground</a>
            </div>
        </div>
        <div class="floating-blob blob-left"></div>
        <div class="floating-blob blob-right"></div>

    </section>

    <style>
        .fade-up {
            opacity: 0;
            transform: translateY(40px);
            animation: fadeUp 0.8s ease-out forwards;
        }

        @keyframes fadeUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .glass-1 {
            position: absolute;
            padding: 80px;
            left: 10%;
            top: 13%;
            background: #2a90f799;
            border-radius: 20px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);

            /* Gradient border glow using box-shadow */


            /* Gradient overlay (optional for deeper glass look) */
            background-image: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.08),
                    rgba(0, 255, 255, 0.06));

            /* Animation */
            animation: floatGlass 6s ease-in-out infinite;
        }

        /* Floating animation */
        @keyframes floatGlass {
            0% {
                transform: translateY(0px) rotate(8deg);

            }

            50% {
                transform: translateY(-20px) rotate(10deg);

            }

            100% {
                transform: translateY(0px) rotate(8deg);

            }
        }

        @media (prefers-color-scheme: dark) {
            .glass-1 {
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
        }

        .glass-1x {
            background: #25f19840;
            border-radius: 15px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 40px;
            position: absolute;
            padding: 64px;
            left: 10%;
            top: 14%;
            rotate: -44deg;
            z-index: revert-layer;



            /* Animation */
            animation: floatGlass 6s ease-in-out infinite;
        }

        /* Floating animation */
        @keyframes floatGlass {
            0% {
                transform: translateY(0px) rotate(8deg);

            }

            50% {
                transform: translateY(-20px) rotate(10deg);

            }

            100% {
                transform: translateY(0px) rotate(8deg);

            }
        }

        @media (prefers-color-scheme: dark-mode) {
            .glass-1x {
                background: rgba(255, 255, 255, 0.05);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }


        }



        .glass-2 {
            position: absolute;
            padding: 80px;
            right: 8%;
            top: 30%;

            background: rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);

            /* Gradient glow using vibrant pink & purple tones */


            background-image: linear-gradient(135deg,
                    rgba(255, 255, 255, 0.06),
                    rgba(255, 0, 255, 0.06));

            /* Animation */
            animation: floatGlass2 7s ease-in-out infinite;
        }

        /* Floating animation with subtle rotation */
        @keyframes floatGlass2 {
            0% {
                transform: translateY(0px) rotate(18deg);

            }

            50% {
                transform: translateY(-25px) rotate(20deg);

            }

            100% {
                transform: translateY(0px) rotate(18deg);
                box-shadow:
                    0 0 10px rgb(37, 241, 152),
                    0 0 16px rgb(37, 241, 152),
                    0 0 26px rgb(37, 241, 152);
            }
        }


        .floating-blob {
            backdrop-filter: blur(12px);
            background: rgba(79, 172, 254, 0.3);
            box-shadow: 0 4px 40px rgba(79, 172, 254, 0.3);
        }

        .floating-blob {
            position: absolute;
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #00f2fe 0%, #4facfe 100%);
            border-radius: 50%;
            filter: blur(30px);
            opacity: 0.4;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }

        .blob-left {
            top: 30%;
            left: -40px;
        }

        .blob-right {
            bottom: 25%;
            right: -40px;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        #animated-hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            /* color: #fff; */
            /* background-color: #0f0f0f; */
        }

        .animated-background {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            overflow: hidden;
            z-index: 0;
            opacity: 0.4;
        }

        .animated-background svg {
            height: 100%;
            width: 100%;
        }

        #animated-hero .container {
            z-index: 2;
            position: relative;
        }

        :root {
            --gradient-start: #4facfe;
            --gradient-end: #00f2fe;
            --glow-color: rgba(0, 242, 254, 0.35);
            /* subtle modern glow */
        }

        .gradient-text {
            background: linear-gradient(90deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            position: relative;
        }

        .gradient-text::after {
            content: attr(data-text);
            position: absolute;
            left: 0;
            top: 0;
            z-index: -1;
            filter: blur(6px);
            opacity: 0.7;
            background: linear-gradient(90deg, var(--gradient-start), var(--gradient-end));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            color: transparent;
            pointer-events: none;
        }
    </style>

    <!-- Tools Section: Enhanced with Icons, Hover & Glassmorphism -->
    <section id="tools" class="mb-5 ">
        <div class="container" data-aos="fade-up" data-aos-duration="3000">
            <h2 class="text-center mb-5  h2t">Steal Shadow Collections</h2>

            <div class="row g-4">

                <!-- Box Shadows -->
                <div class="col-md-3">
                    <div class="card glass-card tool-hover h-100 text-center p-4">
                        <div class="mb-3 fs-1 text-primary">
                            <i class="bi bi-layers"></i>
                        </div>
                        <h5 class="card-title">Box Shadows</h5>
                        <p class="card-text">Copy and customize shadow presets for your UI elements.</p>
                        <a href="css-box-shadow-collection " class="btn btn-outline-primary  mt-3">Try Now</a>
                    </div>
                </div>

                <!-- Checkboxes -->
                <div class="col-md-3">
                    <div class="card glass-card tool-hover h-100 text-center p-4">
                        <div class="mb-3 fs-1 text-success">
                            <i class="bi bi-check-square"></i>
                        </div>
                        <h5 class="card-title">Checkboxes</h5>
                        <p class="card-text">Stylish checkbox designs for sleek modern UIs.</p>
                        <a href="css-checkboxes-examples " class="btn btn-outline-success  mt-3">Customize</a>
                    </div>
                </div>

                <!-- Radio Buttons -->
                <div class="col-md-3">
                    <div class="card glass-card tool-hover h-100 text-center p-4">
                        <div class="mb-3 fs-1 text-danger">
                            <i class="bi bi-record-circle"></i>
                        </div>
                        <h5 class="card-title">Radio Buttons</h5>
                        <p class="card-text">Custom radio button styles with easy copy-paste code.</p>
                        <a href="css-radios-examples " class="btn btn-outline-danger  mt-3">Explore</a>
                    </div>
                </div>

                <!-- Glassmorphism -->
                <div class="col-md-3">
                    <div class="card glass-card tool-hover h-100 text-center p-4">
                        <div class="mb-3 fs-1 text-info">
                            <i class="bi bi-box-seam"></i>
                        </div>
                        <h5 class="card-title">Glassmorphism</h5>
                        <p class="card-text">Generate beautiful frosted-glass style UI blocks.</p>
                        <a href="free-glassmorphism-generator " class="btn btn-outline-info mt-3 ">Generate</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ----------------------------- -->



    <!-- 
    <section class="py-5 bg-white" data-aos="zoom-in-up">
        <div class="container">
            <div
                class="bg-light rounded-4 p-5 d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4 shadow-sm">

            
                <div class="text-center text-lg-start">
                    <h2 class="fw-semibold mb-4" style="font-size: 2rem; line-height: 1.4;">
                        Learn how your favorite <br>
                        websites are styled by <br>
                        analysing CSS on the fly
                    </h2>
                    <a href="#" class="btn btn-dark btn-lg rounded-pill d-inline-flex align-items-center px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                            class="bi bi-eye me-2" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8z" />
                            <path d="M8 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                        </svg>
                        Try it on this page for FREE
                    </a>
                </div>

               
                <div class="card shadow rounded-4 border-0"  >
                   <img src="img/box.png" alt="" width="">
                       
                </div>

            </div>
        </div>
    </section> -->






    <!-- Why StealShadow Section -->
    <section class="py-5   text-center" id="why-stealshadow" data-aos="fade-up" data-aos-duration="3000">
        <div class="container">
            <h2 class="mb-4">Why <span class="text-primary"><img src="img/stea.png" width="180" alt=""> </span>?</h2>
            <div class="row g-4">

                <div class="col-md-4 gl ">
                    <div class="p-4   rounded glass-card   h-100">
                        <i class="bi bi-stars fs-1 text-primary mb-3"></i>
                        <h3 class="fw-bold">Modern UI Elements</h3>
                        <p class="text-muted">Copy shadows, Radio button, glass effects, and checkbox Collections that
                            elevate
                            your design instantly.</p>
                    </div>
                </div>

                <div class="col-md-4  ">
                    <div class="p-4   rounded glass-card   h-100">
                        <i class="bi bi-easel2 fs-1 text-primary mb-3"></i>
                        <h3 class="fw-bold">Design Playground</h3>
                        <p class="text-muted">Experiment with checkboxes, radio buttons, and more in real time all in
                            one clean interface.</p>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="p-4   rounded glass-card   h-100">
                        <i class="bi bi-lightning-charge fs-1 text-primary mb-3"></i>
                        <h3 class="fw-bold">Instant Copy & Use</h3>
                        <p class="text-muted">Grab ready-to-use CSS with one click. No fluff, just fast UI styling for
                            developers and designers.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>








    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <div class="container">
            <p class="mb-0"> <svg width="24" height="24" viewBox="0 0 64 64" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <circle cx="32" cy="32" r="30" stroke="#28a745" stroke-width="4" />
                    <path d="M32 12A20 20 0 1 0 52 32H42A10 10 0 1 1 22 32H12A20 20 0 0 0 32 12Z" fill="#28a745" />
                </svg>
                Open Source</span>
                - Collected & Curated From Devs 💻❤️ | Want To Contribute <a href="" class="git-a"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 
                    0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 
                    1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 
                    0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82a7.6 7.6 0 0 1 2-.27c.68 0 1.36.09 
                    2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 
                    0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 
                    0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                    </svg></a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <style>
        .git-a {
            background: rgba(255, 255, 255, 0.11);
            border-radius: 10px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 4px 6px;
            padding-bottom: 8px;
            color: #fff;
        }

        .h2t {
            font-size: 55px;
            margin-top: -44px;
            /* margin-bottom: 20px; */
            padding-bottom: 30px
        }

        /* Glassmorphism Style */
        .glass-card {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.4s ease;
        }

        /* Hover Effect */
        .tool-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3), 0 0 10px rgba(0, 255, 255, 0.2);
        }



        body.dark-mode {
            background-color: #121212;
            color: #f8f9fa;
        }

        body.dark-mode h5 {

            color: #f8f9fa;
        }

        body.dark-mode h4 {

            color: #000000;
        }

        body.dark-mode h3 {

            color: #ffffff;
        }

        body.dark-mode p {

            color: #f8f9fa !important;
        }

        body.dark-mode .navbar {
            background-color: #1e1e1e !important;
        }

        body.dark-mode .nav-link,
        body.dark-mode .navbar-brand {
            color: #f8f9fa !important;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 22px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            background-color: #ddd;
            border-radius: 34px;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            transition: background-color 0.4s;
        }

        .slider .icon {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            transition: all 0.3s ease;
            font-size: 14px;
        }

        .switch input:checked+.slider {

            background: rgba(255, 255, 255, 0.11);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .switch input:checked+.slider .icon {
            transform: translate(20px, -50%);
        }


        @media (max-width: 768px) {
            .nav-link {
                font-size: 5px !important;
            }

            .px-3x {
                padding-right: 0px;
                padding-left: 0px;
            }

            .glass-1 {

                padding: 80px;
                left: 4%;
                top: 55%;
            }

            .hero-title {
                font-size: 55px;
                font-weight: 700;
            }
        }
    </style>

    <!-- Script -->
    <script>
        const toggle = document.getElementById('darkModeToggle');
        const icon = document.getElementById('themeIcon');

        toggle.addEventListener('change', () => {
            const isDark = toggle.checked;
            document.body.classList.toggle('dark-mode', isDark);
            localStorage.setItem('darkMode', isDark ? 'true' : 'false');
            icon.className = isDark ? 'icon bi bi-moon' : 'icon bi bi-brightness-high';
        });

        // Load saved mode
        window.addEventListener('DOMContentLoaded', () => {
            const savedMode = localStorage.getItem('darkMode') === 'true';
            toggle.checked = savedMode;
            document.body.classList.toggle('dark-mode', savedMode);
            icon.className = savedMode ? 'icon bi bi-moon' : 'icon bi bi-brightness-high';
        });
    </script>

</body>

</html>