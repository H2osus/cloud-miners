<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cloud_miners
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h3 class="comment__title">
			<?php
			$cloud_miners_comment_count = get_comments_number();

				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( 'Комментарий (%1$s)', 'Комментарии (%1$s)', $cloud_miners_comment_count, 'comments title', 'cloud_miners' ) ),
					number_format_i18n( $cloud_miners_comment_count ),

				);
			?>
            <button class="leave-comment-trigger button purple-outline-button"><?= esc_html__('Оставить Комментарий', 'cloud_miners') ?></button>
		</h3><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
                    'type' => 'all',
                    'max_depth' => 4,
                    'per_page' => 6,
                    'callback' => 'cloud_miners_comment',
                    'end-callback' => 'cloud_miners_comment_end'
                )
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'cloud_miners' ); ?></p>
			<?php
		endif;

        else: ?>
            <h3 class="comment__title">
                <?php
                $cloud_miners_comment_count = get_comments_number();

                printf(
                /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( 'Комментарий (%1$s)', 'Комментарии (%1$s)', $cloud_miners_comment_count, 'comments title', 'cloud_miners' ) ),
                    number_format_i18n( $cloud_miners_comment_count ),

                );
                ?>
                <button class="leave-comment-trigger button purple-outline-button"><?= esc_html__('Оставить Комментарий', 'cloud_miners') ?></button>
            </h3><!-- .comments-title -->
	<?php endif; // Check for have_comments().

    $auth_title = get_field('autorisation_title', 'option') ?? '';
    $auth_text = get_field('autorisation_text', 'option') ?? '';
    $auth_links = get_field('autorisation_links', 'option') ?? 0;
    $total_links = null;

    if ($auth_links && $auth_links !== 0) {
        foreach ($auth_links as $link) {
            $total_links .= '
            <a href="'.esc_attr($link['link']['url']).'" target="'.esc_attr($link['link']['target']).'" class="social-button" rel=”nofollow”>
               <img src="'.esc_attr($link['logo']['url']).'" alt="'.esc_attr($link['logo']['alt']).'" />
            </a>';
        }
    }

    $comments_args = array(
        // change the title of send button
        'label_submit'=> __('Оставить отзыв', 'cloud_miners'),
        'logged_in_as'=> '<p class="logged-in-as">Вы вошли как "'.$user_identity.'"</p>',
        'comment_field' => '
			<p class="comment-form-comment">
				<label for="comment">' . __( 'Ваш Отзыв', 'cloud_miners' ) . '</label>
				<textarea id="comment" name="comment" cols="60" maxlength="65525" rows="7"></textarea>
			</p>',
        'must_log_in' =>
            '
            <div class="comment-authorize" id="comment-authorize">
                <div class="comment-authorize__left">
                    <img src="'.get_template_directory_uri() . '/src/img/images/svg/star.svg'.'" alt="banner mask" crossorigin="main-img"/>
                    <p>'.esc_html($auth_title).'</p>
                </div>
                <div class="comment-authorize__right">
                    <p>'.esc_html($auth_text).'</p>
                    <div class="social-buttons">
                    '.$total_links.'
                   '.do_shortCode( '[wptelegram-login button_style="medium" show_user_photo="0" show_if_user_is="logged_out"]' ).'
                    </div>
                </div>
            </div>
            ',
    );

    comment_form($comments_args);
	?>
</div><!-- #comments -->
