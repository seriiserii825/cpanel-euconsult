<?php
	get_header();

?><?php if ( have_posts() ): ?><?php the_post(); ?><?php
	$category      = get_the_category();
	$category_name = $category[0]->name;
	?>
    <section class="news single-news">
        <section class="section-dark page-intro" style="background-image: url('<?php echo getThePostThumbSrc(); ?>'); background-position: center 18%">
            <div class="page-intro__container">
                <header class="section__header section__header--center">
                    <h2 class="section__title"><?php the_title(); ?></h2>
                </header>
            </div>
        </section>
        <div class="news__container">
            <div class="news__single">
                <div class="news__single-header">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/logo.png" alt="">
                    <div class="news__item-data">
                        <div class="news__item-data-header">
                            <h6 class="news__item-data-title">Eu Consult</h6>
                            <svg class="ALGr5" xmlns="http://www.w3.org/2000/svg" width="19" viewbox="0 0 19 19" style="fill-rule:evenodd">
                                <path d="M15.3812,6.495914 L12.6789333,8.77258837 C12.6191333,8.84477644 12.5099333,8.85722265 12.4354,8.79997005 C12.4215333,8.79001308 12.4094,8.77756686 12.3998667,8.76429089 L9.78686667,6.14327115 C9.67766667,5.99225704 9.46186667,5.95491839 9.305,6.05863687 C9.26946667,6.08186981 9.23913333,6.11091099 9.21573333,6.14493065 L6.60013333,8.81075677 C6.5464,8.88626383 6.43893333,8.90534803 6.3592,8.85390366 C6.34446667,8.84394669 6.33146667,8.83233022 6.32106667,8.81905425 L3.61966667,6.50587098 C3.5018,6.36149485 3.28426667,6.33577266 3.13346667,6.44861837 C3.0494,6.51167921 3,6.60792997 3,6.70998895 L4,14 L15,14 L16,6.70169148 C16,6.51831719 15.8448667,6.36979232 15.6533333,6.36979232 C15.5476,6.36979232 15.4470667,6.41625821 15.3812,6.495914 Z"></path>
                            </svg>
                        </div>
                        <div class="news__item-show-link">
                            <div class="news__item-circle">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <a class="news__item-link" href="#">
                                <svg class="blog-icon-fill" xmlns="http://www.w3.org/2000/svg" width="19" viewbox="0 0 19 19" role="img">
                                    <path d="M16.9410444,8.39109677 C17.0195644,8.46818967 17.0195644,8.59371274 16.9410444,8.67080564 L11.9026789,13.6176004 C11.7063789,13.8103326 11.3872657,13.8103326 11.1909657,13.6176004 C11.096339,13.5246935 11.0429857,13.3991705 11.0429857,13.2677172 L11.0429857,11.0013834 C7.27402658,11.0013834 4.38690723,12.7339971 2.38263435,16.1972475 C2.27794104,16.3781194 1.99204777,16.3049799 2.0001011,16.0964337 C2.24975438,10.0357454 5.2637137,6.69011101 11.0429857,6.05953059 L11.0429857,3.79418524 C11.0429857,3.52040659 11.268479,3.29999995 11.5463189,3.29999995 C11.6802056,3.29999995 11.8080522,3.35139522 11.9026789,3.44430206 L16.9410444,8.39109677 Z M3.43409745,13.1243046 C5.43837033,11.0576217 7.98624309,10.0139024 11.0434891,10.0139024 L12.0501555,10.0139024 L12.0501555,12.0746551 L15.6600614,8.53035818 L12.0501555,4.98704968 L12.0501555,6.94501178 L11.1542224,7.0418721 C6.94635665,7.50146442 4.39949056,9.49994971 3.43409745,13.1243046 Z"></path>
                                </svg>
                                <span>Partajeaza postarea</span>
                            </a>
                        </div>
                    </div>
                    <div class="news__item-time">
                        <div class="news__item-date">
                            <span><?php echo get_the_date( 'd M Y' ); ?></span>
                            <span><?php echo carbon_get_the_post_meta( 'crb_news_time' ); ?> min</span>
                            <span><?php echo carbon_get_theme_option( 'crb_for_write_all' . get_lang() ); ?></span>
                        </div>
                    </div>
                </div>
                <h2 class="news__single-title"><?php the_title(); ?></h2>
                <div class="news__single-content">
					<?php the_content(); ?>
                </div>

                <div class="news__single-footer">
                    <div class="socials">
                        <div class="socials__links">
                            <a href="<?php echo carbon_get_theme_option( 'crb_facebook' ); ?>">
                                <i class="fab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/facebook-logo-dark.svg">
                                </i></a>
                            <a href="<?php echo carbon_get_theme_option( 'crb_twitter' ); ?>">
                                <i class="fab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/twitter.svg">
                                </i></a>
                            <a href="<?php echo carbon_get_theme_option( 'crb_linkedin' ); ?>"><i class="fab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/linkedin-logo.svg">
                                </i></a>
                            <a id="js-show-address-string" href="<?php echo carbon_get_theme_option( 'crb_link' ); ?>">
                                <i class="fab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/i/svg/link-symbol.svg">
                                </i></a>
                        </div>
                        <div class="socials__category">
							<?php echo $category_name; ?>
                        </div>
                    </div>
                    <div class="news__item-footer">
                        <span class="news__show">
                            <span class="pageviews-placeholder" data-key="92">
                                <?php echo do_action( 'pageviews' ); ?>
                            </span>
                            afisare</span>
                        <span class="news__like">
                               <?php echo do_shortcode( '[wp_ulike]' ); ?>
                        </span>
                    </div>
                </div>
            </div>
            <section class="last-posts">
                <header class="last-posts__header">
                    <h4 class="last-posts__title"><?php echo carbon_get_theme_option( 'crb_last_posts_title' . get_lang() ); ?></h4>
                    <a class="last-posts__link" href="<?php echo get_category_link( 2 ); ?>"><?php echo carbon_get_theme_option( 'crb_last_posts_all' . get_lang() ); ?></a>
                </header>

				<?php
					$last_posts = new WP_Query( [
						'category_name'  => 'news',
						'posts_per_page' => 3
					] );
				?>
                <div class="last-posts-content">
					<?php if ( $last_posts->have_posts() ): ?><?php while ( $last_posts->have_posts() ): ?><?php $last_posts->the_post(); ?>
                        <div class="last-posts__item">
                            <a href="<?php the_permalink(); ?>">
								<?php echo kama_thumb_img( 'w=290 &h=170' ); ?>
                            </a>
                            <div class="last-posts__text">
                                <h3>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <footer class="news__item-footer"><span class="news__show"><i class="fas fa-eye"></i> <?php do_action( 'pageviews' ); ?></span>
                                    <a class="news__comment-link" href="#"><?php echo carbon_get_theme_option( 'crb_write_a_comment_all' . get_lang() ); ?></a>
                                    <span class="news__like"><span class="news__like-number"></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" viewbox="0 0 19 19" role="img">
                                              <path d="M9.44985848,15.5291774 C9.43911371,15.5362849 9.42782916,15.5449227 9.41715267,15.5553324 L9.44985848,15.5291774 Z M9.44985848,15.5291774 L9.49370677,15.4941118 C9.15422701,15.7147757 10.2318883,15.0314406 10.7297038,14.6971183 C11.5633567,14.1372547 12.3827081,13.5410755 13.1475707,12.9201001 C14.3829188,11.9171478 15.3570936,10.9445466 15.9707237,10.0482572 C16.0768097,9.89330422 16.1713564,9.74160032 16.2509104,9.59910798 C17.0201658,8.17755699 17.2088969,6.78363112 16.7499013,5.65913129 C16.4604017,4.81092573 15.7231445,4.11008901 14.7401472,3.70936139 C13.1379564,3.11266008 11.0475663,3.84092251 9.89976068,5.36430396 L9.50799408,5.8842613 L9.10670536,5.37161711 C7.94954806,3.89335486 6.00516066,3.14638251 4.31830373,3.71958508 C3.36517186,4.00646284 2.65439601,4.72068063 2.23964629,5.77358234 C1.79050315,6.87166888 1.98214559,8.26476279 2.74015555,9.58185512 C2.94777753,9.93163559 3.23221417,10.3090129 3.5869453,10.7089994 C4.17752179,11.3749196 4.94653811,12.0862394 5.85617417,12.8273544 C7.11233096,13.8507929 9.65858244,15.6292133 9.58280954,15.555334 C9.53938013,15.5129899 9.48608859,15.5 9.50042471,15.5 C9.5105974,15.5 9.48275828,15.5074148 9.44985848,15.5291774 Z"></path>
                                            </svg>
                                        </span>
                                </footer>
                            </div>
                        </div>

					<?php endwhile; ?><?php else: ?><?php endif; ?>

                </div>
            </section>
        </div>
    </section>
<?php else: ?><?php endif; ?>

<?php
	$phone = carbon_get_theme_option('crb_connect_phone');
	$phone_clear = clear_phone($phone);

?>
    <section class="connect-now">
        <h2 class="connect-now__title"><?php echo carbon_get_theme_option('crb_connect_title' . get_lang()); ?></h2>
        <div class="connect-now__links">
            <a class="connect-now__popup popup-btn" href="#">
                <img src="<?php echo get_template_directory_uri() ?>/assets/i/letter-white.png">
                <span><?php echo carbon_get_theme_option('crb_connect_text' . get_lang()); ?></span></a>
            <a class="connect-now__phone" href="tel:<?php echo $phone_clear; ?>">
                <img src="<?php echo get_template_directory_uri() ?>/assets/i/icon-phone-white.png">
                <span><?php echo $phone; ?></span>
            </a>
        </div>

        <form class="form-back">
            <input type="button" value="<?php echo carbon_get_theme_option('crb_back_button_title'.get_lang()); ?>"
                    onClick="history.back()">
        </form>
    </section>
<?php
	get_footer();
