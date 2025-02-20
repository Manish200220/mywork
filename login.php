<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Rkgrowopal Marketings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #1a1a1a;
            padding: 20px;
            position: relative;
            overflow: hidden;
        }

        .home-button {
            position: absolute;
            top: 15px;
            left: 15px;
            z-index: 10;
            background: rgba(164, 198, 57, 0.1);
            color: #a4c639;
            padding: 6px 12px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            border: 1px solid rgba(164, 198, 57, 0.2);
            font-size: 12px;
            gap: 6px;
        }

        .home-button:hover {
            background: rgba(164, 198, 57, 0.2);
            transform: translateY(-2px);
        }

        .home-button i {
            font-size: 16px;
        }

        .page-wrapper {
            display: flex;
            width: 100%;
            max-width: 1200px;
            height: 600px;
            position: relative;
            z-index: 1;
            gap: 0;
            animation: slideFromRight 0.6s ease-out forwards;
        }

        .login-container {
            background: rgba(47, 49, 54, 0.95);
            padding: 40px;
            border-radius: 30px 0 0 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 45%;
            position: relative;
            z-index: 1;
            animation: containerAppear 0.6s ease-out forwards;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .video-section {
            width: 55%;
            position: relative;
            overflow: hidden;
            border-radius: 0 30px 30px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }

        .background-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 2rem;
        }

        .video-overlay img {
            width: 150px;
            height: auto;
            margin-bottom: 2rem;
            animation: logoFloat 3s ease-in-out infinite;
        }

        .video-overlay h2 {
            color: white;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .video-overlay p {
            color: white;
            font-size: 1.2rem;
            max-width: 80%;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
        }

        .shape {
            position: absolute;
            background: rgba(164, 198, 57, 0.1);
            border-radius: 50%;
            animation: float 20s infinite;
        }

        .shape:nth-child(1) {
            width: 500px;
            height: 500px;
            top: -250px;
            left: -250px;
        }

        .shape:nth-child(2) {
            width: 400px;
            height: 400px;
            bottom: -200px;
            right: -200px;
            animation-delay: -10s;
        }

        @keyframes float {
            0% { transform: rotate(0deg) translate(0, 0); }
            50% { transform: rotate(180deg) translate(100px, 100px); }
            100% { transform: rotate(360deg) translate(0, 0); }
        }

        .login-header {
            text-align: center;
            margin-top: 20px;
            margin-bottom: 16px;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .login-header img {
            width: 120px;
            height: auto;
            margin-bottom: 16px;
            animation: logoFloat 3s ease-in-out infinite;
        }

        @keyframes logoFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .login-header h1 {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .login-header p {
            color: #b9bbbe;
            font-size: 16px;
        }

        .form-group {
            margin-bottom: 16px;
            opacity: 0;
            animation: fadeInUp 0.6s ease-out forwards;
        }

        .form-group:nth-child(1) { animation-delay: 0.2s; }
        .form-group:nth-child(2) { animation-delay: 0.3s; }

        .form-group label {
            display: block;
            color: #b9bbbe;
            font-size: 10px;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 4px;
            letter-spacing: 0.5px;
            opacity: 0.8;
        }

        .input-group {
            position: relative;
            margin-bottom: 12px;
        }

        .input-group i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #a4c639;
            font-size: 18px;
            transition: all 0.3s ease;
        }

        .form-control {
            width: 100%;
            padding: 15px 15px 15px 45px;
            background: rgba(32, 34, 37, 0.7);
            border: 2px solid rgba(164, 198, 57, 0.1);
            border-radius: 15px;
            color: #dcddde;
            font-size: 16px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
        }

        .form-control:focus {
            outline: none;
            border-color: #a4c639;
            box-shadow: 0 0 0 3px rgba(164, 198, 57, 0.2);
            transform: translateY(-2px);
        }

        .forgot-password {
            text-align: right;
            margin: -8px 0 16px;
            opacity: 0;
            animation: fadeInUp 0.6s 0.4s ease-out forwards;
        }

        .forgot-password a {
            color: #a4c639;
            font-size: 12px;
            text-decoration: none;
            transition: color 0.3s ease;
            opacity: 0.9;
        }

        .forgot-password a:hover {
            color: #8ba830;
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #a4c639, #b8dc3f);
            border: none;
            border-radius: 15px;
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0;
            animation: fadeInUp 0.6s 0.5s ease-out forwards;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3);
        }

        .login-btn:hover {
            background: linear-gradient(45deg, #8ba830, #a4c639);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(164, 198, 57, 0.4);
        }

        .login-btn::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(255, 255, 255, 0.1),
                transparent
            );
            transform: rotate(45deg);
            animation: buttonShine 2s linear infinite;
        }

        @keyframes buttonShine {
            0% { transform: rotate(45deg) translateX(-200%); }
            100% { transform: rotate(45deg) translateX(200%); }
        }

        .register-link {
            text-align: center;
            margin-top: 20px;
            color: #b9bbbe;
            font-size: 14px;
            opacity: 0;
            animation: fadeInUp 0.6s 0.6s ease-out forwards;
        }

        .register-link a {
            color: #a4c639;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: #8ba830;
            text-decoration: underline;
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .page-wrapper {
                flex-direction: column;
                height: auto;
            }

            .login-container {
                width: 100%;
                border-radius: 5px 5px 0 0;
                order: 2;
            }

            .video-section {
                width: 100%;
                height: 300px;
                border-radius: 0 0 5px 5px;
                order: 1;
            }
        }

        @keyframes slideFromRight {
            0% {
                opacity: 0;
                transform: translateX(100%);
            }
            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes slideToLeft {
            0% {
                opacity: 1;
                transform: translateX(0);
            }
            100% {
                opacity: 0;
                transform: translateX(-100%);
            }
        }
    </style>
</head>
<body>
    <div class="background-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <div class="page-wrapper">
        <div class="login-container">
            <a href="index.php" class="home-button">
                <i class="fas fa-home"></i>
                Home
            </a>
            <div class="login-header">
                <h1>Welcome Back!</h1>
                <p>We're excited to see you again!</p>
            </div>

            <form action="login_process.php" method="POST">
                <div class="form-group">
                    <label for="username">Enter user_id</label>
                    <div class="input-group">
                        <input type="text" id="username" name="username" class="form-control" required>
                        <i class="fas fa-user"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-group">
                        <input type="password" id="password" name="password" class="form-control" required>
                        <i class="fas fa-lock"></i>
                    </div>
                </div>

                <div class="forgot-password">
                    <a href="forgot_password.php">Forgot your password?</a>
                </div>

                <button type="submit" class="login-btn">Log In</button>

                <div class="register-link">
                    <p>Need an account? <a href="register.php" class="slide-link">Register</a></p>
                </div>
            </form>
        </div>

        <div class="video-section">
            <video class="background-video" autoplay muted loop playsinline>
                <source src="mp4/Business Planning (online-video-cutter.com).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay">
                <img src="images/rk2.png" alt="Rkgrowopal Logo" class="logo-animate">
                <h2>Rkgrowopal Marketings</h2>
                <p>Your Trusted Partner in Business Excellence</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add entrance animation when page loads
            const pageWrapper = document.querySelector('.page-wrapper');
            pageWrapper.style.animation = 'slideFromRight 0.6s ease-out forwards';

            // Add click event listeners to sliding links
            const slideLinks = document.querySelectorAll('.slide-link');
            slideLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const href = this.getAttribute('href');
                    
                    // Apply exit animation
                    pageWrapper.style.animation = 'slideToLeft 0.6s ease-out forwards';
                    
                    // Navigate to the new page after animation
                    setTimeout(() => {
                        window.location.href = href;
                    }, 550);
                });
            });
        });
    </script>
</body>
</html>
