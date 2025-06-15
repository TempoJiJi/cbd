<style>
    .techstack-section {
        padding: 40px 0;
    }

    .techstack-title {
        text-align: center;
        margin-bottom: 40px;
    }

    .techstack-categories {
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .techstack-category {
        text-align: center;
        background-color: rgba(255, 255, 255, 0.05);
        border-radius: 16px;
        padding: 30px 20px;
        transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    }

    .techstack-category:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .techstack-category::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #AFF42B, #5D8C00);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.4s ease;
    }

    .techstack-category:hover::before {
        transform: scaleX(1);
    }

    /* Different colors for different categories */
    .techstack-category:nth-child(1) {
        background-color: rgba(175, 244, 43, 0.05);
    }

    .techstack-category:nth-child(2) {
        background-color: rgba(43, 188, 244, 0.05);
    }

    .techstack-category:nth-child(3) {
        background-color: rgba(244, 43, 143, 0.05);
    }

    .techstack-category:nth-child(4) {
        background-color: rgba(244, 162, 43, 0.05);
    }

    /* Different top border colors */
    .techstack-category:nth-child(1)::before {
        background: linear-gradient(90deg, #AFF42B, #5D8C00);
    }

    .techstack-category:nth-child(2)::before {
        background: linear-gradient(90deg, #2BBCF4, #0069A8);
    }

    .techstack-category:nth-child(3)::before {
        background: linear-gradient(90deg, #F42B8F, #A80057);
    }

    .techstack-category:nth-child(4)::before {
        background: linear-gradient(90deg, #F4A22B, #A86800);
    }

    .category-title {
        font-size: 24px;
        font-weight: 600;
        margin-bottom: 20px;
        color: #333;
        position: relative;
        display: inline-block;
    }

    .tech-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        max-width: 1000px;
        margin: 0 auto;
    }

    .tech-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: all 0.3s ease;
        min-width: 120px;
    }

    .techstack-category:hover .tech-item {
        transform: scale(1.05);
    }

    .tech-icon-wrapper {
        margin-bottom: 12px;
        transition: transform 0.3s ease;
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
        text-align: center;
        line-height: 1.2;
    }

    .techstack-category:hover .tech-name {
        color: #333;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .techstack-section {
            padding: 30px 0;
        }

        .techstack-categories {
            gap: 30px;
        }

        .tech-grid {
            gap: 20px;
        }

        .techstack-icon {
            font-size: 40px;
        }

        .category-title {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .techstack-category {
            padding: 20px 15px;
        }
    }

    @media (max-width: 480px) {
        .tech-grid {
            gap: 15px;
        }

        .techstack-icon {
            font-size: 35px;
        }

        .tech-name {
            font-size: 12px;
        }

        .tech-item {
            min-width: 80px;
        }
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