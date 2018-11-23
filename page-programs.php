<?php
/**
 * Template Name: Page Programs
 */

get_header(); ?>

    <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();
             ?>
                    <h2 class="page-title">Programs</h2>
      <div class="row">
          <div class="col-sm-8">
              <h4>Programs</h4>
              <p>The first step in recovering from an addiction is to rid your body of drugs or alcohol. At our addiction detox center, The Right Place Detox offers a medically supervised detox to ensure that your recovery begins in a safe, effective way.</p>

              <p>The length of time it will take for you to completely detox will depend on the personal factors of your addiction. The substances in your body, how long you have been using them, and whether you have multiple addictions will all determine how long this phase of your treatment lasts. You should plan on at least a week or 10 days to fully complete your detox.</p>

              <p>During your stay at The Right Place Detox, you will be under continuous supervision. If your treatment team determines that medication would be helpful to ease your detox, we will provide it to you. You will also be offered the chance to begin individual or group therapy to help jump-start your transition into rehab.</p>

              <p>Another vital component of your addiction recovery program is nutrition. A healthy diet supports your body as it heals from a dependency on drugs or alcohol. Our dedicated cooks prepare tasty and nutritious meals that are designed with your recovery in mind.</p>
              </p>
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
            <div class="col-sm-6"><h4>Where are we located?</h4>
                <p>We are located in Fort Lauderdale, Florida.  We have a beautiful, modern facility that is designed for your safety and comfort during your stay. We know how important privacy is during the detox process, and we respect and guard the privacy and security of each
                    of our residents.</p>
                <p>Our grounds are green and landscaped to provide a peaceful setting with access to the calming influence of nature. You can have a seat at the outdoor tables and benches in the courtyard anytime you want to enjoy the fresh air and Florida sunshine.</p>
            </div>
            <div class="col-sm-6">
                <img align="right" class=" lobby" src="http://127.0.0.1/wordpress/wp-content/uploads/2018/11/the-right-place-detox-lobby.jpg" alt="Legacy Detox lobby" /></div>
        </div>
                <div class="row">
            <p>The patients’ rooms in our facility have space for everything you need to bring with you. You will find a comfortable bed, a night stand, and space to store your clothes. Each room also has windows to let in plenty of light. A bathroom with a walk-in shower opens off of each bedroom.</p>
            <p>When you have time for casual socializing, you can relax in the living area. Lounge on the couches, or sit at a table for conversation. Meals are served at group tables, and vending machines are always available for a soft drink or snack. Offices, meeting rooms and medical treatment rooms round out the facility.</p>
        </div>
                <div class="row">
                    <div class="col-xs-12">
                    <h4>Treatment Options</h4>
                    <p>We offer medically-supervised detox for drug and alcohol addiction. Our treatment protocol also includes psychological counseling. You can choose to participate in a program that is designed specifically for men or women.</p>
                    <p>In Florida, you cannot enter an alcohol rehab program unless your body has been completely rid of alcohol. Trying to detox alone can be very dangerous, though, and that is why we are here. Our alcohol addiction detox takes into account the fact that alcohol withdrawal can be dangerous. At our facility, you will be under the care of medical professionals, and most patients will receive medications to ease the worst withdrawal symptoms.
                    </p>
                </div>
                </div>
                <div class="blue-area">
                    <p class="text-center large">Our addiction detox center also offers detox for all
                        the most common drug dependenciesWelcome to Legacy Healing Detox</p>
                    <div class="blue-body_text"><span>Opiates and opioids:</span> Our detox process for opiates and opioids offers medication as needed to ease your withdrawal symptoms, and we also provide introductory therapy to facilitate your transition into rehab.</div>
                    <div class="blue-body_text"><span>Heroin:</span> Withdrawal from heroin varies among individuals, but it is always very unpleasant. We will make an individualized plan for your detox and monitor you very closely to ensure your safety.</div>
                    <div class="blue-body_text"><span>Cocaine:</span>  The side effects of cocaine withdrawal include insomnia, severe depression and intense cravings. Our combination of professional health care and emotional support services greatly increases the chance of successful detox.</div>
                    <div class="blue-body_text"><span>Meth:</span> Addiction to methamphetamine has strong negative effects on your heart and brain. Trying to detox on your own can be extremely dangerous. Our treatment protocol includes medical supervision to safeguard your health. It also uses counseling to help you deal with the intense psychological disturbances that result from meth dependency.</div>
                    <div class="blue-body_text"><span>Prescription drugs:</span> The drugs that your doctor prescribes can, unfortunately, lead to dependency. These include Halcion, Valium, Adderall, and Oxycontin. These drugs affect your brain function, and they can also cause heart irregularities, gastrointestinal upsets and muscle cramps. Being under the care of a health professional is essential when you are clearing your body of these substances. Our medical staff can make sure that your physical detox is safe and as comfortable as possible, and our counselors can help you deal with the emotional effects as your body learns to regulate itself without the drugs.</div>
                </div>


                <div class="row">
                    <div class="col  bottom-img programs">
                        <h4><strong>Find Recovery. Find Yourself.</strong></h4>
                        <p class="text-justify">Whether your seeking help for you or a loved one, The Right Place Detox can help. Our addiction detox program is tailored to each individual. Our medical staff will guide you each step of the way while keeping you comfortable throughout the detox process.</p>

                        <div>
                            <p><a class="btn btn-primary " href="#">Help for yourself</a>
                                <a class="btn btn-primary " href="#">For a loved one</a></p>
                        </div>
                    <div class="d-sm-none">
                        <p><img src ='<?php echo get_stylesheet_directory_uri().'/img/programs-bottom.jpg' ?>'/></p>
                    </div>
                    </div>
                </div>
                <?php  endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
