<!-- Add GSAP and ScrollTrigger -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

<section class="who-we-are">
        <div class="content-wrapper">
        <div class="text-section" data-speed="0.9">
            <div class="title-container">
                <span class="subtitle">WHO WE ARE</span>
                <h2 class="title">Get to know about <span class="highlight">our company</span></h2>
            </div>
            
            <div class="description-box" data-speed="1.1">
                <p class="main-text">RKGrowopal is an emerging innovation driven direct sales company. Established in the year 7 september 2021, the company is engaged in the direct selling and marketing of health care and herbal products.</p>
                
                <p class="detail-text">We seek to bring quality product of healthcare to improve the quality of life of the global community which we believe we are all a part of, and must give back to. We are proud to be associated with a range of products that is trusted by consumers and professionals alike.</p>
                
                <div class="goal-box">
                    <div class="goal-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="goal-text">The Goal of the Company is to provide Health and spreading awarness to each and everyone.</p>
                </div>
            </div>
            
            <button class="explore-btn" onclick="window.location.href='about.php'">
                READ MORE 
                <span class="btn-icon">
                    <i class="fas fa-arrow-right"></i>
                </span>
            </button>
        </div>
        
        <div class="image-section">
            <div class="about-image-container" data-speed="1.2">
                <img src="images/ayurvedic image/download.jpg" alt="Herbal Spices" class="about-image">
                <div class="image-overlay"></div>
            </div>
            <div class="floating-elements">
                <div class="float-card top" data-speed="1.4">
                    <i class="fas fa-leaf"></i>
                    <span>Natural Products</span>
                </div>
                <div class="float-card bottom" data-speed="1.6">
                    <i class="fas fa-heart"></i>
                    <span>Health First</span>
                </div>
                <div class="float-card right" data-speed="1.5">
                    <i class="fas fa-shield-alt"></i>
                    <span>Quality Assured</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.who-we-are {
    position: relative;
    padding: 120px 0;
    overflow: hidden;
    background: #f8f9fa;
}

.parallax-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 200%;  /* Double height for sliding effect */
    background: #f3f1ef;
    opacity: 0.1;
    z-index: 0;
    animation: slideUpBg 20s linear infinite;
}

@keyframes slideUpBg {
    from {
        transform: translateY(0);
    }
    to {
        transform: translateY(-50%);  /* Slides up by half its height */
    }
}

.content-wrapper {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 40px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    position: relative;
    z-index: 1;
}

.text-section {
    padding-right: 40px;
}

.subtitle {
    display: inline-block;
    color: #a4c639;
    font-size: 18px;
    font-weight: 600;
    letter-spacing: 2px;
    margin-bottom: 20px;
    position: relative;
    padding-left: 30px;
}

.subtitle::before {
    content: '';
    position: absolute;
    left: 0;
    top: 50%;
    width: 20px;
    height: 2px;
    background: #a4c639;
    transform: translateY(-50%);
}

.title {
    font-size: 48px;
    color: #212529;
    line-height: 1.2;
    margin-bottom: 40px;
}

.highlight {
    color: #a4c639;
    position: relative;
    display: inline-block;
}

.highlight::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 8px;
    background: rgba(164, 198, 57, 0.2);
    z-index: -1;
}

.description-box {
    color: #666;
    line-height: 1.8;
}

.main-text {
    font-size: 18px;
    margin-bottom: 25px;
}

.detail-text {
    margin-bottom: 30px;
}

.goal-box {
    background: white;
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: 40px;
    transform: translateX(-100px);
    opacity: 0;
}

.goal-icon {
    width: 60px;
    height: 60px;
    background: #a4c639;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.goal-icon i {
    color: white;
    font-size: 24px;
}

.goal-text {
    font-style: italic;
    color: #212529;
    font-weight: 500;
}

.explore-btn {
    margin-top: 40px;
    padding: 15px 35px;
    background: #a4c639;
    color: white;
    border: none;
    border-radius: 30px;
    font-weight: 600;
    cursor: pointer;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    transition: all 0.3s ease;
    box-shadow: 0 10px 20px rgba(164, 198, 57, 0.2);
}

