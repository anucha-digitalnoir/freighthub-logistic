<?php get_header(); ?>
	<section id="section-logo">
<!--        <div class="parallax logo-bg-parallax" data-velocity=".3"></div>-->
        <div class="parallax logo-bg-parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/image/section-1-bg.png"></div>
        <div class="container">
            <div class="row">
                <div class="content-logo col-lg-6 col-lg-offset-3"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/content-logo.png" alt="logo"/></div>
            </div>
            <div class="row">
                <div class="content-logo-slogan col-lg-6 col-lg-offset-3">Bringing your property dreams to life</div>
            </div>
        </div>

    </section>
    <section id="section-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1">
                    <h2 class="intro-header">
                        <span class="orange">YOUR HOME</span> YOUR WAY
                    </h2>
                    <div class="intro-body">
                        <div>
                            <p>Bespoke Development provide what the larger builders simply can’t – a customized one off design, put simply, your home – your way. At Bespoke Development your fittings and fixtures are not limited to a pre-selected range by us, you can choose the specifications of your home guided by our design know-how and expertise.</p>
                            <p>Through quality construction and thoughtful design, Bespoke Development will bring your vision to reality.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <h2 class="intro-header">
                        <span class="orange">PROPERTY</span> DEVELOPMENT
                    </h2>
                    <div class="intro-body">
                        <div>
                            <p>Specialising in residential property development, Bespoke can arrange all facets of the development process. This includes demolition, land division and space utilizing design to ensure optimal returns while complying with Local Council Regulations.</p>
                            <p>Maximize the potential of your real estate investment with Bespoke Development.</p>
                        </div>
                    </div>
                    <div class="row intro-body credit">
                        <div class="col-lg-5 col-lg-offset-6">
                            - Jayce Richardson
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-dream-plan">
<!--        <div class="parallax dream-plan-parallax" data-velocity=".1"></div>-->
        <div class="parallax dream-plan-parallax" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/image/section-dream-bg.jpg"></div>
        <div class="container">
            <div class="row dream-icon-list">
                <div class="dream-icon dream"></div>
                <div class="dream-icon plan"></div>
                <div class="dream-icon build"></div>
            </div>
        </div>
    </section>
    <section id="section-gallery">
        <div id="gallery">
        <?php get_home_gallery(); ?>
        </div>
        <div class="gallery-nav prev"></div>
        <div class="gallery-nav next"></div>
    </section>
    <section id="section-contact">
        <div class="container">
            <div class="row">
                <?php if($_GET['success'] == "true"){ ?>
                    <div class="col-lg-10 col-lg-offset-1">
                        <div class="col-lg-2 col-sm-2 success-contact"><img src="<?php bloginfo('stylesheet_directory'); ?>/image/tick.png" alt="success"/></div>
                        <div class="col-lg-9 col-sm-9 success-contact">
                            <h2 class="contact-header">
                                <span class="orange">thank you</span> for contacting us. we will get in touch with you shortly.
                            </h2>
                        </div>
                        <div class="col-lg-9 col-sm-9"></div>
                        <div class="col-lg-2 col-sm-2"><div class="back-button"><a href="?#section-contact">BACK</a></div>
                    </div>
                <?php }else{ ?>

                <div class="col-lg-11 col-lg-offset-1">
                    <h2 class="contact-header">
                        <span class="orange">LET'S</span> TALK
                    </h2>
                </div>
                <div class="col-lg-11 col-lg-offset-1">
                    <?php gravity_form( 1, false, false, false, '', false ); ?>
                </div>
                <div class="col-lg-11 col-lg-offset-1 logo-contact-form">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/image/hia.png" alt="logo"/>
                </div>
                <?php } ?>
<!--                <div class="col-lg-4 col-lg-offset-1">-->
<!--                    <input type="text" placeholder="Name"/>-->
<!--                    <input type="text" placeholder="Email"/>-->
<!--                    <input type="text" placeholder="Contact Number"/>-->
<!--                </div>-->
<!--                <div class="col-lg-4 col-lg-offset-1">-->
<!--                    <textarea placeholder="How can we help?"></textarea>-->
<!--                </div>-->
            </div>
<!--            <div class="row">-->
<!--                <div class="col-lg-4 col-lg-offset-6">-->
<!--                    <input type="button" value="SEND"/>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </section>
<?php get_footer(); ?>