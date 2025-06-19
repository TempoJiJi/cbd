<style>
    /* Enhanced Typography */
    .head-title {
        text-align: center;
    }

    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif !important;
        font-weight: 400 !important;
        font-style: normal;
    }

    .banner-title-cbd {
        font-size: 150px !important;
        font-weight: 500;
        line-height: 1.2;
        letter-spacing: -0.01em;
        position: relative;
        z-index: 2;
    }

    /* Hero Section Enhancements */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        background: linear-gradient(135deg, rgba(255, 111, 79, 0.02) 0%, rgba(162, 110, 236, 0.02) 100%);
    }

    .hero-area-3-inner {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        position: relative;
        z-index: 2;
        padding-top: 120px;
    }

    /* Floating Geometric Elements */
    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
        overflow: hidden;
    }

    .floating-shape {
        position: absolute;
        opacity: 0.6;
        animation: floatAround 20s linear infinite;
    }

    .floating-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--cbd-orange), var(--cbd-pink));
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-square {
        width: 40px;
        height: 40px;
        background: linear-gradient(45deg, var(--cbd-purple), var(--cbd-cyan));
        transform: rotate(45deg);
        top: 60%;
        right: 15%;
        animation-delay: 5s;
    }

    .floating-triangle {
        width: 0;
        height: 0;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        border-bottom: 45px solid var(--cbd-yellow);
        top: 40%;
        left: 85%;
        animation-delay: 10s;
    }

    .floating-diamond {
        width: 30px;
        height: 30px;
        background: linear-gradient(45deg, var(--cbd-green), var(--cbd-lightblue));
        transform: rotate(45deg);
        top: 80%;
        left: 20%;
        animation-delay: 15s;
    }

    @keyframes floatAround {
        0% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-20px) translateX(10px) rotate(90deg);
        }
        50% {
            transform: translateY(-10px) translateX(-15px) rotate(180deg);
        }
        75% {
            transform: translateY(-30px) translateX(5px) rotate(270deg);
        }
        100% {
            transform: translateY(0px) translateX(0px) rotate(360deg);
        }
    }

    /* Enhanced Content Layout */
    .banner-content-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 40px;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }

    .main-title-section {
        position: relative;
        z-index: 3;
    }

    .subtitle-enhanced {
        font-size: 18px;
        font-weight: 500;
        color: var(--cbd-orange-red);
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        position: relative;
        display: inline-block;
    }

    .subtitle-enhanced::before,
    .subtitle-enhanced::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 40px;
        height: 2px;
        background: var(--cbd-orange-red);
        transform: translateY(-50%);
    }

    .subtitle-enhanced::before {
        left: -60px;
    }

    .subtitle-enhanced::after {
        right: -60px;
    }

    /* Stats Section */
    .stats-section {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin: 40px 0;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        position: relative;
        padding: 20px;
        border-radius: 15px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        min-width: 120px;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        background: rgba(255, 111, 79, 0.1);
        border-color: var(--cbd-orange-red);
    }

    .stat-number {
        font-size: 36px;
        font-weight: 700;
        color: var(--cbd-orange-red);
        line-height: 1;
        margin-bottom: 8px;
        font-family: 'Montserrat Alternates', sans-serif;
    }

    .stat-label {
        font-size: 14px;
        font-weight: 500;
        color: var(--secondary);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Skills Showcase */
    .skills-showcase {
        display: flex;
        justify-content: center;
        gap: 30px;
        margin: 40px 0;
        flex-wrap: wrap;
    }

    .skill-badge {
        padding: 12px 24px;
        background: linear-gradient(135deg, var(--cbd-orange-red), var(--cbd-pink));
        color: white;
        border-radius: 25px;
        font-size: 14px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .skill-badge::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .skill-badge:hover::before {
        left: 100%;
    }

    .skill-badge:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(255, 111, 79, 0.3);
    }

    /* CTA Section */
    .cta-section {
        margin-top: 50px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
    }

    .cta-buttons {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
        justify-content: center;
    }

    .cta-primary {
        padding: 18px 40px;
        background: linear-gradient(135deg, var(--cbd-orange-red), var(--cbd-pink));
        color: white;
        border: none;
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(255, 111, 79, 0.4);
        color: white;
    }

    .cta-secondary {
        padding: 18px 40px;
        background: transparent;
        color: var(--cbd-orange-red);
        border: 2px solid var(--cbd-orange-red);
        border-radius: 50px;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .cta-secondary:hover {
        background: var(--cbd-orange-red);
        color: white;
        transform: translateY(-3px);
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 10px;
        color: var(--secondary);
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .scroll-arrow {
        width: 2px;
        height: 30px;
        background: var(--cbd-orange-red);
        position: relative;
        animation: scrollBounce 2s infinite;
    }

    .scroll-arrow::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 0;
        height: 0;
        border-left: 4px solid transparent;
        border-right: 4px solid transparent;
        border-top: 8px solid var(--cbd-orange-red);
    }

    @keyframes scrollBounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(10px);
        }
    }

    /* Animated Background Particles */
    .particle-system {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: var(--cbd-orange-red);
        border-radius: 50%;
        opacity: 0.6;
        animation: particleFloat 8s linear infinite;
    }

    .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 20%; animation-delay: 1s; }
    .particle:nth-child(3) { left: 30%; animation-delay: 2s; }
    .particle:nth-child(4) { left: 40%; animation-delay: 3s; }
    .particle:nth-child(5) { left: 50%; animation-delay: 4s; }
    .particle:nth-child(6) { left: 60%; animation-delay: 5s; }
    .particle:nth-child(7) { left: 70%; animation-delay: 6s; }
    .particle:nth-child(8) { left: 80%; animation-delay: 7s; }

    @keyframes particleFloat {
        0% {
            transform: translateY(100vh) scale(0);
            opacity: 0;
        }
        10% {
            opacity: 0.6;
            transform: scale(1);
        }
        90% {
            opacity: 0.6;
        }
        100% {
            transform: translateY(-100px) scale(0);
            opacity: 0;
        }
    }

    /* Responsive Design */
    @media only screen and (max-width: 1919px) {
        .banner-title-cbd {
            font-size: 120px !important;
        }
    }

    @media only screen and (max-width: 1399px) {
        .banner-title-cbd {
            font-size: 110px !important;
        }
    }

    @media only screen and (max-width: 1199px) {
        .banner-title-cbd {
            font-size: 100px !important;
        }
        
        .stats-section {
            gap: 40px;
        }
        
        .skills-showcase {
            gap: 20px;
        }
    }

    @media only screen and (max-width: 991px) {
        .section-content-wrapper {
            text-align: center;
        }

        .banner-title-cbd {
            padding-top: 20px;
            font-size: 85px !important;
        }
        
        .stats-section {
            gap: 30px;
        }
        
        .subtitle-enhanced::before,
        .subtitle-enhanced::after {
            width: 20px;
        }
        
        .subtitle-enhanced::before {
            left: -30px;
        }
        
        .subtitle-enhanced::after {
            right: -30px;
        }
        
        .cta-buttons {
            flex-direction: column;
            align-items: center;
        }
    }

    @media only screen and (max-width: 767px) {
        .section-content-wrapper {
            text-align: center;
        }

        .banner-title-cbd {
            padding-top: 20px;
            font-size: 80px !important;
        }
        
        .stats-section {
            gap: 20px;
        }
        
        .stat-item {
            min-width: 100px;
            padding: 15px;
        }
        
        .stat-number {
            font-size: 28px;
        }
        
        .skills-showcase {
            gap: 15px;
        }
        
        .skill-badge {
            padding: 10px 20px;
            font-size: 12px;
        }
        
        .subtitle-enhanced::before,
        .subtitle-enhanced::after {
            display: none;
        }
        
        .floating-shape {
            display: none;
        }
    }

    .text-wrapper {
        padding-top: 30px;
    }

    /* Dark theme adjustments */
    [data-theme="dark"] .stat-item {
        background: rgba(0, 0, 0, 0.3);
        border-color: rgba(255, 255, 255, 0.1);
    }

    [data-theme="dark"] .stat-item:hover {
        background: rgba(255, 111, 79, 0.2);
    }
