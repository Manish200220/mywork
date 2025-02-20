<!-- Featured Products Section -->
<section class="fp-featured-products">
    <div class="fp-container">
        <div class="fp-product-tabs">
            <div class="fp-tab-buttons">
                <button class="fp-tab-btn fp-active" data-tab="fp-most-popular">Most Popular</button>
                <button class="fp-tab-btn" data-tab="fp-trending">Trending Products</button>
                <button class="fp-tab-btn" data-tab="fp-latest-products">Latest Products</button>
                <button class="fp-tab-btn" data-tab="fp-highest-rated">Highest Rated</button>
            </div>

            <div class="fp-tab-content">
                <!-- Most Popular Products -->
                <div class="fp-products-grid fp-active" id="fp-most-popular">
                    <!-- Column 1 -->
                    <div class="fp-product-column">
                        <div class="fp-product-card">
                            <img src="images/products/on.webp" alt="red onion hair oil" class="fp-product-image">
                            <div class="fp-product-info">
                                <h3 class="fp-product-name">Red Onion Hair Oil 250ml</h3>
                                <!-- Product Details Table -->
                                <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹315</td>
                                                <td>₹284</td>
                                                <td>85</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                
                                <a href="product_detail.php?id=5&RKG=ROHO005" class="fp-view-details">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Column 2 -->
                    <div class="fp-product-column">
                        <div class="fp-product-card">
                            <img src="images/products/tu.jpg" alt="tulsi" class="fp-product-image">
                            <div class="fp-product-info">
                                <h3 class="fp-product-name">Tulsi 30ml</h3>
                                 <!-- Product Details Table -->
                                 <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹252</td>
                                                <td>₹227</td>
                                                <td>118</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="product_detail.php?id=1&RKG=TULS001" class="fp-view-details">View Details</a>
                            </div>
                                        
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="fp-product-column">
                    <div class="fp-product-card">
                            <img src="images/products/al.webp" alt="aloeera juice" class="fp-product-image">
                            <div class="fp-product-info">
                                <h3 class="fp-product-name">Aloeera Juice 500ml</h3>

                                 <!-- Product Details Table -->
                                 <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                                <td>₹345</td>
                                                <td>₹311</td>
                                                <td>120</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                            </div>
                         </div>
                     </div>
                </div>

                <!-- Trending Products -->
                <div class="fp-products-grid" id="fp-trending">
                    <div class="fp-product-card">
                        <img src="images/products/tooth.jpg" alt="toothpaste" class="fp-product-image">
                        <div class="fp-product-info">
                            <h3 class="fp-product-name">Rkgdent Care 100gm</h3>

                             <!-- Product Details Table -->
                             <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹152</td>
                                                <td>₹137</td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                        </div>
                    </div>

                    <div class="fp-product-card">
                        <img src="images/products/sm.jpg" alt="red onion shampoo" class="fp-product-image">
                        <div class="fp-product-info">
                            <h3 class="fp-product-name">Red Onion Shampoo 250ml</h3>
                             <!-- Product Details Table -->
                             <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹340</td>
                                                <td>₹306</td>
                                                <td>90</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                        </div>
                    </div>
                    <div class="fp-product-card">
                        <img src="images/products/malt.webp" alt="shilajeet malt" class="fp-product-image">
                        <div class="fp-product-info">
                            <h3 class="fp-product-name">Shilajeet Malt 400gm</h3>
                             <!-- Product Details Table -->
                             <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹310</td>
                                                <td>₹279</td>
                                                <td>140</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                        </div>
                
                    </div>
                </div>

                <!-- Latest Products -->
                <div class="fp-products-grid" id="fp-latest-products">
                    <div class="fp-product-card">
                        <img src="images/products/tooth.jpg" alt="toothpaste" class="fp-product-image">
                        <div class="fp-product-info">
                            <h3 class="fp-product-name">Rkgdent Care 100gm</h3>
                             <!-- Product Details Table -->
                             <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹152</td>
                                                <td>₹137</td>
                                                <td>10</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                        </div>
                    </div>

                   </div>
                </div>

                <!-- Highest Rated -->
                <div class="fp-products-grid" id="fp-highest-rated">
                    <div class="fp-product-card">
                        <img src="images/products/al.webp" alt="aloeera juice" class="fp-product-image">
                        <div class="fp-product-info">
                            <h3 class="fp-product-name">Aloeera Juice 500ml</h3>
                             <!-- Product Details Table -->
                             <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹345</td>
                                                <td>₹311</td>
                                                <td>120</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                        </div>
                    </div>

                    <div class="fp-product-card">
                        <img src="images/products/sm.jpg" alt="red onion shampoo" class="fp-product-image">
                        <div class="fp-product-info">
                            <h3 class="fp-product-name">Red Onion Shampoo 250ml</h3>
                             <!-- Product Details Table -->
                             <div class="fp-product-details">
                                    <table class="fp-details-table">
                                        <thead>
                                            <tr>
                                                <th>MRP</th>
                                                <th>DP</th>
                                                <th>BV</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>₹340</td>
                                                <td>₹306</td>
                                                <td>90</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" class="fp-view-details">View Details</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.fp-featured-products {
    padding: 60px 0;
    background: #fff;
}

