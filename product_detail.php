

<div class="product-detail-container">
    <?php
    // Product data array with categories and details
    $products = [
        // Health Care Products
        1 => [
            'category' => 'Health Care',
            'name' => 'Tulsi',
            'RKG' => 'TULS001',
            'volume' => '30 ML',
            'mrp' => 252,
            'dp' => 227,
            'bv' => 118,
            'rating' => 4.5,
            'description' => 'Pure and natural Tulsi drops for boosting immunity and overall health.',
            'benefits' => [
                'Boosts immunity',
                'Improves respiratory health',
                'Natural antioxidant properties',
                'Reduces stress and anxiety'
            ],
            'how_to_use' => 'Take 4-5 drops twice daily with water or as directed by your healthcare professional.',
            'additional_info' => [
                'Composition' => 'Pure Tulsi extract',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '24 months'
            ]
        ],
        2 => [
            'category' => 'Health Care',
            'name' => 'Aloevera Juice',
            'RKG' => 'ALOE002',
            'volume' => '500 ML',
            'mrp' => 345,
            'dp' => 311,
            'bv' => 180,
            'rating' => 4.3,
            'description' => 'Pure Aloe Vera juice for digestive health and immunity.',
            'benefits' => [
                'Improves digestion',
                'Boosts immunity',
                'Enhances skin health',
                'Natural detoxifier'
            ],
            'how_to_use' => 'Take 30ml juice twice daily on an empty stomach.',
            'additional_info' => [
                'Composition' => 'Pure Aloe Vera extract',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '12 months'
            ]
        ],
        3 => [
            'category' => 'Health Care',
            'name' => 'Silajeet Malt',
            'RKG' => 'SILJ003',
            'volume' => '400 GM',
            'mrp' => 310,
            'dp' => 279,
            'bv' => 140,
            'rating' => 4.4,
            'description' => 'Premium quality Shilajit malt for strength and vitality.',
            'benefits' => [
                'Increases energy levels',
                'Improves stamina',
                'Enhances immunity',
                'Natural revitalizer'
            ],
            'how_to_use' => 'Take one tablespoon daily with milk or water.',
            'additional_info' => [
                'Composition' => 'Pure Shilajit extract with herbs',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '24 months'
            ]
        ],
        4 => [
            'category' => 'Health Care',
            'subcategory' => 'Immunity & Wellness',
            'name' => 'Liver Enzyme',
            'RKG' => 'LIVR004',
            'volume' => '200 ML',
            'mrp' => 142,
            'dp' => 128,
            'bv' => 68,
            'rating' => 4.4,
            'description' => 'Natural liver enzyme supplement for improved liver health and function.',
            'benefits' => [
                'Supports liver function',
                'Aids in detoxification',
                'Improves digestion',
                'Boosts metabolism'
            ],
            'how_to_use' => 'Take 10-15ml twice daily with water before meals.',
            'additional_info' => [
                'Composition' => 'Natural herbs and enzymes',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '18 months'
            ]
        ],

        // Personal Care Products
        5 => [
            'category' => 'Personal Care',
            'name' => 'Red Onion Hair Oil',
            'RKG' => 'ROHO005',
            'volume' => '250 ML',
            'mrp' => 315,
            'dp' => 284,
            'bv' => 85,
            'rating' => 4.6,
            'description' => 'Enriched red onion hair oil for strong and healthy hair.',
            'benefits' => [
                'Promotes hair growth',
                'Reduces hair fall',
                'Strengthens hair roots',
                'Prevents premature greying'
            ],
            'how_to_use' => 'Apply to scalp and massage gently. Leave overnight for best results.',
            'additional_info' => [
                'Composition' => 'Red onion extract, natural oils',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '18 months'
            ]
        ],
        6 => [
            'category' => 'Personal Care',
            'name' => 'Red Onion Shampoo',
            'RKG' => 'ROSH006',
            'volume' => '250 ML',
            'mrp' => 340,
            'dp' => 306,
            'bv' => 90,
            'rating' => 4.4,
            'description' => 'Premium Red Onion Shampoo enriched with natural ingredients for healthy hair growth.',
            'benefits' => [
                'Promotes hair growth',
                'Prevents hair fall',
                'Strengthens hair from root',
                'Adds natural shine'
            ],
            'how_to_use' => 'Apply on wet hair, massage gently and rinse thoroughly. Use regularly for best results.',
            'additional_info' => [
                'Composition' => 'Red Onion extract, Natural cleansers, Essential oils',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '24 months'
            ]
        ],

        // Daily Essential Products
        7 => [
            'category' => 'Daily Essentials',
            'name' => 'Tea Granular',
            'RKG' => 'TEAG007',
            'volume' => '250 GM',
            'mrp' => 165,
            'dp' => 149,
            'bv' => 27,
            'rating' => 4.3,
            'description' => 'Premium quality tea granules for a perfect cup of refreshing tea.',
            'benefits' => [
                'Rich aroma',
                'Perfect blend',
                'Refreshing taste',
                'Natural ingredients'
            ],
            'how_to_use' => 'Add 1 teaspoon per cup in boiling water. Brew for 2-3 minutes.',
            'additional_info' => [
                'Composition' => 'Premium tea granules',
                'Storage' => 'Store in an airtight container',
                'Shelf Life' => '12 months'
            ]
        ],

        // Personal Care Products
        8 => [
            'category' => 'Personal Care',
            'name' => 'Soap Bath',
            'RKG' => 'SOAP008',
            'volume' => '100 GM',
            'mrp' => 50,
            'dp' => 45,
            'bv' => 9,
            'rating' => 4.2,
            'description' => 'Natural bath soap enriched with essential oils for gentle cleansing.',
            'benefits' => [
                'Gentle cleansing',
                'Natural ingredients',
                'Moisturizing effect',
                'Suitable for all skin types'
            ],
            'how_to_use' => 'Lather with water and use for bathing. Suitable for daily use.',
            'additional_info' => [
                'Composition' => 'Natural oils, Gentle cleansers',
                'Storage' => 'Keep in a dry place',
                'Shelf Life' => '24 months'
            ]
        ],
        9 => [
            'category' => 'Personal Care',
            'name' => 'RKGDent Care',
            'RKG' => 'DENT009',
            'volume' => '100 GM',
            'mrp' => 152,
            'dp' => 137,
            'bv' => 10,
            'rating' => 4.5,
            'description' => 'Advanced dental care toothpaste for complete oral hygiene.',
            'benefits' => [
                'Complete cavity protection',
                'Freshens breath',
                'Strengthens teeth',
                'Healthy gums'
            ],
            'how_to_use' => 'Brush twice daily with adequate quantity for best results.',
            'additional_info' => [
                'Composition' => 'Natural herbs, Dental care ingredients',
                'Storage' => 'Store in a cool, dry place',
                'Shelf Life' => '24 months'
            ]
        ],
    ];

    $product_id = $_GET['id'] ?? 1;
    $product = $products[$product_id] ?? $products[1];
    ?>

    <div class="product-detail">
        <div class="product-images">
            <div class="main-image">
                <img src="images/products/malt.webp" 
                     alt="<?php echo $product['name']; ?>" 
                     id="mainImage">
            </div>
            <div class="thumbnail-list">
                <img src="images/products/onion oil.png" alt="View 1" class="thumbnail active" onclick="changeImage(this)">
                <img src="images/products/onion oil.png" alt="View 2" class="thumbnail" onclick="changeImage(this)">
                <img src="images/products/onion oil.png" alt="View 3" class="thumbnail" onclick="changeImage(this)">
            </div>
        </div>

        <div class="product-info">
            <div class="category-badge"><?php echo $product['category']; ?></div>
            
            <h1 class="product-title"><?php echo $product['name']; ?></h1>
            <div class="product-meta">
                <span class="RKG">RKG: <?php echo $product['RKG']; ?></span>
                <div class="rating">
                    <?php for($i = 1; $i <= 5; $i++): ?>
                        <i class="fas fa-star<?php echo $i <= $product['rating'] ? ' active' : ''; ?>"></i>
                    <?php endfor; ?>
                    <span>(<?php echo $product['rating']; ?>/5)</span>
                </div>
            </div>

            <div class="product-specs">
                <div class="spec-item">
                    <span class="label">Volume:</span>
                    <span class="value"><?php echo $product['volume']; ?></span>
                </div>
                <div class="spec-item">
                    <span class="label">MRP:</span>
                    <span class="value">₹<?php echo $product['mrp']; ?></span>
                </div>
                <div class="spec-item">
                    <span class="label">DP:</span>
                    <span class="value">₹<?php echo $product['dp']; ?></span>
                </div>
                <div class="spec-item">
                    <span class="label">BV:</span>
                    <span class="value"><?php echo $product['bv']; ?></span>
                </div>
            </div>

            <div class="purchase-actions">
                <div class="quantity-selector">
                    <button class="qty-btn minus">-</button>
                    <input type="number" value="1" min="1" class="qty-input">
                    <button class="qty-btn plus">+</button>
                </div>
                <button class="add-to-cart-btn">
                    <i class="fas fa-shopping-cart"></i>
                    Add to Cart
                </button>
                <button class="buy-now-btn">Buy Now</button>
            </div>
        </div>
    </div>

    <!-- Product Details Navigation Section -->
    <div class="pd-tabs-navigation">
        <div class="pd-tabs-wrapper">
            <div class="pd-tabs-container">
                <button class="pd-tab-btn active" data-tab="description">
                    <i class="fas fa-info-circle"></i>
                    <span>Description</span>
                </button>
                <button class="pd-tab-btn" data-tab="benefits">
                    <i class="fas fa-check-double"></i>
                    <span>Benefits</span>
                </button>
                <button class="pd-tab-btn" data-tab="how-to-use">
                    <i class="fas fa-hand-holding"></i>
                    <span>How to Use</span>
                </button>
            </div>
            <div class="pd-content-wrapper">
                <div class="pd-content active" id="description">
                    <h3>Description</h3>
                    <p><?php echo $product['description']; ?></p>
                </div>
                <div class="pd-content" id="benefits">
                    <h3>Benefits</h3>
                    <ul class="benefits-list">
                        <?php foreach($product['benefits'] as $benefit): ?>
                            <li>
                                <i class="fas fa-check-circle"></i>
                                <span><?php echo $benefit; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="pd-content" id="how-to-use">
                    <h3>How to Use</h3>
                    <p><?php echo $product['how_to_use']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.product-detail-container {
    max-width: 1200px;
    margin: 40px auto;
    padding: 20px;
}

