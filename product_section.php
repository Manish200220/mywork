<?php ?>
<section class="product-section">
    <div class="product-container">
        <div class="product-slider">
            <div class="product-wrapper">
                <!-- Product Card -->
                <div class="product-card active">
                    <div class="product-left">
                        <h2>RED ONION HAIR OIL</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="price">₹ 315.00</span>
                        </div>
                        <p class="description">
                        Red Onion Hair Oil is a natural oil that helps your hair grow strong and healthy.
                        It is made from red onions, which are rich in nutrients that nourish your scalp and hair roots.
                        </p>
                        <table class="product-table">
                            <thead>
                                <tr>
                                    <th>VOLUME</th>
                                    <th>MRP</th>
                                    <th>DP</th>
                                    <th>BV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>250 ML</td>
                                    <td>₹315</td>
                                    <td>₹284</td>
                                    <td>85</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="product_detail.php?id=5&RKG=ROHO005" class="view-details-btn">
                            VIEW ALL DETAILS <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="product-right">
                        <div class="product-image-wrapper">
                            <img src="images/products/onion oil.png" alt="RED ONION HAIR OIL" class="product-main-image">
                        </div>
                        <div class="side-images">
                            <img src=""alt="Nuts" class="product-thumb">
                            <img src="" alt="Mint" class="product-thumb">
                            <img src="" alt="Cherry" class="product-thumb">
                            <img src="" alt="Blueberry" class="product-thumb">
                        </div>
                    </div>
                </div>
                <!-- Add more product cards here -->
                <div class="product-card">
                    <div class="product-left">
                        <h2>RKGDENT CARE</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="price">₹ 152.00</span>
                        </div>
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim amet ipsum in 
                            velit. Facilisis commodo. Dolor lectus arcu ante amet integer.
                        </p>
                        <table class="product-table">
                            <thead>
                                <tr>
                                    <th>VOLUME</th>
                                    <th>MRP</th>
                                    <th>DP</th>
                                    <th>BV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100 ML</td>
                                    <td>₹152</td>
                                    <td>₹137</td>
                                    <td>10</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="product_detail.php?id=9&RKG=DENT009" class="view-details-btn">
                            VIEW ALL DETAILS <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="product-right">
                        <div class="product-image-wrapper">
                            <img src="images/products/paste.png" alt="Cherry Juice" class="product-main-image">
                        </div>
                        <div class="side-images">
                            <img src="images/nuts.png" alt="Nuts" class="product-thumb">
                            <img src="images/mint.png" alt="Mint" class="product-thumb">
                            <img src="images/cherry.png" alt="Cherry" class="product-thumb">
                            <img src="images/blueberry.png" alt="Blueberry" class="product-thumb">
                        </div>
                    </div>
                </div>
                
                <!-- Add more product cards here -->
                <div class="product-card">
                    <div class="product-left">
                        <h2>ALOEVERA JUICE</h2>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="price">₹ 345.00</span>
                        </div>
                        <p class="description">
                        Aloe Vera Juice is a natural elixir packed with vitamins, minerals, and antioxidants.
                        Known for its detoxifying and healing properties, it's the perfect addition to your 
                        daily routine for glowing skin, better digestion, and overall wellness.
                        </p>
                        <table class="product-table">
                            <thead>
                                <tr>
                                    <th>VOLUME</th>
                                    <th>MRP</th>
                                    <th>DP</th>
                                    <th>BV</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>500 ML</td>
                                    <td>₹345</td>
                                    <td>₹311</td>
                                    <td>180</td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="view-details-btn">
                            VIEW ALL DETAILS <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="product-right">
                        <div class="product-image-wrapper">
                            <img src="images/products/al.png" alt="Cherry Juice" class="product-main-image">
                        </div>
                        <div class="side-images">
                            <img src="images/nuts.png" alt="Nuts" class="product-thumb">
                            <img src="images/mint.png" alt="Mint" class="product-thumb">
                            <img src="images/cherry.png" alt="Cherry" class="product-thumb">
                            <img src="images/blueberry.png" alt="Blueberry" class="product-thumb">
                        </div>
                    </div>
                </div>


            
            </div>
        </div>
        
        <!-- Navigation -->
        <div class="navigation-controls">
            <button class="nav-btn prev">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="nav-dots"></div>
            <button class="nav-btn next">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</section>

