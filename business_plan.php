<?php include 'header.php'; ?>

<section class="business-plan-section">
    <div class="bp-container">
        <!-- Hero Section -->
        <div class="bp-hero">
            <div class="hero-content">
                <h1 class="company-title">RKGROWOPAL MARKETINGS PVT. LTD.</h1>
                <h2>Business Plan</h2>
                <p class="bp-subtitle">Join RKG and Build Your Success Story</p>
                <p class="website-url">www.rkgrowopal.co.in</p>
            </div>
            <div class="hero-logo">
                <img src="mp4/rk1.png" alt="RKG Logo" class="floating-logo">
            </div>
        </div>

        <!-- Welcome Section -->
        <div class="welcome-section">
            <div class="welcome-content">
                <div class="welcome-text">
                    <h2>आत्मनिर्भर बनें और अपना बिज़नेस स्वयं करें।</h2>
                </div>
                <div class="welcome-features">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="feature-text">Business Growth</div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="feature-text">Financial Freedom</div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="feature-text">Team Building</div>
                    </div>
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <div class="feature-text">Success</div>
                    </div>
                </div>
            </div>
            <div class="welcome-decoration">
                <div class="decoration-circle"></div>
                <div class="decoration-line"></div>
            </div>
        </div>

        <!-- Types of Income Section -->
        <div class="bp-types-income">
            <h2>Types of Income</h2>
            <div class="income-cards-container">
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="card-content">
                        <h3>Matching Income</h3>
                        <div class="percentage">15%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-content">
                        <h3>Direct Income</h3>
                        <div class="percentage">15%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="card-content">
                        <h3>Profit Income</h3>
                        <div class="percentage">10%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-store"></i>
                    </div>
                    <div class="card-content">
                        <h3>Retail Income</h3>
                        <div class="percentage">5-25%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <div class="card-content">
                        <h3>Royalty Income</h3>
                        <div class="percentage">1-5%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="card-content">
                        <h3>Rank Income</h3>
                        <div class="percentage">1-3.5%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
                <div class="income-card">
                    <div class="card-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="card-content">
                        <h3>Franchise Income</h3>
                        <div class="percentage">5-10%</div>
                        <div class="card-glow"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Income Levels -->
        <div class="bp-income-structure">
            <h2>Business Income Structure</h2>
            <div class="calculator-inputs">
                <!-- Direct Joining Section -->
                <div class="joining-section">
                    <h4>Direct Joining Details</h4>
                    <div class="input-row">
                        <div class="input-group">
                            <label>Left Team Joinings:</label>
                            <input type="number" id="leftJoinings" placeholder="Number of left joinings">
                        </div>
                        <div class="input-group">
                            <label>Right Team Joinings:</label>
                            <input type="number" id="rightJoinings" placeholder="Number of right joinings">
                        </div>
                        <div class="input-group">
                            <label>Left Team BV:</label>
                            <input type="number" id="leftJoiningBV" placeholder="BV for left team">
                        </div>
                        <div class="input-group">
                            <label>Right Team BV:</label>
                            <input type="number" id="rightJoiningBV" placeholder="BV for right team">
                        </div>
                    </div>
                </div>
                <!-- Self Repurchasing Section -->
                <div class="repurchase-section">
                    <h4>Self Repurchasing</h4>
                    <div class="input-group">
                        <label>Self Repurchase BV:</label>
                        <input type="number" id="selfRepurchaseBV" placeholder="Enter self repurchase BV">
                    </div>
                </div>
                <!-- Manual BV Entry Section -->
                <div class="manual-bv-section">
                    <h4>Additional BV (if any)</h4>
                    <div class="input-group">
                        <label>Enter Left BV:</label>
                        <input type="number" id="leftBV" placeholder="Enter Left BV">
                    </div>
                    <div class="input-group">
                        <label>Enter Right BV:</label>
                        <input type="number" id="rightBV" placeholder="Enter Right BV">
                    </div>
                </div>
                <button id="calculateBtn">Calculate Income</button>
            </div>
            <div id="calculationResult" class="calculation-result" style="display: none;">
                <h3>Income Calculation Details</h3>
                <div class="result-grid">
                    <div class="result-item">
                        <h4>Direct Income (15%)</h4>
                        <div id="directIncome" class="amount"></div>
                        <div id="directCalc" class="calculation-detail"></div>
                    </div>
                    <div class="result-item">
                        <h4>Matching Income (15%)</h4>
                        <div id="matchingIncome" class="amount"></div>
                        <div id="matchingCalc" class="calculation-detail"></div>
                    </div>
                    <div class="result-item">
                        <h4>Repurchase Income</h4>
                        <div id="repurchaseIncome" class="amount"></div>
                        <div id="repurchaseCalc" class="calculation-detail"></div>
                    </div>
                    <div class="result-item" id="royaltySection">
                        <h4>Royalty Income</h4>
                        <div id="royaltyIncome" class="amount"></div>
                        <div id="royaltyCalc" class="calculation-detail"></div>
                    </div>
                    <div class="result-item total">
                        <h4>Total Income</h4>
                        <div id="totalIncome" class="amount"></div>
                    </div>
                </div>
            </div>
            <div class="bp-table-container">
                <table class="bp-income-table">
                    <thead>
                        <tr>
                            <th>Slab Rate</th>
                            <th>Left BV</th>
                            <th>Right BV</th>
                            <th>Royalty</th>
                            <th>Rank</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="slab-row" data-slab="5">
                            <td class="slab">5%</td>
                            <td>1,000</td>
                            <td>1,000</td>
                            <td>-</td>
                            <td>Distributor</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr>
                            <td class="slab">7%</td>
                            <td>5,000</td>
                            <td>5,000</td>
                            <td>-</td>
                            <td>Star</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr>
                            <td class="slab">9%</td>
                            <td>15,000</td>
                            <td>15,000</td>
                            <td>-</td>   
                            <td>Bronze</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr>
                            <td class="slab">11%</td>
                            <td>35,000</td>
                            <td>35,000</td>
                            <td>-</td>
                            <td>Bronze Star</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="highlight">
                            <td class="slab">13%</td>
                            <td>70,000</td>
                            <td>70,000</td>
                            <td>1% R Matching income</td>
                            <td>Silver</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="highlight">
                            <td class="slab">15%</td>
                            <td>1.2 Lac</td>
                            <td>1.2 Lac</td>
                            <td>2% R Matching income</td>
                            <td>Gold</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="premium">
                            <td class="slab">16%</td>
                            <td>4 Lac</td>
                            <td>4 Lac</td>
                            <td>3%</td>
                            <td>Pearl</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="premium">
                            <td class="slab">17%</td>
                            <td>7 Lac</td>
                            <td>7 Lac</td>
                            <td>3.5%</td>
                            <td>Ruby</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="premium">
                            <td class="slab">18%</td>
                            <td>12 Lac</td>
                            <td>12 Lac</td>
                            <td>4%</td>
                            <td>Sapphire</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="premium">
                            <td class="slab">19%</td>
                            <td>25 Lac</td>
                            <td>25 Lac</td>
                            <td>5%</td>
                            <td>Diamond</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="elite">
                            <td class="slab">20%</td>
                            <td>50 Lac</td>
                            <td>50 Lac</td>
                            <td>5% R + 1% bonus</td>
                            <td>Black Diamond</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="elite">
                            <td class="slab">21%</td>
                            <td>1 Cr</td>
                            <td>1 Cr</td>
                            <td>5% R + 1.5% bonus</td>
                            <td>Kohinoor</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="elite">
                            <td class="slab">22%</td>
                            <td>2.5 Cr</td>
                            <td>2.5 Cr</td>
                            <td>5% R + 2% bonus</td>
                            <td>S Kohinoor</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="crown">
                            <td class="slab">23%</td>
                            <td>6 Cr</td>
                            <td>6 Cr</td>
                            <td>5% R + 2.5% bonus</td>
                            <td>Crown</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="crown">
                            <td class="slab">24%</td>
                            <td>12 Cr</td>
                            <td>12 Cr</td>
                            <td>5% R + 3% bonus</td>
                            <td>G Kohinoor</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                        <tr class="crown">
                            <td class="slab">25%</td>
                            <td>20 Cr</td>
                            <td>20 Cr</td>
                            <td>5% R + 3.5% bonus</td>
                            <td>D Kohinoor</td>
                            <td><button class="calculate-btn">Calculate</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Benefits Section -->
        <div class="bp-benefits">
            <h2>Benefits & Rewards</h2>
            <div class="bp-benefits-grid">
                <div class="bp-benefit-card">
                    <i class="fas fa-car"></i>
                    <h3>Car Fund</h3>
                    <p>Earn car fund bonus on achieving specific targets</p>
                </div>
                <div class="bp-benefit-card">
                    <i class="fas fa-home"></i>
                    <h3>House Fund</h3>
                    <p>Special house fund for top performers</p>
                </div>
                <div class="bp-benefit-card">
                    <i class="fas fa-plane"></i>
                    <h3>Travel Rewards</h3>
                    <p>International trips for qualifying members</p>
                </div>
                <div class="bp-benefit-card">
                    <i class="fas fa-medal"></i>
                    <h3>Recognition</h3>
                    <p>Special recognition and awards at events</p>
                </div>
            </div>
        </div>

        <!-- Franchise Income Section -->
        <div class="franchise-income">
            <h2>Franchise Income</h2>
            <div class="franchise-steps">
                <div class="step-item">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Business: 25,000</h3>
                        <p>Income: 5%</p>
                    </div>
                </div>
                <div class="step-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="step-item">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Business: 75,000</h3>
                        <p>Income: 7%</p>
                    </div>
                </div>
                <div class="step-arrow">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="step-item">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Business: 2 Lac</h3>
                        <p>Income: 10%</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Income Example Section -->
        <div class="bp-income-example">
            <h2>Income Examples</h2>
            <div class="example-table-wrapper">
                <table class="example-table">
                    <thead>
                        <tr>
                            <th>1st Month RKG</th>
                            <th>6 Month RKG</th>
                            <th>12 Month (2yr) RKG</th>
                            <th>36 Month (3yr) RKG</th>
                            <th>60 Month (5yr) RKG</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bv-row">
                            <td>
                                RIGHT-1/1000BV<br>
                                LEFT-1/1000BV
                            </td>
                            <td>
                                RIGHT-100/1L BV<br>
                                LEFT-100/1L BV
                            </td>
                            <td>
                                RIGHT-1000/10L BV<br>
                                LEFT-1000/10L BV
                            </td>
                            <td>
                                RIGHT-2000/20L BV<br>
                                LEFT-2000/20L BV
                            </td>
                            <td>
                                RIGHT-5000/50L BV<br>
                                LEFT-5000/50L BV
                            </td>
                        </tr>
                        <tr class="income-row">
                            <td>
                                M-15% = 150<br>
                                D-15% = 300<br>
                                LEVEL-5%
                            </td>
                            <td>
                                M-15% = 15K<br>
                                D-15%= 300<br>
                                LEVEL-13%
                            </td>
                            <td>
                                M-15% = 1.50L<br>
                                D-15% = 300<br>
                                LEVEL-17%
                            </td>
                            <td>
                                M-15% = 3L<br>
                                D-15% = 300<br>
                                LEVEL-18%
                            </td>
                            <td>
                                M-15% = 7.50L<br>
                                D-15% = 300<br>
                                LEVEL-20%
                            </td>
                        </tr>
                        <tr class="total-row">
                            <td>
                                <div class="total-label">TOTAL INCOME</div>
                                <div class="total-amount">500/-</div>
                            </td>
                            <td>
                                <div class="total-label">TOTAL INCOME</div>
                                <div class="total-amount">15300/-</div>
                            </td>
                            <td>
                                <div class="total-label">TOTAL INCOME</div>
                                <div class="total-amount">1,50,300/-</div>
                            </td>
                            <td>
                                <div class="total-label">TOTAL INCOME</div>
                                <div class="total-amount">3,00,300/-</div>
                            </td>
                            <td>
                                <div class="total-label">TOTAL INCOME</div>
                                <div class="total-amount">7,50,300/-</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Monthly Growth Calculator -->
        <div class="bp-growth-calculator">
            <h2>Monthly Growth & Income Projection</h2>
            <div class="growth-table-wrapper">
                <table class="growth-table">
                    <thead>
                        <tr>
                            <th>Month</th>
                            <th>Left Team</th>
                            <th>Right Team</th>
                            <th>Total BV</th>
                            <th>Matching Income (15%)</th>
                            <th>Direct Income (15%)</th>
                            <th>Total Income</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1st Month</td>
                            <td>50 × 1000 = 50,000 BV</td>
                            <td>50 × 1000 = 50,000 BV</td>
                            <td>1,00,000 BV</td>
                            <td>₹15,000</td>
                            <td>₹15,000</td>
                            <td>₹30,000</td>
                        </tr>
                        <tr>
                            <td>2nd Month</td>
                            <td>100 × 1000 = 1,00,000 BV</td>
                            <td>100 × 1000 = 1,00,000 BV</td>
                            <td>2,00,000 BV</td>
                            <td>₹30,000</td>
                            <td>₹30,000</td>
                            <td>₹60,000</td>
                        </tr>
                        <tr>
                            <td>3rd Month</td>
                            <td>150 × 1000 = 1,50,000 BV</td>
                            <td>150 × 1000 = 1,50,000 BV</td>
                            <td>3,00,000 BV</td>
                            <td>₹45,000</td>
                            <td>₹45,000</td>
                            <td>₹90,000</td>
                        </tr>
                        <tr>
                            <td>4th Month</td>
                            <td>200 × 1000 = 2,00,000 BV</td>
                            <td>200 × 1000 = 2,00,000 BV</td>
                            <td>4,00,000 BV</td>
                            <td>₹60,000</td>
                            <td>₹60,000</td>
                            <td>₹1,20,000</td>
                        </tr>
                        <tr>
                            <td>5th Month</td>
                            <td>250 × 1000 = 2,50,000 BV</td>
                            <td>250 × 1000 = 2,50,000 BV</td>
                            <td>5,00,000 BV</td>
                            <td>₹75,000</td>
                            <td>₹75,000</td>
                            <td>₹1,50,000</td>
                        </tr>
                        <tr class="highlight-row">
                            <td>6th Month</td>
                            <td>300 × 1000 = 3,00,000 BV</td>
                            <td>300 × 1000 = 3,00,000 BV</td>
                            <td>6,00,000 BV</td>
                            <td>₹90,000</td>
                            <td>₹90,000</td>
                            <td>₹1,80,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="calculation-explanation">
                <h3>Income Calculation Explanation:</h3>
                <ul>
                    <li>Per Person BV: 1,000</li>
                    <li>Monthly Joinings: 50 people on each side</li>
                    <li>Matching Income: 15% of matched BV</li>
                    <li>Direct Income: 15% of personal group BV</li>
                    <li>Example for 1st Month:
                        <ul>
                            <li>Total BV = (50 × 1000) + (50 × 1000) = 100,000 BV</li>
                            <li>Matching Income = 100,000 × 15% = ₹15,000</li>
                            <li>Direct Income = 100,000 × 15% = ₹15,000</li>
                            <li>Total Income = ₹30,000</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Join Now CTA -->
        <div class="bp-join-cta">
            <h2>Start Your Journey Today</h2>
            <p>Join RKG and begin your path to financial freedom</p>
            <a href="register.php" class="bp-join-btn">Join Now</a>
        </div>
    </div>