.product-detail {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    background: white;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.product-images {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.main-image {
    border: 1px solid #f0f2f5;
    border-radius: 8px;
    overflow: hidden;
}

.main-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.thumbnail-list {
    display: flex;
    gap: 10px;
}

.thumbnail {
    width: 80px;
    height: 80px;
    border: 2px solid #f0f2f5;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.thumbnail.active {
    border-color: #a4c639;
}

.product-title {
    font-size: 28px;
    color: #2d3436;
    margin-bottom: 15px;
}

.product-meta {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-bottom: 20px;
}

.sku {
    color: #636e72;
    font-size: 14px;
}

.rating {
    display: flex;
    align-items: center;
    gap: 5px;
}

.stars i {
    color: #ffd700;
    font-size: 16px;
}

.stars i:not(.active) {
    color: #dfe6e9;
}

.price-section {
    margin: 20px 0;
}

.current-price {
    font-size: 24px;
    font-weight: 600;
    color: #2d3436;
    margin-right: 10px;
}

.original-price {
    color: #636e72;
    text-decoration: line-through;
}

.discount-badge {
    background: #a4c639;
    color: white;
    padding: 4px 8px;
    border-radius: 4px;
    font-size: 14px;
    margin-left: 10px;
}

.description {
    color: #636e72;
    line-height: 1.6;
    margin: 20px 0;
}

.features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 15px;
    margin: 20px 0;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 10px;
}

.feature-item i {
    color: #a4c639;
}

.key-ingredients {
    margin: 30px 0;
}

.ingredient-bar {
    margin: 15px 0;
}

.ingredient-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}

