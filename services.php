<style>
    .services-area-3 {
        background: linear-gradient(135deg, #0E0F11 0%, #1a1b1d 100%);
        position: relative;
        overflow: hidden;
    }

    .services-area-3::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: radial-gradient(circle at 20% 80%, rgba(175, 244, 43, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 20%, rgba(175, 244, 43, 0.05) 0%, transparent 50%);
        pointer-events: none;
        z-index: 1;
    }

    .services-area-inner {
        position: relative;
        z-index: 2;
    }

    .services-section-header {
        text-align: center;
        margin-bottom: 80px;
        position: relative;
    }

    .services-section-header .section-subtitle {
        font-size: 16px;
        font-weight: 500;
        color: #AFF42B;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        display: inline-block;
        position: relative;
    }

    .services-section-header .section-subtitle::before,
    .services-section-header .section-subtitle::after {
        content: '';
        position: absolute;
        top: 50%;
        width: 40px;
        height: 1px;
        background: linear-gradient(90deg, transparent, #AFF42B, transparent);
    }

    .services-section-header .section-subtitle::before {
        left: -60px;
    }

    .services-section-header .section-subtitle::after {
        right: -60px;
    }

    .services-section-header .section-title {
        font-size: clamp(2.5rem, 5vw, 4rem);
        font-weight: 700;
        color: #ffffff;
        line-height: 1.2;
        margin-bottom: 30px;
        background: linear-gradient(135deg, #ffffff 0%, #f0f0f0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .services-section-description {
        font-size: 20px;
        color: #b0b0b0;
        max-width: 600px;
        margin: 0 auto;
        line-height: 1.6;
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 40px;
        margin-top: 80px;
    }

    .service-card {
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 20px;
        padding: 40px;
        position: relative;
        overflow: hidden;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        backdrop-filter: blur(10px);
        cursor: pointer;
        group: hover;
    }

    .service-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(175, 244, 43, 0.1) 0%, rgba(175, 244, 43, 0.05) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .service-card:hover::before {
        opacity: 1;
    }

    .service-card:hover {
        transform: translateY(-10px);
        border-color: rgba(175, 244, 43, 0.3);
        box-shadow: 0 20px 60px rgba(175, 244, 43, 0.1);
    }

    .service-card-content {
        position: relative;
        z-index: 2;
    }

    .service-number {
        font-size: 14px;
        font-weight: 600;
        color: #AFF42B;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 20px;
        display: inline-block;
        padding: 8px 16px;
        background: rgba(175, 244, 43, 0.1);
        border-radius: 20px;
        border: 1px solid rgba(175, 244, 43, 0.2);
    }

    .service-title {
        font-size: 28px;
        font-weight: 700;
        color: #ffffff;
        margin-bottom: 20px;
        line-height: 1.3;
        transition: color 0.3s ease;
    }

    .service-card:hover .service-title {
        color: #AFF42B;
    }

    .service-description {
        font-size: 16px;
        color: #b0b0b0;
        line-height: 1.7;
        margin-bottom: 30px;
    }

    .service-features {
        list-style: none;
        padding: 0;
        margin: 0 0 30px 0;
    }

    .service-features li {
        font-size: 14px;
        color: #d0d0d0;
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
        line-height: 1.5;
    }

    .service-features li::before {
        content: '✓';
        position: absolute;
        left: 0;
        top: 0;
        color: #AFF42B;
        font-weight: bold;
        font-size: 16px;
    }

    .service-cta {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        color: #AFF42B;
        font-size: 16px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 12px 0;
        border-bottom: 2px solid transparent;
    }

    .service-cta:hover {
        color: #ffffff;
        border-bottom-color: #AFF42B;
        transform: translateX(5px);
    }

    .service-cta i {
        transition: transform 0.3s ease;
    }

    .service-cta:hover i {
        transform: translateX(5px);
    }

    .service-video-wrapper {
        margin-top: 30px;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        height: 200px;
        background: rgba(0, 0, 0, 0.3);
    }

    .service-video {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .service-card:hover .service-video {
        transform: scale(1.05);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 30px;
            margin-top: 60px;
        }

        .service-card {
            padding: 30px 25px;
        }

        .services-section-header {
            margin-bottom: 60px;
        }

        .services-section-header .section-subtitle::before,
        .services-section-header .section-subtitle::after {
            display: none;
        }

        .service-title {
            font-size: 24px;
        }

        .service-video-wrapper {
            height: 150px;
        }
    }

    @media (max-width: 480px) {
        .service-card {
            padding: 25px 20px;
        }

        .service-title {
            font-size: 22px;
        }

        .service-description {
            font-size: 15px;
        }
    }

    /* Animation delays for staggered effect */
    .service-card:nth-child(1) {
        animation-delay: 0.1s;
    }

    .service-card:nth-child(2) {
        animation-delay: 0.2s;
    }

    .service-card:nth-child(3) {
        animation-delay: 0.3s;
    }

    .service-card:nth-child(4) {
        animation-delay: 0.4s;
    }
</style>

<section class="services-area-3">
    <div class="services-area-inner section-spacing">
        <div class="container">
            <div class="services-section-header fade-anim">
                <div class="subtitle-wrapper">
                    <span class="section-subtitle">Our Services</span>
                </div>
                <div class="title-wrapper">
                    <h2 class="section-title">Crafting Digital Excellence</h2>
                </div>
                <p class="services-section-description">
                    Transforming ideas into powerful digital solutions with cutting-edge technology and innovative design approaches.
                </p>
            </div>

            <div class="services-grid">
                <div class="service-card fade-anim" data-delay="0.1">
                    <div class="service-card-content">
                        <div class="service-number">Service 01</div>
                        <h3 class="service-title">Web Application Development</h3>
                        <p class="service-description">
                            Custom web applications engineered for performance, scalability, and exceptional user experience. Built with modern frameworks and clean architecture.
                        </p>
                        <ul class="service-features">
                            <li>Responsive & Mobile-First Design</li>
                            <li>RESTful API Development</li>
                            <li>Database Architecture & Optimization</li>
                            <li>Performance & Security Focused</li>
                            <li>Scalable Cloud Infrastructure</li>
                        </ul>
                        <a href="#" class="service-cta">
                            Explore Web Solutions
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="service-video-wrapper">
                            <video loop muted class="service-video video_on_hover">
                                <source src="https://feux.wprealizer.com/wp-content/uploads/2025/04/creative_design.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="service-card fade-anim" data-delay="0.2">
                    <div class="service-card-content">
                        <div class="service-number">Service 02</div>
                        <h3 class="service-title">Mobile App Development</h3>
                        <p class="service-description">
                            Cross-platform mobile applications that deliver native performance with seamless user experiences across iOS and Android platforms.
                        </p>
                        <ul class="service-features">
                            <li>React Native & Flutter Development</li>
                            <li>Native iOS & Android Apps</li>
                            <li>Real-time Features & Push Notifications</li>
                            <li>App Store Optimization</li>
                            <li>Offline Functionality Support</li>
                        </ul>
                        <a href="#" class="service-cta">
                            Discover Mobile Solutions
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="service-video-wrapper">
                            <video loop muted class="service-video video_on_hover">
                                <source src="https://feux.wprealizer.com/wp-content/uploads/2025/04/app_solutions.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="service-card fade-anim" data-delay="0.3">
                    <div class="service-card-content">
                        <div class="service-number">Service 03</div>
                        <h3 class="service-title">E-Commerce Solutions</h3>
                        <p class="service-description">
                            Comprehensive e-commerce platforms designed to maximize conversions with intuitive shopping experiences and robust backend management.
                        </p>
                        <ul class="service-features">
                            <li>Custom Shopping Cart Development</li>
                            <li>Payment Gateway Integration</li>
                            <li>Inventory Management Systems</li>
                            <li>Multi-vendor Marketplace Support</li>
                            <li>Analytics & Reporting Dashboard</li>
                        </ul>
                        <a href="#" class="service-cta">
                            View E-Commerce Solutions
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="service-video-wrapper">
                            <video loop muted class="service-video video_on_hover">
                                <source src="https://feux.wprealizer.com/wp-content/uploads/2025/04/developments.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="service-card fade-anim" data-delay="0.4">
                    <div class="service-card-content">
                        <div class="service-number">Service 04</div>
                        <h3 class="service-title">Full-Stack Development</h3>
                        <p class="service-description">
                            End-to-end development solutions covering everything from database design to user interface, ensuring seamless integration across all layers.
                        </p>
                        <ul class="service-features">
                            <li>Frontend & Backend Development</li>
                            <li>API Design & Integration</li>
                            <li>DevOps & Cloud Deployment</li>
                            <li>Code Review & Quality Assurance</li>
                            <li>Maintenance & Support Services</li>
                        </ul>
                        <a href="#" class="service-cta">
                            Explore Full-Stack Services
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="service-video-wrapper">
                            <video loop muted class="service-video video_on_hover">
                                <source src="https://feux.wprealizer.com/wp-content/uploads/2025/04/ui_ux_solutions.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>