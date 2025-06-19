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

    /* Hero area full height with grid background */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        background-color: #f5f5f5;
        overflow: hidden;
        transition: background-color 0.3s ease;
    }

    /* Grid background with theme support */
    .hero-area-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            linear-gradient(rgba(0, 0, 0, 0.04) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 0, 0, 0.04) 1px, transparent 1px);
        background-size: 40px 40px;
        z-index: 1;
        pointer-events: none;
        transition: background-image 0.3s ease;
    }

    /* Dark theme grid */
    [data-theme="dark"] .hero-area-3 {
        background-color: #1a1a1a;
    }

    [data-theme="dark"] .hero-area-3::before {
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
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

    /* Enhanced 3D geometric shapes */
    .banner-shapes {
        position: relative;
        margin-bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 40px;
        perspective: 1000px;
    }

    .shape-element {
        position: relative;
        animation: float3D 8s ease-in-out infinite;
        transform-style: preserve-3d;
    }

    .shape-element:nth-child(1) {
        animation-delay: 0s;
    }

    .shape-element:nth-child(2) {
        animation-delay: 2.5s;
    }

    .shape-element:nth-child(3) {
        animation-delay: 5s;
    }

    /* 3D Circle with enhanced shadows */
    .shape-circle {
        width: 90px;
        height: 90px;
        border-radius: 50%;
        background: linear-gradient(135deg, #fb923c 0%, #fc7c82 50%, #ff6b9d 100%);
        position: relative;
        transform-style: preserve-3d;
        box-shadow: 
            0 20px 40px rgba(251, 146, 60, 0.3),
            0 10px 20px rgba(252, 124, 130, 0.2),
            inset 0 -5px 15px rgba(0, 0, 0, 0.1),
            inset 0 5px 15px rgba(255, 255, 255, 0.3);
    }

    .shape-circle::before {
        content: '';
        position: absolute;
        top: 15%;
        left: 20%;
        width: 30%;
        height: 30%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.6) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(3px);
    }

    .shape-circle::after {
        content: '';
        position: absolute;
        bottom: -30px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 20px;
        background: radial-gradient(ellipse, rgba(251, 146, 60, 0.4) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(8px);
        z-index: -1;
    }

    /* 3D Square with depth */
    .shape-square {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #a26eec 0%, #33f6b3 50%, #7dd3fc 100%);
        transform: rotate(45deg);
        position: relative;
        transform-style: preserve-3d;
        box-shadow: 
            0 25px 50px rgba(162, 110, 236, 0.4),
            0 15px 30px rgba(51, 246, 179, 0.2),
            inset 0 -8px 20px rgba(0, 0, 0, 0.15),
            inset 0 8px 20px rgba(255, 255, 255, 0.2);
    }

    .shape-square::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, transparent 30%, rgba(255, 255, 255, 0.3) 50%, transparent 70%);
        transform: translateZ(5px);
    }

    .shape-square::after {
        content: '';
        position: absolute;
        bottom: -40px;
        left: 50%;
        transform: translateX(-50%) rotate(-45deg);
        width: 60px;
        height: 15px;
        background: radial-gradient(ellipse, rgba(162, 110, 236, 0.5) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(10px);
        z-index: -1;
    }

    /* 3D Triangle with enhanced depth */
    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 40px solid transparent;
        border-right: 40px solid transparent;
        border-bottom: 70px solid #ffe870;
        position: relative;
        filter: drop-shadow(0 20px 30px rgba(255, 232, 112, 0.4))
                drop-shadow(0 10px 15px rgba(255, 232, 112, 0.2));
    }

    .shape-triangle::before {
        content: '';
        position: absolute;
        top: 20px;
        left: -15px;
        width: 0;
        height: 0;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 25px solid rgba(255, 255, 255, 0.3);
        filter: blur(2px);
    }

    .shape-triangle::after {
        content: '';
        position: absolute;
        bottom: -45px;
        left: -30px;
        width: 60px;
        height: 20px;
        background: radial-gradient(ellipse, rgba(255, 232, 112, 0.5) 0%, transparent 70%);
        border-radius: 50%;
        filter: blur(12px);
        z-index: -1;
    }

    /* Enhanced 3D floating animation */
    @keyframes float3D {
        0%, 100% {
            transform: translateY(0px) rotateX(0deg) rotateY(0deg);
        }
        25% {
            transform: translateY(-15px) rotateX(5deg) rotateY(5deg);
        }
        50% {
            transform: translateY(-25px) rotateX(0deg) rotateY(10deg);
        }
        75% {
            transform: translateY(-10px) rotateX(-5deg) rotateY(5deg);
        }
    }

    /* Enhanced decorative lines with 3D effect */
    .banner-shapes::before,
    .banner-shapes::after {
        content: '';
        position: absolute;
        width: 120px;
        height: 3px;
        background: linear-gradient(90deg, transparent, #fb923c 20%, #fc7c82 50%, #a26eec 80%, transparent);
        top: 50%;
        opacity: 0.6;
        border-radius: 2px;
        box-shadow: 0 5px 15px rgba(251, 146, 60, 0.3);
    }

    .banner-shapes::before {
        left: -180px;
        animation: lineGlow 4s ease-in-out infinite;
    }

    .banner-shapes::after {
        right: -180px;
        animation: lineGlow 4s ease-in-out infinite 2s;
    }

    @keyframes lineGlow {
        0%, 100% {
            opacity: 0.6;
            box-shadow: 0 5px 15px rgba(251, 146, 60, 0.3);
        }
        50% {
            opacity: 1;
            box-shadow: 0 8px 25px rgba(251, 146, 60, 0.5);
        }
    }

    /* Enhanced grid dots accent with 3D effect */
    .grid-accent {
        position: absolute;
        width: 8px;
        height: 8px;
        background: radial-gradient(circle, #fb923c 0%, #fc7c82 100%);
        border-radius: 50%;
        opacity: 0.4;
        z-index: 1;
        box-shadow: 
            0 5px 15px rgba(251, 146, 60, 0.4),
            0 0 20px rgba(252, 124, 130, 0.2);
    }

    .grid-accent:nth-child(1) {
        top: 20%;
        left: 15%;
        animation: pulse3D 4s ease-in-out infinite;
    }

    .grid-accent:nth-child(2) {
        top: 30%;
        right: 20%;
        animation: pulse3D 4s ease-in-out infinite 1.5s;
    }

    .grid-accent:nth-child(3) {
        bottom: 25%;
        left: 25%;
        animation: pulse3D 4s ease-in-out infinite 3s;
    }

    @keyframes pulse3D {
        0%, 100% {
            opacity: 0.4;
            transform: scale(1);
            box-shadow: 
                0 5px 15px rgba(251, 146, 60, 0.4),
                0 0 20px rgba(252, 124, 130, 0.2);
        }
        50% {
            opacity: 1;
            transform: scale(1.8);
            box-shadow: 
                0 10px 30px rgba(251, 146, 60, 0.6),
                0 0 40px rgba(252, 124, 130, 0.4);
        }
    }

    /* Dark theme adjustments for shapes */
    [data-theme="dark"] .shape-circle {
        box-shadow: 
            0 20px 40px rgba(251, 146, 60, 0.4),
            0 10px 20px rgba(252, 124, 130, 0.3),
            inset 0 -5px 15px rgba(0, 0, 0, 0.3),
            inset 0 5px 15px rgba(255, 255, 255, 0.1);
    }

    [data-theme="dark"] .shape-square {
        box-shadow: 
            0 25px 50px rgba(162, 110, 236, 0.5),
            0 15px 30px rgba(51, 246, 179, 0.3),
            inset 0 -8px 20px rgba(0, 0, 0, 0.3),
            inset 0 8px 20px rgba(255, 255, 255, 0.1);
    }

    [data-theme="dark"] .shape-triangle {
        filter: drop-shadow(0 20px 30px rgba(255, 232, 112, 0.5))
                drop-shadow(0 10px 15px rgba(255, 232, 112, 0.3));
    }

    [data-theme="dark"] .grid-accent {
        box-shadow: 
            0 5px 15px rgba(251, 146, 60, 0.6),
            0 0 20px rgba(252, 124, 130, 0.4);
    }

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

        .hero-area-3::before {
            background-size: 30px 30px;
        }

        .banner-shapes {
            margin-bottom: 40px;
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
            width: 80px;
        }

        .banner-shapes::before {
            left: -120px;
        }

        .banner-shapes::after {
            right: -120px;
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

        .hero-area-3::before {
            background-size: 25px 25px;
        }

        .banner-shapes {
            margin-bottom: 30px;
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

        .banner-shapes::before,
        .banner-shapes::after {
            display: none;
        }

        .grid-accent {
            display: none;
        }
    }

    @media only screen and (max-width: 480px) {
        .hero-area-3-inner {
            padding-top: 200px;
        }

        .banner-shapes {
            gap: 15px;
        }

        .shape-circle {
            width: 50px;
            height: 50px;
        }

        .shape-square {
            width: 35px;
            height: 35px;
        }

        .shape-triangle {
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid #ffe870;
        }
    }
</style>

<section class="hero-area-3">
    <!-- Enhanced grid accent dots -->
    <div class="grid-accent"></div>
    <div class="grid-accent"></div>
    <div class="grid-accent"></div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <!-- Enhanced 3D geometric shapes above title -->
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