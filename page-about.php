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
			'eyebrow'         => 'About',
			'title'           => '信頼される制作体制を、<br>明快に伝える',
			'lead'            => '企業理念・代表メッセージ・会社情報を整理し、はじめての相談でも安心感を持てる構成にしています。',
			'primary_label'   => 'Servicesを見る',
			'primary_url'     => gso_page_url( 'services' ),
			'secondary_label' => 'Contactへ',
			'secondary_url'   => gso_page_url( 'contact' ),
		]
	);
	?>

	<div class="gso-container gso-content">
		<section class="gso-section gso-grid-2-wide">
			<div class="gso-panel">
				<p class="gso-label">Message</p>
				<h2 class="gso-title">代表メッセージ</h2>
				<p><?php echo esc_html( gso_get_setting( 'about_message_1' ) ); ?></p>
				<p><?php echo esc_html( gso_get_setting( 'about_message_2' ) ); ?></p>
				<p><strong>代表取締役 <?php echo esc_html( gso_get_setting( 'ceo' ) ); ?></strong></p>
			</div>

			<div class="gso-panel">
				<h3>Philosophy</h3>
				<ul class="gso-list">
					<li><strong>Mission</strong><?php echo esc_html( gso_get_setting( 'philosophy_mission' ) ); ?></li>
					<li><strong>Vision</strong><?php echo esc_html( gso_get_setting( 'philosophy_vision' ) ); ?></li>
					<li><strong>Value</strong><?php echo esc_html( gso_get_setting( 'philosophy_value' ) ); ?></li>
				</ul>
			</div>
		</section>

		<section class="gso-section gso-panel">
			<div class="gso-section-head">
				<div>
					<p class="gso-label">Company</p>
					<h2 class="gso-title">会社情報</h2>
				</div>
			</div>

			<table class="gso-table">
				<tbody>
					<tr><th>会社名</th><td><?php echo esc_html( gso_get_setting( 'company_name' ) ); ?></td></tr>
					<tr><th>英文社名</th><td><?php echo esc_html( gso_get_setting( 'company_name_en' ) ); ?></td></tr>
					<tr><th>代表取締役</th><td><?php echo esc_html( gso_get_setting( 'ceo' ) ); ?></td></tr>
					<tr><th>設立</th><td><?php echo esc_html( gso_get_setting( 'founded' ) ); ?></td></tr>
					<tr><th>資本金</th><td><?php echo esc_html( gso_get_setting( 'capital' ) ); ?></td></tr>
					<tr><th>従業員数</th><td><?php echo esc_html( gso_get_setting( 'employees' ) ); ?></td></tr>
					<tr><th>事業内容</th><td><?php echo esc_html( gso_get_setting( 'business' ) ); ?></td></tr>
					<tr><th>所在地</th><td><?php echo esc_html( gso_get_setting( 'zipcode' ) ); ?><br><?php echo esc_html( gso_get_setting( 'address' ) ); ?></td></tr>
					<tr><th>TEL</th><td><a href="tel:<?php echo esc_attr( str_replace( '-', '', gso_get_setting( 'tel' ) ) ); ?>"><?php echo esc_html( gso_get_setting( 'tel' ) ); ?></a></td></tr>
					<tr><th>E-mail</th><td><a href="mailto:<?php echo esc_attr( gso_get_setting( 'email' ) ); ?>"><?php echo esc_html( gso_get_setting( 'email' ) ); ?></a></td></tr>
				</tbody>
			</table>
		</section>

		<section class="gso-section gso-inverse">
			<h2 class="gso-title">プロジェクトのご相談を受け付けています</h2>
			<p>採用サイト、企業サイト、LP制作まで、目的に合わせて最適な進め方をご提案します。</p>
			<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( gso_page_url( 'contact' ) ); ?>">Contactページへ</a>
		</section>
	</div>
</main>
<?php get_footer(); ?>
