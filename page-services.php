<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$business = gso_get_setting( 'business' );
$service_cards = gso_services_cards();

get_header();
?>
<main id="main-content" class="gso-main">
	<?php
	get_template_part(
		'parts/full-bleed-hero',
		null,
		[
			'eyebrow'         => 'Services',
			'title'           => '事業内容を明確にし、<br>相談しやすい導線をつくる',
			'lead'            => '企業サイト制作・採用LP制作・UI改善支援を軸に、目的達成に直結する実装を提供します。',
			'primary_label'   => 'Contactへ',
			'primary_url'     => gso_page_url( 'contact' ),
			'secondary_label' => 'Homeへ',
			'secondary_url'   => gso_page_url( '' ),
		]
	);
	?>

	<div class="gso-container gso-content">
		<section class="gso-section gso-surface">
			<div class="gso-section-head">
				<div>
					<p class="gso-label">Service Menu</p>
					<h2 class="gso-title">提供サービス</h2>
				</div>
				<p class="gso-note">相談内容に応じて、必要な範囲だけを柔軟に組み合わせて提案します。</p>
			</div>
			<div class="gso-grid-3">
				<?php foreach ( $service_cards as $card ) : ?>
					<article class="gso-card">
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo esc_html( $card['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</section>

		<section class="gso-section gso-grid-2-wide">
			<div class="gso-panel">
				<p class="gso-label">Scope</p>
				<h2 class="gso-title">対応領域</h2>
				<p><?php echo esc_html( $business ); ?></p>
				<p>要件整理から公開後の改善まで、段階に応じたサポートが可能です。</p>
			</div>
			<div class="gso-panel">
				<p class="gso-label">Process</p>
				<h3>進め方</h3>
				<ol class="gso-steps">
					<li class="gso-step"><strong>1. ヒアリング</strong>目的と課題、優先順位を整理します。</li>
					<li class="gso-step"><strong>2. 設計・提案</strong>構成案と実装方針を提示します。</li>
					<li class="gso-step"><strong>3. 実装・改善</strong>公開後の運用を見据えて改善を継続します。</li>
				</ol>
			</div>
		</section>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php if ( '' !== trim( wp_strip_all_tags( (string) get_the_content() ) ) ) : ?>
					<section class="gso-section gso-panel">
						<p class="gso-label">Custom Content</p>
						<h2 class="gso-title">追加コンテンツ</h2>
						<?php the_content(); ?>
					</section>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<section class="gso-section gso-cta">
			<h2>プロジェクト相談を受け付けています</h2>
			<p>まずは現状の課題と目標を共有ください。最適な進め方をご提案します。</p>
			<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( gso_page_url( 'contact' ) ); ?>">Contactページへ</a>
		</section>
	</div>
</main>
<?php get_footer(); ?>
