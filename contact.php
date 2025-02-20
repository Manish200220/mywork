<?php
require_once 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Floating Contact Button */
        .rkg-floating-contact {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 9999;
        }

        .rkg-contact-button {
            width: 50px;
            height: 50px;
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

        .rkg-contact-button:hover {
            transform: scale(1.1);
            background: #95b434;
        }

        .rkg-contact-button i {
            color: white;
            font-size: 24px;
            transform: rotate(0deg);
        }

        /* Contact Popup */
        .rkg-contact-popup {
            position: fixed;
            right: 90px;
            bottom: 20px;
            background: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
            width: 300px;
            display: none;
            z-index: 9999;
            animation: rkgSlideIn 0.3s ease-out;
        }

        .rkg-contact-popup.active {
            display: block;
        }

        .rkg-contact-header {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .rkg-contact-header h3 {
            margin: 0;
            color: #333;
            font-size: 1.2em;
        }

        .rkg-close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            background: none;
            border: none;
            font-size: 1.2em;
            color: #666;
            cursor: pointer;
            padding: 5px;
            transition: all 0.3s ease;
        }

        .rkg-close-popup:hover {
            color: #333;
            transform: rotate(90deg);
        }

        .rkg-contact-options {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .rkg-contact-option {
            display: flex;
            align-items: center;
            padding: 12px;
            border-radius: 10px;
            transition: all 0.3s ease;
            text-decoration: none;
            color: #333;
            background: #f8f9fa;
        }

        .rkg-contact-option:hover {
            background: #f0f2f5;
            transform: translateX(5px);
        }

        .rkg-contact-option i {
            width: 40px;
            height: 40px;
            background: #a4c639;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-right: 15px;
            font-size: 18px;
        }

        .rkg-contact-info h4 {
            margin: 0;
            font-size: 16px;
            color: #333;
        }

        .rkg-contact-info p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #666;
        }

        /* Animation */
        @keyframes rkgSlideIn {
            from {
                opacity: 0;
                transform: translateX(50px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .rkg-contact-popup {
                width: 280px;
                right: 80px;
            }
        }

        @media (max-width: 480px) {
            .rkg-contact-popup {
                right: 10px;
                left: 10px;
                width: auto;
                bottom: 80px;
            }
        }
    </style>
</head>
<body>
    <!-- Floating Contact Button -->
    <div class="rkg-floating-contact">
        <div class="rkg-contact-button" onclick="toggleRkgContactPopup()">
            <i class="fas fa-phone"></i>
        </div>

        <!-- Contact Popup -->
        <div class="rkg-contact-popup" id="rkgContactPopup">
            <button class="rkg-close-popup" onclick="toggleRkgContactPopup()">
                <i class="fas fa-times"></i>
            </button>
            
            <div class="rkg-contact-header">
                <h3>Contact Us</h3>
            </div>
            
            <div class="rkg-contact-options">
                <!-- Phone Option -->
                <a href="tel:+919876543210" class="rkg-contact-option">
                    <i class="fas fa-phone"></i>
                    <div class="rkg-contact-info">
                        <h4>Call Us</h4>
                        <p>+91 98765 43210</p>
                    </div>
                </a>

                <!-- WhatsApp Option -->
                <a href="https://wa.me/919876543210" target="_blank" class="rkg-contact-option">
                    <i class="fab fa-whatsapp"></i>
                    <div class="rkg-contact-info">
                        <h4>WhatsApp</h4>
                        <p>Chat with us</p>
                    </div>
                </a>

                <!-- Email Option -->
                <a href="mailto:info@rkgrowopal.com" class="rkg-contact-option">
                    <i class="fas fa-envelope"></i>
                    <div class="rkg-contact-info">
                        <h4>Email Us</h4>
                        <p>info@rkgrowopal.com</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleRkgContactPopup() {
            const popup = document.getElementById('rkgContactPopup');
            popup.classList.toggle('active');
        }

        // Close popup when clicking outside
        document.addEventListener('click', function(event) {
            const popup = document.getElementById('rkgContactPopup');
            const contactButton = document.querySelector('.rkg-contact-button');
            
            if (!popup.contains(event.target) && !contactButton.contains(event.target)) {
                popup.classList.remove('active');
            }
        });

        // Close popup with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                document.getElementById('rkgContactPopup').classList.remove('active');
            }
        });
    </script>
</body>
</html> 