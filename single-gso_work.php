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
			$post_id   = get_the_ID();
			$image_url = gso_get_work_image_url( $post_id, 'large' );
			$category  = gso_get_work_meta( $post_id, 'category', '実績' );
			$result    = gso_get_work_meta( $post_id, 'result' );
			$tech      = gso_get_work_meta( $post_id, 'tech' );
			$client    = gso_get_work_meta( $post_id, 'client' );
			$works_enabled = gso_is_works_enabled();

			get_template_part(
				'parts/full-bleed-hero',
				null,
				[
					'eyebrow'         => 'Work Detail',
					'title'           => esc_html( get_the_title() ),
					'lead'            => '制作背景・対応内容・成果を整理した実績詳細ページです。',
					'primary_label'   => $works_enabled ? 'Works一覧へ' : 'Servicesへ',
					'primary_url'     => $works_enabled ? gso_page_url( 'works' ) : gso_page_url( 'services' ),
					'secondary_label' => 'Contactへ',
					'secondary_url'   => gso_page_url( 'contact' ),
				]
			);
			?>

			<div class="gso-container gso-content">
				<article class="gso-entry">
					<img class="gso-work-thumb" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>" loading="eager" decoding="async" fetchpriority="high">
					<p class="gso-label"><?php echo esc_html( $category ); ?></p>
					<h1 class="gso-title"><?php the_title(); ?></h1>
					<div class="gso-work-meta">
						<?php if ( '' !== $result ) : ?><span class="gso-chip gso-chip-brand"><?php echo esc_html( $result ); ?></span><?php endif; ?>
						<?php if ( '' !== $tech ) : ?><span class="gso-chip"><?php echo esc_html( $tech ); ?></span><?php endif; ?>
						<?php if ( '' !== $client ) : ?><span class="gso-chip"><?php echo esc_html( $client ); ?></span><?php endif; ?>
					</div>
					<div class="gso-work-body">
						<?php the_content(); ?>
					</div>
				</article>
			</div>
		<?php endwhile; ?>
	<?php endif; ?>
</main>
<?php get_footer(); ?>
