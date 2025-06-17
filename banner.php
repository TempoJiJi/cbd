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

    .fredoka-light {
        font-family: "Fredoka", sans-serif !important;
        font-optical-sizing: auto;
        font-weight: 300;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    .fredoka-regular {
        font-family: "Fredoka", sans-serif !important;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    .fredoka-medium {
        font-family: "Fredoka", sans-serif !important;
        font-optical-sizing: auto;
        font-weight: 500;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    .fredoka-semibold {
        font-family: "Fredoka", sans-serif !important;
        font-optical-sizing: auto;
        font-weight: 600;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    .fredoka-bold {
        font-family: "Fredoka", sans-serif !important;
        font-optical-sizing: auto;
        font-weight: 700;
        font-style: normal;
        font-variation-settings: "wdth" 100;
    }

    /* Hero Section Background Design */
    .hero-area-2 {
        position: relative;
        background-color: #f5f5f5;
        overflow: hidden;
        min-height: 100vh;
    }

    /* Animated Background Elements */
    .hero-area-2::before {
        content: '';
        position: absolute;
        top: -50%;
        left: -50%;
        width: 200%;
        height: 200%;
        background: 
            radial-gradient(circle at 20% 30%, rgba(139, 147, 255, 0.08) 0%, transparent 50%),
            radial-gradient(circle at 80% 70%, rgba(255, 206, 92, 0.06) 0%, transparent 50%),
            radial-gradient(circle at 60% 20%, rgba(34, 197, 94, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 30% 80%, rgba(251, 146, 60, 0.07) 0%, transparent 50%);
        animation: backgroundFloat 20s ease-in-out infinite;
        z-index: 1;
    }

    /* Floating Geometric Shapes */
    .hero-area-2::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            /* Large circles */
            radial-gradient(circle at 15% 25%, rgba(139, 147, 255, 0.03) 2px, transparent 2px),
            radial-gradient(circle at 85% 75%, rgba(255, 206, 92, 0.04) 3px, transparent 3px),
            radial-gradient(circle at 70% 15%, rgba(34, 197, 94, 0.03) 2px, transparent 2px),
            radial-gradient(circle at 25% 85%, rgba(251, 146, 60, 0.04) 3px, transparent 3px),
            /* Small dots pattern */
            radial-gradient(circle at 50% 50%, rgba(139, 147, 255, 0.02) 1px, transparent 1px);
        background-size: 
            400px 400px,
            350px 350px,
            300px 300px,
            450px 450px,
            50px 50px;
        animation: shapesFloat 25s linear infinite;
        z-index: 2;
    }

    /* Floating Code Elements */
    .code-elements {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 3;
    }

    .code-element {
        position: absolute;
        font-family: 'JetBrains Mono', 'Fira Code', monospace;
        font-size: 12px;
        color: rgba(139, 147, 255, 0.15);
        font-weight: 400;
        animation: codeFloat 15s linear infinite;
    }

    .code-element:nth-child(1) {
        top: 20%;
        left: 10%;
        animation-delay: 0s;
    }

    .code-element:nth-child(2) {
        top: 60%;
        right: 15%;
        animation-delay: -3s;
        color: rgba(255, 206, 92, 0.12);
    }

    .code-element:nth-child(3) {
        top: 80%;
        left: 20%;
        animation-delay: -6s;
        color: rgba(34, 197, 94, 0.12);
    }

    .code-element:nth-child(4) {
        top: 30%;
        right: 25%;
        animation-delay: -9s;
        color: rgba(251, 146, 60, 0.12);
    }

    .code-element:nth-child(5) {
        top: 70%;
        left: 60%;
        animation-delay: -12s;
        color: rgba(139, 147, 255, 0.1);
    }

    /* Grid Pattern Overlay */
    .grid-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: 
            linear-gradient(rgba(139, 147, 255, 0.02) 1px, transparent 1px),
            linear-gradient(90deg, rgba(139, 147, 255, 0.02) 1px, transparent 1px);
        background-size: 60px 60px;
        z-index: 1;
        animation: gridMove 30s linear infinite;
    }

    /* Content Container */
    .banner-container-cbd {
        position: relative;
        z-index: 10;
        padding-bottom: 50px;
    }

    /* Enhanced Typography */
    .hero-main-title {
        font-family: "Fredoka", sans-serif !important;
        font-weight: 600;
        font-size: clamp(3.5rem, 8vw, 8rem);
        line-height: 0.9;
        letter-spacing: -0.02em;
        background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 0;
        position: relative;
    }

    .hero-main-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 60px;
        height: 4px;
        background: linear-gradient(90deg, #8B93FF, #22C55E);
        border-radius: 2px;
        animation: underlineGlow 3s ease-in-out infinite;
    }

    .hero-subtitle {
        font-family: "IBM Plex Mono", monospace !important;
        font-weight: 500;
        font-size: clamp(0.9rem, 2vw, 1.1rem);
        color: #666;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 20px;
        position: relative;
    }

    .hero-subtitle::before {
        content: '//';
        color: #8B93FF;
        margin-right: 8px;
    }

    /* Marquee Enhancement */
    .marquee {
        background: linear-gradient(90deg, #8B93FF, #22C55E, #FFE870, #FB923C);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 600;
        animation: gradientShift 4s ease-in-out infinite;
    }

    /* Stats Enhancement */
    .counter-item .number {
        font-family: "Fredoka", sans-serif !important;
        font-weight: 600;
        background: linear-gradient(135deg, #8B93FF, #22C55E);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Floating Action Button */
    .circle-text {
        position: relative;
        z-index: 15;
        filter: drop-shadow(0 10px 30px rgba(139, 147, 255, 0.2));
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .circle-text:hover {
        transform: translateY(-5px) scale(1.05);
        filter: drop-shadow(0 20px 40px rgba(139, 147, 255, 0.3));
    }

    /* Image Enhancement */
    .image-wrapper {
        position: relative;
        z-index: 10;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 
            0 20px 60px rgba(0, 0, 0, 0.1),
            0 0 0 1px rgba(255, 255, 255, 0.1);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .image-wrapper:hover {
        transform: translateY(-10px);
        box-shadow: 
            0 40px 80px rgba(0, 0, 0, 0.15),
            0 0 0 1px rgba(255, 255, 255, 0.2);
    }

    .image-wrapper::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(34, 197, 94, 0.1));
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 2;
        border-radius: 20px;
    }

    .image-wrapper:hover::before {
        opacity: 1;
    }

    /* Animations */
    @keyframes backgroundFloat {
        0%, 100% { transform: translate(0, 0) rotate(0deg); }
        25% { transform: translate(-2%, -2%) rotate(1deg); }
        50% { transform: translate(2%, -1%) rotate(-1deg); }
        75% { transform: translate(-1%, 2%) rotate(0.5deg); }
    }

    @keyframes shapesFloat {
        0% { transform: translate(0, 0); }
        100% { transform: translate(-50px, -50px); }
    }

    @keyframes codeFloat {
        0% { transform: translateY(0) rotate(0deg); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(-100px) rotate(5deg); opacity: 0; }
    }

    @keyframes gridMove {
        0% { transform: translate(0, 0); }
        100% { transform: translate(60px, 60px); }
    }

    @keyframes underlineGlow {
        0%, 100% { box-shadow: 0 0 10px rgba(139, 147, 255, 0.3); }
        50% { box-shadow: 0 0 20px rgba(139, 147, 255, 0.6); }
    }

    @keyframes gradientShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .hero-area-2::before,
        .hero-area-2::after {
            display: none;
        }
        
        .code-elements {
            display: none;
        }
        
        .grid-overlay {
            opacity: 0.5;
        }
        
        .hero-main-title {
            font-size: clamp(2.5rem, 12vw, 4rem);
        }
    }
</style>

<section class="hero-area-2 section-spacing">
    <!-- Animated Background Elements -->
    <div class="grid-overlay"></div>
    <div class="code-elements">
        <div class="code-element">function createAwesome() {</div>
        <div class="code-element">const magic = true;</div>
        <div class="code-element">return innovation;</div>
        <div class="code-element">}</div>
        <div class="code-element">// Building the future</div>
    </div>

    <div class="hero-area-2-inner section-spacing-top">
        <div class="banner-container-cbd container large">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h4 class="hero-subtitle fade-anim">CODES BY</h4>
                        <h1 class="hero-main-title fredoka-semibold fade-anim" data-direction="left" data-delay="0.30">DAWSON</h1>
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
                <div style="border-radius:20px;" class="image-wrapper parallax-view fade-anim" data-delay="0.8">
                    <img class="w-100" src="assets/imgs/cbd/banner_coding.jpg" alt="image" data-speed="0.5">
                </div>
            </div>
        </div>
    </div>
</section>