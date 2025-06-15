<style>
    .techstack-section {
        padding: 40px 0;
        /* Reduced from 80px to 40px */
    }

    .techstack-title {
        text-align: center;
        margin-bottom: 40px;
        /* Reduced from 60px to 40px */
    }

    .techstack-categories {
        display: flex;
        flex-direction: column;
        gap: 40px;
        /* Reduced from 60px to 40px */
    }

    .techstack-category {
        text-align: center;
    }

    .category-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
        /* Reduced from 30px to 20px */
        color: #333;
        position: relative;
        display: inline-block;
    }

    .category-title::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 2px;
        border-radius: 1px;
    }

    .tech-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        /* Center align items */
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .tech-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 20px;
        border-radius: 12px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        background: transparent;
        position: relative;
        overflow: hidden;
        min-width: 120px;
        /* Ensure consistent width */
    }

    .tech-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        /* background: linear-gradient(135deg, rgba(0, 122, 255, 0.05), rgba(0, 212, 255, 0.05)); */
        border-radius: 12px;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: 1;
    }

    .tech-item:hover::before {
        opacity: 1;
    }

    .tech-item:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 122, 255, 0.15);
    }

    .tech-icon-wrapper {
        position: relative;
        z-index: 2;
        margin-bottom: 12px;
        transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .tech-item:hover .tech-icon-wrapper {
        transform: scale(1.1) rotate(5deg);
    }

    .techstack-icon {
        font-size: 50px;
        transition: all 0.3s ease;
    }

    .tech-name {
        font-size: 14px;
        font-weight: 500;
        color: #666;
        transition: color 0.3s ease;
        position: relative;
        z-index: 2;
        text-align: center;
        line-height: 1.2;
    }

    .tech-item:hover .tech-name {
        color: #333;
        font-weight: 600;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .techstack-section {
            padding: 30px 0;
            /* Reduced for mobile */
        }

        .techstack-categories {
            gap: 30px;
            /* Reduced for mobile */
        }

        .tech-grid {
            gap: 20px;
        }

        .techstack-icon {
            font-size: 50px;
        }

        .category-title {
            font-size: 20px;
            margin-bottom: 15px;
            /* Reduced for mobile */
        }

        .tech-item {
            padding: 15px;
            min-width: 100px;
        }
    }

    @media (max-width: 480px) {
        .tech-grid {
            gap: 15px;
        }

        .techstack-icon {
            font-size: 40px;
        }

        .tech-name {
            font-size: 12px;
        }

        .tech-item {
            min-width: 80px;
        }
    }

    /* Animation delays for staggered effect */
    .tech-item:nth-child(1) {
        animation-delay: 0.1s;
    }

    .tech-item:nth-child(2) {
        animation-delay: 0.2s;
    }

    .tech-item:nth-child(3) {
        animation-delay: 0.3s;
    }

    .tech-item:nth-child(4) {
        animation-delay: 0.4s;
    }

    .tech-item:nth-child(5) {
        animation-delay: 0.5s;
    }

    .tech-item:nth-child(6) {
        animation-delay: 0.6s;
    }
</style>

<section class="techstack-section">
    <div class="container">
        <div class="section-spacing">
            <div class="section-header">
                <div class="section-title-wrapper fade-anim">
                    <div class="title-wrapper techstack-title">
                        <h2 class="section-title">My Technology Stack</h2>
                    </div>
                </div>
            </div>

            <div class="techstack-categories">
                <!-- Languages & Core Technologies -->
                <div class="techstack-category fade-anim" data-delay="0">
                    <h3 class="category-title">Languages & Core Technologies</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-php-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">PHP</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-nodejs-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Node.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-javascript-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">JavaScript</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-typescript-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">TypeScript</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-html5-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">HTML5</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-css3-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">CSS3</span>
                        </div>
                    </div>
                </div>

                <!-- Frameworks & Libraries -->
                <div class="techstack-category fade-anim" data-delay="0">
                    <h3 class="category-title">Frameworks & Libraries</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-laravel-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Laravel</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-zend-original colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Zend</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-react-original colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">React</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-nextjs-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Next.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-express-original techstack-icon"></i>
                            </div>
                            <span class="tech-name">Express.js</span>
                        </div>
                    </div>
                </div>

                <!-- Databases & Caching -->
                <div class="techstack-category fade-anim" data-delay="0">
                    <h3 class="category-title">Databases & Caching</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-mysql-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">MySQL</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-mongodb-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">MongoDB</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-redis-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Redis</span>
                        </div>
                    </div>
                </div>

                <!-- DevOps & Infrastructure -->
                <div class="techstack-category fade-anim" data-delay="0">
                    <h3 class="category-title">DevOps & Infrastructure</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-apache-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Apache</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-nginx-original colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Nginx</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-docker-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Docker</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-amazonwebservices-plain-wordmark colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">AWS</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>