</section>

<style>
.business-plan-section {
    background: #ffffff;
    position: relative;
    overflow: hidden;
    padding: 80px 0;
}

.business-plan-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M54 22c0-12-10-22-22-22S10 10 10 22c0 11 7 21 17 24v14h10V46c10-3 17-13 17-24zm-5 0c0 9-7 17-17 17s-17-8-17-17c0-9 7-17 17-17s17 8 17 17z' fill='%23a4c639' fill-opacity='0.05'/%3E%3C/svg%3E"),
        url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' fill='%234caf50' fill-opacity='0.05'/%3E%3C/svg%3E");
    background-position: 0 0, 30px 30px;
    background-size: 60px 60px, 52px 26px;
    animation: patternMove 30s linear infinite;
}

@keyframes patternMove {
    0% {
        background-position: 0 0, 30px 30px;
    }
    100% {
        background-position: 60px 60px, 90px 90px;
    }
}

.bp-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
    background: rgba(255, 255, 255, 0.9);
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
}

/* Add subtle hover effect to sections */
.welcome-section,
.bp-types-income,
.bp-income-structure,
.bp-benefits,
.franchise-income {
    transition: transform 0.3s ease;
}

.welcome-section:hover,
.bp-types-income:hover,
.bp-income-structure:hover,
.bp-benefits:hover,
.franchise-income:hover {
    transform: translateY(-5px);
}