.explore-btn:hover {
    background: #8ba830;
    transform: translateY(-2px);
}

.btn-icon {
    width: 25px;
    height: 25px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}

.explore-btn:hover .btn-icon {
    transform: translateX(5px);
}

.image-section {
    position: relative;
    margin-top: -40px;  /* Remove space above image */
}

.about-image-container {
    width: 100%;
    height: 600px;
    border-radius: 20px;
    overflow: hidden;
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}

.about-image {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
    transition: transform 0.3s ease;
    border-radius: 20px;
    max-width: 100%;
    max-height: 100%;
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(45deg, rgba(164, 198, 57, 0.1), transparent);
    pointer-events: none;
}

.floating-elements {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    pointer-events: none;
}

.float-card {
    position: absolute;
    background: rgba(0, 0, 0, 0.2);
    padding: 20px;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0,0,0,0.1);
    display: flex;
    align-items: center;
    gap: 15px;
    opacity: 0;
    transform: translateY(50px);
}

.float-card i {
    color: #a4c639;
    font-size: 24px;
}

.float-card span {
    color: #212529;
    font-weight: 500;
}

.float-card.top {
    top: -30px;
    right: -30px;
}

.float-card.bottom {
    bottom: 40px;
    left: -30px;
}

.float-card.right {
    top: 50%;
    right: -30px;
    transform: translateY(-50%);
    width: auto;
    min-width: 180px;
    background: rgba(0, 0, 0, 0.2);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    z-index: 2;
}

.float-card.right i {
    font-size: 22px;
    color: #a4c639;
}

.float-card.right span {
    font-size: 15px;
    white-space: nowrap;
}

@media (max-width: 992px) {
    .content-wrapper {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    
    .text-section {
        padding-right: 0;
    }
    
    .about-image-container {
        height: 400px;
        padding: 20px;
    }
    
    .about-image {
        max-height: 100%;
        width: auto;
    }
}

@media (max-width: 768px) {
    .who-we-are {
        padding: 80px 0;
    }
    
    .content-wrapper {
        padding: 0 20px;
    }
    
    .title {
        font-size: 36px;
    }
    
    .float-card {
        display: none;
    }
}

@media (max-width: 1200px) {
    .float-card.right {
        right: -20px;
    }
}
</style>

<script>
gsap.registerPlugin(ScrollTrigger);

// Parallax effect for background
gsap.to('.parallax-bg', {
    yPercent: -50,
    ease: "none",
    scrollTrigger: {
        trigger: ".who-we-are",
        start: "top bottom",
        end: "bottom top",
        scrub: 1
    }
});

// Text animations
gsap.from('.subtitle', {
    x: -100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
        trigger: '.title-container',
        start: 'top 80%'
    }
});

gsap.from('.title', {
    y: 50,
    opacity: 0,
    duration: 1,
    delay: 0.3,
    scrollTrigger: {
        trigger: '.title-container',
        start: 'top 80%'
    }
});

// Description animations
const textElements = gsap.utils.toArray('.description-box p');
textElements.forEach((text, i) => {
    gsap.from(text, {
        y: 30,
        opacity: 0,
        duration: 1,
        delay: i * 0.2,
        scrollTrigger: {
            trigger: text,
            start: 'top 80%'
        }
    });
});

// Goal box animation
gsap.to('.goal-box', {
    x: 0,
    opacity: 1,
    duration: 1,
    scrollTrigger: {
        trigger: '.goal-box',
        start: 'top 80%'
    }
});

// Floating cards animation
const floatCards = gsap.utils.toArray('.float-card');
floatCards.forEach((card, i) => {
    gsap.to(card, {
        y: 0,
        opacity: 1,
        duration: 1,
        delay: i * 0.2,
        scrollTrigger: {
            trigger: '.image-section',
            start: 'top 60%'
        }
    });
});

// Image parallax
gsap.to('.about-image', {
    yPercent: 20,
    ease: 'none',
    scrollTrigger: {
        trigger: '.about-image-container',
        start: 'top bottom',
        end: 'bottom top',
        scrub: true
    }
});
</script> 