<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$email     = gso_get_setting( 'email' );
$tel       = gso_get_setting( 'tel' );
$openhours = gso_get_setting( 'open_hours' );

get_header();
?>
<main id="main-content" class="gso-main">
	<?php
	get_template_part(
		'parts/full-bleed-hero',
		null,
		[
			'eyebrow'         => 'Contact',
			'title'           => 'お問い合わせ導線を、<br>シンプルに明確化',
			'lead'            => '本テーマではフォーム実装は行わず、メール・電話への導線に特化しています。',
			'primary_label'   => 'メールで相談する',
			'primary_url'     => 'mailto:' . $email,
			'secondary_label' => 'Homeへ',
			'secondary_url'   => gso_page_url( '' ),
		]
	);
	?>

	<div class="gso-container gso-content">
		<section class="gso-section gso-method-grid">
			<article class="gso-method-card">
				<p class="gso-label">Mail</p>
				<h2>メールでのお問い合わせ</h2>
				<p><?php echo esc_html( gso_get_setting( 'contact_mail_intro' ) ); ?></p>
				<a class="gso-btn gso-btn-primary" href="mailto:<?php echo esc_attr( $email ); ?>"><?php echo esc_html( $email ); ?></a>
			</article>
			<article class="gso-method-card">
				<p class="gso-label">Phone</p>
				<h2>電話でのお問い合わせ</h2>
				<p><?php echo esc_html( gso_get_setting( 'contact_phone_intro' ) ); ?></p>
				<a class="gso-btn gso-btn-outline" href="tel:<?php echo esc_attr( str_replace( '-', '', $tel ) ); ?>"><?php echo esc_html( $tel ); ?></a>
				<p class="gso-small">受付時間: <?php echo esc_html( $openhours ); ?></p>
			</article>
		</section>

		<section class="gso-section gso-panel">
			<p class="gso-label">Flow</p>
			<h2 class="gso-title">ご相談の流れ</h2>
			<ol class="gso-steps">
				<li class="gso-step"><strong>1. お問い合わせ</strong><?php echo esc_html( gso_get_setting( 'contact_flow_1' ) ); ?></li>
				<li class="gso-step"><strong>2. ヒアリング</strong><?php echo esc_html( gso_get_setting( 'contact_flow_2' ) ); ?></li>
				<li class="gso-step"><strong>3. ご提案</strong><?php echo esc_html( gso_get_setting( 'contact_flow_3' ) ); ?></li>
			</ol>
		</section>
	</div>
</main>
<?php get_footer(); ?>
