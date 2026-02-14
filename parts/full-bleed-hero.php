<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$hero_args = wp_parse_args(
	$args ?? [],
	[
		'eyebrow'         => '',
		'title'           => '',
		'lead'            => '',
		'primary_label'   => 'Contact',
		'primary_url'     => gso_page_url( 'contact' ),
		'secondary_label' => '',
		'secondary_url'   => '',
	]
);

$allowed_inline = [
	'br' => [],
];
?>
<section class="gso-hero gso-full-bleed">
	<div class="gso-container gso-hero-inner">
		<?php if ( '' !== $hero_args['eyebrow'] ) : ?>
			<p class="gso-eyebrow"><?php echo esc_html( $hero_args['eyebrow'] ); ?></p>
		<?php endif; ?>
		<h1 class="gso-hero-title"><?php echo wp_kses( $hero_args['title'], $allowed_inline ); ?></h1>
		<?php if ( '' !== $hero_args['lead'] ) : ?>
			<p class="gso-hero-lead"><?php echo wp_kses( $hero_args['lead'], $allowed_inline ); ?></p>
		<?php endif; ?>
		<div class="gso-hero-actions">
			<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( $hero_args['primary_url'] ); ?>"><?php echo esc_html( $hero_args['primary_label'] ); ?></a>
			<?php if ( '' !== $hero_args['secondary_label'] && '' !== $hero_args['secondary_url'] ) : ?>
				<a class="gso-btn gso-btn-secondary" href="<?php echo esc_url( $hero_args['secondary_url'] ); ?>"><?php echo esc_html( $hero_args['secondary_label'] ); ?></a>
			<?php endif; ?>
		</div>
	</div>
</section>
