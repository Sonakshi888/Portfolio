<?php

/**
 * 
 * 
 * Template Name:Home Template
 * 
 */
get_header();
?>
<div class="container">
    <!-- intro section -->
    <div class="row">
        <div class="col-md-12 text-center intro">
            <h1 class="intro-title">Welcome to my student Portfolio!</h1>
            <p class="intro-para">Hey, I am Jasmeet Kaur Sethi. I believe that user is the center of any successful design solution.</p>
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
    <div class="row">
        <div class="col-md-8 projects">
            <h2 class="projects-heading">PROJECTS</h2>
            <div class="tech-wrapper">
                <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/01/Group-18@2x.png'; ?>" alt="figma" width="214px" height="256px" />
                <img src="<?php echo get_home_url() . '/wp-content/uploads/2023/01/Group-18@2x.png'; ?>" alt="figma" width="214px" height="256px" />
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php
