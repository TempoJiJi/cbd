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

    /* Floating particles background */
    .floating-particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: linear-gradient(45deg, #fb923c, #fc7c82);
        border-radius: 50%;
        opacity: 0.6;
        animation: floatUp 8s linear infinite;
    }

    .particle:nth-child(1) { left: 10%; animation-delay: 0s; }
    .particle:nth-child(2) { left: 20%; animation-delay: 1s; }
    .particle:nth-child(3) { left: 30%; animation-delay: 2s; }
    .particle:nth-child(4) { left: 40%; animation-delay: 3s; }
    .particle:nth-child(5) { left: 50%; animation-delay: 4s; }
    .particle:nth-child(6) { left: 60%; animation-delay: 5s; }
    .particle:nth-child(7) { left: 70%; animation-delay: 6s; }
    .particle:nth-child(8) { left: 80%; animation-delay: 7s; }
    .particle:nth-child(9) { left: 90%; animation-delay: 0.5s; }
    .particle:nth-child(10) { left: 15%; animation-delay: 1.5s; }

    @keyframes floatUp {
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

    /* Enhanced 3D geometric shapes with glow effects */
    .banner-shapes {
        position: relative;
        margin-bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 60px;
        perspective: 1200px;
    }

    .shape-element {
        position: relative;
        animation: float3D 10s ease-in-out infinite;
        transform-style: preserve-3d;
        filter: drop-shadow(0 10px 30px rgba(0, 0, 0, 0.1));
    }

    .shape-element:nth-child(1) { animation-delay: 0s; }
    .shape-element:nth-child(2) { animation-delay: 3s; }
    .shape-element:nth-child(3) { animation-delay: 6s; }

    /* Glowing 3D Circle */
    .shape-circle {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        background: linear-gradient(135deg, #fb923c 0%, #fc7c82 50%, #ff6b9d 100%);
        position: relative;
        transform-style: preserve-3d;
        box-shadow: 
            0 0 40px rgba(251, 146, 60, 0.4),
            0 20px 40px rgba(252, 124, 130, 0.3),
            inset 0 -8px 20px rgba(0, 0, 0, 0.1),
            inset 0 8px 20px rgba(255, 255, 255, 0.3);
        animation: glow 4s ease-in-out infinite;
    }

    .shape-circle::before {
        content: '';
        position: absolute;
        top: 20%;
        left: 25%;
        width: 35%;
        height: 35%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.8) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(4px);
    }

    /* Rotating 3D Square */
    .shape-square {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, #a26eec 0%, #33f6b3 50%, #7dd3fc 100%);
        transform: rotate(45deg);
        position: relative;
        transform-style: preserve-3d;
        box-shadow: 
            0 0 50px rgba(162, 110, 236, 0.5),
            0 25px 50px rgba(51, 246, 179, 0.3),
            inset 0 -10px 25px rgba(0, 0, 0, 0.15),
            inset 0 10px 25px rgba(255, 255, 255, 0.2);
        animation: rotateGlow 6s linear infinite;
    }

    .shape-square::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.4) 50%, transparent 70%);
        animation: shine 3s ease-in-out infinite;
    }

    /* Pulsing 3D Triangle */
    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 45px solid transparent;
        border-right: 45px solid transparent;
        border-bottom: 80px solid #ffe870;
        position: relative;
        filter: drop-shadow(0 0 30px rgba(255, 232, 112, 0.6))
                drop-shadow(0 20px 30px rgba(255, 232, 112, 0.3));
        animation: pulse 3s ease-in-out infinite;
    }

    .shape-triangle::before {
        content: '';
        position: absolute;
        top: 25px;
        left: -18px;
        width: 0;
        height: 0;
        border-left: 18px solid transparent;
        border-right: 18px solid transparent;
        border-bottom: 30px solid rgba(255, 255, 255, 0.4);
        filter: blur(2px);
    }

    /* Enhanced animations */
    @keyframes float3D {
        0%, 100% {
            transform: translateY(0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg);
        }
        25% {
            transform: translateY(-20px) rotateX(10deg) rotateY(10deg) rotateZ(5deg);
        }
        50% {
            transform: translateY(-35px) rotateX(0deg) rotateY(20deg) rotateZ(0deg);
        }
        75% {
            transform: translateY(-15px) rotateX(-10deg) rotateY(10deg) rotateZ(-5deg);
        }
    }

    @keyframes glow {
        0%, 100% {
            box-shadow: 
                0 0 40px rgba(251, 146, 60, 0.4),
                0 20px 40px rgba(252, 124, 130, 0.3),
                inset 0 -8px 20px rgba(0, 0, 0, 0.1),
                inset 0 8px 20px rgba(255, 255, 255, 0.3);
        }
        50% {
            box-shadow: 
                0 0 60px rgba(251, 146, 60, 0.6),
                0 25px 50px rgba(252, 124, 130, 0.4),
                inset 0 -8px 20px rgba(0, 0, 0, 0.1),
                inset 0 8px 20px rgba(255, 255, 255, 0.3);
        }
    }

    @keyframes rotateGlow {
        0% {
            transform: rotate(45deg);
            box-shadow: 
                0 0 50px rgba(162, 110, 236, 0.5),
                0 25px 50px rgba(51, 246, 179, 0.3),
                inset 0 -10px 25px rgba(0, 0, 0, 0.15),
                inset 0 10px 25px rgba(255, 255, 255, 0.2);
        }
        50% {
            transform: rotate(225deg);
            box-shadow: 
                0 0 70px rgba(162, 110, 236, 0.7),
                0 30px 60px rgba(51, 246, 179, 0.4),
                inset 0 -10px 25px rgba(0, 0, 0, 0.15),
                inset 0 10px 25px rgba(255, 255, 255, 0.2);
        }
        100% {
            transform: rotate(405deg);
            box-shadow: 
                0 0 50px rgba(162, 110, 236, 0.5),
                0 25px 50px rgba(51, 246, 179, 0.3),
                inset 0 -10px 25px rgba(0, 0, 0, 0.15),
                inset 0 10px 25px rgba(255, 255, 255, 0.2);
        }
    }

    @keyframes pulse {
        0%, 100% {
            transform: scale(1);
            filter: drop-shadow(0 0 30px rgba(255, 232, 112, 0.6))
                    drop-shadow(0 20px 30px rgba(255, 232, 112, 0.3));
        }
        50% {
            transform: scale(1.1);
            filter: drop-shadow(0 0 50px rgba(255, 232, 112, 0.8))
                    drop-shadow(0 25px 40px rgba(255, 232, 112, 0.4));
        }
    }

    @keyframes shine {
        0%, 100% { opacity: 0; }
        50% { opacity: 1; }
    }

    /* Animated decorative elements */
    .banner-shapes::before,
    .banner-shapes::after {
        content: '';
        position: absolute;
        width: 150px;
        height: 4px;
        background: linear-gradient(90deg, 
            transparent, 
            rgba(251, 146, 60, 0.8) 20%, 
            rgba(252, 124, 130, 0.8) 50%, 
            rgba(162, 110, 236, 0.8) 80%, 
            transparent);
        top: 50%;
        border-radius: 2px;
        box-shadow: 0 0 20px rgba(251, 146, 60, 0.4);
        animation: lineFlow 6s ease-in-out infinite;
    }

    .banner-shapes::before {
        left: -220px;
        animation-delay: 0s;
    }

    .banner-shapes::after {
        right: -220px;
        animation-delay: 3s;
    }

    @keyframes lineFlow {
        0%, 100% {
            opacity: 0.6;
            transform: scaleX(1);
            box-shadow: 0 0 20px rgba(251, 146, 60, 0.4);
        }
        50% {
            opacity: 1;
            transform: scaleX(1.2);
            box-shadow: 0 0 40px rgba(251, 146, 60, 0.6);
        }
    }

    /* Orbiting elements */
    .orbit-container {
        position: absolute;
        width: 300px;
        height: 300px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 0;
    }

    .orbit-element {
        position: absolute;
        width: 12px;
        height: 12px;
        background: linear-gradient(45deg, #fb923c, #fc7c82);
        border-radius: 50%;
        box-shadow: 0 0 20px rgba(251, 146, 60, 0.6);
        animation: orbit 20s linear infinite;
    }

    .orbit-element:nth-child(1) {
        animation-delay: 0s;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .orbit-element:nth-child(2) {
        animation-delay: 10s;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
    }

    @keyframes orbit {
        0% { transform: rotate(0deg) translateX(150px) rotate(0deg); }
        100% { transform: rotate(360deg) translateX(150px) rotate(-360deg); }
    }

    /* Enhanced text glow effect */
    .banner-title-cbd {
        text-shadow: 0 0 30px rgba(251, 146, 60, 0.3);
        animation: textGlow 4s ease-in-out infinite;
    }

    @keyframes textGlow {
        0%, 100% {
            text-shadow: 0 0 30px rgba(251, 146, 60, 0.3);
        }
        50% {
            text-shadow: 0 0 50px rgba(251, 146, 60, 0.5);
        }
    }

    /* Dark theme adjustments */
    [data-theme="dark"] .particle {
        background: linear-gradient(45deg, #fb923c, #a26eec);
        box-shadow: 0 0 10px rgba(251, 146, 60, 0.4);
    }

    [data-theme="dark"] .shape-circle {
        box-shadow: 
            0 0 50px rgba(251, 146, 60, 0.6),
            0 20px 40px rgba(252, 124, 130, 0.4),
            inset 0 -8px 20px rgba(0, 0, 0, 0.3),
            inset 0 8px 20px rgba(255, 255, 255, 0.1);
    }

    [data-theme="dark"] .shape-square {
        box-shadow: 
            0 0 60px rgba(162, 110, 236, 0.7),
            0 25px 50px rgba(51, 246, 179, 0.4),
            inset 0 -10px 25px rgba(0, 0, 0, 0.3),
            inset 0 10px 25px rgba(255, 255, 255, 0.1);
    }

    [data-theme="dark"] .shape-triangle {
        filter: drop-shadow(0 0 40px rgba(255, 232, 112, 0.8))
                drop-shadow(0 20px 30px rgba(255, 232, 112, 0.4));
    }

    [data-theme="dark"] .banner-title-cbd {
        text-shadow: 0 0 40px rgba(251, 146, 60, 0.5);
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
            width: 250px;
            height: 250px;
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
            width: 80px;
            height: 80px;
        }

        .shape-square {
            width: 65px;
            height: 65px;
        }

        .shape-triangle {
            border-left: 35px solid transparent;
            border-right: 35px solid transparent;
            border-bottom: 65px solid #ffe870;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            width: 100px;
        }

        .banner-shapes::before {
            left: -150px;
        }

        .banner-shapes::after {
            right: -150px;
        }

        .orbit-container {
            width: 200px;
            height: 200px;
        }

        .orbit-element {
            width: 8px;
            height: 8px;
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
            width: 70px;
            height: 70px;
        }

        .shape-square {
            width: 55px;
            height: 55px;
        }

        .shape-triangle {
            border-left: 30px solid transparent;
            border-right: 30px solid transparent;
            border-bottom: 55px solid #ffe870;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            display: none;
        }

        .orbit-container {
            display: none;
        }

        .particle:nth-child(n+6) {
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
            width: 60px;
            height: 60px;
        }

        .shape-square {
            width: 45px;
            height: 45px;
        }

        .shape-triangle {
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            border-bottom: 45px solid #ffe870;
        }
    }
</style>

<section class="hero-area-3">
    <!-- Floating particles background -->
    <div class="floating-particles">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <!-- Orbiting elements -->
                <div class="orbit-container">
                    <div class="orbit-element"></div>
                    <div class="orbit-element"></div>
                </div>

                <!-- Enhanced 3D geometric shapes with glow effects -->
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