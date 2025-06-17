<style>
    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif !important;
        font-weight: 400;
        font-style: normal;
    }

    .space-mono-regular {
        font-family: "Space Mono", monospace !important;
        font-weight: 400;
        font-style: normal;
    }

    .space-mono-bold {
        font-family: "Space Mono", monospace !important;
        font-weight: 700;
        font-style: normal;
    }

    .space-mono-regular-italic {
        font-family: "Space Mono", monospace !important;
        font-weight: 400;
        font-style: italic;
    }

    .space-mono-bold-italic {
        font-family: "Space Mono", monospace !important;
        font-weight: 700;
        font-style: italic;
    }

    /* Enhanced Background Design */
    .hero-area-2 {
        position: relative;
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        overflow: hidden;
    }

    .hero-area-2::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 80%, rgba(139, 147, 255, 0.1) 0%, transparent 50%),
            radial-gradient(circle at 80% 20%, rgba(252, 124, 130, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 40% 40%, rgba(175, 244, 43, 0.06) 0%, transparent 50%);
        z-index: 1;
    }

    .hero-area-2::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: 
            linear-gradient(45deg, rgba(139, 147, 255, 0.03) 25%, transparent 25%),
            linear-gradient(-45deg, rgba(139, 147, 255, 0.03) 25%, transparent 25%),
            linear-gradient(45deg, transparent 75%, rgba(139, 147, 255, 0.03) 75%),
            linear-gradient(-45deg, transparent 75%, rgba(139, 147, 255, 0.03) 75%);
        background-size: 60px 60px;
        background-position: 0 0, 0 30px, 30px -30px, -30px 0px;
        opacity: 0.4;
        z-index: 1;
    }

    /* Floating Elements */
    .floating-elements {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        pointer-events: none;
    }

    .floating-element {
        position: absolute;
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(139, 147, 255, 0.05));
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
        width: 120px;
        height: 120px;
        background: linear-gradient(135deg, rgba(252, 124, 130, 0.08), rgba(252, 124, 130, 0.04));
        top: 20%;
        right: 15%;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        width: 60px;
        height: 60px;
        background: linear-gradient(135deg, rgba(175, 244, 43, 0.1), rgba(175, 244, 43, 0.05));
        bottom: 30%;
        left: 20%;
        animation-delay: 4s;
    }

    .floating-element:nth-child(4) {
        width: 100px;
        height: 100px;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.06), rgba(139, 147, 255, 0.03));
        bottom: 20%;
        right: 25%;
        animation-delay: 1s;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
        }
        50% {
            transform: translateY(-20px) rotate(180deg);
        }
    }

    /* Geometric Shapes */
    .geometric-shapes {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 2;
        pointer-events: none;
    }

    .geometric-shape {
        position: absolute;
        opacity: 0.1;
    }

    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        border-bottom: 43px solid #8B93FF;
        top: 15%;
        right: 10%;
        animation: rotate 8s linear infinite;
    }

    .shape-square {
        width: 40px;
        height: 40px;
        background: #FC7C82;
        top: 60%;
        left: 15%;
        animation: rotate 10s linear infinite reverse;
    }

    .shape-circle {
        width: 30px;
        height: 30px;
        background: #AFF42B;
        border-radius: 50%;
        top: 25%;
        left: 50%;
        animation: float 7s ease-in-out infinite;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    /* Content positioning */
    .hero-area-2-inner {
        position: relative;
        z-index: 10;
    }

    .section-title-cbd {
        font-size: 50px;
        font-weight: 300;
        line-height: 1.2;
        letter-spacing: -0.01em;
        position: relative;
        z-index: 10;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .floating-element {
            display: none;
        }
        
        .geometric-shape {
            opacity: 0.05;
        }
        
        .hero-area-2::after {
            background-size: 40px 40px;
            opacity: 0.2;
        }
    }
</style>

<section class="hero-area-2 section-spacing">
    <!-- Floating Elements -->
    <div class="floating-elements">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>
    </div>

    <!-- Geometric Shapes -->
    <div class="geometric-shapes">
        <div class="geometric-shape shape-triangle"></div>
        <div class="geometric-shape shape-square"></div>
        <div class="geometric-shape shape-circle"></div>
    </div>

    <div class="hero-area-2-inner section-spacing-top">
        <div class="container large">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h4 class="ibm-plex-mono-bold-italic section-title-cbd fade-anim">CODES BY</h4>
                        <h4 style="color: #FC7C82;" class="ibm-plex-mono-bold-italic section-title typewriter-text fade-anim" data-text='["DAWSON"]'>DAWSON</h4>
                    </div>
                    <div class="subtitle-wrapper">
                        <span class="section-subtitle fade-anim" data-direction="bottom" data-delay="0.75">
                            <span class="marquee">
                                <span>CREATIVE DESIGN AGENCY</span>
                                <span>CREATIVE DESIGN AGENCY</span>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-content-wrapper">
            <div class="container large">
                <div style="display: flex; justify-content: flex-end; position: relative; z-index: 999999;" class="section-content">
                    <div class="hero-thumb fade-anim" data-delay="0.5" data-direction="right">
                        <a href="#about" class="circle-text">
                            <img src="assets/imgs/shape/shape-12.webp" alt="image" class="text">
                            <img src="assets/imgs/shape/shape-13.webp" alt="image" class="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>