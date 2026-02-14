<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$home_cta_heading = gso_get_setting( 'home_cta_heading' );
$home_cta_text    = gso_get_setting( 'home_cta_text' );
$home_cta_button  = gso_get_setting( 'home_cta_button_label' );
$works_enabled    = gso_is_works_enabled();
$service_cards    = gso_services_cards();

get_header();
?>
<main id="main-content" class="gso-main">
	<?php
	get_template_part(
		'parts/full-bleed-hero',
		null,
			[
				'eyebrow'         => 'Corporate / LP Theme',
				'title'           => '信頼感のあるUIと実装品質で<br>企業価値を正しく伝える',
				'lead'            => '採用担当者とクライアントに向けて、設計力と実装力を一目で示せる完全オリジナルのWordPressテーマです。',
				'primary_label'   => 'Servicesを見る',
				'primary_url'     => gso_page_url( 'services' ),
				'secondary_label' => 'Contactへ',
				'secondary_url'   => gso_page_url( 'contact' ),
			]
	);
	?>

	<div class="gso-container gso-content">
		<section class="gso-section">
			<div class="gso-section-head">
				<div>
					<p class="gso-label">Strength</p>
					<h2 class="gso-title">このテーマで示す実装力</h2>
				</div>
				<p class="gso-note">目的に合わせた情報設計、視認性の高いUI、運用しやすいテンプレート設計を同時に実装しています。</p>
			</div>
				<div class="gso-grid-3">
					<article class="gso-card">
						<h3>情報設計</h3>
						<p>Home / Services / About / Contact の導線が常に明確で、迷わないページ遷移を実現。</p>
					</article>
				<article class="gso-card">
					<h3>UI品質</h3>
					<p>基本カラー2色 + アクセント1色で、企業サイトに必要な信頼感と視認性を両立。</p>
				</article>
				<article class="gso-card">
					<h3>実装品質</h3>
					<p>レスポンシブ対応、SEOメタ設定、再利用可能コンポーネントで保守性を担保。</p>
				</article>
			</div>
		</section>

			<section class="gso-section gso-surface">
				<div class="gso-section-head">
					<div>
						<p class="gso-label">Services</p>
						<h2 class="gso-title">事業内容</h2>
					</div>
					<a class="gso-link-pill" href="<?php echo esc_url( gso_page_url( 'services' ) ); ?>">Servicesを見る</a>
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

			<?php if ( $works_enabled ) : ?>
			<section class="gso-section gso-surface">
				<div class="gso-section-head">
					<div>
						<p class="gso-label">Works Highlight</p>
					<h2 class="gso-title">実績ハイライト</h2>
				</div>
				<a class="gso-link-pill" href="<?php echo esc_url( gso_page_url( 'works' ) ); ?>">一覧を見る</a>
			</div>
			<div class="gso-grid-3">
				<?php
				$highlight_query = new WP_Query(
					[
						'post_type'      => 'gso_work',
						'post_status'    => 'publish',
						'posts_per_page' => 3,
					]
				);

				if ( $highlight_query->have_posts() ) :
					while ( $highlight_query->have_posts() ) :
						$highlight_query->the_post();
						$post_id   = get_the_ID();
						$image_url = gso_get_work_image_url( $post_id );
						$category  = gso_get_work_meta( $post_id, 'category', '実績' );
						$result    = gso_get_work_meta( $post_id, 'result' );
						$summary   = gso_get_work_summary( $post_id, 80 );
						?>
						<article class="gso-card">
							<img class="gso-work-thumb" src="<?php echo esc_url( $image_url ); ?>" alt="<?php echo esc_attr( get_the_title( $post_id ) ); ?>" loading="lazy" decoding="async">
							<p class="gso-label"><?php echo esc_html( $category ); ?></p>
							<h3><?php the_title(); ?></h3>
							<p><?php echo esc_html( $summary ); ?></p>
							<?php if ( '' !== $result ) : ?>
								<p class="gso-result"><?php echo esc_html( $result ); ?></p>
							<?php endif; ?>
						</article>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<article class="gso-card">
						<h3>実績を追加するとここに表示されます</h3>
						<p>管理画面の「Works」からタイトル、成果、技術要素を入力して追加してください。</p>
					</article>
					<?php endif; ?>
				</div>
			</section>
			<?php endif; ?>

		<section class="gso-section gso-grid-2-wide gso-inverse">
			<div>
				<p class="gso-label">About</p>
				<h2 class="gso-title">成果につながる制作を、設計から伴走</h2>
				<p>要件定義前の段階でも、目的整理から構成設計、実装、改善まで一気通貫で支援します。採用広報・企業ブランディング・問い合わせ獲得のいずれにも対応可能です。</p>
				<a class="gso-btn gso-btn-secondary" href="<?php echo esc_url( gso_page_url( 'about' ) ); ?>">Aboutを見る</a>
			</div>
			<dl class="gso-kv">
				<div><dt>設立</dt><dd><?php echo esc_html( gso_get_setting( 'founded' ) ); ?></dd></div>
				<div><dt>従業員</dt><dd><?php echo esc_html( gso_get_setting( 'employees' ) ); ?></dd></div>
				<div><dt>主要領域</dt><dd>企業サイト / 採用LP</dd></div>
				<div><dt>対応時間</dt><dd><?php echo esc_html( gso_get_setting( 'open_hours' ) ); ?></dd></div>
			</dl>
		</section>

		<section class="gso-section gso-cta">
			<h2><?php echo esc_html( $home_cta_heading ); ?></h2>
			<p><?php echo esc_html( $home_cta_text ); ?></p>
			<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( gso_page_url( 'contact' ) ); ?>"><?php echo esc_html( $home_cta_button ); ?></a>
		</section>
	</div>
</main>
<?php get_footer(); ?>
