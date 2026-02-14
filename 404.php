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
			'eyebrow'         => '404',
			'title'           => 'ページが見つかりませんでした',
			'lead'            => 'お探しのページは削除されたか、URLが変更されている可能性があります。',
			'primary_label'   => 'Homeへ戻る',
			'primary_url'     => gso_page_url( '' ),
			'secondary_label' => 'Contactへ',
			'secondary_url'   => gso_page_url( 'contact' ),
		]
	);
	?>
	<div class="gso-container gso-content">
		<div class="gso-empty">URLをご確認のうえ、再度アクセスしてください。</div>
	</div>
</main>
<?php get_footer(); ?>
