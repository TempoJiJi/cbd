<style>
    .project-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(175, 244, 43, 0.2);
    }
    
    .project-number {
        font-size: 14px;
        font-weight: 600;
        color: #AFF42B;
        letter-spacing: 1px;
    }
    
    .project-title {
        font-size: 32px;
        font-weight: 700;
        color: var(--primary);
        margin: 0;
        letter-spacing: -0.5px;
    }
    
    .project-image-section {
        margin-bottom: 30px;
    }
    
    .project-image {
        width: 100%;
        height: 350px;
        object-fit: cover;
        border-radius: 12px;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    
    .project-image:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }
    
    .service-box-inner.body {
        padding: 40px 0;
    }
    
    .project-content {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 40px;
        align-items: start;
    }
    
    .project-description {
        background: rgba(175, 244, 43, 0.05);
        padding: 30px;
        border-radius: 12px;
        border-left: 4px solid #AFF42B;
    }
    
    .project-text {
        font-size: 18px;
        line-height: 1.6;
        color: var(--secondary);
        margin-bottom: 25px;
        font-weight: 400;
    }
    
    .project-tech-stack {
        margin-bottom: 30px;
    }
    
    .tech-stack-title {
        font-size: 16px;
        font-weight: 600;
        color: var(--primary);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .tech-stack-title::before {
        content: '';
        width: 20px;
        height: 2px;
        background: #AFF42B;
    }
    
    .service-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: grid;
        gap: 12px;
    }
    
    .service-list li {
        background: rgba(255, 255, 255, 0.8);
        padding: 12px 20px;
        border-radius: 8px;
        border-left: 3px solid #AFF42B;
        transition: all 0.3s ease;
    }
    
    .service-list li:hover {
        background: rgba(175, 244, 43, 0.1);
        transform: translateX(5px);
    }
    
    .service-list li a {
        color: var(--primary);
        text-decoration: none;
        font-weight: 500;
        font-size: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .service-list li a::before {
        content: '→';
        color: #AFF42B;
        font-weight: bold;
        transition: transform 0.3s ease;
    }
    
    .service-list li:hover a::before {
        transform: translateX(3px);
    }
    
    .project-actions {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }
    
    .btn-wrapper {
        margin-bottom: 0;
    }
    
    .t-btn {
        background: linear-gradient(135deg, #AFF42B 0%, #8BC34A 100%);
        color: var(--primary);
        padding: 15px 25px;
        border-radius: 10px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        border: none;
        box-shadow: 0 5px 15px rgba(175, 244, 43, 0.3);
    }
    
    .t-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(175, 244, 43, 0.4);
        background: linear-gradient(135deg, #8BC34A 0%, #AFF42B 100%);
    }
    
    .project-meta {
        background: rgba(255, 255, 255, 0.9);
        padding: 20px;
        border-radius: 10px;
        border: 1px solid rgba(175, 244, 43, 0.2);
    }
    
    .meta-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }
    
    .meta-item:last-child {
        border-bottom: none;
    }
    
    .meta-label {
        font-weight: 600;
        color: var(--primary);
        font-size: 14px;
    }
    
    .meta-value {
        color: var(--secondary);
        font-size: 14px;
    }
    
    @media (max-width: 768px) {
        .project-content {
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        .project-image {
            height: 250px;
        }
        
        .project-title {
            font-size: 24px;
        }
        
        .project-description {
            padding: 20px;
        }
        
        .project-text {
            font-size: 16px;
        }
        
        .service-list li {
            padding: 10px 15px;
        }
    }
    
    @media (max-width: 480px) {
        .project-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }
        
        .project-image {
            height: 200px;
        }
        
        .project-title {
            font-size: 20px;
        }
    }
</style>

<section class="service-area">
    <div class="service-area-inner section-spacing-top">
        <div class="container">
            <div class="section-header">
                <div class="section-title-wrapper fade-anim">
                    <div class="title-wrapper">
                        <h1 class="section-title cbd-section-title">Selected Works</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-wrapper-box">
            <div class="services-wrapper header-stacking-items">
                <div class="service-box-1 item">
                    <div class="container">
                        <div class="service-box-inner body">
                            <div class="project-header">
                                <div>
                                    <div class="project-number">(01)</div>
                                    <h3 class="project-title">Lavieflo</h3>
                                </div>
                            </div>
                            
                            <div class="project-image-section">
                                <img src="assets/imgs/project/lavieflo.png" alt="Lavieflo Project" class="project-image">
                            </div>
                            
                            <div class="project-content">
                                <div class="project-description">
                                    <p class="project-text">A comprehensive e-commerce platform for flower delivery services featuring real-time order tracking, inventory management, and seamless payment integration. Built with modern web technologies to provide an exceptional user experience.</p>
                                    
                                    <div class="project-tech-stack">
                                        <h4 class="tech-stack-title">Technologies Used</h4>
                                        <ul class="service-list">
                                            <li><a href="service-details.html">E-commerce Development</a></li>
                                            <li><a href="service-details.html">Payment Gateway Integration</a></li>
                                            <li><a href="service-details.html">Real-time Order Tracking</a></li>
                                            <li><a href="service-details.html">Inventory Management System</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="project-actions">
                                    <div class="btn-wrapper">
                                        <a href="contact.html" class="t-btn">
                                            <span>View Project</span>
                                            <svg width="20" height="20" viewBox="0 0 123 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67648 102.817L94.6863 16.8148H0.999996V0.999997H122V108.409H106V27.9975L18.9902 114L7.67648 102.817Z" stroke="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                    
                                    <div class="project-meta">
                                        <div class="meta-item">
                                            <span class="meta-label">Project Type</span>
                                            <span class="meta-value">E-commerce Platform</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="meta-label">Duration</span>
                                            <span class="meta-value">3 Months</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="meta-label">Status</span>
                                            <span class="meta-value">Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-box-1 item">
                    <div class="container">
                        <div class="service-box-inner body">
                            <div class="project-header">
                                <div>
                                    <div class="project-number">(02)</div>
                                    <h3 class="project-title">NZON</h3>
                                </div>
                            </div>
                            
                            <div class="project-image-section">
                                <img src="assets/imgs/project/nzon.png" alt="NZON Project" class="project-image">
                            </div>
                            
                            <div class="project-content">
                                <div class="project-description">
                                    <p class="project-text">Modern mobile application for social networking with advanced features including real-time messaging, content sharing, and community building tools. Designed with a focus on user engagement and seamless social interactions.</p>
                                    
                                    <div class="project-tech-stack">
                                        <h4 class="tech-stack-title">Technologies Used</h4>
                                        <ul class="service-list">
                                            <li><a href="service-details.html">Mobile App Development</a></li>
                                            <li><a href="service-details.html">Real-time Chat System</a></li>
                                            <li><a href="service-details.html">Social Media Features</a></li>
                                            <li><a href="service-details.html">Push Notifications</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="project-actions">
                                    <div class="btn-wrapper">
                                        <a href="contact.html" class="t-btn">
                                            <span>View Project</span>
                                            <svg width="20" height="20" viewBox="0 0 123 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67648 102.817L94.6863 16.8148H0.999996V0.999997H122V108.409H106V27.9975L18.9902 114L7.67648 102.817Z" stroke="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                    
                                    <div class="project-meta">
                                        <div class="meta-item">
                                            <span class="meta-label">Project Type</span>
                                            <span class="meta-value">Mobile Application</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="meta-label">Duration</span>
                                            <span class="meta-value">4 Months</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="meta-label">Status</span>
                                            <span class="meta-value">Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-box-1 item">
                    <div class="container">
                        <div class="service-box-inner body">
                            <div class="project-header">
                                <div>
                                    <div class="project-number">(03)</div>
                                    <h3 class="project-title">FatBear</h3>
                                </div>
                            </div>
                            
                            <div class="project-image-section">
                                <img src="assets/imgs/project/fatbear.png" alt="FatBear Project" class="project-image">
                            </div>
                            
                            <div class="project-content">
                                <div class="project-description">
                                    <p class="project-text">Interactive gaming platform featuring engaging gameplay mechanics, multiplayer capabilities, and immersive user interface. Built to deliver an exceptional gaming experience with smooth performance and intuitive controls.</p>
                                    
                                    <div class="project-tech-stack">
                                        <h4 class="tech-stack-title">Technologies Used</h4>
                                        <ul class="service-list">
                                            <li><a href="service-details.html">Game Development</a></li>
                                            <li><a href="service-details.html">Multiplayer System</a></li>
                                            <li><a href="service-details.html">Interactive UI/UX Design</a></li>
                                            <li><a href="service-details.html">Performance Optimization</a></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="project-actions">
                                    <div class="btn-wrapper">
                                        <a href="contact.html" class="t-btn">
                                            <span>View Project</span>
                                            <svg width="20" height="20" viewBox="0 0 123 115" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.67648 102.817L94.6863 16.8148H0.999996V0.999997H122V108.409H106V27.9975L18.9902 114L7.67648 102.817Z" stroke="currentColor" />
                                            </svg>
                                        </a>
                                    </div>
                                    
                                    <div class="project-meta">
                                        <div class="meta-item">
                                            <span class="meta-label">Project Type</span>
                                            <span class="meta-value">Gaming Platform</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="meta-label">Duration</span>
                                            <span class="meta-value">5 Months</span>
                                        </div>
                                        <div class="meta-item">
                                            <span class="meta-label">Status</span>
                                            <span class="meta-value">Completed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="final"></div>
    </div>
</section>