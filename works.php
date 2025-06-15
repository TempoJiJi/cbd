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
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .project-visit-link {
        color: #fff;
        text-decoration: underline;
        font-size: 16px;
        font-weight: 500;
        transition: color 0.3s ease;
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
    }

    .project-image-wrapper img {
        border-radius: 8px;
        transition: transform 0.3s ease;
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
            padding-top: 10px;
        }
    }
</style>


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
        'description' => 'Our experienced project manager is crucial in ensuring that our design and development teams work smoothly. With management tools, we monitor how our projects are progressing from time to time. The main goals are simple: to make sure everything gets done on time and to maintain the high quality of work.',
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
                        <div class='container'>
                            <div class='header'>
                            </div>
                            <div class='service-box-inner body'>
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
                                            <a class='t-btn t-btn-circle' href='portfolio-details.html'>
                                                <i class='fa-solid fa-arrow-right'></i>
                                            </a>
                                            <a class='t-btn t-btn-primary' href='portfolio-details.html'>Read More</a>
                                            <a class='t-btn t-btn-circle' href='portfolio-details.html'>
                                                <i class='fa-solid fa-arrow-right'></i>
                                            </a>
                                        </div>
                                        <a class='project-visit-link' href='$p[link]' target='_blank'>Visit Site</a>
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