.progress-bar {
    background: #f0f2f5;
    height: 8px;
    border-radius: 4px;
    overflow: hidden;
}

.progress {
    background: #a4c639;
    height: 100%;
    border-radius: 4px;
}

.purchase-actions {
    display: flex;
    gap: 15px;
    margin-top: 30px;
}

.quantity-selector {
    display: flex;
    align-items: center;
    border: 1px solid #dfe6e9;
    border-radius: 6px;
    overflow: hidden;
}

.qty-btn {
    width: 40px;
    height: 40px;
    border: none;
    background: #f8f9fa;
    cursor: pointer;
    font-size: 16px;
    outline: none;
    transform: scale(1);
    transition: all 0.2s ease;
}

.qty-input {
    width: 60px;
    height: 40px;
    border: none;
    text-align: center;
    font-size: 16px;
}

.add-to-cart-btn, .buy-now-btn {
    padding: 0 30px;
    height: 40px;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    outline: none;
    transform: scale(1);
}

.add-to-cart-btn {
    background: #a4c639;
    color: white;
    display: flex;
    align-items: center;
    gap: 8px;
}

.buy-now-btn {
    background: #2d3436;
    color: white;
}

@media (max-width: 768px) {
    .product-detail {
        grid-template-columns: 1fr;
    }
}