/* Update card backgrounds for better contrast */
.bp-level-card,
.bp-benefit-card,
.bp-income-structure,
.bp-join-cta {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

/* Add subtle hover effects */
.bp-level-card:hover,
.bp-benefit-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
    background: rgba(255, 255, 255, 1);
}

/* Add gradient border to important elements */
.bp-hero,
.bp-types-income,
.bp-join-cta {
    position: relative;
    border: 1px solid transparent;
    background-clip: padding-box;
}

.bp-hero::before,
.bp-types-income::before,
.bp-join-cta::before {
    content: '';
    position: absolute;
    top: -2px;
    left: -2px;
    right: -2px;
    bottom: -2px;
    background: linear-gradient(135deg, #a4c639, #8ba830);
    z-index: -1;
    border-radius: 22px;
    opacity: 0.5;
}

/* Add subtle animation to icons */
.bp-benefit-card i {
    animation: pulse 2s infinite ease-in-out;
}

@keyframes pulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

.bp-hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: linear-gradient(135deg, #a4c639 0%, #4caf50 100%);
    margin: -80px -20px 60px;
    padding: 120px 40px;
    position: relative;
    overflow: hidden;
    clip-path: polygon(0 0, 100% 0, 100% 85%, 0 100%);
}

.hero-content {
    flex: 1;
    max-width: 600px;
}

.hero-logo {
    flex: 0 0 300px;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 2;
}

.floating-logo {
    width: 100%;
    max-width: 250px;
    height: auto;
    filter: drop-shadow(0 10px 20px rgba(0,0,0,0.2));
    animation: floatAnimation 3s ease-in-out infinite;
}

@keyframes floatAnimation {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-20px);
    }
}

