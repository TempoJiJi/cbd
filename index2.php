<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GSAP Vertical Project Cards</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #000;
            color: #fff;
            overflow-x: hidden;
        }

        /* Section Header */
        .section-header {
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            z-index: 10;
        }

        .section-subtitle {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #888;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(30px);
        }

        .section-title {
            font-size: clamp(3rem, 10vw, 8rem);
            font-weight: 700;
            line-height: 1;
            background: linear-gradient(135deg, #ffffff 0%, #666666 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            opacity: 0;
            transform: translateY(50px);
        }

        .scroll-indicator {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            opacity: 0;
        }

        .scroll-indicator span {
            display: block;
            width: 24px;
            height: 40px;
            border: 2px solid rgba(255,255,255,0.3);
            border-radius: 12px;
            position: relative;
            margin: 0 auto 10px;
        }

        .scroll-indicator span::before {
            content: '';
            position: absolute;
            top: 6px;
            left: 50%;
            width: 4px;
            height: 10px;
            background: #fff;
            border-radius: 2px;
            transform: translateX(-50%);
            animation: scroll 2s infinite;
        }

        @keyframes scroll {
            0% { transform: translateX(-50%) translateY(0); opacity: 1; }
            100% { transform: translateX(-50%) translateY(15px); opacity: 0; }
        }

        .scroll-text {
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: #666;
        }

        /* Projects Container */
        .projects-container {
            position: relative;
            height: 600vh; /* 6 projects * 100vh */
        }

        /* Project Card Wrapper */
        .project-cards-wrapper {
            position: sticky;
            top: 0;
            height: 100vh;
            overflow: hidden;
        }

        /* Project Card */
        .project-card {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            visibility: hidden;
        }

        .project-card.active {
            opacity: 1;
            visibility: visible;
        }

        .project-content-wrapper {
            max-width: 1200px;
            width: 90%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 80px;
            align-items: center;
        }

        /* Project Image Side */
        .project-image-side {
            position: relative;
            height: 70vh;
            overflow: hidden;
            border-radius: 20px;
        }

        .project-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.2);
        }

        .project-number {
            position: absolute;
            top: 40px;
            left: 40px;
            font-size: 120px;
            font-weight: 700;
            line-height: 1;
            color: rgba(255,255,255,0.1);
            z-index: 1;
        }

        /* Project Info Side */
        .project-info-side {
            padding: 40px;
        }

        .project-category {
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 3px;
            color: #666;
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(20px);
        }

        .project-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            line-height: 1.1;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(30px);
        }

        .project-description {
            font-size: 18px;
            line-height: 1.8;
            color: #999;
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(30px);
        }

        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 40px;
            opacity: 0;
            transform: translateY(30px);
        }

        .tech-tag {
            padding: 8px 20px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 25px;
            font-size: 14px;
            color: #888;
        }

        .project-link {
            display: inline-flex;
            align-items: center;
            padding: 15px 40px;
            font-size: 16px;
            font-weight: 500;
            color: #000;
            background: #fff;
            border-radius: 50px;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            opacity: 0;
            transform: translateY(30px);
            transition: transform 0.3s ease;
        }

        .project-link:hover {
            transform: translateY(-2px);
        }

        .project-link::after {
            content: '→';
            margin-left: 10px;
            transition: transform 0.3s ease;
        }

        .project-link:hover::after {
            transform: translateX(5px);
        }

        /* Progress Indicator */
        .progress-indicator {
            position: fixed;
            right: 50px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
        }

        .progress-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: rgba(255,255,255,0.2);
            margin: 20px 0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .progress-dot.active {
            background: #fff;
            transform: scale(1.5);
        }

        /* Background Elements */
        .bg-gradient {
            position: absolute;
            width: 600px;
            height: 600px;
            border-radius: 50%;
            filter: blur(100px);
            opacity: 0.3;
            pointer-events: none;
        }

        .gradient-1 {
            background: radial-gradient(circle, #4a00e0 0%, transparent 70%);
            top: -300px;
            right: -300px;
        }

        .gradient-2 {
            background: radial-gradient(circle, #8e2de2 0%, transparent 70%);
            bottom: -300px;
            left: -300px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .project-content-wrapper {
                grid-template-columns: 1fr;
                gap: 40px;
                text-align: center;
            }

            .project-image-side {
                height: 40vh;
            }

            .progress-indicator {
                right: 20px;
            }
        }

        @media (max-width: 768px) {
            .section-title {
                font-size: clamp(2.5rem, 12vw, 5rem);
            }

            .project-title {
                font-size: clamp(2rem, 8vw, 3rem);
            }

            .project-number {
                font-size: 80px;
            }

            .project-info-side {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Section Header -->
    <section class="section-header">
        <p class="section-subtitle">Portfolio</p>
        <h1 class="section-title">Our Works</h1>
        <div class="scroll-indicator">
            <span></span>
            <p class="scroll-text">Scroll to explore</p>
        </div>
    </section>

    <!-- Projects Container -->
    <section class="projects-container">
        <div class="project-cards-wrapper">
            <!-- Project 1 -->
            <div class="project-card" data-project="1">
                <div class="project-content-wrapper">
                    <div class="project-image-side">
                        <span class="project-number">01</span>
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1200&h=800&fit=crop" alt="E-Commerce Platform" class="project-image">
                    </div>
                    <div class="project-info-side">
                        <p class="project-category">Web Development</p>
                        <h2 class="project-title">E-Commerce Platform</h2>
                        <p class="project-description">A cutting-edge e-commerce solution that revolutionizes online shopping with AI-powered recommendations and seamless checkout experience.</p>
                        <div class="project-tech">
                            <span class="tech-tag">React</span>
                            <span class="tech-tag">Node.js</span>
                            <span class="tech-tag">MongoDB</span>
                            <span class="tech-tag">Stripe API</span>
                        </div>
                        <a href="#" class="project-link">View Project</a>
                    </div>
                </div>
                <div class="bg-gradient gradient-1"></div>
            </div>

            <!-- Project 2 -->
            <div class="project-card" data-project="2">
                <div class="project-content-wrapper">
                    <div class="project-image-side">
                        <span class="project-number">02</span>
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&h=800&fit=crop" alt="Finance Tracker" class="project-image">
                    </div>
                    <div class="project-info-side">
                        <p class="project-category">Mobile App</p>
                        <h2 class="project-title">Finance Tracker</h2>
                        <p class="project-description">An intuitive mobile application that helps users manage their personal finances with real-time insights and budget tracking.</p>
                        <div class="project-tech">
                            <span class="tech-tag">React Native</span>
                            <span class="tech-tag">Firebase</span>
                            <span class="tech-tag">Chart.js</span>
                            <span class="tech-tag">Plaid API</span>
                        </div>
                        <a href="#" class="project-link">View Project</a>
                    </div>
                </div>
                <div class="bg-gradient gradient-2"></div>
            </div>

            <!-- Project 3 -->
            <div class="project-card" data-project="3">
                <div class="project-content-wrapper">
                    <div class="project-image-side">
                        <span class="project-number">03</span>
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=1200&h=800&fit=crop" alt="Analytics Dashboard" class="project-image">
                    </div>
                    <div class="project-info-side">
                        <p class="project-category">Dashboard Design</p>
                        <h2 class="project-title">Analytics Dashboard</h2>
                        <p class="project-description">A comprehensive analytics platform providing real-time data visualization and actionable insights for business growth.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Vue.js</span>
                            <span class="tech-tag">D3.js</span>
                            <span class="tech-tag">Python</span>
                            <span class="tech-tag">PostgreSQL</span>
                        </div>
                        <a href="#" class="project-link">View Project</a>
                    </div>
                </div>
                <div class="bg-gradient gradient-1"></div>
            </div>

            <!-- Project 4 -->
            <div class="project-card" data-project="4">
                <div class="project-content-wrapper">
                    <div class="project-image-side">
                        <span class="project-number">04</span>
                        <img src="https://images.unsplash.com/photo-1504868584819-f8e8b4b6d7e3?w=1200&h=800&fit=crop" alt="Brand Identity" class="project-image">
                    </div>
                    <div class="project-info-side">
                        <p class="project-category">Branding</p>
                        <h2 class="project-title">Brand Identity</h2>
                        <p class="project-description">A complete brand transformation that captures the essence of modern design while maintaining timeless appeal.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Figma</span>
                            <span class="tech-tag">Illustrator</span>
                            <span class="tech-tag">After Effects</span>
                            <span class="tech-tag">Brand Strategy</span>
                        </div>
                        <a href="#" class="project-link">View Project</a>
                    </div>
                </div>
                <div class="bg-gradient gradient-2"></div>
            </div>

            <!-- Project 5 -->
            <div class="project-card" data-project="5">
                <div class="project-content-wrapper">
                    <div class="project-image-side">
                        <span class="project-number">05</span>
                        <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1200&h=800&fit=crop" alt="SaaS Platform" class="project-image">
                    </div>
                    <div class="project-info-side">
                        <p class="project-category">UI/UX Design</p>
                        <h2 class="project-title">SaaS Platform</h2>
                        <p class="project-description">A user-centered SaaS solution that simplifies complex workflows with intuitive design and powerful features.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Next.js</span>
                            <span class="tech-tag">TypeScript</span>
                            <span class="tech-tag">Tailwind CSS</span>
                            <span class="tech-tag">AWS</span>
                        </div>
                        <a href="#" class="project-link">View Project</a>
                    </div>
                </div>
                <div class="bg-gradient gradient-1"></div>
            </div>

            <!-- Project 6 -->
            <div class="project-card" data-project="6">
                <div class="project-content-wrapper">
                    <div class="project-image-side">
                        <span class="project-number">06</span>
                        <img src="https://images.unsplash.com/photo-1517180102446-f3ece451e9d8?w=1200&h=800&fit=crop" alt="Product Visualization" class="project-image">
                    </div>
                    <div class="project-info-side">
                        <p class="project-category">3D Design</p>
                        <h2 class="project-title">Product Visualization</h2>
                        <p class="project-description">Photorealistic 3D renders that bring products to life with stunning detail and cinematic quality.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Blender</span>
                            <span class="tech-tag">Three.js</span>
                            <span class="tech-tag">WebGL</span>
                            <span class="tech-tag">Cinema 4D</span>
                        </div>
                        <a href="#" class="project-link">View Project</a>
                    </div>
                </div>
                <div class="bg-gradient gradient-2"></div>
            </div>
        </div>

        <!-- Progress Indicator -->
        <div class="progress-indicator">
            <div class="progress-dot active" data-project="1"></div>
            <div class="progress-dot" data-project="2"></div>
            <div class="progress-dot" data-project="3"></div>
            <div class="progress-dot" data-project="4"></div>
            <div class="progress-dot" data-project="5"></div>
            <div class="progress-dot" data-project="6"></div>
        </div>
    </section>

    <!-- GSAP and ScrollTrigger -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script>
        // Register ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Initial animations for header
        const headerTl = gsap.timeline();
        headerTl
            .to('.section-subtitle', {
                opacity: 1,
                y: 0,
                duration: 0.8,
                ease: 'power3.out'
            })
            .to('.section-title', {
                opacity: 1,
                y: 0,
                duration: 1,
                ease: 'power3.out'
            }, '-=0.4')
            .to('.scroll-indicator', {
                opacity: 1,
                duration: 0.8,
                ease: 'power3.out'
            }, '-=0.4');

        // Set up project cards
        const projectCards = document.querySelectorAll('.project-card');
        const progressDots = document.querySelectorAll('.progress-dot');
        const totalProjects = projectCards.length;

        // Set initial states
        gsap.set(projectCards, { opacity: 0, visibility: 'hidden' });
        gsap.set(projectCards[0], { opacity: 1, visibility: 'visible' });

        // Create timeline for each project transition
        projectCards.forEach((card, index) => {
            if (index === 0) {
                // Animate first project on load
                gsap.timeline({ delay: 1.5 })
                    .to(card.querySelector('.project-category'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.6,
                        ease: 'power3.out'
                    })
                    .to(card.querySelector('.project-title'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: 'power3.out'
                    }, '-=0.4')
                    .to(card.querySelector('.project-description'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: 'power3.out'
                    }, '-=0.6')
                    .to(card.querySelector('.project-tech'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: 'power3.out'
                    }, '-=0.6')
                    .to(card.querySelector('.project-link'), {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: 'power3.out'
                    }, '-=0.6')
                    .to(card.querySelector('.project-image'), {
                        scale: 1,
                        duration: 1.5,
                        ease: 'power3.out'
                    }, 0);
            }

            // Create ScrollTrigger for each project
            ScrollTrigger.create({
                trigger: '.projects-container',
                start: `top+=${index * window.innerHeight} top`,
                end: `top+=${(index + 1) * window.innerHeight} top`,
                scrub: 1,
                onEnter: () => animateProject(index),
                onEnterBack: () => animateProject(index),
            });
        });

        function animateProject(index) {
            // Hide all projects
            gsap.to(projectCards, {
                opacity: 0,
                visibility: 'hidden',
                duration: 0.5,
                ease: 'power2.inOut'
            });

            // Show current project
            const currentCard = projectCards[index];
            gsap.to(currentCard, {
                opacity: 1,
                visibility: 'visible',
                duration: 0.5,
                ease: 'power2.inOut'
            });

            // Animate content
            const tl = gsap.timeline();
            tl
                .fromTo(currentCard.querySelector('.project-image'), 
                    { scale: 1.2 },
                    { scale: 1, duration: 1.5, ease: 'power3.out' }
                )
                .fromTo(currentCard.querySelector('.project-category'), 
                    { opacity: 0, y: 20 },
                    { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out' }, 0.2
                )
                .fromTo(currentCard.querySelector('.project-title'), 
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, 0.3
                )
                .fromTo(currentCard.querySelector('.project-description'), 
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, 0.4
                )
                .fromTo(currentCard.querySelector('.project-tech'), 
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, 0.5
                )
                .fromTo(currentCard.querySelector('.project-link'), 
                    { opacity: 0, y: 30 },
                    { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, 0.6
                );

            // Update progress dots
            progressDots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.add('active');
                } else {
                    dot.classList.remove('active');
                }
            });
        }

        // Progress dot click navigation
        progressDots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                const scrollPosition = document.querySelector('.section-header').offsetHeight + (index * window.innerHeight);
                window.scrollTo({
                    top: scrollPosition,
                    behavior: 'smooth'
                });
            });
        });

        // Parallax effect for background gradients
        gsap.utils.toArray('.bg-gradient').forEach((gradient) => {
            gsap.to(gradient, {
                y: -200,
                ease: 'none',
                scrollTrigger: {
                    trigger: gradient.closest('.project-card'),
                    start: 'top bottom',
                    end: 'bottom top',
                    scrub: 1
                }
            });
        });

        // Add hover effect to project links
        document.querySelectorAll('.project-link').forEach(link => {
            link.addEventListener('mouseenter', () => {
                gsap.to(link, {
                    scale: 1.05,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });

            link.addEventListener('mouseleave', () => {
                gsap.to(link, {
                    scale: 1,
                    duration: 0.3,
                    ease: 'power2.out'
                });
            });
        });
    </script>
</body>
</html>