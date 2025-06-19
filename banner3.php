<style>
    /* text align center */
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
        color: #000;
    }

    /* Hero area full height with clean background */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        position: relative;
        overflow: hidden;
        background: #ffffff;
        transition: all 0.3s ease;
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

    /* Minimal geometric elements */
    .banner-shapes {
        position: relative;
        margin-bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 80px;
    }

    .shape-element {
        position: relative;
        animation: gentleFloat 8s ease-in-out infinite;
        opacity: 0.8;
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

    /* Simple monochrome shapes */
    .shape-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #000;
        transition: all 0.3s ease;
    }

    .shape-square {
        width: 50px;
        height: 50px;
        background-color: #000;
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 50px solid #000;
        transition: all 0.3s ease;
    }

    /* Gentle float animation */
    @keyframes gentleFloat {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Hover effects - subtle scale */
    .shape-element:hover .shape-circle {
        transform: scale(1.1);
        opacity: 0.7;
    }

    .shape-element:hover .shape-square {
        transform: rotate(45deg) scale(1.1);
        opacity: 0.7;
    }

    .shape-element:hover .shape-triangle {
        transform: scale(1.1);
        opacity: 0.7;
    }

    /* Minimal decorative lines */
    .banner-shapes::before,
    .banner-shapes::after {
        content: '';
        position: absolute;
        width: 100px;
        height: 1px;
        background-color: #000;
        top: 50%;
        opacity: 0.3;
        animation: subtlePulse 6s ease-in-out infinite;
    }

    .banner-shapes::before {
        left: -150px;
        animation-delay: 0s;
    }

    .banner-shapes::after {
        right: -150px;
        animation-delay: 3s;
    }

    /* Subtle pulse animation */
    @keyframes subtlePulse {
        0%, 100% {
            opacity: 0.3;
            transform: scaleX(1);
        }
        50% {
            opacity: 0.6;
            transform: scaleX(1.1);
        }
    }

    /* Typography improvements */
    .banner-title-cbd {
        margin-bottom: 30px;
    }

    .banner-title-cbd span {
        color: #666;
        font-weight: 300;
    }

    .text-wrapper {
        padding-top: 20px;
        max-width: 600px;
        margin: 0 auto;
    }

    .text-wrapper p {
        font-size: 18px;
        line-height: 1.6;
        color: #666;
        font-weight: 400;
    }

    /* Dark theme adjustments */
    [data-theme="dark"] .hero-area-3 {
        background: #000000;
    }

    [data-theme="dark"] .banner-title-cbd {
        color: #fff;
    }

    [data-theme="dark"] .banner-title-cbd span {
        color: #ccc;
    }

    [data-theme="dark"] .text-wrapper p {
        color: #ccc;
    }

    [data-theme="dark"] .shape-circle,
    [data-theme="dark"] .shape-square,
    [data-theme="dark"] .shape-triangle {
        background-color: #fff;
        border-bottom-color: #fff;
    }

    [data-theme="dark"] .banner-shapes::before,
    [data-theme="dark"] .banner-shapes::after {
        background-color: #fff;
    }

    [data-theme="dark"] .shape-element:hover .shape-circle,
    [data-theme="dark"] .shape-element:hover .shape-square,
    [data-theme="dark"] .shape-element:hover .shape-triangle {
        opacity: 0.7;
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
            gap: 60px;
        }
    }

    @media only screen and (max-width: 991px) {
        .banner-title-cbd {
            padding-top: 20px;
            font-size: 70px !important;
        }

        .banner-shapes {
            margin-bottom: 40px;
            gap: 50px;
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
            border-bottom: 40px solid #000;
        }

        [data-theme="dark"] .shape-triangle {
            border-bottom-color: #fff;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            width: 80px;
            animation: subtlePulse 6s ease-in-out infinite;
        }

        .banner-shapes::before {
            left: -120px;
        }

        .banner-shapes::after {
            right: -120px;
        }
    }

    @media only screen and (max-width: 767px) {
        .banner-title-cbd {
            padding-top: 20px;
            font-size: 60px !important;
        }

        .banner-shapes {
            margin-bottom: 30px;
            gap: 40px;
        }

        .shape-circle {
            width: 40px;
            height: 40px;
        }

        .shape-square {
            width: 35px;
            height: 35px;
        }

        .shape-triangle {
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid #000;
        }

        [data-theme="dark"] .shape-triangle {
            border-bottom-color: #fff;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            width: 60px;
            animation: subtlePulse 6s ease-in-out infinite;
        }

        .banner-shapes::before {
            left: -90px;
        }

        .banner-shapes::after {
            right: -90px;
        }

        .text-wrapper p {
            font-size: 16px;
        }
    }

    @media only screen and (max-width: 480px) {
        .banner-title-cbd {
            font-size: 50px !important;
        }

        .banner-shapes {
            gap: 30px;
        }

        .shape-circle {
            width: 35px;
            height: 35px;
        }

        .shape-square {
            width: 30px;
            height: 30px;
        }

        .shape-triangle {
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-bottom: 30px solid #000;
        }

        [data-theme="dark"] .shape-triangle {
            border-bottom-color: #fff;
        }

        .banner-shapes::before,
        .banner-shapes::after {
            width: 50px;
            animation: subtlePulse 6s ease-in-out infinite;
        }

        .banner-shapes::before {
            left: -70px;
        }

        .banner-shapes::after {
            right: -70px;
        }

        .text-wrapper p {
            font-size: 15px;
        }
    }

    /* Additional spacing */
    .text-wrapper {
        padding-top: 30px;
    }

    /* Clean video styling */
    .image-wrapper {
        margin-top: 60px;
    }

    .image-wrapper video {
        border-radius: 12px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    [data-theme="dark"] .image-wrapper video {
        box-shadow: 0 20px 60px rgba(255, 255, 255, 0.05);
    }

    .image-wrapper:hover video {
        transform: translateY(-5px);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.15);
    }

    [data-theme="dark"] .image-wrapper:hover video {
        box-shadow: 0 30px 80px rgba(255, 255, 255, 0.08);
    }
</style>

<section class="hero-area-3">
    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <!-- Simple geometric shapes with monochrome colors -->
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
                            <span>Dawson</span>
                        </h1>
                        <div class="text-wrapper move-anim" data-delay="0.45">
                            <p class="montserrat-alternates-medium text">Building High-Impact Web & App Products.</p>
                        </div>
                        <div class="text-wrapper move-anim" data-delay="0.45">
                            <p class="montserrat-alternates-medium text">Full Stack Developer | Web Development | Mobile App Development</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="empty-space hide-mobile" style="height: 100px"></span>
        <div class="image-wrapper parallax-view fade-anim">
            <video class="w-100" loop muted autoplay playsinline data-speed="0.5">
                <source src="assets/imgs/cbd/banner.mp4" type="video/mp4">
            </video>
        </div>
    </div>
</section>