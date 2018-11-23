<?php
/**
 * Template Name: Page Contact
 */

get_header(); ?>

    <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();
             ?>
                <h2 class="page-title">Contact</h2>
      <div class="row">
          <div class="col-xs-12">
              <p><img class="map_holder" src ='<?php echo get_stylesheet_directory_uri().'/img/map.jpg' ?>'/></p>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3581.1506146450083!2d-80.13883198443439!3d26.159223883457997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9019b9aaf1f4b%3A0x94f22f37486b3cc9!2s1881+NE+26th+St+%23212%2C+Wilton+Manors%2C+FL+33305!5e0!3m2!1sen!2sus!4v1542810625812" width="600" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
          <div class="col-sm-8">
              <h4>Do you have any questions?</h4>
              <p>Call us or fill out our confidential contact form below. Our addiction experts can answer any questions you may have about our program. We’d love to hear from you.</p>

                 <p> Once we receive your information, one of our intake specialists will follow up to start the admissions process with you.
              </p>
              <?php echo do_shortcode( '[contact-form-7 id="92" title="Contact us form"]' ); ?>
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
                    <div class="col  bottom-img contact">
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
