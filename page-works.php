<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$paged = max( 1, (int) get_query_var( 'paged' ), (int) get_query_var( 'page' ) );

$works_query = new WP_Query(
	[
		'post_type'      => 'gso_work',
		'post_status'    => 'publish',
		'posts_per_page' => 9,
		'paged'          => $paged,
	]
);

get_header();
?>
<main id="main-content" class="gso-main">
	<?php
	get_template_part(
		'parts/full-bleed-hero',
		null,
		[
			'eyebrow'         => 'Works',
			'title'           => '成果につながる制作実績を、<br>指標ベースで可視化',
			'lead'            => '管理画面のWorks投稿を追加すると、このページへ自動表示されます。',
			'primary_label'   => 'Contactへ',
			'primary_url'     => gso_page_url( 'contact' ),
			'secondary_label' => 'Homeへ',
			'secondary_url'   => gso_page_url( '' ),
		]
	);
	?>

	<div class="gso-container gso-content">
		<section class="gso-section">
			<div class="gso-section-head">
				<div>
					<p class="gso-label">Project List</p>
					<h2 class="gso-title">制作実績一覧</h2>
				</div>
				<p class="gso-note">採用担当者が短時間で判断しやすいよう、成果・要点・技術要素をカードで統一表示。</p>
			</div>

			<?php if ( $works_query->have_posts() ) : ?>
				<div class="gso-grid-3">
					<?php while ( $works_query->have_posts() ) : ?>
						<?php
						$works_query->the_post();
						$post_id   = get_the_ID();
						$image_url = gso_get_work_image_url( $post_id );
						$category  = gso_get_work_meta( $post_id, 'category', '実績' );
						$result    = gso_get_work_meta( $post_id, 'result' );
						$tech      = gso_get_work_meta( $post_id, 'tech' );
						$client    = gso_get_work_meta( $post_id, 'client' );
						$summary   = gso_get_work_summary( $post_id, 90 );
						?>
						<article class="gso-card">
							<img class="gso-work-thumb" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" loading="lazy" decoding="async">
							<p class="gso-label"><?php echo esc_html( $category ); ?></p>
							<h3><?php the_title(); ?></h3>
							<p><?php echo esc_html( $summary ); ?></p>
							<div class="gso-work-meta">
								<?php if ( '' !== $result ) : ?><span class="gso-chip gso-chip-brand"><?php echo esc_html( $result ); ?></span><?php endif; ?>
								<?php if ( '' !== $tech ) : ?><span class="gso-chip"><?php echo esc_html( $tech ); ?></span><?php endif; ?>
								<?php if ( '' !== $client ) : ?><span class="gso-chip"><?php echo esc_html( $client ); ?></span><?php endif; ?>
							</div>
						</article>
					<?php endwhile; ?>
				</div>

				<?php
				echo '<nav class="gso-pagination" aria-label="Works pagination">';
				echo wp_kses_post(
					paginate_links(
						[
							'total'     => (int) $works_query->max_num_pages,
							'current'   => $paged,
							'mid_size'  => 1,
							'prev_text' => '前へ',
							'next_text' => '次へ',
						]
					)
				);
				echo '</nav>';
				?>
			<?php else : ?>
				<p class="gso-empty">実績がまだ登録されていません。管理画面の「Works」から追加すると表示されます。</p>
			<?php endif; ?>

			<?php wp_reset_postdata(); ?>
		</section>

		<section class="gso-section gso-cta">
			<h2>次の実績を一緒に作ります</h2>
			<p>要件の整理段階から参加し、成果につながる構成と実装プランをご提案します。</p>
			<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( gso_page_url( 'contact' ) ); ?>">Contactページへ</a>
		</section>
	</div>
</main>
<?php get_footer(); ?>