<style>
.product-section {
    padding: 60px 0;
    background-image: url('images/background/77.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    background-attachment: fixed;
}

.product-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(78deg, #3333335e 0%, rgb(255 255 255 / 24%) 100%);
    z-index: 1;
}

.product-container {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    overflow: hidden;
}

.product-slider {
    overflow: hidden;
    position: relative;
    width: 100%;
}

.product-wrapper {
    display: flex;
    transition: transform 0.5s ease;
    position: relative;
    width: 100%;
}

.product-card {
    flex: 0 0 100%;
    display: flex;
    background: linear-gradient(213deg, #a4c639 0%, #ffffff87 50%, rgb(164 198 57 / 63%) 100%);
    backdrop-filter: blur(10px);
    border-radius: 20px;
    box-shadow: inset 3px -2px 20px 1px #ffc1078a;
    overflow: hidden;
    transition: all 0.5s ease;
    width: 80%;
    max-width: 1200px;
    position: absolute;
    left: 50%;
    transform: translateX(-50%) scale(0.8);
    opacity: 0;
    visibility: hidden;
}

.product-card.active {
    opacity: 1;
    visibility: visible;
    position: relative;
    left: 50%;
    transform: translateX(-50%) scale(1);
    z-index: 2;
}

.product-left {
    flex: 1;
    padding: 30px;
}

.product-right {
    flex: 1;
    position: relative;
    padding: 40px;
    display: flex;
    flex-direction: column;
    align-items: center;
    overflow: hidden;
    background: linear-gradient(145deg, #a4c639 0%, #8ba830 100%);
}

/* Add decorative circles */
.product-right::before {
    content: '';
    position: absolute;
    width: 400px;
    height: 400px;
    background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, transparent 70%);
    border: 2px solid rgba(255,255,255,0.1);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-15deg);
}

.product-right::after {
    content: '';
    position: absolute;
    width: 300px;
    height: 300px;
    border: 15px solid rgba(255,255,255,0.1);
    border-radius: 50%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(15deg);
}

/* Product image container styling */
.product-image-wrapper {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 400px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.product-main-image {
    width: auto;
    height: 90%;
    object-fit: contain;
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
}

/* Decorative elements */
.product-image-wrapper::before {
    content: '';
    position: absolute;
    width: 150px;
    height: 150px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    top: -20px;
    right: -20px;
    z-index: -1;
}

.product-image-wrapper::after {
    content: '';
    position: absolute;
    width: 100px;
    height: 100px;
    background: rgba(255,255,255,0.1);
    border-radius: 50%;
    bottom: -10px;
    left: -10px;
    z-index: -1;
}

/* Side images styling */
.side-images {
    display: flex;
    gap: 15px;
    margin-top: 20px;
    position: relative;
    z-index: 2;
}

.product-thumb {
    width: 60px;
    height: 60px;
    border-radius: 10px;
    object-fit: cover;
    cursor: pointer;
    border: 2px solid rgba(255,255,255,0.3);
    transition: all 0.3s ease;
    background: rgba(255,255,255,0.1);
    padding: 5px;
}

.product-thumb:hover {
    transform: translateY(-3px);
    border-color: rgba(255,255,255,0.8);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Add subtle pattern overlay */
.pattern-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-image: 
        linear-gradient(45deg, rgba(255,255,255,0.1) 25%, transparent 25%),
        linear-gradient(-45deg, rgba(255,255,255,0.1) 25%, transparent 25%),
        linear-gradient(45deg, transparent 75%, rgba(255,255,255,0.1) 75%),
        linear-gradient(-45deg, transparent 75%, rgba(255,255,255,0.1) 75%);
    background-size: 20px 20px;
    background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
    opacity: 0.3;
}

.product-left h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 15px;
}

.rating {
    display: flex;
    align-items: center;
    gap: 5px;
    color: #ffc107;
    margin-bottom: 20px;
}

.price {
    margin-left: auto;
    color: #212529;
    font-size: 24px;
    font-weight: bold;
}

.description {
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
}

.product-table {
    width: 100%;
    margin: 20px 0;
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: -3px 6px 15px #21252987;
}

.product-table th,
.product-table td {
    padding: 15px 20px;
    text-align: center;
}

.product-table th {
    background: linear-gradient(135deg, #a4c639 0%, #8ba830 100%);
    color: white;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
}

.product-table th:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 50%;
    width: 1px;
    background: rgba(255, 255, 255, 0.2);
}

.product-table td {
    background: white;
    color: #666;
    font-size: 14px;
    transition: all 0.3s ease;
    position: relative;
}

.product-table td:not(:last-child)::after {
    content: '';
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    height: 30%;
    width: 1px;
    background: rgba(164, 198, 57, 0.1);
}

.product-table tr:hover td {
    background: rgba(164, 198, 57, 0.05);
    color: #333;
}

.product-table tbody tr {
    border-bottom: 1px solid rgba(164, 198, 57, 0.1);
}

.product-table tbody tr:last-child {
    border-bottom: none;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.product-table {
    animation: fadeInUp 0.5s ease forwards;
}

.product-table td:hover {
    transform: scale(1.05);
    font-weight: 500;
    color: #a4c639;
}

.view-details-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    padding: 12px 25px;
    background: #a4c639;
    color: white;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.view-details-btn::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(
        120deg,
        transparent,
        rgba(255, 255, 255, 0.6),
        transparent
    );
    transition: 0.5s ease;
}

.view-details-btn:hover::before {
    left: 100%;
    transition: 0.5s ease;
}

.view-details-btn:hover {
    background: #8ba830;
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(164, 198, 57, 0.3);
}

.view-details-btn:active {
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(164, 198, 57, 0.2);
}

.view-details-btn i {
    transition: transform 0.3s ease;
}

.view-details-btn:hover i {
    transform: translateX(5px);
}

.view-details-btn:active {
    transform: scale(0.95);
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

/* Navigation Controls */
.navigation-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 30px;
}

.nav-btn {
    width: 40px;
    height: 40px;
    border: none;
    border-radius: 50%;
    background: #a4c639;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.nav-btn::after {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, transparent 1%, #ffffff 1%) center/15000%;
    opacity: 0;
    transition: all 0.5s ease;
}

.nav-btn:active::after {
    background-size: 100%;
    opacity: 0.3;
    transition: 0s;
}

.nav-btn:hover {
    background: #8ba830;
    transform: scale(1.1);
}

.nav-dots {
    display: flex;
    gap: 8px;
}

.nav-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #ddd;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    box-shadow: 0 2px 5px rgba(0,0,0,0.2);
}

