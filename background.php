<div class="geometric-layer">
  <div class="shape" data-shape="1"></div>
  <div class="shape" data-shape="2"></div>
  <div class="shape" data-shape="3"></div>
  <div class="shape" data-shape="4"></div>
  <div class="shape" data-shape="5"></div>
  <div class="shape" data-shape="6"></div>
</div>

<!-- Soft Particles -->
<div class="particles">
  <div class="particle" data-particle="1"></div>
  <div class="particle" data-particle="2"></div>
  <div class="particle" data-particle="3"></div>
  <div class="particle" data-particle="4"></div>
  <div class="particle" data-particle="5"></div>
  <div class="particle" data-particle="6"></div>
  <div class="particle" data-particle="7"></div>
  <div class="particle" data-particle="8"></div>
  <div class="particle" data-particle="9"></div>
  <div class="particle" data-particle="10"></div>
</div>

<script>
// Enhanced Interactive Background Effects
document.addEventListener('DOMContentLoaded', function() {
    const shapes = document.querySelectorAll('.shape');
    const particles = document.querySelectorAll('.particle');
    
    // Add interactive sound effects (optional)
    function playHoverSound() {
        // You can add audio feedback here if desired
        // const audio = new Audio('path/to/hover-sound.mp3');
        // audio.volume = 0.1;
        // audio.play();
    }
    
    // Enhanced shape interactions
    shapes.forEach((shape, index) => {
        shape.addEventListener('mouseenter', function() {
            // Add magnetic effect to nearby shapes
            shapes.forEach((otherShape, otherIndex) => {
                if (otherIndex !== index) {
                    const distance = Math.abs(otherIndex - index);
                    if (distance <= 2) {
                        otherShape.style.transform = `scale(1.1) rotate(${distance * 5}deg)`;
                        otherShape.style.filter = 'brightness(1.2)';
                    }
                }
            });
            
            playHoverSound();
        });
        
        shape.addEventListener('mouseleave', function() {
            // Reset nearby shapes
            shapes.forEach((otherShape, otherIndex) => {
                if (otherIndex !== index) {
                    otherShape.style.transform = '';
                    otherShape.style.filter = '';
                }
            });
        });
        
        // Add click ripple effect
        shape.addEventListener('click', function(e) {
            const ripple = document.createElement('div');
            ripple.style.position = 'absolute';
            ripple.style.borderRadius = '50%';
            ripple.style.background = 'rgba(255, 255, 255, 0.6)';
            ripple.style.transform = 'scale(0)';
            ripple.style.animation = 'ripple 0.6s linear';
            ripple.style.left = '50%';
            ripple.style.top = '50%';
            ripple.style.width = '20px';
            ripple.style.height = '20px';
            ripple.style.marginLeft = '-10px';
            ripple.style.marginTop = '-10px';
            
            shape.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
    });
    
    // Enhanced particle interactions
    particles.forEach((particle, index) => {
        particle.addEventListener('mouseenter', function() {
            // Create trail effect
            const trail = document.createElement('div');
            trail.className = 'particle-trail';
            trail.style.position = 'absolute';
            trail.style.width = '4px';
            trail.style.height = '4px';
            trail.style.background = getComputedStyle(particle).background;
            trail.style.borderRadius = '50%';
            trail.style.left = particle.style.left;
            trail.style.top = particle.style.top;
            trail.style.animation = 'fadeOut 1s ease-out forwards';
            trail.style.pointerEvents = 'none';
            
            particle.parentNode.appendChild(trail);
            
            setTimeout(() => {
                trail.remove();
            }, 1000);
            
            playHoverSound();
        });
        
        // Add particle explosion on click
        particle.addEventListener('click', function(e) {
            const explosion = document.createElement('div');
            explosion.style.position = 'absolute';
            explosion.style.left = '50%';
            explosion.style.top = '50%';
            explosion.style.width = '2px';
            explosion.style.height = '2px';
            explosion.style.background = getComputedStyle(particle).background;
            explosion.style.borderRadius = '50%';
            explosion.style.transform = 'translate(-50%, -50%) scale(0)';
            explosion.style.animation = 'particleExplosion 0.4s ease-out';
            
            particle.appendChild(explosion);
            
            setTimeout(() => {
                explosion.remove();
            }, 400);
        });
    });
    
    // Mouse tracking for enhanced effects
    let mouseX = 0;
    let mouseY = 0;
    
    document.addEventListener('mousemove', function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
        
        // Add subtle magnetic effect based on mouse position
        shapes.forEach(shape => {
            const rect = shape.getBoundingClientRect();
            const centerX = rect.left + rect.width / 2;
            const centerY = rect.top + rect.height / 2;
            const distance = Math.sqrt(Math.pow(mouseX - centerX, 2) + Math.pow(mouseY - centerY, 2));
            
            if (distance < 200) {
                const force = (200 - distance) / 200;
                const angle = Math.atan2(mouseY - centerY, mouseX - centerX);
                const moveX = Math.cos(angle) * force * 10;
                const moveY = Math.sin(angle) * force * 10;
                
                shape.style.transform = `translate(${moveX}px, ${moveY}px) scale(${1 + force * 0.1})`;
            } else {
                shape.style.transform = '';
            }
        });
    });
});

// Add CSS for additional animations
const additionalStyles = `
    @keyframes fadeOut {
        to {
            opacity: 0;
            transform: scale(2);
        }
    }
    
    .particle-trail {
        z-index: -8;
    }
`;

const styleSheet = document.createElement('style');
styleSheet.textContent = additionalStyles;
document.head.appendChild(styleSheet);
</script>