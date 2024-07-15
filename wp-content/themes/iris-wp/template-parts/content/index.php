<div class="wp-block wp-block-kubio-query-layout  position-relative wp-block-kubio-query-layout__outer iris-wp-index__k__1MCYzfcZN-outer iris-wp-local-364-outer d-flex h-section-global-spacing align-items-lg-center align-items-md-center align-items-center" data-kubio="kubio/query-layout" id="blog-layout">
	<div class="position-relative wp-block-kubio-query-layout__inner iris-wp-index__k__1MCYzfcZN-inner iris-wp-local-364-inner h-section-grid-container h-section-boxed-container">
		<div class="wp-block wp-block-kubio-row  position-relative wp-block-kubio-row__container iris-wp-index__k__baLWB4dRKjp-container iris-wp-local-365-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-0 gutters-row-v-0" data-kubio="kubio/row">
			<div class="position-relative wp-block-kubio-row__inner iris-wp-index__k__baLWB4dRKjp-inner iris-wp-local-365-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-0 gutters-col-v-lg-0 gutters-col-md-0 gutters-col-v-md-0 gutters-col-0 gutters-col-v-0">
				<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-index__k__kxeqsSpdy-n-container iris-wp-local-366-container d-flex h-col-lg h-col-md h-col-auto" data-kubio="kubio/column">
					<div class="position-relative wp-block-kubio-column__inner iris-wp-index__k__kxeqsSpdy-n-inner iris-wp-local-366-inner d-flex h-flex-basis h-px-lg-3 v-inner-lg-0 h-px-md-3 v-inner-md-0 h-px-3 v-inner-0">
						<div class="position-relative wp-block-kubio-column__align iris-wp-index__k__kxeqsSpdy-n-align iris-wp-local-366-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-start align-self-md-start align-self-start">
							<div class="wp-block wp-block-kubio-query  position-relative wp-block-kubio-query__container iris-wp-index__k__CtKC_EuIZL-container iris-wp-local-367-container" data-kubio="kubio/query">
								<div class="wp-block wp-block-kubio-query-loop  position-relative wp-block-kubio-query-loop__container iris-wp-index__k__vrf0UGkWrN-container iris-wp-local-368-container gutters-row-lg-0 gutters-row-v-lg-0 gutters-row-md-0 gutters-row-v-md-0 gutters-row-3 gutters-row-v-3" data-kubio="kubio/query-loop" data-kubio-component="masonry" data-kubio-settings="{&quot;enabled&quot;:true,&quot;targetSelector&quot;:&quot;.wp-block-kubio-query-loop__inner&quot;}">
									<div class="position-relative wp-block-kubio-query-loop__inner iris-wp-index__k__vrf0UGkWrN-inner iris-wp-local-368-inner h-row">
										<?php iris_wp_theme()->get('archive-loop')->render(array (
  'view' => 'content/index/loop-item',
)); ?>
									</div>
								</div>
								<?php if(iris_wp_has_pagination()): ?>
								<div class="wp-block wp-block-kubio-query-pagination  position-relative wp-block-kubio-query-pagination__container iris-wp-index__k__vD7AVCTELY-container iris-wp-local-378-container gutters-row-lg-3 gutters-row-v-lg-3 gutters-row-md-2 gutters-row-v-md-3 gutters-row-0 gutters-row-v-3" data-kubio="kubio/query-pagination">
									<div class="position-relative wp-block-kubio-query-pagination__inner iris-wp-index__k__vD7AVCTELY-inner iris-wp-local-378-inner h-row align-items-lg-stretch align-items-md-stretch align-items-stretch justify-content-lg-center justify-content-md-center justify-content-center gutters-col-lg-3 gutters-col-v-lg-3 gutters-col-md-2 gutters-col-v-md-3 gutters-col-0 gutters-col-v-3">
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-index__k__tBYU0uM8Xx-container iris-wp-local-379-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner iris-wp-index__k__tBYU0uM8Xx-inner iris-wp-local-379-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align iris-wp-index__k__tBYU0uM8Xx-align iris-wp-local-379-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(iris_wp_has_pagination_button(true)): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing iris-wp-index__k__ELgmeRXRD--spacing iris-wp-local-380-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer iris-wp-index__k__ELgmeRXRD--outer iris-wp-local-380-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link iris-wp-index__k__ELgmeRXRD--link iris-wp-local-380-link h-w-100 h-global-transition" href="<?php iris_wp_get_navigation_button_link(true); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text iris-wp-index__k__ELgmeRXRD--text iris-wp-local-380-text kubio-inherit-typography">
																	<?php esc_html_e('Previous', 'iris-wp'); ?>
																</span>
															</a>
														</span>
													</div>
													<?php endif; ?>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-index__k__P2OarhUKUK-container iris-wp-local-381-container d-flex h-col-lg h-col-md h-col" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner iris-wp-index__k__P2OarhUKUK-inner iris-wp-local-381-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-1 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align iris-wp-index__k__P2OarhUKUK-align iris-wp-local-381-align h-y-container h-column__content h-column__v-align flex-basis-100 align-self-lg-center align-self-md-center align-self-center">
													<div class="wp-block wp-block-kubio-pagination-numbers  position-relative wp-block-kubio-pagination-numbers__outer iris-wp-index__k__tRiQFlrj8q-outer iris-wp-local-382-outer" data-kubio="kubio/pagination-numbers">
														<?php iris_wp_pagination_numbers(); ?>
													</div>
												</div>
											</div>
										</div>
										<div class="wp-block wp-block-kubio-column  position-relative wp-block-kubio-column__container iris-wp-index__k__2nd5yuWmz9-container iris-wp-local-383-container d-flex h-col-lg-auto h-col-md-auto h-col-auto" data-kubio="kubio/column">
											<div class="position-relative wp-block-kubio-column__inner iris-wp-index__k__2nd5yuWmz9-inner iris-wp-local-383-inner d-flex h-flex-basis h-px-lg-2 v-inner-lg-2 h-px-md-2 v-inner-md-2 h-px-2 v-inner-2">
												<div class="position-relative wp-block-kubio-column__align iris-wp-index__k__2nd5yuWmz9-align iris-wp-local-383-align h-y-container h-column__content h-column__v-align flex-basis-auto align-self-lg-center align-self-md-center align-self-center">
													<?php if(iris_wp_has_pagination_button()): ?>
													<div class="position-relative wp-block-kubio-pagination-nav-button__spacing iris-wp-index__k__ACSe8L2gsX-spacing iris-wp-local-384-spacing">
														<span class="wp-block wp-block-kubio-pagination-nav-button  position-relative wp-block-kubio-pagination-nav-button__outer iris-wp-index__k__ACSe8L2gsX-outer iris-wp-local-384-outer kubio-button-container" data-kubio="kubio/pagination-nav-button">
															<a class="position-relative wp-block-kubio-pagination-nav-button__link iris-wp-index__k__ACSe8L2gsX-link iris-wp-local-384-link h-w-100 h-global-transition" href="<?php iris_wp_get_navigation_button_link(); ?>">
																<span class="position-relative wp-block-kubio-pagination-nav-button__text iris-wp-index__k__ACSe8L2gsX-text iris-wp-local-384-text kubio-inherit-typography">
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
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
