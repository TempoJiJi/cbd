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

    /* Hero area full height with clean background */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        background-color: #f5f5f5;
        overflow: hidden;
        transition: background-color 0.3s ease;
    }

    /* Dark theme background */
    [data-theme="dark"] .hero-area-3 {
        background-color: #1a1a1a;
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

    /* Linear geometric shapes */
    .banner-shapes {
        position: relative;
        margin-bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 50px;
    }

    .shape-element {
        position: relative;
        animation: floatLinear 6s ease-in-out infinite;
    }

    .shape-element:nth-child(1) {
        animation-delay: 0s;
    }

    .shape-element:nth-child(2) {
        animation-delay: 2s;
    }

    .shape-element:nth-child(3) {
        animation-delay: 4s;
    }

    /* Linear Circle */
    .shape-circle {
        width: 80px;
        height: 80px;
        border: 3px solid #fb923c;
        border-radius: 50%;
        background: transparent;
        position: relative;
        transition: all 0.3s ease;
    }

    .shape-circle::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 20px;
        height: 20px;
        background: #fb923c;
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .shape-circle:hover {
        border-color: #fc7c82;
        transform: scale(1.1);
    }

    .shape-circle:hover::before {
        background: #fc7c82;
        transform: translate(-50%, -50%) scale(1.2);
    }

    /* Linear Square */
    .shape-square {
        width: 70px;
        height: 70px;
        border: 3px solid #a26eec;
        background: transparent;
        transform: rotate(45deg);
        position: relative;
        transition: all 0.3s ease;
    }

    .shape-square::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 18px;
        height: 18px;
        background: #a26eec;
        transition: all 0.3s ease;
    }

    .shape-square:hover {
        border-color: #33f6b3;
        transform: rotate(45deg) scale(1.1);
    }

    .shape-square:hover::before {
        background: #33f6b3;
        transform: translate(-50%, -50%) scale(1.2);
    }

    /* Linear Triangle */
    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 35px solid transparent;
        border-right: 35px solid transparent;
        border-bottom: 60px solid transparent;
        border-bottom-color: #ffe870;
        position: relative;
        transition: all 0.3s ease;
    }

    .shape-triangle::before {
        content: '';
        position: absolute;
        top: 15px;
        left: -12px;
        width: 0;
        height: 0;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 20px solid #f5f5f5;
        transition: all 0.3s ease;
    }

    [data-theme="dark"] .shape-triangle::before {
        border-bottom-color: #1a1a1a;
    }

    .shape-triangle:hover {
        border-bottom-color: #ffce5c;
        transform: scale(1.1);
    }

    /* Linear floating animation */
    @keyframes floatLinear {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    /* Linear decorative lines */
    .banner-shapes::before,
    .banner-shapes::after {
        content: '';
        position: absolute;
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, transparent, #fb923c 50%, transparent);
        top: 50%;
        opacity: 0.5;
        transition: all 0.3s ease;
    }

    .banner-shapes::before {
        left: -150px;
        animation: lineSlide 4s ease-in-out infinite;
    }

    .banner-shapes::after {
        right: -150px;
        animation: lineSlide 4s ease-in-out infinite 2s;
    }

    @keyframes lineSlide {
        0%, 100% {
            opacity: 0.5;
            transform: scaleX(1);
        }
        50% {
            opacity: 1;
            transform: scaleX(1.2);
        }
    }

    /* Linear accent dots */
    .linear-accent {
        position: absolute;
        width: 6px;
        height: 6px;
        background: #fb923c;
        border-radius: 50%;
        opacity: 0.6;
        z-index: 1;
        transition: all 0.3s ease;
    }

    .linear-accent:nth-child(1) {
        top: 20%;
        left: 15%;
        animation: dotPulse 3s ease-in-out infinite;
    }

    .linear-accent:nth-child(2) {
        top: 30%;
        right: 20%;
        animation: dotPulse 3s ease-in-out infinite 1s;
        background: #a26eec;
    }

    .linear-accent:nth-child(3) {
        bottom: 25%;
        left: 25%;
        animation: dotPulse 3s ease-in-out infinite 2s;
        background: #ffe870;
    }

    @keyframes dotPulse {
        0%, 100% {
            opacity: 0.6;
            transform: scale(1);
        }
        50% {
            opacity: 1;
            transform: scale(1.5);
        }
    }

    /* Dark theme adjustments for linear shapes */
    [data-theme="dark"] .shape-circle {
        border-color: #fb923c;
    }

    [data-theme="dark"] .shape-circle::before {
        background: #fb923c;
    }

    [data-theme="dark"] .shape-square {
        border-color: #a26eec;
    }

    [data-theme="dark"] .shape-square::before {
        background: #a26eec;
    }

    [data-theme="dark"] .shape-triangle {
        border-bottom-color: #ffe870;
    }

    [data-theme="dark"] .linear-accent {
        opacity: 0.8;
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

        .banner-shapes {
            margin-bottom: 40px;
            gap: 35px;
        }

        .shape-circle {
            width: 65px;
            height: 65px;
            border-width: 2px;
        }

        .shape-circle::before {
            width: 16px;
            height: 16px;
        }

        .shape-square {
            width: 55px;
            height: 55px;
            border-width: 2px;
        }

        .shape-square::before {
            width: 14px;
            height: 14px;
        }

        .shape-triangle {
            border-left: 28px solid transparent;
            border-right: 28px solid transparent;
            border-bottom: 48px solid #ffe870;
        }

        .shape-triangle::before {
            top: 12px;
            left: -10px;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 16px solid #f5f5f5;
        }

        [data-theme="dark"] .shape-triangle::before {
            border-bottom-color: #1a1a1a;
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

        .banner-shapes {
            margin-bottom: 30px;
            gap: 25px;
        }

        .shape-circle {
            width: 55px;
            height: 55px;
        }

        .shape-circle::before {
            width: 14px;
            height: 14px;
        }

        .shape-square {
            width: 45px;
            height: 45px;
        }

        .shape-square::before {
            width: 12px;
            height: 12px;
        }

        .shape-triangle {
            border-left: 22px solid transparent;
            border-right: 22px solid transparent;
            border-bottom: 38px solid #ffe870;
        }

        .shape-triangle::before {
            top: 10px;
            left: -8px;
            border-left: 8px solid transparent;
            border-right: 8px solid transparent;
            border-bottom: 13px solid #f5f5f5;
        }

        [data-theme="dark"] .shape-triangle::before {
            border-bottom-color: #1a1a1a;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            display: none;
        }

        .linear-accent {
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

        .shape-circle::before {
            width: 12px;
            height: 12px;
        }

        .shape-square {
            width: 35px;
            height: 35px;
        }

        .shape-square::before {
            width: 10px;
            height: 10px;
        }

        .shape-triangle {
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-bottom: 30px solid #ffe870;
        }

        .shape-triangle::before {
            top: 8px;
            left: -6px;
            border-left: 6px solid transparent;
            border-right: 6px solid transparent;
            border-bottom: 10px solid #f5f5f5;
        }

        [data-theme="dark"] .shape-triangle::before {
            border-bottom-color: #1a1a1a;
        }
    }
</style>

<section class="hero-area-3">
    <!-- Linear accent dots -->
    <div class="linear-accent"></div>
    <div class="linear-accent"></div>
    <div class="linear-accent"></div>

    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <!-- Linear geometric shapes above title -->
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