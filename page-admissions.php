<?php
/**
 * Template Name: Page Admissions
 */

get_header(); ?>

    <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();
             ?>
                <h2 class="page-title">Admissions</h2>
      <div class="row">
          <div class="col-sm-8">
              <h4>Fill Out Our Confidential Form to Start The Admission Process</h4>
              <p>Contact our admission’s department to learn more about our program. Our intake specialists can provide you with information regarding program lenght, cost of detox, and what to bring when admitting.</p>

                 <p> Once we receive your information, one of our intake specialists will follow up to start the admissions process with you.
              </p>
              <?php echo do_shortcode( '[contact-form-7 id="91" title="Contact form 1"]' ); ?>
          </div>
          <div class="col-sm-4 question-aside">
              <h4>Have Any Questions?</h4>
              <p>Call now to speak to an intake specialist</p>
              <a class="btn btn-primary btn-block" href="#">Call now</a>
              <a class="btn btn-primary btn-block" href="#">View Insurance</a>
              </p>
              <h4>Drug Blog Categories</h4>
              <ul class="orange-bullets">
                  <li>Addiction</li>
                  <li>Addiction Treatment</li>
                  <li>Alcoholism</li>
                  <li>Fun in Recovery</li>
                  <li>Recovery</li>
                  <li>Relapse Prevention</li>
                  <li>Sobriety</li>
                  <li>Therapy</li>
              </ul>
          </div>
      </div>

                <div class="row">
                    <div class="col  bottom-img admissions">
                        <h4><strong>Find Recovery. Find Yourself.</strong></h4>
                        <p class="text-justify">Whether your seeking help for you or a loved one, The Right Place Detox can help. Our addiction detox program is tailored to each individual. Our medical staff will guide you each step of the way while keeping you comfortable throughout the detox process.</p>

                        <div>
                            <p><a class="btn btn-primary " href="#">Help for yourself</a>
                                <a class="btn btn-primary " href="#">For a loved one</a></p>
                        </div>
                    <div class="d-sm-none">
                        <p><img src ='<?php echo get_stylesheet_directory_uri().'/img/admissions-bottom.jpg' ?>'/></p>
                    </div>
                    </div>
                </div>
                <?php  endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
