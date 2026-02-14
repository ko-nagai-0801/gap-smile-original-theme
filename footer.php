<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$social_links = gso_social_links();
?>
	<footer class="gso-footer">
		<div class="gso-container gso-footer-inner">
			<div>
				<p class="gso-footer-title"><?php echo esc_html( gso_get_setting( 'company_name_en' ) ); ?></p>
				<p class="gso-footer-text"><?php echo esc_html( gso_get_setting( 'footer_summary' ) ); ?></p>
				<dl class="gso-footer-dl">
					<div><dt>所在地:</dt> <dd><?php echo esc_html( gso_get_setting( 'address' ) ); ?></dd></div>
					<div><dt>TEL:</dt> <dd><a href="tel:<?php echo esc_attr( str_replace( '-', '', gso_get_setting( 'tel' ) ) ); ?>"><?php echo esc_html( gso_get_setting( 'tel' ) ); ?></a></dd></div>
					<div><dt>Email:</dt> <dd><a href="mailto:<?php echo esc_attr( gso_get_setting( 'email' ) ); ?>"><?php echo esc_html( gso_get_setting( 'email' ) ); ?></a></dd></div>
				</dl>
				<?php if ( ! empty( $social_links ) ) : ?>
					<ul class="gso-footer-social">
						<?php foreach ( $social_links as $item ) : ?>
							<li><a href="<?php echo esc_url( $item['url'] ); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html( $item['label'] ); ?></a></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
				<?php if ( gso_is_consent_mode_enabled() ) : ?>
					<p class="gso-footer-consent">
						<button type="button" class="gso-consent-open" data-gso-consent-open>Cookie設定を変更</button>
					</p>
				<?php endif; ?>
			</div>

			<div>
				<p class="gso-footer-title">Navigation</p>
				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="gso-footer-nav" aria-label="Footer Navigation">
						<?php
						wp_nav_menu(
							[
								'theme_location' => 'footer',
								'container'      => false,
								'menu_class'     => 'gso-menu',
								'fallback_cb'    => false,
							]
						);
						?>
					</nav>
				<?php else : ?>
					<nav class="gso-footer-nav" aria-label="Default Footer Navigation">
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
			</div>
		</div>
		<div class="gso-footer-copy">
			&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php echo esc_html( gso_get_setting( 'company_name_en' ) ); ?> All Rights Reserved.
		</div>
	</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
