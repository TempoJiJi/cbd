<style>
    /* Enhanced Header Styles */
    .header-area-4 {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .header-sticky {
        padding: 20px 0;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .header-sticky.sticky {
        padding: 15px 0;
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
    }

    .header-area-4-inner {
        background: rgba(255, 255, 255, 0.95);
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 60px;
        padding: 15px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    /* Dark theme header */
    [data-theme="dark"] .header-area-4-inner {
        background: rgba(14, 15, 17, 0.95);
        border-color: rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
    }

    /* Header Logo */
    .header-logo {
        display: flex;
        align-items: center;
        font-family: 'Montserrat Alternates', sans-serif;
        font-weight: 700;
        font-size: 24px;
        color: #0E0F11;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
    }

    .header-logo::before {
        content: '';
        position: absolute;
        left: -10px;
        top: 50%;
        transform: translateY(-50%);
        width: 6px;
        height: 6px;
        background: linear-gradient(135deg, #fb923c, #fc7c82);
        border-radius: 50%;
        transition: all 0.3s ease;
    }

    .header-logo:hover::before {
        transform: translateY(-50%) scale(1.5);
        box-shadow: 0 0 15px rgba(251, 146, 60, 0.6);
    }

    [data-theme="dark"] .header-logo {
        color: #FFFFFF;
    }

    [data-theme="dark"] .header-logo::before {
        background: linear-gradient(135deg, #a26eec, #33f6b3);
    }

    /* Navigation Menu */
    .header-nav {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .main-menu > ul {
        display: flex;
        align-items: center;
        gap: 40px;
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .main-menu li a {
        font-family: 'Inter', sans-serif;
        font-weight: 500;
        font-size: 16px;
        color: #525355;
        text-decoration: none;
        padding: 12px 20px;
        border-radius: 30px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
    }

    .main-menu li a::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, #fb923c, #fc7c82);
        border-radius: 30px;
        opacity: 0;
        transform: scale(0.8);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        z-index: -1;
    }

    .main-menu li a:hover {
        color: #FFFFFF;
        transform: translateY(-2px);
    }

    .main-menu li a:hover::before {
        opacity: 1;
        transform: scale(1);
    }

    /* Dark theme navigation */
    [data-theme="dark"] .main-menu li a {
        color: #E5E5E5;
    }

    [data-theme="dark"] .main-menu li a::before {
        background: linear-gradient(135deg, #a26eec, #33f6b3);
    }

    [data-theme="dark"] .main-menu li a:hover {
        color: #FFFFFF;
    }

    /* Active menu item */
    .main-menu li a.active {
        color: #FFFFFF;
        background: linear-gradient(135deg, #fb923c, #fc7c82);
    }

    [data-theme="dark"] .main-menu li a.active {
        background: linear-gradient(135deg, #a26eec, #33f6b3);
    }

    /* Theme Toggle Button */
    .theme-toggle-btn {
        position: relative;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: linear-gradient(135deg, #fb923c, #fc7c82);
        border: none;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(251, 146, 60, 0.3);
    }

    .theme-toggle-btn:hover {
        transform: translateY(-3px) scale(1.05);
        box-shadow: 0 8px 25px rgba(251, 146, 60, 0.4);
    }

    .theme-toggle-btn:active {
        transform: translateY(-1px) scale(1.02);
        transition: transform 0.1s;
    }

    /* Dark theme toggle button */
    [data-theme="dark"] .theme-toggle-btn {
        background: linear-gradient(135deg, #a26eec, #33f6b3);
        box-shadow: 0 4px 15px rgba(162, 110, 236, 0.3);
    }

    [data-theme="dark"] .theme-toggle-btn:hover {
        box-shadow: 0 8px 25px rgba(162, 110, 236, 0.4);
    }

    /* Icon Container */
    .theme-icon-container {
        position: relative;
        width: 24px;
        height: 24px;
    }

    .theme-icon {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 18px;
        color: #FFFFFF;
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

    [data-theme="dark"] .sun-icon {
        opacity: 0;
        transform: translate(-50%, -50%) rotate(-180deg) scale(0.5);
    }

    [data-theme="dark"] .moon-icon {
        opacity: 1;
        transform: translate(-50%, -50%) rotate(0deg) scale(1);
    }

    /* Header Button Group */
    .header-button {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    /* Mobile Menu Toggle */
    .mobile-menu-toggle {
        display: none;
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: linear-gradient(135deg, #fb923c, #fc7c82);
        border: none;
        cursor: pointer;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    [data-theme="dark"] .mobile-menu-toggle {
        background: linear-gradient(135deg, #a26eec, #33f6b3);
    }

    .mobile-menu-toggle i {
        color: #FFFFFF;
        font-size: 18px;
    }

    /* Responsive Design */
    @media (max-width: 1199px) {
        .main-menu > ul {
            gap: 30px;
        }

        .main-menu li a {
            font-size: 15px;
            padding: 10px 16px;
        }
    }

    @media (max-width: 991px) {
        .header-nav {
            display: none;
        }

        .mobile-menu-toggle {
            display: flex;
        }

        .header-area-4-inner {
            padding: 12px 25px;
        }

        .theme-toggle-btn {
            width: 45px;
            height: 45px;
        }

        .theme-icon {
            font-size: 16px;
        }
    }

    @media (max-width: 768px) {
        .header-sticky {
            padding: 15px 0;
        }

        .header-area-4-inner {
            border-radius: 50px;
            padding: 10px 20px;
        }

        .header-logo {
            font-size: 20px;
        }

        .theme-toggle-btn {
            width: 40px;
            height: 40px;
        }

        .theme-icon {
            font-size: 14px;
        }
    }

    /* Smooth scroll behavior */
    html {
        scroll-behavior: smooth;
    }

    /* Header animation on scroll */
    .header-sticky.sticky .header-area-4-inner {
        transform: scale(0.98);
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
    }

    [data-theme="dark"] .header-sticky.sticky .header-area-4-inner {
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.4);
    }

    /* Focus states for accessibility */
    .theme-toggle-btn:focus,
    .main-menu li a:focus {
        outline: 2px solid #fb923c;
        outline-offset: 2px;
    }

    [data-theme="dark"] .theme-toggle-btn:focus,
    [data-theme="dark"] .main-menu li a:focus {
        outline-color: #a26eec;
    }

    /* Logo hover effect */
    .header-logo:hover {
        transform: translateY(-1px);
        color: #fb923c;
    }

    [data-theme="dark"] .header-logo:hover {
        color: #a26eec;
    }

    /* Tooltip for theme toggle */
    .theme-toggle-btn::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: -40px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.9);
        color: white;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 500;
        white-space: nowrap;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s;
        z-index: 1000;
        font-family: 'Inter', sans-serif;
    }

    .theme-toggle-btn:hover::before {
        opacity: 1;
    }

    [data-theme="dark"] .theme-toggle-btn::before {
        background: rgba(255, 255, 255, 0.9);
        color: black;
    }

    /* Header background blur effect */
    .header-area-4-inner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: inherit;
        border-radius: inherit;
        z-index: -1;
    }
</style>

<header class="header-area-4">
    <div class="header-main header-sticky">
        <div class="container">
            <div class="header-area-4-inner">
                <div class="header-logo">
                    <a href="#" class="header-logo">
                        Codes By Dawson
                    </a>
                </div>
                
                <div class="header-nav pos-center">
                    <nav class="main-menu">
                        <ul>
                            <li><a href="#about_section">About Me</a></li>
                            <li><a href="#teckstack_section">Tech Stack</a></li>
                            <li><a href="#work_section">Works</a></li>
                            <li><a href="#service_section">Services</a></li>
                            <li><a href="#footer_section">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                
                <div class="header-button">
                    <button class="mobile-menu-toggle d-lg-none">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <button id="theme-toggle" class="theme-toggle-btn" data-tooltip="Switch Theme" aria-label="Toggle between light and dark theme">
                        <div class="theme-icon-container">
                            <i class="fas fa-sun theme-icon sun-icon"></i>
                            <i class="fas fa-moon theme-icon moon-icon"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>