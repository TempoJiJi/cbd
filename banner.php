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
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 600;
        font-size: clamp(3.5rem, 8vw, 8rem);
        line-height: 0.9;
        letter-spacing: -0.02em;
        background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 50%, #1a1a1a 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-bottom: 0;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hero-subtitle {
        font-family: 'Space Mono', monospace !important;
        font-weight: 400;
        font-size: clamp(0.9rem, 2vw, 1.1rem);
        letter-spacing: 0.15em;
        text-transform: uppercase;
        color: #666;
        margin-bottom: 1rem;
    }

    .hero-description {
        font-family: 'Inter', sans-serif !important;
        font-size: clamp(1.1rem, 2.5vw, 1.3rem);
        line-height: 1.6;
        color: #555;
        max-width: 600px;
        margin: 0 auto 2rem;
        font-weight: 400;
    }

    .stats-container {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin: 2rem 0;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        padding: 1rem;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.7);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        min-width: 120px;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        background: rgba(255, 255, 255, 0.9);
    }

    .stat-number {
        font-family: 'Fredoka', sans-serif !important;
        font-weight: 600;
        font-size: 2.2rem;
        color: #1a1a1a;
        display: block;
        line-height: 1;
    }

    .stat-label {
        font-family: 'Space Mono', monospace !important;
        font-size: 0.8rem;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 0.1em;
        margin-top: 0.5rem;
    }

    .banner-container-cbd {
        padding-bottom: 50px;
        position: relative;
        z-index: 10;
    }

    /* Interactive Background Elements */
    .interactive-background {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
        pointer-events: none;
    }

    /* Floating Geometric Shapes */
    .floating-shape {
        position: absolute;
        opacity: 0.1;
        transition: all 0.3s ease;
        pointer-events: none;
    }

    .floating-shape.circle {
        border-radius: 50%;
        background: linear-gradient(45deg, #8B93FF, #33f6b3);
    }

    .floating-shape.square {
        background: linear-gradient(45deg, #ffe870, #fb923c);
        transform: rotate(45deg);
    }

    .floating-shape.triangle {
        width: 0;
        height: 0;
        background: transparent;
        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-bottom: 26px solid rgba(139, 147, 255, 0.3);
    }

    /* Cursor Follower */
    .cursor-follower {
        position: fixed;
        width: 20px;
        height: 20px;
        background: rgba(139, 147, 255, 0.6);
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        transition: transform 0.1s ease;
        mix-blend-mode: difference;
    }

    /* Grid Pattern */
    .grid-pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.03;
        background-image: 
            linear-gradient(rgba(139, 147, 255, 0.3) 1px, transparent 1px),
            linear-gradient(90deg, rgba(139, 147, 255, 0.3) 1px, transparent 1px);
        background-size: 50px 50px;
        animation: gridMove 20s linear infinite;
    }

    @keyframes gridMove {
        0% { transform: translate(0, 0); }
        100% { transform: translate(50px, 50px); }
    }

    /* Particle System */
    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(139, 147, 255, 0.4);
        border-radius: 50%;
        pointer-events: none;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(0deg); opacity: 0; }
        50% { transform: translateY(-20px) rotate(180deg); opacity: 1; }
    }

    /* Ripple Effect */
    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(139, 147, 255, 0.1);
        transform: scale(0);
        animation: ripple 2s linear infinite;
        pointer-events: none;
    }

    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }

    /* Magnetic Field Effect */
    .magnetic-field {
        position: absolute;
        width: 200px;
        height: 200px;
        border: 2px solid rgba(139, 147, 255, 0.1);
        border-radius: 50%;
        pointer-events: none;
        transition: all 0.3s ease;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .stats-container {
            gap: 1.5rem;
        }
        
        .stat-item {
            min-width: 100px;
            padding: 0.8rem;
        }
        
        .stat-number {
            font-size: 1.8rem;
        }
        
        .floating-shape {
            opacity: 0.05;
        }
        
        .grid-pattern {
            opacity: 0.02;
        }
    }

    @media (max-width: 480px) {
        .stats-container {
            gap: 1rem;
        }
        
        .stat-item {
            min-width: 80px;
            padding: 0.6rem;
        }
    }
</style>

