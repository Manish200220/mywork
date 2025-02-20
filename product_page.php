<?php
// Include the header
include 'header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-container">
        <div class="hero-content">
            <h1 class="hero-title">
                Discover Our Premium
                <span class="highlight">Ayurvedic Products</span>
            </h1>
            <p class="hero-description">
                Experience the power of natural healing with our authentic Ayurvedic supplements
            </p>
        </div>
        <div class="hero-image">
            <img src="images/product card/1.png" alt="Featured Product" class="main-image">
            <div class="floating-elements">
                <div class="float-badge top-left">
                    <i class="fas fa-leaf"></i>
                    <span>100% Natural</span>
                </div>
                <div class="float-badge bottom-right">
                    <i class="fas fa-certificate"></i>
                    <span>Premium Quality</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Content Section -->
<div class="pp-main-container">
    <!-- Left Sidebar with Categories and Filters -->
    <div class="pp-sidebar">
        <!-- Sort Dropdown -->
        <div class="pp-filter-widget">
            <h3 class="pp-widget-title">
                <i class="fas fa-sort"></i>
                Sort Products
            </h3>
            <div class="pp-sort-dropdown">
                <select id="sortProducts">
                    <option value="">Sort: Low To High</option>
                    <option value="low-high">Price: Low to High</option>
                    <option value="high-low">Price: High to Low</option>
                    <option value="bv-low-high">BV: Low to High</option>
                    <option value="bv-high-low">BV: High to Low</option>
                </select>
            </div>
        </div>

        <!-- Categories with Subcategories -->
        <div class="pp-filter-widget">
            <h3 class="pp-widget-title">
                <i class="fas fa-th-large"></i>
                Categories
            </h3>
            <ul class="pp-cat-list">
                        <?php
                $categories = [
                    'Health Care' => [
                        'Immunity & Wellness' => [
                            [
                                'name' => 'Tulsi',
                                'RKG' => 'TULS001',
                                'volume' => '30 ML',
                                'mrp' => 252,
                                'dp' => 227,
                                'bv' => 118
                            ],
                            [
                                'name' => 'Aloevera Juice',
                                'RKG' => 'ALOE002',
                                'volume' => '500 ML',
                                'mrp' => 345,
                                'dp' => 311,
                                'bv' => 180
                            ],
                            [
                                'name' => 'Liver Enzyme',
                                'RKG' => 'LIVR004',
                                'volume' => '200 ML',
                                'mrp' => 142,
                                'dp' => 128,
                                'bv' => 68
                            ]
                        ],
                        'Energy & Vitality' => [
                            [
                                'name' => 'Silajeet Malt',
                                'RKG' => 'SILJ003',
                                'volume' => '400 GM',
                                'mrp' => 310,
                                'dp' => 279,
                                'bv' => 140
                            ]
                        ]
                    ],
                    'Personal Care' => [
                        'Hair Care' => [
                            [
                                'name' => 'Red Onion Hair Oil',
                                'RKG' => 'ROHO005',
                                'volume' => '250 ML',
                                'mrp' => 315,
                                'dp' => 284,
                                'bv' => 85
                            ],
                            [
                                'name' => 'Red Onion Shampoo',
                                'RKG' => 'ROSH006',
                                'volume' => '250 ML',
                                'mrp' => 340,
                                'dp' => 306,
                                'bv' => 90
                            ]
                        ],
                        'Oral Care' => [
                            [
                                'name' => 'RKGDent Care',
                                'RKG' => 'DENT009',
                                'volume' => '100 GM',
                                'mrp' => 152,
                                'dp' => 137,
                                'bv' => 10
                            ]
                        ],
                        'Body Care' => [
                            [
                                'name' => 'Soap Bath',
                                'RKG' => 'SOAP008',
                                'volume' => '100 GM',
                                'mrp' => 50,
                                'dp' => 45,
                                'bv' => 9
                            ]
                        ]
                    ],
                    'Daily Essentials' => [
                        'Beverages' => [
                            [
                                'name' => 'Tea Granular',
                                'RKG' => 'TEAG007',
                                'volume' => '250 GM',
                                'mrp' => 165,
                                'dp' => 149,
                                'bv' => 27
                            ]
                        ]
                    ]
                ];

                foreach ($categories as $category => $subcategories): ?>
                    <li class="pp-cat-item">
                        <a href="#" class="pp-cat-link">
                            <i class="fas fa-chevron-right"></i>
                            <?php echo $category; ?>
                            <span class="count">(<?php 
                                $total_products = 0;
                                foreach ($subcategories as $subcat_products) {
                                    $total_products += count($subcat_products);
                                }
                                echo $total_products;
                            ?>)</span>
                        </a>
                        <ul class="pp-subcat-list">
                            <?php foreach ($subcategories as $subcategory => $products): ?>
                                <li>
                                    <a href="#" class="pp-subcat-link">
                                        <?php echo $subcategory; ?>
                                        <span class="count">(<?php echo count($products); ?>)</span>
                                    </a>
                                    <ul class="pp-prod-list">
                                        <?php foreach ($products as $product): ?>
                                            <li class="pp-prod-item">
                                                <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" 
                                                   class="pp-prod-link">
                                                    <span class="pp-prod-name"><?php echo $product['name']; ?></span>
                                                    <div class="pp-prod-meta">
                                                        <span class="volume"><?php echo $product['volume']; ?></span>
                                                        <span class="price">₹<?php echo $product['mrp']; ?></span>
                                                        <span class="bv">BV: <?php echo $product['bv']; ?></span>
                                                    </div>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                    </ul>
                </li>
                            <?php endforeach; ?>
                    </ul>
                </li>
                <?php endforeach; ?>
            </ul>
                </div>

        <!-- Filters -->
        <div class="pp-filter-widget">
            <h3 class="pp-widget-title">
                <i class="fas fa-sliders-h"></i>
                Filter
                <span class="pp-filter-count">(Showing <span id="visible-count">0</span> products)</span>
            </h3>
            
            <!-- Filter Groups -->
            <div class="pp-filter-accordion">
                <!-- Price Filter -->
                <div class="pp-filter-item">
                    <div class="pp-filter-header">
                        <span>Price Range</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="pp-filter-content">
                        <div class="pp-range-container">
                            <div class="pp-range-slider">
                                <input type="range" class="pp-range-min" min="50" max="2000" value="50">
                                <input type="range" class="pp-range-max" min="50" max="2000" value="2000">
                                <div class="pp-slider-track"></div>
                            </div>
                        </div>
                        <div class="pp-price-inputs">
                            <div class="pp-price-field">
                                <label>Min Price</label>
                                <input type="number" id="price-min" value="50" min="50" max="345">
                                <span class="pp-currency">₹</span>
                            </div>
                            <span class="pp-price-separator">-</span>
                            <div class="pp-price-field">
                                <label>Max Price</label>
                                <input type="number" id="price-max" value="345" min="50" max="345">
                                <span class="pp-currency">₹</span>
                            </div>
                        </div>
                        <!-- Price Quick Filters -->
                        <div class="pp-price-quick-filters">
                            <button class="pp-quick-filter" data-min="50" data-max="150">₹50 - ₹150</button>
                            <button class="pp-quick-filter" data-min="151" data-max="250">₹151 - ₹250</button>
                            <button class="pp-quick-filter" data-min="251" data-max="345">₹251 - ₹345</button>
                        </div>
                    </div>
                </div>

                <!-- BV Filter -->
                <div class="pp-filter-item">
                    <div class="pp-filter-header">
                        <span>Filter by BV</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="pp-filter-content">
                        <div class="pp-bv-slider-container">
                            <div class="pp-range-slider">
                                <input type="range" class="pp-bv-range" min="9" max="180" value="9">
                                <div class="pp-slider-track"></div>
                            </div>
                            <div class="pp-bv-input">
                                <label>Min BV:</label>
                                <input type="number" id="bv-input" value="9" min="9" max="180">
                            </div>
                                </div>
                        <!-- BV Quick Filters -->
                        <div class="pp-bv-quick-filters">
                            <button class="pp-quick-filter" data-min="9" data-max="50">BV: 9-50</button>
                            <button class="pp-quick-filter" data-min="51" data-max="100">BV: 51-100</button>
                            <button class="pp-quick-filter" data-min="101" data-max="180">BV: 101-180</button>
                        </div>
                    </div>
                </div>

                <!-- Discount Filter -->
                <div class="pp-filter-item">
                    <div class="pp-filter-header">
                        <span>Discount</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="pp-filter-content">
                        <div class="pp-checkbox-group">
                            <label class="pp-checkbox-item">
                                <input type="checkbox">
                                <span class="pp-modern-checkbox">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="label-text">50% or more</span>
                            </label>
                            <label class="pp-checkbox-item">
                                <input type="checkbox">
                                <span class="pp-modern-checkbox">
                                    <i class="fas fa-check"></i>
                                </span>
                                <span class="label-text">30% or more</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Center Content Area -->
    <div class="pp-content-area">
        <!-- Product Details Section (Smaller Size) -->
        <div class="pp-product-details">
            <?php include 'product_detail.php'; ?>
                        </div>

        <!-- Short Products Grid -->
        <div class="pp-products-grid">
            <?php foreach ($categories as $category => $subcategories): 
                foreach ($subcategories as $subcategory => $products):
                    foreach ($products as $product): ?>
                        <div class="pp-product-card">
                            <div class="pp-product-image">
                                <img src="images/products/<?php echo strtolower(str_replace(' ', '-', $product['name'])); ?>.png" 
                                     alt="<?php echo $product['name']; ?>">
                        </div>
                            <div class="pp-product-info">
                                <h3><?php echo $product['name']; ?></h3>
                                <div class="pp-category-info">
                                    <span class="pp-category"><?php echo $category; ?></span>
                                    <span class="pp-subcategory"><?php echo $subcategory; ?></span>
                        </div>
                                <div class="pp-product-meta">
                                    <span class="pp-volume"><?php echo $product['volume']; ?></span>
                                    <span class="pp-price">₹<?php echo $product['mrp']; ?></span>
                                    <span class="pp-bv">BV: <?php echo $product['bv']; ?></span>
                            </div>
                                <a href="product_detail.php?RKG=<?php echo $product['RKG']; ?>" 
                                   class="pp-view-details">View Details</a>
                            </div>
                            </div>
                    <?php endforeach;
                endforeach;
            endforeach; ?>
                        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