.fp-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

.fp-product-tabs {
    margin-top: 30px;
}

.fp-tab-buttons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 30px;
}

.fp-tab-btn {
    position: relative;
    background-color: transparent;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    cursor: pointer;
    transition: color 0.3s ease;
}

.fp-tab-btn::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #a4c639;
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.fp-tab-btn:hover {
    color: #a4c639;
}

.fp-tab-btn:hover::before {
    transform: scaleX(1);
}

.fp-tab-btn.fp-active {
    color: #a4c639;
}

.fp-tab-btn.fp-active::before {
    transform: scaleX(1);
}

.fp-products-grid {
    display: none;
    grid-template-columns: repeat(3, 1fr); /* Fixed 3 columns */
    gap: 30px;
    padding: 20px 0;
}

.fp-products-grid.fp-active {
    display: grid;
}

/* Column layout for product cards */
.fp-product-column {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.fp-product-card {
    position: relative;
    border-radius: 20px;
    padding: 25px;
    transition: all 0.3s ease;
    background-image: url('images/background/99.jpg');
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    height: fit-content;
}

/* Card background and effects */
.fp-product-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #e8f5e9, #f1f8e9);
    background-size: 200% 200%;
    opacity: 0.8;
    z-index: 0;
    transition: all 0.3s ease;
}

/* Product image styling */
.fp-product-image {
    position: relative;
    width: 100%;
    height: 200px;
    object-fit: contain;
    margin-bottom: 20px;
    transition: transform 0.3s ease;
    z-index: 1;
}

/* Product info container */
.fp-product-info {
    position: relative;
    z-index: 1;
    padding: 15px;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 15px;
    backdrop-filter: blur(5px);
}

/* Product name styling */
.fp-product-name {
    font-size: 18px;
    font-weight: 600;
    color: #2c3e50;
    margin-bottom: 15px;
    line-height: 1.4;
}

/* Price table styling */
.fp-details-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    margin-bottom: 20px;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
}

.fp-details-table thead {
    background: #a4c639;
    color: white;
}

.fp-details-table th {
    padding: 12px;
    font-size: 14px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.fp-details-table td {
    padding: 12px;
    text-align: center;
    color: #2c3e50;
    font-weight: 500;
    font-size: 15px;
}

/* View Details button */
.fp-view-details {
    width: 100%;
    padding: 12px 25px;
    background: #a4c639;
    color: white;
    border: none;
    border-radius: 25px;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Hover effects */
.fp-product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.fp-product-card:hover::before {
    opacity: 0.9;
    background-position: 100% 100%;
}

.fp-product-card:hover .fp-product-image {
    transform: scale(1.05);
}

.fp-view-details:hover {
    background: #8ba830;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(164, 198, 57, 0.3);
}

/* Responsive adjustments */
@media (max-width: 1024px) {
    .fp-products-grid {
        grid-template-columns: repeat(2, 1fr); /* 2 columns on medium screens */
    }
}

@media (max-width: 768px) {
    .fp-tab-buttons {
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .fp-tab-btn {
        font-size: 14px;
        padding: 8px 15px;
    }
    
    .fp-products-grid {
        grid-template-columns: 1fr; /* Single column on mobile */
    }
    
    .fp-product-card {
        padding: 20px;
    }

    .fp-product-image {
        height: 200px;
    }

    .fp-product-name {
        font-size: 16px;
    }

    .fp-details-table th,
    .fp-details-table td {
        padding: 10px;
        font-size: 13px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const fpTabButtons = document.querySelectorAll('.fp-tab-btn');
    const fpProductGrids = document.querySelectorAll('.fp-products-grid');

    fpTabButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons and grids
            fpTabButtons.forEach(btn => btn.classList.remove('fp-active'));
            fpProductGrids.forEach(grid => grid.classList.remove('fp-active'));

            // Add active class to clicked button and corresponding grid
            button.classList.add('fp-active');
            const tabId = button.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('fp-active');
        });
    });
});
</script> 