<section class="hero-area-2 section-spacing">
    <div class="hero-area-2-inner section-spacing-top">
        
        <!-- Interactive Background Elements -->
        <div class="interactive-background">
            <!-- Grid Pattern -->
            <div class="grid-pattern"></div>
            
            <!-- Floating Shapes -->
            <div class="floating-shape circle" style="width: 30px; height: 30px; top: 10%; left: 15%; animation-delay: 0s;"></div>
            <div class="floating-shape square" style="width: 25px; height: 25px; top: 20%; right: 20%; animation-delay: 1s;"></div>
            <div class="floating-shape triangle" style="top: 15%; left: 70%; animation-delay: 2s;"></div>
            <div class="floating-shape circle" style="width: 40px; height: 40px; bottom: 30%; left: 10%; animation-delay: 3s;"></div>
            <div class="floating-shape square" style="width: 35px; height: 35px; bottom: 20%; right: 15%; animation-delay: 4s;"></div>
            <div class="floating-shape circle" style="width: 20px; height: 20px; top: 60%; left: 80%; animation-delay: 5s;"></div>
            
            <!-- Magnetic Fields -->
            <div class="magnetic-field" style="top: 10%; left: 5%; animation: float 8s ease-in-out infinite;"></div>
            <div class="magnetic-field" style="bottom: 10%; right: 5%; animation: float 8s ease-in-out infinite reverse;"></div>
        </div>

        <!-- Cursor Follower -->
        <div class="cursor-follower"></div>

        <div class="banner-container-cbd container large">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h4 class="hero-subtitle fade-anim">CODES BY</h4>
                        <h1 class="hero-main-title fade-anim" data-direction="bottom" data-delay="0.30">DAWSON</h1>
                    </div>
                    <div class="subtitle-wrapper">
                        <p class="hero-description fade-anim" data-direction="bottom" data-delay="0.60">
                            Full-stack developer specializing in web applications, mobile apps, and e-commerce solutions. 
                            Building scalable, user-focused digital experiences with modern technologies.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Stats Section -->
            <div class="stats-container fade-anim" data-direction="bottom" data-delay="0.90">
                <div class="stat-item">
                    <span class="stat-number">5+</span>
                    <span class="stat-label">Years Experience</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">50+</span>
                    <span class="stat-label">Projects Delivered</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">30+</span>
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
                <div style="border-radius:50px;" class="image-wrapper parallax-view">
                    <img class="w-100" src="assets/imgs/cbd/banner_coding.jpg" alt="image" data-speed="0.5">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cursor Follower
    const cursorFollower = document.querySelector('.cursor-follower');
    const interactiveBackground = document.querySelector('.interactive-background');
    
    let mouseX = 0, mouseY = 0;
    let followerX = 0, followerY = 0;
    
    // Mouse movement tracking
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        // Create ripple effect
        createRipple(e.clientX, e.clientY);
        
        // Animate floating shapes based on cursor position
        animateShapes(e.clientX, e.clientY);
        
        // Create particles occasionally
        if (Math.random() < 0.1) {
            createParticle(e.clientX, e.clientY);
        }
    });
    
    // Smooth cursor follower animation
    function animateCursor() {
        const dx = mouseX - followerX;
        const dy = mouseY - followerY;
        
        followerX += dx * 0.1;
        followerY += dy * 0.1;
        
        cursorFollower.style.left = followerX + 'px';
        cursorFollower.style.top = followerY + 'px';
        
        requestAnimationFrame(animateCursor);
    }
    animateCursor();
    
    // Create ripple effect
    function createRipple(x, y) {
        const ripple = document.createElement('div');
        ripple.className = 'ripple';
        ripple.style.left = x + 'px';
        ripple.style.top = y + 'px';
        ripple.style.width = '20px';
        ripple.style.height = '20px';
        
        document.body.appendChild(ripple);
        
        setTimeout(() => {
            ripple.remove();
        }, 2000);
    }
    
    // Animate floating shapes
    function animateShapes(mouseX, mouseY) {
        const shapes = document.querySelectorAll('.floating-shape');
        
        shapes.forEach((shape, index) => {
            const rect = shape.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            const distance = Math.sqrt(
                Math.pow(mouseX - centerX, 2) + Math.pow(mouseY - centerY, 2)
            );
            
            if (distance < 200) {
                const force = (200 - distance) / 200;
                const angle = Math.atan2(centerY - mouseY, centerX - mouseX);
                
                const moveX = Math.cos(angle) * force * 20;
                const moveY = Math.sin(angle) * force * 20;
                
                shape.style.transform = `translate(${moveX}px, ${moveY}px) rotate(${force * 45}deg)`;
                shape.style.opacity = 0.3 + force * 0.4;
            } else {
                shape.style.transform = 'translate(0px, 0px) rotate(0deg)';
                shape.style.opacity = 0.1;
            }
        });
    }
    
    // Create floating particles
    function createParticle(x, y) {
        const particle = document.createElement('div');
        particle.className = 'particle';
        particle.style.left = x + (Math.random() - 0.5) * 100 + 'px';
        particle.style.top = y + (Math.random() - 0.5) * 100 + 'px';
        particle.style.animationDelay = Math.random() * 2 + 's';
        
        interactiveBackground.appendChild(particle);
        
        setTimeout(() => {
            particle.remove();
        }, 6000);
    }
    
    // Magnetic field effect
    const magneticFields = document.querySelectorAll('.magnetic-field');
    
    document.addEventListener('mousemove', function(e) {
        magneticFields.forEach(field => {
            const rect = field.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            
            const distance = Math.sqrt(
                Math.pow(e.clientX - centerX, 2) + Math.pow(e.clientY - centerY, 2)
            );
            
            if (distance < 150) {
                const force = (150 - distance) / 150;
                field.style.transform = `scale(${1 + force * 0.3})`;
                field.style.opacity = 0.1 + force * 0.2;
            } else {
                field.style.transform = 'scale(1)';
                field.style.opacity = 0.1;
            }
        });
    });
    
    // Add floating animation to shapes
    const floatingShapes = document.querySelectorAll('.floating-shape');
    floatingShapes.forEach((shape, index) => {
        shape.style.animation = `float ${6 + index}s ease-in-out infinite`;
        shape.style.animationDelay = `${index * 0.5}s`;
    });
});
</script>