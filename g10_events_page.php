<?php /* Template Name: G10 Events Page*/ ?>

<style>
    header {
        /* display: none; */
        background-image: url('/wp-content/uploads/2019/02/night-shot.jpg') !important;
    }
    .blog-content {
        padding-top: 100px;
    }

    #mainNav {
        background-color: #022a62;
    }

</style>

<?php



get_header(); ?>

	<!-- Page Content Removed container -->
    <div class="blog-content container">

        <div class="row">


            <!-- Blog Post Content Column col-sm-8 -->
            <div class="">

			<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'page' );

				 endwhile; // End of the loop.
			?>

			</div>


		</div><!--row-->

		<hr>

		<?php get_footer(); ?>
