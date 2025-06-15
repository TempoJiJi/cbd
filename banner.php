<style>
    .hero-area-3 {
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    .hero-gradient-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(135deg, rgba(175, 244, 43, 0.1) 0%, rgba(14, 15, 17, 0.8) 50%, rgba(175, 244, 43, 0.05) 100%);
        z-index: 1;
    }

    .hero-particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 2;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(175, 244, 43, 0.6);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .particle:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { top: 60%; left: 20%; animation-delay: 1s; }
    .particle:nth-child(3) { top: 40%; left: 80%; animation-delay: 2s; }
    .particle:nth-child(4) { top: 80%; left: 70%; animation-delay: 3s; }
    .particle:nth-child(5) { top: 30%; left: 90%; animation-delay: 4s; }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0.6; }
        50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
    }

    .hero-area-3-inner {
        position: relative;
        z-index: 3;
    }

    .hero-title-wrapper {
        text-align: center;
        margin-bottom: 2rem;
    }

    .hero-greeting {
        font-size: 1.2rem;
        color: var(--primary);
        font-weight: 500;
        margin-bottom: 0.5rem;
        opacity: 0.9;
    }

    .hero-main-title {
        font-size: clamp(3rem, 8vw, 6rem);
        font-weight: 700;
        line-height: 1.1;
        margin-bottom: 1rem;
        background: linear-gradient(135deg, #ffffff 0%, #AFF42B 50%, #ffffff 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
    }

    .hero-subtitle {
        font-size: clamp(1.5rem, 4vw, 2.5rem);
        color: rgba(255, 255, 255, 0.8);
        font-weight: 300;
        margin-bottom: 1.5rem;
        line-height: 1.3;
    }

    .hero-description {
        font-size: 1.25rem;
        color: rgba(255, 255, 255, 0.7);
        max-width: 600px;
        margin: 0 auto 2.5rem;
        line-height: 1.6;
    }

    .hero-stats {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin: 2rem 0;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        padding: 1rem;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(175, 244, 43, 0.2);
        transition: all 0.3s ease;
        min-width: 120px;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        background: rgba(175, 244, 43, 0.1);
        border-color: rgba(175, 244, 43, 0.4);
    }

    .stat-number {
        font-size: 2rem;
        font-weight: 700;
        color: var(--primary);
        display: block;
        margin-bottom: 0.5rem;
    }

    .stat-label {
        font-size: 0.9rem;
        color: rgba(255, 255, 255, 0.7);
        font-weight: 500;
    }

    .hero-cta {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 1.5rem;
        flex-wrap: wrap;
        margin-top: 2rem;
    }

    .cta-primary {
        background: linear-gradient(135deg, var(--primary) 0%, #8BC34A 100%);
        color: var(--black);
        padding: 1rem 2rem;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(175, 244, 43, 0.3);
        position: relative;
        overflow: hidden;
    }

    .cta-primary::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .cta-primary:hover::before {
        left: 100%;
    }

    .cta-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(175, 244, 43, 0.4);
        color: var(--black);
    }

    .cta-secondary {
        color: rgba(255, 255, 255, 0.9);
        padding: 1rem 2rem;
        border: 2px solid rgba(255, 255, 255, 0.3);
        border-radius: 50px;
        font-weight: 500;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
    }

    .cta-secondary:hover {
        border-color: var(--primary);
        color: var(--primary);
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(175, 244, 43, 0.2);
    }

    .scroll-indicator {
        position: absolute;
        bottom: 2rem;
        left: 50%;
        transform: translateX(-50%);
        z-index: 3;
        text-align: center;
    }

    .scroll-text {
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
        margin-bottom: 1rem;
        font-weight: 500;
    }

    .scroll-arrow {
        width: 50px;
        height: 80px;
        border: 2px solid rgba(175, 244, 43, 0.6);
        border-radius: 25px;
        position: relative;
        margin: 0 auto;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .scroll-arrow:hover {
        border-color: var(--primary);
        transform: scale(1.1);
    }

    .scroll-arrow::before {
        content: '';
        position: absolute;
        top: 10px;
        left: 50%;
        transform: translateX(-50%);
        width: 6px;
        height: 6px;
        background: var(--primary);
        border-radius: 50%;
        animation: scroll-bounce 2s infinite;
    }

    @keyframes scroll-bounce {
        0%, 20% { transform: translateX(-50%) translateY(0); opacity: 1; }
        100% { transform: translateX(-50%) translateY(40px); opacity: 0; }
    }

    .hero-image-wrapper {
        position: absolute;
        right: -10%;
        top: 50%;
        transform: translateY(-50%);
        width: 50%;
        height: 80%;
        z-index: 2;
        opacity: 0.3;
    }

    .hero-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 20px;
        filter: blur(1px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-stats {
            gap: 1.5rem;
        }

        .stat-item {
            min-width: 100px;
            padding: 0.8rem;
        }

        .stat-number {
            font-size: 1.5rem;
        }

        .hero-cta {
            flex-direction: column;
            gap: 1rem;
        }

        .cta-primary, .cta-secondary {
            width: 100%;
            max-width: 300px;
            text-align: center;
        }

        .hero-image-wrapper {
            display: none;
        }

        .scroll-indicator {
            bottom: 1rem;
        }
    }

    @media (max-width: 480px) {
        .hero-stats {
            gap: 1rem;
        }

        .stat-item {
            min-width: 80px;
            padding: 0.6rem;
        }

        .hero-description {
            font-size: 1.1rem;
        }
    }

    /* Animation classes */
    .fade-up {
        opacity: 0;
        transform: translateY(30px);
        animation: fadeUp 0.8s ease forwards;
    }

    .fade-up-delay-1 { animation-delay: 0.2s; }
    .fade-up-delay-2 { animation-delay: 0.4s; }
    .fade-up-delay-3 { animation-delay: 0.6s; }
    .fade-up-delay-4 { animation-delay: 0.8s; }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<section class="hero-area-3">
    <!-- Background Effects -->
    <div class="hero-gradient-bg"></div>
    <div class="hero-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <!-- Background Image -->
    <div class="hero-image-wrapper parallax-view">
        <img src="assets/imgs/cbd/banner.png" alt="Developer workspace" data-speed="0.5">
    </div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="hero-title-wrapper">
                        <div class="hero-greeting fade-up">👋 Hello, I'm</div>
                        <h1 class="hero-main-title fade-up fade-up-delay-1">
                            Dawson
                        </h1>
                        <h2 class="hero-subtitle fade-up fade-up-delay-2">
                            Full-Stack Developer & Digital Architect
                        </h2>
                        <p class="hero-description fade-up fade-up-delay-3">
                            Crafting exceptional web experiences and scalable applications with modern technologies. 
                            Transforming ideas into powerful digital solutions that drive business growth.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="hero-stats fade-up fade-up-delay-3">
                <div class="stat-item">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">30+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">24/7</span>
                    <span class="stat-label">Support</span>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="hero-cta fade-up fade-up-delay-4">
                <a href="/contact" class="cta-primary">
                    Let's Build Something Amazing
                </a>
                <a href="/portfolio" class="cta-secondary">
                    View My Work
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="scroll-indicator fade-up fade-up-delay-4">
        <div class="scroll-text">Scroll to explore</div>
        <div class="scroll-arrow" onclick="document.getElementById('about').scrollIntoView({behavior: 'smooth'})"></div>
    </div>
</section>