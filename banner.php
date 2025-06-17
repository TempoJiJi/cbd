<style>
    .bebas-neue-regular {
        font-family: "Bebas Neue", sans-serif !important;
        font-weight: 400;
        font-style: normal;
    }

    .area-shape-1 {
        position: absolute;
        bottom: 0;
        width: 100%;
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
    }

    .section-title-cbd {
        font-size: 50px;
        font-weight: 300;
        line-height: 1.2;
        letter-spacing: -0.01em;
    }

    /* Interactive Cursor Animation */
    .interactive-area {
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        overflow: hidden;
        pointer-events: none;
        z-index: 1;
    }

    .cursor-follower {
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        pointer-events: none;
        z-index: 2;
        transition: all 0.1s ease-out;
        mix-blend-mode: difference;
    }

    .particle {
        position: absolute;
        border-radius: 50%;
        pointer-events: none;
        animation: float 3s ease-in-out infinite;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .particle.active {
        opacity: 1;
        animation: particleFloat 2s ease-out forwards;
    }

    .particle-trail {
        position: absolute;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background: rgba(139, 147, 255, 0.6);
        pointer-events: none;
        animation: trailFade 1s ease-out forwards;
    }

    /* Floating geometric shapes */
    .geometric-shape {
        position: absolute;
        pointer-events: none;
        opacity: 0.1;
        animation: geometricFloat 8s ease-in-out infinite;
    }

    .shape-circle {
        width: 60px;
        height: 60px;
        border: 2px solid #8B93FF;
        border-radius: 50%;
        top: 20%;
        right: 15%;
        animation-delay: 0s;
    }

    .shape-triangle {
        width: 0;
        height: 0;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
        border-bottom: 43px solid #AFF42B;
        top: 60%;
        right: 25%;
        animation-delay: 2s;
    }

    .shape-square {
        width: 40px;
        height: 40px;
        background: rgba(252, 124, 130, 0.3);
        transform: rotate(45deg);
        top: 40%;
        right: 8%;
        animation-delay: 4s;
    }

    .shape-hexagon {
        width: 50px;
        height: 28.87px;
        background: rgba(255, 206, 92, 0.3);
        position: relative;
        top: 75%;
        right: 18%;
        animation-delay: 6s;
    }

    .shape-hexagon:before,
    .shape-hexagon:after {
        content: "";
        position: absolute;
        width: 0;
        border-left: 25px solid transparent;
        border-right: 25px solid transparent;
    }

    .shape-hexagon:before {
        bottom: 100%;
        border-bottom: 14.43px solid rgba(255, 206, 92, 0.3);
    }

    .shape-hexagon:after {
        top: 100%;
        border-top: 14.43px solid rgba(255, 206, 92, 0.3);
    }

    /* Magnetic effect zones */
    .magnetic-zone {
        position: absolute;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(139, 147, 255, 0.05) 0%, transparent 70%);
        pointer-events: none;
        transition: all 0.3s ease;
        opacity: 0;
    }

    .magnetic-zone.active {
        opacity: 1;
        transform: scale(1.2);
    }

    .zone-1 {
        width: 150px;
        height: 150px;
        top: 25%;
        right: 20%;
    }

    .zone-2 {
        width: 120px;
        height: 120px;
        top: 55%;
        right: 10%;
    }

    .zone-3 {
        width: 100px;
        height: 100px;
        top: 70%;
        right: 30%;
    }

    /* Animations */
    @keyframes particleFloat {
        0% {
            transform: translateY(0) scale(0);
            opacity: 1;
        }
        50% {
            opacity: 0.8;
            transform: scale(1);
        }
        100% {
            transform: translateY(-100px) scale(0.5);
            opacity: 0;
        }
    }

    @keyframes trailFade {
        0% {
            opacity: 0.8;
            transform: scale(1);
        }
        100% {
            opacity: 0;
            transform: scale(0.3);
        }
    }

    @keyframes geometricFloat {
        0%, 100% {
            transform: translateY(0px) rotate(0deg);
            opacity: 0.1;
        }
        25% {
            transform: translateY(-20px) rotate(90deg);
            opacity: 0.3;
        }
        50% {
            transform: translateY(-30px) rotate(180deg);
            opacity: 0.2;
        }
        75% {
            transform: translateY(-15px) rotate(270deg);
            opacity: 0.25;
        }
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0px);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .interactive-area {
            width: 100%;
            height: 50%;
            top: 50%;
            right: 0;
        }

        .geometric-shape {
            opacity: 0.05;
        }

        .shape-circle {
            width: 40px;
            height: 40px;
        }

        .shape-triangle {
            border-left: 15px solid transparent;
            border-right: 15px solid transparent;
            border-bottom: 26px solid #AFF42B;
        }

        .shape-square {
            width: 25px;
            height: 25px;
        }

        .magnetic-zone {
            display: none;
        }
    }
