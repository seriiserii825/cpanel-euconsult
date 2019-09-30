<?php
	get_header();
?>
<div class="finance-single">
    <section class="finance-single section-dark page-intro" style="background-image: url('<?php echo $page_bg_image_url; ?>'); background-position: center; background-size: cover;">
        <div class="page-intro__container">
            <header class="section__header section__header--center">
                <h2 class="section__title"><?php single_term_title(); ?></h2>
            </header>
        </div>
    </section>
    <section class="finance-single__container">
		<?php get_sidebar( 'categories' ); ?>
        <section class="main-single">
			<?php if ( have_posts() ): ?><?php while ( have_posts() ): ?><?php the_post(); ?>
                <div class="page-title taxonomy">
                    <h2 class="section__title"><?php the_title(); ?></h2>
                </div>

                <?php the_content(); ?>
			<?php endwhile; ?><?php else: ?><?php endif; ?>
        </section>
    </section>
</div>

<?php get_footer(); ?>
