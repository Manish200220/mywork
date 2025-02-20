<?php
$isLoggedIn = isset($_SESSION['user_id']);

// Check if cart_icon.php exists before including
if (file_exists('cart_icon.php')) {
    include 'cart_icon.php';
}

$current_page = basename($_SERVER['PHP_SELF']);
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
    
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <style>
        /* Login Section Styles */
        .login-section {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: auto;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            gap: 10px;
            height: 40px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            padding: 5px 10px;
            color: rgba(255, 255, 255, 0.85);
            text-decoration: none;
            border-radius: 20px;
            transition: all 0.3s ease;
            height: 100%;
            white-space: nowrap;
        }

        .search-container {
               margin: 0 5px;
        }

        .search-input-wrapper {
            height: 100%;
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 0 15px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .search-input {
            background: none;
            border: none;
            color: white;
            width: 150px;
            height: 100%;
            font-size: 14px;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .nav-link i {
            margin-right: 5px;
        }
        .datetime-display {
            display: flex;
            justify-content: flex-end;
        }

        .date-display {
            display: flex;
                align-items: center;
            gap: 5px;
            padding: 4px 8px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            backdrop-filter: blur(4px);
        }

        .helpline {
            display: flex;
            align-items: center;
            gap: 5px;
            color: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
            padding: 4px 8px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 4px;
            backdrop-filter: blur(4px);
            border: 1px solid transparent;
            justify-content: flex-end;
        }

        .helpline:hover {
            color: #4CAF50;
            background: rgba(76, 175, 80, 0.1);
            border: 1px solid rgba(76, 175, 80, 0.3);
            transform: translateX(-5px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        }

        .helpline i {
            transition: transform 0.3s ease;
        }

        .helpline:hover i {
            transform: rotate(-12deg);
            color: #4CAF50;
        }

        .header-info i {
            font-size: 14px;
            color: #4CAF50;
        }

        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(76, 175, 80, 0.4);
            }
            70% {
                box-shadow: 0 0 0 10px rgba(76, 175, 80, 0);
            }
            100% {
                box-shadow: 0 0 0 0 rgba(76, 175, 80, 0);
            }
        }

        .helpline {
            animation: pulse 2s infinite;
        }

        .helpline {
            position: relative;
            overflow: hidden;
            padding: 8px 15px;
            border-radius: 20px;
            background: linear-gradient(119deg, #212529 0%, rgb(0 0 0) 100%);
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .helpline::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 200%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent 0%,
                rgba(255, 255, 255, 0.3) 50%,
                transparent 100%
            );
            animation: wave 2s infinite linear;
        }

        @keyframes wave {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(50%);
            }
        }

        .helpline:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(164, 198, 57, 0.3);
        }

        .helpline i {
            margin-right: 8px;
            /* Remove pulse animation from icon */
        }

        /* Replace with a subtle glow animation instead */
        @keyframes glow {
            0% {
                box-shadow: 0 0 5px rgba(164, 198, 57, 0.5);
            }
            50% {
                box-shadow: 0 0 15px rgba(164, 198, 57, 0.8);
            }
            100% {
                box-shadow: 0 0 5px rgba(164, 198, 57, 0.5);
            }
        }

        .helpline:hover {
            transform: translateY(-2px);
            animation: glow 2s infinite;
        }

        /* Header Info Styles */
        .header-info {
            position: absolute;
            left: 20px;
            top: 15px;
            z-index: 1001;
            max-width: 140px;
        }

        .date-display {
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, rgba(164, 198, 57, 0.15), rgba(76, 175, 80, 0.15));
            padding: 4px 10px;
            border-radius: 20px;
            color: #ffffff;
            border: 1px solid rgba(164, 198, 57, 0.2);
            backdrop-filter: blur(8px);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .date-display i {
            margin-right: 8px;
            color: #a4c639;
            font-size: 12px;
            animation: pulse 2s infinite;
            flex-shrink: 0;
        }

        .date-display span {
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .date-display:hover {
            transform: translateY(-2px);
            background: linear-gradient(135deg, rgba(164, 198, 57, 0.2), rgba(76, 175, 80, 0.2));
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-color: rgba(164, 198, 57, 0.3);
        }

        @keyframes pulse {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0.6;
            }
            100% {
                opacity: 1;
            }
        }

        @media (max-width: 768px) {
            .header-info {
                left: 10px;
                top: 10px;
                transform: scale(0.9);
            }
        }

        .header {
            position: fixed;
            top: -100%;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(18, 18, 18, 0.64);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px #212529
        }

        .header.slide-down {
            top: 0;
        }

        .header.slide-up {
            top: -100%;
        }

        /* Add this for smooth appearance */
        @keyframes headerSlideIn {
            0% {
                top: -100%;
            }
            100% {
                top: 0;
            }
        }

        @keyframes headerSlideOut {
            0% {
                top: 0;
            }
            100% {
                top: -100%;
            }
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
            /* Temporary outline for debugging */
            /* outline: 1px solid red; */
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

        .nav-menu a:not(:last-child) {
            margin-right: 2px;
        }

        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: var(--text-color);
            cursor: pointer;
            padding: 8px;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .menu-toggle:hover {
            background: rgba(76, 175, 80, 0.1);
            transform: rotate(180deg);
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

        .user-profile {
            position: relative;
        }

        .avatar-dropdown {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .avatar-dropdown:hover {
            background-color: var(--primary-light);
        }

        .avatar-icon {
            font-size: 24px;
            color: var(--primary-color);
        }

        .username {
            color: #333;
            font-weight: 500;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            top: 100%;
            background-color: white;
            min-width: 160px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            border-radius: 5px;
            z-index: 1;
        }

        .avatar-dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            color: var(--text-color);
            padding: 12px 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .dropdown-content a:hover {
            background-color: var(--primary-light);
        }

        /* Simplified Image Section Styles */
        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            transform: translateX(100%);
            transition: all 0.8s ease;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .slide.active {
            opacity: 1;
            transform: translateX(0);
        }

        .slide.prev {
            transform: translateX(-100%);
            opacity: 0;
        }


         /* Search Bar Styles */
         .search-container {
            margin: 0 10px;
            position: relative;
        }

        .search-form {
            display: flex;
            align-items: center;
        }

        .search-input-wrapper {
            display: flex;
            align-items: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .search-input-wrapper:hover,
        .search-input-wrapper:focus-within {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.2);
        }

        .search-input {
            background: none;
            border: none;
            color: white;
            width: 180px;
            padding: 5px 10px;
            font-size: 14px;
            outline: none;
        }

        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        .search-input-wrapper i {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
        }


        @keyframes wave {
            0% {
                transform: translateX(-50%);
            }
            100% {
                transform: translateX(50%);
            }
        }

        .helpline:hover {
            transform: translateY(-2px);
            animation: glow 2s infinite;
        }

        .helpline i {
            margin-right: 8px;
            /* Remove pulse animation from icon */
        }

        /* Replace with a subtle glow animation instead */
        @keyframes glow {
            0% {
                box-shadow: 0 0 5px rgba(164, 198, 57, 0.5);
            }
            50% {
                box-shadow: 0 0 15px rgba(164, 198, 57, 0.8);
            }
            100% {
                box-shadow: 0 0 5px rgba(164, 198, 57, 0.5);
            }
        }

    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <?php if ($current_page !== 'product_details.php'): ?>
                <div class="header-info">
                    <div class="date-display">
                        <i class="far fa-calendar"></i>
                        <span id="date"></span>
                    </div>
                </div>
            <?php endif; ?>

            <div class="left-section">
                <a href="/" class="logo">
                    <?php
                    $logoPath = "images/rk2.png";
                    if (file_exists($logoPath)) {
                        echo '<img src="' . $logoPath . '" alt="Rkgrowopal Logo" class="logo-image">';
                    } else {
                        echo '<img src="images/products/rk2.png" alt="Rkgrowopal Logo" class="logo-image">';
                    }
                    ?>
                </a>
                
                <button class="menu-toggle" id="menuToggle">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            
            <nav class="nav-menu">
                <a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a>
                <a href="about.php" class="nav-link"><i class="fas fa-info-circle"></i> About us </a>
                <a href="product_page.php" class="nav-link"><i class="fas fa-shopping-cart"></i> Products</a>
                <a href="MEETING SCHEDULE.php" class="nav-link"><i class="fas fa-calendar-alt"></i> Meeting Schedule</a>
                <a href="business_plan.php" class="nav-link"><i class="fas fa-book"></i> Business plan</a>
                <a href="legal-documents.php" class="nav-link"><i class="fas fa-file-alt"></i> Legal Documents</a>
                <a href="contact.php" class="nav-link"><i class="fas fa-envelope"></i> Contact us</a>
            </nav>
           
            <div class="login-section">
                <?php if ($isLoggedIn): ?>
                    <div class="user-profile">
                        <div class="avatar-dropdown">
                            <span class="username"><?php echo htmlspecialchars($_SESSION['username']); ?></span>
                            <i class="fas fa-user-circle avatar-icon"></i>
                            <div class="dropdown-content">
                                <a href="profile.php"><i class="fas fa-user"></i> Profile</a>
                                <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                            </div>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="nav-menu">
                        <a href="register.php" class="nav-link">
                            <i class="fas fa-user-plus"></i>Register
                        </a>
                        <div class="search-container">
                            <form class="search-form" action="search.php" method="GET">
                                <div class="search-input-wrapper">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="search-input" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                        <a href="login.php" class="nav-link">
                            <i class="fas fa-sign-in-alt"></i>Login
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Update date
            function updateDate() {
                const now = new Date();
                const dateElement = document.getElementById('date');
                if (dateElement) {
                    dateElement.textContent = now.toLocaleDateString('en-US', { 
                        weekday: 'short',
                        month: '2-digit',
                        day: 'numeric' 
                    });
                }
            }

            // Update immediately and then every minute
            updateDate();
            setInterval(updateDate, 60000);

            // Header Scroll Effect
            const header = document.querySelector('header');
            let lastScroll = 0;
            let isScrolling;

            window.addEventListener('scroll', function() {
                const currentScroll = window.pageYOffset;
                
                // Clear previous timeout
                window.clearTimeout(isScrolling);
                
                // Add/remove classes based on scroll direction
                if (currentScroll > lastScroll && currentScroll > 100) {
                    // Scrolling down
                    header.classList.remove('slide-down');
                    header.classList.add('slide-up');
                } else {
                    // Scrolling up
                    header.classList.remove('slide-up');
                    header.classList.add('slide-down');
                }
                
                // For mobile touch scrolling
                window.clearTimeout(isScrolling);
                isScrolling = setTimeout(function() {
                    header.classList.remove('slide-up');
                    header.classList.add('slide-down');
                }, 66);

                lastScroll = currentScroll;
            }, false);
        });
    </script>
</body>
</html> 