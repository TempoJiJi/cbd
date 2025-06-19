<style>
    .header-sticky {
        padding-top: 24px;
    }

    /* Theme Toggle Button Styles */
    .theme-toggle-btn {
        position: relative;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        border: 2px solid #fc7c82;
        background: linear-gradient(135deg, #fc7c82 0%, #fb923c 100%);
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(252, 124, 130, 0.3);
    }

    .theme-toggle-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 25px rgba(252, 124, 130, 0.4);
        border-color: #fb923c;
    }

    .theme-toggle-btn:active {
        transform: translateY(0);
        transition: transform 0.1s;
    }

    /* Icon Container */
    .theme-icon-container {
        position: relative;
        width: 24px;
        height: 24px;
    }

    /* Sun and Moon Icons */
    .theme-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 20px;
        color: #fff;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .sun-icon {
        opacity: 1;
        transform: translate(-50%, -50%) rotate(0deg) scale(1);
    }

    .moon-icon {
        opacity: 0;
        transform: translate(-50%, -50%) rotate(180deg) scale(0.5);
    }

    /* Dark theme styles */
    [data-theme="dark"] .theme-toggle-btn {
        background: linear-gradient(135deg, #4a5568 0%, #2d3748 100%);
        border-color: #a26eec;
        box-shadow: 0 4px 15px rgba(162, 110, 236, 0.3);
    }

    [data-theme="dark"] .theme-toggle-btn:hover {
        box-shadow: 0 8px 25px rgba(162, 110, 236, 0.4);
        border-color: #8b7cf6;
    }

    [data-theme="dark"] .sun-icon {
        opacity: 0;
        transform: translate(-50%, -50%) rotate(-180deg) scale(0.5);
    }

    [data-theme="dark"] .moon-icon {
        opacity: 1;
        transform: translate(-50%, -50%) rotate(0deg) scale(1);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .theme-toggle-btn {
            width: 45px;
            height: 45px;
        }

        .theme-icon {
            font-size: 16px;
        }
    }

    /* Loading state animation */
    .theme-toggle-btn.loading {
        animation: pulse 1s infinite;
    }

    @keyframes pulse {

        0%,
        100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }
    }

    /* Accessibility improvements */
    .theme-toggle-btn:focus {
        outline: 2px solid #fc7c82;
        outline-offset: 2px;
    }

    [data-theme="dark"] .theme-toggle-btn:focus {
        outline-color: #a26eec;
    }

    /* Tooltip */
    .theme-toggle-btn::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: -35px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.8);
        color: white;
        padding: 4px 8px;
        border-radius: 4px;
        font-size: 12px;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
        z-index: 1000;
    }

    .theme-toggle-btn:hover::before {
        opacity: 1;
    }

    [data-theme="dark"] .theme-toggle-btn::before {
        background: rgba(255, 255, 255, 0.9);
        color: black;
    }
</style>

<header class="header-area-4">
    <div class="header-main header-sticky">
        <div class="container">
            <div style="background-color: var(--cbd-primary) " class="header-area-4-inner">
                <div class="header-logo">
                    <!-- <a href="index.html">
                        <img src="" class="normal-logo" alt="Site Logo">
                    </a> -->
                </div>
                <div class="header-nav pos-center">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="#about_section">About Me</a></li>
                            <li><a href="#teckstack_section">Tech Stack</a></li>
                            <li><a href="#work_section">Works</a></li>
                            <li><a href="#service_section">Services</a></li>
                            <!-- <li><a href="#testimonial_section">Testimonial</a></li> -->
                            <li><a href="#footer_section">Contact</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="header-button">
                    <button id="theme-toggle" class="theme-toggle-btn" data-tooltip="Switch Theme" aria-label="Toggle between light and dark theme">
                        <div class="theme-icon-container">
                            <i class="fas fa-sun theme-icon sun-icon"></i>
                            <i class="fas fa-moon theme-icon moon-icon"></i>
                        </div>
                    </button>
                </div>
                <!-- <div class="header-offcanvas d-xl-none">
                    <button class="side-toggle">
                        <img src="assets/imgs/icon/icon-4.webp" alt="image"></button>
                </div> -->
            </div>
        </div>
    </div>
</header>