#!/usr/bin/env bash
set -euo pipefail

THEME_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
BASE_URL="${GSO_BASE_URL:-https://gap-smile-geek.local}"
SKIP_SMOKE=0

cd "$THEME_DIR"

for arg in "$@"; do
	if [ "$arg" = "--skip-smoke" ]; then
		SKIP_SMOKE=1
	fi
done

echo "[QA 1/3] Core smoke checks"
if [ "$SKIP_SMOKE" -eq 0 ]; then
	bash "$THEME_DIR/smoke-check.sh"
else
	echo "skip smoke-check (--skip-smoke)"
fi

echo "[QA 2/3] Lighthouse"
if command -v node >/dev/null 2>&1 && [ -d "$THEME_DIR/node_modules/lighthouse" ] && [ -d "$THEME_DIR/node_modules/chrome-launcher" ]; then
	GSO_BASE_URL="$BASE_URL" node "$THEME_DIR/qa/lighthouse-runner.mjs"
else
	echo "skip lighthouse: install dependencies with npm install"
fi

echo "[QA 3/3] Visual + Axe (Playwright)"
if command -v npx >/dev/null 2>&1 && [ -d "$THEME_DIR/node_modules/@playwright/test" ] && [ -d "$THEME_DIR/node_modules/axe-core" ]; then
	GSO_BASE_URL="$BASE_URL" npx --no-install @playwright/test test --config="$THEME_DIR/qa/playwright.config.cjs"
else
	echo "skip playwright/axe: install dependencies with npm install"
fi

echo "Quality checks finished."
