<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
?>
<main id="main-content" class="gso-main">
	<?php
	get_template_part(
		'parts/full-bleed-hero',
		null,
		[
			'eyebrow'         => 'Blog',
			'title'           => 'お知らせ',
			'lead'            => '最新情報を掲載します。',
			'primary_label'   => 'Homeへ',
			'primary_url'     => gso_page_url( '' ),
			'secondary_label' => 'Contactへ',
			'secondary_url'   => gso_page_url( 'contact' ),
		]
	);
	?>

	<div class="gso-container gso-content">
		<?php if ( have_posts() ) : ?>
			<div class="gso-post-list">
				<?php while ( have_posts() ) : the_post(); ?>
					<article <?php post_class( 'gso-post-item' ); ?>>
						<p class="gso-post-date"><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></p>
						<h2 class="gso-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<p class="gso-post-excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 60 ) ); ?></p>
					</article>
				<?php endwhile; ?>
			</div>
		<?php else : ?>
			<p class="gso-empty">まだ投稿はありません。</p>
		<?php endif; ?>
	</div>
</main>
<?php get_footer(); ?>
