<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/* ----------------------------------------------------------
 * Default values
 * ---------------------------------------------------------- */
define( 'GSO_COMPANY_NAME', '株式会社ギャップスマイル' );
define( 'GSO_COMPANY_NAME_EN', 'Gap Smile Inc.' );
define( 'GSO_ZIPCODE', '〒150-0001' );
define( 'GSO_ADDRESS', '東京都渋谷区神宮前1-1-1 GSOビル 6F' );
define( 'GSO_TEL', '03-4567-8910' );
define( 'GSO_EMAIL', 'hello@gapsmile.example.com' );
define( 'GSO_FOUNDED', '2018年6月1日' );
define( 'GSO_EMPLOYEES', '28名（2026年2月現在）' );
define( 'GSO_CAPITAL', '800万円' );
define( 'GSO_CEO', '中村 未来' );
define( 'GSO_BUSINESS', '企業サイト制作 / 採用LP制作 / UI改善支援' );
define( 'GSO_OPEN_HOURS', '平日 9:00 - 18:00' );

/* ----------------------------------------------------------
 * Theme settings (for beginner-friendly operations)
 * ---------------------------------------------------------- */
function gso_default_settings() {
	return [
		'company_name'            => GSO_COMPANY_NAME,
		'company_name_en'         => GSO_COMPANY_NAME_EN,
		'zipcode'                 => GSO_ZIPCODE,
		'address'                 => GSO_ADDRESS,
		'tel'                     => GSO_TEL,
		'email'                   => GSO_EMAIL,
		'founded'                 => GSO_FOUNDED,
		'employees'               => GSO_EMPLOYEES,
		'capital'                 => GSO_CAPITAL,
		'ceo'                     => GSO_CEO,
		'business'                => GSO_BUSINESS,
		'open_hours'              => GSO_OPEN_HOURS,
		'footer_summary'          => '採用担当者・クライアントに向けて、信頼感と実装品質を両立した企業サイトを提供します。',
		'home_cta_heading'        => 'ご相談は Contact ページから',
		'home_cta_text'           => '問い合わせ機能は導線重視で実装。メールまたは電話へスムーズに接続できます。',
		'home_cta_button_label'   => 'Contactへ進む',
		'operation_mode'          => 'beginner',
		'enable_works'            => '1',
		'services_card_1_title'   => '企業サイト制作',
		'services_card_1_text'    => '信頼感と読みやすさを重視し、情報設計から実装まで一貫対応します。',
		'services_card_2_title'   => '採用LP制作',
		'services_card_2_text'    => '応募導線を明確化し、ファーストビューから訴求ポイントを最適化します。',
		'services_card_3_title'   => 'UI改善支援',
		'services_card_3_text'    => '既存サイトの課題を分析し、成果指標に直結する改善施策を実装します。',
		'about_message_1'         => '当社は、デザインと実装を分断せず、成果につながる体験を一貫して作ることを大切にしています。採用や営業の現場で使われ続けるWebサイトを、丁寧に設計・実装します。',
		'about_message_2'         => '相談しやすさと進めやすさを重視し、目的整理から公開後の改善まで責任を持って伴走します。',
		'philosophy_mission'      => 'テクノロジーとデザインで、挑戦する企業の可能性を広げる。',
		'philosophy_vision'       => '成果に直結するWeb体験を、すべての企業に。',
		'philosophy_value'        => '誠実な対話、明快な設計、継続的な改善。',
		'contact_mail_intro'      => 'ご相談の背景・目標・希望納期があれば併記ください。初回返信は1営業日以内を目安に対応します。',
		'contact_phone_intro'     => 'お急ぎの場合は電話をご利用ください。短時間で要点を整理してご案内します。',
		'contact_flow_1'          => 'メールまたは電話でご連絡ください。',
		'contact_flow_2'          => '目的・課題・希望スケジュールを整理します。',
		'contact_flow_3'          => '実装方針と進行計画をご提案します。',
		'sns_x'                   => '',
		'sns_instagram'           => '',
		'sns_linkedin'            => '',
		'ga4_measurement_id'      => '',
		'consent_mode_enabled'    => '1',
		'consent_banner_enabled'  => '1',
		'consent_banner_title'    => '計測とCookieの利用について',
		'consent_banner_text'     => 'サイト改善のためアクセス解析（GA4）を利用しています。計測への同意可否を選択できます。',
		'consent_policy_url'      => '',
		'noindex_search_pages'    => '1',
		'noindex_404_pages'       => '1',
		'noindex_works_page'      => '0',
		'seo_default_description' => '企業サイト・LP用の完全オリジナルWordPressテーマ。信頼感のあるUIと実装力を示す構成です。',
	];
}