.category-badge {
    background: #a4c639;
    color: white;
    padding: 5px 15px;
    border-radius: 20px;
    display: inline-block;
    margin-bottom: 15px;
    font-size: 14px;
}

.product-specs {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
    margin: 20px 0;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
}

.spec-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.spec-item .label {
    color: #636e72;
    font-weight: 500;
}

.spec-item .value {
    color: #2d3436;
    font-weight: 600;
}

.benefits-list {
    list-style: none;
    padding: 0;
    margin: 15px 0;
}

.benefits-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 10px;
    color: #636e72;
}

.benefits-list li i {
    color: #a4c639;
}

.info-table {
    width: 100%;
    border-collapse: collapse;
    margin: 15px 0;
}

.info-table td {
    padding: 10px;
    border-bottom: 1px solid #f0f2f5;
}

.info-label {
    color: #636e72;
    font-weight: 500;
    width: 40%;
}

.info-value {
    color: #2d3436;
}

.pd-tabs-navigation {
    margin-top: 40px;
    background: white;
    border-radius: 15px;
    padding: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.05);
}

.pd-tabs-wrapper {
    display: flex;
    gap: 30px;
    max-width: 1200px;
    margin: 0 auto;
}

.pd-tabs-container {
    width: 250px;
    display: flex;
    flex-direction: column;
    gap: 10px;
    background: #f8f9fa;
    padding: 15px;
    border-radius: 12px;
}

.pd-tab-btn {
    width: 100%;
    padding: 15px;
    border: none;
    background: transparent;
    font-size: 15px;
    color: #636e72;
    cursor: pointer;
    position: relative;
    transition: all 0.3s ease;
    border-radius: 10px;
    display: flex;
    align-items: center;
    gap: 12px;
    text-align: left;
}

.pd-tab-btn i {
    font-size: 18px;
    min-width: 24px;
    transition: all 0.3s ease;
}

.pd-tab-btn:hover {
    color: #a4c639;
    background: #f1f9e4;
}

.pd-tab-btn.active {
    color: #a4c639;
    background: white;
    font-weight: 500;
    box-shadow: 0 2px 8px rgba(164, 198, 57, 0.15);
}

.pd-tab-btn.active i {
    transform: scale(1.1);
}

.pd-content-wrapper {
    flex: 1;
    background: white;
    border-radius: 12px;
    padding: 25px;
}

.pd-content {
    display: none;
    animation: fadeIn 0.4s ease;
}

.pd-content.active {
    display: block;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .pd-tabs-wrapper {
        flex-direction: column;
    }
    
    .pd-tabs-container {
        width: 100%;
    }
    
    .pd-tab-btn {
        padding: 12px;
        font-size: 14px;
    }
}

button {
    outline: none !important;
}

button:focus {
    outline: none !important;
    box-shadow: none !important;
}

.qty-btn:active {
    background: #e9ecef;
}

.add-to-cart-btn:active {
    background: #93a833;
}

.buy-now-btn:active {
    background: #1e2527;
}
</style>

<script>
// Image switching functionality
function changeImage(thumbnail) {
    const mainImage = document.getElementById('mainImage');
    mainImage.src = thumbnail.src;
    
    // Update active thumbnail
    document.querySelectorAll('.thumbnail').forEach(thumb => {
        thumb.classList.remove('active');
    });
    thumbnail.classList.add('active');
}

// Quantity controls
document.addEventListener('DOMContentLoaded', function() {
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
});

document.addEventListener('DOMContentLoaded', function() {
    const tabBtns = document.querySelectorAll('.pd-tab-btn');
    const tabContents = document.querySelectorAll('.pd-content');

    tabBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons and contents
            tabBtns.forEach(b => b.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));

            // Add active class to clicked button and corresponding content
            btn.classList.add('active');
            document.getElementById(btn.dataset.tab).classList.add('active');
        });
    });
});
</script>
