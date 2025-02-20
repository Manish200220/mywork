<?php
require_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Rkgrowopal Marketings pvt.ltd.</title>
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        :root {
            --primary-color: #4CAF50;      /* Main green */
            --primary-dark: #388E3C;       /* Darker green for hover */
            --primary-light: #C8E6C9;      /* Light green for hover backgrounds */
            --text-color: #333333;         /* Dark text */
            --bg-light: #F1F8E9;           /* Very light green background */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: var(--bg-light);
            padding-top: 0;
            margin: 0;
        }

        
        .hero-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            max-width: 100%;
            max-height: none;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
        }

        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0,0,0,0.4), rgba(0,0,0,0.7));
            z-index: 1;
        }

        .hero-section {
            position: relative;
            width: 100%;
            height: 70vh;
            overflow: hidden;
            margin: px auto 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-section.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .slide-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hero-content {
            position: absolute;
            top: 50%;
            left: 15%;
            transform: translateY(-50%);
            width: 50%;
            max-width: 800px;
            text-align: left;
            color: white;
            z-index: 2;
        }

        .welcome-text {
            color: #a4c639;
            font-size: 1.5em;
            font-weight: 500;
            margin-bottom: 15px;
            display: block;
        }

        .hero-content h1 {
            font-size: 3.5em;
            margin-bottom: 15px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.2;
            font-weight: 700;
        }

        .hero-content p {
            font-size: 1.2em;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3);
            line-height: 1.6;
        }

        .join-btn-container {
            position: absolute;
            left: 15%;
            bottom: 15%;
            z-index: 3;
        }

        .join-btn {
            position: relative;
            padding: 12px 30px;
            font-size: 1em;
            background: linear-gradient(45deg, #88a52f, #319a0f);
            border: none;
            border-radius: 25px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 
                0 4px 15px rgba(76, 175, 80, 0.3),
                0 0 0 2px rgba(76, 175, 80, 0.1),
                inset 0 -2px 5px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            z-index: 1;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        /* Enhanced Hover Effect */
        .join-btn:hover {
            transform: translateY(-3px);
            background: linear-gradient(45deg, #45a049, #4CAF50);
            box-shadow: 
                0 6px 20px rgba(76, 175, 80, 0.4),
                0 0 0 3px rgba(76, 175, 80, 0.2),
                0 0 20px rgba(76, 175, 80, 0.4),
                inset 0 -2px 5px rgba(0, 0, 0, 0.1);
            color: #ffffff;
        }

        /* Active State */
        .join-btn:active {
            transform: translateY(-1px);
            box-shadow: 
                0 2px 10px rgba(76, 175, 80, 0.3),
                0 0 0 2px rgba(76, 175, 80, 0.2),
                inset 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        /* Enhanced Pulse Animation */
        @keyframes enhancedPulse {
            0% {
                box-shadow: 
                    0 4px 15px rgba(76, 175, 80, 0.3),
                    0 0 0 2px rgba(76, 175, 80, 0.1),
                    inset 0 -2px 5px rgba(0, 0, 0, 0.2);
            }
            50% {
                box-shadow: 
                    0 8px 25px rgba(76, 175, 80, 0.4),
                    0 0 0 4px rgba(76, 175, 80, 0.2),
                    inset 0 -2px 5px rgba(0, 0, 0, 0.2);
            }
            100% {
                box-shadow: 
                    0 4px 15px rgba(76, 175, 80, 0.3),
                    0 0 0 2px rgba(76, 175, 80, 0.1),
                    inset 0 -2px 5px rgba(0, 0, 0, 0.2);
            }
        }

        .join-btn {
            animation: enhancedPulse 2s infinite;
        }

        /* Shine Effect Enhancement */
        .join-btn::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(
                45deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transform: rotate(45deg);
            transition: 0.5s;
            z-index: -1;
        }

        .join-btn:hover::before {
            animation: shine 1.5s infinite;
        }

        @keyframes shine {
            0% {
                left: -50%;
            }
            100% {
                left: 150%;
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* News Section Styles */
        .news-section {
            padding: 40px 0;
            background: linear-gradient(135deg, #0a0a0a 0%, #1a1a2e 100%);
            overflow: hidden;
            position: relative;
        }

        /* Stars Background */
        .news-section::before {
            content: '';
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            box-shadow: 
                0 0 20px white,
                50vw 20vh 1px #fff,
                80vw 40vh 2px #fff,
                20vw 30vh 1px #fff,
                10vw 60vh 1.5px #fff,
                30vw 70vh 1px #fff,
                40vw 50vh 2px #fff,
                60vw 30vh 1px #fff,
                70vw 60vh 1.5px #fff,
                90vw 40vh 1px #fff,
                15vw 45vh 1.5px #fff,
                35vw 65vh 1px #fff,
                45vw 25vh 2px #fff,
                65vw 75vh 1px #fff,
                75vw 35vh 1.5px #fff,
                95vw 55vh 1px #fff;
            animation: twinkle 4s infinite linear;
        }

        .news-section::after {
            content: '';
            position: absolute;
            width: 2px;
            height: 2px;
            background: white;
            box-shadow: 
                0 0 20px white,
                45vw 25vh 1px #fff,
                75vw 45vh 2px #fff,
                15vw 35vh 1px #fff,
                5vw 65vh 1.5px #fff,
                25vw 75vh 1px #fff,
                35vw 55vh 2px #fff,
                55vw 35vh 1px #fff,
                65vw 65vh 1.5px #fff,
                85vw 45vh 1px #fff,
                10vw 50vh 1.5px #fff,
                30vw 70vh 1px #fff,
                40vw 30vh 2px #fff,
                60vw 80vh 1px #fff;
            animation: twinkle 5s infinite linear;
            animation-delay: -2s;
        }

        /* Shooting Stars */
        .shooting-star {
            position: absolute;
            width: 150px;
            height: 2px;
            background: linear-gradient(90deg, rgba(255, 255, 255, 0.8), transparent);
            animation: shooting 3s infinite linear;
            opacity: 0;
            z-index: 1;
        }

        .shooting-star:nth-child(1) {
            top: 20%;
            left: -10%;
            animation-delay: 0s;
        }

        .shooting-star:nth-child(2) {
            top: 40%;
            left: -10%;
            animation-delay: 1.5s;
        }

        .shooting-star:nth-child(3) {
            top: 60%;
            left: -10%;
            animation-delay: 3s;
        }

        @keyframes twinkle {
            0% { opacity: 0.3; }
            50% { opacity: 0.8; }
            100% { opacity: 0.3; }
        }

        @keyframes shooting {
            0% {
                transform: translateX(-100%) rotate(-45deg);
                opacity: 1;
            }
            100% {
                transform: translateX(200%) rotate(-45deg);
                opacity: 0;
            }
        }

        .news-container {
            position: relative;
            z-index: 2;
            width: 100%;
            max-width: 1500px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .news-card {
            background: rgba(10, 10, 20, 0.6);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
            height: auto;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            transition: all 0.4s ease;
            position: relative;
        }

        .news-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.1), transparent);
            pointer-events: none;
        }

        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 
                0 8px 25px rgba(0, 0, 0, 0.3),
                0 0 0 1px rgba(255, 255, 255, 0.1);
            background: rgba(15, 15, 30, 0.7);
        }

        .news-content {
            width: 100%;
            padding: 20px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            color: white;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        }

        .news-content h3 {
            color: white;
            font-size: 2em;
            font-weight: 600;
            line-height: 1.3;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            letter-spacing: -0.3px;
        }

        .news-content p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 25px;
            opacity: 0.9;
            max-width: 800px;
        }

        .read-more {
            align-self: flex-start;
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.9em;
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 8px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
        }

        .read-more:hover {
            transform: translateX(5px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        @media (max-width: 1200px) {
            .news-container {
                padding: 0 20px;
            }
            
            .news-content {
                padding: 35px 40px;
            }
        }

        @media (max-width: 768px) {
            .news-section {
                padding: 30px 0;
            }

            .news-container {
                padding: 0 15px;
            }

            .news-content {
                padding: 30px 25px;
            }

            .news-content h3 {
                font-size: 1.6em;
                margin-bottom: 15px;
            }

            .news-content p {
                font-size: 1em;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .news-content {
                padding: 25px 20px;
            }

            .news-content h3 {
                font-size: 1.4em;
            }
        }

        /* Numbers Section Styles */
        .numbers-section {
            position: relative;
            padding: 60px 20px;
            color: white;
            overflow: hidden;
        }

        /* Fixed background container */
        .numbers-bg-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: -1;
            overflow: hidden;
        }
        
        .numbers-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out, transform 1.2s ease-in-out;
            background-size: cover;
            background-position: center;
            transform: scale(1.1);
        }
        
        .numbers-bg.active {
            opacity: 1;
            transform: scale(1);
        }
        
        .numbers-bg.next {
            opacity: 0;
            transform: scale(1.1);
        }

        .numbers-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        radial-gradient(circle at center, rgba(76, 175, 80, 0.1) 0%, rgba(0, 0, 0, 0.3) 100%);
            z-index: 1;
        }

        .numbers-container {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .number-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 30px;
            padding: 40px 30px;
            text-align: center;
            transition: all 0.4s ease;
            transform: translateY(30px);
            opacity: 0;
            box-shadow: 0 15px 35px #343a404f;
        }

        .number-card.animate {
            transform: translateY(0);
            opacity: 1;
        }

        .number-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }

        .number-card i {
            font-size: 3.5em;
            margin-bottom: 25px;
            background: linear-gradient(45deg, #4CAF50, #81C784);
            background-clip: text;
            -webkit-text-fill-color: transparent;
            filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.3));
        }

        .counter {
            font-size: 4em;
            font-weight: 700;
            margin-bottom: 15px;
            background: linear-gradient(45deg, #a4c639, #a4c639);
            background-clip: text;
            -webkit-text-fill-color: transparent;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            font-family: 'Arial', sans-serif;
        }

        .number-card h3 {
            font-size: 1.8em;
            margin-bottom: 15px;
            color: #4CAF50;
            font-weight: 600;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .number-card p {
            font-size: 1.1em;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
            margin: 0;
        }

        @media (max-width: 768px) {
            .numbers-section {
                padding: 60px 20px;
            }
            
            .number-card {
                padding: 30px 20px;
            }
            
            .counter {
                font-size: 3em;
            }
            
            .number-card h3 {
                font-size: 1.5em;
            }
            
            .number-card p {
                font-size: 1em;
            }
        }

        @keyframes countUp {
            from {
                transform: translateY(20px);
                opacity: 0;
            }
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .counter.animate {
            animation: countUp 1s ease forwards;
        }

        /* Callback Form Section Styles */
        .callback-section {
            background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 100%);
            padding: 80px 20px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .callback-section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('path/to/pattern.png') repeat;
            opacity: 0.03;
            pointer-events: none;
        }

        .callback-wrapper {
            width: 100%;
            max-width: 580px;
            position: relative;
        }

        .callback-container {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .header-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #a4c639 0%, #8ba830 100%);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            box-shadow: 0 10px 25px rgba(164, 198, 57, 0.3);
        }

        .header-icon i {
            font-size: 32px;
            color: white;
        }

        .form-header h2 {
            color: white;
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        .form-header p {
            color: rgba(255, 255, 255, 0.7);
            font-size: 1.1em;
        }

        .form-row {
            margin-bottom: 25px;
        }

        .input-group {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .input-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-icon i {
            color: #a4c639;
            font-size: 18px;
        }

        .input-wrapper {
            flex: 1;
            position: relative;
        }

        .input-wrapper input,
        .input-wrapper select,
        .input-wrapper textarea {
            width: 100%;
            background: rgba(255, 255, 255, 0.05);
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .input-wrapper label {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.5);
            pointer-events: none;
            transition: all 0.3s ease;
        }

        .input-wrapper input:focus ~ label,
        .input-wrapper input:valid ~ label,
        .input-wrapper textarea:focus ~ label,
        .input-wrapper textarea:valid ~ label {
            top: -20px;
            left: 0;
            font-size: 14px;
            color: #a4c639;
        }

        .input-border {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: #a4c639;
            transition: all 0.3s ease;
        }

        .input-wrapper input:focus ~ .input-border,
        .input-wrapper textarea:focus ~ .input-border {
            width: 100%;
        }

        .submit-btn {
            width: 100%;
            background: linear-gradient(135deg, #a4c639 0%, #8ba830 100%);
            border: none;
            padding: 16px;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-content {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: white;
            font-size: 18px;
            font-weight: 600;
        }

        .btn-icon {
            width: 30px;
            height: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(164, 198, 57, 0.4);
        }

        .submit-btn:hover .btn-icon {
            transform: translateX(5px);
        }

        .form-footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 30px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 8px;
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }

        .info-item i {
            color: #a4c639;
        }

        @media (max-width: 768px) {
            .callback-container {
                padding: 30px 20px;
            }

            .form-header h2 {
                font-size: 2em;
            }

            .contact-info {
                flex-direction: column;
                align-items: center;
                gap: 15px;
            }
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

            .section-header h2 {
                font-size: 2em;
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

        /* Update Header Info Styles */
        .header-info {
            position: fixed;
            top: 5px;
            right: 40px;
                display: flex;
                flex-direction: column;
            gap: 8px;
            color: rgba(255, 255, 255, 0.9);
            font-size: 13px;
            z-index: 1001;
            transition: transform 0.3s ease;
        }

        /* Add classes for header info visibility */
        .header-info.header-hidden {
            transform: translateY(-100%);
        }

        .header-info.header-visible {
            transform: translateY(0);
        }


        /* Advertisement Section Styles */
        .advertisement-section {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            padding: 80px 20px;
        }

        .parallax-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)),
                        url('images/6.jpg') center/cover fixed;
            z-index: -1;
        }

        .ad-container {
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
        }

        .section-title {
            text-align: center;
            color: #fff;
            font-size: 2.8em;
            margin-bottom: 50px;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        
        .quotes-slider {
            margin-top: 30px;
            padding: 20px;
            background: rgba(40, 167, 69, 0.05);
            border-radius: 10px;
            position: relative;
        }

        .numbers-title {
            text-align: center;
            margin-bottom: 40px;
            color: white;
        }

        .numbers-title h2 {
            font-size: 2.5em;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .numbers-title p {
            font-size: 1.1em;
            color: rgba(255, 255, 255, 0.8);
        }

        .numbers-container {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .number-card {
            background: rgb(13 22 16 / 60%);
            border-radius: 15px;
            padding: 20px 15px;
            text-align: center;
        }

        .counter {
            font-size: 2.5em;
            font-weight: 700;
            margin-bottom: 5px;
            color: #333;
        }

        .number-card h3 {
            font-size: 0.9em;
            color: #dee2e6;
            font-weight: 400;
        }

        @media (max-width: 992px) {
            .numbers-container {
                grid-template-columns: repeat(3, 1fr);
            }
        }

        @media (max-width: 768px) {
            .numbers-container {
                grid-template-columns: repeat(2, 1fr);
            }
            .numbers-title h2 {
                font-size: 2em;
            }
            .numbers-title p {
                font-size: 1em;
            }
        }

        @media (max-width: 480px) {
            .numbers-container {
                grid-template-columns: 1fr;
            }
        }

        .serve-with {
            margin-bottom: 30px;
        }

        .serve-with p {
            color: #333;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .serve-items {
            display: flex;
            gap: 15px; /* Reduce gap between items */
        }

        .serve-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .serve-item img {
            width: 35px; /* Reduce icon size */
            height: 35px;
            object-fit: contain;
        }

        .serve-item span {
            font-size: 0.8em;
            color: #666;
        }

        .quantity-section {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .view-details-btn {
            background: #a4c639;
            color: white;
            border: none;
            padding: 15px 35px;
            border-radius: 8px;
            cursor: pointer;
            font-weight: 600;
            font-size: 1em;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            display: flex;
            align-items: center;
            gap: 10px;
            text-transform: uppercase;
            box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3),
                      inset 0 2px 10px rgba(255, 255, 255, 0.2),
                      0 0 20px rgba(164, 198, 57, 0.1);
            border: 2px solid transparent;
            background: linear-gradient(145deg, #a4c639, #95b434);
        }

        .view-details-btn:hover {
            background: linear-gradient(145deg, #95b434, #8ba830);
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(164, 198, 57, 0.4),
                      inset 0 2px 15px rgba(255, 255, 255, 0.3),
                      0 0 30px rgba(164, 198, 57, 0.2);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .view-details-btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3),
                      inset 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        @keyframes buttonPulse {
            0% { 
                box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3),
                          inset 0 2px 10px rgba(255, 255, 255, 0.2),
                          0 0 20px rgba(164, 198, 57, 0.1);
            }
            50% { 
                box-shadow: 0 8px 25px rgba(164, 198, 57, 0.5),
                          inset 0 2px 15px rgba(255, 255, 255, 0.3),
                          0 0 30px rgba(164, 198, 57, 0.3);
            }
            100% { 
                box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3),
                          inset 0 2px 10px rgba(255, 255, 255, 0.2),
                          0 0 20px rgba(164, 198, 57, 0.1);
            }
        }

        .view-details-btn:hover {
            animation: buttonPulse 2s infinite;
        }

        .view-details-btn span {
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .view-details-btn:hover span {
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.4);
        }

        .main-image-container {
            width: 250px; /* Reduce image container size */
            height: 250px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            backdrop-filter: blur(5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .main-product-image {
            width: 80%;
            height: auto;
            object-fit: contain;
            animation: float 3s ease-in-out infinite;
        }

        .side-images {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .side-image {
            width: 45px; /* Reduce side image size */
            height: 45px;
            object-fit: contain;
            background: white;
            padding: 8px;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .side-image:hover {
            transform: scale(1.1);
            box-shadow: 0 8px 25px rgba(164, 198, 57, 0.2);
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .product-left {
                padding: 20px;
            }

            .product-right {
                padding: 20px;
            }

            .main-image-container {
                width: 200px;
                height: 200px;
            }

            .product-header h3 {
                font-size: 1.5em;
            }
        }

        .product-section {
            position: relative;
            overflow: hidden;
        }

        .product-slider {
            overflow: hidden;
        }

        .product-wrapper {
            display: flex;
            transition: transform 0.5s ease;
            gap: 10px;
        }

        .product-card {
            flex: 0 0 100%;
            background: white;
            border-radius: 20px;
            display: flex;
            overflow: hidden;
            box-shadow: -9px 10px 20px 0px #3c4f00;
            animation: fadeInUp 0.8s ease forwards;
            margin: 0 5px;
        }

        .product-nav-button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 45px;
            height: 45px;
            background: #a4c639;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(164, 198, 57, 0.3);
            overflow: hidden;
            transition: all 0.3s ease;
            z-index: 10;
            position: fixed;
        }

        .nav-prev {
            left: 20px;
        }

        .nav-next {
            right: 5px;
        }

        .product-nav-button:hover {
            background: #8ba830;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 20px rgba(164, 198, 57, 0.4);
        }

        .product-nav-button:active {
            transform: translateY(-50%) scale(0.95);
            box-shadow: 0 3px 10px rgba(164, 198, 57, 0.2);
        }

        .product-nav-button i {
            color: white;
            font-size: 18px;
            transition: transform 0.3s ease;
        }

        .nav-prev:hover i {
            transform: translateX(-3px);
        }

        .nav-next:hover i {
            transform: translateX(3px);
        }

        .product-prev,
        .product-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: #a4c639;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 12px rgba(164, 198, 57, 0.25);
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 10;
        }

        .product-prev i,
        .product-next i {
            color: #ffffff;
            font-size: 16px;
            transition: transform 0.3s ease;
        }

        .product-prev {
            left: 5px;
        }

        .product-next {
            right: 5px;
        }

        .product-prev:hover,
        .product-next:hover {
            background: #8ba830;
            transform: translateY(-50%) scale(1.1);
            box-shadow: 0 6px 15px rgba(164, 198, 57, 0.3);
        }

        .product-prev:active,
        .product-next:active {
            transform: translateY(-50%) scale(0.95);
            box-shadow: 0 2px 8px rgba(164, 198, 57, 0.2);
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(164, 198, 57, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(164, 198, 57, 0); }
            100% { box-shadow: 0 0 0 0 rgba(164, 198, 57, 0); }
        }
            
      
        /* Numbers Section Title Styles */
        .numbers-title {
            position: relative;
            text-align: center;
            margin-bottom: 50px;
            z-index: 2;
        }
        
        .numbers-title h2 {
            font-size: 3.5em;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            margin-bottom: 15px;
            letter-spacing: 1px;
        }
        
        .numbers-title p {
            font-size: 1.2em;
            color: rgba(255, 255, 255, 0.9);
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
        }

       
        /* Popup Styles */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .popup.active {
            display: flex;
            opacity: 1;
        }

        .popup-content {
            background: white;
            width: 90%;
            max-width: 600px;
            margin: auto;
            padding: 30px;
            border-radius: 15px;
            position: relative;
            transform: translateY(-20px);
            transition: transform 0.3s ease;
        }

        .popup.active .popup-content {
            transform: translateY(0);
        }

        .close-popup {
            position: absolute;
            right: 20px;
            top: 15px;
            font-size: 28px;
            cursor: pointer;
            color: #666;
            transition: color 0.3s ease;
        }

        .close-popup:hover {
            color: #333;
        }

        .popup h2 {
            color: #333;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .popup-body {
            color: #666;
            line-height: 1.6;
        }

        .popup-body p {
            margin-bottom: 15px;
        }

        .popup-body ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        .popup-body li {
            margin-bottom: 8px;
        }

        .read-more {
            background: none;
            border: none;
            color: #a4c639;
            cursor: pointer;
            font-weight: 500;
            padding: 5px 0;
            transition: color 0.3s ease;
        }

        .read-more:hover {
            color: #8ba830;
        }

        /* Creative Read Story Button Styles */
        .read-story-btn {
            position: relative;
            display: inline-block;
            cursor: pointer;
            outline: none;
            border: 0;
            vertical-align: middle;
            text-decoration: none;
            background: transparent;
            padding: 0;
            font-size: inherit;
            font-family: inherit;
            margin-top: 20px;
        }

        .read-story-btn .circle {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: relative;
            display: block;
            margin: 0;
            width: 3rem;
            height: 3rem;
            background: #a4c639;
            border-radius: 1.625rem;
        }

        .read-story-btn .circle .icon {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            bottom: 0;
            margin: auto;
            background: #fff;
        }

        .read-story-btn .circle .icon.arrow {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            left: 0.625rem;
            width: 1.125rem;
            height: 0.125rem;
            background: none;
        }

        .read-story-btn .circle .icon.arrow::before {
            position: absolute;
            content: "";
            top: -0.29rem;
            right: 0.0625rem;
            width: 0.625rem;
            height: 0.625rem;
            border-top: 0.125rem solid #fff;
            border-right: 0.125rem solid #fff;
            transform: rotate(45deg);
        }

        .read-story-btn .button-text {
            transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            padding: 0.75rem 0;
            margin: 0 0 0 1.85rem;
            color: #282936;
            font-weight: 600;
            line-height: 1.6;
            text-align: center;
            text-transform: uppercase;
            opacity: 0;
            transform: translateX(20px);
        }

        .read-story-btn:hover .circle {
            width: 100%;
        }

        .read-story-btn:hover .circle .icon.arrow {
            background: #fff;
            transform: translate(1rem, 0);
        }

        .read-story-btn:hover .button-text {
            color: #fff;
            opacity: 1;
            transform: translateX(0);
        }

        @media (max-width: 768px) {
            .read-story-btn {
                width: 200px;
            }
        }

        /* Update the contact button HTML */
        .floating-contact {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        .contact-button {
            width: 60px;
            height: 60px;
            background: #a4c639;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            position: relative;
        }

        .icon-wrapper {
            width: 30px;
            height: 30px;
            position: relative;
        }

        .icon-top {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 15px;
            background: white;
            border-radius: 15px 15px 0 0;
        }

        .icon-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 15px;
            background: white;
            border-radius: 0 0 15px 15px;
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?>

    <section class="hero-section">
        <div class="slide-container">
            <div class="slide active">
                <img src="images/1.jpg" alt="Network Marketing" class="hero-image">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <span class="welcome-text">WELCOME TO</span>
                    <h1>RKGROWOPAL MARKETING PVT. LTD. </h1>
                    <p>To the most distinguished business family which provides a long term business opportunity.</p>
            </div>
                </div>
            <div class="slide">
                <img src="images/background/22.jpg" alt="Business Growth" class="hero-image">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                <span class="welcome-text">WELCOME TO</span>
                    <h1>RKGROWOPAL MARKETING PVT. LTD.</h1>
                    <p>To the most distinguished business family which provides a long term business opportunity.</p>
            </div>
            </div>
            <div class="slide">
                <img src="images/3.jpg" alt="Team Success" class="hero-image">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                <span class="welcome-text">WELCOME TO</span>
                    <h1>RKGROWOPAL MARKETING PVT. LTD.</h1>
                    <p>To the most distinguished business family which provides a long term business opportunity.</p>
        </div>
    </div>
        </div>
        <div class="join-btn-container">
            <button class="join-btn" onclick="openRegister()">Join Now</button>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="shooting-star"></div>
        <div class="shooting-star"></div>
        <div class="shooting-star"></div>
        <div class="news-container">
            <div class="news-card">
                <div class="news-content">
                    <h3>Latest News</h3>
                    <p>Discover how our innovative approach to network marketing...</p>
                    <button class="read-story-btn" onclick="openNewsPopup()">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">Read Full Story</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- News Popup -->
    <div id="newsPopup" class="popup">
        <div class="popup-content">
            <span class="close-popup" onclick="closeNewsPopup()">&times;</span>
            <h2>Latest News</h2>
            <div class="popup-body">
                <p>Discover how our innovative approach to network marketing is transforming lives across India. At RKGROWOPAL Marketing Pvt. Ltd., we're proud to announce unprecedented growth in our community, with over 10,000 new associates joining our family in the past quarter.</p>
                <p>Key Highlights:</p>
                <ul>
                    <li>Record-breaking business expansion in 15 new cities</li>
                    <li>Launch of revolutionary new product lines</li>
                    <li>Enhanced commission structure for our associates</li>
                    <li>New digital tools for seamless business operations</li>
                </ul>
                <p>Our commitment to excellence and sustainable growth continues to set new industry standards, making us the preferred choice for aspiring entrepreneurs nationwide.</p>
            </div>
        </div>
    </div>

    <!-- Numbers Section -->
    <section class="numbers-section">
        <div class="numbers-bg-wrapper">
            <div class="numbers-bg active" style="background-image: url('images/background/6.jpg')"></div>
            <div class="numbers-bg" style="background-image: url('images/background/33 (1).jpg')"></div>
            <div class="numbers-bg" style="background-image: url('images/background/55.jpg')"></div>
            <div class="numbers-bg" style="background-image: url('images/background/66.jpg')"></div>
        </div>
        <div class="numbers-title">
            <h2>Our statistics</h2>
            <p>We help you to unleash the power within your business</p>
        </div>
        <div class="numbers-container">
            <div class="number-card">
                <div class="counter" data-target="260">260+</div>
                <h3>Expert Consultants</h3>
            </div>
            
            <div class="number-card">
                <div class="counter" data-target="975">975+</div>
                <h3>Active Clients</h3>
            </div>
            
            <div class="number-card">
                <div class="counter" data-target="724">724+</div>
                <h3>Projects Delivered</h3>
            </div>
            
            <div class="number-card">
                <div class="counter" data-target="89">89+</div>
                <h3>Orders in Queue</h3>
            </div>

            <div class="number-card">
                <div class="counter" data-target="95">95%</div>
                <h3>Issue Resolved</h3>
            </div>
        </div>
    </section>

    
    <!-- Include Product Section -->
     
    <?php include 'product_section.php'; ?>

    <!-- Include Feature Section -->
    <?php include 'featured_products.php'; ?>

    <!-- Include Who We Are Section -->
    <?php include 'who_we_are_section.php'; ?>


    <!-- Callback Form Section -->
    <section class="callback-section">
        <div class="callback-wrapper">
            <div class="callback-container">
                <div class="form-header">
                    <div class="header-icon">
                        <i class="fas fa-headset"></i>
                        </div>
                    <h2>Let's Connect</h2>
                    <p>We'll call you back within 24 hours</p>
                    </div>
                
                <form class="callback-form" action="process_callback.php" method="POST">
                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <div class="input-wrapper">
                                <input type="text" name="name" required>
                                <label>Your Name</label>
                                <div class="input-border"></div>
                            </div>
                            </div>
                        </div>

                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-envelope"></i>
                    </div>
                            <div class="input-wrapper">
                                <input type="email" name="email" required>
                                <label>Your Email</label>
                                <div class="input-border"></div>
                        </div>
                    </div>
                </div>

                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-phone-alt"></i>
                    </div>
                            <div class="input-wrapper">
                                <input type="tel" name="phone" required>
                                <label>Phone Number</label>
                                <div class="input-border"></div>
                    </div>
                </div>
            </div>

                    <div class="form-row">
                        <div class="input-group">
                            <div class="input-icon">
                                <i class="fas fa-comment-alt"></i>
                    </div>
                            <div class="input-wrapper">
                                <textarea name="message" rows="3" required></textarea>
                                <label>Your Message</label>
                                <div class="input-border"></div>
                    </div>
                    </div>
                    </div>

                    <button type="submit" class="submit-btn">
                        <span class="btn-content">
                            <span class="btn-text">Request Callback</span>
                            <span class="btn-icon">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </span>
                    </button>
                </form>

                <div class="form-footer">
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <span>24/7 Support Available</span>
                    </div>
                        <div class="info-item">
                            <i class="fas fa-shield-alt"></i>
                            <span>Your data is secure with us</span>
                </div>
                </div>
                </div>
                </div>
            </div>
    </section>

    <?php include 'footer.php'; ?>

    <?php include 'contact.php'; ?>

    <script>
        // Simplified Slide Animation
        document.addEventListener('DOMContentLoaded', () => {
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;

            function nextSlide() {
                // Remove active from current slide
                slides[currentSlide].classList.remove('active');
                slides[currentSlide].classList.add('prev');
                
                // Update current slide index
                currentSlide = (currentSlide + 1) % slides.length;
                
                // Activate next slide
                slides[currentSlide].classList.remove('prev');
                slides[currentSlide].classList.add('active');

                // Clean up
                setTimeout(() => {
                    slides.forEach((slide, index) => {
                        if (index !== currentSlide) {
                            slide.classList.remove('prev');
                        }
                    });
                }, 800);
            }

            // Initialize first slide
            slides[0].classList.add('active');

            // Change slide every 5 seconds
            setInterval(nextSlide, 5000);
        });

        // Number Counter Animation
        const counters = document.querySelectorAll('.counter');
        const speed = 200; // The lower the number, the faster the animation

        function animateCounter(counter) {
            const target = +counter.getAttribute('data-target');
            let count = 0;
            
            const updateCount = () => {
                const increment = target / speed;
                
                if(count < target) {
                    count += increment;
                    counter.innerText = Math.ceil(count);
                    setTimeout(updateCount, 1);
                } else {
                    counter.innerText = target;
                }
            }
            
            updateCount();
        }

        // Start animation when element is in view
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    animateCounter(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        counters.forEach(counter => {
            observer.observe(counter);
        });

        const menuToggle = document.getElementById('menuToggle');
        const navMenu = document.getElementById('navMenu');

        menuToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
            menuToggle.innerHTML = navMenu.classList.contains('active') 
                ? '<i class="fas fa-times"></i>' 
                : '<i class="fas fa-bars"></i>';
        });

        // Close menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!navMenu.contains(e.target) && !menuToggle.contains(e.target)) {
                navMenu.classList.remove('active');
                menuToggle.innerHTML = '<i class="fas fa-bars"></i>';
            }
        });

        // Scroll-based animations
        window.addEventListener('scroll', () => {
            const slides = document.querySelectorAll('.gallery-slide');
            const scrollPosition = window.scrollY;

            slides.forEach(slide => {
                if (slide.style.display !== 'none') {
                    // Parallax effect
                    const offset = scrollPosition * 0.4;
                    slide.querySelector('img').style.setProperty('--scroll-offset', `${offset}px`);
                    slide.classList.add('parallax');

                    // Text animations
                    const slideText = slide.querySelector('.slide-text');
                    if (scrollPosition > 100) {
                        slideText.classList.add('animate');
                    }
                }
            });
        });

        // Intersection Observer for slide animations
        const slideObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.gallery-slide').forEach(slide => {
            slideObserver.observe(slide);
        });

        // Function to handle join button click with animation
        function openRegister() {
            // Add fade-out animation to current page
            document.body.style.animation = 'fadeOut 0.5s forwards';
            
            // Redirect to register page after animation
            setTimeout(() => {
                window.location.href = 'register.php';
            }, 400);
        }

        // Add fade animations to style section
        const style = document.createElement('style');
        style.textContent = `
            @keyframes fadeOut {
                from {
                    opacity: 1;
                    transform: translateY(0);
                }
                to {
                    opacity: 0;
                    transform: translateY(-20px);
                }
            }

            body {
                animation: fadeIn 0.5s ease-out;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }
                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        `;
        document.head.appendChild(style);

        // Date Update Only
        function updateDate() {
            const now = new Date();
            
            // Update Date
            const dateElement = document.getElementById('date');
            dateElement.textContent = now.toLocaleDateString('en-US', { 
                weekday: 'short',
                year: 'numeric', 
                month: 'short', 
                day: 'numeric' 
            });
        }

        // Update immediately and then every minute
        updateDate();
        setInterval(updateDate, 60000);

        // Header and Header Info Scroll Animation
        let lastScroll = 0;
        const header = document.querySelector('.header');
        const headerInfo = document.querySelector('.header-info');
        const scrollThreshold = 100;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            
            // Add transparency based on scroll position
            if (currentScroll > scrollThreshold) {
                header.classList.add('header-transparent');
            } else {
                header.classList.remove('header-transparent');
            }

            // Hide/show header and header info based on scroll direction
            if (currentScroll > lastScroll && currentScroll > 200) {
                // Scrolling down & past threshold
                header.classList.add('header-hidden');
                header.classList.remove('header-visible');
                headerInfo.classList.add('header-hidden');
                headerInfo.classList.remove('header-visible');
            } else {
                // Scrolling up or at top
                header.classList.remove('header-hidden');
                header.classList.add('header-visible');
                headerInfo.classList.remove('header-hidden');
                headerInfo.classList.add('header-visible');
            }

            lastScroll = currentScroll;
        });

        // Hero Section Scroll Animation
        document.addEventListener('DOMContentLoaded', () => {
            const heroSection = document.querySelector('.hero-section');
            
            // Initial check in case the section is already in view
            checkHeroVisibility();

            // Scroll event listener
            window.addEventListener('scroll', () => {
                checkHeroVisibility();
            });

            function checkHeroVisibility() {
                const rect = heroSection.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                
                // If hero section is in viewport
                if (rect.top < windowHeight * 0.75) {
                    heroSection.classList.add('visible');
                } else {
                    heroSection.classList.remove('visible');
                }
            }
        });

        // Add scroll direction detection
        let lastScrollY = window.scrollY;

        const newsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if(entry.isIntersecting) {
                    const scrollDirection = window.scrollY > lastScrollY ? 'down' : 'up';
                    entry.target.classList.add(scrollDirection === 'down' ? 'scroll-down' : 'scroll-up');
                } else {
                    entry.target.classList.remove('scroll-down', 'scroll-up');
                }
                lastScrollY = window.scrollY;
            });
        }, {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        });

        document.querySelectorAll('.news-card').forEach(card => {
            newsObserver.observe(card);
        });

        // Update scroll position tracker
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        // Parallax Effect
        window.addEventListener('scroll', function() {
            const parallax = document.querySelector('.parallax-bg');
            let scrollPosition = window.pageYOffset;
            parallax.style.transform = 'translateY(' + scrollPosition * 0.5 + 'px)';
        });

        // Update scroll position tracker
        window.addEventListener('scroll', () => {
            lastScrollY = window.scrollY;
        });

        document.addEventListener('DOMContentLoaded', function() {
        const productCards = document.querySelectorAll('.product-card');
            
            // Add intersection observer for animation on scroll
            const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = 'slideIn 0.8s ease forwards';
                    }
                });
            });
            
            productCards.forEach(card => {
                observer.observe(card);
            });
            
            // Slider functionality
            const prevBtn = document.querySelector('.product-prev');
            const nextBtn = document.querySelector('.product-next');
            const productWrapper = document.querySelector('.product-wrapper');
            
            let currentIndex = 0;
            
            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSlider();
                }
            });
            
            nextBtn.addEventListener('click', () => {
                if (currentIndex < productCards.length - 1) {
                    currentIndex++;
                    updateSlider();
                }
            });
            
            function updateSlider() {
                const offset = currentIndex * -100;
                productWrapper.style.transform = `translateX(${offset}%)`;
            }
        });

        // Add this to your existing script
        function rotateQuotes() {
            const quotes = document.querySelectorAll('.quote');
            let currentQuote = 0;

            setInterval(() => {
                quotes.forEach(quote => quote.classList.remove('active'));
                currentQuote = (currentQuote + 1) % quotes.length;
                quotes[currentQuote].classList.add('active');
            }, 5000);
        }

        document.addEventListener('DOMContentLoaded', function() {
            rotateQuotes();
            // ... rest of your existing DOMContentLoaded code
        });

        // Add this to your existing script
        document.addEventListener('DOMContentLoaded', () => {
            // Counter animation
            const numberCards = document.querySelectorAll('.number-card');
            const counters = document.querySelectorAll('.counter');
            
            const observerOptions = {
                threshold: 0.2,
                rootMargin: '0px'
            };

            const numberObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('animate');
                        
                        if (entry.target.classList.contains('number-card')) {
                            const counter = entry.target.querySelector('.counter');
                            const target = parseInt(counter.getAttribute('data-target'));
                            const duration = 2000; // 2 seconds
                            const steps = 50;
                            const stepValue = target / steps;
                            let current = 0;
                            
                            const updateCounter = () => {
                                current += stepValue;
                                if (current < target) {
                                    counter.textContent = Math.ceil(current);
                                    setTimeout(updateCounter, duration / steps);
                                } else {
                                    counter.textContent = target;
                                }
                            };
                            
                            counter.classList.add('animate');
                            updateCounter();
                        }
                        
                        numberObserver.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            numberCards.forEach(card => {
                numberObserver.observe(card);
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            let lastScrollTop = 0;
            const newsContainer = document.querySelector('.news-container');
            
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight)
                );
            }

            // Handle scroll events
            window.addEventListener('scroll', function() {
                const st = window.pageYOffset || document.documentElement.scrollTop;
                
                if (isInViewport(newsContainer)) {
                    if (st > lastScrollTop) {
                        // Scrolling down
                        newsContainer.classList.remove('slide-from-left');
                        newsContainer.classList.add('slide-from-right');
                    } else {
                        // Scrolling up
                        newsContainer.classList.remove('slide-from-right');
                        newsContainer.classList.add('slide-from-left');
                        setTimeout(() => {
                            newsContainer.classList.add('active');
                        }, 50);
                    }
                } else {
                    newsContainer.classList.remove('slide-from-right', 'slide-from-left', 'active');
                }
                
                lastScrollTop = st <= 0 ? 0 : st;
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.querySelector('.product-wrapper');
            const prevBtn = document.querySelector('.nav-prev');
            const products = document.querySelectorAll('.product-card');
            
            let currentIndex = 0;
            
            function updateProductDisplay() {
                const offset = currentIndex * -100;
                wrapper.style.transform = `translateX(${offset}%)`;
                
                // Update card opacity
                products.forEach((product, index) => {
                    product.style.opacity = index === currentIndex ? '1' : '0.5';
                });
            }
            
            // Add click handler for navigation
            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateProductDisplay();
                }
            });
            
            // Initialize display
            updateProductDisplay();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const wrapper = document.querySelector('.product-wrapper');
            const navArrow = document.querySelector('.nav-arrow');
            const products = document.querySelectorAll('.product-card');
            
            let currentIndex = 0;
            
            function updateProductDisplay() {
                const offset = currentIndex * -100;
                wrapper.style.transform = `translateX(${offset}%)`;
                
                // Update card opacity
                products.forEach((product, index) => {
                    product.style.opacity = index === currentIndex ? '1' : '0.5';
                });
            }
            
            // Add click handler for arrow button
            navArrow.addEventListener('click', () => {
                if (currentIndex < products.length - 1) {
                    currentIndex++;
                    updateProductDisplay();
                } else {
                    currentIndex = 0;
                    updateProductDisplay();
                }
            });
            
            // Initialize display
            updateProductDisplay();
        });

        // Auto-changing background with scroll fix
        document.addEventListener('DOMContentLoaded', function() {
            const backgrounds = document.querySelectorAll('.numbers-bg');
            let currentBg = 0;
            
            function changeBackground() {
                backgrounds[currentBg].classList.remove('active');
                currentBg = (currentBg + 1) % backgrounds.length;
                backgrounds[currentBg].classList.add('active', 'next');
                
                setTimeout(() => {
                    backgrounds[currentBg].classList.remove('next');
                }, 50);
            }
            
            // Auto change background every 5 seconds
            setInterval(changeBackground, 5000);
            
            // Handle scroll visibility
            function handleScroll() {
                const numbersSection = document.querySelector('.numbers-section');
                const bgWrapper = document.querySelector('.numbers-bg-wrapper');
                const rect = numbersSection.getBoundingClientRect();
                
                if (rect.top <= window.innerHeight && rect.bottom >= 0) {
                    bgWrapper.style.visibility = 'visible';
                    bgWrapper.style.opacity = '1';
                } else {
                    bgWrapper.style.visibility = 'hidden';
                    bgWrapper.style.opacity = '0';
                }
            }
            
            window.addEventListener('scroll', handleScroll);
            handleScroll(); // Initial check
        });

        function openNewsPopup() {
            const popup = document.getElementById('newsPopup');
            document.body.style.overflow = 'hidden';
            popup.classList.add('active');
        }

        function closeNewsPopup() {
            const popup = document.getElementById('newsPopup');
            document.body.style.overflow = '';
            popup.classList.remove('active');
        }

        // Close popup when clicking outside
        document.getElementById('newsPopup').addEventListener('click', function(e) {
            if (e.target === this) {
                closeNewsPopup();
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeNewsPopup();
            }
        });
    </script>
</body>
</html>
