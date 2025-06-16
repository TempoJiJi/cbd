<style>
    .t-btn-color {
        color: #0E0F11 !important;
        border-color: #AFF42B !important;
        background-color: #AFF42B !important;
    }

    .project-image {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .project-image:hover {
        transform: scale(1.02);
    }

    .project-container {
        height: 80%;
        flex-direction: column;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .service-box-inner.body {
        display: flex;
        gap: 30px;
        align-items: center;
        min-height: 400px;
    }

    .project-content {
        padding-top: 100px;
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
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .project-visit-link {
        color: #fff;
        text-decoration: underline;
        font-size: 20px;
        font-weight: 500;
        transition: color 0.3s ease;
        padding-top: 10px;
    }

    .project-visit-link:hover {
        color: #AFF42B;
        text-decoration: underline;
    }

    .project-image-wrapper {
        flex: 1;
        max-width: 800px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 100px;
        position: relative;
        cursor: none;
    }

    .project-image-wrapper img {
        border-radius: 8px;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        filter: brightness(1) saturate(1);
    }

    /* Custom Cursor */
    .custom-cursor {
        position: fixed;
        width: 120px;
        height: 120px;
        background: rgba(175, 244, 43, 0.9);
        border-radius: 50%;
        pointer-events: none;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 600;
        color: #000;
        transform: translate(-50%, -50%) scale(0);
        transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.3);
    }

    .custom-cursor.active {
        transform: translate(-50%, -50%) scale(1);
    }

    .project-image-wrapper:hover {
        cursor: none;
    }

    .project-image-wrapper:hover::before {
        opacity: 1;
    }

    @media (max-width: 768px) {

        .project-container {
            height: 100%;
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 30px;
        }

        .service-box-inner.body {
            flex-direction: column;
            gap: 20px;
            align-items: stretch;
            min-height: auto;
        }

        .project-content {
            padding-top: 0px;
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
            padding-top: 10px;
            cursor: auto;
        }

        .custom-cursor {
            display: none;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Create custom cursor
        const cursor = document.createElement('div');
        cursor.className = 'custom-cursor';
        cursor.innerHTML = 'Read More';
        document.body.appendChild(cursor);

        // Get all project image wrappers
        const imageWrappers = document.querySelectorAll('.project-image-wrapper');

        // Mouse move event
        document.addEventListener('mousemove', function(e) {
            cursor.style.left = e.clientX + 'px';
            cursor.style.top = e.clientY + 'px';
        });

        // Add hover events to image wrappers
        imageWrappers.forEach(wrapper => {
            wrapper.addEventListener('mouseenter', function() {
                cursor.classList.add('active');
            });

            wrapper.addEventListener('mouseleave', function() {
                cursor.classList.remove('active');
            });
        });
    });
</script>


<?php
$projects = [
    [
        'number' => '01',
        'title' => 'Lavieflo',
        'description' => 'Lavieflo is a fully custom e-commerce website — hand-coded without WordPress or any CMS. It features a complete product catalog, category browsing, shopping cart, and integrated payment system — all built from the ground up for performance and flexibility.',
        'image' => 'assets/imgs/project/lavieflo_trans.png',
        'link' => 'https://lavieflo.com',
        'bg' => 'rgb(14, 15, 17)',
        'techstack' => '
            <i style="margin-right:20px;" class="devicon-php-plain colored techstack-icon"></i>
            <i style="margin-right:20px;" class="devicon-html5-plain colored techstack-icon"></i>
            <i style="margin-right:20px;" class="devicon-javascript-plain colored techstack-icon"></i>
        ',
    ],
    [
        'number' => '02',
        'title' => 'NZON',
        'description' => 'NZON is a hiking companion app that helps users create or join hiking trips with ease, featuring group coordination and a built-in payment system — fully developed by using React Native with PHP backend.',
        'image' => 'assets/imgs/project/nzon_trans.png',
        'link' => '#',
        'bg' => 'rgb(45, 113, 72)',
        'techstack' => '
            <i style="margin-right:20px;" class="devicon-php-plain colored techstack-icon"></i>
            <i style="margin-right:20px;" class="devicon-react-original colored techstack-icon"></i>
        ',
    ],
    [
        'number' => '03',
        'title' => 'Fatbear',
        'description' => 'Fatbear is a custom-built back office platform for online tuition centers. It features class and calendar management, student and teacher modules, automated salary calculation, and PDF/Excel export — all tailored for admin efficiency.',
        'image' => 'assets/imgs/project/fatbear_trans.png',
        'link' => '#',
        'bg' => 'rgb(250, 142, 41)',
        'techstack' => '
            <i style="margin-right:20px;" class="devicon-php-plain colored techstack-icon"></i>
            <i style="margin-right:20px;" class="devicon-html5-plain colored techstack-icon"></i>
            <i style="margin-right:20px;" class="devicon-javascript-plain colored techstack-icon"></i>
        ',

    ],

]

?>

<section class="service-area" style="margin-bottom: 50px;">
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

                <?php

                foreach ($projects as $p) {
                    echo "
                    <div style='background-color: $p[bg];' class='service-box-1 item'>
                        <div class='project-container container'>
                            <div class='header'>
                            </div>
                            <div class='work-box-1 service-box-inner body'>
                                <div class='project-content'>
                                    <div class='number project-number-title'>($p[number]) <h3 class='title'>$p[title]</h3></div>
                                    <div class='content project-description'>
                                        <p class='text'>$p[description]</p>
                                    </div>
                                    <div class='content'>
                                        $p[techstack]
                                    </div>
                                    <div class='project-buttons'>
                                        <div class='t-btn-group'>
                                            <a class='t-btn t-btn-circle t-btn-color' href='portfolio-details.html'>
                                                <i class='fa-solid fa-arrow-right'></i>
                                            </a>
                                            <a class='t-btn t-btn-primary t-btn-color' href='portfolio-details.html'>Read More</a>
                                            <a class='t-btn t-btn-circle t-btn-color' href='portfolio-details.html'>
                                                <i class='fa-solid fa-arrow-right'></i>
                                            </a>
                                        </div>
                                        <a class='project-visit-link' href='$p[link]' target='_blank'>Visit Site <i class='fa-solid fa-arrow-right'></i></a> 
                                    </div>
                                </div>
                                <div class='fade-anim parallax-view project-image-wrapper' data-delay='0'>
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