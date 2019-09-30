<sidebar class="sidebar">
    <div class="widget-countries">
        <div class="widget__item">
            <h3>
                <a href=""><?php echo carbon_get_theme_option( 'crb_video_title' . get_lang() ); ?></a>
            </h3>

            <ul class="list">
				<?php
					$cat_args = array(
						'orderby'    => 'term_id',
						'order'      => 'ASC',
						'hide_empty' => true,
					);

					$terms = get_terms( 'category_video', $cat_args );
				?>
				<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?><?php foreach ( $terms as $term ): ?><?php
					$term_name = $term->name;
					$term_id   = $term->term_id;
					$term_slug = $term->slug;
					?>
                    <li>
                        <a href="<?php echo get_term_link( (int) $term_id, 'category_video' ); ?>">
							<?php echo $term_name; ?>
                        </a>
                    </li>
				<?php endforeach; ?>

				<?php endif; ?>
            </ul>
        </div>
    </div>
</sidebar>