.nav-dot::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255,255,255,0.4);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.3s, height 0.3s;
}

.nav-dot:hover::before {
    width: 100%;
    height: 100%;
}

.nav-dot.active {
    background: #a4c639;
    transform: scale(1.2);
    animation: glow 2s ease-in-out infinite;
}

@keyframes glow {
    0% { box-shadow: 0 0 5px #a4c639; }
    50% { box-shadow: 0 0 15px #a4c639; }
    100% { box-shadow: 0 0 5px #a4c639; }
}

@keyframes scaleIn {
    from {
        transform: translateX(-50%) scale(0.8);
        opacity: 0;
    }
    to {
        transform: translateX(-50%) scale(1);
        opacity: 1;
    }
}

@keyframes scaleOut {
    from {
        transform: translateX(-50%) scale(1);
        opacity: 1;
    }
    to {
        transform: translateX(-50%) scale(0.8);
        opacity: 0;
    }
}

.product-card.active {
    animation: scaleIn 0.5s ease forwards;
}

.product-card:not(.active) {
    animation: scaleOut 0.5s ease forwards;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.product-wrapper');
    const prevBtn = document.querySelector('.nav-btn.prev');
    const nextBtn = document.querySelector('.nav-btn.next');
    const products = document.querySelectorAll('.product-card');
    const dotsContainer = document.querySelector('.nav-dots');
    
    let currentIndex = 0;
    
    // Create dots
    products.forEach((_, index) => {
        const dot = document.createElement('div');
        dot.classList.add('nav-dot');
        if (index === 0) dot.classList.add('active');
        dot.addEventListener('click', () => goToSlide(index));
        dotsContainer.appendChild(dot);
    });
    
    function updateSlider() {
        products.forEach((card, index) => {
            card.classList.toggle('active', index === currentIndex);
        });
        
        // Update dots
        document.querySelectorAll('.nav-dot').forEach((dot, index) => {
            dot.classList.toggle('active', index === currentIndex);
        });
        
        // Update buttons
        prevBtn.style.opacity = currentIndex === 0 ? '0.5' : '1';
        nextBtn.style.opacity = currentIndex === products.length - 1 ? '0.5' : '1';
    }
    
    function goToSlide(index) {
        currentIndex = index;
        updateSlider();
    }
    
    prevBtn.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });
    
    nextBtn.addEventListener('click', () => {
        if (currentIndex < products.length - 1) {
            currentIndex++;
            updateSlider();
        }
    });
    
    // Initialize slider
    updateSlider();

    // Update image click handlers
    const thumbs = document.querySelectorAll('.product-thumb');
    thumbs.forEach(thumb => {
        thumb.addEventListener('click', function() {
            const mainImage = this.closest('.product-right').querySelector('.product-main-image');
            mainImage.src = this.src;
        });
    });
});
</script>