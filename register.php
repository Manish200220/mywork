<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Rkgrowopal Marketings</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Keep the same base styles as login.php */
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

        /* Keep all the same styles from login.php and add/modify these: */
        
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
            height: 850px;
            position: relative;
            z-index: 1;
            gap: 0;
            animation: slideFromRight 0.6s ease-out forwards;
        }

        .login-container {
            background: rgba(47, 49, 54, 0.95);
            padding: 40px;
            border-radius: 0 30px 30px 0;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            width: 45%;
            position: relative;
            z-index: 1;
            animation: containerAppear 0.6s ease-out forwards;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(47, 49, 54, 0.95);
            order: 2;
        }

        .video-section {
            width: 55%;
            position: relative;
            overflow: hidden;
            border-radius: 30px 0 0 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            order: 1;
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
        }

        .login-header h1 {
            color: #a4c639;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .login-header p {
            color: #b9bbbe;
            font-size: 16px;
        }

        .form-group label {
            display: flex;
            align-items: center;
            gap: 6px;
            color: #72767d;
            font-size: 11px;
            font-weight: 500;
            text-transform: uppercase;
            margin-bottom: 8px;
            letter-spacing: 0.5px;
        }

        .form-group label i {
            font-size: 12px;
            color: #72767d;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px;
            background: #1e2124;
            border: none;
            border-radius: 4px;
            color: #dcddde;
            font-size: 14px;
            height: 45px;
            transition: all 0.3s ease;
        }

        .input-group {
            position: relative;
            margin-bottom: 16px;
        }

        /* Remove icons from input fields since they're now with labels */
        .input-group i {
            display: none;
        }

        .form-row {
            display: flex;
            gap: 16px;
            margin-bottom: 24px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .form-control:focus {
            outline: none;
            border-color: #a4c639;
            box-shadow: 0 0 0 2px rgba(164, 198, 57, 0.2);
            transform: translateY(-1px);
        }

        .terms-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 16px 0;
            color: #b9bbbe;
            font-size: 12px;
            opacity: 0;
            animation: fadeInUp 0.6s 0.6s ease-out forwards;
        }

        .terms-checkbox input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #a4c639;
        }

        .terms-checkbox label {
            font-size: 12px;
            opacity: 0.9;
        }

        .terms-checkbox a {
            color: #a4c639;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .terms-checkbox a:hover {
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
            animation: fadeInUp 0.6s 0.7s ease-out forwards;
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3);
            height: 45px;
            margin-top: 16px;
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
            animation: fadeInUp 0.6s 0.8s ease-out forwards;
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
            from { opacity: 0; }
            to { opacity: 1; }
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

        @keyframes logoFloat {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
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

            .form-row {
                flex-direction: column;
                gap: 20px;
            }
        }

        .radio-group {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 15px 0;
        }

        .radio-label {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #72767d;
            font-size: 14px;
        }

        .radio-label input[type="radio"] {
            margin: 0;
        }

        .login-header h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #a4c639;
        }

        .form-control {
            margin-bottom: 15px;
        }

        .terms-checkbox {
            margin: 15px 0;
        }

        .login-btn {
            margin-top: 10px;
        }

        .login-link {
            text-align: center;
            margin-top: 20px;
            color: #72767d;
            font-size: 14px;
        }

        .login-link a {
            color: #a4c639;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #8ba830;
            text-decoration: underline;
        }

        /* Keep all other styles from login.php */

        /* Add this new CSS for the radio buttons */
        .position-selector {
            margin: 20px 0;
        }

        .radio-options {
            display: flex;
            justify-content: center;
            gap: 30px;
            background: rgba(255, 255, 255, 0.05);
            padding: 15px;
            border-radius: 8px;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            position: relative;
            padding: 5px;
            transition: all 0.3s ease;
        }

        .radio-option input[type="radio"] {
            display: none;
        }

        .radio-button {
            width: 20px;
            height: 20px;
            border: 2px solid #72767d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .radio-inner {
            width: 0;
            height: 0;
            background: #a4c639;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .radio-label {
            color: #72767d;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        /* Active states */
        .radio-option input[type="radio"]:checked + .radio-button {
            border-color: #a4c639;
            box-shadow: 0 0 10px rgba(164, 198, 57, 0.2);
        }

        .radio-option input[type="radio"]:checked + .radio-button .radio-inner {
            width: 12px;
            height: 12px;
        }

        .radio-option input[type="radio"]:checked ~ .radio-label {
            color: #a4c639;
        }

        /* Hover effects */
        .radio-option:hover .radio-button {
            border-color: #a4c639;
            transform: scale(1.05);
        }

        .radio-option:hover .radio-label {
            color: #a4c639;
        }

        /* Animation for the inner circle */
        @keyframes radioScale {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        .radio-option input[type="radio"]:checked + .radio-button .radio-inner {
            animation: radioScale 0.3s ease-out;
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
                <h1>Register</h1>
                <p>Create your account to get started</p>
            </div>

            <form action="register_process.php" method="POST">
                <div class="form-group">
                    <label><i class="fas fa-user"></i> Sponsor Code</label>
                    <input type="text" id="sponsor_code" name="sponsor_code" class="form-control" required>
                </div>

                <div class="position-selector">
                    <div class="radio-options">
                        <label class="radio-option">
                            <input type="radio" name="position" value="left" required>
                            <div class="radio-button">
                                <div class="radio-inner"></div>
                            </div>
                            <span class="radio-label">EXTREME LEFT</span>
                        </label>
                        
                        <label class="radio-option">
                            <input type="radio" name="position" value="right" required>
                            <div class="radio-button">
                                <div class="radio-inner"></div>
                            </div>
                            <span class="radio-label">EXTREME RIGHT</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label><i class="fas fa-user"></i> Full Name</label>
                    <input type="text" id="fullname" name="fullname" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><i class="fas fa-phone"></i> Mobile Number</label>
                    <input type="tel" id="phone" name="phone" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><i class="fas fa-lock"></i> Password</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <label><i class="fas fa-lock"></i> Confirm Password</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                </div>

                <div class="terms-checkbox">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">I accept the <a href="terms.php">Terms of Use</a> & <a href="privacy.php">Privacy Policy</a></label>
                </div>

                <button type="submit" class="login-btn">Register Now</button>
            </form>

            <div class="register-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </div>

        <div class="video-section">
            <video class="background-video" autoplay muted loop playsinline>
                <source src="mp4/Business Planning (online-video-cutter.com).mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <div class="video-overlay">
                <img src="images/rk2.png" alt="Rkgrowopal Logo" class="logo-animate">
                <h2>Join Rkgrowopal Marketings</h2>
                <p>Start your journey with us today</p>
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