</style>

<section class="hero-area-3">
    <!-- Animated Background Particles -->
    <div class="particle-system">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Floating Geometric Elements -->
    <div class="floating-elements">
        <div class="floating-shape floating-circle"></div>
        <div class="floating-shape floating-square"></div>
        <div class="floating-shape floating-triangle"></div>
        <div class="floating-shape floating-diamond"></div>
    </div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <div class="banner-content-grid">
                    <!-- Main Title Section -->
                    <div class="main-title-section">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper head-title">
                                <div class="subtitle-enhanced move-anim" data-delay="0.15">
                                    Full Stack Developer
                                </div>
                                <h1 class="montserrat-alternates-semibold banner-title-cbd move-anim" data-delay="0.45">
                                    Codes By
                                    <span style="color: var(--cbd-orange-red);">Dawson</span>
                                </h1>
                                <div class="text-wrapper move-anim" data-delay="0.65">
                                    <p class="montserrat-alternates-medium text">Building High-Impact Web & App Products with Modern Technologies</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Stats Section -->
                    <div class="stats-section fade-anim" data-delay="0.8">
                        <div class="stat-item">
                            <div class="stat-number">5+</div>
                            <div class="stat-label">Years Experience</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">50+</div>
                            <div class="stat-label">Projects Completed</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">30+</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">24/7</div>
                            <div class="stat-label">Support</div>
                        </div>
                    </div>

                    <!-- Skills Showcase -->
                    <div class="skills-showcase fade-anim" data-delay="1.0">
                        <div class="skill-badge">Web Development</div>
                        <div class="skill-badge">Mobile Apps</div>
                        <div class="skill-badge">E-Commerce</div>
                        <div class="skill-badge">API Development</div>
                        <div class="skill-badge">Database Design</div>
                    </div>

                    <!-- CTA Section -->
                    <div class="cta-section fade-anim" data-delay="1.2">
                        <div class="cta-buttons">
                            <a href="#work_section" class="cta-primary">
                                <span>View My Work</span>
                                <i class="fa-solid fa-arrow-right"></i>
                            </a>
                            <a href="#footer_section" class="cta-secondary">
                                <span>Get In Touch</span>
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                        
                        <!-- Additional Info -->
                        <div class="text-wrapper move-anim" data-delay="1.4">
                            <p class="montserrat-alternates-regular" style="font-size: 16px; opacity: 0.8;">
                                Specializing in PHP, Laravel, React, Node.js & Mobile Development
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="scroll-indicator fade-anim" data-delay="1.6">
                <span>Scroll Down</span>
                <div class="scroll-arrow"></div>
            </div>
        </div>
        
        <span class="empty-space hide-mobile" style="height: 100px"></span>
        <div class="image-wrapper parallax-view fade-anim">
            <img class="w-100" src="assets/imgs/cbd/banner_cat.jpg" alt="image" data-speed="0.5">
        </div>
    </div>
</section>