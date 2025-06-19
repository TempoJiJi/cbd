<style>
    .section-description {
        font-size: 20px;
    }

    /* About section modern styling */
    .about-area-3 {
        position: relative;
        overflow: hidden;
        min-height: 100vh;
        display: flex;
        align-items: center;
    }

    /* Floating particles background */
    .about-floating-particles {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1;
        pointer-events: none;
    }

    .about-particle {
        position: absolute;
        width: 3px;
        height: 3px;
        background: linear-gradient(45deg, #fb923c, #fc7c82);
        border-radius: 50%;
        opacity: 0.4;
        animation: aboutFloatUp 12s linear infinite;
    }

    .about-particle:nth-child(1) {
        left: 15%;
        animation-delay: 0s;
    }

    .about-particle:nth-child(2) {
        left: 25%;
        animation-delay: 2s;
    }

    .about-particle:nth-child(3) {
        left: 35%;
        animation-delay: 4s;
    }

    .about-particle:nth-child(4) {
        left: 45%;
        animation-delay: 6s;
    }

    .about-particle:nth-child(5) {
        left: 55%;
        animation-delay: 8s;
    }

    .about-particle:nth-child(6) {
        left: 65%;
        animation-delay: 1s;
    }

    .about-particle:nth-child(7) {
        left: 75%;
        animation-delay: 3s;
    }

    .about-particle:nth-child(8) {
        left: 85%;
        animation-delay: 5s;
    }

    @keyframes aboutFloatUp {
        0% {
            transform: translateY(100vh) scale(0);
            opacity: 0;
        }

        10% {
            opacity: 0.4;
            transform: scale(1);
        }

        90% {
            opacity: 0.4;
        }

        100% {
            transform: translateY(-100px) scale(0);
            opacity: 0;
        }
    }

    /* About geometric shapes */
    .about-shapes {
        position: absolute;
        top: 20%;
        right: 10%;
        display: flex;
        flex-direction: column;
        gap: 40px;
        z-index: 2;
    }

    .about-shape-element {
        position: relative;
        animation: aboutShapeFloat 8s ease-in-out infinite;
    }

    .about-shape-element:nth-child(1) {
        animation-delay: 0s;
    }

    .about-shape-element:nth-child(2) {
        animation-delay: 2.5s;
    }

    .about-shape-element:nth-child(3) {
        animation-delay: 5s;
    }

    /* About Circle */
    .about-shape-circle {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #a26eec;
        transition: all 0.3s ease;
    }

    /* About Square */
    .about-shape-square {
        width: 50px;
        height: 50px;
        background-color: #33f6b3;
        transform: rotate(45deg);
        transition: all 0.3s ease;
    }

    /* About Triangle */
    .about-shape-triangle {
        width: 0;
        height: 0;
        border-left: 30px solid transparent;
        border-right: 30px solid transparent;
        border-bottom: 50px solid #fb923c;
        transition: all 0.3s ease;
    }

    @keyframes aboutShapeFloat {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    /* Hover effects for about shapes */
    .about-shape-element:hover .about-shape-circle {
        background-color: #8b7cf6;
        transform: scale(1.1);
    }

    .about-shape-element:hover .about-shape-square {
        background-color: #22d3ee;
        transform: rotate(45deg) scale(1.1);
    }

    .about-shape-element:hover .about-shape-triangle {
        border-bottom-color: #fc7c82;
        transform: scale(1.1);
    }

    /* About content styling */
    .about-area-3-inner {
        position: relative;
        z-index: 3;
        padding: 120px 0;
    }

    .about-section-title {
        font-size: 48px;
        font-weight: 700;
        line-height: 1.2;
        color: var(--cbd-black);
        margin-bottom: 30px;
        letter-spacing: -1px;
    }

    .about-section-description {
        font-size: 20px;
        line-height: 1.6;
        color: var(--cbd-black);
        margin-bottom: 25px;
        font-weight: 400;
        opacity: 0.85;
    }

    .about-subtitle {
        font-size: 14px;
        font-weight: 600;
        color: var(--cbd-orange);
        letter-spacing: 1.5px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }

    /* Counter styling improvements */
    .counter-wrapper {
        margin-top: 50px;
        display: flex;
        gap: 60px;
        flex-wrap: wrap;
    }

    .counter-item {
        text-align: center;
        position: relative;
    }

    .counter-item .number {
        font-size: 48px;
        font-weight: 700;
        color: var(--cbd-orange);
        line-height: 1;
        margin-bottom: 10px;
        display: block;
    }

    .counter-item .text {
        font-size: 16px;
        font-weight: 500;
        color: var(--cbd-black);
        opacity: 0.8;
        line-height: 1.4;
    }

    /* Image styling */
    .about-image-wrapper {
        position: relative;
        margin-top: 40px;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .about-image-wrapper:hover {
        transform: translateY(-10px);
    }

    .about-image-wrapper img {
        width: 100%;
        height: auto;
        border-radius: 20px;
        transition: transform 0.3s ease;
    }

    .about-image-wrapper:hover img {
        transform: scale(1.05);
    }

    /* Decorative lines for about section */
    .about-decorative-lines {
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px;
        z-index: 1;
    }

    .about-decorative-lines::before,
    .about-decorative-lines::after {
        content: '';
        position: absolute;
        width: 80px;
        height: 2px;
        background-color: var(--cbd-orange);
        top: 0;
        border-radius: 1px;
        opacity: 0.6;
        animation: aboutLineGlow 6s ease-in-out infinite;
    }

    .about-decorative-lines::before {
        left: 5%;
        animation-delay: 0s;
    }

    .about-decorative-lines::after {
        right: 5%;
        animation-delay: 3s;
    }

    @keyframes aboutLineGlow {
        0%, 100% {
            opacity: 0.6;
            transform: scaleX(1);
            box-shadow: 0 0 0 rgba(251, 146, 60, 0);
        }
        50% {
            opacity: 1;
            transform: scaleX(1.3);
            box-shadow: 0 0 15px rgba(251, 146, 60, 0.4);
        }
    }

    /* Dark theme adjustments */
    [data-theme="dark"] .about-particle {
        background: linear-gradient(45deg, #a26eec, #33f6b3);
    }

    [data-theme="dark"] .about-shape-circle {
        background-color: #fb923c;
    }

    [data-theme="dark"] .about-shape-square {
        background-color: #a26eec;
    }

    [data-theme="dark"] .about-shape-triangle {
        border-bottom-color: #33f6b3;
    }

    [data-theme="dark"] .about-decorative-lines::before,
    [data-theme="dark"] .about-decorative-lines::after {
        background-color: #a26eec;
    }

    [data-theme="dark"] .about-shape-element:hover .about-shape-circle {
        background-color: #fc7c82;
    }

    [data-theme="dark"] .about-shape-element:hover .about-shape-square {
        background-color: #8b7cf6;
    }

    [data-theme="dark"] .about-shape-element:hover .about-shape-triangle {
        border-bottom-color: #22d3ee;
    }

    /* Responsive design */
    @media (max-width: 1199px) {
        .about-section-title {
            font-size: 42px;
        }

        .about-shapes {
            right: 5%;
            gap: 30px;
        }

        .counter-wrapper {
            gap: 40px;
        }
    }

    @media (max-width: 991px) {
        .about-area-3-inner {
            padding: 80px 0;
        }

        .about-section-title {
            font-size: 36px;
        }

        .about-section-description {
            font-size: 18px;
        }

        .about-shapes {
            position: relative;
            top: auto;
            right: auto;
            flex-direction: row;
            justify-content: center;
            margin: 30px 0;
            gap: 25px;
        }

        .about-shape-circle {
            width: 50px;
            height: 50px;
        }

        .about-shape-square {
            width: 40px;
            height: 40px;
        }

        .about-shape-triangle {
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            border-bottom: 40px solid #fb923c;
        }

        .counter-wrapper {
            gap: 30px;
            justify-content: center;
        }

        .counter-item .number {
            font-size: 36px;
        }
    }

    @media (max-width: 767px) {
        .about-area-3-inner {
            padding: 60px 0;
        }

        .about-section-title {
            font-size: 32px;
            margin-bottom: 20px;
        }

        .about-section-description {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .about-shapes {
            gap: 20px;
            margin: 20px 0;
        }

        .about-shape-circle {
            width: 40px;
            height: 40px;
        }

        .about-shape-square {
            width: 35px;
            height: 35px;
        }

        .about-shape-triangle {
            border-left: 20px solid transparent;
            border-right: 20px solid transparent;
            border-bottom: 35px solid #fb923c;
        }

        .counter-wrapper {
            gap: 25px;
            margin-top: 30px;
        }

        .counter-item .number {
            font-size: 32px;
        }

        .counter-item .text {
            font-size: 14px;
        }

        .about-decorative-lines::before,
        .about-decorative-lines::after {
            width: 50px;
            animation: aboutLineGlow 6s ease-in-out infinite;
        }

        .about-particle:nth-child(n+6) {
            display: none;
        }
    }

    @media (max-width: 480px) {
        .about-section-title {
            font-size: 28px;
        }

        .about-shapes {
            gap: 15px;
        }

        .about-shape-circle {
            width: 35px;
            height: 35px;
        }

        .about-shape-square {
            width: 30px;
            height: 30px;
        }

        .about-shape-triangle {
            border-left: 18px solid transparent;
            border-right: 18px solid transparent;
            border-bottom: 30px solid #fb923c;
        }

        .counter-wrapper {
            gap: 20px;
        }

        .about-decorative-lines::before,
        .about-decorative-lines::after {
            width: 40px;
        }
    }
</style>

<section id="about_section" class="about-area-3">
    <!-- Floating particles background -->
    <div class="about-floating-particles">
        <div class="about-particle"></div>
        <div class="about-particle"></div>
        <div class="about-particle"></div>
        <div class="about-particle"></div>
        <div class="about-particle"></div>
        <div class="about-particle"></div>
        <div class="about-particle"></div>
        <div class="about-particle"></div>
    </div>

    <!-- Decorative lines -->
    <div class="about-decorative-lines"></div>

    <!-- Geometric shapes -->
    <div class="about-shapes fade-anim" data-delay="0.3">
        <div class="about-shape-element">
            <div class="about-shape-circle"></div>
        </div>
        <div class="about-shape-element">
            <div class="about-shape-square"></div>
        </div>
        <div class="about-shape-element">
            <div class="about-shape-triangle"></div>
        </div>
    </div>

    <div class="container">
        <div class="about-area-3-inner section-spacing-top">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper fade-anim">
                        <div class="about-subtitle">Since 2019</div>
                        <h1 class="about-section-title">The Developer Behind the Code.</h1>
                        <div class="subtitle-wrapper fade-anim">
                            <p class="about-section-description">Welcome! I'm Dawson — a full-time freelance programmer based in Malaysia Johor. I specialize in full-stack web and mobile app development, building everything from user-friendly websites to powerful backend systems and cross-platform apps that scale with your business.</p>
                            
                            <p class="about-section-description">Over the past few years, I've collaborated remotely with startups, designers, and agencies worldwide. This experience has honed my ability to communicate clearly, deliver on deadlines, and adapt to diverse workflows — all while staying aligned with each client's unique vision.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-content-wrapper">
                <div class="btn-wrapper fade-anim">
                    <!-- <div class="t-btn-group"> -->
                </div>
                <div class="counter-wrapper-box">
                    <div class="counter-wrapper">
                        <div class="counter-item fade-anim" data-delay="0.30">
                            <span class="number t-counter">5+</span>
                            <p class="text">Years of experience</p>
                        </div>
                        <div class="counter-item fade-anim" data-delay="0.45">
                            <span class="number t-counter">40+</span>
                            <p class="text">Satisfied clients</p>
                        </div>
                        <div class="counter-item fade-anim" data-delay="0.60">
                            <span class="number t-counter">100+</span>
                            <p class="text">Projects delivered</p>
                        </div>
                    </div>
                    <div class="about-image-wrapper parallax-view fade-anim" data-delay="0.75">
                        <img class="w-100" src="assets/imgs/cbd/banner_coding.jpg" alt="image" data-speed="0.5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>