<?php include 'contact.php'; ?>

<style>
/* Add your custom styles here */
.hero-section {
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    padding: 80px 0;
    margin-top: 80px;
}

.hero-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    padding: 0 20px;
    align-items: center;
}

.hero-title {
    font-size: 48px;
    color: #2d3436;
    margin-bottom: 20px;
    line-height: 1.2;
}

.highlight {
    color: #a4c639;
    display: block;
}

.hero-description {
    font-size: 18px;
    color: #636e72;
    line-height: 1.6;
}

.hero-image {
    position: relative;
}

.main-image {
    width: 100%;
    height: auto;
    border-radius: 20px;
}

.float-badge {
    position: absolute;
    background: rgba(255, 255, 255, 0.9);
    padding: 10px 20px;
    border-radius: 25px;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.float-badge i {
    color: #a4c639;
}

.top-left {
    top: 20px;
    left: 20px;
}

.bottom-right {
    bottom: 20px;
    right: 20px;
}

/* Product Detail Section */
.product-detail-section {
    padding: 60px 20px;
    background: #ffffff;
}

.product-card {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    background: white;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

.product-images {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.main-product-image {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 15px;
    text-align: center;
}

.main-product-image img {
    max-width: 100%;
    height: auto;
}

.thumbnail-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
}

.thumbnail {
    border-radius: 10px;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.thumbnail:hover {
    transform: translateY(-5px);
}

.thumbnail.active {
    border: 2px solid #a4c639;
}

.product-info {
    display: flex;
    flex-direction: column;
    gap: 25px;
}

.product-name {
    font-size: 32px;
    color: #2d3436;
}

.product-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.product-rating i {
    color: #ffd700;
}

.product-price {
    display: flex;
    align-items: center;
    gap: 15px;
}

.current-price {
    font-size: 32px;
    font-weight: 600;
    color: #2d3436;
}

.original-price {
    font-size: 24px;
    color: #b2bec3;
    text-decoration: line-through;
}

.discount {
    background: #a4c639;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
}

.product-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.feature {
    display: flex;
    align-items: center;
    gap: 10px;
}

.feature i {
    color: #a4c639;
}

.composition-bars {
    display: flex;
    flex-direction: column;
    gap: 15px;
}

.composition-item {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.composition-info {
    display: flex;
    justify-content: space-between;
}

.progress-bar {
    height: 8px;
    background: #f0f2f5;
    border-radius: 4px;
    overflow: hidden;
}

.progress {
    height: 100%;
    background: #a4c639;
    border-radius: 4px;
}

.product-actions {
    display: flex;
    gap: 20px;
    margin-top: 20px;
}

.quantity-selector {
    display: flex;
    align-items: center;
    border: 1px solid #dfe6e9;
    border-radius: 25px;
    overflow: hidden;
}

.qty-btn {
    border: none;
    background: none;
    padding: 10px 15px;
    cursor: pointer;
    color: #2d3436;
}

.qty-input {
    width: 50px;
    border: none;
    text-align: center;
}

.add-to-cart-btn, .buy-now-btn {
    padding: 12px 30px;
    border: none;
    border-radius: 25px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.add-to-cart-btn {
    background: #a4c639;
    color: white;
}

.buy-to-cart-btn {
    background: #2d3436;
    color: white;
}

.add-to-cart-btn:hover, .buy-now-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

@media (max-width: 992px) {
    .hero-container, .product-card {
        grid-template-columns: 1fr;
    }
    
    .product-features {
        grid-template-columns: 1fr 1fr;
    }
}

@media (max-width: 768px) {
    .hero-title {
        font-size: 36px;
    }
    
    .product-features {
        grid-template-columns: 1fr;
    }
    
    .product-actions {
        flex-direction: column;
    }
}

/* Sidebar Styles */
.pp-section {
    display: grid;
    grid-template-columns: 300px 1fr;
    gap: 30px;
    max-width: 1400px;
    margin: 0 auto;
    padding: 40px 20px;
}

.pp-sidebar {
    position: sticky;
    top: 100px;
    height: fit-content;
}

.pp-filter-widget {
    background: linear-gradient(145deg, #ffffff, #f8f9fa);
    border-radius: 20px;
    padding: 25px;
    margin-bottom: 25px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
}

.pp-widget-title {
    display: flex;
    align-items: center;
    gap: 12px;
    font-size: 20px;
    color: #2d3436;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 2px solid rgba(164, 198, 57, 0.2);
    position: relative;
}

.pp-widget-title::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 0;
    width: 60px;
    height: 2px;
    background: #a4c639;
}

.pp-widget-title i {
    color: #a4c639;
    font-size: 22px;
}

.pp-cat-list {
    max-height: none;
    overflow-y: auto;
    padding: 5px;
}

/* Custom Scrollbar */
.pp-cat-list::-webkit-scrollbar {
    width: 6px;
}

.pp-cat-list::-webkit-scrollbar-track {
    background: #f1f1f1;
    border-radius: 3px;
}

.pp-cat-list::-webkit-scrollbar-thumb {
    background: #a4c639;
    border-radius: 3px;
}

.pp-cat-item {
    margin-bottom: 8px;
    transition: all 0.3s ease;
}

.pp-cat-link {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 14px 18px;
    color: #2d3436;
    text-decoration: none;
    border-radius: 12px;
    background: white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    transition: all 0.3s ease;
}

.pp-cat-link:hover {
    background: linear-gradient(145deg, #a4c639, #93b233);
    color: white;
    transform: translateX(5px);
}

.pp-cat-link:hover i {
    color: white !important;
}

.pp-cat-link i:first-child {
    margin-right: 12px;
    width: 24px;
    font-size: 18px;
    color: #a4c639;
    transition: all 0.3s ease;
}

.pp-cat-link i.fa-chevron-down {
    font-size: 12px;
    color: #a4c639;
    transition: transform 0.3s ease;
}

.pp-cat-item.active .pp-cat-link {
    background: linear-gradient(145deg, #a4c639, #93b233);
    color: white;
    box-shadow: 0 4px 15px rgba(164, 198, 57, 0.2);
}

.pp-cat-item.active .pp-cat-link i {
    color: white;
}

.pp-cat-item.active .pp-cat-link i.fa-chevron-down {
    transform: rotate(180deg);
}

.pp-subcat-list {
    max-height: 0;
    overflow: hidden;
    list-style: none;
    padding: 5px 0 5px 40px;
    margin-top: 8px;
    position: relative;
    transition: all 0.3s ease-in-out;
}

.pp-cat-item.active .pp-subcat-list {
    max-height: 1000px;
    margin-top: 8px;
}

.pp-subcat-list::before {
    content: '';
    position: absolute;
    left: 20px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: rgba(164, 198, 57, 0.2);
}

.pp-subcat-list li a {
    display: block;
    padding: 10px 15px;
    color: #636e72;
    text-decoration: none;
    font-size: 14px;
    border-radius: 8px;
    margin-bottom: 5px;
    transition: all 0.3s ease;
    position: relative;
    opacity: 0.8;
}

.pp-cat-item.active .pp-subcat-list li a {
    opacity: 1;
}

.pp-subcat-list li a::before {
    content: '';
    position: absolute;
    left: -20px;
    top: 50%;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: #a4c639;
    transform: translateY(-50%);
    opacity: 0;
    transition: all 0.3s ease;
}

.pp-subcat-list li a:hover {
    color: #a4c639;
    background: rgba(164, 198, 57, 0.1);
    transform: translateX(5px);
}

.pp-subcat-list li a:hover::before {
    opacity: 1;
}

/* Updated Filter Styles */
.pp-filter-accordion {
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.pp-filter-item {
    border-bottom: 1px solid rgba(0,0,0,0.06);
    margin-bottom: 5px;
}

.pp-filter-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
    cursor: pointer;
    color: #2d3436;
    font-weight: 500;
    transition: all 0.3s ease;
}

.pp-filter-header:hover {
    color: #a4c639;
}

.pp-filter-header i {
    font-size: 12px;
    color: #a4c639;
    transition: transform 0.3s ease;
}

.pp-filter-item.active .pp-filter-header i {
    transform: rotate(180deg);
}

.pp-filter-content {
    padding: 0;
    max-height: 0;
    overflow: hidden;
    transition: all 0.3s ease;
}

.pp-filter-item.active .pp-filter-content {
    padding: 0 0 15px 0;
    max-height: 300px;
}

/* Price Range Styles */
.pp-price-inputs {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 10px 0;
}

.pp-price-field {
    position: relative;
    flex: 1;
}

.pp-price-field input {
    width: 100%;
    padding: 12px;
    border: 2px solid #eee;
    border-radius: 8px;
    font-size: 14px;
    color: #2d3436;
    transition: all 0.3s ease;
    padding-right: 30px;
}

.pp-price-field input:focus {
    border-color: #a4c639;
    outline: none;
}

.pp-price-field .pp-currency {
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    color: #999;
    font-size: 14px;
}

.pp-price-separator {
    color: #999;
    font-weight: 500;
}

/* Modern Checkbox */
.pp-checkbox-group {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.pp-checkbox-item {
    display: flex;
    align-items: center;
    cursor: pointer;
    padding: 8px 0;
    transition: all 0.3s ease;
}

.pp-checkbox-item:hover {
    color: #a4c639;
}

.pp-checkbox-item input {
    display: none;
}

.pp-modern-checkbox {
    width: 22px;
    height: 22px;
    border: 2px solid #ddd;
    border-radius: 6px;
    margin-right: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.pp-modern-checkbox i {
    color: white;
    font-size: 12px;
    opacity: 0;
    transform: scale(0);
    transition: all 0.3s ease;
}

.pp-checkbox-item input:checked + .pp-modern-checkbox {
    background: #a4c639;
    border-color: #a4c639;
}

.pp-checkbox-item input:checked + .pp-modern-checkbox i {
    opacity: 1;
    transform: scale(1);
}

.label-text {
    flex: 1;
    font-size: 14px;
    color: #2d3436;
}

.count {
    font-size: 12px;
    color: #999;
    background: #f8f9fa;
    padding: 2px 8px;
    border-radius: 12px;
    margin-left: 5px;
}

/* Related Products */
.related-products {
    margin-top: 60px;
}

.section-title {
    font-size: 24px;
    color: #2d3436;
    margin-bottom: 30px;
}

.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
}

.product-card {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    transition: transform 0.3s ease;
    box-shadow: 0 4px 15px rgba(0,0,0,0.05);
}

.product-card:hover {
    transform: translateY(-5px);
}

.product-image {
    position: relative;
    padding-top: 100%;
}

.product-image img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.product-badge {
    position: absolute;
    top: 10px;
    right: 10px;
    background: #ff6b6b;
    padding: 5px 10px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: 500;
    color: white;
}

.product-link {
    text-decoration: none;
    color: #2d3436;
    display: block;
    padding: 20px;
}

.product-info {
    padding: 20px;
}

.product-info h3 {
    font-size: 16px;
    color: #2d3436;
    margin-bottom: 10px;
}

.product-size {
    font-size: 14px;
    color: #636e72;
}

.product-price {
    display: flex;
    align-items: center;
    gap: 10px;
}

.mrp {
    font-size: 14px;
    color: #b2bec3;
    text-decoration: line-through;
}

.dp {
    font-size: 14px;
    color: #2d3436;
    font-weight: 600;
}

.bv {
    font-size: 14px;
    color: #a4c639;
    font-weight: 600;
}

.add-to-cart {
    padding: 12px 30px;
    border: none;
    border-radius: 25px;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
    background: #a4c639;
    color: white;
    width: 100%;
    margin-top: 20px;
}

.add-to-cart:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

/* Range Slider Styles */
.pp-range-container {
    padding: 15px 10px 35px;
    position: relative;
}

.pp-range-slider {
    position: relative;
    height: 5px;
    margin: 0 auto;
}

.pp-range-slider input {
    position: absolute;
    width: 100%;
    background: none;
    pointer-events: none;
    -webkit-appearance: none;
    appearance: none;
    height: 100%;
    opacity: 0;
    z-index: 3;
    padding: 0;
}

.pp-slider-track {
    width: 100%;
    height: 5px;
    position: absolute;
    background: #ddd;
    border-radius: 3px;
}

.pp-slider-track::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #a4c639;
    border-radius: 3px;
    transform: scaleX(0.5);
    transform-origin: left;
}

/* Slider Thumb Styles */
.pp-range-slider input::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 18px;
    height: 18px;
    background: white;
    border: 2px solid #a4c639;
    border-radius: 50%;
    cursor: pointer;
    pointer-events: auto;
    transition: all 0.3s ease;
}

.pp-range-slider input::-webkit-slider-thumb:hover {
    background: #a4c639;
    transform: scale(1.1);
}

.pp-range-slider input::-moz-range-thumb {
    width: 18px;
    height: 18px;
    background: white;
    border: 2px solid #a4c639;
    border-radius: 50%;
    cursor: pointer;
    pointer-events: auto;
    transition: all 0.3s ease;
}

.pp-range-slider input::-moz-range-thumb:hover {
    background: #a4c639;
    transform: scale(1.1);
}

/* BV Slider Styles */
.pp-bv-slider-container {
    padding: 20px 10px 10px;
    position: relative;
}

.pp-bv-values {
    display: flex;
    justify-content: space-between;
    margin-top: 10px;
    color: #666;
    font-size: 14px;
}

.pp-bv-current {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
    color: #2d3436;
    font-weight: 500;
}

.pp-bv-value {
    color: #a4c639;
    font-weight: 600;
}

.pp-bv-track {
    background: #f0f2f5;
}

.pp-bv-track::before {
    background: #a4c639;
    transform-origin: left;
    transform: scaleX(0.5);
}

.pp-range-slider .pp-bv-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 20px;
    height: 20px;
    background: white;
    border: 2px solid #a4c639;
    border-radius: 50%;
    cursor: pointer;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.pp-range-slider .pp-bv-range::-webkit-slider-thumb:hover {
    background: #a4c639;
    transform: scale(1.1);
}

.pp-bv-input {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-top: 15px;
}

.pp-bv-input input {
    width: 80px;
    padding: 8px;
    border: 2px solid #f0f2f5;
    border-radius: 6px;
    font-size: 14px;
    color: #2d3436;
    transition: all 0.3s ease;
}

.pp-bv-input input:focus {
    border-color: #a4c639;
    outline: none;
}

.estimated-price {
    margin-top: 10px;
    font-size: 14px;
    color: #2d3436;
    font-weight: 500;
}

.price-value {
    color: #a4c639;
    font-weight: 600;
}

/* Sort Dropdown Styles */
.pp-sort-dropdown {
    margin-top: 15px;
}

.pp-sort-dropdown select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    color: #333;
    background-color: #fff;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M6 8.59L1.41 4 0 5.41l6 6 6-6L10.59 4 6 8.59z'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    cursor: pointer;
}

.pp-sort-dropdown select:focus {
    outline: none;
    border-color: #a4c639;
}

/* Keep only the grid and card styles for product listing */
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 30px;
    padding: 20px;
}

.pp-prod-list {
    padding-left: 20px;
    margin-top: 5px;
    display: none;
}

.pp-subcat-link.active + .pp-prod-list {
    display: block;
}

.pp-prod-item {
    margin: 10px 0;
    background: white;
    border-radius: 8px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.pp-prod-item:hover {
    transform: translateX(5px);
    background: #f1f9e4;
}

.pp-prod-link {
    padding: 12px;
    display: block;
    text-decoration: none;
    color: #2d3436;
}

.pp-prod-name {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.pp-prod-meta {
    display: flex;
    gap: 10px;
    font-size: 13px;
    color: #636e72;
}

.volume {
    color: #a4c639;
}

.bv {
    font-weight: 500;
}

.pp-quick-filter {
    padding: 8px 12px;
    margin: 5px;
    border: 1px solid #e9ecef;
    border-radius: 20px;
    background: white;
    color: #636e72;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.pp-quick-filter:hover {
    background: #f1f9e4;
    color: #a4c639;
    border-color: #a4c639;
}

.pp-quick-filter.active {
    background: #a4c639;
    color: white;
    border-color: #a4c639;
}

.price-quick-filters, .bv-quick-filters {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    margin-top: 15px;
    padding: 5px;
}

.pp-filter-count {
    font-size: 14px;
    color: #636e72;
    font-weight: normal;
    margin-left: 10px;
}

.pp-prod-item {
    transition: all 0.3s ease;
}

.pp-prod-item.hidden {
    display: none;
}

.pp-main-container {
    display: flex;
    gap: 20px;
    padding: 20px;
    max-width: 1400px;
    margin: 0 auto;
}

.pp-sidebar {
    width: 300px;
    flex-shrink: 0;
}

.pp-content-area {
    flex-grow: 1;
}

.pp-product-details {
    background: white;
    border-radius: 15px;
    padding: 20px;
    margin-bottom: 30px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* Make product detail content smaller */
.pp-product-details .product-detail-container {
    max-width: 100%;
    padding: 0;
}

.pp-product-details .product-images {
    max-width: 300px;
}

.pp-products-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 20px;
}

.pp-product-card {
    background: white;
    border-radius: 12px;
    padding: 15px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.pp-product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.pp-product-image {
    height: 200px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pp-product-image img {
    max-height: 100%;
    max-width: 100%;
    object-fit: contain;
}

.pp-product-info {
    padding-top: 15px;
}

.pp-product-info h3 {
    font-size: 16px;
    margin-bottom: 10px;
    color: #2d3436;
}

.pp-product-meta {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
    font-size: 14px;
}

.pp-volume {
    color: #a4c639;
}

.pp-price {
    font-weight: 500;
}

.pp-bv {
    color: #636e72;
}

.pp-view-details {
    display: block;
    text-align: center;
    padding: 8px;
    background: #a4c639;
    color: white;
    border-radius: 6px;
    text-decoration: none;
    transition: background 0.3s ease;
}

.pp-view-details:hover {
    background: #8ba830;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .pp-main-container {
        flex-direction: column;
    }
    
    .pp-sidebar {
        width: 100%;
    }
}

.pp-category-info {
    display: flex;
    gap: 8px;
    margin-bottom: 10px;
    font-size: 12px;
}

.pp-category {
    background: #a4c639;
    color: white;
    padding: 3px 8px;
    border-radius: 12px;
}

.pp-subcategory {
    background: #f1f9e4;
    color: #a4c639;
    padding: 3px 8px;
    border-radius: 12px;
    border: 1px solid #a4c639;
}

.rkg-prod-meta {
    display: flex;
    gap: 15px;
    font-size: 13px;
    margin-top: 5px;
}

.rkg-volume {
    color: #a4c639;
}

.rkg-price {
    font-weight: 500;
}

.rkg-bv {
    color: #636e72;
}

.rkg-prod-name {
    font-weight: 500;
    color: #2d3436;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Quantity selector
    const minusBtn = document.querySelector('.minus');
    const plusBtn = document.querySelector('.plus');
    const qtyInput = document.querySelector('.qty-input');

    minusBtn.addEventListener('click', () => {
        let value = parseInt(qtyInput.value);
        if (value > 1) qtyInput.value = value - 1;
    });

    plusBtn.addEventListener('click', () => {
        let value = parseInt(qtyInput.value);
        qtyInput.value = value + 1;
    });

    // Thumbnail switching
    const thumbnails = document.querySelectorAll('.thumbnail');
    const mainImage = document.getElementById('mainImage');

    thumbnails.forEach(thumb => {
        thumb.addEventListener('click', () => {
            thumbnails.forEach(t => t.classList.remove('active'));
            thumb.classList.add('active');
            mainImage.src = thumb.src;
        });
    });

    // Update category toggle functionality
    document.querySelectorAll('.pp-cat-link').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const categoryItem = link.parentElement;
            
            // Close other open categories
            document.querySelectorAll('.pp-cat-item.active').forEach(item => {
                if (item !== categoryItem) {
                    item.classList.remove('active');
                }
            });
            
            categoryItem.classList.toggle('active');
        });
    });

    // Add this to your existing script
    document.querySelectorAll('.pp-filter-header').forEach(header => {
        header.addEventListener('click', () => {
            const filterItem = header.parentElement;
            filterItem.classList.toggle('active');
        });
    });

    // Price Range Slider
    const rangeMin = document.querySelector('.pp-range-min');
    const rangeMax = document.querySelector('.pp-range-max');
    const priceMin = document.getElementById('price-min');
    const priceMax = document.getElementById('price-max');
    const sliderTrack = document.querySelector('.pp-slider-track');

    function updateSlider() {
        const min = parseInt(rangeMin.value);
        const max = parseInt(rangeMax.value);
        const percent1 = (min / rangeMin.max) * 100;
        const percent2 = (max / rangeMax.max) * 100;
        
        sliderTrack.style.background = `linear-gradient(to right, 
            #ddd ${percent1}%, 
            #a4c639 ${percent1}%, 
            #a4c639 ${percent2}%, 
            #ddd ${percent2}%)`;

        priceMin.value = min;
        priceMax.value = max;
    }

    rangeMin.addEventListener('input', () => {
        if (parseInt(rangeMax.value) - parseInt(rangeMin.value) < 500) {
            rangeMin.value = parseInt(rangeMax.value) - 500;
        }
        updateSlider();
    });

    rangeMax.addEventListener('input', () => {
        if (parseInt(rangeMax.value) - parseInt(rangeMin.value) < 500) {
            rangeMax.value = parseInt(rangeMin.value) + 500;
        }
        updateSlider();
    });

    priceMin.addEventListener('change', () => {
        rangeMin.value = priceMin.value;
        updateSlider();
    });

    priceMax.addEventListener('change', () => {
        rangeMax.value = priceMax.value;
        updateSlider();
    });

    // Initial setup
    updateSlider();

    // BV Slider
    const bvRange = document.querySelector('.pp-bv-range');
    const bvValue = document.querySelector('.pp-bv-value');
    const bvTrack = document.querySelector('.pp-slider-track');

    function updateBVSlider() {
        const value = parseInt(bvRange.value);
        const percent = (value / bvRange.max) * 100;
        
        bvTrack.style.background = `linear-gradient(to right, 
            #a4c639 0%, 
            #a4c639 ${percent}%, 
            #f0f2f5 ${percent}%, 
            #f0f2f5 100%)`;

        bvValue.textContent = value;
    }

    bvRange.addEventListener('input', updateBVSlider);
    
    // Initial setup for BV slider
    updateBVSlider();

    // BV and Price Calculation
    const bvInput = document.getElementById('bv-input');
    const priceValue = document.querySelector('.price-value');
    const bvSlider = document.querySelector('.pp-bv-range');

    function calculatePrice(bv) {
        // You can adjust this formula based on your pricing strategy
        return bv * 20; // Example: 1 BV = ₹20
    }

    function updateBVAndPrice() {
        const bvValue = parseInt(bvInput.value);
        if (bvValue >= 0 && bvValue <= 1000) {
            bvSlider.value = bvValue;
            const estimatedPrice = calculatePrice(bvValue);
            priceValue.textContent = estimatedPrice.toLocaleString();
            updateBVSlider();

            // Update price range if needed
            const minPrice = Math.max(0, estimatedPrice - 1000);
            const maxPrice = estimatedPrice + 1000;
            document.getElementById('price-min').value = minPrice;
            document.getElementById('price-max').value = maxPrice;
            rangeMin.value = minPrice;
            rangeMax.value = maxPrice;
            updateSlider();
        }
    }

    bvInput.addEventListener('input', updateBVAndPrice);
    bvSlider.addEventListener('input', () => {
        bvInput.value = bvSlider.value;
        updateBVAndPrice();
    });

    // Initial setup
    updateBVAndPrice();

    // Sort Products
    const sortSelect = document.getElementById('sortProducts');
    sortSelect.addEventListener('change', function() {
        sortProducts(this.value);
    });

    // Add to your existing DOMContentLoaded event listener
    const subcategoryLinks = document.querySelectorAll('.pp-subcat-link');
    subcategoryLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            link.classList.toggle('active');
        });
    });

    // Add to your existing DOMContentLoaded event listener
    const quickFilters = document.querySelectorAll('.pp-quick-filter');
    quickFilters.forEach(filter => {
        filter.addEventListener('click', () => {
            const min = filter.dataset.min;
            const max = filter.dataset.max;
            const parent = filter.closest('.pp-filter-content');
            
            // Remove active class from other filters in same group
            parent.querySelectorAll('.pp-quick-filter').forEach(f => f.classList.remove('active'));
            filter.classList.add('active');

            // Update range inputs
            if (parent.querySelector('.pp-range-min')) {
                parent.querySelector('.pp-range-min').value = min;
                parent.querySelector('.pp-range-max').value = max;
                document.getElementById('price-min').value = min;
                document.getElementById('price-max').value = max;
            } else if (parent.querySelector('.pp-bv-range')) {
                parent.querySelector('.pp-bv-range').value = min;
                document.getElementById('bv-input').value = min;
            }
            filterAndDisplayProducts();
        });
    });

    // Add this function to filter and display products
    function filterAndDisplayProducts() {
        const minPrice = parseInt(document.getElementById('price-min').value);
        const maxPrice = parseInt(document.getElementById('price-max').value);
        const minBV = parseInt(document.getElementById('bv-input').value);
        const productItems = document.querySelectorAll('.pp-prod-item');
        let visibleCount = 0;

        productItems.forEach(item => {
            const price = parseInt(item.querySelector('.pp-price').textContent.replace('₹', ''));
            const bv = parseInt(item.querySelector('.pp-bv').textContent.replace('BV: ', ''));
            
            const matchesPrice = price >= minPrice && price <= maxPrice;
            const matchesBV = bv >= minBV;
            
            if (matchesPrice && matchesBV) {
                item.style.display = 'block';
                visibleCount++;
            } else {
                item.style.display = 'none';
            }
        });

        document.getElementById('visible-count').textContent = visibleCount;
    }

    // Update the event listeners in your existing code
    document.addEventListener('DOMContentLoaded', function() {
        // Price range slider events
        const priceMin = document.getElementById('price-min');
        const priceMax = document.getElementById('price-max');
        const rangeMin = document.querySelector('.pp-range-min');
        const rangeMax = document.querySelector('.pp-range-max');

        function updatePriceInputs() {
            priceMin.value = rangeMin.value;
            priceMax.value = rangeMax.value;
            filterAndDisplayProducts();
        }

        rangeMin.addEventListener('input', updatePriceInputs);
        rangeMax.addEventListener('input', updatePriceInputs);
        priceMin.addEventListener('change', filterAndDisplayProducts);
        priceMax.addEventListener('change', filterAndDisplayProducts);

        // BV slider events
        const bvInput = document.getElementById('bv-input');
        const bvRange = document.querySelector('.pp-bv-range');

        bvRange.addEventListener('input', () => {
            bvInput.value = bvRange.value;
            filterAndDisplayProducts();
        });

        bvInput.addEventListener('input', () => {
            bvRange.value = bvInput.value;
            filterAndDisplayProducts();
        });

        // Quick filter buttons
        const quickFilters = document.querySelectorAll('.pp-quick-filter');
        quickFilters.forEach(filter => {
            filter.addEventListener('click', () => {
                const min = filter.dataset.min;
                const max = filter.dataset.max;
                const parent = filter.closest('.pp-filter-content');
                
                parent.querySelectorAll('.pp-quick-filter').forEach(f => f.classList.remove('active'));
                filter.classList.add('active');

                if (parent.querySelector('.pp-range-min')) {
                    parent.querySelector('.pp-range-min').value = min;
                    parent.querySelector('.pp-range-max').value = max;
                    document.getElementById('price-min').value = min;
                    document.getElementById('price-max').value = max;
                } else if (parent.querySelector('.pp-bv-range')) {
                    parent.querySelector('.pp-bv-range').value = min;
                    document.getElementById('bv-input').value = min;
                }
                filterAndDisplayProducts();
            });
        });

        // Sort functionality
        const sortSelect = document.getElementById('sortProducts');
        sortSelect.addEventListener('change', function() {
            sortProducts(this.value);
        });

        // Initialize filters
        filterAndDisplayProducts();
    });

    // Update the sort functionality
    function sortProducts(selectedValue) {
        const productsGrid = document.querySelector('.pp-products-grid');
        const products = Array.from(productsGrid.querySelectorAll('.pp-product-card'));

        products.sort((a, b) => {
            const aPrice = parseInt(a.querySelector('.pp-price').textContent.replace('₹', ''));
            const bPrice = parseInt(b.querySelector('.pp-price').textContent.replace('₹', ''));
            const aBV = parseInt(a.querySelector('.pp-bv').textContent.replace('BV: ', ''));
            const bBV = parseInt(b.querySelector('.pp-bv').textContent.replace('BV: ', ''));

            switch(selectedValue) {
                case 'low-high':
                    return aPrice - bPrice;
                case 'high-low':
                    return bPrice - aPrice;
                case 'bv-low-high':
                    return aBV - bBV;
                case 'bv-high-low':
                    return bBV - aBV;
                default:
                    return 0;
            }
        });

        // Clear and re-append sorted products
        productsGrid.innerHTML = '';
        products.forEach(product => productsGrid.appendChild(product));
    }

    // Initial sort (if needed)
    sortProducts('low-high'); // or whatever default sort you want
});
</script> 