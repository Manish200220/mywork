<footer>
    <div class="footer-wrapper">
        <div class="footer-top">
            <div class="footer-logo">
                <img src="images/rk2.png" alt="RKGROWOPAL Logo">
                <p>MY LIFE STYLE Business Plan Has Been Ranked As One Of The Most Powerfull Income Earning Plan In The World. With The Highest Transparency In Operation</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-behance"></i></a>
                </div>
            </div>

            <div class="footer-links">
                <h3>Useful Links</h3>
                <ul>
                    <li><a href="#">Vivamus ut tellus mi</a></li>
                    <li><a href="#">Nulla nec cursus elit</a></li>
                    <li><a href="#">Vulputate sed nec</a></li>
                    <li><a href="#">Cursus augue hasellus</a></li>
                    <li><a href="#">Lacinia ac sapien</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h3>Additional Pages</h3>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="how-we-work.php">How We Work</a></li>
                    <li><a href="quick-support.php">Quick Support</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="privacy.php">Privacy Policy</a></li>
                </ul>
            </div>

            <div class="footer-contact">
                <h3>Contact Us</h3>
                <form class="contact-form">
                    <input type="text" placeholder="Full Name" required>
                    <input type="email" placeholder="E-Mail Address" required>
                    <textarea placeholder="Your Message" required></textarea>
                    <button type="submit" class="send-message-btn">SEND MESSAGE</button>
                </form>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>Copyright © 2020 Financial Business Co., Ltd. - Design: TemplateMo</p>
        </div>
    </div>

    <style>
        footer {
            background: #1c1c1c;
            color: #fff;
            padding: 60px 0 20px;
        }

        .footer-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-top {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-logo img {
            height: 60px;
            margin-bottom: 20px;
        }

        .footer-logo p {
            color: rgba(255, 255, 255, 0.7);
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-link {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: #a4c639;
            transform: translateY(-3px);
        }

        .footer-links h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-links ul {
            list-style: none;
            padding: 0;
        }

        .footer-links ul li {
            margin-bottom: 12px;
        }

        .footer-links ul li a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-links ul li a:hover {
            color: #a4c639;
            padding-left: 5px;
        }

        .footer-contact h3 {
            color: #fff;
            font-size: 18px;
            margin-bottom: 20px;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.1);
            color: #fff;
        }

        .contact-form textarea {
            height: 100px;
            resize: none;
        }

        .send-message-btn {
            background: #a4c639;
            color: #fff;
            padding: 12px 25px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .send-message-btn:hover {
            background: #8ba830;
            transform: translateY(-2px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .footer-bottom p {
            color: rgba(255, 255, 255, 0.5);
            font-size: 14px;
        }

        @media (max-width: 992px) {
            .footer-top {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 576px) {
            .footer-top {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <!-- JavaScript Files -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</footer>
</body>
</html>
