<style>
    .techstack-section {
        padding: 60px 0;
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
        overflow: hidden;
    }

    .techstack-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: 
            radial-gradient(circle at 20% 20%, rgba(59, 130, 246, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 80% 80%, rgba(16, 185, 129, 0.05) 0%, transparent 50%),
            radial-gradient(circle at 40% 60%, rgba(139, 92, 246, 0.03) 0%, transparent 50%);
        pointer-events: none;
    }

    .techstack-title {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }

    .techstack-title .section-title {
        background: linear-gradient(135deg, #1e293b, #475569);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        position: relative;
        display: inline-block;
    }

    .techstack-title .section-title::after {
        content: '';
        position: absolute;
        bottom: -15px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 4px;
        background: linear-gradient(90deg, #3b82f6, #10b981, #8b5cf6);
        border-radius: 2px;
        animation: shimmer 2s ease-in-out infinite;
    }

    @keyframes shimmer {
        0%, 100% { opacity: 1; transform: translateX(-50%) scaleX(1); }
        50% { opacity: 0.7; transform: translateX(-50%) scaleX(1.1); }
    }

    .techstack-categories {
        display: flex;
        flex-direction: column;
        gap: 60px;
        position: relative;
        z-index: 1;
    }

    .techstack-category {
        text-align: center;
        opacity: 0;
        transform: translateY(30px);
        animation: fadeInUp 0.8s ease-out forwards;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .category-title {
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 35px;
        color: #1e293b;
        position: relative;
        display: inline-block;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .category-title::before {
        content: '';
        position: absolute;
        top: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 3px;
        background: linear-gradient(90deg, #3b82f6, #8b5cf6);
        border-radius: 2px;
    }

    .category-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 60px;
        height: 2px;
        background: linear-gradient(90deg, #10b981, #06b6d4);
        border-radius: 1px;
    }

    .tech-grid {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        max-width: 900px;
        margin: 0 auto;
    }

    .tech-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 25px 20px;
        border-radius: 20px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        cursor: pointer;
        background: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        position: relative;
        overflow: hidden;
        min-width: 130px;
        opacity: 0;
        transform: translateY(20px) scale(0.9);
        animation: techItemAppear 0.6s ease-out forwards;
    }

    @keyframes techItemAppear {
        to {
            opacity: 1;
            transform: translateY(0) scale(1);
        }
    }

    .tech-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
        transition: left 0.6s ease;
    }

    .tech-item:hover::before {
        left: 100%;
    }

    .tech-item::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, 
            rgba(59, 130, 246, 0.1), 
            rgba(16, 185, 129, 0.1), 
            rgba(139, 92, 246, 0.1));
        border-radius: 20px;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 1;
    }

    .tech-item:hover::after {
        opacity: 1;
    }

    .tech-item:hover {
        transform: translateY(-12px) scale(1.05);
        box-shadow: 
            0 25px 50px rgba(0, 0, 0, 0.1),
            0 0 0 1px rgba(255, 255, 255, 0.3),
            inset 0 1px 0 rgba(255, 255, 255, 0.4);
        background: rgba(255, 255, 255, 0.95);
    }

    .tech-icon-wrapper {
        position: relative;
        z-index: 2;
        margin-bottom: 15px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80px;
        height: 80px;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(5px);
    }

    .tech-item:hover .tech-icon-wrapper {
        transform: scale(1.15) rotate(10deg);
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .techstack-icon {
        font-size: 45px;
        transition: all 0.4s ease;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }

    .tech-item:hover .techstack-icon {
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.15));
    }

    .tech-name {
        font-size: 14px;
        font-weight: 600;
        color: #475569;
        transition: all 0.4s ease;
        position: relative;
        z-index: 2;
        text-align: center;
        line-height: 1.2;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .tech-item:hover .tech-name {
        color: #1e293b;
        font-weight: 700;
        transform: translateY(-2px);
    }

    /* Floating animation for icons */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }

    .tech-item:nth-child(odd) .tech-icon-wrapper {
        animation: float 3s ease-in-out infinite;
    }

    .tech-item:nth-child(even) .tech-icon-wrapper {
        animation: float 3s ease-in-out infinite reverse;
    }

    /* Staggered animation delays */
    .tech-item:nth-child(1) { animation-delay: 0.1s; }
    .tech-item:nth-child(2) { animation-delay: 0.2s; }
    .tech-item:nth-child(3) { animation-delay: 0.3s; }
    .tech-item:nth-child(4) { animation-delay: 0.4s; }
    .tech-item:nth-child(5) { animation-delay: 0.5s; }
    .tech-item:nth-child(6) { animation-delay: 0.6s; }
    .tech-item:nth-child(7) { animation-delay: 0.7s; }
    .tech-item:nth-child(8) { animation-delay: 0.8s; }

    /* Category staggered delays */
    .techstack-category:nth-child(1) { animation-delay: 0.2s; }
    .techstack-category:nth-child(2) { animation-delay: 0.4s; }
    .techstack-category:nth-child(3) { animation-delay: 0.6s; }
    .techstack-category:nth-child(4) { animation-delay: 0.8s; }

    /* Responsive Design */
    @media (max-width: 768px) {
        .techstack-section {
            padding: 40px 0;
        }
        
        .techstack-categories {
            gap: 40px;
        }
        
        .tech-grid {
            gap: 20px;
        }
        
        .techstack-icon {
            font-size: 35px;
        }
        
        .category-title {
            font-size: 22px;
            margin-bottom: 25px;
        }
        
        .tech-item {
            padding: 20px 15px;
            min-width: 110px;
        }

        .tech-icon-wrapper {
            width: 65px;
            height: 65px;
        }
    }

    @media (max-width: 480px) {
        .tech-grid {
            gap: 15px;
        }
        
        .techstack-icon {
            font-size: 30px;
        }
        
        .tech-name {
            font-size: 12px;
        }
        
        .tech-item {
            min-width: 90px;
            padding: 15px 10px;
        }

        .tech-icon-wrapper {
            width: 55px;
            height: 55px;
        }

        .category-title {
            font-size: 18px;
        }
    }

    /* Pulse effect for category titles */
    @keyframes pulse {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.02); }
    }

    .category-title:hover {
        animation: pulse 1s ease-in-out infinite;
    }

    /* Gradient text for special icons */
    .tech-item:hover .devicon-nextjs-original,
    .tech-item:hover .devicon-express-original,
    .tech-item:hover .devicon-linux-plain {
        background: linear-gradient(135deg, #3b82f6, #8b5cf6);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
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
                <div class="techstack-category">
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
                                <i class="devicon-python-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Python</span>
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
                <div class="techstack-category">
                    <h3 class="category-title">Frameworks & Libraries</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-react-original colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">React</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-nextjs-original techstack-icon"></i>
                            </div>
                            <span class="tech-name">Next.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-nodejs-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Node.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-laravel-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Laravel</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-express-original techstack-icon"></i>
                            </div>
                            <span class="tech-name">Express.js</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-tailwindcss-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Tailwind CSS</span>
                        </div>
                    </div>
                </div>

                <!-- Databases & Caching -->
                <div class="techstack-category">
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
                                <i class="devicon-postgresql-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">PostgreSQL</span>
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
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-sqlite-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">SQLite</span>
                        </div>
                    </div>
                </div>

                <!-- DevOps & Infrastructure -->
                <div class="techstack-category">
                    <h3 class="category-title">DevOps & Infrastructure</h3>
                    <div class="tech-grid">
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-docker-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Docker</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-amazonwebservices-original colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">AWS</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-nginx-original colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Nginx</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-git-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">Git</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-linux-plain techstack-icon"></i>
                            </div>
                            <span class="tech-name">Linux</span>
                        </div>
                        <div class="tech-item">
                            <div class="tech-icon-wrapper">
                                <i class="devicon-digitalocean-plain colored techstack-icon"></i>
                            </div>
                            <span class="tech-name">DigitalOcean</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>