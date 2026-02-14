<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="gso-skip-link" href="#main-content">本文へスキップ</a>
<div class="gso-site">
	<header class="gso-header">
		<div class="gso-container gso-header-inner">
			<div class="gso-brand">
				<p class="gso-brand-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
				</p>
				<p class="gso-brand-sub">Original Theme</p>
			</div>

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav class="gso-nav-desktop" aria-label="Primary Navigation">
					<?php
					wp_nav_menu(
						[
							'theme_location' => 'primary',
							'container'      => false,
							'menu_class'     => 'gso-menu',
							'fallback_cb'    => false,
						]
					);
					?>
				</nav>
			<?php else : ?>
				<nav class="gso-nav-desktop" aria-label="Default Navigation">
					<ul class="gso-menu">
						<?php foreach ( gso_default_links() as $link ) : ?>
							<?php $is_current = gso_is_current_nav_slug( isset( $link['slug'] ) ? $link['slug'] : '' ); ?>
							<li class="<?php echo $is_current ? 'current-menu-item' : ''; ?>">
								<a href="<?php echo esc_url( $link['url'] ); ?>"<?php echo $is_current ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $link['label'] ); ?></a>
							</li>
						<?php endforeach; ?>
					</ul>
				</nav>
			<?php endif; ?>

			<a class="gso-contact-link" href="<?php echo esc_url( gso_page_url( 'contact' ) ); ?>"<?php echo gso_is_current_nav_slug( 'contact' ) ? ' aria-current="page"' : ''; ?>>Contact</a>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="gso-nav-mobile" aria-label="Mobile Navigation">
				<?php
				wp_nav_menu(
					[
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'gso-mobile-menu',
						'fallback_cb'    => false,
					]
				);
				?>
			</nav>
		<?php else : ?>
			<nav class="gso-nav-mobile" aria-label="Mobile Navigation">
				<ul class="gso-mobile-menu">
					<?php foreach ( gso_default_links() as $link ) : ?>
						<?php $is_current = gso_is_current_nav_slug( isset( $link['slug'] ) ? $link['slug'] : '' ); ?>
						<li class="<?php echo $is_current ? 'current-menu-item' : ''; ?>">
							<a href="<?php echo esc_url( $link['url'] ); ?>"<?php echo $is_current ? ' aria-current="page"' : ''; ?>><?php echo esc_html( $link['label'] ); ?></a>
						</li>
					<?php endforeach; ?>
				</ul>
			</nav>
		<?php endif; ?>
	</header>
