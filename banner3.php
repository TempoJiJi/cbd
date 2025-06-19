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

    /* Hero area full height */
    .hero-area-3 {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .hero-area-3-inner {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    /* Simple geometric shapes */
    .banner-shapes {
        position: relative;
        margin-bottom: 60px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 30px;
    }

    .shape-element {
        position: relative;
        animation: float 6s ease-in-out infinite;
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

    .shape-circle {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--cbd-orange) 0%, var(--cbd-pink) 100%);
        opacity: 0.8;
    }

    .shape-square {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, var(--cbd-purple) 0%, var(--cbd-cyan) 100%);
        transform: rotate(45deg);
        opacity: 0.7;
    }

    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 35px solid transparent;
        border-right: 35px solid transparent;
        border-bottom: 60px solid var(--cbd-yellow);
        opacity: 0.6;
    }

    /* Floating animation */
    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    /* Decorative lines */
    .banner-shapes::before,
    .banner-shapes::after {
        content: '';
        position: absolute;
        width: 100px;
        height: 2px;
        background: linear-gradient(90deg, transparent, var(--cbd-orange), transparent);
        top: 50%;
    }

    .banner-shapes::before {
        left: -150px;
    }

    .banner-shapes::after {
        right: -150px;
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
    }

    @media only screen and (max-width: 991px) {
        .section-content-wrapper {
            text-align: center;
        }

        .banner-title-cbd {
            padding-top: 20px;
            font-size: 85px !important;
        }

        .banner-shapes {
            margin-bottom: 40px;
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
            border-bottom: 45px solid var(--cbd-yellow);
        }

        .banner-shapes::before,
        .banner-shapes::after {
            width: 60px;
        }

        .banner-shapes::before {
            left: -90px;
        }

        .banner-shapes::after {
            right: -90px;
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

        .banner-shapes {
            margin-bottom: 30px;
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
            border-bottom: 35px solid var(--cbd-yellow);
        }

        .banner-shapes::before,
        .banner-shapes::after {
            display: none;
        }
    }
</style>

<section class="hero-area-3">
    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <div class="section-header">
                <!-- Simple geometric shapes above title -->
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