function gso_setting_fields() {
	return [
		'company_name'            => [ 'label' => '会社名', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 80, 'description' => '例: 株式会社ギャップスマイル' ],
		'company_name_en'         => [ 'label' => '英文社名', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 80, 'description' => '例: Gap Smile Inc.' ],
		'zipcode'                 => [ 'label' => '郵便番号', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 20, 'description' => '例: 〒150-0001' ],
		'address'                 => [ 'label' => '住所', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 150, 'description' => 'フッターとAboutページで表示' ],
		'tel'                     => [ 'label' => '電話番号', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 30, 'description' => '例: 03-4567-8910' ],
		'email'                   => [ 'label' => 'メールアドレス', 'section' => 'gso_company', 'type' => 'email', 'maxlength' => 100, 'description' => 'Contactページで使用' ],
		'open_hours'              => [ 'label' => '営業時間', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 80, 'description' => '例: 平日 9:00 - 18:00' ],
		'founded'                 => [ 'label' => '設立', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 40, 'description' => 'About/Homeで表示' ],
		'employees'               => [ 'label' => '従業員数', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 40, 'description' => '例: 28名（2026年2月現在）' ],
		'capital'                 => [ 'label' => '資本金', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 40, 'description' => '例: 800万円' ],
		'ceo'                     => [ 'label' => '代表者名', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 40, 'description' => 'Aboutページで表示' ],
		'business'                => [ 'label' => '事業内容', 'section' => 'gso_company', 'type' => 'text', 'maxlength' => 200, 'description' => 'About/Servicesページで表示' ],
		'footer_summary'          => [ 'label' => 'フッター概要文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 240, 'description' => '120文字前後推奨' ],
		'operation_mode'          => [ 'label' => '運用モード', 'section' => 'gso_content', 'type' => 'select', 'options' => [ 'beginner' => '初心者モード', 'advanced' => '上級者モード' ], 'description' => '初心者モードでは高度な設定項目を非表示にします。' ],
		'home_cta_heading'        => [ 'label' => 'Home CTA見出し', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 80, 'description' => '例: ご相談は Contact ページから' ],
		'home_cta_text'           => [ 'label' => 'Home CTA本文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 200, 'description' => '80-120文字推奨' ],
		'home_cta_button_label'   => [ 'label' => 'Home CTAボタン文言', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 40, 'description' => '例: Contactへ進む' ],
		'enable_works'            => [ 'label' => 'Worksページを表示', 'section' => 'gso_content', 'type' => 'checkbox', 'description' => 'ONでナビゲーションとHomeの実績セクションにWorksを表示。OFFでも投稿データは保持されます。' ],
		'services_card_1_title'   => [ 'label' => 'Servicesカード1 見出し', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 60, 'description' => '' ],
		'services_card_1_text'    => [ 'label' => 'Servicesカード1 本文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 180, 'description' => '' ],
		'services_card_2_title'   => [ 'label' => 'Servicesカード2 見出し', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 60, 'description' => '' ],
		'services_card_2_text'    => [ 'label' => 'Servicesカード2 本文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 180, 'description' => '' ],
		'services_card_3_title'   => [ 'label' => 'Servicesカード3 見出し', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 60, 'description' => '' ],
		'services_card_3_text'    => [ 'label' => 'Servicesカード3 本文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 180, 'description' => '' ],
		'about_message_1'         => [ 'label' => 'Aboutメッセージ(1)', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 300, 'description' => '100-160文字推奨' ],
		'about_message_2'         => [ 'label' => 'Aboutメッセージ(2)', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 300, 'description' => '100-160文字推奨' ],
		'philosophy_mission'      => [ 'label' => 'Mission', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 120, 'description' => '' ],
		'philosophy_vision'       => [ 'label' => 'Vision', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 120, 'description' => '' ],
		'philosophy_value'        => [ 'label' => 'Value', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 120, 'description' => '' ],
		'contact_mail_intro'      => [ 'label' => 'Contactメール説明文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 220, 'description' => '70-120文字推奨' ],
		'contact_phone_intro'     => [ 'label' => 'Contact電話説明文', 'section' => 'gso_content', 'type' => 'textarea', 'maxlength' => 220, 'description' => '70-120文字推奨' ],
		'contact_flow_1'          => [ 'label' => '相談フロー1', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 80, 'description' => '' ],
		'contact_flow_2'          => [ 'label' => '相談フロー2', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 80, 'description' => '' ],
		'contact_flow_3'          => [ 'label' => '相談フロー3', 'section' => 'gso_content', 'type' => 'text', 'maxlength' => 80, 'description' => '' ],
		'sns_x'                   => [ 'label' => 'X URL', 'section' => 'gso_social', 'type' => 'url', 'maxlength' => 200, 'description' => '未入力なら非表示' ],
		'sns_instagram'           => [ 'label' => 'Instagram URL', 'section' => 'gso_social', 'type' => 'url', 'maxlength' => 200, 'description' => '未入力なら非表示' ],
		'sns_linkedin'            => [ 'label' => 'LinkedIn URL', 'section' => 'gso_social', 'type' => 'url', 'maxlength' => 200, 'description' => '未入力なら非表示' ],
		'ga4_measurement_id'      => [ 'label' => 'GA4 Measurement ID', 'section' => 'gso_social', 'type' => 'text', 'maxlength' => 30, 'description' => '例: G-XXXXXXXXXX（未入力なら計測しません）' ],
		'consent_mode_enabled'    => [ 'label' => 'Consent Mode v2を有効化', 'section' => 'gso_social', 'type' => 'checkbox', 'description' => 'GA4計測をユーザー同意ベースで実行します。' ],
		'consent_banner_enabled'  => [ 'label' => '同意バナーを表示', 'section' => 'gso_social', 'type' => 'checkbox', 'description' => '' ],
		'consent_banner_title'    => [ 'label' => '同意バナータイトル', 'section' => 'gso_social', 'type' => 'text', 'maxlength' => 80, 'description' => '' ],
		'consent_banner_text'     => [ 'label' => '同意バナー本文', 'section' => 'gso_social', 'type' => 'textarea', 'maxlength' => 220, 'description' => '' ],
		'consent_policy_url'      => [ 'label' => 'ポリシーURL', 'section' => 'gso_social', 'type' => 'url', 'maxlength' => 200, 'description' => '未入力時はContactページを案内します。' ],
		'noindex_search_pages'    => [ 'label' => '検索結果ページを noindex', 'section' => 'gso_social', 'type' => 'checkbox', 'description' => '' ],
		'noindex_404_pages'       => [ 'label' => '404ページを noindex', 'section' => 'gso_social', 'type' => 'checkbox', 'description' => '' ],
		'noindex_works_page'      => [ 'label' => 'Worksページを noindex', 'section' => 'gso_social', 'type' => 'checkbox', 'description' => '実績ページを検索エンジンに出したくない場合にON' ],
		'seo_default_description' => [ 'label' => 'SEOデフォルトDescription', 'section' => 'gso_social', 'type' => 'textarea', 'maxlength' => 220, 'description' => 'トップ以外の共通description' ],
	];
}

function gso_get_settings() {
	static $cached = null;

	if ( null !== $cached ) {
		return $cached;
	}

	$saved = get_option( 'gso_theme_settings', [] );
	if ( ! is_array( $saved ) ) {
		$saved = [];
	}

	$cached = wp_parse_args( $saved, gso_default_settings() );
	return $cached;
}

function gso_get_setting( $key ) {
	$settings = gso_get_settings();
	return isset( $settings[ $key ] ) ? $settings[ $key ] : '';
}

function gso_is_works_enabled() {
	return '1' === (string) gso_get_setting( 'enable_works' );
}

function gso_is_consent_mode_enabled() {
	$ga4_id = trim( (string) gso_get_setting( 'ga4_measurement_id' ) );
	return '' !== $ga4_id && '1' === (string) gso_get_setting( 'consent_mode_enabled' );
}

function gso_is_consent_banner_enabled() {
	return gso_is_consent_mode_enabled() && '1' === (string) gso_get_setting( 'consent_banner_enabled' );
}

function gso_get_consent_policy_url() {
	$url = trim( (string) gso_get_setting( 'consent_policy_url' ) );
	return '' !== $url ? $url : gso_page_url( 'contact' );
}

function gso_get_operation_mode() {
	$mode = (string) gso_get_setting( 'operation_mode' );
	return in_array( $mode, [ 'beginner', 'advanced' ], true ) ? $mode : 'beginner';
}

function gso_is_beginner_mode() {
	return 'beginner' === gso_get_operation_mode();
}

function gso_is_advanced_setting_field( $key ) {
	$advanced_keys = [
		'about_message_1',
		'about_message_2',
		'philosophy_mission',
		'philosophy_vision',
		'philosophy_value',
		'contact_flow_1',
		'contact_flow_2',
		'contact_flow_3',
		'sns_x',
		'sns_instagram',
		'sns_linkedin',
		'ga4_measurement_id',
		'consent_banner_title',
		'consent_banner_text',
		'consent_policy_url',
		'noindex_search_pages',
		'noindex_404_pages',
		'noindex_works_page',
		'seo_default_description',
	];

	return in_array( $key, $advanced_keys, true );
}

function gso_is_setting_field_visible( $key, $mode = null ) {
	$mode = $mode ? (string) $mode : gso_get_operation_mode();
	if ( 'advanced' === $mode ) {
		return true;
	}

	return ! gso_is_advanced_setting_field( $key );
}

function gso_services_cards() {
	return [
		[
			'title' => gso_get_setting( 'services_card_1_title' ),
			'text'  => gso_get_setting( 'services_card_1_text' ),
		],
		[
			'title' => gso_get_setting( 'services_card_2_title' ),
			'text'  => gso_get_setting( 'services_card_2_text' ),
		],
		[
			'title' => gso_get_setting( 'services_card_3_title' ),
			'text'  => gso_get_setting( 'services_card_3_text' ),
		],
	];
}

/* ----------------------------------------------------------
 * Theme setup / assets
 * ---------------------------------------------------------- */
add_action(
	'after_setup_theme',
	function () {
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support(
			'html5',
			[
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			]
		);

		add_image_size( 'gso-work-thumb', 960, 620, true );
		add_image_size( 'gso-work-og', 1200, 630, true );

		register_nav_menus(
			[
				'primary' => 'Primary Navigation',
				'footer'  => 'Footer Navigation',
			]
		);
	}
);

add_action(
	'wp_enqueue_scripts',
	function () {
		$style_path = get_theme_file_path( 'style.css' );
		$version    = file_exists( $style_path ) ? (string) filemtime( $style_path ) : '1.0.0';

		wp_enqueue_style( 'gso-style', get_stylesheet_uri(), [], $version );
		wp_enqueue_style(
			'gso-fonts',
			'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;800&display=swap',
			[],
			null
		);
	}
);

add_filter(
	'wp_resource_hints',
	function ( $urls, $relation_type ) {
		if ( 'preconnect' === $relation_type ) {
			$urls[] = [
				'href'        => 'https://fonts.googleapis.com',
				'crossorigin' => 'anonymous',
			];
			$urls[] = [
				'href'        => 'https://fonts.gstatic.com',
				'crossorigin' => 'anonymous',
			];
		}

		return $urls;
	},
	10,
	2
);

add_action(
	'wp_enqueue_scripts',
	function () {
		if ( ! gso_is_consent_mode_enabled() ) {
			return;
		}

		$script_path = get_theme_file_path( 'assets/consent.js' );
		if ( ! file_exists( $script_path ) ) {
			return;
		}

		wp_enqueue_script(
			'gso-consent',
			gso_asset_url( 'assets/consent.js' ),
			[],
			(string) filemtime( $script_path ),
			true
		);

		wp_localize_script(
			'gso-consent',
			'gsoConsentConfig',
			[
				'ga4Id'            => trim( (string) gso_get_setting( 'ga4_measurement_id' ) ),
				'bannerEnabled'    => gso_is_consent_banner_enabled(),
				'bannerTitle'      => (string) gso_get_setting( 'consent_banner_title' ),
				'bannerText'       => (string) gso_get_setting( 'consent_banner_text' ),
				'acceptLabel'      => '同意する',
				'rejectLabel'      => '拒否する',
				'manageLabel'      => '設定',
				'policyLabel'      => 'プライバシー情報',
				'policyUrl'        => gso_get_consent_policy_url(),
				'storageKey'       => 'gso_cookie_consent_v1',
				'cookieName'       => 'gso_cookie_consent',
				'cookieDays'       => 180,
				'defaultConsent'   => [
					'ad_storage'         => 'denied',
					'analytics_storage'  => 'denied',
					'ad_user_data'       => 'denied',
					'ad_personalization' => 'denied',
				],
				'grantedConsent'   => [
					'ad_storage'         => 'granted',
					'analytics_storage'  => 'granted',
					'ad_user_data'       => 'granted',
					'ad_personalization' => 'granted',
				],
				'deniedConsent'    => [
					'ad_storage'         => 'denied',
					'analytics_storage'  => 'denied',
					'ad_user_data'       => 'denied',
					'ad_personalization' => 'denied',
				],
			]
		);
	}
);

function gso_render_block_hero( $attributes ) {
	$eyebrow         = isset( $attributes['eyebrow'] ) ? (string) $attributes['eyebrow'] : 'Corporate / LP Theme';
	$title           = isset( $attributes['title'] ) ? (string) $attributes['title'] : '信頼感のあるUIと実装品質で企業価値を伝える';
	$lead            = isset( $attributes['lead'] ) ? (string) $attributes['lead'] : '目的に沿った情報設計と、運用しやすい実装で成果に直結するサイトを構築します。';
	$primary_label   = isset( $attributes['primaryLabel'] ) ? (string) $attributes['primaryLabel'] : 'Servicesを見る';
	$primary_url     = isset( $attributes['primaryUrl'] ) ? (string) $attributes['primaryUrl'] : gso_page_url( 'services' );
	$secondary_label = isset( $attributes['secondaryLabel'] ) ? (string) $attributes['secondaryLabel'] : 'Contactへ';
	$secondary_url   = isset( $attributes['secondaryUrl'] ) ? (string) $attributes['secondaryUrl'] : gso_page_url( 'contact' );
	$full_bleed      = ! isset( $attributes['fullBleed'] ) || (bool) $attributes['fullBleed'];

	$classes = [ 'gso-hero', 'gso-block-hero' ];
	if ( $full_bleed ) {
		$classes[] = 'gso-full-bleed';
	}

	ob_start();
	?>
	<section class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
		<div class="gso-container gso-hero-inner">
			<p class="gso-eyebrow"><?php echo esc_html( $eyebrow ); ?></p>
			<h2 class="gso-hero-title"><?php echo nl2br( esc_html( $title ) ); ?></h2>
			<p class="gso-hero-lead"><?php echo nl2br( esc_html( $lead ) ); ?></p>
			<div class="gso-hero-actions">
				<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( $primary_url ); ?>"><?php echo esc_html( $primary_label ); ?></a>
				<a class="gso-btn gso-btn-secondary" href="<?php echo esc_url( $secondary_url ); ?>"><?php echo esc_html( $secondary_label ); ?></a>
			</div>
		</div>
	</section>
	<?php
	return (string) ob_get_clean();
}

function gso_render_block_services( $attributes ) {
	$label       = isset( $attributes['label'] ) ? (string) $attributes['label'] : 'Services';
	$heading     = isset( $attributes['heading'] ) ? (string) $attributes['heading'] : '提供サービス';
	$description = isset( $attributes['description'] ) ? (string) $attributes['description'] : '相談内容に応じて、必要な範囲だけを柔軟に組み合わせて提案します。';
	$cta_label   = isset( $attributes['ctaLabel'] ) ? (string) $attributes['ctaLabel'] : 'Contactへ';
	$cta_url     = isset( $attributes['ctaUrl'] ) ? (string) $attributes['ctaUrl'] : gso_page_url( 'contact' );
	$cards       = [
		[
			'title' => isset( $attributes['card1Title'] ) ? (string) $attributes['card1Title'] : (string) gso_get_setting( 'services_card_1_title' ),
			'text'  => isset( $attributes['card1Text'] ) ? (string) $attributes['card1Text'] : (string) gso_get_setting( 'services_card_1_text' ),
		],
		[
			'title' => isset( $attributes['card2Title'] ) ? (string) $attributes['card2Title'] : (string) gso_get_setting( 'services_card_2_title' ),
			'text'  => isset( $attributes['card2Text'] ) ? (string) $attributes['card2Text'] : (string) gso_get_setting( 'services_card_2_text' ),
		],
		[
			'title' => isset( $attributes['card3Title'] ) ? (string) $attributes['card3Title'] : (string) gso_get_setting( 'services_card_3_title' ),
			'text'  => isset( $attributes['card3Text'] ) ? (string) $attributes['card3Text'] : (string) gso_get_setting( 'services_card_3_text' ),
		],
	];

	ob_start();
	?>
	<section class="gso-section gso-surface gso-block-services">
		<div class="gso-section-head">
			<div>
				<p class="gso-label"><?php echo esc_html( $label ); ?></p>
				<h2 class="gso-title"><?php echo esc_html( $heading ); ?></h2>
			</div>
			<a class="gso-link-pill" href="<?php echo esc_url( $cta_url ); ?>"><?php echo esc_html( $cta_label ); ?></a>
		</div>
		<p class="gso-note"><?php echo esc_html( $description ); ?></p>
		<div class="gso-grid-3">
			<?php foreach ( $cards as $card ) : ?>
				<article class="gso-card">
					<h3><?php echo esc_html( $card['title'] ); ?></h3>
					<p><?php echo esc_html( $card['text'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</section>
	<?php
	return (string) ob_get_clean();
}

function gso_render_block_cta( $attributes ) {
	$heading      = isset( $attributes['heading'] ) ? (string) $attributes['heading'] : (string) gso_get_setting( 'home_cta_heading' );
	$text         = isset( $attributes['text'] ) ? (string) $attributes['text'] : (string) gso_get_setting( 'home_cta_text' );
	$button_label = isset( $attributes['buttonLabel'] ) ? (string) $attributes['buttonLabel'] : (string) gso_get_setting( 'home_cta_button_label' );
	$button_url   = isset( $attributes['buttonUrl'] ) ? (string) $attributes['buttonUrl'] : gso_page_url( 'contact' );

	ob_start();
	?>
	<section class="gso-section gso-cta gso-block-cta">
		<h2><?php echo esc_html( $heading ); ?></h2>
		<p><?php echo esc_html( $text ); ?></p>
		<a class="gso-btn gso-btn-primary" href="<?php echo esc_url( $button_url ); ?>"><?php echo esc_html( $button_label ); ?></a>
	</section>
	<?php
	return (string) ob_get_clean();
}

add_action(
	'init',
	function () {
		if ( ! function_exists( 'register_block_type' ) ) {
			return;
		}

		$script_path = get_theme_file_path( 'assets/blocks.js' );
		$style_path  = get_theme_file_path( 'assets/blocks.css' );

		if ( file_exists( $script_path ) ) {
			wp_register_script(
				'gso-blocks-editor',
				gso_asset_url( 'assets/blocks.js' ),
				[ 'wp-blocks', 'wp-element', 'wp-components', 'wp-block-editor', 'wp-i18n' ],
				(string) filemtime( $script_path ),
				true
			);
			wp_localize_script(
				'gso-blocks-editor',
				'gsoBlocksData',
				[
					'servicesUrl' => gso_page_url( 'services' ),
					'contactUrl'  => gso_page_url( 'contact' ),
				]
			);
		}

		if ( file_exists( $style_path ) ) {
			wp_register_style(
				'gso-blocks-style',
				gso_asset_url( 'assets/blocks.css' ),
				[],
				(string) filemtime( $style_path )
			);
		}

		$common_args = [
			'editor_script' => 'gso-blocks-editor',
			'style'         => 'gso-blocks-style',
			'editor_style'  => 'gso-blocks-style',
		];

		register_block_type(
			'gso/hero',
			array_merge(
				$common_args,
				[
					'render_callback' => 'gso_render_block_hero',
					'attributes'      => [
						'eyebrow'         => [ 'type' => 'string', 'default' => 'Corporate / LP Theme' ],
						'title'           => [ 'type' => 'string', 'default' => '信頼感のあるUIと実装品質で企業価値を伝える' ],
						'lead'            => [ 'type' => 'string', 'default' => '目的に沿った情報設計と、運用しやすい実装で成果に直結するサイトを構築します。' ],
						'primaryLabel'    => [ 'type' => 'string', 'default' => 'Servicesを見る' ],
						'primaryUrl'      => [ 'type' => 'string', 'default' => gso_page_url( 'services' ) ],
						'secondaryLabel'  => [ 'type' => 'string', 'default' => 'Contactへ' ],
						'secondaryUrl'    => [ 'type' => 'string', 'default' => gso_page_url( 'contact' ) ],
						'fullBleed'       => [ 'type' => 'boolean', 'default' => true ],
					],
				]
			)
		);

		register_block_type(
			'gso/services',
			array_merge(
				$common_args,
				[
					'render_callback' => 'gso_render_block_services',
					'attributes'      => [
						'label'       => [ 'type' => 'string', 'default' => 'Services' ],
						'heading'     => [ 'type' => 'string', 'default' => '提供サービス' ],
						'description' => [ 'type' => 'string', 'default' => '相談内容に応じて、必要な範囲だけを柔軟に組み合わせて提案します。' ],
						'ctaLabel'    => [ 'type' => 'string', 'default' => 'Contactへ' ],
						'ctaUrl'      => [ 'type' => 'string', 'default' => gso_page_url( 'contact' ) ],
						'card1Title'  => [ 'type' => 'string', 'default' => gso_get_setting( 'services_card_1_title' ) ],
						'card1Text'   => [ 'type' => 'string', 'default' => gso_get_setting( 'services_card_1_text' ) ],
						'card2Title'  => [ 'type' => 'string', 'default' => gso_get_setting( 'services_card_2_title' ) ],
						'card2Text'   => [ 'type' => 'string', 'default' => gso_get_setting( 'services_card_2_text' ) ],
						'card3Title'  => [ 'type' => 'string', 'default' => gso_get_setting( 'services_card_3_title' ) ],
						'card3Text'   => [ 'type' => 'string', 'default' => gso_get_setting( 'services_card_3_text' ) ],
					],
				]
			)
		);

		register_block_type(
			'gso/cta',
			array_merge(
				$common_args,
				[
					'render_callback' => 'gso_render_block_cta',
					'attributes'      => [
						'heading'     => [ 'type' => 'string', 'default' => gso_get_setting( 'home_cta_heading' ) ],
						'text'        => [ 'type' => 'string', 'default' => gso_get_setting( 'home_cta_text' ) ],
						'buttonLabel' => [ 'type' => 'string', 'default' => gso_get_setting( 'home_cta_button_label' ) ],
						'buttonUrl'   => [ 'type' => 'string', 'default' => gso_page_url( 'contact' ) ],
					],
				]
			)
		);
	}
);

/* ----------------------------------------------------------
 * Helpers
 * ---------------------------------------------------------- */
function gso_asset_url( $path = '' ) {
	return trailingslashit( get_template_directory_uri() ) . ltrim( $path, '/' );
}

function gso_page_url( $slug = '' ) {
	$slug = trim( (string) $slug, '/' );
	if ( '' === $slug ) {
		return home_url( '/' );
	}

	$page = get_page_by_path( $slug );
	if ( $page instanceof WP_Post ) {
		return get_permalink( $page );
	}

	return home_url( '/' . $slug . '/' );
}

function gso_default_links() {
	$links = [
		[ 'slug' => '', 'label' => 'Home', 'url' => gso_page_url( '' ) ],
		[ 'slug' => 'services', 'label' => 'Services', 'url' => gso_page_url( 'services' ) ],
		[ 'slug' => 'about', 'label' => 'About', 'url' => gso_page_url( 'about' ) ],
		[ 'slug' => 'contact', 'label' => 'Contact', 'url' => gso_page_url( 'contact' ) ],
	];

	if ( gso_is_works_enabled() ) {
		array_splice(
			$links,
			2,
			0,
			[
				[ 'slug' => 'works', 'label' => 'Works', 'url' => gso_page_url( 'works' ) ],
			]
		);
	}

	return $links;
}

function gso_is_current_nav_slug( $slug ) {
	$slug = (string) $slug;
	if ( '' === $slug ) {
		return is_front_page();
	}

	if ( 'works' === $slug ) {
		return gso_is_works_enabled() && ( is_page( 'works' ) || is_singular( 'gso_work' ) );
	}

	return is_page( $slug );
}

add_filter(
	'wp_nav_menu_objects',
	function ( $items, $args ) {
		if ( gso_is_works_enabled() ) {
			return $items;
		}

		$location = isset( $args->theme_location ) ? (string) $args->theme_location : '';
		if ( ! in_array( $location, [ 'primary', 'footer' ], true ) ) {
			return $items;
		}

		$filtered = [];
		foreach ( $items as $item ) {
			$is_works_page = false;
			if ( 'page' === $item->object && ! empty( $item->object_id ) ) {
				$is_works_page = ( 'works' === get_post_field( 'post_name', (int) $item->object_id ) );
			}

			$url_path       = trim( (string) wp_parse_url( (string) $item->url, PHP_URL_PATH ), '/' );
			$is_works_route = (bool) preg_match( '#(^|/)works$#', $url_path );
			if ( $is_works_page || $is_works_route ) {
				continue;
			}

			$filtered[] = $item;
		}

		return array_values( $filtered );
	},
	10,
	2
);

function gso_social_links() {
	$items = [];

	$map = [
		'sns_x'         => 'X',
		'sns_instagram' => 'Instagram',
		'sns_linkedin'  => 'LinkedIn',
	];

	foreach ( $map as $key => $label ) {
		$url = trim( (string) gso_get_setting( $key ) );
		if ( '' === $url ) {
			continue;
		}

		$items[] = [
			'label' => $label,
			'url'   => $url,
		];
	}

	return $items;
}

/* ----------------------------------------------------------
 * Works custom post type + fields
 * ---------------------------------------------------------- */
add_action(
	'init',
	function () {
		$labels = [
			'name'               => 'Works',
			'singular_name'      => 'Work',
			'add_new'            => '新規追加',
			'add_new_item'       => 'Workを追加',
			'edit_item'          => 'Workを編集',
			'new_item'           => '新しいWork',
			'view_item'          => 'Workを表示',
			'search_items'       => 'Workを検索',
			'not_found'          => 'Workが見つかりません',
			'not_found_in_trash' => 'ゴミ箱にWorkはありません',
			'menu_name'          => 'Works',
		];

		register_post_type(
			'gso_work',
			[
				'labels'             => $labels,
				'public'             => true,
				'show_ui'            => true,
				'show_in_rest'       => true,
				'has_archive'        => false,
				'menu_icon'          => 'dashicons-portfolio',
				'rewrite'            => [ 'slug' => 'work' ],
				'supports'           => [ 'title', 'editor', 'excerpt', 'thumbnail', 'revisions' ],
				'exclude_from_search'=> false,
			]
		);
	}
);

add_action(
	'admin_menu',
	function () {
		if ( gso_is_works_enabled() ) {
			return;
		}

		remove_menu_page( 'edit.php?post_type=gso_work' );
	},
	999
);

add_action(
	'admin_bar_menu',
	function ( $wp_admin_bar ) {
		if ( gso_is_works_enabled() ) {
			return;
		}

		$wp_admin_bar->remove_node( 'new-gso_work' );
	},
	999
);

function gso_work_field_schema() {
	return [
		'category' => [ 'label' => 'カテゴリ', 'maxlength' => 24, 'description' => '例: 採用サイト / LP / コーポレート' ],
		'result'   => [ 'label' => '成果指標', 'maxlength' => 60, 'description' => '例: CVR 1.8倍 / 問い合わせ142%' ],
		'tech'     => [ 'label' => '技術要素', 'maxlength' => 120, 'description' => '例: WordPress / PHP / CSS' ],
		'client'   => [ 'label' => 'クライアント種別', 'maxlength' => 60, 'description' => '例: 製造業 / 士業 / BtoB SaaS' ],
	];
}

function gso_get_work_meta_key( $field ) {
	return '_gso_work_' . $field;
}

function gso_get_work_meta( $post_id, $field, $fallback = '' ) {
	$value = get_post_meta( $post_id, gso_get_work_meta_key( $field ), true );
	if ( '' === $value || null === $value ) {
		return $fallback;
	}

	return $value;
}

function gso_get_work_summary( $post_id, $length = 100 ) {
	$excerpt = get_the_excerpt( $post_id );
	if ( '' !== trim( $excerpt ) ) {
		return $excerpt;
	}

	$content = wp_strip_all_tags( get_post_field( 'post_content', $post_id ) );
	if ( '' === $content ) {
		return '実績の詳細は本文をご覧ください。';
	}

	return wp_trim_words( $content, (int) ceil( $length / 2 ), '…' );
}

function gso_get_work_image_url( $post_id, $size = 'gso-work-thumb' ) {
	if ( has_post_thumbnail( $post_id ) ) {
		$image = get_the_post_thumbnail_url( $post_id, $size );
		if ( $image ) {
			return $image;
		}
	}

	return gso_asset_url( 'assets/default-work.svg' );
}

add_action(
	'add_meta_boxes',
	function () {
		add_meta_box(
			'gso-work-fields',
			'Works 入力ガイド',
			'gso_render_work_fields_metabox',
			'gso_work',
			'normal',
			'high'
		);
	}
);

function gso_render_work_fields_metabox( $post ) {
	wp_nonce_field( 'gso_save_work_fields', 'gso_work_fields_nonce' );
	$schema = gso_work_field_schema();

	echo '<p>入力が短く明確だと、一覧表示が崩れず見やすくなります。</p>';
	echo '<p><strong>おすすめ:</strong> アイキャッチ画像は 1600x1000px 以上 / 16:10 で登録。</p>';
	echo '<table class="form-table" role="presentation"><tbody>';

	foreach ( $schema as $field => $config ) {
		$value = gso_get_work_meta( $post->ID, $field );
		echo '<tr>';
		echo '<th scope="row"><label for="gso_work_' . esc_attr( $field ) . '">' . esc_html( $config['label'] ) . '</label></th>';
		echo '<td>';
		echo '<input type="text" class="regular-text gso-countable" id="gso_work_' . esc_attr( $field ) . '" name="gso_work_' . esc_attr( $field ) . '" value="' . esc_attr( $value ) . '" maxlength="' . esc_attr( (string) $config['maxlength'] ) . '">';
		if ( '' !== $config['description'] ) {
			echo '<p class="description">' . esc_html( $config['description'] ) . '</p>';
		}
		echo '</td>';
		echo '</tr>';
	}

	echo '</tbody></table>';
	echo '<p class="description">本文には案件背景、対応内容、工夫したポイントを3〜6行で入力してください。抜粋未入力時は本文先頭が自動利用されます。</p>';
}

add_action(
	'save_post_gso_work',
	function ( $post_id ) {
		if ( ! isset( $_POST['gso_work_fields_nonce'] ) ) {
			return;
		}

		if ( ! wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['gso_work_fields_nonce'] ) ), 'gso_save_work_fields' ) ) {
			return;
		}

		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}

		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}

		$schema = gso_work_field_schema();
		foreach ( $schema as $field => $config ) {
			$input_name = 'gso_work_' . $field;
			$raw        = isset( $_POST[ $input_name ] ) ? sanitize_text_field( wp_unslash( $_POST[ $input_name ] ) ) : '';

			$max_length = (int) $config['maxlength'];
			if ( $max_length > 0 ) {
				if ( function_exists( 'mb_substr' ) ) {
					$raw = mb_substr( $raw, 0, $max_length );
				} else {
					$raw = substr( $raw, 0, $max_length );
				}
			}

			update_post_meta( $post_id, gso_get_work_meta_key( $field ), $raw );
		}
	}
);

add_filter(
	'manage_gso_work_posts_columns',
	function ( $columns ) {
		$columns['gso_work_category'] = 'カテゴリ';
		$columns['gso_work_result']   = '成果';
		return $columns;
	}
);

add_action(
	'manage_gso_work_posts_custom_column',
	function ( $column, $post_id ) {
		if ( 'gso_work_category' === $column ) {
			echo esc_html( gso_get_work_meta( $post_id, 'category', '-' ) );
		}

		if ( 'gso_work_result' === $column ) {
			echo esc_html( gso_get_work_meta( $post_id, 'result', '-' ) );
		}
	},
	10,
	2
);

/* ----------------------------------------------------------
 * Beginner-friendly admin page
 * ---------------------------------------------------------- */
add_action(
	'admin_menu',
	function () {
		add_theme_page(
			'Gap Smile テーマ設定',
			'Gap Smile設定',
			'gso_manage_theme',
			'gso-theme-settings',
			'gso_render_theme_settings_page'
		);
	}
);

add_filter(
	'option_page_capability_gso_theme_settings_group',
	function () {
		return 'gso_manage_theme';
	}
);

add_action(
	'admin_init',
	function () {
		register_setting(
			'gso_theme_settings_group',
			'gso_theme_settings',
			[
				'sanitize_callback' => 'gso_sanitize_theme_settings',
			]
		);

		add_settings_section(
			'gso_company',
			'会社情報',
			function () {
				echo '<p>フッター / About / Contact で共通利用される情報です。</p>';
			},
			'gso-theme-settings'
		);

		add_settings_section(
			'gso_content',
			'本文・導線文言',
			function () {
				echo '<p>テキストを更新すると、固定ページの主要文言へ反映されます。</p>';
			},
			'gso-theme-settings'
		);

		add_settings_section(
			'gso_social',
			'SNS・SEO補助',
			function () {
				echo '<p>SNS URLは未入力なら自動的に非表示になります。</p>';
			},
			'gso-theme-settings'
		);

		foreach ( gso_setting_fields() as $key => $field ) {
			if ( ! gso_is_setting_field_visible( $key ) ) {
				continue;
			}

			add_settings_field(
				'gso_field_' . $key,
				$field['label'],
				'gso_render_setting_field',
				'gso-theme-settings',
				$field['section'],
				[
					'key'   => $key,
					'field' => $field,
				]
			);
		}
	}
);

function gso_render_setting_field( $args ) {
	$key      = $args['key'];
	$field    = $args['field'];
	$type     = $field['type'];
	$value    = gso_get_setting( $key );
	$max      = isset( $field['maxlength'] ) ? (int) $field['maxlength'] : 0;
	$required = ! empty( $field['required'] ) ? ' required' : '';

	if ( 'checkbox' === $type ) {
		echo '<label><input type="checkbox" name="gso_theme_settings[' . esc_attr( $key ) . ']" id="gso_theme_settings_' . esc_attr( $key ) . '" value="1"' . checked( '1', (string) $value, false ) . $required . '> 表示する</label>';
	} elseif ( 'select' === $type ) {
		$options = isset( $field['options'] ) && is_array( $field['options'] ) ? $field['options'] : [];
		echo '<select name="gso_theme_settings[' . esc_attr( $key ) . ']" id="gso_theme_settings_' . esc_attr( $key ) . '" class="regular-text">';
		foreach ( $options as $option_value => $option_label ) {
			echo '<option value="' . esc_attr( (string) $option_value ) . '"' . selected( (string) $value, (string) $option_value, false ) . '>' . esc_html( (string) $option_label ) . '</option>';
		}
		echo '</select>';
	} elseif ( 'textarea' === $type ) {
		echo '<textarea class="large-text gso-countable" rows="3" name="gso_theme_settings[' . esc_attr( $key ) . ']" id="gso_theme_settings_' . esc_attr( $key ) . '"' . ( $max ? ' maxlength="' . esc_attr( (string) $max ) . '"' : '' ) . $required . '>' . esc_textarea( $value ) . '</textarea>';
	} else {
		echo '<input class="regular-text gso-countable" type="' . esc_attr( $type ) . '" name="gso_theme_settings[' . esc_attr( $key ) . ']" id="gso_theme_settings_' . esc_attr( $key ) . '" value="' . esc_attr( $value ) . '"' . ( $max ? ' maxlength="' . esc_attr( (string) $max ) . '"' : '' ) . $required . '>';
	}

	if ( ! empty( $field['description'] ) ) {
		echo '<p class="description">' . esc_html( $field['description'] ) . '</p>';
	}
}

function gso_sanitize_theme_settings( $input ) {
	if ( ! is_array( $input ) ) {
		$input = [];
	}

	$existing = get_option( 'gso_theme_settings', [] );
	if ( ! is_array( $existing ) ) {
		$existing = [];
	}

	$defaults = gso_default_settings();
	$fields   = gso_setting_fields();
	$output   = [];
	$target_mode = isset( $input['operation_mode'] ) ? sanitize_key( wp_unslash( $input['operation_mode'] ) ) : gso_get_operation_mode();

	foreach ( $defaults as $key => $default ) {
		$type  = isset( $fields[ $key ]['type'] ) ? $fields[ $key ]['type'] : 'text';
		$is_visible = gso_is_setting_field_visible( $key, $target_mode );

		if ( ! $is_visible && array_key_exists( $key, $existing ) ) {
			$output[ $key ] = $existing[ $key ];
			continue;
		}

		if ( 'checkbox' === $type ) {
			$value = isset( $input[ $key ] ) ? $input[ $key ] : ( $is_visible ? '0' : ( $existing[ $key ] ?? $default ) );
		} else {
			$value = isset( $input[ $key ] ) ? wp_unslash( $input[ $key ] ) : ( $existing[ $key ] ?? $default );
		}

		switch ( $type ) {
			case 'email':
				$clean = sanitize_email( $value );
				break;
			case 'url':
				$clean = esc_url_raw( $value );
				break;
			case 'textarea':
				$clean = sanitize_textarea_field( $value );
				break;
			case 'checkbox':
				$clean = ( ! empty( $value ) && '0' !== (string) $value ) ? '1' : '0';
				break;
			case 'select':
				$options = isset( $fields[ $key ]['options'] ) && is_array( $fields[ $key ]['options'] ) ? array_keys( $fields[ $key ]['options'] ) : [];
				$clean   = sanitize_key( (string) $value );
				if ( ! in_array( $clean, $options, true ) ) {
					$clean = isset( $existing[ $key ] ) ? (string) $existing[ $key ] : (string) $default;
				}
				break;
			default:
				$clean = sanitize_text_field( $value );
				if ( 'tel' === $key ) {
					$clean = preg_replace( '/[^0-9\-\+\(\)\s]/u', '', $clean );
				}
				if ( 'ga4_measurement_id' === $key ) {
					$clean = strtoupper( preg_replace( '/[^A-Z0-9\-]/', '', $clean ) );
					if ( '' !== $clean && ! preg_match( '/^G-[A-Z0-9]+$/', $clean ) ) {
						$clean = '';
					}
				}
				break;
		}

		$max = isset( $fields[ $key ]['maxlength'] ) ? (int) $fields[ $key ]['maxlength'] : 0;
		if ( $max > 0 && 'checkbox' !== $type ) {
			if ( function_exists( 'mb_substr' ) ) {
				$clean = mb_substr( $clean, 0, $max );
			} else {
				$clean = substr( $clean, 0, $max );
			}
		}

		$output[ $key ] = $clean;
	}

	return $output;
}

function gso_render_theme_settings_page() {
	if ( ! gso_user_can_manage_theme() ) {
		return;
	}

	$import_state = isset( $_GET['gso_import'] ) ? sanitize_key( wp_unslash( $_GET['gso_import'] ) ) : '';
	$import_map   = [
		'success'       => [ 'class' => 'notice notice-success', 'text' => 'テーマ設定をインポートしました。' ],
		'file_missing'  => [ 'class' => 'notice notice-error', 'text' => 'インポート用ファイルが見つかりません。JSONファイルを選択してください。' ],
		'invalid_json'  => [ 'class' => 'notice notice-error', 'text' => 'JSON形式が不正です。Exportした設定ファイルを指定してください。' ],
		'invalid_shape' => [ 'class' => 'notice notice-error', 'text' => '設定データ構造が正しくありません。' ],
		'permission'    => [ 'class' => 'notice notice-error', 'text' => '実行権限がありません。' ],
	];
	?>
	<?php
	$services_page = get_page_by_path( 'services' );
	$services_url  = $services_page instanceof WP_Post
		? admin_url( 'post.php?post=' . (int) $services_page->ID . '&action=edit' )
		: admin_url( 'post-new.php?post_type=page' );
	?>
	<div class="wrap">
		<h1>Gap Smile テーマ設定</h1>
		<p>初心者向け運用画面です。ここで入力した内容がテーマ全体へ反映されます。</p>
		<p><strong>現在の運用モード:</strong> <?php echo 'advanced' === gso_get_operation_mode() ? '上級者モード' : '初心者モード'; ?></p>
		<?php if ( isset( $import_map[ $import_state ] ) ) : ?>
			<div class="<?php echo esc_attr( $import_map[ $import_state ]['class'] ); ?>"><p><?php echo esc_html( $import_map[ $import_state ]['text'] ); ?></p></div>
		<?php endif; ?>
		<p>
			<a class="button button-secondary" href="<?php echo esc_url( admin_url( 'edit.php?post_type=page' ) ); ?>">固定ページ一覧を開く</a>
			<a class="button button-secondary" href="<?php echo esc_url( $services_url ); ?>">Servicesを編集</a>
			<?php if ( gso_is_works_enabled() ) : ?>
				<a class="button button-secondary" href="<?php echo esc_url( admin_url( 'post-new.php?post_type=gso_work' ) ); ?>">新しいWorkを追加</a>
				<a class="button button-secondary" href="<?php echo esc_url( admin_url( 'edit.php?post_type=gso_work' ) ); ?>">Works一覧を開く</a>
			<?php endif; ?>
		</p>
		<form action="options.php" method="post">
			<?php
			settings_fields( 'gso_theme_settings_group' );
			do_settings_sections( 'gso-theme-settings' );
			submit_button( '設定を保存' );
			?>
		</form>
		<hr style="margin:24px 0;">
		<h2>設定バックアップ（Export / Import）</h2>
		<p>初心者運用向けに、現在のテーマ設定をJSONで保存・復元できます。</p>
		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" style="margin:0 0 12px;">
			<input type="hidden" name="action" value="gso_export_theme_settings">
			<?php wp_nonce_field( 'gso_export_theme_settings' ); ?>
			<?php submit_button( '設定をExport', 'secondary', 'submit', false ); ?>
		</form>
		<form action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" method="post" enctype="multipart/form-data">
			<input type="hidden" name="action" value="gso_import_theme_settings">
			<?php wp_nonce_field( 'gso_import_theme_settings' ); ?>
			<input type="file" name="gso_theme_settings_file" accept="application/json,.json" required>
			<?php submit_button( '設定をImport', 'secondary', 'submit', false ); ?>
		</form>
	</div>
	<?php
}

function gso_export_theme_settings_payload() {
	return [
		'meta'     => [
			'theme'       => 'gap-smile-original',
			'version'     => (string) wp_get_theme()->get( 'Version' ),
			'site_url'    => home_url( '/' ),
			'exported_at' => gmdate( 'c' ),
		],
		'settings' => gso_get_settings(),
	];
}

add_action(
	'admin_post_gso_export_theme_settings',
	function () {
		if ( ! gso_user_can_manage_theme() ) {
			wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=permission' ) );
			exit;
		}

		check_admin_referer( 'gso_export_theme_settings' );

		$payload  = gso_export_theme_settings_payload();
		$filename = 'gap-smile-theme-settings-' . gmdate( 'Ymd-His' ) . '.json';

		nocache_headers();
		header( 'Content-Type: application/json; charset=utf-8' );
		header( 'Content-Disposition: attachment; filename="' . $filename . '"' );
		echo wp_json_encode( $payload, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT );
		exit;
	}
);

add_action(
	'admin_post_gso_import_theme_settings',
	function () {
		if ( ! gso_user_can_manage_theme() ) {
			wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=permission' ) );
			exit;
		}

		check_admin_referer( 'gso_import_theme_settings' );

		if ( empty( $_FILES['gso_theme_settings_file']['tmp_name'] ) || ! is_uploaded_file( $_FILES['gso_theme_settings_file']['tmp_name'] ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=file_missing' ) );
			exit;
		}

		$raw = file_get_contents( $_FILES['gso_theme_settings_file']['tmp_name'] );
		if ( ! is_string( $raw ) || '' === trim( $raw ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=invalid_json' ) );
			exit;
		}

		$decoded = json_decode( $raw, true );
		if ( ! is_array( $decoded ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=invalid_json' ) );
			exit;
		}

		$settings = isset( $decoded['settings'] ) && is_array( $decoded['settings'] ) ? $decoded['settings'] : $decoded;
		if ( ! is_array( $settings ) || empty( $settings ) ) {
			wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=invalid_shape' ) );
			exit;
		}

		$sanitized = gso_sanitize_theme_settings( $settings );
		update_option( 'gso_theme_settings', $sanitized, false );

		wp_safe_redirect( admin_url( 'admin.php?page=gso-theme-settings&gso_import=success' ) );
		exit;
	}
);

/* ----------------------------------------------------------
 * Block patterns (Home / About / Contact)
 * ---------------------------------------------------------- */
add_action(
	'init',
	function () {
		if ( ! function_exists( 'register_block_pattern' ) ) {
			return;
		}

		if ( function_exists( 'register_block_pattern_category' ) ) {
			register_block_pattern_category(
				'gso',
				[
					'label' => 'Gap Smile',
				]
			);
		}

		$contact_url  = esc_url( gso_page_url( 'contact' ) );
		$services_url = esc_url( gso_page_url( 'services' ) );

		register_block_pattern(
			'gso/home-hero',
			[
				'title'       => 'GSO: Homeヒーロー',
				'categories'  => [ 'gso' ],
				'description' => 'トップページ用の見出し+導線パターン',
				'content'     => '<!-- wp:group {"className":"gso-panel"} --><div class="wp-block-group gso-panel"><!-- wp:paragraph {"className":"gso-label"} --><p class="gso-label">Home Hero</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"gso-title"} --><h2 class="wp-block-heading gso-title">信頼感のあるUIで価値を伝える</h2><!-- /wp:heading --><!-- wp:paragraph --><p>採用担当やクライアントに向けて、強みを明確に伝える導入テキストです。</p><!-- /wp:paragraph --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="' . $contact_url . '">Contactへ</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
			]
		);

		register_block_pattern(
			'gso/about-message',
			[
				'title'       => 'GSO: Aboutメッセージ',
				'categories'  => [ 'gso' ],
				'description' => '代表メッセージと理念をまとめるパターン',
				'content'     => '<!-- wp:group {"className":"gso-panel"} --><div class="wp-block-group gso-panel"><!-- wp:paragraph {"className":"gso-label"} --><p class="gso-label">Message</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"gso-title"} --><h2 class="wp-block-heading gso-title">代表メッセージ</h2><!-- /wp:heading --><!-- wp:paragraph --><p>ここに代表メッセージを入力してください。3〜5行で簡潔にまとめると読みやすくなります。</p><!-- /wp:paragraph --><!-- wp:list {"className":"gso-list"} --><ul class="gso-list"><li><strong>Mission</strong> ミッションを入力</li><li><strong>Vision</strong> ビジョンを入力</li><li><strong>Value</strong> バリューを入力</li></ul><!-- /wp:list --></div><!-- /wp:group -->',
			]
		);

		register_block_pattern(
			'gso/services-overview',
			[
				'title'       => 'GSO: Services 概要',
				'categories'  => [ 'gso' ],
				'description' => 'Servicesページ向けのサービス3列パターン',
				'content'     => '<!-- wp:group {"className":"gso-surface"} --><div class="wp-block-group gso-surface"><!-- wp:paragraph {"className":"gso-label"} --><p class="gso-label">Services</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"gso-title"} --><h2 class="wp-block-heading gso-title">提供サービス</h2><!-- /wp:heading --><!-- wp:columns --><div class="wp-block-columns"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">企業サイト制作</h3><!-- /wp:heading --><!-- wp:paragraph --><p>企業の価値を明快に伝える情報設計と実装。</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">採用LP制作</h3><!-- /wp:heading --><!-- wp:paragraph --><p>応募導線を最適化し、訴求を強化するLP構築。</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3} --><h3 class="wp-block-heading">UI改善支援</h3><!-- /wp:heading --><!-- wp:paragraph --><p>既存サイトの課題を分析し、改善施策を実装。</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="' . $contact_url . '">相談する</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
			]
		);

		register_block_pattern(
			'gso/services-flow',
			[
				'title'       => 'GSO: Services 進行フロー',
				'categories'  => [ 'gso' ],
				'description' => 'Servicesページ向けの進行フロー+CTA',
				'content'     => '<!-- wp:group {"className":"gso-panel"} --><div class="wp-block-group gso-panel"><!-- wp:paragraph {"className":"gso-label"} --><p class="gso-label">Process</p><!-- /wp:paragraph --><!-- wp:heading {"level":2,"className":"gso-title"} --><h2 class="wp-block-heading gso-title">ご相談から公開までの流れ</h2><!-- /wp:heading --><!-- wp:list {"className":"gso-list"} --><ul class="gso-list"><li><strong>1. ヒアリング</strong>目的と課題を整理</li><li><strong>2. 設計・提案</strong>構成案と実装方針を提示</li><li><strong>3. 実装・改善</strong>公開後も改善を継続</li></ul><!-- /wp:list --><!-- wp:buttons --><div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} --><div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="' . $services_url . '">Servicesトップへ</a></div><!-- /wp:button --><!-- wp:button {"className":"is-style-outline"} --><div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="' . $contact_url . '">Contactへ</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
			]
		);

		register_block_pattern(
			'gso/contact-cta',
			[
				'title'       => 'GSO: Contact CTA',
				'categories'  => [ 'gso' ],
				'description' => '問い合わせ導線向けCTAパターン',
				'content'     => '<!-- wp:group {"className":"gso-cta"} --><div class="wp-block-group gso-cta"><!-- wp:heading {"level":2} --><h2 class="wp-block-heading">お問い合わせはこちら</h2><!-- /wp:heading --><!-- wp:paragraph --><p>用途と希望納期を記載してご連絡ください。1営業日以内に返信します。</p><!-- /wp:paragraph --><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} --><div class="wp-block-buttons"><!-- wp:button --><div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="' . $contact_url . '">Contactへ進む</a></div><!-- /wp:button --></div><!-- /wp:buttons --></div><!-- /wp:group -->',
			]
		);
	}
);

/* ----------------------------------------------------------
 * Editing guard rails for beginners
 * ---------------------------------------------------------- */
add_filter(
	'allowed_block_types_all',
	function ( $allowed_blocks, $editor_context ) {
		if ( empty( $editor_context->post ) ) {
			return $allowed_blocks;
		}

		$post_type = $editor_context->post->post_type;
		if ( ! in_array( $post_type, [ 'page', 'post', 'gso_work' ], true ) ) {
			return $allowed_blocks;
		}

		return [
			'core/paragraph',
			'core/heading',
			'core/list',
			'core/image',
			'core/gallery',
			'core/buttons',
			'core/button',
			'core/group',
			'core/columns',
			'core/column',
			'core/spacer',
			'core/separator',
			'core/quote',
			'core/table',
			'gso/hero',
			'gso/services',
			'gso/cta',
		];
	},
	10,
	2
);

/* ----------------------------------------------------------
 * Preview workflow / checklist
 * ---------------------------------------------------------- */
add_action(
	'add_meta_boxes',
	function () {
		$post_types = [ 'page', 'post', 'gso_work' ];
		foreach ( $post_types as $post_type ) {
			add_meta_box(
				'gso-publish-checklist',
				'公開前チェックリスト',
				'gso_render_publish_checklist_metabox',
				$post_type,
				'side',
				'high'
			);
		}
	}
);

function gso_render_publish_checklist_metabox( $post ) {
	$preview_url = get_preview_post_link( $post );

	echo '<ol style="padding-left:1.2em; margin:0;">';
	echo '<li>タイトルが具体的か確認</li>';
	echo '<li>アイキャッチ画像を設定</li>';
	echo '<li>本文の見出し構造を確認</li>';
	echo '<li>スマホ幅でプレビュー確認</li>';
	echo '<li>CTAリンク先を確認</li>';
	echo '</ol>';

	if ( $preview_url ) {
		echo '<p style="margin-top:10px;"><a class="button button-secondary" href="' . esc_url( $preview_url ) . '" target="_blank" rel="noopener noreferrer">プレビューを開く</a></p>';
	}
}

add_action(
	'wp_dashboard_setup',
	function () {
		wp_add_dashboard_widget(
			'gso_dashboard_checklist',
			'Gap Smile 公開前チェック',
				function () {
					$services_page = get_page_by_path( 'services' );
					$services_url  = $services_page instanceof WP_Post
						? admin_url( 'post.php?post=' . (int) $services_page->ID . '&action=edit' )
						: admin_url( 'post-new.php?post_type=page' );

					echo '<p>公開事故を防ぐため、以下を毎回確認してください。</p>';
					echo '<ul style="margin-left:1.2em; list-style:disc;">';
					echo '<li>誤字脱字・リンク切れがない</li>';
					echo '<li>HeroとCTAの文言が目的に合っている</li>';
					echo '<li>画像がぼやけていない（推奨: 横1600px以上）</li>';
					echo '<li>プレビューでスマホ表示を確認済み</li>';
					echo '</ul>';
					echo '<p><a class="button" href="' . esc_url( admin_url( 'themes.php?page=gso-theme-settings' ) ) . '">テーマ設定を開く</a> ';
					echo '<a class="button button-secondary" href="' . esc_url( $services_url ) . '">Servicesを編集</a>';
					if ( gso_is_works_enabled() ) {
						echo ' <a class="button button-secondary" href="' . esc_url( admin_url( 'post-new.php?post_type=gso_work' ) ) . '">Workを追加</a>';
					}
					echo '</p>';
				}
			);
		}
	);

add_action(
	'admin_notices',
	function () {
		$screen = get_current_screen();
		if ( ! $screen || 'post' !== $screen->base ) {
			return;
		}

		if ( ! in_array( $screen->post_type, [ 'page', 'post', 'gso_work' ], true ) ) {
			return;
		}

		$post_id = isset( $_GET['post'] ) ? (int) $_GET['post'] : 0;
		if ( $post_id && 'publish' === get_post_status( $post_id ) ) {
			return;
		}

		echo '<div class="notice notice-info"><p><strong>公開前の推奨手順:</strong> 「下書き保存 → プレビュー確認（PC/スマホ） → 公開」の順で進めてください。</p></div>';
	}
);

/* ----------------------------------------------------------
 * Image operation support
 * ---------------------------------------------------------- */
add_filter(
	'big_image_size_threshold',
	function () {
		return 1920;
	}
);

add_filter(
	'jpeg_quality',
	function () {
		return 82;
	}
);

add_filter(
	'wp_editor_set_quality',
	function () {
		return 82;
	}
);

function gso_image_editor_supports_mime( $mime ) {
	if ( 'image/webp' === $mime && function_exists( 'imagewebp' ) ) {
		return true;
	}

	if ( 'image/avif' === $mime && function_exists( 'imageavif' ) ) {
		return true;
	}

	if ( class_exists( 'Imagick' ) ) {
		try {
			$formats = array_map( 'strtoupper', Imagick::queryFormats() );
			if ( 'image/webp' === $mime && in_array( 'WEBP', $formats, true ) ) {
				return true;
			}
			if ( 'image/avif' === $mime && in_array( 'AVIF', $formats, true ) ) {
				return true;
			}
		} catch ( Exception $e ) {
			return false;
		}
	}

	return false;
}

function gso_preferred_modern_image_mime() {
	if ( gso_image_editor_supports_mime( 'image/avif' ) ) {
		return 'image/avif';
	}
	if ( gso_image_editor_supports_mime( 'image/webp' ) ) {
		return 'image/webp';
	}
	return '';
}

add_filter(
	'image_editor_output_format',
	function ( $formats ) {
		$target = gso_preferred_modern_image_mime();
		if ( '' === $target ) {
			return $formats;
		}

		$formats['image/jpeg'] = $target;
		$formats['image/png']  = $target;
		return $formats;
	}
);

add_filter(
	'wp_handle_upload_prefilter',
	function ( $file ) {
		if ( empty( $file['tmp_name'] ) || ! is_string( $file['tmp_name'] ) ) {
			return $file;
		}

		$image_info = @getimagesize( $file['tmp_name'] );
		if ( ! is_array( $image_info ) || empty( $image_info[0] ) || empty( $image_info[1] ) ) {
			return $file;
		}

		$width  = (int) $image_info[0];
		$height = (int) $image_info[1];
		if ( $width < 1600 || $height < 1000 ) {
			set_transient(
				'gso_image_upload_warn_' . get_current_user_id(),
				[
					'width'  => $width,
					'height' => $height,
				],
				120
			);
		}

		return $file;
	}
);

add_action(
	'admin_notices',
	function () {
		$screen = get_current_screen();
		if ( ! $screen || ! in_array( $screen->base, [ 'media', 'upload', 'post' ], true ) ) {
			return;
		}

		$key  = 'gso_image_upload_warn_' . get_current_user_id();
		$data = get_transient( $key );
		if ( ! is_array( $data ) || empty( $data['width'] ) || empty( $data['height'] ) ) {
			return;
		}

		delete_transient( $key );
		echo '<div class="notice notice-warning is-dismissible"><p>画像サイズが推奨値を下回っています（現在: ' . esc_html( (string) $data['width'] ) . 'x' . esc_html( (string) $data['height'] ) . 'px / 推奨: 1600x1000px以上）。表示品質を保つため、より大きな画像を推奨します。</p></div>';
	}
);

add_filter(
	'image_size_names_choose',
	function ( $sizes ) {
		$sizes['gso-work-thumb'] = 'Worksカード（960x620）';
		$sizes['gso-work-og']    = 'OGP（1200x630）';
		return $sizes;
	}
);

add_filter(
	'admin_post_thumbnail_html',
	function ( $content, $post_id ) {
		if ( 'gso_work' !== get_post_type( $post_id ) ) {
			return $content;
		}

		$note = '<p class="description" style="margin-top:8px;">推奨画像サイズ: 1600x1000px以上（16:10）。未設定時はテーマのデフォルト画像が表示されます。</p>';
		return $content . $note;
	},
	10,
	2
);

/* ----------------------------------------------------------
 * SEO
 * ---------------------------------------------------------- */
add_action(
	'template_redirect',
	function () {
		if ( is_admin() || wp_doing_ajax() || gso_is_works_enabled() ) {
			return;
		}

		if ( is_preview() ) {
			return;
		}

		if ( is_page( 'works' ) || is_singular( 'gso_work' ) || is_post_type_archive( 'gso_work' ) ) {
			wp_safe_redirect( gso_page_url( 'services' ), 302 );
			exit;
		}
	}
);

function gso_current_canonical_url() {
	if ( is_singular() ) {
		return get_permalink();
	}

	$request_uri = isset( $_SERVER['REQUEST_URI'] ) ? wp_unslash( $_SERVER['REQUEST_URI'] ) : '/';
	$path        = strtok( $request_uri, '?' );
	return home_url( $path ? $path : '/' );
}

function gso_current_og_image_url() {
	if ( is_singular( 'gso_work' ) ) {
		$post_id = get_queried_object_id();
		if ( $post_id && has_post_thumbnail( $post_id ) ) {
			$image = get_the_post_thumbnail_url( $post_id, 'gso-work-og' );
			if ( $image ) {
				return $image;
			}
		}
	}

	if ( is_page( 'services' ) ) {
		return gso_asset_url( 'assets/ogp-services.svg' );
	}
	if ( is_page( 'about' ) ) {
		return gso_asset_url( 'assets/ogp-about.svg' );
	}
	if ( is_page( 'contact' ) ) {
		return gso_asset_url( 'assets/ogp-contact.svg' );
	}
	if ( is_page( 'works' ) ) {
		return gso_asset_url( 'assets/ogp-works.svg' );
	}

	return gso_asset_url( 'assets/ogp-default.svg' );
}

function gso_should_noindex() {
	if ( is_search() && '1' === (string) gso_get_setting( 'noindex_search_pages' ) ) {
		return true;
	}
	if ( is_404() && '1' === (string) gso_get_setting( 'noindex_404_pages' ) ) {
		return true;
	}
	if ( is_page( 'works' ) ) {
		if ( ! gso_is_works_enabled() ) {
			return true;
		}
		if ( '1' === (string) gso_get_setting( 'noindex_works_page' ) ) {
			return true;
		}
	}
	return false;
}

function gso_breadcrumb_list_item( $position, $name, $url ) {
	return [
		'@type'    => 'ListItem',
		'position' => (int) $position,
		'name'     => (string) $name,
		'item'     => (string) $url,
	];
}

function gso_breadcrumb_json_ld() {
	if ( is_front_page() || is_home() ) {
		return [];
	}

	$items   = [];
	$items[] = gso_breadcrumb_list_item( 1, 'Home', home_url( '/' ) );
	$pos     = 2;

	if ( is_page( 'services' ) ) {
		$items[] = gso_breadcrumb_list_item( $pos, 'Services', gso_page_url( 'services' ) );
	} elseif ( is_page( 'about' ) ) {
		$items[] = gso_breadcrumb_list_item( $pos, 'About', gso_page_url( 'about' ) );
	} elseif ( is_page( 'contact' ) ) {
		$items[] = gso_breadcrumb_list_item( $pos, 'Contact', gso_page_url( 'contact' ) );
	} elseif ( is_page( 'works' ) ) {
		$items[] = gso_breadcrumb_list_item( $pos, 'Works', gso_page_url( 'works' ) );
	} elseif ( is_singular( 'gso_work' ) ) {
		if ( gso_is_works_enabled() ) {
			$items[] = gso_breadcrumb_list_item( $pos, 'Works', gso_page_url( 'works' ) );
			$pos++;
		} else {
			$items[] = gso_breadcrumb_list_item( $pos, 'Services', gso_page_url( 'services' ) );
			$pos++;
		}
		$items[] = gso_breadcrumb_list_item( $pos, get_the_title( get_queried_object_id() ), get_permalink( get_queried_object_id() ) );
	} elseif ( is_page() ) {
		$items[] = gso_breadcrumb_list_item( $pos, get_the_title( get_queried_object_id() ), get_permalink( get_queried_object_id() ) );
	} elseif ( is_single() ) {
		$items[] = gso_breadcrumb_list_item( $pos, get_the_title( get_queried_object_id() ), get_permalink( get_queried_object_id() ) );
	} else {
		return [];
	}

	return [
		'@context'        => 'https://schema.org',
		'@type'           => 'BreadcrumbList',
		'itemListElement' => $items,
	];
}

function gso_json_ld_items() {
	$social_links = array_map(
		function ( $item ) {
			return $item['url'];
		},
		gso_social_links()
	);

	$organization = [
		'@context' => 'https://schema.org',
		'@type'    => 'Organization',
		'name'     => gso_get_setting( 'company_name' ),
		'url'      => home_url( '/' ),
		'telephone'=> gso_get_setting( 'tel' ),
		'email'    => gso_get_setting( 'email' ),
		'logo'     => gso_asset_url( 'assets/favicon.svg' ),
		'address'  => [
			'@type'           => 'PostalAddress',
			'postalCode'      => gso_get_setting( 'zipcode' ),
			'streetAddress'   => gso_get_setting( 'address' ),
			'addressCountry'  => 'JP',
		],
	];

	if ( ! empty( $social_links ) ) {
		$organization['sameAs'] = array_values( $social_links );
	}

	$items = [ $organization ];

	if ( is_page( 'services' ) ) {
		$items[] = [
			'@context'    => 'https://schema.org',
			'@type'       => 'Service',
			'name'        => 'Web制作・UI改善支援',
			'description' => gso_get_setting( 'business' ),
			'url'         => gso_page_url( 'services' ),
			'areaServed'  => 'JP',
			'provider'    => [
				'@type' => 'Organization',
				'name'  => gso_get_setting( 'company_name' ),
				'url'   => home_url( '/' ),
			],
			];
		}

	$breadcrumb = gso_breadcrumb_json_ld();
	if ( ! empty( $breadcrumb ) ) {
		$items[] = $breadcrumb;
	}

	return $items;
}

function gso_seo_context() {
	$site_name = get_bloginfo( 'name' );

	$meta = [
		'title'       => 'WordPressテーマ作成 | ' . $site_name,
		'description' => gso_get_setting( 'seo_default_description' ),
		'og_type'     => 'website',
	];

	if ( is_front_page() ) {
		$meta['title']       = 'Home | WordPressテーマ作成';
		$meta['description'] = '採用担当者にUI/実装力を示すための、企業サイト向けオリジナルテーマのトップページです。';
	} elseif ( is_singular( 'gso_work' ) ) {
		$post_id = get_queried_object_id();
		$meta['title']       = get_the_title( $post_id ) . ' | Works | WordPressテーマ作成';
		$meta['description'] = gso_get_work_summary( $post_id, 120 );
		$meta['og_type']     = 'article';
	} elseif ( is_page( 'services' ) ) {
		$meta['title']       = 'Services | WordPressテーマ作成';
		$meta['description'] = '提供サービス・進め方・対応範囲を整理したServicesページです。';
		$meta['og_type']     = 'article';
	} elseif ( is_page( 'works' ) ) {
		$meta['title']       = 'Works | WordPressテーマ作成';
		$meta['description'] = '制作実績を成果指標付きで提示するWorksページです。';
		$meta['og_type']     = 'article';
	} elseif ( is_page( 'about' ) ) {
		$meta['title']       = 'About | WordPressテーマ作成';
		$meta['description'] = '企業理念・メッセージ・会社情報を掲載したAboutページです。';
		$meta['og_type']     = 'article';
	} elseif ( is_page( 'contact' ) ) {
		$meta['title']       = 'Contact | WordPressテーマ作成';
		$meta['description'] = '問い合わせ導線のみを提供するContactページです。';
		$meta['og_type']     = 'article';
	}

	return $meta;
}

add_filter(
	'pre_get_document_title',
	function ( $title ) {
		if ( is_admin() ) {
			return $title;
		}

		$meta = gso_seo_context();
		return $meta['title'];
	}
);

add_action(
	'wp_head',
	function () {
		if ( is_admin() ) {
			return;
		}

		$meta        = gso_seo_context();
		$current_url = gso_current_canonical_url();
		$og_image    = gso_current_og_image_url();
		$favicon     = gso_asset_url( 'assets/favicon.svg' );
		$ga4_id      = trim( (string) gso_get_setting( 'ga4_measurement_id' ) );
		$consent_v2  = gso_is_consent_mode_enabled();

		if ( '' !== $ga4_id ) {
			echo '<script async src="https://www.googletagmanager.com/gtag/js?id=' . esc_attr( $ga4_id ) . '"></script>' . "\n";
			$ga_inline = "window.dataLayer=window.dataLayer||[];function gtag(){dataLayer.push(arguments);}window.gtag=window.gtag||gtag;gtag('js',new Date());";
			if ( $consent_v2 ) {
				$ga_inline .= "gtag('consent','default',{ad_storage:'denied',analytics_storage:'denied',ad_user_data:'denied',ad_personalization:'denied',wait_for_update:500});";
			}
			$ga_inline .= "gtag('config','" . esc_js( $ga4_id ) . "',{anonymize_ip:true});";
			echo '<script>' . $ga_inline . '</script>' . "\n";
		}

		echo '<link rel="canonical" href="' . esc_url( $current_url ) . '">' . "\n";
		if ( gso_should_noindex() ) {
			echo '<meta name="robots" content="noindex,nofollow">' . "\n";
		}
		echo '<meta name="description" content="' . esc_attr( $meta['description'] ) . '">' . "\n";
		echo '<meta property="og:site_name" content="' . esc_attr( get_bloginfo( 'name' ) ) . '">' . "\n";
		echo '<meta property="og:title" content="' . esc_attr( $meta['title'] ) . '">' . "\n";
		echo '<meta property="og:description" content="' . esc_attr( $meta['description'] ) . '">' . "\n";
		echo '<meta property="og:type" content="' . esc_attr( $meta['og_type'] ) . '">' . "\n";
		echo '<meta property="og:url" content="' . esc_url( $current_url ) . '">' . "\n";
		echo '<meta property="og:image" content="' . esc_url( $og_image ) . '">' . "\n";
		echo '<meta property="og:image:width" content="1200">' . "\n";
		echo '<meta property="og:image:height" content="630">' . "\n";
		echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
		echo '<meta name="twitter:title" content="' . esc_attr( $meta['title'] ) . '">' . "\n";
		echo '<meta name="twitter:description" content="' . esc_attr( $meta['description'] ) . '">' . "\n";
		echo '<meta name="twitter:image" content="' . esc_url( $og_image ) . '">' . "\n";

		if ( is_singular( 'gso_work' ) ) {
			$work_id = get_queried_object_id();
			echo '<meta property="article:published_time" content="' . esc_attr( get_the_date( DATE_W3C, $work_id ) ) . '">' . "\n";
			echo '<meta property="article:modified_time" content="' . esc_attr( get_the_modified_date( DATE_W3C, $work_id ) ) . '">' . "\n";
		}

		foreach ( gso_json_ld_items() as $item ) {
			echo '<script type="application/ld+json">' . wp_json_encode( $item, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ) . '</script>' . "\n";
		}

		echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $favicon ) . '">' . "\n";
		echo '<link rel="shortcut icon" href="' . esc_url( $favicon ) . '">' . "\n";
		echo '<link rel="apple-touch-icon" href="' . esc_url( $favicon ) . '">' . "\n";
	},
	2
);

add_action(
	'wp_footer',
	function () {
		if ( is_admin() ) {
			return;
		}
		$require_consent = gso_is_consent_mode_enabled() ? 'true' : 'false';
		?>
		<script>
		(function () {
			var requireConsent = <?php echo $require_consent; ?>;

			function hasAnalyticsConsent() {
				if (!requireConsent) return true;
				if (typeof window.gsoHasAnalyticsConsent === 'function') {
					return !!window.gsoHasAnalyticsConsent();
				}
				return false;
			}

			function resolveMethod(anchor) {
				var href = anchor.getAttribute('href') || '';
				if (href.indexOf('mailto:') === 0) return 'email';
				if (href.indexOf('tel:') === 0) return 'phone';
				try {
					var u = new URL(href, window.location.origin);
					var path = (u.pathname || '').replace(/\/+$/, '');
					if (path === '/contact') return 'contact_page';
				} catch (e) {}
				return anchor.dataset.gsoTrack || '';
			}

			document.addEventListener('click', function (event) {
				var anchor = event.target.closest('a[href]');
				if (!anchor) return;

				var method = resolveMethod(anchor);
				if (!method) return;
				if (!hasAnalyticsConsent()) return;

				var href = anchor.getAttribute('href') || '';
				if (typeof window.gtag === 'function') {
					window.gtag('event', 'generate_lead', {
						method: method,
						link_url: href
					});
				}

				window.dataLayer = window.dataLayer || [];
				window.dataLayer.push({
					event: 'gso_contact_click',
					method: method,
					href: href
				});
			}, { passive: true });
		})();
		</script>
		<?php
	},
	99
);

/* ----------------------------------------------------------
 * Admin onboarding notice
 * ---------------------------------------------------------- */
add_action(
	'admin_notices',
	function () {
		$screen = get_current_screen();
		if ( ! $screen || 'dashboard' !== $screen->base ) {
			return;
		}

		if ( ! gso_is_works_enabled() ) {
			return;
		}

		$works_count = wp_count_posts( 'gso_work' );
		$published   = $works_count && isset( $works_count->publish ) ? (int) $works_count->publish : 0;

		if ( $published > 0 ) {
			return;
		}

		echo '<div class="notice notice-warning is-dismissible"><p><strong>Gap Smileテーマ:</strong> Worksがまだありません。<a href="' . esc_url( admin_url( 'post-new.php?post_type=gso_work' ) ) . '">最初のWorkを追加</a> するとHome/Worksに表示されます。</p></div>';
	}
);

/* ----------------------------------------------------------
 * Extra beginner accelerator features (1-8)
 * ---------------------------------------------------------- */
function gso_user_can_manage_theme() {
	return current_user_can( 'edit_theme_options' ) || current_user_can( 'gso_manage_theme' );
}

function gso_register_beginner_role() {
	$caps = [
		'read'                 => true,
		'upload_files'         => true,
		'edit_posts'           => true,
		'edit_published_posts' => true,
		'publish_posts'        => true,
		'edit_pages'           => true,
		'edit_published_pages' => true,
		'publish_pages'        => true,
		'gso_manage_theme'     => true,
	];

	$role = get_role( 'gso_editor' );
	if ( ! $role ) {
		$role = add_role( 'gso_editor', 'GSO Editor', $caps );
	}

	if ( $role ) {
		foreach ( $caps as $cap => $grant ) {
			if ( $grant && ! $role->has_cap( $cap ) ) {
				$role->add_cap( $cap );
			}
		}
	}

	$admin = get_role( 'administrator' );
	if ( $admin && ! $admin->has_cap( 'gso_manage_theme' ) ) {
		$admin->add_cap( 'gso_manage_theme' );
	}
}
add_action( 'after_switch_theme', 'gso_register_beginner_role' );
add_action( 'init', 'gso_register_beginner_role' );

add_action(
	'admin_menu',
	function () {
		add_menu_page(
			'Gap Smile運用',
			'Gap Smile運用',
			'gso_manage_theme',
			'gso-theme-settings',
			'gso_render_theme_settings_page',
			'dashicons-admin-generic',
			58
		);

		add_submenu_page(
			'gso-theme-settings',
			'テーマ設定',
			'テーマ設定',
			'gso_manage_theme',
			'gso-theme-settings',
			'gso_render_theme_settings_page'
		);

		add_submenu_page(
			'gso-theme-settings',
			'初期セットアップ',
			'初期セットアップ',
			'gso_manage_theme',
			'gso-setup-wizard',
			'gso_render_setup_wizard_page'
		);
	}
);

function gso_ensure_page( $slug, $title, $content = '' ) {
	$page = get_page_by_path( $slug );
	if ( $page instanceof WP_Post ) {
		return (int) $page->ID;
	}

	$page_id = wp_insert_post(
		[
			'post_type'    => 'page',
			'post_status'  => 'publish',
			'post_title'   => $title,
			'post_content' => $content,
			'post_name'    => $slug,
		],
		true
	);

	if ( is_wp_error( $page_id ) ) {
		return 0;
	}

	return (int) $page_id;
}

function gso_ensure_menu_with_pages( $menu_name, $location, $page_ids ) {
	$locations = get_nav_menu_locations();
	$menu_id   = isset( $locations[ $location ] ) ? (int) $locations[ $location ] : 0;

	if ( ! $menu_id ) {
		$menu_obj = wp_get_nav_menu_object( $menu_name );
		if ( $menu_obj ) {
			$menu_id = (int) $menu_obj->term_id;
		} else {
			$menu_id = (int) wp_create_nav_menu( $menu_name );
		}
	}

	if ( ! $menu_id ) {
		return;
	}

	$existing_items = wp_get_nav_menu_items( $menu_id );
	$existing_ids   = [];
	if ( $existing_items ) {
		foreach ( $existing_items as $item ) {
			$existing_ids[] = (int) $item->object_id;
		}
	}

	foreach ( $page_ids as $page_id ) {
		if ( ! $page_id || in_array( (int) $page_id, $existing_ids, true ) ) {
			continue;
		}

		wp_update_nav_menu_item(
			$menu_id,
			0,
			[
				'menu-item-object-id' => (int) $page_id,
				'menu-item-object'    => 'page',
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
			]
		);
	}

	$locations[ $location ] = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

function gso_remove_page_from_menu_location( $location, $slug ) {
	$page = get_page_by_path( $slug );
	if ( ! ( $page instanceof WP_Post ) ) {
		return;
	}

	$locations = get_nav_menu_locations();
	$menu_id   = isset( $locations[ $location ] ) ? (int) $locations[ $location ] : 0;
	if ( ! $menu_id ) {
		return;
	}

	$items = wp_get_nav_menu_items( $menu_id );
	if ( empty( $items ) ) {
		return;
	}

	foreach ( $items as $item ) {
		if ( (int) $item->object_id === (int) $page->ID ) {
			wp_delete_post( (int) $item->ID, true );
		}
	}
}

function gso_sync_works_page_visibility( $old_value, $new_value ) {
	if ( ! is_array( $old_value ) ) {
		$old_value = [];
	}
	if ( ! is_array( $new_value ) ) {
		$new_value = [];
	}

	$old_enabled = isset( $old_value['enable_works'] ) && '1' === (string) $old_value['enable_works'];
	$new_enabled = isset( $new_value['enable_works'] ) && '1' === (string) $new_value['enable_works'];

	if ( $old_enabled === $new_enabled ) {
		return;
	}

	if ( $new_enabled ) {
		$works_page = get_page_by_path( 'works' );
		if ( $works_page instanceof WP_Post ) {
			gso_ensure_menu_with_pages( 'Gap Smile Primary', 'primary', [ (int) $works_page->ID ] );
			gso_ensure_menu_with_pages( 'Gap Smile Footer', 'footer', [ (int) $works_page->ID ] );
		}
	} else {
		gso_remove_page_from_menu_location( 'primary', 'works' );
		gso_remove_page_from_menu_location( 'footer', 'works' );
	}
}
add_action( 'update_option_gso_theme_settings', 'gso_sync_works_page_visibility', 10, 2 );

function gso_get_setup_status() {
	$page_slugs = [ 'home', 'services', 'about', 'contact' ];
	$pages      = [];
	foreach ( $page_slugs as $slug ) {
		$pages[ $slug ] = get_page_by_path( $slug );
	}
	$works_page = get_page_by_path( 'works' );

	$works_count = wp_count_posts( 'gso_work' );
	$works_total = $works_count && isset( $works_count->publish ) ? (int) $works_count->publish : 0;

	$locations = get_nav_menu_locations();

	return [
		'pages'         => $pages,
		'front_page'    => (int) get_option( 'page_on_front' ),
		'show_on_front' => (string) get_option( 'show_on_front' ),
		'primary_menu'  => ! empty( $locations['primary'] ),
		'footer_menu'   => ! empty( $locations['footer'] ),
		'works_enabled' => gso_is_works_enabled(),
		'works_page'    => $works_page instanceof WP_Post,
		'works_total'   => $works_total,
	];
}

add_action(
	'admin_post_gso_run_setup',
	function () {
		if ( ! gso_user_can_manage_theme() ) {
			wp_die( 'Permission denied.' );
		}

		check_admin_referer( 'gso_run_setup' );

		$home_id     = gso_ensure_page( 'home', 'Home', '<!-- wp:paragraph --><p>Homeページの内容を編集してください。</p><!-- /wp:paragraph -->' );
		$services_id = gso_ensure_page( 'services', 'Services', '<!-- wp:paragraph --><p>Servicesページの内容を編集してください。</p><!-- /wp:paragraph -->' );
		$about_id    = gso_ensure_page( 'about', 'About', '<!-- wp:paragraph --><p>Aboutページの内容を編集してください。</p><!-- /wp:paragraph -->' );
		$contact_id  = gso_ensure_page( 'contact', 'Contact', '<!-- wp:paragraph --><p>Contactページの内容を編集してください。</p><!-- /wp:paragraph -->' );
		$works_id    = 0;
		if ( gso_is_works_enabled() ) {
			$works_id = gso_ensure_page( 'works', 'Works', '<!-- wp:paragraph --><p>Worksページの内容はテーマ側で表示されます。</p><!-- /wp:paragraph -->' );
		}

		$page_ids = array_filter( [ $home_id, $services_id, $about_id, $contact_id, $works_id ] );
		if ( ! empty( $page_ids ) ) {
			gso_ensure_menu_with_pages( 'Gap Smile Primary', 'primary', $page_ids );
			gso_ensure_menu_with_pages( 'Gap Smile Footer', 'footer', $page_ids );
			if ( ! gso_is_works_enabled() ) {
				gso_remove_page_from_menu_location( 'primary', 'works' );
				gso_remove_page_from_menu_location( 'footer', 'works' );
			}
		}

		if ( $home_id ) {
			update_option( 'show_on_front', 'page' );
			update_option( 'page_on_front', $home_id );
		}

		$works_count = wp_count_posts( 'gso_work' );
		$works_total = $works_count && isset( $works_count->publish ) ? (int) $works_count->publish : 0;
		if ( gso_is_works_enabled() && 0 === $works_total ) {
			$sample_id = wp_insert_post(
				[
					'post_type'    => 'gso_work',
					'post_status'  => 'draft',
					'post_title'   => 'サンプル実績（編集して公開）',
					'post_content' => '課題 / 対応内容 / 成果を3段落で入力すると、採用担当が読みやすくなります。',
					'post_excerpt' => '採用導線の改善を目的に、情報設計とUIを再構築した案件。',
				]
			);

			if ( $sample_id && ! is_wp_error( $sample_id ) ) {
				update_post_meta( $sample_id, gso_get_work_meta_key( 'category' ), '採用サイト' );
				update_post_meta( $sample_id, gso_get_work_meta_key( 'result' ), 'CVR 1.4倍' );
				update_post_meta( $sample_id, gso_get_work_meta_key( 'tech' ), 'WordPress / PHP / CSS' );
				update_post_meta( $sample_id, gso_get_work_meta_key( 'client' ), 'BtoB企業' );
			}
		}

		flush_rewrite_rules( false );

		set_transient(
			'gso_setup_result_' . get_current_user_id(),
			[
				'home_id'     => $home_id,
				'services_id' => $services_id,
				'works_id'    => $works_id,
				'about_id'    => $about_id,
				'contact_id'  => $contact_id,
			],
			120
		);

		wp_safe_redirect( admin_url( 'admin.php?page=gso-setup-wizard&gso_setup=done' ) );
		exit;
	}
);

function gso_render_setup_wizard_page() {
	if ( ! gso_user_can_manage_theme() ) {
		return;
	}

	$status = gso_get_setup_status();
	$result = get_transient( 'gso_setup_result_' . get_current_user_id() );
	if ( $result ) {
		delete_transient( 'gso_setup_result_' . get_current_user_id() );
	}
	?>
	<div class="wrap">
		<h1>Gap Smile 初期セットアップ</h1>
		<p>初心者向けに、必須ページ作成・フロントページ設定・メニュー設定を1クリックで実行します。</p>

		<?php if ( isset( $_GET['gso_setup'] ) && 'done' === $_GET['gso_setup'] ) : ?>
			<div class="notice notice-success"><p>初期セットアップを実行しました。必要に応じてページ文言を編集してください。</p></div>
		<?php endif; ?>

		<table class="widefat striped" style="max-width:860px; margin-top:16px;">
			<tbody>
				<tr><th>Home/Services/About/Contactページ</th><td><?php echo ( $status['pages']['home'] && $status['pages']['services'] && $status['pages']['about'] && $status['pages']['contact'] ) ? '作成済み' : '未作成あり'; ?></td></tr>
				<tr><th>フロントページ設定</th><td><?php echo ( 'page' === $status['show_on_front'] && ! empty( $status['front_page'] ) ) ? '設定済み' : '未設定'; ?></td></tr>
				<tr><th>Primaryメニュー</th><td><?php echo $status['primary_menu'] ? '設定済み' : '未設定'; ?></td></tr>
				<tr><th>Footerメニュー</th><td><?php echo $status['footer_menu'] ? '設定済み' : '未設定'; ?></td></tr>
				<tr><th>Worksページ（任意）</th><td><?php echo $status['works_enabled'] ? ( $status['works_page'] ? '有効・作成済み' : '有効・未作成' ) : '無効（テーマ設定でOFF）'; ?></td></tr>
				<tr><th>公開Works件数（任意）</th><td><?php echo esc_html( (string) $status['works_total'] ); ?> 件</td></tr>
			</tbody>
		</table>

		<form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>" style="margin-top:16px;">
			<input type="hidden" name="action" value="gso_run_setup">
			<?php wp_nonce_field( 'gso_run_setup' ); ?>
			<?php submit_button( '初期セットアップを実行', 'primary', 'submit', false ); ?>
		</form>
	</div>
	<?php
}

add_action(
	'admin_enqueue_scripts',
	function ( $hook ) {
		$screen = get_current_screen();
		if ( ! $screen ) {
			return;
		}

		$enable = false;
		if ( 'post' === $screen->base && in_array( $screen->post_type, [ 'page', 'post', 'gso_work' ], true ) ) {
			$enable = true;
		}

		if ( false !== strpos( $hook, 'gso-theme-settings' ) || false !== strpos( $hook, 'gso-setup-wizard' ) ) {
			$enable = true;
		}

		if ( ! $enable ) {
			return;
		}

		$js_path  = get_theme_file_path( 'assets/admin.js' );
		$css_path = get_theme_file_path( 'assets/admin.css' );
		$version  = file_exists( $js_path ) ? (string) filemtime( $js_path ) : '1.0.0';

		wp_enqueue_style(
			'gso-admin',
			gso_asset_url( 'assets/admin.css' ),
			[],
			file_exists( $css_path ) ? (string) filemtime( $css_path ) : $version
		);

		wp_enqueue_script( 'gso-admin', gso_asset_url( 'assets/admin.js' ), [ 'jquery' ], $version, true );
		wp_localize_script(
			'gso-admin',
			'gsoAdmin',
			[
				'postType'  => (string) $screen->post_type,
				'templates' => [
					'hero' => '<h2>セクション見出し</h2><p>このセクションの目的と要点を2〜3文で記載します。</p>',
					'works' => '<h3>課題</h3><p>課題を記載。</p><h3>対応内容</h3><p>対応内容を記載。</p><h3>成果</h3><p>成果を記載。</p>',
					'cta' => '<h2>お問い合わせはこちら</h2><p>相談内容と希望納期を添えてご連絡ください。</p>',
				],
					'messages'  => [
						'imageOk'     => '画像比率は推奨（16:10）です。',
						'imageWarn'   => '画像比率が推奨の16:10と異なります。重要要素がトリミングされる可能性があります。',
						'imageMissing'=> 'アイキャッチ未設定時はデフォルト画像を表示します。',
						'imageSizeOk' => '画像解像度は推奨値を満たしています。',
						'imageSizeWarn' => '画像解像度が推奨値（1600x1000px）を下回っています。',
					],
					'thresholds' => [
						'minWidth'  => 1600,
						'minHeight' => 1000,
					],
				]
			);
	}
);

add_action(
	'add_meta_boxes',
	function () {
		$post_types = [ 'page', 'post', 'gso_work' ];
		foreach ( $post_types as $post_type ) {
			add_meta_box(
				'gso-template-insert',
				'編集テンプレート挿入',
				'gso_render_template_insert_metabox',
				$post_type,
				'side',
				'default'
			);

			add_meta_box(
				'gso-restore-points',
				'復元ポイント',
				'gso_render_restore_points_metabox',
				$post_type,
				'side',
				'default'
			);
		}
	}
);

function gso_render_template_insert_metabox() {
	echo '<p>本文にテンプレートを素早く挿入できます。</p>';
	echo '<p><button type="button" class="button gso-template-insert-btn" data-gso-template="hero">Hero文面</button></p>';
	if ( gso_is_works_enabled() ) {
		echo '<p><button type="button" class="button gso-template-insert-btn" data-gso-template="works">Works詳細</button></p>';
	}
	echo '<p><button type="button" class="button gso-template-insert-btn" data-gso-template="cta">CTA</button></p>';
	echo '<p class="description">クリックすると本文末尾に追記されます。</p>';
}

function gso_get_restore_points( $post_id ) {
	$snapshots = get_post_meta( $post_id, '_gso_restore_points', true );
	if ( ! is_array( $snapshots ) ) {
		return [];
	}

	return $snapshots;
}

function gso_save_restore_point( $post_id, $label = '' ) {
	$post = get_post( $post_id );
	if ( ! $post ) {
		return false;
	}

	$snapshot = [
		'id'           => wp_generate_uuid4(),
		'label'        => $label,
		'created_at'   => current_time( 'mysql' ),
		'user_id'      => get_current_user_id(),
		'post_title'   => $post->post_title,
		'post_content' => $post->post_content,
		'post_excerpt' => $post->post_excerpt,
		'thumbnail_id' => (int) get_post_thumbnail_id( $post_id ),
		'work_meta'    => [],
	];

	if ( 'gso_work' === $post->post_type ) {
		foreach ( array_keys( gso_work_field_schema() ) as $field ) {
			$snapshot['work_meta'][ $field ] = gso_get_work_meta( $post_id, $field );
		}
	}

	$snapshots   = gso_get_restore_points( $post_id );
	$snapshots[] = $snapshot;
	if ( count( $snapshots ) > 10 ) {
		$snapshots = array_slice( $snapshots, -10 );
	}

	update_post_meta( $post_id, '_gso_restore_points', array_values( $snapshots ) );
	return $snapshot['id'];
}

function gso_find_restore_point( $post_id, $snapshot_id ) {
	foreach ( gso_get_restore_points( $post_id ) as $snapshot ) {
		if ( isset( $snapshot['id'] ) && $snapshot_id === $snapshot['id'] ) {
			return $snapshot;
		}
	}

	return null;
}

function gso_render_restore_points_metabox( $post ) {
	$create_url = wp_nonce_url(
		admin_url( 'admin-post.php?action=gso_create_snapshot&post_id=' . (int) $post->ID ),
		'gso_create_snapshot_' . (int) $post->ID
	);

	echo '<p><a class="button button-secondary" href="' . esc_url( $create_url ) . '">現在の内容を保存</a></p>';
	echo '<p class="description">最大10件まで保存。復元すると内容が上書きされます。</p>';

	$snapshots = array_reverse( gso_get_restore_points( $post->ID ) );
	if ( empty( $snapshots ) ) {
		echo '<p class="description">まだ復元ポイントはありません。</p>';
		return;
	}

	echo '<ul class="gso-restore-list">';
	foreach ( $snapshots as $snapshot ) {
		$restore_url = wp_nonce_url(
			admin_url( 'admin-post.php?action=gso_restore_snapshot&post_id=' . (int) $post->ID . '&snapshot_id=' . rawurlencode( (string) $snapshot['id'] ) ),
			'gso_restore_snapshot_' . (int) $post->ID . '_' . (string) $snapshot['id']
		);

		$label = ! empty( $snapshot['label'] ) ? $snapshot['label'] : '手動保存';
		echo '<li>';
		echo '<span>' . esc_html( $snapshot['created_at'] ) . ' / ' . esc_html( $label ) . '</span> ';
		echo '<a href="' . esc_url( $restore_url ) . '">復元</a>';
		echo '</li>';
	}
	echo '</ul>';
}

add_action(
	'admin_post_gso_create_snapshot',
	function () {
		$post_id = isset( $_GET['post_id'] ) ? (int) $_GET['post_id'] : 0;
		if ( ! $post_id || ! current_user_can( 'edit_post', $post_id ) ) {
			wp_die( 'Permission denied.' );
		}

		check_admin_referer( 'gso_create_snapshot_' . $post_id );
		gso_save_restore_point( $post_id, '手動保存' );

		wp_safe_redirect( add_query_arg( 'gso_snapshot', 'created', get_edit_post_link( $post_id, 'url' ) ) );
		exit;
	}
);

add_action(
	'admin_post_gso_restore_snapshot',
	function () {
		$post_id      = isset( $_GET['post_id'] ) ? (int) $_GET['post_id'] : 0;
		$snapshot_id  = isset( $_GET['snapshot_id'] ) ? sanitize_text_field( wp_unslash( $_GET['snapshot_id'] ) ) : '';
		if ( ! $post_id || '' === $snapshot_id || ! current_user_can( 'edit_post', $post_id ) ) {
			wp_die( 'Permission denied.' );
		}

		check_admin_referer( 'gso_restore_snapshot_' . $post_id . '_' . $snapshot_id );

		$snapshot = gso_find_restore_point( $post_id, $snapshot_id );
		if ( ! $snapshot ) {
			wp_safe_redirect( add_query_arg( 'gso_snapshot', 'missing', get_edit_post_link( $post_id, 'url' ) ) );
			exit;
		}

		gso_save_restore_point( $post_id, '復元前の自動保存' );

		wp_update_post(
			[
				'ID'           => $post_id,
				'post_title'   => (string) $snapshot['post_title'],
				'post_content' => (string) $snapshot['post_content'],
				'post_excerpt' => (string) $snapshot['post_excerpt'],
			]
		);

		if ( isset( $snapshot['thumbnail_id'] ) ) {
			set_post_thumbnail( $post_id, (int) $snapshot['thumbnail_id'] );
		}

		if ( ! empty( $snapshot['work_meta'] ) && is_array( $snapshot['work_meta'] ) ) {
			foreach ( array_keys( gso_work_field_schema() ) as $field ) {
				$val = isset( $snapshot['work_meta'][ $field ] ) ? sanitize_text_field( (string) $snapshot['work_meta'][ $field ] ) : '';
				update_post_meta( $post_id, gso_get_work_meta_key( $field ), $val );
			}
		}

		wp_safe_redirect( add_query_arg( 'gso_snapshot', 'restored', get_edit_post_link( $post_id, 'url' ) ) );
		exit;
	}
);

add_action(
	'admin_notices',
	function () {
		if ( ! isset( $_GET['gso_snapshot'] ) ) {
			return;
		}

		$state = sanitize_key( wp_unslash( $_GET['gso_snapshot'] ) );
		if ( 'created' === $state ) {
			echo '<div class="notice notice-success is-dismissible"><p>復元ポイントを保存しました。</p></div>';
		} elseif ( 'restored' === $state ) {
			echo '<div class="notice notice-success is-dismissible"><p>復元ポイントから内容を復元しました。</p></div>';
		} elseif ( 'missing' === $state ) {
			echo '<div class="notice notice-error is-dismissible"><p>復元ポイントが見つかりませんでした。</p></div>';
		}
	}
);

function gso_collect_publish_errors( $post_id, $post ) {
	$errors = [];

	if ( ! in_array( $post->post_type, [ 'page', 'post', 'gso_work' ], true ) ) {
		return $errors;
	}

	$content_length = function_exists( 'mb_strlen' )
		? mb_strlen( trim( wp_strip_all_tags( (string) $post->post_content ) ) )
		: strlen( trim( wp_strip_all_tags( (string) $post->post_content ) ) );

	if ( $content_length < 20 ) {
		$errors[] = '本文が短すぎます。20文字以上入力してください。';
	}

	if ( 'gso_work' === $post->post_type ) {
		if ( '' === trim( gso_get_work_meta( $post_id, 'category' ) ) ) {
			$errors[] = 'Worksの「カテゴリ」は必須です。';
		}

		if ( '' === trim( gso_get_work_meta( $post_id, 'result' ) ) ) {
			$errors[] = 'Worksの「成果指標」は必須です。';
		}

		if ( ! has_post_thumbnail( $post_id ) ) {
			$errors[] = 'Worksのアイキャッチ画像を設定してください。';
		}
	}

	if ( 'page' === $post->post_type ) {
		$slug = (string) $post->post_name;

		if ( in_array( $slug, [ 'home', 'about', 'contact' ], true ) && ! get_page_by_path( 'services' ) ) {
			$errors[] = '必須ページのServicesが未作成です。先にServicesページを作成・公開してください。';
		}

		if ( 'contact' === $slug ) {
			if ( '' === trim( gso_get_setting( 'email' ) ) || '' === trim( gso_get_setting( 'tel' ) ) ) {
				$errors[] = 'Contact公開前に、Gap Smile設定でメールアドレスと電話番号を入力してください。';
			}
		}
	}

	return $errors;
}

add_action(
	'save_post',
	function ( $post_id, $post, $update ) {
		static $running = false;

		if ( $running ) {
			return;
		}

		if ( ! ( $post instanceof WP_Post ) ) {
			return;
		}

		if ( wp_is_post_autosave( $post_id ) || wp_is_post_revision( $post_id ) ) {
			return;
		}

		if ( ! in_array( $post->post_status, [ 'publish', 'future' ], true ) ) {
			return;
		}

		$errors = gso_collect_publish_errors( $post_id, $post );
		if ( empty( $errors ) ) {
			return;
		}

		$running = true;
		wp_update_post(
			[
				'ID'          => $post_id,
				'post_status' => 'draft',
			]
		);
		$running = false;

		set_transient(
			'gso_publish_block_' . get_current_user_id(),
			[
				'post_id' => $post_id,
				'errors'  => $errors,
			],
			120
		);
	},
	20,
	3
);

add_action(
	'admin_notices',
	function () {
		$key     = 'gso_publish_block_' . get_current_user_id();
		$payload = get_transient( $key );
		if ( ! $payload || empty( $payload['errors'] ) || ! is_array( $payload['errors'] ) ) {
			return;
		}

		delete_transient( $key );
		echo '<div class="notice notice-error"><p><strong>公開を停止しました。</strong> 以下を修正して再公開してください。</p><ul>';
		foreach ( $payload['errors'] as $err ) {
			echo '<li>' . esc_html( $err ) . '</li>';
		}
		echo '</ul></div>';
	}
);

add_filter(
	'post_row_actions',
	function ( $actions, $post ) {
		if ( ! in_array( $post->post_type, [ 'post', 'gso_work' ], true ) ) {
			return $actions;
		}

		if ( ! current_user_can( 'edit_post', $post->ID ) ) {
			return $actions;
		}

		$url = wp_nonce_url(
			admin_url( 'admin.php?action=gso_duplicate_post&post=' . (int) $post->ID ),
			'gso_duplicate_' . (int) $post->ID
		);
		$actions['gso_duplicate'] = '<a href="' . esc_url( $url ) . '">複製</a>';
		return $actions;
	},
	10,
	2
);

add_filter(
	'page_row_actions',
	function ( $actions, $post ) {
		if ( ! current_user_can( 'edit_post', $post->ID ) ) {
			return $actions;
		}

		$url = wp_nonce_url(
			admin_url( 'admin.php?action=gso_duplicate_post&post=' . (int) $post->ID ),
			'gso_duplicate_' . (int) $post->ID
		);
		$actions['gso_duplicate'] = '<a href="' . esc_url( $url ) . '">複製</a>';
		return $actions;
	},
	10,
	2
);

add_action(
	'admin_action_gso_duplicate_post',
	function () {
		$post_id = isset( $_GET['post'] ) ? (int) $_GET['post'] : 0;
		if ( ! $post_id || ! current_user_can( 'edit_post', $post_id ) ) {
			wp_die( 'Permission denied.' );
		}

		check_admin_referer( 'gso_duplicate_' . $post_id );

		$post = get_post( $post_id );
		if ( ! $post ) {
			wp_die( 'Post not found.' );
		}

		$new_post_id = wp_insert_post(
			[
				'post_type'    => $post->post_type,
				'post_status'  => 'draft',
				'post_title'   => $post->post_title . '（コピー）',
				'post_content' => $post->post_content,
				'post_excerpt' => $post->post_excerpt,
				'post_author'  => get_current_user_id(),
				'post_parent'  => $post->post_parent,
			]
		);

		if ( ! $new_post_id || is_wp_error( $new_post_id ) ) {
			wp_die( 'Duplicate failed.' );
		}

		$meta = get_post_meta( $post_id );
		foreach ( $meta as $meta_key => $values ) {
			if ( in_array( $meta_key, [ '_edit_lock', '_edit_last' ], true ) ) {
				continue;
			}
			foreach ( $values as $value ) {
				add_post_meta( $new_post_id, $meta_key, maybe_unserialize( $value ) );
			}
		}

		$taxonomies = get_object_taxonomies( $post->post_type );
		foreach ( $taxonomies as $taxonomy ) {
			$terms = wp_get_object_terms( $post_id, $taxonomy, [ 'fields' => 'ids' ] );
			if ( ! is_wp_error( $terms ) ) {
				wp_set_object_terms( $new_post_id, $terms, $taxonomy, false );
			}
		}

		if ( has_post_thumbnail( $post_id ) ) {
			set_post_thumbnail( $new_post_id, (int) get_post_thumbnail_id( $post_id ) );
		}

		wp_safe_redirect( add_query_arg( 'gso_duplicate', 'done', get_edit_post_link( $new_post_id, 'url' ) ) );
		exit;
	}
);

add_action(
	'admin_notices',
	function () {
		if ( isset( $_GET['gso_duplicate'] ) && 'done' === $_GET['gso_duplicate'] ) {
			echo '<div class="notice notice-success is-dismissible"><p>下書きを複製しました。</p></div>';
		}
	}
);