.bp-hero::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: url('images/pattern.png') repeat;
    opacity: 0.1;
    animation: slide 20s linear infinite;
}

@keyframes slide {
    0% { background-position: 0% 0%; }
    100% { background-position: 100% 100%; }
}

.bp-hero h1 {
    font-size: 48px;
    margin-bottom: 20px;
}

.bp-subtitle {
    font-size: 20px;
    opacity: 0.9;
}

/* Levels Section */
.bp-income-structure {
    margin: 50px 0;
    padding: 20px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.bp-income-structure h2 {
    text-align: center;
    color: #2d3436;
    margin-bottom: 30px;
    font-size: 32px;
}

.bp-table-container {
    overflow-x: auto;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
}

.bp-income-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    font-size: 15px;
}

.bp-income-table thead {
    background: linear-gradient(135deg, #a4c639, #8ba830);
}

.bp-income-table th {
    color: white;
    padding: 15px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.bp-income-table td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #f0f2f5;
}

.bp-income-table .slab {
    font-weight: 600;
    color: #a4c639;
}

/* Row Styling */
.bp-income-table tr:hover {
    background: #f8f9fa;
}

.bp-income-table tr.highlight {
    background: #f1f9e4;
}

.bp-income-table tr.premium {
    background: #fff8e1;
}

.bp-income-table tr.elite {
    background: #e3f2fd;
}

.bp-income-table tr.crown {
    background: #fce4ec;
}

/* Rank Column Styling */
.bp-income-table td:last-child {
    font-weight: 600;
    color: #2d3436;
}

/* Responsive Design */
@media (max-width: 968px) {
    .bp-hero {
        flex-direction: column;
        text-align: center;
        gap: 40px;
    }
    
    .hero-logo {
        flex: 0 0 200px;
    }
    
    .floating-logo {
        max-width: 200px;
    }
}

/* Add animations */
.bp-income-table tr {
    transition: all 0.3s ease;
}

.bp-income-table tr:hover {
    transform: scale(1.01);
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    z-index: 1;
    position: relative;
}

/* Add tooltips for ranks */
.bp-income-table td:last-child {
    position: relative;
    cursor: help;
}

.bp-income-table td:last-child:hover::after {
    content: "Click to learn more about this rank";
    position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translateX(-50%);
    background: #2d3436;
    color: white;
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 12px;
    white-space: nowrap;
    z-index: 2;
}

/* Benefits Section */
.bp-benefits {
    margin-bottom: 60px;
}

.bp-benefits h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #2d3436;
}

