<?php
/*
Use for default looping news, archive, search, etc
 */

get_header(); ?>
<div class="container">
    <div class="page-image home-slide">
        <div class="home-slide-label">
            Australian Freight <br/>Management Services
        </div>
    </div>
</div>
<div class="container fhl-content">
    <ul class="correspond-list row">
        <li class="col-md-4">
            <a href="#">
                <div class="page-section-name">Transport Service</div>
                <div class="page-section-description">
                    Local & Interstate<br/>
                    Country & Remote<br/>
                    Container Freight<br/>
                    Project & Infrastructure
                </div>
            </a>
        </li>
        <li class="col-md-4">
            <a href="#">
                <div class="page-section-name">Transport Service</div>
                <div class="page-section-description">
                    FCL Export Pack<br/>
                    FCL Import Unpack<br/>
                    LCL Consolidation Pack & Unpack<br/>
                    Container Transport
                </div>
            </a>
        </li>
        <li class="col-md-4">
            <a href="#">
                <div class="page-section-name">Transport Service</div>
                <div class="page-section-description">
                    Wine & Barrel Transport<br/>
                    National & Regional Transport<br/>
                    Import/Export - Pack/Unpack
                </div>
            </a>
        </li>
    </ul>
	<div class="row">
		<div id="content" class="content-area col-md-12">
			<main id="main" class="site-main" role="main">
            <?php
                global $post;
                $args = array( 'name' => 'home','post_type' => 'page' );
                $posts = get_posts( $args );
                setup_postdata($posts[0]);
                the_content();
                wp_reset_postdata();
            ?>
			</main>
		</div>
	</div>
</div>
<?php get_footer(); ?>
