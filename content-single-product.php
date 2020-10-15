<p>
				<?php if( $product->is_type('variable') ){ ?>
					<div class="variations">
		      <div class="variations__buttons">
						<?php
						$vars = $product->get_children();
						foreach ($vars as $key => $value) {
							$variation = wc_get_product($value);
							$id = $variation->get_id();
							$attr_en = $variation->get_attribute('pa_sizes');
							$attr_ch = $variation->get_attribute('pa_尺寸'); ?>

							<p class="variations__value <?php echo 'size-'.$attr_en; ?>" data-id="<?php echo $id; ?>">
								<?php if(ICL_LANGUAGE_CODE == 'en'){
									echo $attr_en;
								} elseif ( ICL_LANGUAGE_CODE == 'zh-hant' ){

										echo $variation->get_name();
								} ?>

							</p>
						<?php } ?>
		      </div>

					<div class="variations_add">
						<div class="quantity quantity-border">
					    <span class="qty__arrow qty__arrow-left ion-arrow-left-b"></span>
								<input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
							<span class="qty__arrow qty__arrow-right ion-arrow-right-b"></span>
						</div>
						<a href="#" class="variations__button" data-id="">
							<?php if(ICL_LANGUAGE_CODE == 'en'){
								echo 'add to cart';
							} elseif ( ICL_LANGUAGE_CODE == 'zh-hant' ){
									echo '添加到購物車';
							} ?>
						</a>
					</div>
					<div class="variations__message">
						<p>
							<?php if(ICL_LANGUAGE_CODE == 'en'){
								echo 'choose size';
							} elseif ( ICL_LANGUAGE_CODE == 'zh-hant' ){
									echo '選擇尺碼';
							} ?>

						</p>
					</div>
				</div><!--variations-->
				<?php } else { ?>
					<div class="variations_add">
						<div class="quantity quantity-border">
					    <span class="qty__arrow qty__arrow-left ion-arrow-left-b"></span>
								<input type="number" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
							<span class="qty__arrow qty__arrow-right ion-arrow-right-b"></span>
						</div>
						<a href="#" class="variations__button" data-id="<?php echo get_the_ID(); ?>">
							<?php if(ICL_LANGUAGE_CODE == 'en'){
								echo 'add to cart';
							} elseif ( ICL_LANGUAGE_CODE == 'zh-hant' ){
									echo '添加到購物車';
							} ?>

						</a>
					</div>
				<?php } ?>
			</p>