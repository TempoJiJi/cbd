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
        align-items: flex-start;
    }

    .project-content {
        flex: 1;
    }

    .project-image-wrapper {
        flex: 1;
        max-width: 800px;
    }

    .project-image-wrapper img {
        border-radius: 8px;
        transition: transform 0.3s ease;
    }


    @media (max-width: 768px) {
        .service-box-inner.body {
            flex-direction: column;
            gap: 20px;
        }

        .project-image {
            height: 200px;
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

                <?php

                foreach ($projects as $p) {
                    echo "
                    <div class='service-box-1 item'>
                        <div class='container'>
                            <div class='header'>
                                <div class='number'>($p[number]) <h3 class='title'>$p[title]</h3>
                                </div>
                            </div>
                            <div class='service-box-inner body'>
                                <div class='project-content'>
                                    <div class='btn-wrapper'>
                                        <a href='contact.html' class='t-btn'><span>View Project</span>
                                            <svg viewBox='0 0 123 115' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                <path fill-rule='evenodd' clip-rule='evenodd' d='M7.67648 102.817L94.6863 16.8148H0.999996V0.999997H122V108.409H106V27.9975L18.9902 114L7.67648 102.817Z' stroke='#AFF42B' />
                                            </svg>
                                        </a>
                                    </div>
                                    <div class='content'>
                                        <p class='text'>$p[description].</p>
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