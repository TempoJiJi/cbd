<style>
    /* Modern Typography System */
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500;600&display=swap');

    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        align-items: center;
        position: relative;
        /* background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%); */
        overflow: hidden;
    }

    .hero-area-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background: */
        /* radial-gradient(circle at 20% 80%, rgba(139, 147, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(175, 244, 43, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(255, 206, 92, 0.05) 0%, transparent 50%); */
        z-index: 1;
    }

    .hero-area-3-inner {
        position: relative;
        z-index: 2;
        padding: 120px 0 80px;
    }

    /* Enhanced Typography */
    .hero-main-title {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
        font-size: clamp(3.5rem, 8vw, 7rem);
        font-weight: 800;
        line-height: 0.95;
        letter-spacing: -0.02em;
        color: #0f172a;
        margin-bottom: 0;
        text-align: center;
        position: relative;
    }

    .hero-subtitle {
        font-family: 'JetBrains Mono', monospace;
        font-size: clamp(0.875rem, 2vw, 1.125rem);
        font-weight: 500;
        color: #8B93FF;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-bottom: 20px;
        text-align: center;
        position: relative;
    }

    .hero-subtitle::before,
    .hero-subtitle::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 60px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
    }

    .hero-subtitle::before {
        left: -80px;
    }

    .hero-subtitle::after {
        right: -80px;
    }

    .hero-name-highlight {
        background: linear-gradient(135deg, #FB923C);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        display: inline-block;
    }

    .hero-name-highlight::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, #8B93FF, #AFF42B, #FFE870);
        border-radius: 2px;
        opacity: 0.6;
    }

    .hero-description {
        font-family: 'Inter', sans-serif;
        font-size: clamp(1.25rem, 3vw, 1.75rem);
        font-weight: 400;
        line-height: 1.4;
        color: #475569;
        text-align: center;
        margin: 40px auto;
        max-width: 700px;
        position: relative;
    }

    .hero-description::before {
        content: '"';
        position: absolute;
        left: -30px;
        top: -10px;
        font-size: 4rem;
        color: #8B93FF;
        opacity: 0.3;
        font-family: serif;
    }

    .hero-description::after {
        content: '"';
        position: absolute;
        right: -30px;
        bottom: -40px;
        font-size: 4rem;
        color: #8B93FF;
        opacity: 0.3;
        font-family: serif;
    }

    /* Enhanced Button Design */
    .hero-cta-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 20px;
        margin: 60px 0;
        flex-wrap: wrap;
    }

    .hero-primary-btn {
        background: linear-gradient(135deg, #8B93FF 0%, #AFF42B 100%);
        color: #0f172a;
        font-family: 'Inter', sans-serif;
        font-size: 1.125rem;
        font-weight: 600;
        padding: 18px 36px;
        border-radius: 50px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(139, 147, 255, 0.3);
        position: relative;
        overflow: hidden;
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
        transform: translateY(-2px);
        box-shadow: 0 20px 40px rgba(139, 147, 255, 0.4);
    }

    .hero-secondary-btn {
        background: transparent;
        color: #475569;
        font-family: 'Inter', sans-serif;
        font-size: 1.125rem;
        font-weight: 500;
        padding: 18px 36px;
        border: 2px solid #e2e8f0;
        border-radius: 50px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 12px;
        transition: all 0.3s ease;
    }

    .hero-secondary-btn:hover {
        border-color: #8B93FF;
        color: #8B93FF;
        transform: translateY(-2px);
    }

    /* Floating Elements */
    .floating-element {
        position: absolute;
        z-index: 1;
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
        top: 60%;
        right: 15%;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0px) rotate(0deg);
        }

        50% {
            transform: translateY(-20px) rotate(5deg);
        }
    }

    .floating-shape {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, #8B93FF, #AFF42B);
        opacity: 0.1;
    }

    .floating-shape.square {
        border-radius: 12px;
        background: linear-gradient(135deg, #FFE870, #FB923C);
    }

    .floating-shape.triangle {
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 52px solid rgba(139, 147, 255, 0.1);
        border-radius: 0;
        background: none;
    }

    /* Stats Section */
    .hero-stats {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin-top: 80px;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        position: relative;
    }

    .stat-number {
        font-family: 'Inter', sans-serif;
        font-size: 2.5rem;
        font-weight: 700;
        color: #0f172a;
        display: block;
        margin-bottom: 8px;
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Scroll Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 40px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        color: #64748b;
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
    }

    .scroll-arrow {
        width: 24px;
        height: 24px;
        border: 2px solid #64748b;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        20%,
        50%,
        80%,
        100% {
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
            padding: 80px 0 60px;
        }

        .hero-subtitle::before,
        .hero-subtitle::after {
            display: none;
        }

        .hero-description::before,
        .hero-description::after {
            display: none;
        }

        .hero-cta-wrapper {
            flex-direction: column;
            gap: 16px;
        }

        .hero-primary-btn,
        .hero-secondary-btn {
            width: 100%;
            max-width: 300px;
            justify-content: center;
        }

        .hero-stats {
            gap: 40px;
            margin-top: 60px;
        }

        .floating-element {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .hero-stats {
            gap: 30px;
        }

        .stat-number {
            font-size: 2rem;
        }
    }
</style>

<section class="hero-area-3">
    <!-- Floating Elements -->
    <div class="floating-element">
        <div class="floating-shape"></div>
    </div>
    <div class="floating-element">
        <div class="floating-shape square"></div>
    </div>
    <div class="floating-element">
        <div class="floating-shape triangle"></div>
    </div>

    <div class="container">
        <div class="hero-area-3-inner">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h1 class="hero-main-title move-anim" data-delay="0.45">
                            Codes By
                            <span class="">Dawson</span>
                        </h1>
                        <p class="hero-description fade-anim" data-delay="0.6">
                            Crafting high-performance web applications and mobile solutions that drive business growth and deliver exceptional user experiences.
                        </p>
                    </div>
                </div>
            </div>

            <div class="section-content-wrapper">
                <div class="content-shape-1 fade-anim btn-item" data-direction="top" data-offset="150" data-ease="bounce" data-delay="1.05">
                    <div class="btn-move">
                        <a href="#about"><img src="assets/imgs/shape/shape-17.webp" alt="image"></a>
                    </div>
                </div>
            </div>

            <!-- <div class="section-content-wrapper">
                <div class="hero-cta-wrapper fade-anim" data-delay="0.75">
                    <a href="/contact" class="hero-primary-btn">
                        <span>Let's Build Something Amazing</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="#about" class="hero-secondary-btn">
                        <span>Explore My Work</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </a>
                </div>
            </div> -->
            <span class="empty-space hide-mobile" style="height: 50px"></span>

            <div class="image-wrapper parallax-view fade-anim">
                <img class="w-100" src="assets/imgs/cbd/banner.png" alt="image" data-speed="0.5">
            </div>

        </div>

        <!-- <span class="empty-space hide-mobile" style="height: 100px"></span> -->

    </div>
</section>