<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content" class="gso-main">
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
			get_template_part(
				'parts/full-bleed-hero',
				null,
				[
					'eyebrow'         => 'Page',
					'title'           => esc_html( get_the_title() ),
					'lead'            => '必要に応じて専用テンプレートへ拡張できる汎用ページです。',
					'primary_label'   => 'Contactへ',
					'primary_url'     => gso_page_url( 'contact' ),
					'secondary_label' => 'Homeへ',
					'secondary_url'   => gso_page_url( '' ),
				]
			);
			?>
			<div class="gso-container gso-content">
				<article <?php post_class( 'gso-entry' ); ?>>
					<?php the_content(); ?>
				</article>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
