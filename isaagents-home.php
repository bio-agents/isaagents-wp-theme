<?php
/**
 * Template Name: Home Page
 *
 * Selectable from a dropdown menu on the edit page screen.
 */

get_header(); ?>

	<div class="site-content" style="width:100%">
		<div id="content" role="main">

<div>
<br/>
<p style="font-weight: normal; color: #666; font-size:1.2em; line-height: 26px; text-rendering: optimizelegibility;">
        The open source <strong>ISA framework</strong> and agents help to manage an increasingly diverse set of life science, environmental
        and biomedical experiments that employing one or a combination of technologies.<br/><br/>

        Built around the '<strong>I</strong>nvestigation' (the project context), '<strong>S</strong>tudy' (a unit of research) and '<strong>A</strong>ssay' (analytical measurement)
        data model and serializations (tabular, JSON and RDF), the ISA framework helps you to
        provide rich description of the experimental metadata (i.e. sample characteristics, technology and measurement
        types, sample-to-data relationships) so that the resulting data and discoveries are reproducible and
        reusable.</p>
</div>
<br/>
<div style="margin-top: 30px">

    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isaagents-wp-theme/img/features/curate.png" alt="curate"/>
        </div>

        <div class="feature-content">
            <h2>Collect and curate, following standards</h2>

            <p>Describe the experimental steps using community-defined minimum reporting requirements and ontologies,
                where
                possible.</p>
        </div>
    </div>


    <div class="features grid_5">
        <div class="image-container">
            <img src="/wp-content/themes/isaagents-wp-theme/img/features/store-search.png" alt="store"/>
        </div>
        <div class="feature-content">
            <h2>Store and browse, locally or publicly</h2>

            <p>Create your own repository to search and browse the experimental description and associated data, hosted 
            openly or privately.</p>
        </div>
    </div>


    <div class="features grid_5">
        <div class="image-container">
            <img src="/wp-content/themes/isaagents-wp-theme/img/features/submit.png"/>
        </div>

        <div class="feature-content">
            <h2>Submit to public repositories</h2>

            <p>When required, reformat experiments for submission to supported public repositories or directly
                export to those already using ISA formats.</p>
        </div>
    </div>


    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isaagents-wp-theme/img/features/analyse.png"/>
        </div>
        <div class="feature-content">
            <h2>Analyse with existing agents</h2>

            <p>Upload experimental descriptions and associated data to a growing number of well-known analysis systems that
                ISA formats connect with.</p>
        </div>
    </div>


    <div class="features grid_5">
        <div class="image-container">
            <img src="/wp-content/themes/isaagents-wp-theme/img/features/rdf.png"/>
        </div>
        <div class="feature-content">
            <h2>Release, reason and nanopublish</h2>

            <p>Explore and reason over your experiments, open them to the linked data universe, or publish
                nano-statements of your discoveries.</p>
        </div>
    </div>


    <div class="features grid_5">

        <div class="image-container">
            <img src="/wp-content/themes/isaagents-wp-theme/img/features/publish.png"/>
        </div>

        <div class="feature-content">
            <h2>Publish data alongside your article</h2>

            <p>Directly export your experiments to a new generation of data journals that are accepting submissions in
                ISA formats.</p>
        </div>
    </div>


</div>

<div class="cf"></div>

<div class="latest-oupf-posts">

<h2 style="font-size:1.6em; font-weight: lighter; color: #aaa; text-align: center; margin-top: 20px">Latest ISA News</h2>
<br/>
<!--
 <div class="tweet-container" >
    <div id="twitter_icon" class="pull-left" style="padding-top: 15px; font-size: 1.5em">
        <i class="fa fa-twitter"></i>
    </div>

    <div class="tweet pull-left" id="twitter"><div class="spinner">
    <div class="rect1"></div>
    <div class="rect2"></div>
    <div class="rect3"></div>
    <div class="rect4"></div>
    <div class="rect5"></div>
    </div></div>
<div class="cf"></div>
</div>
<div class="cf"></div>
-->
<br/>

<?php
$args = array(
	'showposts' => '3',
);
?>
<?php $the_query = new WP_Query( $args ); ?>
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



            <div class="cf"></div><br/>
		</div><!-- #content -->
	</div><!-- #primary -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--
<script src="/wp-content/themes/isaagents-wp-theme/assets/js/jquery.twitter.min.js"></script>

<script type="text/javascript">
    twitterFetcher.fetch('361827374599389184', 'twitter', 1, true, false, false);
</script>
-->
<?php get_footer(); ?>