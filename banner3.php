<style>
    /* text alight center */
    .head-title {
        text-align: center;
    }

    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif !important;
        font-weight: 400 !important;
        font-style: normal;
    }

    .banner-title-cbd {
        font-size: 120px !important;
        font-weight: 500;
        line-height: 1.2;
        letter-spacing: -0.01em;
    }

    /* Hero area full height with animated gradient background */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        background: linear-gradient(135deg, #f5f5f5 0%, #e8e8e8 50%, #f0f0f0 100%);
        overflow: hidden;
        transition: all 0.3s ease;
    }

    /* Animated gradient background */
    .hero-area-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, 
            rgba(251, 146, 60, 0.05) 0%, 
            rgba(252, 124, 130, 0.05) 25%, 
            rgba(162, 110, 236, 0.05) 50%, 
            rgba(51, 246, 179, 0.05) 75%, 
            rgba(255, 232, 112, 0.05) 100%);
        background-size: 400% 400%;
        animation: gradientShift 15s ease infinite;
        z-index: 1;
        pointer-events: none;
    }

    @keyframes gradientShift {
        0% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
        100% { background-position: 0% 50%; }
    }

    /* Dark theme */
    [data-theme="dark"] .hero-area-3 {
        background: linear-gradient(135deg, #1a1a1a 0%, #2d2d2d 50%, #1f1f1f 100%);
    }

    [data-theme="dark"] .hero-area-3::before {
        background: linear-gradient(45deg, 
            rgba(251, 146, 60, 0.1) 0%, 
            rgba(252, 124, 130, 0.1) 25%, 
            rgba(162, 110, 236, 0.1) 50%, 
            rgba(51, 246, 179, 0.1) 75%, 
            rgba(255, 232, 112, 0.1) 100%);
        background-size: 400% 400%;
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

    /* Enhanced floating particles background */
    .floating-particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }

    /* Main floating particles */
    .particle {
        position: absolute;
        border-radius: 50%;
        opacity: 0.7;
        animation: floatUp 12s linear infinite;
    }

    /* Different particle sizes and colors */
    .particle.small {
        width: 3px;
        height: 3px;
        background: #fb923c;
    }

    .particle.medium {
        width: 5px;
        height: 5px;
        background: #fc7c82;
    }

    .particle.large {
        width: 7px;
        height: 7px;
        background: #a26eec;
    }

    .particle.extra-large {
        width: 9px;
        height: 9px;
        background: #33f6b3;
    }

    /* Particle positioning and delays */
    .particle:nth-child(1) { left: 5%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 12%; animation-delay: 1.5s; }
    .particle:nth-child(3) { left: 18%; animation-delay: 3s; }
    .particle:nth-child(4) { left: 25%; animation-delay: 4.5s; }
    .particle:nth-child(5) { left: 32%; animation-delay: 6s; }
    .particle:nth-child(6) { left: 38%; animation-delay: 7.5s; }
    .particle:nth-child(7) { left: 45%; animation-delay: 9s; }
    .particle:nth-child(8) { left: 52%; animation-delay: 10.5s; }
    .particle:nth-child(9) { left: 58%; animation-delay: 0.8s; }
    .particle:nth-child(10) { left: 65%; animation-delay: 2.3s; }
    .particle:nth-child(11) { left: 72%; animation-delay: 3.8s; }
    .particle:nth-child(12) { left: 78%; animation-delay: 5.3s; }
    .particle:nth-child(13) { left: 85%; animation-delay: 6.8s; }
    .particle:nth-child(14) { left: 92%; animation-delay: 8.3s; }
    .particle:nth-child(15) { left: 8%; animation-delay: 9.8s; }
    .particle:nth-child(16) { left: 15%; animation-delay: 11.3s; }
    .particle:nth-child(17) { left: 22%; animation-delay: 1.2s; }
    .particle:nth-child(18) { left: 28%; animation-delay: 2.7s; }
    .particle:nth-child(19) { left: 35%; animation-delay: 4.2s; }
    .particle:nth-child(20) { left: 42%; animation-delay: 5.7s; }
    .particle:nth-child(21) { left: 48%; animation-delay: 7.2s; }
    .particle:nth-child(22) { left: 55%; animation-delay: 8.7s; }
    .particle:nth-child(23) { left: 62%; animation-delay: 10.2s; }
    .particle:nth-child(24) { left: 68%; animation-delay: 11.7s; }
    .particle:nth-child(25) { left: 75%; animation-delay: 0.4s; }

    @keyframes floatUp {
        0% {
            transform: translateY(100vh) scale(0);
            opacity: 0;
        }
        5% {
            opacity: 0.7;
            transform: scale(1);
        }
        95% {
            opacity: 0.7;
        }
        100% {
            transform: translateY(-100px) scale(0);
            opacity: 0;
        }
    }

    /* Ambient particles - smaller and more subtle */
    .ambient-particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }

    .ambient-particle {
        position: absolute;
        width: 2px;
        height: 2px;
        background: rgba(251, 146, 60, 0.4);
        border-radius: 50%;
        animation: ambientFloat 20s linear infinite;
    }

    .ambient-particle:nth-child(1) { left: 3%; animation-delay: 0s; }
    .ambient-particle:nth-child(2) { left: 9%; animation-delay: 2s; }
    .ambient-particle:nth-child(3) { left: 16%; animation-delay: 4s; }
    .ambient-particle:nth-child(4) { left: 23%; animation-delay: 6s; }
    .ambient-particle:nth-child(5) { left: 31%; animation-delay: 8s; }
    .ambient-particle:nth-child(6) { left: 39%; animation-delay: 10s; }
    .ambient-particle:nth-child(7) { left: 47%; animation-delay: 12s; }
    .ambient-particle:nth-child(8) { left: 54%; animation-delay: 14s; }
    .ambient-particle:nth-child(9) { left: 61%; animation-delay: 16s; }
    .ambient-particle:nth-child(10) { left: 69%; animation-delay: 18s; }
    .ambient-particle:nth-child(11) { left: 76%; animation-delay: 1s; }
    .ambient-particle:nth-child(12) { left: 83%; animation-delay: 3s; }
    .ambient-particle:nth-child(13) { left: 91%; animation-delay: 5s; }
    .ambient-particle:nth-child(14) { left: 97%; animation-delay: 7s; }
    .ambient-particle:nth-child(15) { left: 6%; animation-delay: 9s; }

    @keyframes ambientFloat {
        0% {
            transform: translateY(100vh) translateX(0px);
            opacity: 0;
        }
        10% {
            opacity: 0.4;
        }
        90% {
            opacity: 0.4;
        }
        100% {
            transform: translateY(-100px) translateX(20px);
            opacity: 0;
        }
    }

    /* Sparkle particles - tiny twinkling effects */
    .sparkle-particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }

    .sparkle {
        position: absolute;
        width: 1px;
        height: 1px;
        background: #fff;
        border-radius: 50%;
        animation: sparkleEffect 3s ease-in-out infinite;
    }

    .sparkle:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
    .sparkle:nth-child(2) { top: 30%; left: 25%; animation-delay: 0.5s; }
    .sparkle:nth-child(3) { top: 15%; left: 40%; animation-delay: 1s; }
    .sparkle:nth-child(4) { top: 45%; left: 15%; animation-delay: 1.5s; }
    .sparkle:nth-child(5) { top: 25%; left: 60%; animation-delay: 2s; }
    .sparkle:nth-child(6) { top: 35%; left: 75%; animation-delay: 2.5s; }
    .sparkle:nth-child(7) { top: 50%; left: 30%; animation-delay: 0.3s; }
    .sparkle:nth-child(8) { top: 40%; left: 85%; animation-delay: 0.8s; }
    .sparkle:nth-child(9) { top: 60%; left: 20%; animation-delay: 1.3s; }
    .sparkle:nth-child(10) { top: 55%; left: 70%; animation-delay: 1.8s; }

    @keyframes sparkleEffect {
        0%, 100% {
            opacity: 0;
            transform: scale(0);
        }
        50% {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Simple geometric shapes with single colors */
    .banner-shapes {
        position: relative;
        margin-bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 60px;
    }

    .shape-element {
        position: relative;
        animation: simpleFloat 6s ease-in-out infinite;
    }

    .shape-element:nth-child(1) { animation-delay: 0s; }
    .shape-element:nth-child(2) { animation-delay: 2s; }
    .shape-element:nth-child(3) { animation-delay: 4s; }

    /* Simple Circle */
    .shape-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background-color: #fb923c;
        transition: all 0.3s ease;
    }

    /* Simple Square */
    .shape-square {
        width: 70px;
        height: 70px;
        background-color: #a26eec;
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    /* Simple Triangle */
    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-bottom: 70px solid #33f6b3;
        transition: all 0.3s ease;
    }

    /* Simple float animation */
    @keyframes simpleFloat {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-15px);
        }
    }

    /* Hover effects for shapes */
    .shape-element:hover .shape-circle {
        background-color: #fc7c82;
        transform: scale(1.1);
    }

    .shape-element:hover .shape-square {
        background-color: #8b7cf6;
        transform: rotate(45deg) scale(1.1);
    }

    .shape-element:hover .shape-triangle {
        border-bottom-color: #22d3ee;
        transform: scale(1.1);
    }

    /* Simple decorative lines */
    .banner-shapes::before,
    .banner-shapes::after {
        content: '';
        position: absolute;
        width: 120px;
        height: 2px;
        background-color: #fb923c;
        top: 50%;
        border-radius: 1px;
        opacity: 0.6;
        animation: lineGlow 4s ease-in-out infinite;
    }

    .banner-shapes::before {
        left: -180px;
        animation-delay: 0s;
    }

    .banner-shapes::after {
        right: -180px;
        animation-delay: 2s;
    }

    @keyframes lineGlow {
        0%, 100% {
            opacity: 0.6;
            transform: scaleX(1);
        }
        50% {
            opacity: 1;
            transform: scaleX(1.2);
        }
    }

    /* Orbiting elements - simplified */
    .orbit-container {
        position: absolute;
        width: 280px;
        height: 280px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 0;
    }

    .orbit-element {
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: #fc7c82;
        border-radius: 50%;
        animation: orbit 15s linear infinite;
    }

    .orbit-element:nth-child(1) {
        animation-delay: 0s;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .orbit-element:nth-child(2) {
        animation-delay: 7.5s;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
    }

    @keyframes orbit {
        0% { transform: rotate(0deg) translateX(140px) rotate(0deg); }
        100% { transform: rotate(360deg) translateX(140px) rotate(-360deg); }
    }

    /* Dark theme adjustments */
    [data-theme="dark"] .particle.small {
        background: #fb923c;
    }

    [data-theme="dark"] .particle.medium {
        background: #fc7c82;
    }

    [data-theme="dark"] .particle.large {
        background: #a26eec;
    }

    [data-theme="dark"] .particle.extra-large {
        background: #33f6b3;
    }

    [data-theme="dark"] .ambient-particle {
        background: rgba(162, 110, 236, 0.4);
    }

    [data-theme="dark"] .sparkle {
        background: rgba(255, 255, 255, 0.8);
    }

    [data-theme="dark"] .shape-circle {
        background-color: #fb923c;
    }

    [data-theme="dark"] .shape-square {
        background-color: #a26eec;
    }

    [data-theme="dark"] .shape-triangle {
        border-bottom-color: #33f6b3;
    }

    [data-theme="dark"] .banner-shapes::before,
    [data-theme="dark"] .banner-shapes::after {
        background-color: #a26eec;
    }

    [data-theme="dark"] .orbit-element {
        background-color: #fc7c82;
    }

    [data-theme="dark"] .shape-element:hover .shape-circle {
        background-color: #fc7c82;
    }

    [data-theme="dark"] .shape-element:hover .shape-square {
        background-color: #8b7cf6;
    }

    [data-theme="dark"] .shape-element:hover .shape-triangle {
        border-bottom-color: #22d3ee;
    }

    /* Responsive adjustments */
    @media only screen and (max-width: 1919px) {
        .banner-title-cbd {
            font-size: 100px !important;
        }
    }

    @media only screen and (max-width: 1399px) {
        .banner-title-cbd {
            font-size: 90px !important;
        }
    }

    @media only screen and (max-width: 1199px) {
        .banner-title-cbd {
            font-size: 80px !important;
        }

        .hero-area-3-inner {
            padding-top: 140px;
        }

        .banner-shapes {
            gap: 40px;
        }

        .orbit-container {
            width: 220px;
            height: 220px;
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

        .hero-area-3-inner {
            padding-top: 160px;
        }

        .banner-shapes {
            margin-bottom: 40px;
            gap: 30px;
        }

        .shape-circle {
            width: 60px;
            height: 60px;
        }

        .shape-square {
            width: 50px;
            height: 50px;
        }

        .shape-triangle {
            border-left: 30px solid transparent;
            border-right: 30px solid transparent;
            border-bottom: 55px solid #33f6b3;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            width: 80px;
        }

        .banner-shapes::before {
            left: -120px;
        }

        .banner-shapes::after {
            right: -120px;
        }

        .orbit-container {
            width: 180px;
            height: 180px;
        }

        .orbit-element {
            width: 6px;
            height: 6px;
        }

        /* Reduce particles on tablet */
        .particle:nth-child(n+16) {
            display: none;
        }

        .ambient-particle:nth-child(n+11) {
            display: none;
        }

        .sparkle:nth-child(n+6) {
            display: none;
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

        .hero-area-3-inner {
            padding-top: 180px;
        }

        .banner-shapes {
            margin-bottom: 30px;
            gap: 25px;
        }

        .shape-circle {
            width: 50px;
            height: 50px;
        }

        .shape-square {
            width: 40px;
            height: 40px;
        }

        .shape-triangle {
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            border-bottom: 45px solid #33f6b3;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            display: none;
        }

        .orbit-container {
            display: none;
        }

        /* Reduce particles significantly on mobile */
        .particle:nth-child(n+11) {
            display: none;
        }

        .ambient-particle:nth-child(n+8) {
            display: none;
        }

        .sparkle:nth-child(n+4) {
            display: none;
        }
    }

    @media only screen and (max-width: 480px) {
        .hero-area-3-inner {
            padding-top: 200px;
        }

        .banner-shapes {
            gap: 20px;
        }

        .shape-circle {
            width: 45px;
            height: 45px;
        }

        .shape-square {
            width: 35px;
            height: 35px;
        }

        .shape-triangle {
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid #33f6b3;
        }

        /* Minimal particles on small mobile */
        .particle:nth-child(n+8) {
            display: none;
        }

        .ambient-particle:nth-child(n+5) {
            display: none;
        }

        .sparkle:nth-child(n+3) {
            display: none;
        }
    }
</style>

<section class="hero-area-3">
    <!-- Enhanced floating particles background -->
    <div class="floating-particles">
        <!-- Main particles with different sizes -->
        <div class="particle small"></div>
        <div class="particle medium"></div>
        <div class="particle large"></div>
        <div class="particle small"></div>
        <div class="particle extra-large"></div>
        <div class="particle medium"></div>
        <div class="particle small"></div>
        <div class="particle large"></div>
        <div class="particle medium"></div>
        <div class="particle small"></div>
        <div class="particle extra-large"></div>
        <div class="particle medium"></div>
        <div class="particle large"></div>
        <div class="particle small"></div>
        <div class="particle medium"></div>
        <div class="particle large"></div>
        <div class="particle small"></div>
        <div class="particle extra-large"></div>
        <div class="particle medium"></div>
        <div class="particle small"></div>
        <div class="particle large"></div>
        <div class="particle medium"></div>
        <div class="particle small"></div>
        <div class="particle extra-large"></div>
        <div class="particle medium"></div>
    </div>

    <!-- Ambient particles - smaller and more subtle -->
    <div class="ambient-particles">
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
        <div class="ambient-particle"></div>
    </div>

    <!-- Sparkle particles - tiny twinkling effects -->
    <div class="sparkle-particles">
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
        <div class="sparkle"></div>
    </div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <!-- Orbiting elements -->
                <div class="orbit-container">
                    <div class="orbit-element"></div>
                    <div class="orbit-element"></div>
                </div>

                <!-- Simple geometric shapes with single colors -->
                <div class="banner-shapes fade-anim" data-delay="0.15">
                    <div class="shape-element">
                        <div class="shape-circle"></div>
                    </div>
                    <div class="shape-element">
                        <div class="shape-square"></div>
                    </div>
                    <div class="shape-element">
                        <div class="shape-triangle"></div>
                    </div>
                </div>

                <div class="section-title-wrapper">
                    <div class="title-wrapper head-title">
                        <h1 class="montserrat-alternates-semibold banner-title-cbd move-anim" data-delay="0.45">Codes By
                            <span style="color: var(--cbd-orange);">Dawson</span>
                        </h1>
                        <div class="text-wrapper move-anim" data-delay="0.45">
                            <p class="text">Building High-Impact Web & App Products.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content-wrapper">
                <div class="section-content">
                    <div class="text-wrapper fade-anim" data-delay="0.60">
                        <p class="text">Full Stack Developer | <br> Web Development | Mobile App Development</p>
                    </div>
                </div>
            </div>
        </div>
        <span class="empty-space hide-mobile" style="height: 100px"></span>
        <div class="image-wrapper parallax-view fade-anim">
            <video loop muted autoplay playsinline data-speed="0.5">
                <source src="assets/imgs/cbd/banner.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>