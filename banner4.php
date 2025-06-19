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
        font-size: 150px !important;
        font-weight: 500;
        line-height: 1.2;
        letter-spacing: -0.01em;
    }

    /* Grid Background */
    .hero-area-3 {
        position: relative;
        overflow: hidden;
    }

    .hero-area-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 0;
        pointer-events: none;
        opacity: 0.4;
        background-image: 
            linear-gradient(rgba(0, 0, 0, 0.1) 1px, transparent 1px),
            linear-gradient(90deg, rgba(0, 0, 0, 0.1) 1px, transparent 1px);
        background-size: 50px 50px;
        background-position: 0 0, 0 0;
        animation: gridMove 20s linear infinite;
        transition: all 0.3s ease;
    }

    /* Dark theme grid */
    [data-theme="dark"] .hero-area-3::before {
        background-image: 
            linear-gradient(rgba(255, 255, 255, 0.08) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, 0.08) 1px, transparent 1px);
        opacity: 0.3;
    }

    /* Grid animation */
    @keyframes gridMove {
        0% {
            transform: translate(0, 0);
        }
        100% {
            transform: translate(50px, 50px);
        }
    }

    /* Ensure content is above grid */
    .hero-area-3-inner {
        position: relative;
        z-index: 2;
    }

    /* Grid fade effect at edges */
    .hero-area-3::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
        background: 
            linear-gradient(to bottom, 
                rgba(245, 245, 245, 0) 0%, 
                rgba(245, 245, 245, 0.1) 20%, 
                rgba(245, 245, 245, 0.1) 80%, 
                rgba(245, 245, 245, 0) 100%),
            linear-gradient(to right, 
                rgba(245, 245, 245, 0) 0%, 
                rgba(245, 245, 245, 0.1) 20%, 
                rgba(245, 245, 245, 0.1) 80%, 
                rgba(245, 245, 245, 0) 100%);
    }

    /* Dark theme fade effect */
    [data-theme="dark"] .hero-area-3::after {
        background: 
            linear-gradient(to bottom, 
                rgba(14, 15, 17, 0) 0%, 
                rgba(14, 15, 17, 0.1) 20%, 
                rgba(14, 15, 17, 0.1) 80%, 
                rgba(14, 15, 17, 0) 100%),
            linear-gradient(to right, 
                rgba(14, 15, 17, 0) 0%, 
                rgba(14, 15, 17, 0.1) 20%, 
                rgba(14, 15, 17, 0.1) 80%, 
                rgba(14, 15, 17, 0) 100%);
    }

    /* Enhanced grid for larger screens */
    @media (min-width: 1200px) {
        .hero-area-3::before {
            background-size: 60px 60px;
        }
        
        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(60px, 60px);
            }
        }
    }

    /* Responsive grid adjustments */
    @media (max-width: 768px) {
        .hero-area-3::before {
            background-size: 30px 30px;
            opacity: 0.3;
        }
        
        [data-theme="dark"] .hero-area-3::before {
            opacity: 0.2;
        }
        
        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(30px, 30px);
            }
        }
    }

    @media (max-width: 480px) {
        .hero-area-3::before {
            background-size: 25px 25px;
            opacity: 0.25;
        }
        
        [data-theme="dark"] .hero-area-3::before {
            opacity: 0.15;
        }
        
        @keyframes gridMove {
            0% {
                transform: translate(0, 0);
            }
            100% {
                transform: translate(25px, 25px);
            }
        }
    }

    @media only screen and (max-width: 1919px) {
        .banner-title-cbd {
            font-size: 120px !important;
            ;
        }
    }

    @media only screen and (max-width: 1399px) {
        .banner-title-cbd {
            font-size: 110px !important;
            ;
        }
    }

    @media only screen and (max-width: 1199px) {
        .banner-title-cbd {
            font-size: 100px !important;
            ;
        }
    }

    @media only screen and (max-width: 991px) {
        .section-content-wrapper {
            text-align: center;
        }

        .banner-title-cbd {
            padding-top: 20px;
            font-size: 85px !important;
            ;
        }
    }

    @media only screen and (max-width: 767px) {
        .section-content-wrapper {
            text-align: center;
        }

        .banner-title-cbd {
            padding-top: 20px;
            font-size: 80px !important;
            ;
        }
    }

    .text-wrapper {
        padding-top: 30px;
    }
</style>

<section class="hero-area-3">
    <div class="container">
        <div class="hero-area-3-inner section-spacing">
            <!-- <div class="area-shape-1">
                <img src="assets/imgs/shape/shape-18.webp" alt="image">
            </div> -->
            <div class="section-header">

                <div class="section-title-wrapper">
                    <div class="title-wrapper head-title">
                        <h1 class="montserrat-alternates-semibold banner-title-cbd move-anim" data-delay="0.45">Codes By
                            <span style="color: var(--cbd-orange);">Dawson</span>
                        </h1>
                        <div class="text-wrapper move-anim" data-delay="0.45">
                            <p class="montserrat-alternates-medium text">Building High-Impact Web & App Products.</p>
                        </div>
                        <div class="text-wrapper move-anim" data-delay="0.45">
                            <p class="montserrat-alternates-medium text">Full Stack Developer | <br> Web Development | Mobile App Development</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <span class="empty-space hide-mobile" style="height: 100px"></span>
        <div class="image-wrapper parallax-view fade-anim">
            <img class="w-100" src="assets/imgs/cbd/banner_coding.jpg" alt="image" data-speed="0.5">
        </div>
    </div>
</section>