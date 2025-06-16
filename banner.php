<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600;700&family=Space+Grotesk:wght@300;400;500;600;700&display=swap');

    @keyframes gridMove {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(50px, 50px);
        }
    }

    /* Enhanced Floating Orbs */
    .floating-orb {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.08), rgba(175, 244, 43, 0.08));
        backdrop-filter: blur(30px);
        animation: floatOrb 12s ease-in-out infinite;
        z-index: 1;
        border: 1px solid rgba(139, 147, 255, 0.1);
    }

    .floating-orb:nth-child(1) {
        width: 300px;
        height: 300px;
        top: 5%;
        left: -5%;
        animation-delay: 0s;
    }

    .floating-orb:nth-child(2) {
        width: 200px;
        height: 200px;
        top: 40%;
        right: -3%;
        animation-delay: 3s;
        background: linear-gradient(135deg, rgba(255, 206, 92, 0.08), rgba(251, 146, 60, 0.08));
    }

    .floating-orb:nth-child(3) {
        width: 150px;
        height: 150px;
        bottom: 30%;
        left: 10%;
        animation-delay: 6s;
        background: linear-gradient(135deg, rgba(175, 244, 43, 0.08), rgba(139, 147, 255, 0.08));
    }

    .floating-orb:nth-child(4) {
        width: 120px;
        height: 120px;
        top: 20%;
        right: 30%;
        animation-delay: 9s;
        background: linear-gradient(135deg, rgba(251, 146, 60, 0.08), rgba(255, 206, 92, 0.08));
    }

    .floating-orb:nth-child(5) {
        width: 80px;
        height: 80px;
        bottom: 60%;
        right: 15%;
        animation-delay: 2s;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.08), rgba(175, 244, 43, 0.08));
    }

    @keyframes floatOrb {
        0%, 100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
        }
        25% {
            transform: translateY(-30px) translateX(20px) rotate(90deg);
        }
        50% {
            transform: translateY(-60px) translateX(-20px) rotate(180deg);
        }
        75% {
            transform: translateY(-30px) translateX(20px) rotate(270deg);
        }
    }

    /* Enhanced Grid Pattern */
    .grid-pattern {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        opacity: 0.03;
        background-image: 
            linear-gradient(rgba(139, 147, 255, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(139, 147, 255, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
        z-index: 1;
    }

    .hero-area-3-inner {
        position: relative;
        z-index: 2;
        padding: 100px 0 60px;
        width: 100%;
    }

    /* Enhanced Typography */
    .hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(139, 147, 255, 0.2);
        border-radius: 50px;
        padding: 12px 24px;
        font-family: 'JetBrains Mono', monospace;
        font-size: 14px;
        font-weight: 500;
        color: #8B93FF;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 40px;
        position: relative;
        overflow: hidden;
    }

    .hero-badge::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(139, 147, 255, 0.1), transparent);
        animation: shimmerBadge 3s ease-in-out infinite;
    }

    @keyframes shimmerBadge {
        0% { left: -100%; }
        50% { left: 100%; }
        100% { left: 100%; }
    }

    .hero-badge .dot {
        width: 8px;
        height: 8px;
        background: linear-gradient(135deg, #8B93FF, #AFF42B);
        border-radius: 50%;
        animation: pulse 2s ease-in-out infinite;
    }

    .hero-main-title {
        font-family: 'Space Grotesk', sans-serif;
        font-size: clamp(3.5rem, 8vw, 7rem);
        font-weight: 700;
        line-height: 0.95;
        letter-spacing: -0.03em;
        color: #0f172a;
        margin-bottom: 30px;
        text-align: center;
        position: relative;
    }

    .hero-main-title .highlight {
        background: linear-gradient(135deg, #8B93FF 0%, #AFF42B 50%, #FFE870 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        display: inline-block;
    }

    .hero-main-title .highlight::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #8B93FF, #AFF42B, #FFE870);
        border-radius: 2px;
        opacity: 0.3;
        animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {
        0%, 100% {
            opacity: 0.3;
            transform: scaleX(1);
        }
        50% {
            opacity: 0.6;
            transform: scaleX(1.05);
        }
    }

    .hero-subtitle {
        font-family: 'Inter', sans-serif;
        font-size: clamp(1.125rem, 2.5vw, 1.5rem);
        font-weight: 400;
        line-height: 1.6;
        color: #64748b;
        text-align: center;
        margin: 30px auto 50px;
        max-width: 800px;
        position: relative;
    }

    .hero-description {
        font-family: 'JetBrains Mono', monospace;
        font-size: clamp(0.875rem, 1.5vw, 1rem);
        font-weight: 500;
        color: #8B93FF;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        text-align: center;
        margin-bottom: 60px;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .hero-description::before,
    .hero-description::after {
        content: '';
        width: 60px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
        animation: pulse 2s ease-in-out infinite;
    }

    /* Enhanced Button Design */
    .hero-cta-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 25px;
        margin: 60px 0;
        flex-wrap: wrap;
    }

    .hero-primary-btn {
        background: linear-gradient(135deg, #8B93FF 0%, #AFF42B 100%);
        color: #0f172a;
        font-family: 'Inter', sans-serif;
        font-size: 1.125rem;
        font-weight: 600;
        padding: 20px 40px;
        border-radius: 60px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 20px 40px rgba(139, 147, 255, 0.3);
        position: relative;
        overflow: hidden;
        border: 2px solid transparent;
    }

    .hero-primary-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s;
    }

    .hero-primary-btn:hover::before {
        left: 100%;
    }

    .hero-primary-btn:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 0 30px 60px rgba(139, 147, 255, 0.4);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .hero-secondary-btn {
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        color: #475569;
        font-family: 'Inter', sans-serif;
        font-size: 1.125rem;
        font-weight: 500;
        padding: 20px 40px;
        border: 2px solid rgba(139, 147, 255, 0.2);
        border-radius: 60px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .hero-secondary-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(175, 244, 43, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .hero-secondary-btn:hover::before {
        opacity: 1;
    }

    .hero-secondary-btn:hover {
        border-color: #8B93FF;
        color: #8B93FF;
        transform: translateY(-2px);
        box-shadow: 0 15px 30px rgba(139, 147, 255, 0.2);
    }

    /* Enhanced Stats Section */
    .hero-stats {
        display: flex;
        justify-content: center;
        gap: 80px;
        margin-top: 100px;
        flex-wrap: wrap;
        position: relative;
    }

    .hero-stats::before {
        content: '';
        position: absolute;
        top: -30px;
        left: 50%;
        transform: translateX(-50%);
        width: 300px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
    }

    .stat-item {
        text-align: center;
        position: relative;
        padding: 40px 30px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(20px);
        border-radius: 24px;
        border: 1px solid rgba(139, 147, 255, 0.15);
        transition: all 0.4s ease;
        min-width: 180px;
        box-shadow: 0 10px 30px rgba(139, 147, 255, 0.1);
    }

    .stat-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(139, 147, 255, 0.2);
        border-color: rgba(139, 147, 255, 0.3);
    }

    .stat-number {
        font-family: 'Space Grotesk', sans-serif;
        font-size: 3.5rem;
        font-weight: 700;
        background: linear-gradient(135deg, #8B93FF, #AFF42B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: block;
        margin-bottom: 15px;
        line-height: 1;
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Enhanced Tech Stack Preview */
    .tech-preview {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        margin: 100px 0 60px;
        flex-wrap: wrap;
    }

    .tech-preview-label {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.875rem;
        font-weight: 500;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        position: relative;
    }

    .tech-preview-label::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, #8B93FF, #AFF42B);
        border-radius: 1px;
    }

    .tech-icons {
        display: flex;
        gap: 25px;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
    }

    .tech-icon {
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(139, 147, 255, 0.15);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        font-size: 28px;
        position: relative;
        overflow: hidden;
    }

    .tech-icon::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(175, 244, 43, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .tech-icon:hover::before {
        opacity: 1;
    }

    .tech-icon:hover {
        transform: translateY(-5px) rotate(5deg) scale(1.1);
        box-shadow: 0 15px 35px rgba(139, 147, 255, 0.25);
        border-color: rgba(139, 147, 255, 0.3);
    }

    /* Enhanced Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 15px;
        color: #64748b;
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .scroll-arrow {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(20px);
        border: 2px solid rgba(139, 147, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: bounce 2s infinite;
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .scroll-arrow::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(175, 244, 43, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .scroll-arrow:hover::before {
        opacity: 1;
    }

    .scroll-arrow:hover {
        border-color: #8B93FF;
        transform: scale(1.1);
    }

    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0);
        }
        40% {
            transform: translateY(-10px);
        }
        60% {
            transform: translateY(-5px);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-area-3-inner {
            padding: 60px 0 40px;
        }

        .hero-badge {
            margin-bottom: 30px;
            padding: 10px 20px;
            font-size: 12px;
        }

        .hero-description {
            gap: 15px;
            margin-bottom: 40px;
        }

        .hero-description::before,
        .hero-description::after {
            width: 30px;
        }

        .hero-cta-wrapper {
            flex-direction: column;
            gap: 20px;
        }

        .hero-primary-btn,
        .hero-secondary-btn {
            width: 100%;
            max-width: 320px;
            justify-content: center;
        }

        .hero-stats {
            gap: 40px;
            margin-top: 60px;
        }

        .stat-item {
            min-width: 140px;
            padding: 30px 20px;
        }

        .stat-number {
            font-size: 2.5rem;
        }

        .tech-preview {
            margin: 60px 0 40px;
            gap: 25px;
        }

        .tech-icon {
            width: 50px;
            height: 50px;
            font-size: 24px;
        }

        .floating-orb {
            opacity: 0.4;
        }
    }

    @media (max-width: 480px) {
        .hero-stats {
            gap: 25px;
        }

        .stat-number {
            font-size: 2rem;
        }

        .tech-icons {
            gap: 20px;
        }

        .tech-icon {
            width: 45px;
            height: 45px;
            font-size: 20px;
        }
    }
</style>

<section class="hero-area-2">
    <!-- Enhanced Grid Pattern -->
    <div class="grid-pattern"></div>
    
    <!-- Enhanced Floating Orbs -->
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>

    <div class="container">
        <div class="hero-area-3-inner">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <!-- Enhanced Badge -->
                    <div class="hero-badge fade-anim" data-delay="0.2">
                        <div class="dot"></div>
                        <span>Available for Freelance Projects</span>
                    </div>
                    
                    <div class="title-wrapper">
                        <h1 class="hero-main-title move-anim" data-delay="0.45">
                            Crafting Digital
                            <span class="highlight">Experiences</span>
                            That Matter
                        </h1>
                        
                        <p class="hero-subtitle fade-anim" data-delay="0.6">
                            Full-stack developer specializing in modern web applications, mobile apps, and e-commerce solutions. 
                            Transforming ideas into powerful, scalable digital products with clean code and exceptional user experiences.
                        </p>
                        
                        <div class="hero-description fade-anim" data-delay="0.75">
                            <span>Freelance Developer Since 2019</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Enhanced CTA Buttons -->
            <div class="hero-cta-wrapper fade-anim" data-delay="0.9">
                <a href="#contact" class="hero-primary-btn">
                    <span>Start Your Project</span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#works" class="hero-secondary-btn">
                    <span>View My Work</span>
                    <i class="fa-solid fa-eye"></i>
                </a>
            </div>

            <!-- Enhanced Stats Section -->
            <div class="hero-stats fade-anim" data-delay="1.1">
                <div class="stat-item">
                    <span class="stat-number t-counter">5+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number t-counter">50+</span>
                    <span class="stat-label">Projects Delivered</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number t-counter">30+</span>
                    <span class="stat-label">Happy Clients</span>
                </div>
            </div>

            <!-- Enhanced Tech Stack Preview -->
            <div class="tech-preview fade-anim" data-delay="1.3">
                <span class="tech-preview-label">Tech Stack</span>
                <div class="tech-icons">
                    <div class="tech-icon">
                        <i class="devicon-php-plain colored"></i>
                    </div>
                    <div class="tech-icon">
                        <i class="devicon-react-original colored"></i>
                    </div>
                    <div class="tech-icon">
                        <i class="devicon-nodejs-plain colored"></i>
                    </div>
                    <div class="tech-icon">
                        <i class="devicon-laravel-plain colored"></i>
                    </div>
                    <div class="tech-icon">
                        <i class="devicon-mysql-plain colored"></i>
                    </div>
                </div>
            </div>

            <!-- Enhanced Scroll Indicator -->
            <div class="scroll-indicator fade-anim" data-delay="1.5">
                <span>Scroll to explore</span>
                <div class="scroll-arrow">
                    <i class="fa-solid fa-arrow-down"></i>
                </div>
            </div>

            <!-- Banner Image -->
            <div class="image-wrapper parallax-view fade-anim" data-delay="1.2">
                <img class="w-100" src="assets/imgs/cbd/banner.png" alt="Dawson - Full Stack Developer" data-speed="0.5">
            </div>
        </div>
    </div>
</section>