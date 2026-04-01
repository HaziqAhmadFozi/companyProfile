<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexus | Future of Innovation</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #6366f1;
            --secondary: #a855f7;
            --dark: #0f172a;
            --light: #f8fafc;
            --glass: rgba(255, 255, 255, 0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background-color: var(--dark);
            color: var(--light);
            overflow-x: hidden;
        }

        /* Animated Background Gradient */
        .bg-glow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 50% 50%, #1e1b4b 0%, #0f172a 100%);
            z-index: -1;
        }

        /* Navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.5rem 8%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li { margin-left: 2.5rem; }

        .nav-links a {
            text-decoration: none;
            color: var(--light);
            font-weight: 500;
            font-size: 0.9rem;
            opacity: 0.8;
            transition: 0.3s;
        }

        .nav-links a:hover { opacity: 1; color: var(--primary); }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 10%;
        }

        .hero h1 {
            font-size: clamp(3rem, 8vw, 5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            animation: fadeInUp 1s ease forwards;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin-bottom: 2.5rem;
            color: #94a3b8;
            animation: fadeInUp 1s ease forwards 0.2s;
            opacity: 0;
        }

        /* Buttons */
        .cta-group {
            display: flex;
            gap: 1rem;
            animation: fadeInUp 1s ease forwards 0.4s;
            opacity: 0;
        }

        .btn {
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            cursor: pointer;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(99, 102, 241, 0.4);
        }

        /* Features Section with Glassmorphism */
        .features {
            padding: 10rem 10%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2.5rem;
        }

        .card {
            background: var(--glass);
            padding: 3rem;
            border-radius: 24px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: scale(1.02);
            border-color: var(--primary);
        }

        .card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        /* Reveal Animation on Scroll */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        footer {
            text-align: center;
            padding: 4rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #64748b;
        }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <nav>
        <div class="logo">NEXUS</div>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#features">Tech</a></li>
            <li><a href="#">Solutions</a></li>
            <li><a href="#" class="btn btn-primary" style="padding: 0.5rem 1.5rem;">Join</a></li>
        </ul>
    </nav>

    <section class="hero" id="home">
        <h1>Design the <br><span style="color: var(--secondary)">Next Era.</span></h1>
        <p>Deploy AI-driven architecture and seamless user experiences with our unified development platform.</p>
        <div class="cta-group">
            <a href="#features" class="btn btn-primary">Explore Platform</a>
            <a href="#" class="btn" style="border: 1px solid var(--glass); color: white;">View Demo</a>
        </div>
    </section>

   

    <footer>
        <p>&copy; 2026 Nexus Protocol. Engineering the future.</p>
    </footer>

    <script>
        // Reveal elements on scroll
        function reveal() {
            var reveals = document.querySelectorAll(".reveal");
            for (var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var elementTop = reveals[i].getBoundingClientRect().top;
                var elementVisible = 150;
                if (elementTop < windowHeight - elementVisible) {
                    reveals[i].classList.add("active");
                }
            }
        }

        window.addEventListener("scroll", reveal);

        // Initial check in case elements are already in view
        reveal();
    </script>
</body>
</html>