</style>

<section class="hero-area-2 section-spacing-top">
    <div class="hero-area-2-inner section-spacing-top">
        <div class="area-shape-1">
            <img src="assets/imgs/shape/shape-18.webp" alt="image">
        </div>

        <!-- Interactive Animation Area -->
        <div class="interactive-area" id="interactiveArea">
            <!-- Cursor Follower -->
            <div class="cursor-follower" id="cursorFollower"></div>
            
            <!-- Floating Geometric Shapes -->
            <div class="geometric-shape shape-circle"></div>
            <div class="geometric-shape shape-triangle"></div>
            <div class="geometric-shape shape-square"></div>
            <div class="geometric-shape shape-hexagon"></div>
            
            <!-- Magnetic Zones -->
            <div class="magnetic-zone zone-1"></div>
            <div class="magnetic-zone zone-2"></div>
            <div class="magnetic-zone zone-3"></div>
        </div>

        <div class="container large">
            <div class="section-header">
                <div class="section-title-wrapper">
                    <div class="title-wrapper">
                        <h4 class="bebas-neue-regular section-title-cbd fade-anim">CODES BY</h4>
                        <h4 style="color: #FC7C82;" class="bebas-neue-regular section-title typewriter-text fade-anim" data-text='["DAWSON"]'>DAWSON</h4>
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
                    <div class="hero-shape fade-anim" data-delay="0.75" data-direction="top">
                    </div>
                    <div class="hero-thumb fade-anim" data-delay="0.5" data-direction="right">
                        <a href="#about" class="circle-text">
                            <img src="assets/imgs/shape/shape-12.webp" alt="image" class="text">
                            <img src="assets/imgs/shape/shape-13.webp" alt="image" class="icon">
                        </a>
                    </div>
                </div>
                <div class="image-wrapper parallax-view">
                    <img class="w-100" src="assets/imgs/cbd/banner.png" alt="image" data-speed="0.5">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const interactiveArea = document.getElementById('interactiveArea');
    const cursorFollower = document.getElementById('cursorFollower');
    const magneticZones = document.querySelectorAll('.magnetic-zone');
    const geometricShapes = document.querySelectorAll('.geometric-shape');
    
    let mouseX = 0;
    let mouseY = 0;
    let isInInteractiveArea = false;
    
    // Colors for particles and effects
    const colors = ['#8B93FF', '#AFF42B', '#FFE870', '#FC7C82', '#FB923C'];
    
    // Mouse move handler
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        // Check if mouse is in interactive area
        const rect = interactiveArea.getBoundingClientRect();
        isInInteractiveArea = (
            mouseX >= rect.left && 
            mouseX <= rect.right && 
            mouseY >= rect.top && 
            mouseY <= rect.bottom
        );
        
        if (isInInteractiveArea) {
            // Update cursor follower position
            const relativeX = mouseX - rect.left;
            const relativeY = mouseY - rect.top;
            
            cursorFollower.style.left = relativeX + 'px';
            cursorFollower.style.top = relativeY + 'px';
            cursorFollower.style.background = colors[Math.floor(Math.random() * colors.length)];
            
            // Create particle trail
            createParticleTrail(relativeX, relativeY);
            
            // Check magnetic zones
            checkMagneticZones(relativeX, relativeY);
            
            // Animate geometric shapes based on mouse position
            animateShapes(relativeX, relativeY, rect.width, rect.height);
        }
    });
    
    // Create particle trail
    function createParticleTrail(x, y) {
        if (Math.random() > 0.7) { // 30% chance to create particle
            const trail = document.createElement('div');
            trail.className = 'particle-trail';
            trail.style.left = x + 'px';
            trail.style.top = y + 'px';
            trail.style.background = colors[Math.floor(Math.random() * colors.length)];
            
            interactiveArea.appendChild(trail);
            
            // Remove trail after animation
            setTimeout(() => {
                if (trail.parentNode) {
                    trail.parentNode.removeChild(trail);
                }
            }, 1000);
        }
    }
    
    // Check magnetic zones
    function checkMagneticZones(mouseX, mouseY) {
        magneticZones.forEach(zone => {
            const rect = zone.getBoundingClientRect();
            const interactiveRect = interactiveArea.getBoundingClientRect();
            const zoneX = rect.left - interactiveRect.left + rect.width / 2;
            const zoneY = rect.top - interactiveRect.top + rect.height / 2;
            
            const distance = Math.sqrt(
                Math.pow(mouseX - zoneX, 2) + Math.pow(mouseY - zoneY, 2)
            );
            
            if (distance < 80) {
                zone.classList.add('active');
                createMagneticParticles(zoneX, zoneY);
            } else {
                zone.classList.remove('active');
            }
        });
    }
    
    // Create magnetic particles
    function createMagneticParticles(x, y) {
        if (Math.random() > 0.8) { // 20% chance
            const particle = document.createElement('div');
            particle.className = 'particle active';
            particle.style.left = (x + (Math.random() - 0.5) * 40) + 'px';
            particle.style.top = (y + (Math.random() - 0.5) * 40) + 'px';
            particle.style.width = (Math.random() * 8 + 4) + 'px';
            particle.style.height = particle.style.width;
            particle.style.background = colors[Math.floor(Math.random() * colors.length)];
            
            interactiveArea.appendChild(particle);
            
            setTimeout(() => {
                if (particle.parentNode) {
                    particle.parentNode.removeChild(particle);
                }
            }, 2000);
        }
    }
    
    // Animate geometric shapes
    function animateShapes(mouseX, mouseY, areaWidth, areaHeight) {
        geometricShapes.forEach((shape, index) => {
            const centerX = areaWidth / 2;
            const centerY = areaHeight / 2;
            
            const deltaX = (mouseX - centerX) / centerX;
            const deltaY = (mouseY - centerY) / centerY;
            
            const moveX = deltaX * (10 + index * 5);
            const moveY = deltaY * (10 + index * 5);
            const rotation = (deltaX + deltaY) * (15 + index * 10);
            
            shape.style.transform = `translate(${moveX}px, ${moveY}px) rotate(${rotation}deg)`;
            shape.style.opacity = 0.2 + Math.abs(deltaX + deltaY) * 0.3;
        });
    }
    
    // Click effect
    interactiveArea.addEventListener('click', function(e) {
        if (isInInteractiveArea) {
            const rect = interactiveArea.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            // Create burst effect
            for (let i = 0; i < 8; i++) {
                setTimeout(() => {
                    const burstParticle = document.createElement('div');
                    burstParticle.className = 'particle active';
                    burstParticle.style.left = x + 'px';
                    burstParticle.style.top = y + 'px';
                    burstParticle.style.width = '12px';
                    burstParticle.style.height = '12px';
                    burstParticle.style.background = colors[Math.floor(Math.random() * colors.length)];
                    
                    const angle = (i / 8) * Math.PI * 2;
                    const velocity = 50;
                    const vx = Math.cos(angle) * velocity;
                    const vy = Math.sin(angle) * velocity;
                    
                    burstParticle.style.transform = `translate(${vx}px, ${vy}px)`;
                    
                    interactiveArea.appendChild(burstParticle);
                    
                    setTimeout(() => {
                        if (burstParticle.parentNode) {
                            burstParticle.parentNode.removeChild(burstParticle);
                        }
                    }, 1500);
                }, i * 50);
            }
        }
    });
    
    // Auto-generate ambient particles
    setInterval(() => {
        if (isInInteractiveArea) {
            const x = Math.random() * interactiveArea.offsetWidth;
            const y = Math.random() * interactiveArea.offsetHeight;
            
            const ambientParticle = document.createElement('div');
            ambientParticle.className = 'particle active';
            ambientParticle.style.left = x + 'px';
            ambientParticle.style.top = y + 'px';
            ambientParticle.style.width = (Math.random() * 6 + 2) + 'px';
            ambientParticle.style.height = ambientParticle.style.width;
            ambientParticle.style.background = colors[Math.floor(Math.random() * colors.length)];
            ambientParticle.style.opacity = '0.3';
            
            interactiveArea.appendChild(ambientParticle);
            
            setTimeout(() => {
                if (ambientParticle.parentNode) {
                    ambientParticle.parentNode.removeChild(ambientParticle);
                }
            }, 3000);
        }
    }, 2000);
});
</script>