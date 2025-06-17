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

    .area-shape-1 {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
    }

    .hero-main-title {
        font-size: clamp(3.5rem, 8vw, 8rem);
        font-weight: 600;
        line-height: 0.9;
        letter-spacing: -0.02em;
        margin-bottom: 20px;
        background: linear-gradient(135deg, #1a1a1a 0%, #333 50%, #1a1a1a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hero-subtitle {
        font-size: clamp(1.1rem, 2.5vw, 1.5rem);
        font-weight: 500;
        color: #666;
        margin-bottom: 30px;
        letter-spacing: 0.5px;
    }

    .hero-description {
        font-size: clamp(1rem, 2vw, 1.25rem);
        line-height: 1.6;
        color: #555;
        max-width: 600px;
        margin: 0 auto 40px;
    }

    .stats-container {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin: 50px 0;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        transition: transform 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-5px);
    }

    .stat-number {
        font-size: clamp(2rem, 4vw, 3rem);
        font-weight: 600;
        color: #8B93FF;
        display: block;
        margin-bottom: 8px;
    }

    .stat-label {
        font-size: 14px;
        color: #666;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .banner-container-cbd {
        padding-bottom: 50px;
        position: relative;
        overflow: hidden;
    }

    /* Interactive Background Elements */
    .interactive-bg {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }

    .floating-element {
        position: absolute;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(139, 147, 255, 0.05));
        backdrop-filter: blur(10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        animation: float 6s ease-in-out infinite;
    }

    .floating-element:nth-child(1) {
        width: 120px;
        height: 120px;
        top: 10%;
        left: 10%;
        animation-delay: 0s;
    }

    .floating-element:nth-child(2) {
        width: 80px;
        height: 80px;
        top: 20%;
        right: 15%;
        animation-delay: 2s;
    }

    .floating-element:nth-child(3) {
        width: 100px;
        height: 100px;
        bottom: 30%;
        left: 5%;
        animation-delay: 4s;
    }

    .floating-element:nth-child(4) {
        width: 60px;
        height: 60px;
        bottom: 20%;
        right: 10%;
        animation-delay: 1s;
    }

    .floating-element:nth-child(5) {
        width: 90px;
        height: 90px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        animation-delay: 3s;
    }

    .geometric-shape {
        position: absolute;
        border: 2px solid rgba(139, 147, 255, 0.2);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        animation: rotate 20s linear infinite;
    }

    .geometric-shape:nth-child(6) {
        width: 150px;
        height: 150px;
        top: 15%;
        right: 20%;
        border-radius: 20px;
        transform: rotate(45deg);
    }

    .geometric-shape:nth-child(7) {
        width: 100px;
        height: 100px;
        bottom: 25%;
        left: 20%;
        border-radius: 50%;
    }

    .geometric-shape:nth-child(8) {
        width: 80px;
        height: 80px;
        top: 60%;
        right: 5%;
        clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.1), rgba(139, 147, 255, 0.05));
        border: none;
    }

    .code-snippet {
        position: absolute;
        font-family: 'JetBrains Mono', monospace;
        font-size: 12px;
        color: rgba(139, 147, 255, 0.3);
        background: rgba(255, 255, 255, 0.05);
        padding: 8px 12px;
        border-radius: 6px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(139, 147, 255, 0.1);
        transition: all 0.3s ease;
        animation: pulse 4s ease-in-out infinite;
    }

    .code-snippet:nth-child(9) {
        top: 25%;
        left: 25%;
        animation-delay: 0s;
    }

    .code-snippet:nth-child(10) {
        bottom: 40%;
        right: 25%;
        animation-delay: 2s;
    }

    .code-snippet:nth-child(11) {
        top: 70%;
        left: 60%;
        animation-delay: 1s;
    }

    /* Cursor Trail Effect */
    .cursor-trail {
        position: fixed;
        width: 20px;
        height: 20px;
        background: radial-gradient(circle, rgba(139, 147, 255, 0.6), rgba(139, 147, 255, 0.1));
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        transition: all 0.1s ease;
        transform: translate(-50%, -50%);
    }

    /* Animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); }
        25% { transform: translateY(-20px) rotate(90deg); }
        50% { transform: translateY(-10px) rotate(180deg); }
        75% { transform: translateY(-15px) rotate(270deg); }
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes pulse {
        0%, 100% { opacity: 0.3; transform: scale(1); }
        50% { opacity: 0.6; transform: scale(1.05); }
    }

    /* Hover Effects */
    .banner-container-cbd:hover .floating-element {
        transform: scale(1.1);
        background: linear-gradient(135deg, rgba(139, 147, 255, 0.2), rgba(139, 147, 255, 0.1));
    }

    .banner-container-cbd:hover .geometric-shape {
        border-color: rgba(139, 147, 255, 0.4);
        transform: scale(1.05);
    }

    .banner-container-cbd:hover .code-snippet {
        color: rgba(139, 147, 255, 0.6);
        background: rgba(255, 255, 255, 0.1);
        border-color: rgba(139, 147, 255, 0.3);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .stats-container {
            gap: 40px;
        }
        
        .floating-element,
        .geometric-shape,
        .code-snippet {
            display: none;
        }
        
        .hero-description {
            margin-bottom: 30px;
        }
    }

    @media (max-width: 480px) {
        .stats-container {
            gap: 30px;
            margin: 30px 0;
        }
    }
</style>

