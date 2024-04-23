<?php
/**
 * The template for displaying image attachments.
 *
 * @package Music Recording Studio
 */

get_header(); ?>

<div class="container">
  <main id="maincontent" class="middle-align pt-5" role="main">
    <?php
      $music_recording_studio_theme_lay = get_theme_mod( 'music_recording_studio_theme_options','Right Sidebar');
      if($music_recording_studio_theme_lay == 'Left Sidebar'){ ?>
      <div class="row">
        <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/image-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'music-recording-studio' ),
                'next_text' => __( 'Next page', 'music-recording-studio' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'music-recording-studio' ) . ' </span>',
              ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    <?php }else if($music_recording_studio_theme_lay == 'Right Sidebar'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/image-layout' ); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'music-recording-studio' ),
                'next_text' => __( 'Next page', 'music-recording-studio' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'music-recording-studio' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php get_sidebar();?></div>
      </div>
    <?php }else if($music_recording_studio_theme_lay == 'One Column'){ ?>
      <div id="our-services" class="services">       
        <?php if ( have_posts() ) :
          /* Start the Loop */
          while ( have_posts() ) : the_post();
            get_template_part( 'template-parts/image-layout' ); 
          endwhile;

          else :
            get_template_part( 'no-results' ); 
          endif; 
        ?>
        <div class="navigation">
          <?php
            // Previous/next page navigation.
            the_posts_pagination( array(
              'prev_text' => __( 'Previous page', 'music-recording-studio' ),
              'next_text' => __( 'Next page', 'music-recording-studio' ),
              'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'music-recording-studio' ) . ' </span>',
            ) );
          ?>
          <div class="clearfix"></div>
        </div>
      </div>
        <?php }else if($music_recording_studio_theme_lay == 'Three Columns'){ ?>
      <div class="row">
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-6 col-md-6">
          <?php if( get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'both') { ?>
            <?php if( get_theme_mod( 'music_recording_studio_blog_pagination_hide_show',true) == 1) { ?>
              <div class="navigation">
                <?php music_recording_studio_blog_posts_pagination(); ?>
                  <div class="clearfix"></div>
              </div>
            <?php } ?>
          <?php } ?>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' );
            endif;
          ?>
          <?php if( get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'both') { ?>
            <?php if( get_theme_mod( 'music_recording_studio_blog_pagination_hide_show',true) == 1) { ?>
              <div class="navigation">
                <?php music_recording_studio_blog_posts_pagination(); ?>
                  <div class="clearfix"></div>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
      </div>
    <?php }else if($music_recording_studio_theme_lay == 'Four Columns'){ ?>
      <div class="row">
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        <div id="our-services" class="services col-lg-3 col-md-3">
          <?php if( get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'top' || get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'both') { ?>
            <?php if( get_theme_mod( 'music_recording_studio_blog_pagination_hide_show',true) == 1) { ?>
              <div class="navigation">
                <?php music_recording_studio_blog_posts_pagination(); ?>
                  <div class="clearfix"></div>
              </div>
            <?php } ?>
          <?php } ?>
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content',get_post_format());
            endwhile;

            else :
              get_template_part( 'no-results' );
            endif;
          ?>
          <?php if( get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'bottom' || get_theme_mod( 'music_recording_studio_blog_post_pagination_position','bottom') == 'both') { ?>
            <?php if( get_theme_mod( 'music_recording_studio_blog_pagination_hide_show',true) == 1) { ?>
              <div class="navigation">
                <?php music_recording_studio_blog_posts_pagination(); ?>
                  <div class="clearfix"></div>
              </div>
            <?php } ?>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
      </div>
    <?php }else if($music_recording_studio_theme_lay == 'Grid Layout'){ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-9 col-md-9">
          <div class="row">
            <?php if ( have_posts() ) :
              /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/image-layout' );
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
            ?>
          </div>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'music-recording-studio' ),
                'next_text' => __( 'Next page', 'music-recording-studio' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'music-recording-studio' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php }else{ ?>
      <div class="row">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
            while ( have_posts() ) : the_post();
              get_template_part( 'template-parts/content'); 
            endwhile;

            else :
              get_template_part( 'no-results' ); 
            endif; 
          ?>
          <div class="navigation">
            <?php
              // Previous/next page navigation.
              the_posts_pagination( array(
                'prev_text' => __( 'Previous page', 'music-recording-studio' ),
                'next_text' => __( 'Next page', 'music-recording-studio' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'music-recording-studio' ) . ' </span>',
              ) );
            ?>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </main>
</div>

<?php get_footer(); ?>