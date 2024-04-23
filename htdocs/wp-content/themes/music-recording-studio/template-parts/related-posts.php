<?php
/**
 * Related posts based on categories and tags.
 * 
 */

$music_recording_studio_related_posts_taxonomy = get_theme_mod( 'music_recording_studio_related_posts_taxonomy', 'category' );

$music_recording_studio_post_args = array(
    'posts_per_page'    => absint( get_theme_mod( 'music_recording_studio_related_posts_count', '3' ) ),
    'orderby'           => 'rand',
    'post__not_in'      => array( get_the_ID() ),
);

$music_recording_studio_tax_terms = wp_get_post_terms( get_the_ID(), 'category' );
$music_recording_studio_terms_ids = array();
foreach( $music_recording_studio_tax_terms as $tax_term ) {
	$music_recording_studio_terms_ids[] = $tax_term->term_id;
}

$music_recording_studio_post_args['category__in'] = $music_recording_studio_terms_ids; 

if(get_theme_mod('music_recording_studio_related_post',true)==1){

$music_recording_studio_related_posts = new WP_Query( $music_recording_studio_post_args );

if ( $music_recording_studio_related_posts->have_posts() ) : ?>
    <div class="related-post">
        <h3><?php echo esc_html(get_theme_mod('music_recording_studio_related_post_title','Related Post'));?></h3>
        <div class="row">
            <?php while ( $music_recording_studio_related_posts->have_posts() ) : $music_recording_studio_related_posts->the_post(); ?>
                <div class="col-lg-4 col-md-6">
                    <article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
                        <div class="post-main-box">
                            <?php if( get_theme_mod( 'music_recording_studio_featured_image_hide_show',true) == 1) { ?>
                                <div class="box-image">
                                    <?php
                                        if(has_post_thumbnail()) {
                                          the_post_thumbnail();
                                        }
                                    ?>
                                </div>
                            <?php } ?>
                            <h2 class="section-title"><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2><?php music_recording_studio_edit_link(); ?>
                            <div class="new-text">
                                <div class="entry-content">
                                    <?php $theme_lay = get_theme_mod( 'music_recording_studio_excerpt_settings','Excerpt');
                                        if($theme_lay == 'Content'){ ?>
                                          <?php the_content(); ?>
                                        <?php }
                                        if($theme_lay == 'Excerpt'){ ?>
                                          <?php if(get_the_excerpt()) { ?>
                                            <p><?php $music_recording_studio_excerpt = get_the_excerpt(); echo esc_html( music_recording_studio_string_limit_words( $music_recording_studio_excerpt, esc_attr(get_theme_mod('music_recording_studio_related_posts_excerpt_number','30')))); ?></p>
                                          <?php }?>
                                        <?php }?>
                                </div>
                            </div>
                            <?php if( get_theme_mod('music_recording_studio_button_text','Read More') != ''){ ?>
                                <div class="more-btn">
                                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_theme_mod('music_recording_studio_button_text',__('Read More','music-recording-studio')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('music_recording_studio_button_text',__('Read More','music-recording-studio')));?></span></a>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="clearfix"></div>
                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
<?php endif;
wp_reset_postdata();

}