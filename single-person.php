<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content" style="width:100%">
		<div id="content" role="main" >


                                  <?php
                                    $research_area = strtolower(get_post_meta( get_the_ID(), 'person_info_research_area', true ));
                                    $research_area = str_replace(" ", "_", $research_area);

                                    $research_location = strtolower(get_post_meta( get_the_ID(), 'person_info_location_of_interest', true ));
                                    $research_location = str_replace(" ", "_", $research_location);

                                    if($research_location == "both") {
                                        $research_location = "arctic antarctic";
                                    }
                                ?>





<div class="cf"></div><br/>
            <div style="width: 80%; margin: 0 auto" align="center">
            <div class="person-detail-image" style="background:url(<?php echo get_post_meta( get_the_ID(), 'person_info_profile_image', true );?>) no-repeat; background-size: 100%;">
            </div>


            <div class="cf"></div>

<br/>
                            <div class="name" style="font-weight:bolder; font-size: 1.3em"><?php echo get_post_meta( get_the_ID(), 'person_info_title', true );?> <?php echo the_title();?></div>



                                            <div class="position"><?php echo get_post_meta( get_the_ID(), 'person_info_position', true );?></div>
                                            <div class="department"><?php echo get_post_meta( get_the_ID(), 'person_info_department', true );?></div>

                        <div class="contact-details">

                                    <?php
                                        if (get_post_meta( get_the_ID(), 'person_info_email', true ) != "") {
                                    ?>
                                        <a href="mailto:<?php echo get_post_meta( get_the_ID(), 'person_info_email', true )?>"><i class="fa fa-envelope" style="font-size:1.6em"></i></a>

                                    <?php
                                        }
                                    ?>

                                    <?php
                                        if (get_post_meta( get_the_ID(), 'person_info_website', true ) != "") {
                                    ?>
                                        <a target="_blank" href="<?php echo get_post_meta( get_the_ID(), 'person_info_website', true )?>"><i class="fa fa-home" style="font-size:1.5em"></i></a>
                                    <?php
                                        }
                                    ?>

                                    <?php
                                        if (get_post_meta( get_the_ID(), 'person_info_github', true ) != "") {
                                    ?>
                                        <a target="_blank" style="width: 200px; overflow: scroll;" href="<?php echo get_post_meta( get_the_ID(), 'person_info_github', true )?>"><i class="fa fa-github-alt" style="font-size:1.6em"></i></a>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                        if (get_post_meta( get_the_ID(), 'person_info_linkedin', true ) != "") {
                                    ?>
                                        <a target="_blank" style="width: 200px; overflow: scroll;" href="<?php echo get_post_meta( get_the_ID(), 'person_info_linkedin', true )?>"><i class="fa fa-linkedin-square" style="font-size:1.6em"></i></a>
                                    <?php } ?>

                                    <?php
                                                                            if (get_post_meta( get_the_ID(), 'person_info_google_plus', true ) != "") {
                                                                        ?>
                                                                            <a target="_blank" style="width: 200px; overflow: scroll;" href="<?php echo get_post_meta( get_the_ID(), 'person_info_google_plus', true )?>"><i class="fa fa-google-plus-square" style="font-size:1.6em"></i></a>
                                                                        <?php } ?>




                                    </div>

                                    <div class="person-bio">
                                                                                    <div class="clearfix"></div><br/>


                                                            <?php echo get_post_meta( get_the_ID(), 'person_info_biography', true );?>

                                                            </div>
                    </div>

             </div>



               <div class="cf"></div>
               <br/><br/>
               <?php edit_post_link( __( 'Edit Person', 'person' ), '<span class="edit-link">', '</span>' ); ?>
               <div class="cf"></div>
               <br/><br/>


		</div><!-- #content -->
	</div><!-- #primary -->


<style>
    .person-detail-image {
        width: 240px;
        height: 240px;
        border-radius: 50%;
    }

    .contact-details a {
        color: #414241;
    }
</style>
<?php get_footer(); ?>