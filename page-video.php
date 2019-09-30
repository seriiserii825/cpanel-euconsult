<?php
    get_header();
	/**
	 * Template Name: Video Page
	 */
?>
<?php if (have_posts()): ?>

	<?php the_post(); ?>

	<?php $page_bg_image_url = getThePostThumbSrc(1920, 340); ?>

	<div class="finance-single">
		<section class="finance-single section-dark page-intro" style="background-image: url('<?php echo $page_bg_image_url; ?>'); background-position: center; background-size: cover;">
			<div class="page-intro__container">
				<header class="section__header section__header--center">
					<h2 class="section__title"><?php the_title(); ?></h2>
				</header>
<!--				<p>--><?php //echo carbon_get_theme_option('crb_finance_single_text' . get_lang()); ?><!--</p>-->
			</div>
		</section>
		<section class="finance-single__container">
			<?php get_sidebar('categories'); ?>
			<section class="main-single">
				<?php
					$video = new WP_Query([
						'post_type' => 'video',
						'posts_per_page' => 1,
                        'category_video' => 'legumicultura'
					]);
				?>
                <?php if($video->have_posts()): ?>
                    <?php while($video->have_posts()): ?>
                        <?php $video->the_post(); ?>

                        <video controls poster="https://html5book.ru/wp-content/themes/papercuts/video/martynko.png" preload="none">
                            <source src="<?php echo carbon_get_the_post_meta('crb_video_file'); ?>" type="video/mp4">
                        </video>
                    <?php endwhile; ?>
                    <?php else: ?>
                <?php endif; ?>
            </section>
        </section>
<!--		--><?php //require_once __DIR__.'/template-parts/connect-now.php';?>
	</div>

<?php endif; ?>

<?php get_footer(); ?>
