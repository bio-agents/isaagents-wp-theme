<?php
/**
 * Template Name: ISA Agents Blog Page List
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

<div class="site-content" style="width:100%;margin-top: 20px">
<br/>
<h2 style="font-size:1.6em; font-weight: lighter; color: #aaa; text-align: center">ISA Agents Blog</h2>
<br/>
<?php
$args = array(
	'showposts' => '-1',
);
$the_query = new WP_Query( $args ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

    <div class="blog-post">
        <a href="<?php the_permalink() ?>">
        <?php

            $values= wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
            $thumb = '';
            if(count($values) > 0) {
                $thumb = $values['0'];
            }
        ?>

        <div class="picture_and_title" style="background: url(<?php echo $thumb; ?>) no-repeat; background-size: 100%;">
        </div>
        <div class="blog-post-item-content">
            <div class="date"><?php the_date(); ?></div>
            <div class="title"><?php the_title(); ?></div>
        </div>
        </a>
    </div>

<?php endwhile;?>


</div>





		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>