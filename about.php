<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .hero {
            background-color: #1a4d4d;
            color: white;
            padding: 60px 0;
            border-radius: 0 0 30px 30px;
            position: relative;
           
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1.2fr 1fr;
            align-items: center;
            gap: 40px;
        }

        .hero-text h1 {
            font-size: 3.5em;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero-text .highlight {
            color: #ffd700;
        }

        .stats {
            display: flex;
            gap: 30px;
            margin-top: 30px;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 1.8em;
            font-weight: bold;
            color: #ffd700;
        }

        .app-buttons {
            display: flex;
            gap: 20px;
            margin-top: 30px;
        }

        .app-button {
            padding: 10px 20px;
            border-radius: 25px;
            background: #333;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .reasons {
            padding: 60px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2em;
            margin-bottom: 40px;
        }

        .reason-cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .reason-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .reason-icon {
            width: 60px;
            height: 60px;
            background: #1a4d4d;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 24px;
        }

        .steps {
            text-align: center;
            padding: 60px 0;
        }

        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
        }

        .management {
            padding: 60px 0;
            background: #fff;
            border-radius: 20px;
            margin: 40px 0;
        }

        .management-team {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 0 20px;
        }

        .director-card {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background: #f8f9fa;
            border-radius: 15px;
            transition: transform 0.3s ease;
        }

        .director-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .director-image {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid #1a4d4d;
        }

        .director-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .director-info {
            flex: 1;
        }

        .director-info h3 {
            color: #1a4d4d;
            margin-bottom: 5px;
        }

        .position {
            color: #666;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .credentials {
            color: #888;
            font-size: 0.9em;
            margin-bottom: 5px;
        }

        .experience {
            color: #666;
            font-size: 0.9em;
            margin-bottom: 10px;
        }

        .social-links {
            display: flex;
            gap: 10px;
        }

        .social-links a {
            color: #1a4d4d;
            font-size: 1.2em;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #ffd700;
        }

        @media (max-width: 768px) {
            .hero-content {
                grid-template-columns: 1fr;
            }
            .reason-cards {
                grid-template-columns: 1fr;
            }
            .director-card {
                flex-direction: column;
                text-align: center;
            }
            .social-links {
                justify-content: center;
            }
        }

        /* Footer Styles */
        .footer {
            background-color: #222;
            color: #fff;
            padding: 60px 0 0 0;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-about {
            max-width: 300px;
        }

        .footer-logo {
            height: 60px;
            margin-bottom: 20px;
        }

        .footer-about p {
            color: #999;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            color: #fff;
            background: rgba(255, 255, 255, 0.1);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-links h3,
        .footer-contact h3,
        .footer-newsletter h3 {
            color: #fff;
            font-size: 1.2em;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h3::after,
        .footer-contact h3::after,
        .footer-newsletter h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--primary-color);
        }

        .footer-links ul,
        .footer-contact ul {
            list-style: none;
        }

        .footer-links ul li,
        .footer-contact ul li {
            margin-bottom: 15px;
        }

        .footer-links ul li a {
            color: #999;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: var(--primary-color);
            padding-left: 5px;
        }

        .footer-contact ul li {
            color: #999;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .footer-contact ul li i {
            color: var(--primary-color);
        }

        .footer-newsletter p {
            color: #999;
            margin-bottom: 20px;
        }

        .subscribe-form {
            display: flex;
            gap: 10px;
        }

        .subscribe-form input {
            flex: 1;
            padding: 12px 15px;
            border: 1px solid #444;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.05);
            color: #fff;
        }

        .subscribe-form input:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        .subscribe-form button {
            padding: 12px 20px;
            background: var(--primary-color);
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .subscribe-form button:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .footer-bottom {
            border-top: 1px solid #444;
            padding: 20px 0;
            text-align: center;
        }

        .footer-bottom p {
            color: #999;
        }

        @media (max-width: 768px) {
            .footer {
                padding: 40px 0 0 0;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 30px;
            }

            .footer-about {
                max-width: 100%;
            }
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .news-container,
            .numbers-container,
            .footer-container {
                padding: 0 20px;
            }
        }

        @media (max-width: 992px) {
            .slide-text h1 {
                font-size: 2.8em;
            }

            .slide-text p {
                font-size: 1.2em;
            }

            .join-btn {
                padding: 10px 25px;
                font-size: 1.1em;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                padding: 15px;
            }

            .nav-link {
                padding: 10px 15px;
                width: 100%;
                text-align: center;
                font-size: 14px;
            }

            .logo-image {
                height: 40px;
            }

            .slide-text h1 {
                font-size: 2em;
            }

            .slide-text p {
                font-size: 1em;
                margin-bottom: 20px;
            }

            .join-btn {
                padding: 8px 20px;
                font-size: 1em;
            }

       
            .news-card {
                margin: 0 10px;
            }

            .counter {
                font-size: 2.5em;
            }

            .callback-container {
                padding: 20px;
            }

            .callback-content h2 {
                font-size: 1.8em;
            }

            .hero-content {
                left: 10%;
                width: 80%;
            }

            .hero-content h1 {
                font-size: 2em;
            }

            .hero-content p {
                font-size: 1em;
            }

            .join-btn-container {
                left: 10%;
            }

            .hero-section {
                height: 45vh;
            }
        }

        @media (max-width: 576px) {
            .login-section {
                flex-direction: column;
                gap: 10px;
            }

            .login-btn, 
            .register-btn {
                width: 100%;
            }

            .slide-text h1 {
                font-size: 1.8em;
            }

            .slide-text p {
                font-size: 0.9em;
                margin-bottom: 15px;
            }

            .news-card {
                margin: 0;
            }

            .news-image {
                height: 180px;
            }

            .number-card {
                padding: 15px;
            }

            .number-card i {
                font-size: 2em;
            }

            .counter {
                font-size: 2em;
            }

            .number-card h3 {
                font-size: 1.2em;
            }

            .form-group input,
            .form-group select,
            .form-group textarea {
                padding: 10px;
            }

            .submit-btn {
                padding: 12px 25px;
                font-size: 1em;
            }

            .footer {
                padding: 30px 0 0 0;
            }

            .footer-content {
                gap: 25px;
            }

            .footer-logo {
                height: 50px;
            }

            .social-links {
                justify-content: center;
            }

            .subscribe-form {
                flex-direction: column;
            }

            .subscribe-form button {
                width: 100%;
            }
        }

        @media (max-width: 1024px) {
            .header-content {
                padding: 15px 20px;
            }

            .nav-menu {
                gap: 15px;
            }

            .nav-link {
                padding: 6px 12px;
                font-size: 14px;
            }
        }

      
        .fancy-button {
            position: relative;
            overflow: hidden;
            padding: 10px 20px;
            background: #1F2937;
            color: white;
            border-radius: 8px;
            transition: all 300ms ease-out;
            border: none;
            font-weight: 500;
            font-size: 14px;
                cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .fancy-button:hover {
            background: linear-gradient(to right, #1F2937, #4B5563);
            box-shadow: 
                0 6px 20px rgba(0, 0, 0, 0.3),
                0 0 0 2px #1F2937, 
                0 0 0 4px rgba(255, 255, 255, 0.7);
            transform: translateY(-2px);
        }

        .login-btn {
            background: #4CAF50;
            box-shadow: 0 4px 15px rgba(76, 175, 80, 0.3);
        }

        .login-btn:hover {
            background: linear-gradient(to right, #4CAF50, #45a049);
            box-shadow: 
                0 6px 20px rgba(76, 175, 80, 0.4),
                0 0 0 2px #4CAF50, 
                0 0 0 4px rgba(255, 255, 255, 0.7);
        }

        .register-btn {
            background: #388E3C;
            box-shadow: 0 4px 15px rgba(56, 142, 60, 0.3);
        }

        .register-btn:hover {
            background: linear-gradient(to right, #388E3C, #2E7D32);
            box-shadow: 
                0 6px 20px rgba(56, 142, 60, 0.4),
                0 0 0 2px #388E3C, 
                0 0 0 4px rgba(255, 255, 255, 0.7);
        }

        .button-container {
            display: flex;
            gap: 12px;
        }

        .button-shine {
            position: absolute;
            right: 0;
            top: -40px;
            height: 100px;
            width: 25px;
            transform: translateX(40px) rotate(12deg);
            background: white;
            opacity: 0.1;
            transition: all 700ms ease;
        }

        .fancy-button:hover .button-shine {
            transform: translateX(-140px) rotate(12deg);
        }

        .button-text {
            position: relative;
            z-index: 1;
            display: inline-block;
        }

        /* Advertisement Section Styles */
        .advertisement-section {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            padding: 80px 20px;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .parallax-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('images/must have sunscreens _ @realskindiaries.jpg') center/cover no-repeat;
            background-attachment: fixed;
            z-index: -1;
            transform: translateZ(0);
            will-change: transform;
        }

        .ad-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .section-title {
            text-align: center;
            color: #ffffff;
            font-size: 2.8em;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px;
        }

        .product-card {
            height: 450px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 
                0 20px 50px rgba(0, 0, 0, 0.15),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            transition: all 0.4s ease;
        }

        .product-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 
                0 25px 50px rgba(0, 0, 0, 0.25),
                0 0 0 1px rgba(255, 255, 255, 0.2);
        }

        .product-image {
            height: 250px;
            overflow: hidden;
            position: relative;
            border-radius: 30px 30px 0 0;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            transition: transform 0.6s ease;
            will-change: transform;
        }

        .product-card:hover .product-image img {
            transform: scale(1.1);
        }

        .product-content {
            flex: 1;
            padding: 25px;
            color: #ffffff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
        }

        .product-content h3 {
            color: #ffffff;
            margin-bottom: 15px;
            font-size: 1.4em;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .product-content p {
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .product-cta {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .price {
            font-size: 1.3em;
            color: #4CAF50;
            font-weight: 600;
        }

        .buy-btn {
            background: linear-gradient(45deg, #4CAF50, #45a049);
            color: white;
            padding: 10px 25px;
            border-radius: 25px;
            text-decoration: none;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .buy-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(76,175,80,0.4);
        }

        /* Add these new header styles */
        .header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(18, 18, 18, 0.95);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease, background 0.3s ease;
        }

        .header.header-hidden {
            transform: translateY(-100%);
        }

        .header.header-visible {
            transform: translateY(0);
        }

        .header.header-transparent {
            background: rgba(18, 18, 18, 0.7);
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            padding: 40px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 55px;
        }

        .left-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo-image {
            height: 70px;
            width: auto;
            display: block;
            object-fit: contain;
        }

        .nav-menu {
            display: flex;
            gap: 8px;
            margin: 0 15px;
            padding: 5px 12px;
            background: rgba(28, 28, 28, 0.95);
            border-radius: 20px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }

        .nav-link {
            text-decoration: none;
            color: rgba(255, 255, 255, 0.85);
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 15px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            font-size: 12px;
            display: flex;
            align-items: center;
            white-space: nowrap;
        }

        .nav-link:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(76, 175, 80, 0.1);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
            z-index: -1;
        }

        .nav-link:hover:before {
            transform: translateX(0);
        }

        .nav-link:hover {
            color: #4CAF50;
            background: rgba(76, 175, 80, 0.1);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .nav-link.active {
            background: rgba(76, 175, 80, 0.2);
            color: #4CAF50;
        }

        .nav-link i {
            font-size: 11px;
            margin-right: 4px;
            color: rgba(255, 255, 255, 0.7);
            display: inline-flex;
            align-items: center;
        }

        .login-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-right: 200px;
        }

        .login-btn, .register-btn {
            padding: 8px 20px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 500;
            transition: all 0.3s;
            background: rgba(28, 28, 28, 0.95);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }

        .login-btn:hover, .register-btn:hover {
            background: rgba(76, 175, 80, 0.2);
            color: #4CAF50;
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        /* Disclaimer Section Styles */
        .disclaimer-section {
            background: linear-gradient(135deg, #a4c639 0%, #8ba830 100%);
            position: relative;
            padding: 60px 0;
            overflow: hidden;
        }

        .disclaimer-section::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 40%;
            height: 100%;
            background: white;
            transform: skewX(-20deg) translateX(20%);
            z-index: 1;
        }

        .disclaimer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
            position: relative;
            z-index: 2;
        }

        .disclaimer-title {
            color: white;
            font-size: 42px;
            font-weight: 800;
            text-align: center;
            margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .disclaimer-content {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .disclaimer-points {
            display: flex;
            flex-direction: column;
           
        }

        .point {
            display: flex;
            gap: 10px;
            align-items: flex-start;
            padding: 10px;
            transition: all 0.3s ease;
        }

        .bullet {
            color: #a4c639;
            font-size: 18px;
            font-weight: bold;
            flex-shrink: 0;
        }

        .point p {
            color: #333;
            line-height: 1.6;
            margin: 0;
            font-size: 14px;
        }

        .company-website {
            text-align: center;
            margin-top: 20px;
        }

        .company-website a {
            color: #a4c639;
            font-size: 20px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .company-website a:hover {
            color: #8ba830;
        }

        .rk-logo {
            position: absolute;
            top: 100px;
            right: 10px;
            width: 300px;
            height: 150px;
            z-index: 3;
        }

        .rk-logo img {
            width: 100%;
            height: 120%;
            object-fit: contain;
        }

        @media (max-width: 768px) {
            .disclaimer-section::before {
                width: 100%;
                transform: skewX(-20deg) translateX(80%);
            }

            .disclaimer-title {
                font-size: 32px;
            }

            .rk-logo {
                width: 80px;
                height: 80px;
                right: 20px;
            }

            .point p {
                font-size: 13px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Add AOS Library for scroll animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
   
    <div class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Because Email Is Complicated Enough.<span class="highlight">🔥</span></h1>
                    <p>Try Email Finder. Build your leads database faster with 99.9% Email Finder. Start using it for free.</p>
                    
                    <div class="app-buttons">
                        <a href="#" class="app-button">
                            <i class="fab fa-apple"></i>
                            App Store
                        </a>
                        <a href="#" class="app-button">
                            <i class="fas fa-play"></i>
                            Watch Demo
                        </a>
                    </div>

                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">20M+</div>
                            <div>Active Users</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">120+</div>
                            <div>Countries</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">80+</div>
                            <div>Integrations</div>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="mp4/logo_2.gif" alt="Professional in green sweater">
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <section class="reasons">
            <h2 class="section-title">3 Reasons To Choose Us</h2>
            <div class="reason-cards">
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Get help anytime you need with our round-the-clock support team</p>
                    <a href="#">Read More →</a>
                </div>
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <h3>Top Guide</h3>
                    <p>Access comprehensive guides and resources for better results</p>
                    <a href="#">Read More →</a>
                </div>
                <div class="reason-card">
                    <div class="reason-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Best Course</h3>
                    <p>Learn from industry experts with our curated courses</p>
                    <a href="#">Read More →</a>
                </div>
            </div>
        </section>

        <section class="management">
            <h2 class="section-title">Our Leadership</h2>
            <div class="management-team">
                <div class="director-card">
                    <div class="director-image">
                        <img src="director1.jpg" alt="Managing Director">
                    </div>
                    <div class="director-info">
                        <h3>John Anderson</h3>
                        <p class="position">Managing Director</p>
                        <p class="credentials">MBA, Harvard Business School</p>
                        <p class="experience">15+ years in Email Marketing</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>

                <div class="director-card">
                    <div class="director-image">
                        <img src="director2.jpg" alt="Director">
                    </div>
                    <div class="director-info">
                        <h3>Sarah Williams</h3>
                        <p class="position">Director of Operations</p>
                        <p class="credentials">MS in Technology Management</p>
                        <p class="experience">12+ years in Tech Leadership</p>
                        <div class="social-links">
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="steps">
            <h2 class="section-title">Follow These 3 Simple Steps to Join Our Class!</h2>
            <!-- Add steps content here -->
        </section>
    </div>
    <!-- Disclaimer Section -->
    <section class="disclaimer-section">
        <div class="disclaimer-container">
            <h2 class="disclaimer-title">DISCLAIMER</h2>
            
            <div class="disclaimer-content">
                <div class="disclaimer-points">
                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>This is not a easy Money / Get Rich Quick Schemes.</p>
                    </div>
                    
                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>Company offer you value for money products and sole aim of business is sales of the goods.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>R.K.G.(RKGROWOPAL MARKETINGS PVT. LTD.) is not a Ponzi scheme / Pyramid scheme / Chit Fund / Investment Company.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>R.K.G.(RKGROWOPAL) is Direct Selling entity. By buying a product from R.K.G.(RKGROWOPAL), you are only buying product for yourself usage and there is no investment or expectation of any kind of returns from your purchase.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>To become a DISTRIBUTOR, you do not require paying any entry / registration / enrolment / membership fee, cost of sales demonstration equipment and materials or any other fees. Just by purchasing a product from us does not entitle you for any income. To receive income from this business opportunity, firstly you need to become a DISTRIBUTOR of the company by complying with necessary regulations. Your income will solely depend on the sales that you and your team generate. You need to put in the time and effort to see results.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>All incomes / commissions / remunerations are ONLY sales based. There is NO salaried job / employment for R.K.G.(RKGROWOPAL MARKETINGS PVT. LTD.) DISTRIBUTOR.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>DISTRIBUTOR can earn commission only by selling our products.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>The company has the right to change, withdrawal, modify the marketing plan and its terms & condition anytime without any prior notice.</p>
                    </div>

                    <div class="point">
                        <span class="bullet">▶</span>
                        <p>These terms shall be governed by and constructed in accordance with the laws of India without reference to conflict of laws principles and disputes arising in relation hereto shall be subject to the exclusive jurisdiction of the courts at Delhi.</p>
                    </div>
                </div>
                
                <div class="company-website">
                    <a href="https://rkgrowopal.co.in">rkgrowopal.co.in</a>
                </div>
            </div>
            
            <div class="rk-logo">
                <img src="mp4/logo_2.gif" alt="RK Logo">
            </div>
        </div>
    </section>
    

    <!-- Footer Section -->
    <?php include 'footer.php'; ?>
    <?php include 'contact.php'; ?>



    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
</body>
</html> 