<section class="hero-area-2 section-spacing">
    <div class="hero-area-2-inner section-spacing-top">
        <div class="banner-container-cbd container large">
            <!-- Interactive Background Elements -->
            <div class="interactive-bg">
                <!-- Floating Elements -->
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                <div class="floating-element"></div>
                
                <!-- Geometric Shapes -->
                <div class="geometric-shape"></div>
                <div class="geometric-shape"></div>
                <div class="geometric-shape"></div>
                
                <!-- Code Snippets -->
                <div class="code-snippet">const dev = 'Dawson';</div>
                <div class="code-snippet">function() { return 'awesome'; }</div>
                <div class="code-snippet">npm run build</div>
            </div>

            <div class="section-header" style="position: relative; z-index: 10;">
                <div class="section-title-wrapper">
                    <div class="title-wrapper text-center">
                        <h4 class="ibm-plex-mono-bold-italic hero-subtitle fade-anim">CODES BY</h4>
                        <h1 class="fredoka-semibold hero-main-title fade-anim" data-delay="0.2">DAWSON</h1>
                        <p class="hero-description fade-anim" data-delay="0.4">
                            Full-stack developer crafting scalable web applications and mobile solutions. 
                            Transforming ideas into powerful digital experiences with clean code and modern technologies.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="stats-container fade-anim" data-delay="0.6" style="position: relative; z-index: 10;">
                <div class="stat-item">
                    <span class="fredoka-semibold stat-number">5+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="fredoka-semibold stat-number">50+</span>
                    <span class="stat-label">Projects Completed</span>
                </div>
                <div class="stat-item">
                    <span class="fredoka-semibold stat-number">30+</span>
                    <span class="stat-label">Happy Clients</span>
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
                
                <div style="border-radius:50px;" class="image-wrapper parallax-view fade-anim" data-delay="0.8">
                    <img class="w-100" src="assets/imgs/cbd/banner_coding.jpg" alt="image" data-speed="0.5">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Create cursor trail elements
    const trailCount = 8;
    const trails = [];
    
    for (let i = 0; i < trailCount; i++) {
        const trail = document.createElement('div');
        trail.className = 'cursor-trail';
        trail.style.opacity = (1 - i * 0.1).toString();
        trail.style.transform = `translate(-50%, -50%) scale(${1 - i * 0.1})`;
        document.body.appendChild(trail);
        trails.push({
            element: trail,
            x: 0,
            y: 0
        });
    }

    let mouseX = 0;
    let mouseY = 0;

    // Mouse movement handler
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });

    // Animate cursor trails
    function animateTrails() {
        trails.forEach((trail, index) => {
            const delay = index * 0.05;
            trail.x += (mouseX - trail.x) * (0.2 - delay);
            trail.y += (mouseY - trail.y) * (0.2 - delay);
            
            trail.element.style.left = trail.x + 'px';
            trail.element.style.top = trail.y + 'px';
        });
        
        requestAnimationFrame(animateTrails);
    }
    
    animateTrails();

    // Interactive elements response to mouse
    const banner = document.querySelector('.banner-container-cbd');
    const floatingElements = document.querySelectorAll('.floating-element');
    const geometricShapes = document.querySelectorAll('.geometric-shape');
    const codeSnippets = document.querySelectorAll('.code-snippet');

    banner.addEventListener('mousemove', function(e) {
        const rect = banner.getBoundingClientRect();
        const x = (e.clientX - rect.left) / rect.width;
        const y = (e.clientY - rect.top) / rect.height;

        // Move floating elements
        floatingElements.forEach((element, index) => {
            const moveX = (x - 0.5) * (20 + index * 5);
            const moveY = (y - 0.5) * (20 + index * 5);
            element.style.transform = `translate(${moveX}px, ${moveY}px)`;
        });

        // Rotate geometric shapes
        geometricShapes.forEach((shape, index) => {
            const rotation = (x + y) * (30 + index * 10);
            shape.style.transform = `rotate(${rotation}deg) scale(${1 + (x + y) * 0.1})`;
        });

        // Scale code snippets
        codeSnippets.forEach((snippet, index) => {
            const scale = 1 + Math.sin((x + y + index) * Math.PI) * 0.1;
            snippet.style.transform = `scale(${scale})`;
        });
    });

    // Reset elements when mouse leaves
    banner.addEventListener('mouseleave', function() {
        floatingElements.forEach(element => {
            element.style.transform = 'translate(0, 0)';
        });
        
        geometricShapes.forEach(shape => {
            shape.style.transform = 'rotate(0deg) scale(1)';
        });
        
        codeSnippets.forEach(snippet => {
            snippet.style.transform = 'scale(1)';
        });
    });

    // Add click ripple effect
    banner.addEventListener('click', function(e) {
        const ripple = document.createElement('div');
        ripple.style.position = 'absolute';
        ripple.style.borderRadius = '50%';
        ripple.style.background = 'rgba(139, 147, 255, 0.3)';
        ripple.style.transform = 'scale(0)';
        ripple.style.animation = 'ripple 0.6s linear';
        ripple.style.left = (e.clientX - banner.offsetLeft) + 'px';
        ripple.style.top = (e.clientY - banner.offsetTop) + 'px';
        ripple.style.width = '20px';
        ripple.style.height = '20px';
        ripple.style.pointerEvents = 'none';
        ripple.style.zIndex = '5';
        
        banner.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 600);
    });

    // Add ripple animation
    const style = document.createElement('style');
    style.textContent = `
        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    `;
    document.head.appendChild(style);
});
</script>