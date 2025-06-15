<?php
$projects = [
    [
        'number' => '01',
        'title' => 'Lavieflo',
        'description' => 'website',
        'image' => 'assets/imgs/project/lavieflo.png',
        'link' => ''
    ],
    [
        'number' => '02',
        'title' => 'NZON',
        'description' => 'mobile app',
        'image' => 'assets/imgs/project/nzon.png',
        'link' => ''
    ],
    [
        'number' => '03',
        'title' => 'Fatbear',
        'description' => 'back off',
        'image' => 'assets/imgs/project/fatbear.png',
        'link' => ''
    ],

]

?>

<style>
    .project-image {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .project-image:hover {
        transform: scale(1.02);
    }

    .service-box-inner.body {
        display: flex;
        gap: 30px;
        align-items: center;
        min-height: 400px;
    }

    .project-content {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 20px;
        justify-content: center;
    }

    .project-number-title {
        margin-bottom: 15px;
    }

    .project-description {
        margin-bottom: 15px;
    }

    .project-buttons {
        margin-top: 10px;
    }

    .project-image-wrapper {
        flex: 1;
        max-width: 800px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .project-image-wrapper img {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    /* Sticky title styles */
    .works-section-header {
        position: sticky;
        top: 0;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        z-index: 100;
        padding: 20px 0;
        margin-bottom: 0;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .works-section-header.scrolled {
        background: rgba(255, 255, 255, 0.98);
        box-shadow: 0 2px 20px rgba(0, 0, 0, 0.1);
    }

    .works-section-header .section-title {
        margin: 0;
        font-size: 48px;
        transition: font-size 0.3s ease;
    }

    .works-section-header.scrolled .section-title {
        font-size: 36px;
    }

    @media (max-width: 768px) {
        .service-box-inner.body {
            flex-direction: column;
            gap: 20px;
            align-items: stretch;
            min-height: auto;
        }

        .project-content {
            gap: 15px;
            justify-content: flex-start;
        }

        .project-number-title {
            margin-bottom: 10px;
        }

        .project-description {
            margin-bottom: 10px;
        }

        .project-image {
            height: 200px;
        }

        .project-image-wrapper {
            justify-content: center;
        }

        .works-section-header .section-title {
            font-size: 36px;
        }

        .works-section-header.scrolled .section-title {
            font-size: 28px;
        }
    }
</style>

<section class="service-area" style="margin-bottom: 50px;">
    <div class="service-area-inner section-spacing-top">
        <div class="works-section-header" id="worksHeader">
            <div class="container">
                <div class="section-header">
                    <div class="section-title-wrapper fade-anim">
                        <div class="title-wrapper">
                            <h1 class="section-title cbd-section-title">Selected Works</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-wrapper-box">
            <div class="services-wrapper header-stacking-items">

                <?php

                foreach ($projects as $p) {
                    echo "
                    <div class='service-box-1 item'>
                        <div class='container'>
                            <div class='header'>
                            </div>
                            <div class='service-box-inner body'>
                                <div class='project-content'>
                                    <div class='number project-number-title'>($p[number]) <h3 class='title'>$p[title]</h3></div>
                                    <div class='content project-description'>
                                        <p class='text'>$p[description].</p>
                                    </div>
                                    <div class='t-btn-group project-buttons'>
                                    <a class='t-btn t-btn-circle' href='portfolio-details.html'>
                                    <i class='fa-solid fa-arrow-right'></i>
                                    </a>
                                    <a class='t-btn t-btn-primary' href='portfolio-details.html'>View Full Project</a>
                                    <a class='t-btn t-btn-circle' href='portfolio-details.html'>
                                    <i class='fa-solid fa-arrow-right'></i>
                                    </a>
                                </div>
                                </div>
                                <div class='project-image-wrapper'>
                                    <a href='$p[link]'> <img src='$p[image]' alt='image'></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                }

                ?>
            </div>
        </div>
        <div class="final"></div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const worksHeader = document.getElementById('worksHeader');
    const worksSection = document.querySelector('.service-area');
    
    if (worksHeader && worksSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // When the section is in view, check scroll position
                    const handleScroll = () => {
                        const rect = worksSection.getBoundingClientRect();
                        const isScrolled = rect.top <= 0 && rect.bottom > 100;
                        
                        if (isScrolled) {
                            worksHeader.classList.add('scrolled');
                        } else {
                            worksHeader.classList.remove('scrolled');
                        }
                    };
                    
                    window.addEventListener('scroll', handleScroll);
                    handleScroll(); // Check initial state
                } else {
                    worksHeader.classList.remove('scrolled');
                }
            });
        }, {
            threshold: 0.1
        });
        
        observer.observe(worksSection);
    }
});
</script>