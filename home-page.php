<?php
/**
 * Template Name: Home Page
 */

get_header(); ?>

    <section id="primary" class="content-area col-sm-12">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();
             ?>
                <div class="row hero">
                    <div class="col-md-6 offset-md-6">
                        <h3>BRING YOUR RECOVERY INTO SIGHT</h3>
                        <p>The Right Place Detox provides a safe and comfortable solution to addiction.
                            Start your journey towards long-term sobriety today.</p>
                        <div class="buttons"><p><a class="btn btn-primary" style ='text-transform: none' href="#">Call Now</a>
                            <a class="btn btn-primary" href="#" style ='text-transform: none'>What is detox?</a></p>
                           </div>
                    </div>
                </div>
                <div class="blue-area">
                    <p class="text-center large">Welcome to Legacy Healing Detox</p>
                    <p class="blue-body_text"><span>Detoxing from drugs and alcohol is the first step on the journey to recovery.</span> A quality detox program can make all the difference in your success. Trying to stop using drugs or alcohol is often inconceivable. The Right Place Detox will gently ween you off of the substances that you’ve become addicted to. Our medical detox is tailored to your specific needs. A medical detox and clinical supervision are essential when considering beating your addiction. The Right Place Detox has the staff in place to help you find long-term recovery.</p>

                </div>
                <div class="tab-area">
                    <ul id="myTab" class="nav nav-tabs justify-content-center" role="tablist">
                        <li class="nav-item"><a id="tab-one" class="nav-link active" role="tab" href="#home" data-toggle="tab" aria-controls="tab-one" aria-selected="true">What Is Detox?</a></li>
                        <li class="nav-item"><a id="tab-two" class="nav-link" role="tab" href="#profile" data-toggle="tab" aria-controls="tab-two" aria-selected="false">Do I Need Detox?</a></li>
                        <li class="nav-item"><a id="tab-three" class="nav-link" role="tab" href="#contact" data-toggle="tab" aria-controls="tab-three" aria-selected="false">What Detox Is Right For Me?</a></li>
                        <li class="nav-item"><a id="tab-four" class="nav-link" role="tab" href="#contact" data-toggle="tab" aria-controls="tab-four" aria-selected="false">How Much Does Detox Cost?</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div id="home" class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab">
                            <h4>What is detox?</h4>
                            <p class="text-justify">The phases of addiction detox depend on the drug of choice, the amount of drug taken, the length of drug use and any other drugs or substances taken at the same time. The Right Place believes that, generally, it takes seven to ten days to completely and safely detox. Patients are carefully monitored and, if necessary, prescribed the appropriate medication.</p>
                               <p> <a class="btn btn-primary text-center" href="#">Read More</a></p>

                        </div>
                        <div id="profile" class="tab-pane fade" role="tabpanel" aria-labelledby="profile-tab">
                            <h4>Do I Need Detox?</h4>
                            <p class="text-justify">The phases of addiction detox depend on the drug of choice, the amount of drug taken, the length of drug use and any other drugs or substances taken at the same time. The Right Place believes that, generally, it takes seven to ten days to completely and safely detox. Patients are carefully monitored and, if necessary, prescribed the appropriate medication.</p>
                               <p> <a class="btn btn-primary text-center" href="#">Read More</a></p>

                        </div>
                        <div id="contact" class="tab-pane fade" role="tabpanel" aria-labelledby="contact-tab">
                            <h4>What Detox Is Right For Me?</h4>
                            <p class="text-justify">The phases of addiction detox depend on the drug of choice, the amount of drug taken, the length of drug use and any other drugs or substances taken at the same time. The Right Place believes that, generally, it takes seven to ten days to completely and safely detox. Patients are carefully monitored and, if necessary, prescribed the appropriate medication.</p>
                                <p><a class="btn btn-primary text-center" href="#">Read More</a></p>

                        </div>
                    </div>
                </div>
                <div class="why-florida">
                    <div class="row">
                        <div class ="col-sm-6">
                            <h4>Why Detox In Florida?</h4>
                            <p class="text-justify">Our addiction detox program in south Florida is located at the center of one of the largest recovery communities in the nation. With countless aftercare options and addiction resources available to you, it’s easy to see why you would want to attend a detox program in Florida. Our location in Ft Lauderdale, Florida is minutes from the beach and many other recovery activities.</p>
                            <h4>Our Detox Programs</h4>
                            <p class="text-justify">Our medical detox programs are tailored to each individual. We believe in treating addiction at the root. Whole-person treatment is essential when trying to obtain long-term sobriety</p>
                        <p><ul class="blue-bullets"><li>Alcohol Detox</li>
                                <li>Drug Detox</li>
                                <li>Men's Detox</li>
                                <li>Women's Detox</li>
                            </ul>
                            </p>
                    </div>
                        <div class ="col-sm-6"><p><img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/11/the-right-place-detox-cafeteria.jpg" class="float-right" />
                                <a class="btn btn-primary" style="margin: 1.7rem 0 0" href="#">View Our Campus</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col  bottom-img home">
                        <h4><strong>Find Recovery. Find Yourself.</strong></h4>
                        <p class="text-justify">Whether your seeking help for you or a loved one, The Right Place Detox can help. Our addiction detox program is tailored to each individual. Our medical staff will guide you each step of the way while keeping you comfortable throughout the detox process.</p>

                        <div ">
                            <p><a class="btn btn-primary " href="#">Help for yourself</a>
                                <a class="btn btn-primary " href="#">For a loved one</a></p>
                        </div>
                    <div class="d-sm-none">
                        <p><img src ='<?php echo get_stylesheet_directory_uri().'/img/bottom-home-img.jpg' ?>'/></p>
                    </div>
                    </div>
                </div>
                <?php  endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