.bp-benefits-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 30px;
}

.bp-benefit-card {
    background: white;
    padding: 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
}

.bp-benefit-card:hover {
    transform: translateY(-5px);
}

.bp-benefit-card i {
    font-size: 36px;
    color: #a4c639;
    margin-bottom: 20px;
}

.bp-benefit-card h3 {
    color: #2d3436;
    margin-bottom: 15px;
}

.bp-benefit-card p {
    color: #636e72;
}

/* Join CTA */
.bp-join-cta {
    text-align: center;
    background: linear-gradient(135deg, #a4c639, #8ba830);
    padding: 60px 20px;
    border-radius: 20px;
    color: white;
}

.bp-join-cta h2 {
    font-size: 36px;
    margin-bottom: 20px;
}

.bp-join-cta p {
    margin-bottom: 30px;
    font-size: 18px;
}

.bp-join-btn {
    display: inline-block;
    padding: 15px 40px;
    background: white;
    color: #a4c639;
    text-decoration: none;
    border-radius: 30px;
    font-weight: bold;
    transition: all 0.3s ease;
}

.bp-join-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

/* Types of Income Section Redesign */
.bp-types-income {
    margin: 50px 0;
    padding: 40px 20px;
    background: linear-gradient(135deg, #1a1f2c, #2d3436);
    border-radius: 30px;
    position: relative;
    overflow: hidden;
}

.bp-types-income::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: 
        radial-gradient(circle at 20% 20%, rgba(164, 198, 57, 0.1) 0%, transparent 40%),
        radial-gradient(circle at 80% 80%, rgba(76, 175, 80, 0.1) 0%, transparent 40%);
    animation: gradientMove 15s ease infinite;
}

.bp-types-income h2 {
    color: white;
    text-align: center;
    font-size: 36px;
    margin-bottom: 40px;
    position: relative;
}

.income-cards-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 25px;
    padding: 20px;
    position: relative;
    z-index: 1;
}

.income-card {
    background: rgba(255, 255, 255, 0.05);
    border-radius: 20px;
    padding: 25px;
    position: relative;
    overflow: hidden;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.income-card:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.1);
}

.income-card:hover .card-glow {
    opacity: 1;
}

.card-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, #a4c639, #4caf50);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    position: relative;
    z-index: 1;
}

.card-icon i {
    font-size: 24px;
    color: white;
}

.card-content {
    position: relative;
}

.card-content h3 {
    color: white;
    font-size: 20px;
    margin-bottom: 10px;
}

