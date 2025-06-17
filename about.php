<style>
    .section-description {
        font-size: 20px;
    }

    /* Enhanced About Section Background */
    .about-area-3 {
        position: relative;
        background: linear-gradient(180deg, #ffffff 0%, #f8f9fa 100%);
        overflow: hidden;
    }

    .about-area-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 70% 30%, rgba(139, 147, 255, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 30% 70%, rgba(175, 244, 43, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 90% 80%, rgba(252, 124, 130, 0.05) 0%, transparent 50%);
        z-index: 1;
    }

    .about-area-3::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            repeating-linear-gradient(
                45deg,
                transparent,
                transparent 2px,
                rgba(139, 147, 255, 0.02) 2px,
                rgba(139, 147, 255, 0.02) 4px
            );
        z-index: 1;
    }

    /* Decorative Elements for About Section */
    .about-decorative-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        pointer-events: none;
    }

    .about-decorative-element {
        position: absolute;
        opacity: 0.1;
    }

    .about-wave {
        position: absolute;
        top: 20%;
        right: 5%;
        width: 200px;
        height: 100px;
        background: linear-gradient(45deg, #8B93FF, #FC7C82);
        border-radius: 50px;
        transform: rotate(15deg);
        animation: wave 8s ease-in-out infinite;
    }

    .about-dots {
        position: absolute;
        bottom: 30%;
        left: 10%;
        width: 150px;
        height: 150px;
        background-image: 
            radial-gradient(circle, rgba(175, 244, 43, 0.3) 2px, transparent 2px);
        background-size: 20px 20px;
        animation: pulse 6s ease-in-out infinite;
    }

    .about-line {
        position: absolute;
        top: 50%;
        right: 20%;
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
        animation: slide 5s ease-in-out infinite;
    }

    @keyframes wave {
        0%, 100% {
            transform: rotate(15deg) scale(1);
        }
        50% {
            transform: rotate(25deg) scale(1.1);
        }
    }

    @keyframes pulse {
        0%, 100% {
            opacity: 0.1;
            transform: scale(1);
        }
        50% {
            opacity: 0.2;
            transform: scale(1.05);
        }
    }

    @keyframes slide {
        0%, 100% {
            transform: translateX(0);
        }
        50% {
            transform: translateX(20px);
        }
    }

    /* Content positioning */
    .about-area-3-inner {
        position: relative;
        z-index: 10;
    }

    /* Subtle border enhancement */
    .counter-wrapper {
        position: relative;
    }

    .counter-wrapper::before {
        content: '';
        position: absolute;
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
    }

    /* Image wrapper enhancement */
    .image-wrapper {
        position: relative;
        z-index: 5;
    }

    .image-wrapper::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(252, 124, 130, 0.1));
        border-radius: 20px;
        z-index: -1;
        opacity: 0.5;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .about-decorative-element {
            display: none;
        }
        
        .about-area-3::after {
            opacity: 0.5;
        }
    }
</style>

<section id="about" class="about-area-3">
    <!-- Decorative Elements -->
    <div class="about-decorative-elements">
        <div class="about-decorative-element about-wave"></div>
        <div class="about-decorative-element about-dots"></div>
        <div class="about-decorative-element about-line"></div>
    </div>

    <div class="container">
        <div class="about-area-3-inner section-spacing-top">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper fade-anim">
                        <h1 class="section-title">The Developer Behind the Code.</h1>
                        <div class="subtitle-wrapper fade-anim">
                            <span class="section-subtitle">(Since 2019)</span>
                        </div>
                    </div>

                    <div class="title-wrapper fade-anim">
                        <p class="section-description">Welcome! I'm Dawson — a full-time freelance programmer based in Malaysia Johor. I specialize in full-stack web and mobile app development, building everything from user-friendly websites to powerful backend systems and cross-platform apps that scale with your business.</p>
                        <br />
                        <p class="section-description">Over the past few years, I've collaborated remotely with startups, designers, and agencies worldwide. This experience has honed my ability to communicate clearly, deliver on deadlines, and adapt to diverse workflows — all while staying aligned with each client's unique vision.</p>
                    </div>
                </div>
            </div>
            <div class="section-content-wrapper">
                <div class="btn-wrapper fade-anim">
                    <!-- <div class="t-btn-group"> -->
                </div>
                <div class="counter-wrapper-box">
                    <div class="counter-wrapper">
                        <div class="counter-item fade-anim" data-delay="0.30">
                            <span class="number t-counter">3+</span>
                            <p class="text">Years of experience</p>
                        </div>
                        <div class="counter-item fade-anim" data-delay="0.45">
                            <span class="number t-counter">40+</span>
                            <p class="text">Satisfied clients</p>
                        </div>
                        <div class="counter-item fade-anim" data-delay="0.60">
                            <span class="number t-counter">100+</span>
                            <p class="text">Projects delivered</p>
                        </div>
                    </div>
                    <div style="margin-top: 10px;" class="image-wrapper parallax-view fade-anim">
                        <img class="w-100" src="assets/imgs/cbd/banner.png" alt="image" data-speed="0.5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>