<?php if( have_rows( 'wysiwyg_module' ) ):?>
	
	<?php 
	require_once(get_template_directory() . '/functions-parts/blocks/style-indents.php'); ?>
    <?php while ( have_rows( 'wysiwyg_module' ) ) : the_row();?>
		<?php 
			$wysiwyg = get_sub_field("wysiwyg");
			$image   = get_sub_field("wysiwyg_image");
			//Wysiwyg Margin values
			$mt = get_sub_field('margin_top');
			$mr = get_sub_field('margin_right');
			$mb = get_sub_field('margin_bottom');
			$ml = get_sub_field('margin_left');		
			//Wysiwyg Padding values
			$pt = get_sub_field('padding_top');
			$pr = get_sub_field('padding_right');
			$pb = get_sub_field('padding_bottom');
			$pl = get_sub_field('padding_left');	
			//Button wrapper Margin values
			$bmt = get_sub_field('margin_top_wrp');
			$bmr = get_sub_field('margin_right_wrp');
			$bmb = get_sub_field('margin_bottom_wrp');
			$bml = get_sub_field('margin_left_wrp');
			//Etc variables
			$enableCtaBtn  = get_sub_field( 'enable_cta' );
			$enableCtaLink = get_sub_field( 'enable_anchor_link' );
			$enableWidget  = get_sub_field( 'add_third-party_script' );
			$ctaAnchorLink = get_sub_field( 'anchor_link' );
			$ctaText 	   = get_sub_field( 'text_cta' );
			$rmButton	   = get_sub_field( 'button_rmb' );

			$viewLayout = get_sub_field( 'view_layout' );
			$viewLayoutRevers = get_sub_field( 'view_layout_reverse' );

		?>


		<?php if (get_sub_field("wysiwyg") || isset($enableExtraContent)): ?>
			<div class="module-wysiwyg" style="margin: <?php echo styleIndent($mt, $mr, $mb, $ml); ?>; padding: <?php echo styleIndent($pt, $pr, $pb, $pl); ?>;" >
				<?php if (isset($wysiwyg) && !$image): ?>
				<div class="module-wysiwyg-content">
					<?php echo acf_esc_html($wysiwyg) ?>
				</div>					
				<?php else : ?>
				<div class="module-wysiwyg-wraper">
					<div class="module-wysiwyg-content">
						<?php echo acf_esc_html($wysiwyg) ?>
					</div>		
					<div class="module-wysiwyg-image">
						<img src="<?php echo esc_attr($image['url']) ?>" alt="<?php echo esc_attr($image['alt']) ?>">
					</div>		
				</div>			
				<?php endif ?>


			<?php if ($enableWidget || $enableCtaBtn): ?>
			<div class="module-wysiwyg__view<?php if ($viewLayout == false)  {echo " verical-view";} else {echo " horizontal-view";}if ($viewLayoutRevers) {echo " row-revers";} else {echo "";}?>
				">
				<?php if ($enableWidget == true): ?>
					<div class="module-wysiwyg__widgets scripts">
						<?php if( have_rows('add_third-party_widget') ): ?>
						    <?php while( have_rows('add_third-party_widget') ): the_row(); 
						        ?>
						        <div class="wysiwyg__widgets-item">
						        	<?php echo esc_html(the_sub_field('script_widget')); ?>
						        </div>
						    <?php endwhile; ?>		
					    <?php endif ?>				
					</div>					
				<?php endif ?>


				<?php if ( $enableCtaBtn == true): ?>
					<div class="module-wysiwyg__btns <?php  if ($viewLayout == false)  {echo " verical-view";} else {echo " horizontal-view";} ?>" style="margin: <?php echo styleIndent($bmt, $bmr, $bmb, $bml) ?>">
						<?php if ($enableCtaBtn == true && $enableCtaLink == false ): ?>
							<a  class="btn btn__button" href="#" ><?php echo esc_html($ctaText) ?></a>
						<?php elseif ($enableCtaBtn == true && $enableCtaLink == true ): ?>
							<a href="<?php echo esc_html($ctaAnchorLink) ?>" class="btn btn__button"><?php echo esc_html($ctaText) ?></a>
						<?php endif ?>

						<?php if( $rmButton ): 
						    $rmButton_url 	 = $rmButton['url'];
						    $rmButton_text  = $rmButton['title'];
						    $rmButton_target = $rmButton['target'] ? $rmButton['target'] : '_self';
						    ?>
						    <a class="btn btn__button secondary" href="<?php echo esc_url( $rmButton_url ); ?>" target="<?php echo esc_attr( $rmButton_target ); ?>"><?php echo esc_html( $rmButton_text ); ?></a>
						<?php endif; ?>	
					</div>
				<?php endif ?>	
				</div>
			</div>
			<?php endif ?>
		<?php endif ?>    	
    <?php endwhile; ?>
<?php endif; ?>

 








