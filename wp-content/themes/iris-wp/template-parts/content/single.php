<div id="post-<?php the_ID(); ?>" class=" <?php get_post_class() ?> wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer iris-wp-single__k__single-lAFSH8Xo9x-outer iris-wp-local-700-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner iris-wp-single__k__single-lAFSH8Xo9x-inner iris-wp-local-700-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container iris-wp-single__k__single-baLWB4dRKjp-container iris-wp-local-701-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner iris-wp-single__k__single-baLWB4dRKjp-inner iris-wp-local-701-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-single__k__single-kxeqsSpdy-n-container iris-wp-local-702-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner iris-wp-single__k__single-kxeqsSpdy-n-inner iris-wp-local-702-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align iris-wp-single__k__single-kxeqsSpdy-n-align iris-wp-local-702-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<figure class="wp-block wp-block-kubio-post-featured-image  position-relative wp-block-kubio-post-featured-image__container iris-wp-single__k__single-rlYTEhTMib-container iris-wp-local-703-container h-aspect-ratio--4-3 <?php iris_wp_post_missing_featured_image_class(); ?>" data-kubio="kubio/post-featured-image" data-kubio-settings="{{kubio_settings_value}}">
								<?php if(has_post_thumbnail()): ?>
								<img class='position-relative wp-block-kubio-post-featured-image__image iris-wp-single__k__single-rlYTEhTMib-image iris-wp-local--image' src='<?php echo esc_url(get_the_post_thumbnail_url());?>' />
								<?php endif; ?>
								<div class="position-relative wp-block-kubio-post-featured-image__inner iris-wp-single__k__single-rlYTEhTMib-inner iris-wp-local-703-inner">
									<div class="position-relative wp-block-kubio-post-featured-image__align iris-wp-single__k__single-rlYTEhTMib-align iris-wp-local-703-align h-y-container align-self-lg-end align-self-md-end align-self-end"></div>
								</div>
							</figure>
							<div class="wp-block wp-block-kubio-post-meta  position-relative wp-block-kubio-post-meta__metaDataContainer iris-wp-single__k__single-Xy3_sNqX1-metaDataContainer iris-wp-local-704-metaDataContainer h-blog-meta" data-kubio="kubio/post-meta">
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
							<div class="wp-block wp-block-kubio-post-categories  position-relative wp-block-kubio-post-categories__container iris-wp-single__k__single--DAcGXV_T-container iris-wp-local-705-container kubio-post-categories-container" data-kubio="kubio/post-categories">
								<div class="position-relative wp-block-kubio-post-categories__placeholder iris-wp-single__k__single--DAcGXV_T-placeholder iris-wp-local-705-placeholder kubio-post-categories-placeholder"></div>
								<div class="position-relative wp-block-kubio-post-categories__tags iris-wp-single__k__single--DAcGXV_T-tags iris-wp-local-705-tags">
									<?php iris_wp_categories_list(__('No category', 'iris-wp')); ?>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer iris-wp-single__k__aCvDQQ1PSq-outer iris-wp-local-706-outer" data-kubio="kubio/divider">
								<div class="position-relative wp-block-kubio-divider__width-container iris-wp-single__k__aCvDQQ1PSq-width-container iris-wp-local-706-width-container">
									<div class="position-relative wp-block-kubio-divider__line iris-wp-single__k__aCvDQQ1PSq-line iris-wp-local-706-line"></div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container iris-wp-single__k__single-SbdKxHs2YI-container iris-wp-local-707-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner iris-wp-single__k__single-SbdKxHs2YI-inner iris-wp-local-707-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-single__k__single-3VGwAjm9cX-container iris-wp-local-708-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner iris-wp-single__k__single-3VGwAjm9cX-inner iris-wp-local-708-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-0 h-px-md-0 v-inner-md-0 h-px-0 v-inner-0">
											<div class="position-relative wp-block-kubio-column__align iris-wp-single__k__single-3VGwAjm9cX-align iris-wp-local-708-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
												<?php the_content(); ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer iris-wp-single__k__aCvDQQ1PSq-outer iris-wp-local-709-outer" data-kubio="kubio/divider">
								<div class="position-relative wp-block-kubio-divider__width-container iris-wp-single__k__aCvDQQ1PSq-width-container iris-wp-local-709-width-container">
									<div class="position-relative wp-block-kubio-divider__line iris-wp-single__k__aCvDQQ1PSq-line iris-wp-local-709-line"></div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container iris-wp-single__k__single-1uGRU27HVz-container iris-wp-local-710-container gutters-row-lg-0 gutters-row-v-lg-1 gutters-row-md-0 gutters-row-v-md-1 gutters-row-0 gutters-row-v-1" data-kubio="kubio/row">
								<div class="position-relative wp-block-kubio-row__inner iris-wp-single__k__single-1uGRU27HVz-inner iris-wp-local-710-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-1 gutters-col-md-0 gutters-col-v-md-1 gutters-col-0 gutters-col-v-1">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-single__k__single-K4Akm2YNqS-container iris-wp-local-711-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner iris-wp-single__k__single-K4Akm2YNqS-inner iris-wp-local-711-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-1 h-px-md-0 v-inner-md-1 h-px-0 v-inner-1">
											<div class="position-relative wp-block-kubio-column__align iris-wp-single__k__single-K4Akm2YNqS-align iris-wp-local-711-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
												<p class="wp-block wp-block-kubio-text  position-relative wp-block-kubio-text__text iris-wp-single__k__single-1pwRcGAnh-text iris-wp-local-712-text" data-kubio="kubio/text">
													<?php esc_html_e('Tags:', 'iris-wp'); ?>
												</p>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-single__k__single-LfW21x_joR-container iris-wp-local-713-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner iris-wp-single__k__single-LfW21x_joR-inner iris-wp-local-713-inner d-flex h-flex-basis h-px-lg-1 v-inner-lg-1 h-px-md-1 v-inner-md-1 h-px-1 v-inner-1">
											<div class="position-relative wp-block-kubio-column__align iris-wp-single__k__single-LfW21x_joR-align iris-wp-local-713-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
												<div class="wp-block wp-block-kubio-post-tags  position-relative wp-block-kubio-post-tags__container iris-wp-single__k__single-tlSt_AyBi-container iris-wp-local-714-container kubio-post-tags-container" data-kubio="kubio/post-tags">
													<div class="position-relative wp-block-kubio-post-tags__placeholder iris-wp-single__k__single-tlSt_AyBi-placeholder iris-wp-local-714-placeholder kubio-post-tags-placeholder"></div>
													<div class="position-relative wp-block-kubio-post-tags__tags iris-wp-single__k__single-tlSt_AyBi-tags iris-wp-local-714-tags">
														<?php iris_wp_tags_list(__('No tags', 'iris-wp')); ?>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="wp-block wp-block-kubio-divider  position-relative wp-block-kubio-divider__outer iris-wp-single__k__aCvDQQ1PSq-outer iris-wp-local-715-outer" data-kubio="kubio/divider">
								<div class="position-relative wp-block-kubio-divider__width-container iris-wp-single__k__aCvDQQ1PSq-width-container iris-wp-local-715-width-container">
									<div class="position-relative wp-block-kubio-divider__line iris-wp-single__k__aCvDQQ1PSq-line iris-wp-local-715-line"></div>
								</div>
							</div>
							<?php if(iris_wp_has_pagination()): ?>
							<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container iris-wp-single__k__single-nqLiVZCaYo-container iris-wp-local-716-container gutters-row-lg-0 gutters-row-v-lg-2 gutters-row-md-0 gutters-row-v-md-2 gutters-row-0 gutters-row-v-2" data-kubio="kubio/query-pagination">
								<div class="position-relative wp-block-kubio-query-pagination__inner iris-wp-single__k__single-nqLiVZCaYo-inner iris-wp-local-716-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-start justify-content-md-start justify-content-start gutters-col-lg-0 gutters-col-v-lg-2 gutters-col-md-0 gutters-col-v-md-2 gutters-col-0 gutters-col-v-2">
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-single__k__single-3ndM77FkZV-container iris-wp-local-717-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner iris-wp-single__k__single-3ndM77FkZV-inner iris-wp-local-717-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align iris-wp-single__k__single-3ndM77FkZV-align iris-wp-local-717-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
												<?php if(iris_wp_has_pagination_button(true)): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing iris-wp-single__k__single-ELgmeRXRD--spacing iris-wp-local-718-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer iris-wp-single__k__single-ELgmeRXRD--outer iris-wp-local-718-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link iris-wp-single__k__single-ELgmeRXRD--link iris-wp-local-718-link h-w-100 h-global-transition" href="<?php iris_wp_get_navigation_button_link(true); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text iris-wp-single__k__single-ELgmeRXRD--text iris-wp-local-718-text kubio-inherit-typography">
																<?php esc_html_e('Previous', 'iris-wp'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
									<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-single__k__single-mMPMCQqWfs-container iris-wp-local-719-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
										<div class="position-relative wp-block-kubio-column__inner iris-wp-single__k__single-mMPMCQqWfs-inner iris-wp-local-719-inner d-flex h-flex-basis h-px-lg-0 v-inner-lg-2 h-px-md-0 v-inner-md-2 h-px-0 v-inner-2">
											<div class="position-relative wp-block-kubio-column__align iris-wp-single__k__single-mMPMCQqWfs-align iris-wp-local-719-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-start align-self-md-start align-self-start">
												<?php if(iris_wp_has_pagination_button()): ?>
												<div class="position-relative wp-block-kubio-pagination-nav-button__spacing iris-wp-single__k__single-ACSe8L2gsX-spacing iris-wp-local-720-spacing">
													<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer iris-wp-single__k__single-ACSe8L2gsX-outer iris-wp-local-720-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
														<a class="position-relative wp-block-kubio-pagination-nav-button__link iris-wp-single__k__single-ACSe8L2gsX-link iris-wp-local-720-link h-w-100 h-global-transition" href="<?php iris_wp_get_navigation_button_link(); ?>">
															<span class="position-relative wp-block-kubio-pagination-nav-button__text iris-wp-single__k__single-ACSe8L2gsX-text iris-wp-local-720-text kubio-inherit-typography">
																<?php esc_html_e('Next', 'iris-wp'); ?>
															</span>
														</a>
													</span>
												</div>
												<?php endif; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php endif; ?>
							<div class="wp-block wp-block-kubio-post-comments kubio-migration--1 position-relative wp-block-kubio-post-comments__commentsContainer iris-wp-single__k__single-s5UQRGEAN-commentsContainer iris-wp-local-721-commentsContainer" data-kubio="kubio/post-comments">
								<?php iris_wp_post_comments(array (
  'none' => __('No responses yet', 'iris-wp'),
  'one' => __('One response', 'iris-wp'),
  'multiple' => __('{COMMENTS-COUNT} Responses', 'iris-wp'),
  'disabled' => __('Comments are closed', 'iris-wp'),
  'avatar_size' => __('32', 'iris-wp'),
)); ?>
							</div>
							<div class="wp-block wp-block-kubio-post-comments-form  position-relative wp-block-kubio-post-comments-form__container iris-wp-single__k__single-oXoikmHxB-container iris-wp-local-722-container" data-kubio="kubio/post-comments-form">
								<?php comment_form(); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
