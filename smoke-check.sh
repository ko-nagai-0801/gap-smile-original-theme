#!/usr/bin/env bash
set -euo pipefail

THEME_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
FUNCTIONS_FILE="$THEME_DIR/functions.php"
HEADER_FILE="$THEME_DIR/header.php"
FOOTER_FILE="$THEME_DIR/footer.php"
FRONT_PAGE_FILE="$THEME_DIR/front-page.php"
SERVICES_FILE="$THEME_DIR/page-services.php"
ADMIN_JS_FILE="$THEME_DIR/assets/admin.js"
CONSENT_JS_FILE="$THEME_DIR/assets/consent.js"
BLOCKS_JS_FILE="$THEME_DIR/assets/blocks.js"
LOCAL_PHP="/Applications/Local.app/Contents/Resources/extraResources/lightning-services/php-8.2.27+1/bin/darwin-arm64/bin/php"

if command -v php >/dev/null 2>&1; then
  PHP_BIN="php"
elif [ -x "$LOCAL_PHP" ]; then
  PHP_BIN="$LOCAL_PHP"
else
  echo "PHP binary not found."
  exit 1
fi

if ! command -v rg >/dev/null 2>&1; then
  echo "rg command not found."
  exit 1
fi

check_fixed() {
  local needle="$1"
  local target="$2"
  rg -q -F "$needle" "$target"
}

echo "[1/8] PHP lint"
while IFS= read -r -d '' file; do
  "$PHP_BIN" -l "$file" >/dev/null
done < <(find "$THEME_DIR" -type f -name "*.php" -print0)

echo "[2/8] JS lint"
if command -v node >/dev/null 2>&1; then
  node --check "$ADMIN_JS_FILE"
  node --check "$CONSENT_JS_FILE"
  node --check "$BLOCKS_JS_FILE"
else
  echo "node not found; skip JS lint."
fi

echo "[3/8] A11y and navigation checks"
check_fixed '<a class="gso-skip-link" href="#main-content">' "$HEADER_FILE"
check_fixed 'function gso_is_current_nav_slug( $slug ) {' "$FUNCTIONS_FILE"
check_fixed 'aria-current="page"' "$HEADER_FILE"
check_fixed 'aria-current="page"' "$FOOTER_FILE"

for tpl in \
  "$THEME_DIR/front-page.php" \
  "$THEME_DIR/page-services.php" \
  "$THEME_DIR/page-about.php" \
  "$THEME_DIR/page-contact.php" \
  "$THEME_DIR/page.php" \
  "$THEME_DIR/page-works.php" \
  "$THEME_DIR/index.php" \
  "$THEME_DIR/404.php" \
  "$THEME_DIR/single-gso_work.php"; do
  check_fixed '<main id="main-content"' "$tpl"
done

echo "[4/8] Beginner mode, editable Services, export/import checks"
check_fixed "'operation_mode'" "$FUNCTIONS_FILE"
check_fixed 'function gso_get_operation_mode() {' "$FUNCTIONS_FILE"
check_fixed 'function gso_is_setting_field_visible( $key, $mode = null ) {' "$FUNCTIONS_FILE"
check_fixed 'gso_is_setting_field_visible( $key, $target_mode )' "$FUNCTIONS_FILE"
check_fixed "'services_card_1_title'" "$FUNCTIONS_FILE"
check_fixed "'services_card_2_title'" "$FUNCTIONS_FILE"
check_fixed "'services_card_3_title'" "$FUNCTIONS_FILE"
check_fixed 'function gso_services_cards() {' "$FUNCTIONS_FILE"
check_fixed 'gso_services_cards();' "$FRONT_PAGE_FILE"
check_fixed 'gso_services_cards();' "$SERVICES_FILE"
check_fixed 'gso_export_theme_settings_payload' "$FUNCTIONS_FILE"
check_fixed 'admin_post_gso_export_theme_settings' "$FUNCTIONS_FILE"
check_fixed 'admin_post_gso_import_theme_settings' "$FUNCTIONS_FILE"

echo "[5/8] SEO, tracking, and consent checks"
check_fixed 'function gso_should_noindex() {' "$FUNCTIONS_FILE"
check_fixed 'function gso_breadcrumb_json_ld() {' "$FUNCTIONS_FILE"
check_fixed 'function gso_current_canonical_url() {' "$FUNCTIONS_FILE"
check_fixed 'function gso_current_og_image_url() {' "$FUNCTIONS_FILE"
check_fixed "'ga4_measurement_id'" "$FUNCTIONS_FILE"
check_fixed 'function gso_is_consent_mode_enabled() {' "$FUNCTIONS_FILE"
check_fixed "gtag('consent','default'" "$FUNCTIONS_FILE"
check_fixed "window.gtag('event', 'generate_lead'" "$FUNCTIONS_FILE"
check_fixed 'data-gso-consent-open' "$FOOTER_FILE"

for ogp in \
  "$THEME_DIR/assets/ogp-services.svg" \
  "$THEME_DIR/assets/ogp-about.svg" \
  "$THEME_DIR/assets/ogp-contact.svg" \
  "$THEME_DIR/assets/ogp-works.svg"; do
  [ -f "$ogp" ]
done

echo "[6/8] Custom block checks"
check_fixed "register_block_type(" "$FUNCTIONS_FILE"
check_fixed "'gso/hero'" "$FUNCTIONS_FILE"
check_fixed "'gso/services'" "$FUNCTIONS_FILE"
check_fixed "'gso/cta'" "$FUNCTIONS_FILE"
[ -f "$THEME_DIR/assets/blocks.css" ]
[ -f "$THEME_DIR/assets/blocks.js" ]

echo "[7/8] Works optional and image optimization checks"
check_fixed 'function gso_is_works_enabled() {' "$FUNCTIONS_FILE"
check_fixed 'wp_nav_menu_objects' "$FUNCTIONS_FILE"
check_fixed "remove_menu_page( 'edit.php?post_type=gso_work' );" "$FUNCTIONS_FILE"
check_fixed 'function gso_image_editor_supports_mime( $mime ) {' "$FUNCTIONS_FILE"
check_fixed 'image_editor_output_format' "$FUNCTIONS_FILE"
check_fixed 'wp_handle_upload_prefilter' "$FUNCTIONS_FILE"
check_fixed 'imageSizeWarn' "$ADMIN_JS_FILE"

echo "[8/8] QA automation assets checks"
[ -f "$THEME_DIR/package.json" ]
[ -f "$THEME_DIR/qa/run-quality-checks.sh" ]
[ -f "$THEME_DIR/qa/lighthouse-runner.mjs" ]
[ -f "$THEME_DIR/qa/playwright.config.cjs" ]
[ -f "$THEME_DIR/qa/tests/visual.spec.js" ]
[ -f "$THEME_DIR/qa/tests/a11y.spec.js" ]
[ -f "$THEME_DIR/OPERATIONS.md" ]

if [ "${GSO_RUN_EXTENDED_QA:-0}" = "1" ]; then
  echo "Running extended QA (GSO_RUN_EXTENDED_QA=1)"
  bash "$THEME_DIR/qa/run-quality-checks.sh" --skip-smoke
else
  echo "Extended QA skipped. Set GSO_RUN_EXTENDED_QA=1 to enable."
fi

echo "Smoke check passed."
