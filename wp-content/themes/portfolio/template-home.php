<?php

/**
 * 
 * 
 * Template Name:Home Template
 * 
 */
get_header();
?>
<div class="container hp-wrapper">
    <!-- intro section -->
    <div class="row">
        <div class="col-md-12 text-center intro">
            <h1 class="intro-title"><?php esc_html_e('Welcome to my student Portfolio!', 'portfolio'); ?></h1>
            <p class="intro-para"><?php esc_html_e('Hey, I am Jasmeet Kaur Sethi. I believe that user is the center of any successful design solution.', 'portfolio'); ?></p>
        </div>
    </div>
    <!-- slider section -->
    <div class="row slider-row">
        <div class="col-md-12 text-center slider d-flex justify-content-center">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="http://localhost/projects/portfolio/wp-content/uploads/2023/01/dell-0J8thHZfosE-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost/projects/portfolio/wp-content/uploads/2023/01/mailchimp-04X1Yp9hNH8-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="http://localhost/projects/portfolio/wp-content/uploads/2023/01/jr-korpa-S60tV1rt5Eo-unsplash.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <!-- projects section -->
    <div class="row project-row">
        <div class="col-md-8 projects">
            <h2 class="section-heading"><?php esc_html_e('PROJECTS', 'portfolio'); ?></h2>
            <a href="<?php echo get_home_url() . '/projects'; ?>" target="_self">
                <div class="tech-wrapper d-flex justify-content-around">
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/01/Group-18@2x.png'; ?>" alt="figma" width="200px" height="250px" />
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/01/Group-33@2x.png'; ?>" alt="figma" width="200px" height="250px" />
                </div>
            </a>
        </div>
        <div class="col-md-4 right-pattern-cont">
            <img class="right-pattern" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Home_right_design@2x.png'; ?>" alt="side pattern" />
        </div>
    </div>

    <!-- case studies section -->
    <div class="row cs-row justify-content-between">
        <div class="col-md-4 left-pattern-cont">
            <img class="left-pattern" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Home_left_design@2x.png'; ?>" alt="side pattern" />
        </div>
        <div class="col-md-8 case-studies d-flex align-items-end flex-column">
            <h2 class="section-heading text-end"><?php esc_html_e('CASE STUDIES', 'portfolio'); ?></h2>
            <a href="<?php echo get_home_url() . '/case-studies'; ?>" target="_self" class="text-decoration-none">
                <div class="cs-wrapper">
                    <p class="cs-para" id="red"><?php esc_html_e('CoffeHouse App', 'portfolio'); ?></p>
                    <p class="cs-para" id="blue"><?php esc_html_e('Good Vibes Library', 'portfolio'); ?></p>
                    <p class="cs-para" id="green"><?php esc_html_e('Food Buzz App', 'portfolio'); ?></p>
                </div>
            </a>
        </div>
    </div>

    <!-- wireframes section -->
    <div class="row">
        <div class="col-md-8 wireframes-col">
            <h2 class="section-heading"><?php esc_html_e('WIREFRAMES', 'portfolio'); ?></h2>
            <a href="<?php echo get_home_url() . '/wireframes'; ?>" target="_self">
                <div class="wf-wrapper d-flex justify-content-around">
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Groupwireframes-1-Copy@2x-1.png'; ?>" alt="wireframes" />
                </div>
            </a>
        </div>
        <div class="col-md-4 right-pattern-cont">
            <img class="right-pattern" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Home_right_design@2x.png'; ?>" alt="side pattern" />
        </div>
    </div>

    <!-- prototyping section -->
    <div class="row justify-content-between">
        <div class="col-md-4 left-pattern-cont">
            <img class="left-pattern" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Home_left_design@2x.png'; ?>" alt="side pattern" />
        </div>
        <div class="col-md-8 prototyping d-flex align-items-end flex-column">
            <h2 class="section-heading text-end"><?php esc_html_e('PROTOTYPING', 'portfolio'); ?></h2>
            <a href="<?php echo get_home_url() . '/prototyping'; ?>" target="_self">
                <div class="proto-wrapper">
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Screenshot-121@2x-1.png'; ?>" alt="prototyping" />
                </div>
            </a>
        </div>
    </div>

    <!-- personas section -->
    <div class="row">
        <div class="col-md-8 personas">
            <h2 class="section-heading"><?php esc_html_e('USER JOURNEY MAP AND PERSONAS', 'portfolio'); ?></h2>
            <a href="<?php echo get_home_url() . '/personas'; ?>" target="_self">
                <div class="personas-wrapper d-flex justify-content-around">
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Group-25@2x-1.png'; ?>" alt="personas" />
                </div>
            </a>
        </div>
        <div class="col-md-4 right-pattern-cont">
            <img class="right-pattern" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Home_right_design@2x.png'; ?>" alt="side pattern" />
        </div>
    </div>

    <!-- affinity diagrams section -->
    <div class="row justify-content-between">
        <div class="col-md-4 left-pattern-cont">
            <img class="left-pattern" src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Home_left_design@2x.png'; ?>" alt="side pattern" />
        </div>
        <div class="col-md-8 af-diagram d-flex align-items-end flex-column">
            <h2 class="section-heading text-end"><?php esc_html_e('AFFINITY DIAGRAMS', 'portfolio'); ?></h2>
            <a href="<?php echo get_home_url() . '/prototyping'; ?>" target="_self">
                <div class="afd-wrapper">
                    <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/02/Screenshot_affinity_final-138@2x-1.png'; ?>" alt="prototyping" />
                </div>
            </a>
        </div>
    </div>
</div>
<?php
get_footer();
