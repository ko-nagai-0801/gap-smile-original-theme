# QA Automation Guide

## 実行コマンド
- `bash ./smoke-check.sh`
- `bash ./qa/run-quality-checks.sh`
- `npm run qa:lighthouse`
- `npm run qa:visual`
- `npm run qa:visual:update`

## 環境変数
- `GSO_BASE_URL` を使って対象URLを指定できます。
  - 例: `GSO_BASE_URL=http://gap-smile-geek.local`

## 目的
- Smoke: 実装構造の破壊を即検知
- Lighthouse: パフォーマンス/SEO/アクセシビリティのスコア下限監視
- Playwright Visual: 見た目崩れの差分検知
- Playwright + Axe: 重大アクセシビリティ違反の検知

## 備考
- Visualテスト初回はスナップショットが未作成のため、
  `npm run qa:visual:update` で基準画像を生成してください。
