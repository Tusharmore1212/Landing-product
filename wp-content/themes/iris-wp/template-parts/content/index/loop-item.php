<div class="<?php iris_wp_print_archive_entry_class('wp-block wp-block-kubio-query-loop-item  position-relative wp-block-kubio-query-loop-item__container iris-wp-index__k__fx1L_l5Ny--container iris-wp-local-369-container d-flex   '); ?>"" data-kubio="kubio/query-loop-item">
	<div class="position-relative wp-block-kubio-query-loop-item__inner iris-wp-index__k__fx1L_l5Ny--inner iris-wp-local-369-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
		<div class="position-relative wp-block-kubio-query-loop-item__align iris-wp-index__k__fx1L_l5Ny--align iris-wp-local-369-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
			<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container iris-wp-index__k__R09rqmqBvs-container iris-wp-local-370-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
				<div class="position-relative wp-block-kubio-row__inner iris-wp-index__k__R09rqmqBvs-inner iris-wp-local-370-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-index__k__VV8lxxkbru-container iris-wp-local-371-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner iris-wp-index__k__VV8lxxkbru-inner iris-wp-local-371-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
							<div class="position-relative wp-block-kubio-column__align iris-wp-index__k__VV8lxxkbru-align iris-wp-local-371-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
								<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container iris-wp-index__k__6duco09NdG-container iris-wp-local-372-container h-aspect-ratio--4-3 <?php iris_wp_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
									<?php if(has_post_thumbnail()): ?>
									<img class='position-relative wp-block-kubio-post-featured-image__image iris-wp-index__k__6duco09NdG-image iris-wp-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
									<?php endif; ?>
									<div class="position-relative wp-block-kubio-post-featured-image__inner iris-wp-index__k__6duco09NdG-inner iris-wp-local-372-inner">
										<div class="position-relative wp-block-kubio-post-featured-image__align iris-wp-index__k__6duco09NdG-align iris-wp-local-372-align h-y-container align-self-lg-center align-self-md-center align-self-center"></div>
									</div>
								</figure>
							</div>
						</div>
					</div>
					<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-index__k__y2AvKHSUSW-container iris-wp-local-373-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
						<div class="position-relative wp-block-kubio-column__inner iris-wp-index__k__y2AvKHSUSW-inner iris-wp-local-373-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-2 h-px-md-0 v-inner-md-3 h-px-0 v-inner-3">
							<div class="position-relative wp-block-kubio-column__align iris-wp-index__k__y2AvKHSUSW-align iris-wp-local-373-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
								<a class="position-relative wp-block-kubio-post-title__link iris-wp-index__k__yndIzn0LAb-link iris-wp-local-374-link d-block" href="<?php echo esc_url(get_the_permalink()); ?>">
									<h5 class="wp-block wp-block-kubio-post-title  position-relative wp-block-kubio-post-title__container iris-wp-index__k__yndIzn0LAb-container iris-wp-local-374-container" data-kubio="kubio/post-title">
										<?php the_title(); ?>
									</h5>
								</a>
								<p class="wp-block wp-block-kubio-post-excerpt  position-relative wp-block-kubio-post-excerpt__text iris-wp-index__k__fVTtKcA3Zp-text iris-wp-local-375-text" data-kubio="kubio/post-excerpt">
									<?php iris_wp_post_excerpt(array (
  'max_length' => 16,
)); ?>
								</p>
								<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer iris-wp-index__k__vW_FiC7VX-metaDataContainer iris-wp-local-376-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
									<span class="metadata-item">
										<a href="<?php echo esc_url(get_day_link(get_post_time( 'Y' ),get_post_time( 'm' ),get_post_time( 'j' ))); ?>">
											<?php echo esc_html(get_the_date('j F, Y')); ?>
										</a>
									</span>
									<span class="metadata-separator">
										-
									</span>
									<span class="metadata-item">
										<span class="metadata-prefix">
											<?php esc_html_e('Author:', 'iris-wp'); ?>
										</span>
										<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta("ID"))); ?>">
											<?php echo esc_html(get_the_author_meta("display_name",get_post_field("post_author"))); ?>
										</a>
									</span>
								</div>
								<div class="position-relative wp-block-kubio-read-more-button__spacing iris-wp-index__k__5npyJrxknh-spacing iris-wp-local-377-spacing">
									<span class="wp-block wp-block-kubio-read-more-button  position-relative wp-block-kubio-read-more-button__outer iris-wp-index__k__5npyJrxknh-outer iris-wp-local-377-outer kubio-button-container" data-kubio="kubio/read-more-button">
										<a class="position-relative wp-block-kubio-read-more-button__link iris-wp-index__k__5npyJrxknh-link iris-wp-local-377-link h-w-100 h-global-transition" href="<?php echo esc_url(get_the_permalink()); ?>">
											<span class="position-relative wp-block-kubio-read-more-button__text iris-wp-index__k__5npyJrxknh-text iris-wp-local-377-text kubio-inherit-typography">
												<?php esc_html_e('Read more', 'iris-wp'); ?>
											</span>
										</a>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
