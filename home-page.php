<?php
    /*
    Template Name: Home page
    */
    ?>
<?php get_header();?>   
    <section class="container-fluid aboutbg text-center">
        <div class="container">
        <h2><?php the_field('titleforaboutme'); ?></h2><!--  custom field for the aboutme content-->     
        <p class="particle"><?php the_field('subtitleforaboutme'); ?></p>
        <p class="about-text"><?php the_field('paragraphforaboutme'); ?></p>

        <div class="blocker"></div>
        </div>  <!-- container -->
    </section>

    <section class="container-fluid articlesbg">
        <div class="container">
            <div>
                <h3 class="text-center">LATEST ARTICLES</h3>
            </div>

            <div class="row text-center"> <!-- a row to give us access to BS columns -->

                <div class="col-md-4 text-center">
                    <img class="img-fluid" alt="portrait" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/starter_for_josh_site/images/image2.jpg">
                    <h4 class="article-title">A PORTRAIT</h4>
                    <p class="date">12 December 2020</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div>

                <div class="col-md-4 text-center">
                    <img class="img-fluid" alt="model" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/starter_for_josh_site/images/image3.jpg">
                    <h4 class="article-title">A MODEL</h4>
                    <p class="date">12 December 2020</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div>

                <div class="col-md-4 text-center">
                    <img class="img-fluid" alt="games design" src="http://170.187.231.66/~mesh20/sub1/wp-content/themes/starter_for_josh_site/images/image4.jpg">
                    <h4 class="article-title">A GAMES DESIGN</h4>
                    <p class="date">12 December 2020</p>
                    <p class="article-p">STS has never been shy of seeking new terrains of investigation. More and more STS scholars are starting to explore and intervene in the arts. This object of study brings new challenges and opportunities that we want to explore in this session. We would like to gather first of all simply new kinds of knowledge arising from STS study of the arts.</p>
                    <a class="readmore" href="#">CONTINUE READING</a>
                </div>

            </div> <!-- row -->

        </div> <!-- container -->

    </section> <!-- container-fluid -->
    <?php get_footer();?>