.percentage {
    color: #a4c639;
    font-size: 28px;
    font-weight: 700;
    background: -webkit-linear-gradient(#a4c639, #4caf50);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
}

.card-glow {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: radial-gradient(circle at 50% 50%, rgba(164, 198, 57, 0.2), transparent 70%);
    opacity: 0;
    transition: opacity 0.3s ease;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

/* Add hover effects */
.income-card:hover .card-icon {
    animation: float 2s ease infinite;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .income-cards-container {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        padding: 10px;
    }

    .income-card {
        padding: 20px;
    }

    .card-icon {
        width: 50px;
        height: 50px;
    }

    .card-icon i {
        font-size: 20px;
    }

    .percentage {
        font-size: 24px;
    }
}

/* Income Example Section */
.bp-income-example {
    margin: 50px 0;
    padding: 30px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.bp-income-example h2 {
    text-align: center;
    color: #2d3436;
    margin-bottom: 30px;
    font-size: 32px;
}

.example-table-wrapper {
    overflow-x: auto;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
}

.example-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    font-size: 15px;
}

.example-table th {
    background: linear-gradient(135deg, #a4c639, #8ba830);
    color: white;
    padding: 15px;
    font-weight: 600;
    text-transform: uppercase;
}

.example-table td {
    padding: 20px 15px;
    text-align: center;
    border: 1px solid #f0f2f5;
}

.bv-row {
    background: #f8f9fa;
    font-weight: 500;
}

.income-row {
    background: #fff;
}

.total-row {
    background: #f1f9e4;
    font-weight: 600;
}

.total-label {
    color: #666;
    margin-bottom: 5px;
    font-size: 14px;
}

.total-amount {
    color: #a4c639;
    font-size: 18px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .example-table {
        font-size: 14px;
    }
    
    .example-table td {
        padding: 15px 10px;
    }
    
    .total-amount {
        font-size: 16px;
    }
}

/* Growth Calculator Section */
.bp-growth-calculator {
    margin: 50px 0;
    padding: 30px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.bp-growth-calculator h2 {
    text-align: center;
    color: #2d3436;
    margin-bottom: 30px;
    font-size: 32px;
}

.growth-table-wrapper {
    overflow-x: auto;
    border-radius: 15px;
    box-shadow: 0 0 20px rgba(0,0,0,0.05);
    margin-bottom: 30px;
}

.growth-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    font-size: 15px;
}

.growth-table th {
    background: linear-gradient(135deg, #a4c639, #8ba830);
    color: white;
    padding: 15px;
    font-weight: 600;
    text-transform: uppercase;
}

.growth-table td {
    padding: 15px;
    text-align: center;
    border: 1px solid #f0f2f5;
}

.growth-table tr:nth-child(even) {
    background: #f8f9fa;
}

.growth-table .highlight-row {
    background: #f1f9e4;
    font-weight: 500;
}

.calculation-explanation {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 15px;
    margin-top: 30px;
}

.calculation-explanation h3 {
    color: #2d3436;
    margin-bottom: 20px;
}

.calculation-explanation ul {
    list-style: none;
    padding: 0;
}

.calculation-explanation ul li {
    margin-bottom: 10px;
    color: #636e72;
}

.calculation-explanation ul li ul {
    margin-top: 10px;
    margin-left: 20px;
}

.calculation-explanation ul li ul li {
    color: #2d3436;
    font-size: 14px;
}

/* Calculator Inputs */
.calculator-inputs {
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
    position: relative;
    overflow: hidden;
}

.calculator-inputs::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 150px;
    height: 150px;
    background: radial-gradient(circle, rgba(164, 198, 57, 0.1) 0%, transparent 70%);
}

.input-group {
    flex: 1;
    min-width: 200px;
}

.input-group label {
    display: block;
    margin-bottom: 8px;
    color: #2d3436;
    font-weight: 500;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border: 1px solid #dfe6e9;
    border-radius: 8px;
    font-size: 16px;
    background: #f8f9fa;
    border: 2px solid transparent;
    transition: all 0.3s ease;
}

.input-group input:focus {
    border-color: #a4c639;
    background: white;
    box-shadow: 0 5px 15px rgba(164, 198, 57, 0.1);
}

#calculateBtn {
    padding: 12px 24px;
    background: #a4c639;
    color: white;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

#calculateBtn:hover {
    background: #8ba830;
}

/* Calculation Result */
.calculation-result {
    background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
    border-radius: 20px;
    box-shadow: 0 15px 40px rgba(0,0,0,0.05);
    position: relative;
    overflow: hidden;
}

.calculation-result h3 {
    color: #2d3436;
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
}

.result-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

.result-item {
    background: white;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.result-item::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 3px;
    background: linear-gradient(to right, #a4c639, #4caf50);
    transform: scaleX(0);
    transition: transform 0.3s ease;
}

.result-item:hover::after {
    transform: scaleX(1);
}

.result-item h4 {
    color: #2d3436;
    margin-bottom: 15px;
    font-size: 18px;
}

.result-item .amount {
    font-size: 28px;
    color: #a4c639;
    font-weight: 700;
    margin-bottom: 10px;
}

.calculation-detail {
    font-size: 14px;
    color: #636e72;
    font-weight: 500;
}

.result-item.total {
    background: linear-gradient(135deg, #a4c639, #4caf50);
    color: white;
}

.result-item.total h4,
.result-item.total .amount {
    color: white;
}

.calculate-btn {
    padding: 8px 16px;
    background: #a4c639;
    color: white;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.calculate-btn:hover {
    background: #8ba830;
}

.joining-section, .manual-bv-section {
    background: #f8f9fa;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 20px;
}

.joining-section h4, .manual-bv-section h4 {
    color: #2d3436;
    margin-bottom: 15px;
    font-size: 18px;
    font-weight: 600;
}

.input-row {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

#bvPerJoining {
    background-color: #e8f5e9;
}

.repurchase-section {
    background: #e8f5e9;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 20px;
}

.repurchase-section h4 {
    color: #2d3436;
    margin-bottom: 15px;
    font-size: 18px;
    font-weight: 600;
}

#selfRepurchaseBV {
    border: 2px solid #a4c639;
}

/* Franchise Income Section */
.franchise-income {
    margin: 50px 0;
    padding: 40px;
    background: linear-gradient(135deg, #91af32 0%, #4caf50 100%);
    border-radius: 20px;
    position: relative;
    overflow: hidden;
}

.franchise-income::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    width: 200px;
    height: 200px;
    background: url('images/rk2.png') no-repeat center;
    background-size: contain;
    opacity: 0.1;
}

.franchise-income h2 {
    color: #fff;
    text-align: center;
    font-size: 36px;
    margin-bottom: 40px;
    text-transform: uppercase;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.franchise-steps {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
    flex-wrap: wrap;
}

.step-item {
    background: rgba(255,255,255,0.1);
    padding: 25px;
    border-radius: 15px;
    min-width: 250px;
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255,255,255,0.2);
    transition: all 0.3s ease;
}

.step-item:hover {
    transform: translateY(-5px);
    background: rgba(255,255,255,0.15);
    box-shadow: 0 10px 20px rgba(0,0,0,0.2);
}

.step-number {
    width: 40px;
    height: 40px;
    background: #a4c639;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: bold;
    color: white;
    margin-bottom: 15px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

.step-content {
    color: white;
}

.step-content h3 {
    font-size: 22px;
    margin-bottom: 10px;
}

.step-content p {
    font-size: 18px;
    opacity: 0.9;
}

.step-arrow {
    color: #a4c639;
    font-size: 24px;
    animation: bounceX 2s infinite;
}

@keyframes bounceX {
    0%, 100% {
        transform: translateX(-5px);
    }
    50% {
        transform: translateX(5px);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .franchise-steps {
        flex-direction: column;
    }
    
    .step-arrow {
        transform: rotate(90deg);
    }
    
    .step-item {
        width: 100%;
    }
    
    @keyframes bounceX {
        0%, 100% {
            transform: translateY(-5px) rotate(90deg);
        }
        50% {
            transform: translateY(5px) rotate(90deg);
        }
    }
}

/* Welcome Section Styles */
.welcome-section {
    background: linear-gradient(135deg, #a4c639, #4caf50);
    margin: 30px 20px 60px;
    padding: 50px 40px;
    border-radius: 30px;
    position: relative;
    overflow: hidden;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
}

.welcome-text h2 {
    font-size: 42px;
    color: white;
    margin-bottom: 40px;
    font-weight: 700;
    line-height: 1.4;
    text-align: center;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
}

.welcome-features {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.feature-box {
    background: rgba(255, 255, 255, 0.95);
    border-radius: 15px;
    padding: 25px;
    text-align: center;
    transition: all 0.3s ease;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.feature-box:hover {
    transform: translateY(-10px);
    background: white;
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.feature-icon {
    background: linear-gradient(135deg, #a4c639, #4caf50);
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin: 0 auto 15px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.feature-icon i {
    font-size: 30px;
    color: white;
}

.feature-text {
    color: #2d3436;
    font-size: 18px;
    font-weight: 600;
}

.welcome-decoration {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    width: 200px;
    overflow: hidden;
    pointer-events: none;
}

.decoration-circle {
    position: absolute;
    width: 300px;
    height: 300px;
    border: 2px solid rgba(255, 255, 255, 0.1);
    border-radius: 50%;
    top: -150px;
    right: -150px;
    animation: rotate 20s linear infinite;
}

.decoration-line {
    position: absolute;
    width: 2px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(255, 215, 0, 0.3), transparent);
    right: 50px;
    animation: lineMove 3s ease-in-out infinite;
}

@keyframes rotate {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes lineMove {
    0%, 100% { transform: translateY(-10%); opacity: 0.3; }
    50% { transform: translateY(10%); opacity: 0.7; }
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .welcome-section {
        padding: 40px 20px;
    }
    
    .welcome-text h2 {
        font-size: 32px;
    }
    
    .feature-box {
        padding: 20px;
    }
    
    .feature-icon {
        width: 60px;
        height: 60px;
    }
    
    .feature-icon i {
        font-size: 24px;
    }
}

/* Add slide-up animation for sections */
.bp-hero,
.welcome-section,
.bp-types-income,
.bp-income-structure,
.bp-benefits,
.franchise-income,
.bp-income-example,
.bp-join-cta {
    opacity: 0;
    transform: translateY(50px);
    visibility: hidden;
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}

.slide-up {
    opacity: 1;
    transform: translateY(0);
    visibility: visible;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const calculateBtns = document.querySelectorAll('.calculate-btn');
    const calculationResult = document.getElementById('calculationResult');
    
    function calculateIncome(leftBV, rightBV, slabRate, royaltyRate) {
        // Get joining details
        const leftJoinings = parseInt(document.getElementById('leftJoinings').value) || 0;
        const rightJoinings = parseInt(document.getElementById('rightJoinings').value) || 0;
        const leftJoiningBV = parseInt(document.getElementById('leftJoiningBV').value) || 0;
        const rightJoiningBV = parseInt(document.getElementById('rightJoiningBV').value) || 0;
        const selfRepurchaseBV = parseInt(document.getElementById('selfRepurchaseBV').value) || 0;
        
        // Calculate Direct Income (15% of total direct BV)
        const totalDirectBV = (leftJoinings * leftJoiningBV) + (rightJoinings * rightJoiningBV);
        const directIncome = totalDirectBV * 0.15;
        
        // Calculate Matching Income (15% of matched BV)
        const matchedBV = Math.min(leftBV, rightBV);
        const matchingIncome = matchedBV * 0.15;
        
        // Calculate Repurchase Income (slab rate % of self repurchase BV)
        const repurchaseIncome = selfRepurchaseBV * (slabRate / 100);
        
        // Calculate Royalty Income if applicable
        const royaltyIncome = royaltyRate ? matchedBV * (royaltyRate / 100) : 0;
        
        // Total income
        const totalIncome = directIncome + matchingIncome + repurchaseIncome + royaltyIncome;
        
        // Display results with detailed breakdown
        document.getElementById('directIncome').textContent = `₹${directIncome.toLocaleString()}`;
        document.getElementById('directCalc').innerHTML = 
            `Direct BV (${totalDirectBV.toLocaleString()}) × 15%<br>` +
            `<small>Left: ${leftJoinings} joins × ${leftJoiningBV} BV = ${(leftJoinings * leftJoiningBV).toLocaleString()} BV<br>` +
            `Right: ${rightJoinings} joins × ${rightJoiningBV} BV = ${(rightJoinings * rightJoiningBV).toLocaleString()} BV</small>`;
            
        document.getElementById('matchingIncome').textContent = `₹${matchingIncome.toLocaleString()}`;
        document.getElementById('matchingCalc').innerHTML = 
            `Matched BV: ${matchedBV.toLocaleString()} × 15%<br>` +
            `<small>Lower of Left BV (${leftBV.toLocaleString()}) and Right BV (${rightBV.toLocaleString()})</small>`;
            
        document.getElementById('repurchaseIncome').textContent = `₹${repurchaseIncome.toLocaleString()}`;
        document.getElementById('repurchaseCalc').textContent = 
            `Self Repurchase BV (${selfRepurchaseBV.toLocaleString()}) × ${slabRate}%`;
            
        if (royaltyRate) {
            document.getElementById('royaltySection').style.display = 'block';
            document.getElementById('royaltyIncome').textContent = `₹${royaltyIncome.toLocaleString()}`;
            document.getElementById('royaltyCalc').textContent = 
                `Matched BV (${matchedBV.toLocaleString()}) × ${royaltyRate}%`;
        } else {
            document.getElementById('royaltySection').style.display = 'none';
        }
            
        document.getElementById('totalIncome').textContent = `₹${totalIncome.toLocaleString()}`;
        
        calculationResult.style.display = 'block';
    }
    
    calculateBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            const row = btn.closest('tr');
            const slabRate = parseFloat(row.querySelector('.slab').textContent);
            const royaltyText = row.querySelector('td:nth-child(4)').textContent;
            const royaltyRate = royaltyText.includes('%') ? 
                parseFloat(royaltyText.match(/\d+/)[0]) : 0;
            
            const leftBV = parseInt(document.getElementById('leftBV').value) || 0;
            const rightBV = parseInt(document.getElementById('rightBV').value) || 0;
            
            calculateIncome(leftBV, rightBV, slabRate, royaltyRate);
        });
    });

    // Slide up animation on scroll
    const sections = document.querySelectorAll('.bp-hero, .welcome-section, .bp-types-income, .bp-income-structure, .bp-benefits, .franchise-income, .bp-income-example, .bp-join-cta');
    
    function checkSlide() {
        sections.forEach(section => {
            const slideInAt = (window.scrollY + window.innerHeight) - section.offsetHeight / 4;
            const sectionBottom = section.offsetTop + section.offsetHeight;
            const isHalfShown = slideInAt > section.offsetTop;
            const isNotScrolledPast = window.scrollY < sectionBottom;
            
            if (isHalfShown && isNotScrolledPast) {
                section.classList.add('slide-up');
            }
        });
    }
    
    // Run on load
    checkSlide();
    
    // Run on scroll with debounce
    let timeout;
    window.addEventListener('scroll', () => {
        if (timeout) {
            window.cancelAnimationFrame(timeout);
        }
        timeout = window.requestAnimationFrame(() => {
            checkSlide();
        });
    });
});
</script>

<?php include 'footer.php'; ?> 