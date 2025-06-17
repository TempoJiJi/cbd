<style>
    @keyframes gridMove {
        0% {
            transform: translate(0, 0);
        }

        100% {
            transform: translate(50px, 50px);
        }
    }

    /* Floating Orbs */
    .floating-orb {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(175, 244, 43, 0.1));
        backdrop-filter: blur(20px);
        animation: floatOrb 8s ease-in-out infinite;
        z-index: 1;
    }

    .floating-orb:nth-child(1) {
        width: 200px;
        height: 200px;
        top: 10%;
        left: 5%;
        animation-delay: 0s;
    }

    .floating-orb:nth-child(2) {
        width: 150px;
        height: 150px;
        top: 60%;
        right: 10%;
        animation-delay: 2s;
        background: linear-gradient(135deg, rgba(255, 206, 92, 0.1), rgba(251, 146, 60, 0.1));
    }

    .floating-orb:nth-child(3) {
        width: 100px;
        height: 100px;
        bottom: 20%;
        left: 15%;
        animation-delay: 4s;
        background: linear-gradient(135deg, rgba(175, 244, 43, 0.1), rgba(139, 147, 255, 0.1));
    }

    .floating-orb:nth-child(4) {
        width: 80px;
        height: 80px;
        top: 30%;
        right: 25%;
        animation-delay: 6s;
        background: linear-gradient(135deg, rgba(251, 146, 60, 0.1), rgba(255, 206, 92, 0.1));
    }

    @keyframes floatOrb {

        0%,
        100% {
            transform: translateY(0px) translateX(0px) rotate(0deg);
        }

        25% {
            transform: translateY(-20px) translateX(10px) rotate(90deg);
        }

        50% {
            transform: translateY(-40px) translateX(-10px) rotate(180deg);
        }

        75% {
            transform: translateY(-20px) translateX(10px) rotate(270deg);
        }
    }

    .hero-area-3-inner {
        position: relative;
        z-index: 2;
        padding: 120px 0 80px;
        width: 100%;
    }

    /* Enhanced Typography with Fredoka */

    .fredoka-font {
        font-family: "Fredoka", sans-serif !important;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif !important;
        font-weight: 400;
        font-style: normal;
    }


    .hero-main-title {
        font-size: clamp(4rem, 10vw, 8rem);
        font-weight: 600;
        line-height: 0.9;
        letter-spacing: -0.02em;
        color: #0f172a;
        margin-bottom: 30px;
        text-align: center;
        position: relative;
    }

    .hero-main-title .highlight {
        color: #FB923C;
        position: relative;
        display: inline-block;
    }

    .hero-main-title .highlight::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 0;
        right: 0;
        height: 6px;
        background: linear-gradient(90deg, #8B93FF, #AFF42B, #FFE870);
        border-radius: 3px;
        opacity: 0.4;
        animation: shimmer 3s ease-in-out infinite;
    }

    @keyframes shimmer {

        0%,
        100% {
            opacity: 0.4;
            transform: scaleX(1);
        }

        50% {
            opacity: 0.8;
            transform: scaleX(1.05);
        }
    }

    .hero-subtitle {
        font-family: 'JetBrains Mono', monospace;
        font-size: clamp(0.875rem, 2vw, 1.125rem);
        font-weight: 500;
        color: #8B93FF;
        text-transform: uppercase;
        letter-spacing: 0.15em;
        margin-bottom: 25px;
        text-align: center;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 20px;
    }

    .hero-subtitle::before,
    .hero-subtitle::after {
        content: '';
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
        animation: pulse 2s ease-in-out infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 0.5;
        }

        50% {
            opacity: 1;
        }
    }

    .hero-description {
        font-family: 'Inter', sans-serif;
        font-size: clamp(1.25rem, 3vw, 1.75rem);
        font-weight: 400;
        line-height: 1.5;
        color: #475569;
        text-align: center;
        margin: 40px auto 60px;
        max-width: 1000px;
        position: relative;
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
        box-shadow: 0 15px 35px rgba(139, 147, 255, 0.3);
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
        box-shadow: 0 25px 50px rgba(139, 147, 255, 0.4);
        border-color: rgba(255, 255, 255, 0.3);
    }

    .hero-secondary-btn {
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
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

    /* Stats Section Enhancement */
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
        top: -20px;
        left: 50%;
        transform: translateX(-50%);
        width: 200px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #8B93FF, transparent);
    }

    .stat-item {
        text-align: center;
        position: relative;
        padding: 30px 20px;
        background: rgba(255, 255, 255, 0.6);
        backdrop-filter: blur(10px);
        border-radius: 20px;
        border: 1px solid rgba(139, 147, 255, 0.1);
        transition: all 0.3s ease;
        min-width: 160px;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(139, 147, 255, 0.15);
        border-color: rgba(139, 147, 255, 0.3);
    }

    .stat-number {
        font-family: 'Fredoka', sans-serif;
        font-size: 3rem;
        font-weight: 600;
        background: linear-gradient(135deg, #8B93FF, #AFF42B);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: block;
        margin-bottom: 10px;
        line-height: 1;
    }

    .stat-label {
        font-family: 'Inter', sans-serif;
        font-size: 0.875rem;
        font-weight: 500;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }

    /* Tech Stack Preview */
    .tech-preview {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
        margin: 80px 0 40px;
        flex-wrap: wrap;
    }

    .tech-preview-label {
        font-family: 'JetBrains Mono', monospace;
        font-size: 0.875rem;
        font-weight: 500;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.1em;
    }

    .tech-icons {
        display: flex;
        gap: 20px;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
    }

    .tech-icon {
        width: 50px;
        height: 50px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid rgba(139, 147, 255, 0.1);
        transition: all 0.3s ease;
        font-size: 24px;
    }

    .tech-icon:hover {
        transform: translateY(-3px) rotate(5deg);
        box-shadow: 0 10px 25px rgba(139, 147, 255, 0.2);
        border-color: rgba(139, 147, 255, 0.3);
    }

    /* Scroll Indicator Enhancement */
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
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(139, 147, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        animation: bounce 2s infinite;
        transition: all 0.3s ease;
    }

    .scroll-arrow:hover {
        border-color: #8B93FF;
        background: rgba(139, 147, 255, 0.1);
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

        .hero-subtitle {
            gap: 15px;
        }

        .hero-subtitle::before,
        .hero-subtitle::after {
            width: 40px;
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
            padding: 20px 15px;
        }

        .stat-number {
            font-size: 2.5rem;
        }

        .tech-preview {
            margin: 60px 0 30px;
            gap: 20px;
        }

        .tech-icon {
            width: 45px;
            height: 45px;
            font-size: 20px;
        }

        .floating-orb {
            opacity: 0.5;
        }
    }

    @media (max-width: 480px) {
        .hero-stats {
            gap: 30px;
        }

        .stat-number {
            font-size: 2rem;
        }

        .tech-icons {
            gap: 15px;
        }
    }
</style>

<section class="hero-area-3">
    <!-- Floating Orbs -->
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>
    <div class="floating-orb"></div>

    <div class="container">
        <div class="hero-area-3-inner">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h1 class="bebas-neue-regular hero-main-title move-anim" data-delay="0.45">
                            Codes By
                            <!-- <h1 class="section-title typewriter-text fade-anim" data-text='["STUDIO", "DESIGN"]'>STUDIO</h1> -->
                            <span class="" style="color: #FC7C82;" data-text='["DAWSON"]'>DAWSON</span>
                        </h1>
                        <!-- <p class="hero-description fade-anim" data-delay="0.6">Freelance Developer | Web Development | Mobile Apps Development </p> -->
                    </div>
                    <div class="section-content section-spacing-bottom">
                        <div class="text-wrapper fade-anim" data-delay="0.60">
                            <p class="text">Building High-Impact Web & App Products.</p>
                        </div>
                        <div class="btn-wrapper fade-anim" data-delay="0.75">
                            <div class="t-btn-group">
                                <a class='t-btn t-btn-circle' href='/contact'>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                                <a class='t-btn t-btn-primary' href='/contact'>Let's Connect</a>
                                <a class='t-btn t-btn-circle' href='/contact'>
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- <div class="section-content-wr -->

            <!-- <span class="empty-space hide-mobile" style="height: 20px"></span> -->
            <div class="image-wrapper parallax-view fade-anim">
                <img class="w-100" src="assets/imgs/cbd/banner.png" alt="image" data-speed="0.5">
            </div>


        </div>
    </div>
</section>